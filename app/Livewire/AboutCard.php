<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;
use Livewire\Attributes\Layout;

class AboutCard extends Component
{
    public $about;

    public function mount()
    {
        $this->about = About::first();
    }

    // #[Layout('layouts.admin-layout')]
    public function render()
    {
        return view('livewire.about-card');
    }
}
