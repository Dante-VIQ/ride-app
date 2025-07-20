@props(['about'])  <!-- Changed from $about to $abouts since you're looping -->

 <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                @if ($about)
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex flex-column">
                            <img class="img-fluid rounded w-75 align-self-end"
                                src="{{ $about->image ? asset('storage/' . $about->image) : asset('images/default-image.jpg') }}"
                                alt="">
                            <img class="img-fluid rounded w-50 bg-white pt-3 pe-3"
                                src="{{ $about->photo ? asset('storage/' . $about->photo) : asset('images/default-photo.jpg') }}"
                                alt="" style="margin-top: -25%;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <p class="d-inline-block text-lg border rounded-pill py-1 px-4">More About Us</p>
                       <div class="space-x-3">
                        <p class="text-gray-700  overflow-ellipsis p-4">{{ $about->description }}</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
