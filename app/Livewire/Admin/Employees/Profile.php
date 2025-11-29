<?php

namespace App\Livewire\Admin\Employees;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeDocument;
use Livewire\Features\SupportFileUploads\WithFileUploads;

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

    public $newProfileImage;
    public $newDocuments = [];
    public $uploadingDocuments = false;

    public function mount(Employee $employee)
    {
        // Load the employee with documents relationship
        // $this->employee = $employee->load('documents');
        
        // Set the form fields
        $this->employee_name = $employee->employee_name;
        $this->employee_id = $employee->employee_id;
        $this->phone_number = $employee->phone_number;
        $this->address = $employee->address;
        $this->drivers_license_number = $employee->drivers_license_number;
        $this->employeeId = $employee->id;
        $this->employee = Employee::with('documents')->find($this->employeeId);
        $this->loadEmployee();
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

        session()->flash('success', 'Updated successfully.');
    }

    public function updateProfileImage()
    {
        $this->validate([
            'newProfileImage' => 'required|image|max:2048',
        ]);

        $path = $this->newProfileImage->store('employee_profiles', 'public');

        $this->employee->update([
            'profile_image' => $path,
        ]);

        $this->newProfileImage = null;

        session()->flash('success', 'Profile image updated.');
    }

    public function uploadDocuments()
    {
        $this->validate([
            'newDocuments.*' => 'required|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
        ]);

        foreach ($this->newDocuments as $document) {
            $path = $document->store('employee_documents', 'public');

            $this->employee->documents()->create([
                'file_path' => $path,
                'original_name' => $document->getClientOriginalName(),
                'file_size' => $document->getSize(),
            ]);
        }

        // IMPORTANT: Refresh the employee with documents
        $this->employee->refresh();
        $this->employee->load('documents');

        $this->newDocuments = [];
        $this->uploadingDocuments = false;

        session()->flash('success', 'Documents uploaded successfully.');
    }

    public function deleteDocument($id)
    {
        $doc = $this->employee->documents()->findOrFail($id);

        // Optional: Delete the physical file from storage
        // Storage::disk('public')->delete($doc->file_path);

        $doc->delete();

        // Reload the relationship
        $this->employee->load('documents');

        session()->flash('success', 'Document deleted successfully.');
    }

    public function loadEmployee()
    {
        $this->employee = Employee::with('documents')->find($this->employeeId);

        // If employee not found, you might want to handle this case
        if (!$this->employee) {
            abort(404, 'Employee not found');
        }
    }

    public function render()
    {
        return view('livewire.admin.employees.profile');
    }
}
