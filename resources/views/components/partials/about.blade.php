@props(['about']) <!-- Changed from $about to $abouts since you're looping -->

<div class="container-xxl py-5">
    <div class="container mx-auto py-16">

    @if ($about)
        <!-- Top Row: Images + Short Intro -->
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <!-- Images -->
            <div class="flex flex-col items-end space-y-4">
                <img class="rounded-lg w-3/4 shadow-md"
                     src="{{ $about->image ? asset('storage/' . $about->image) : asset('images/senior transport.jpg') }}"
                     alt="Senior Transport">

                <img class="rounded-lg w-1/2 shadow-md -mt-12 bg-white p-2"
                     src="{{ $about->photo ? asset('storage/' . $about->photo) : asset('images/medical van.webp') }}"
                     alt="Medical Van">
            </div>

            <!-- Short Intro -->
            <div>
                <p class="inline-block text-lg border border-green-600 text-green-800 rounded-full py-2 px-5 mb-3">
                    More About Us
                </p>
                <p class="text-gray-700 text-lg leading-relaxed">
                    {{ Str::limit(strip_tags($about->description), 200, '...') }}
                </p>
            </div>
        </div>

       
    @endif

</div>

</div>
