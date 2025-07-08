<?php

namespace App\Livewire;

use App\Models\About;
use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Computed;

class Dashboard extends Component
{

    public $services;

    public $abouts;
    
    #[Computed()]
    public function mount()
    {
        $this->services = Service::all();
        $this->abouts = About::latest()->get();
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
