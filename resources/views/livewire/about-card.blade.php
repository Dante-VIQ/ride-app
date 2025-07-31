<div>
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
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

                 <!-- Structured Sections Below -->
        <div class="mt-12 space-y-12">
            @if (!empty($sections['about']))
                <section class="bg-white/80 backdrop-blur-md rounded-xl p-8 shadow-md">
                    <h2 class="text-2xl font-bold text-green-800 mb-4">About Us</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $sections['about'] }}</p>
                </section>
            @endif

            @if (!empty($sections['mission']))
                <section class="bg-white/80 backdrop-blur-md rounded-xl p-8 shadow-md">
                    <h2 class="text-2xl font-bold text-green-800 mb-4">Our Mission</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $sections['mission'] }}</p>
                </section>
            @endif

            @if (!empty($sections['vision']))
                <section class="bg-white/80 backdrop-blur-md rounded-xl p-8 shadow-md">
                    <h2 class="text-2xl font-bold text-green-800 mb-4">Our Vision</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $sections['vision'] }}</p>
                </section>
            @endif
        </div>
        </div>


    @endif

</div>

        </div>
    </div>
    <!-- About End -->

        @include('components.partials.appointment')
</div>
