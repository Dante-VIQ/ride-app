<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Customer Testimonials</h1>

    @if ($successMessage)
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ $successMessage }}
        </div>
    @endif

    <!-- Testimonial Form -->
    <div class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Share Your Experience</h2>

        <form wire:submit.prevent="create" class="space-y-4 bg-white p-6 rounded shadow-md max-w-2xl mx-auto">
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" id="name" wire:model="name" placeholder="Your Name"
                    class="w-full p-3 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" />
                @error('name')
                    <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" wire:model="email" placeholder="Your Email"
                    class="w-full p-3 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" />
                @error('email')
                    <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Testimonial</label>
                <textarea id="content" wire:model.live="content" placeholder="Share your experience with us..." rows="4"
                    class="w-full p-3 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"></textarea>
                @error('content')
                    <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Photo -->
            <div>
                <label for="photo" class="block text-sm font-medium text-gray-700 mb-1">Photo (Optional)</label>
                <input type="file" id="photo" wire:model="photo" accept="image/*"
                    class="w-full p-2 border border-gray-300 rounded file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                @error('photo')
                    <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                @enderror

                @if ($photo)
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Preview:</p>
                        <img src="{{ $photo->temporaryUrl() }}" alt="Preview"
                            class="mt-1 h-32 w-32 object-cover rounded">
                    </div>
                @endif
            </div>

            <!-- Interactive Star Rating -->
            <div class="rating-input">
                <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                <div class="stars flex space-x-1">
                    @php
                        // Safely handle null rating with default to 0
                        $currentRating = $rating ?? 0;
                    @endphp

                    @for ($i = 1; $i <= 5; $i++)
                        <button type="button" wire:click="setRating({{ $i }})"
                            class="star cursor-pointer text-3xl transition-transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded {{ $i <= $currentRating ? 'text-yellow-500' : 'text-gray-300' }}"
                            aria-label="Rate {{ $i }} star{{ $i == 1 ? '' : 's' }}">
                            ★
                        </button>
                    @endfor
                </div>
                <div class="mt-1 text-sm text-gray-600">
                    Selected: {{ $currentRating }} star{{ $currentRating != 1 ? 's' : '' }}
                </div>
                @error('rating')
                    <span class="error text-red-600 text-sm mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" wire:loading.attr="disabled" wire:target="photo"
                    class="w-full bg-blue-600 text-white px-4 py-3 rounded font-medium hover:bg-blue-700 transition duration-200 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center">
                    <span wire:loading.remove wire:target="create">
                        Submit Testimonial
                    </span>
                    <span wire:loading wire:target="create">
                        <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        Processing...
                    </span>
                </button>
            </div>
        </form>
    </div>

    <!-- Display Testimonials -->
    <div>
        <h2 class="text-2xl font-semibold mb-6">Recent Testimonials</h2>

        @if ($testimonials->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($testimonials as $testimonial)
                    <div class="bg-white p-6 rounded shadow-md border border-gray-200">
                        <div class="flex items-center mb-4">
                            @if ($testimonial->photo)
                                <img src="{{ asset('storage/' . $testimonial->photo) }}"
                                    alt="{{ $testimonial->name }}" class="h-12 w-12 rounded-full object-cover mr-4">
                            @else
                                <div class="h-12 w-12 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                    <span
                                        class="text-gray-500 font-medium">{{ substr($testimonial->name, 0, 1) }}</span>
                                </div>
                            @endif
                            <div>
                                <h3 class="font-semibold text-lg">{{ $testimonial->name }}</h3>
                                <div class="flex items-center">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span
                                            class="star text-lg {{ $i <= $testimonial->rating ? 'text-yellow-500' : 'text-gray-300' }}">
                                            ★
                                        </span>
                                    @endfor
                                    <span class="ml-2 text-sm text-gray-600">{{ $testimonial->rating }}.0</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-gray-700 italic mb-4">"{{ $testimonial->content }}"</p>

                        <div class="text-sm text-gray-500">
                            {{ $testimonial->created_at->format('M d, Y') }}
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-8 bg-gray-50 rounded">
                <p class="text-gray-600">No testimonials yet. Be the first to share!</p>
            </div>
        @endif
    </div>
</div>
