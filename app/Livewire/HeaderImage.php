<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;

class HeaderImage extends Component
{

    public function render()
    {
        return view('livewire.header-image', [
            'images' => \App\Models\Image::latest(),
        ]);
    }
}
