<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'career_id',
        'application_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'cover_letter',
        'resume_path',
        'additional_documents',
        'linkedin_url',
        'portfolio_url',
        'hear_about_us',
        'status',
        'admin_notes',
        'rating',
    ];

    protected $casts = [
        'additional_documents' => 'array',
        'rating' => 'integer',
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getStatusBadgeClassAttribute()
    {
        return match($this->status) {
            'pending' => 'bg-warning',
            'reviewing' => 'bg-info',
            'shortlisted' => 'bg-primary',
            'rejected' => 'bg-danger',
            'hired' => 'bg-success',
            default => 'bg-secondary'
        };
    }

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('M d, Y H:i');
    }
}