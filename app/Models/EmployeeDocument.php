<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class EmployeeDocument extends Model
{
    protected $fillable = ['employee_id', 'file_path', 'original_name', 'file_size'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
