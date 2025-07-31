<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;
use Livewire\Attributes\Layout;

class AboutCard extends Component
{
    public $about;
    public $sections = [];

    public function about()
    {
        $this->about = About::first();

        // Split the description into sections by keywords
        $sections = [];
        if ($this->about && $this->about->description) {
            $description = $this->about->description;
            preg_match('/About Us:(.*)Mission:/is', $about->description, $aboutMatch);
            preg_match('/Mission:(.*)Vision:/is', $about->description, $missionMatch);
            preg_match('/Vision:(.*)/is', $about->description, $visionMatch);

            $sections = [
                'about' => trim($aboutMatch[1] ?? ''),
                'mission' => trim($missionMatch[1] ?? ''),
                'vision' => trim($visionMatch[1] ?? ''),
            ];
        }
    }

    #[Layout('layouts.analytic-layout')]
    public function render()
    {
        return view('all-about');
    }
}
