@if ($successMessage)
    <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-4">
        {{ $successMessage }}
    </div>
@endif
<form wire:submit.prevent="create" class="space-y-4">

    {{-- Name --}}
    <div>
        <label class="block text-sm font-medium mb-1">Name</label>
        <input type="text" wire:model="name" class="w-full p-2 border rounded">
        @error('name')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>

    {{-- Email --}}
    <div>
        <label class="block text-sm font-medium mb-1">Email</label>
        <input type="email" wire:model="email" class="w-full p-2 border rounded">
        @error('email')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>

    {{-- Content --}}
    <div>
        <label class="block text-sm font-medium mb-1">Testimonial</label>
        <textarea wire:model.live="content" rows="4" class="w-full p-2 border rounded"></textarea>
        @error('content')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>

    {{-- Photo --}}
    <div>
        <label class="block text-sm font-medium mb-1">Photo (optional)</label>
        <input type="file" wire:model="photo">
        @error('photo')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror

        @if ($photo)
            <img src="{{ $photo->temporaryUrl() }}" class="mt-2 h-24 w-24 rounded object-cover">
        @endif
    </div>

    {{-- Rating --}}
    <div>
        <label class="block text-sm font-medium mb-2">Rating</label>

        @php $currentRating = $rating ?? 0; @endphp

        <div class="flex space-x-1">
            @for ($i = 1; $i <= 5; $i++)
                <button type="button" wire:click="setRating({{ $i }})"
                    class="text-3xl {{ $i <= $currentRating ? 'text-yellow-500' : 'text-gray-300' }}">
                    ★
                </button>
            @endfor
        </div>

        <p class="text-sm text-gray-600 mt-1">
            Selected: {{ $currentRating }} star{{ $currentRating == 1 ? '' : 's' }}
        </p>

        @error('rating')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>

    {{-- Submit --}}
    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition">
        Submit Testimonial
    </button>

</form>
