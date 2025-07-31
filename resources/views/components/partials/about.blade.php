<div class="container-xxl py-5">
    <div class="container">
        @if ($about)
            <!-- Top Section: Images + Short Intro -->
            <div class="row g-5 align-items-start">
                <!-- Images -->
                <div class="col-lg-5 col-md-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end mb-3"
                             src="{{ $about->image ? asset('storage/' . $about->image) : asset('images/senior transport.webp') }}"
                             alt="Senior Transport">

                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3"
                             src="{{ $about->photo ? asset('storage/' . $about->photo) : asset('images/medical van.webp') }}"
                             alt="Medical Van" style="margin-top: -25%;">
                    </div>
                </div>

                <!-- Short Intro (Optional) -->
                <div class="col-lg-7 col-md-12 wow fadeIn" data-wow-delay="0.3s">
                    <p class="d-inline-block text-lg border rounded-pill py-2 px-4 mb-3">
                        More About Us
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        {{ Str::limit(strip_tags($about->description), 500, '...') }}
                    </p>
                </div>
            </div>
        @endif
    </div>
</div>
