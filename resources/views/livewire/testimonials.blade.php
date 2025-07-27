<div class="container py-10">

    <!-- Title -->
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <p class="d-inline-block border rounded-pill py-2 px-4">Testimonials</p>
        {{-- <h1>What our clients say!</h1> --}}
    </div>

    <!-- Carousel -->
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
        @unless (empty($testimonials))

            @foreach ($testimonials as $t)
                <div class="testimonial-item text-center px-3">
                    @if ($t->photo)
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                            src="{{ asset('storage/' . $t->photo) }}" style="width: 100px; height: 100px;">
                    @endif
                    <div class="testimonial-text rounded text-center p-4 bg-light">
                        <p class="mb-2 text-gray-800">“{{ $t->content }}”</p>
                        <div class="flex justify-center mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-4 h-4 {{ $i <= $t->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.175 3.616a1 1 0 00.95.69h3.801c.969 0 1.371 1.24.588 1.81l-3.073 2.234a1 1 0 00-.364 1.118l1.175 3.616c.3.921-.755 1.688-1.54 1.118l-3.073-2.234a1 1 0 00-1.175 0l-3.073 2.234c-.784.57-1.838-.197-1.539-1.118l1.175-3.616a1 1 0 00-.364-1.118L2.136 9.043c-.783-.57-.38-1.81.588-1.81h3.801a1 1 0 00.95-.69l1.174-3.616z" />
                                </svg>
                            @endfor
                        </div>
                        <h5 class="mb-0 text-gray-500">— {{ $t->name }}</h5>
                    </div>
                </div>
            @endforeach
        @endunless
    </div>

    <div x-data="{ show: false }" class="testimonials-container">
    <!-- Toggle Button -->
    <div class="text-center my-6">
        <button x-on:click.prevent="show = true"
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
            <span x-text="show ? 'Close Form' : 'Leave a Testimonial'"></span>
        </button>
    </div>

    <!-- Form Section -->
    <div x-show="show"
        x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
        x-on:click.self="show = false">
        <div class="relative">
            @include('livewire.partials.form-t')

            <button class="absolute top-2 right-2 text-white bg-red-500 rounded-full px-2 py-1"
                x-on:click="show = false">&#10005;</button>
        </div>
    </div>
</div>

    </div>

</div>
