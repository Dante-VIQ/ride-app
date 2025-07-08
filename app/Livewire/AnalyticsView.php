<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Computed;

class AnalyticsView extends Component
{
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
        return view('livewire.analytics-view');
    }
}

