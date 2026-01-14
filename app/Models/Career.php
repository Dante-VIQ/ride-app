<?php

namespace App\Models;

use App\Models\JobApplication;
use App\Models\CareerApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'requirements',
        'type',
        'location',
        'department',
        'salary_min',
        'salary_max',
        'salary_period',
        'application_deadline',
        'is_active',
        'views',
        'applications_count',
    ];

    protected $casts = [
        'application_deadline' => 'date',
        'is_active' => 'boolean',
        'salary_min' => 'decimal:2',
        'salary_max' => 'decimal:2',
    ];

    public function applications()
    {
        return $this->hasMany(CareerApplication::class);
    }

    public function getIsOpenAttribute()
    {
        if (!$this->is_active) {
            return false;
        }

        if ($this->application_deadline && $this->application_deadline->isPast()) {
            return false;
        }

        return true;
    }

    public function getSalaryFormattedAttribute()
    {
        if (!$this->salary_min && !$this->salary_max) {
            return 'Negotiable';
        }

        $symbol = '$';
        $period = match($this->salary_period) {
            'hourly' => '/hour',
            'monthly' => '/month',
            'annually' => '/year',
            default => ''
        };

        if ($this->salary_min && $this->salary_max) {
            return $symbol . number_format($this->salary_min) . ' - ' . $symbol . number_format($this->salary_max) . $period;
        }

        if ($this->salary_min) {
            return 'From ' . $symbol . number_format($this->salary_min) . $period;
        }

        return 'Up to ' . $symbol . number_format($this->salary_max) . $period;
    }
}
