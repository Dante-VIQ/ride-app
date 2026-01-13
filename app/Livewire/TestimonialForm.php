<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class TestimonialForm extends Component
{
        use WithFileUploads;

    // Form fields as individual properties
    public $name;
    public $email;
    public $content;
    public $photo;
    public $rating = 0; // Initialize to 0

    // Other properties
    public $testimonials;
    public $successMessage = null;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'content' => 'required|min:10',
        'photo' => 'nullable|image|max:1024',
        'rating' => 'required|integer|min:1|max:5',
    ];

    protected $messages = [
        'rating.required' => 'Please select a rating.',
        'rating.min' => 'Please select at least 1 star.',
        'rating.max' => 'Please select at most 5 stars.',
    ];


    public function setRating($value)
    {
        $this->rating = $value;
    }

    public function create()
    {
        $validated = $this->validate();

        // Handle photo upload
        if ($this->photo) {
            $extension = $this->photo->getClientOriginalExtension();
            $filename = Str::slug($this->name) . '-' . time() . '.' . $extension;
            $validated['photo'] = $this->photo->storeAs('testimonials', $filename, 'public');
        }

        Testimonial::create($validated);

        $this->successMessage = 'Thank you for your testimonial!';

        // Reset form
        $this->reset(['name', 'email', 'content', 'photo', 'rating']);

        $this->loadTestimonials();
    }

    public function render()
    {
        return view('livewire.testimonial-form');
    }
}
