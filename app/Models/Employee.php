<?php

namespace App\Models;

use App\Models\EmployeeDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $fillable = ['employee_name', 'employee_id', 'phone_number', 'drivers_license_number', 'address', 'profile_image'];

    // protected $casts = [
    //     'documents' => 'array',
    // ];

    public function documents(): HasMany
    {
        return $this->hasMany(EmployeeDocument::class, 'employee_id');
    }
}
