<?php

namespace App\Livewire;

use App\Models\About;
use App\Models\Service;
use Livewire\Component;

class AdminView extends Component
{
    public $services, $abouts;

    public function render()
    {
        $services = Service::latest()->paginate(10);
        $abouts = About::latest()->paginate(10);
        return view('livewire.admin-view', [
            'services' => $services,
            'abouts' => $abouts,
        ]);
    }
}
