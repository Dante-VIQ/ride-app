<?php

namespace App\Livewire\Admin\Employees;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class Index extends Component
{
 use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.employees.index', [
            'employees' => Employee::where('employee_name', 'like', "%{$this->search}%")
                ->orWhere('employee_id', 'like', "%{$this->search}%")
                ->paginate(10)
        ]);
    }
}
