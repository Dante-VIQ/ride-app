<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['service_type', 'trip_type', 'pickup_address', 'dropoff_address', 'pickup_datetime', 'return_datetime', 'passengers', 'wheelchair_required', 'special_requirements', 'first_name', 'last_name', 'phone', 'email', 'preferred_contact', 'insurance_provider', 'insurance_id', 'additional_notes', 'estimated_cost', 'status', 'booking_reference', 'assigned_driver_id', 'actual_cost', 'payment_status', 'notes', 'driver_name', 'driver_phone', 'vehicle_number'];

    protected $casts = [
        'pickup_datetime' => 'datetime',
        'return_datetime' => 'datetime',
        'wheelchair_required' => 'boolean',
        'estimated_cost' => 'decimal:2',
        'actual_cost' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->booking_reference = 'RA' . strtoupper(uniqid());
            $model->status = 'pending';
        });
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeCancelled($query)
    {
        return $query->where('status', 'cancelled');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFormattedPickupTimeAttribute()
    {
        return $this->pickup_datetime->format('M j, Y g:i A');
    }

    public function getFormattedEstimatedCostAttribute()
    {
        return '$' . number_format($this->estimated_cost, 2);
    }
}
