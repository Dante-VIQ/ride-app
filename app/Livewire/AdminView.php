<?php

namespace App\Livewire;

use App\Models\About;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin')]
class AdminView extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // Make sure to return the paginated data
        return view('livewire.admin-view', [
            'services' => Service::paginate(10),
        ]);
    }
}
