<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;

class Testimonials extends Component
{


    public function render()
    {
        return view('livewire.testimonials', [
            'testimonials' => Testimonial::latest()->get(),
        ]);
    }
}
