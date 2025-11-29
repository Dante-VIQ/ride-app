<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\About;
use App\Models\Service;
use Livewire\Component;
use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

#[Layout('layouts.admin')]
class AnalyticsView extends Component
{
    // Remove conflicting public properties
    // public $services, $abouts, $requests; // Remove these

    public $requests;
    // Proper computed properties
    #[Computed(persist: true, cache: true)]
    public function services()
    {
        return Service::latest()->take(10)->get(); // Limit results
    }

    #[Computed(persist: true, cache: true)]
    public function abouts()
    {
        return About::latest()->take(5)->get(); // Limit results
    }

    // #[Computed(persist: true, cache: true)]
    // public function appointments()
    // {
    //     return Appointment::latest()->take(10)->get(); 
    // }

    #[Computed]
    public function userCount()
    {
        return User::count();
    }

    #[Computed]
    public function serviceCount()
    {
        return Service::count();
    }

    #[Computed]
    public function appointmentCount()
    {
        return Appointment::count();
    }

    public function render()
    {
        // Remove unnecessary layout definition
        return view('livewire.analytics-view');
    }
}