<div class="container mx-auto py-10 px-4">

    {{-- ================= TITLE ================= --}}
    <div class="text-center mb-10">
        <p class="inline-block border rounded-full py-2 px-4 mb-3">Testimonials</p>
        <h2 class="text-3xl font-bold text-gray-800">What Our Clients Say</h2>
        <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
            Hear from individuals and families who trust Ride Aide for their transportation needs
        </p>
    </div>

    {{-- ================= TESTIMONIAL LIST ================= --}}
    @if ($testimonials && $testimonials->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">

            @foreach ($testimonials as $t)
                <div class="bg-white rounded-lg shadow p-6">

                    {{-- Header --}}
                    <div class="flex items-center mb-4">
                        @if ($t->photo)
                            <img src="{{ asset('storage/' . $t->photo) }}"
                                class="h-12 w-12 rounded-full object-cover mr-4" alt="{{ $t->name }}">
                        @else
                            <div class="h-12 w-12 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <span class="font-semibold text-gray-600">
                                    {{ strtoupper(substr($t->name, 0, 1)) }}
                                </span>
                            </div>
                        @endif

                        <div>
                            <h4 class="font-semibold text-gray-800">{{ $t->name }}</h4>

                            {{-- Rating (display only) --}}
                            <div class="flex">
                                @for ($i = 1; $i <= 5; $i++)
                                    <span class="text-lg {{ $i <= $t->rating ? 'text-yellow-500' : 'text-gray-300' }}">
                                        ★
                                    </span>
                                @endfor
                            </div>
                        </div>
                    </div>

                    {{-- Content --}}
                    <p class="text-gray-600 italic mb-4">
                        “{{ $t->content }}”
                    </p>

                    {{-- Date --}}
                    <p class="text-sm text-gray-500">
                        {{ $t->created_at->format('M d, Y') }}
                    </p>
                </div>
            @endforeach

        </div>
    @else
        <p class="text-center text-gray-500 mb-16">
            No testimonials yet. Be the first to share!
        </p>
    @endif


    {{-- ================= TOGGLE FORM ================= --}}
    <div x-data="{ show: false }" x-cloak>

        <div class="text-center mb-6">
            <button @click="show = true"
                class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                Leave a Testimonial
            </button>
        </div>

        {{-- ================= MODAL ================= --}}
        <div x-show="show" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">

            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl relative p-6">

                <button @click="show = false"
                    class="absolute top-2 right-2 text-white bg-red-500 rounded-full px-3 py-1">
                    ✕
                </button>

                <h3 class="text-2xl font-bold mb-6 text-center">
                    Share Your Experience
                </h3>

                {{-- Success --}}


                {{-- ================= FORM ================= --}}

                <livewire:testimonial-form />
            </div>
        </div>
    </div>

</div>
