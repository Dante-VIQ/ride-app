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

            <!-- Star Rating Component -->
        <div class="mt-4">
                <label class="block mb-2 font-semibold">Your Rating:</label>
                <div class="flex space-x-1">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="group relative">
                            <svg
                                wire:click="$set('rating', {{ $i }})"
                                wire:mouseenter="$set('hover', {{ $i }})"
                                wire:mouseleave="$set('hover', null)"
                                class="w-8 h-8 cursor-pointer transition-transform transform hover:scale-110 {{ $i <= ($rating ?? 0) ? 'text-yellow-400' : 'text-gray-300' }}"
                                fill="currentColor" viewBox="0 0 20 20">
                                <title>
                                    @switch($i)
                                        @case(1) Poor @break
                                        @case(2) Fair @break
                                        @case(3) Good @break
                                        @case(4) Very Good @break
                                        @case(5) Excellent @break
                                    @endswitch
                                </title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.175 3.616a1 1 0 00.95.69h3.801c.969 0 1.371 1.24.588 1.81l-3.073 2.234a1 1 0 00-.364 1.118l1.175 3.616c.3.921-.755 1.688-1.54 1.118l-3.073-2.234a1 1 0 00-1.175 0l-3.073 2.234c-.784.57-1.838-.197-1.539-1.118l1.175-3.616a1 1 0 00-.364-1.118L2.136 9.043c-.783-.57-.38-1.81.588-1.81h3.801a1 1 0 00.95-.69l1.174-3.616z" />
                            </svg>
                            <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 bg-black text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                @switch($i)
                                    @case(1) Poor @break
                                    @case(2) Fair @break
                                    @case(3) Good @break
                                    @case(4) Very Good @break
                                    @case(5) Excellent @break
                                @endswitch
                            </span>
                        </div>
                    @endfor
                </div>
                @error('rating') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
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
        </form>

