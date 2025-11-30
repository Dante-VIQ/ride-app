<?php

namespace App\Livewire\Admin\Employees;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeDocument;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Profile extends Component
{
    use WithFileUploads;

    public $employee, $employeeId;
    public $employee_name;
    public $employee_id;
    public $phone_number;
    public $address;
    public $drivers_license_number;
    public $editingField = null;
    public $documents;
    public $newProfileImage;
    public $newDocuments = [];
    public $uploadingDocuments = false;
    public $profile_image;
    public function mount($employeeId)
    {
        $this->employeeId = $employeeId;
        $this->loadEmployeeData();
    }

    /**
     * Load all employee data including documents
     */
    public function loadEmployeeData()
    {
        // Load employee with documents relationship
        $this->employee = Employee::with('documents')->findOrFail($this->employeeId);

        // Load documents separately
        $this->documents = EmployeeDocument::where('employee_id', $this->employeeId)->get();

        // Populate the form fields with employee data
        $this->employee_name = $this->employee->employee_name;
        $this->employee_id = $this->employee->employee_id;
        $this->phone_number = $this->employee->phone_number;
        $this->address = $this->employee->address;
        $this->drivers_license_number = $this->employee->drivers_license_number;
        $this->profile_image = $this->employee->profile_image;
    }

    public function getDocumentsProperty()
    {
        return $this->employee->documents ?? collect();
    }

    public function enableEdit($field)
    {
        $this->editingField = $field;
    }

    public function updateField()
    {
        $field = $this->editingField;

        // Validate only the field being edited
        $this->validate([
            $field => 'nullable|string|max:255',
        ]);

        $this->employee->update([
            $field => $this->$field,
        ]);

        $this->editingField = null;
        $this->loadEmployeeData();
        session()->flash('success', 'Updated successfully.');
    }

    public function updateProfileImage()
    {
        $this->validate([
            'newProfileImage' => 'required|image|max:2048',
        ]);

        // Delete old profile image if exists
        if ($this->employee->profile_image && file_exists(public_path($this->employee->profile_image))) {
            unlink(public_path($this->employee->profile_image));
        }

        // Store new image in public folder
        $path = $this->newProfileImage->store('employee_profiles', 'public_direct');
        $imagePath = 'uploads/' . $path;

        $this->employee->update([
            'profile_image' => $imagePath,
        ]);

        $this->newProfileImage = null;
        $this->loadEmployeeData();
        session()->flash('success', 'Profile image updated.');
    }

    public function uploadDocuments()
    {
        $this->validate([
            'newDocuments.*' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
        ]);

        foreach ($this->newDocuments as $document) {
            $path = $document->store('employee_documents', 'public_direct');
            $filePath = 'uploads/' . $path;

            $this->employee->documents()->create([
                'file_path' => $filePath,
                'original_name' => $document->getClientOriginalName(),
                'file_size' => $document->getSize(),
            ]);
        }

        // Refresh the employee with documents
        $this->loadEmployeeData();
        $this->newDocuments = [];

        session()->flash('success', 'Documents uploaded successfully.');
    }

    public function deleteDocument($documentId)
    {
        $document = EmployeeDocument::findOrFail($documentId);

        // Delete physical file
        if ($document->file_path && file_exists(public_path($document->file_path))) {
            unlink(public_path($document->file_path));
        }

        $document->delete();

        // Refresh the documents
        $this->loadEmployeeData();

        session()->flash('success', 'Document deleted successfully.');
    }
    public function deleteEmployee()
    {
        $employee = Employee::with('documents')->findOrFail($this->employeeId);

        // Delete profile image
        if ($employee->profile_image && file_exists(public_path($employee->profile_image))) {
            unlink(public_path($employee->profile_image));
        }

        // Delete all documents
        foreach ($employee->documents as $document) {
            if ($document->file_path && file_exists(public_path($document->file_path))) {
                unlink(public_path($document->file_path));
            }
            $document->delete();
        }

        $employee->delete();

        session()->flash('success', 'Employee deleted successfully.');
        return redirect()->route('employees.index');
    }
    public function render()
    {
        return view('livewire.admin.employees.profile');
    }
}
