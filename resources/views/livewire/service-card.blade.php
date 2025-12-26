    <div>
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb text-uppercase mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-2">

                    @unless ($services->isEmpty())
                        @foreach ($services as $service)
                            <div class="text-center items-center wow fadeInUp" data-wow-delay="0.1s">
                                <img class="img-fluid bg-green-300 rounded-circle p-2 mx-auto mb-4"
                                    src="{{ $service->image ? asset($service->image) : asset('/images') }}"
                                    style="width: 200px; height: 200px;">

                                <div class="rounded text-center p-2">
                                    <span class="fst-italic text-gray-800 text-lg">{{ $service->title }}</span>
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
        <!-- Service End -->

        <!-- Appointment Start -->
        @include('components.partials.appointment')
        <!-- Appointment End -->


    </div>
