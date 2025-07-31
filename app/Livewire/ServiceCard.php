<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class ServiceCard extends Component
{
     public $services;

    public function mount()
    {
        $this->services = Service::all();
       
    }

    #[Layout('layouts.analytic-layout')]
    public function render()
    {

        return view('all-services');
    }
}
