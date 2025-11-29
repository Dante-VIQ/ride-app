<?php

namespace App\Models;

use App\Models\EmployeeDocument;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['employee_name', 'employee_id', 'phone_number', 'drivers_license_number', 'address', 'profile_image', 'documents'];

    protected $casts = [
        'documents' => 'array',
    ];

    public function documents()
    {
        return $this->hasMany(EmployeeDocument::class, 'employee_id');
    }
}
