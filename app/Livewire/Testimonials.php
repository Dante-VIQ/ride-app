<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Testimonials extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $content;
    public $photo;
    public $rating = 0; // Changed from null to 0
    public $testimonials = [];
    public $successMessage = null;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'content' => 'required|min:10',
        'photo' => 'nullable|image|max:1024',
        'rating' => 'required|integer|min:1|max:5',
    ];

    public function mount()
    {
        $this->loadTestimonials();
    }

    public function loadTestimonials()
    {
        $this->testimonials = Testimonial::latest()->take(5)->get();
    }

    // New method to handle star selection
    public function setRating($value)
    {
        $this->rating = $value;
    }

    public function create()
    {
        $validated = $this->validate();

        if ($this->photo) {
            $extension = $this->photo->getClientOriginalExtension();
            $filename = Str::slug($this->name) . '-' . time() . '.' . $extension;
            $validated['photo'] = $this->photo->storeAs('testimonials', $filename, 'public');
        }

        Testimonial::create($validated);

        $this->successMessage = 'Thank you for your testimonial!';
        $this->reset(['name', 'email', 'content', 'photo', 'rating']);
        $this->loadTestimonials();
    }

    public function render()
    {
        return view('livewire.testimonials');
    }
}