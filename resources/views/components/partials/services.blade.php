@props(['services'])
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block text-3xl py-2 px-4">Our Services</p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-2">

            @unless ($services->isEmpty())
                @foreach ($services as $service)
                    <div class="testimonial-item text-center items-center wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid bg-green-300 rounded-circle p-2 mx-auto mb-4"
                            src="{{ $service->image ? asset('storage/' . $service->image) : asset('/images') }}"
                            style="width: 200px; height: 200px;">
                        <div class="testimonial-text rounded text-center p-2">
                            <span class="fst-italic text-gray-800">{{ $service->title }}</span>
                        </div>
                    </div>
                @endforeach
 @else
                <div class="col-12">
                    <p class="text-center">No services content available yet.</p>
                </div>
            @endunless
        </div>
    </div>
</div>
<!-- Testimonial End -->
