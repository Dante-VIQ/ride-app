<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;

class Testimonials extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $content;
    public $photo;
     public $rating = null;
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

    // Changed from submit() to create()
//    public function mount()
//     {
//         $this->testimonials = Testimonial::latest()->take(5)->get();
//     }

    public function create()
    {
        // Validate with proper rules
        $validated = $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'content' => 'required|min:10',
            'photo' => 'nullable|image|max:1024',
        ]);

        // Handle file upload
        if ($this->photo) {
            $validated['photo'] = $this->photo->store('testimonials', 'public');
        } else {
            $validated['photo'] = null;
        }

        // Create testimonial
        Testimonial::create($validated);

        $this->reset(['name', 'email', 'content', 'photo']);

        // Dispatch event to Alpine
        $this->dispatch('testimonial-created', [
            'message' => 'Thank you for your testimonial!'
        ]);

        // Reload testimonials
        $this->testimonials = Testimonial::latest()->take(5)->get();
    }


    public function render()
    {
         $this->testimonials = Testimonial::latest()->take(5)->get();
        return view('livewire.testimonials');
    }
}
