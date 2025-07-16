<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\About;
use App\Models\Service;
use Livewire\Component;
use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

#[Layout('layouts.analytic-layout')]
class AnalyticsView extends Component
{

    public $services;

    public $abouts;

    public $requests;

    #[Computed()]
    public function services()
    {
        $this->services = Service::latest()->get();
        $this->requests = Appointment::latest()->get();
    }

     #[Computed()]
    public function abouts()
    {
       
        $this->abouts = About::latest()->get();
    }
    #[Computed()]
    public function getUserCountProperty()
    {
        return User::count();
    }

    #[Computed()]
    public function getServiceCountProperty()
    {
        return Service::count();
    }

    public function render()
    {
        return view('livewire.analytics-view', [
            'layout' => 'components.layouts.analytic-layout',
        ]);
    }
}
