 <form wire:submit.prevent="create" class="space-y-4 bg-white p-6 rounded shadow-md max-w-2xl mx-auto">
            <!-- Name -->
            <div>
                <input type="text" wire:model="name" placeholder="Your Name"
                       class="w-full p-2 border rounded" />
                @error('name')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <input type="email" wire:model="email" placeholder="Your Email"
                       class="w-full p-2 border rounded" />
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Content -->
            <div>
                <textarea wire:model.live="content" placeholder="Your Testimonial"
                          class="w-full p-2 border rounded"></textarea>
                @error('content')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Photo -->
            <div>
                <input type="file" wire:model.live="photo" class="w-full p-2 border rounded" />
                @error('photo')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Star Rating Input -->
       <!-- Interactive Star Rating -->
        <div class="rating-input mb-4">
            <label>Rating:</label>
            <div class="stars flex">
                @for($i = 1; $i <= 5; $i++)
                    <span 
                        wire:click="setRating({{ $i }})"
                        class="star cursor-pointer text-2xl {{
                            $i <= $rating ? 'text-green-500' : 'text-gray-300'
                        }}"
                    >
                        ★
                    </span>
                @endfor
            </div>
            @error('rating') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
            <!-- Submit Button -->
            <div>
                <button type="submit" wire:loading.attr="disabled"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition w-full">
                    <span wire:loading.remove>Submit Testimonial</span>
                    <span wire:loading>
                        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Processing...
                    </span>
                </button>
            </div>
             <!-- Rating input -->
       
        </form>

