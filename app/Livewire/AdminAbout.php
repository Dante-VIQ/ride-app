<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin')]
class AdminAbout extends Component
{
    public $about;

    public function render()
    {
        return view('livewire.admin-about', [
            'abouts' => About::all(),
        ]);
    }
}
