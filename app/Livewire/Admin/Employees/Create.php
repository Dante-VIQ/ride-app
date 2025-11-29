<?php

namespace App\Livewire\Admin\Employees;

use Livewire\Component;
use App\Models\Employee;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $employee_name;
    public $employee_id;
    public $phone_number;
    public $drivers_license_number;
    public $address;

    public $profile_image;
    public $documents = [];

    public function rules()
    {
        return [
            'employee_name' => 'required|string|max:255',
            'employee_id' => 'required|string|max:50|unique:employees,employee_id',
            'phone_number' => 'required|string|max:20',
            'drivers_license_number' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:255',
            'profile_image' => 'nullable|sometimes|image|max:20480',
            'documents.*' => 'nullable|mimes:pdf,doc,docx|max:10240',
        ];
    }

    public function save()
    {
        $this->validate([
            'employee_name' => 'required|string|max:255',
            'employee_id' => 'required|string|max:255|unique:employees,employee_id',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'drivers_license_number' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:20480',
            'documents.*' => 'nullable|file|max:10240|mimes:pdf,doc,docx',
        ]);

        $employee = new Employee();
        $employee->employee_name = $this->employee_name;
        $employee->employee_id = $this->employee_id;
        $employee->phone_number = $this->phone_number;
        $employee->drivers_license_number = $this->drivers_license_number;
        $employee->address = $this->address;

        if ($this->profile_image) {
            $employee->profile_image = $this->profile_image->store('employee_profiles', 'public');
        }

        $employee->save();

        if (!empty($this->documents)) {
            foreach ($this->documents as $doc) {
                $employee->documents()->create([
                    'file_path' => $doc->store('employee_documents', 'public'),
                ]);
            }
        }

        //  $this->employee->load('documents');
        session()->flash('success', 'Employee created successfully.');

        $this->reset(['employee_name', 'employee_id', 'phone_number', 'drivers_license_number', 'address', 'profile_image', 'documents']);

        $this->dispatch('employee-created');
    }

    public function render()
    {
        return view('livewire.admin.employees.create');
    }
}
