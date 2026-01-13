 <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

     @unless ($services->isEmpty())
         @foreach ($services as $service)
             {{-- <div class="text-center items-center wow fadeInUp" data-wow-delay="0.1s">
                                <img class="img-fluid bg-green-300 rounded-circle p-2 mx-auto mb-4"
                                    src="{{ $service->image ? asset($service->image) : asset('/images') }}"
                                    style="width: 200px; height: 200px;">

                                <div class="rounded text-center p-2">
                                    <span class="fst-italic text-gray-800 text-lg">{{ $service->title }}</span>
                                </div>
                            </div> --}}

             <a href="#medical" class="service-card bg-gray-50 rounded-xl p-8 shadow-sm block">
                 <div class="service-icon">
                     <i class="fas fa-hospital"></i>
                 </div>
                 <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $service->title }}</h3>
                 <p class="text-gray-600 mb-6">
                     {{ $service->description }}
                 </p>
                 <div class="flex items-center text-blue-700 font-semibold">
                     <span>Learn More</span>
                     <i class="fas fa-arrow-right ml-2"></i>
                 </div>
             </a>
         @endforeach
     @else
         <div class="col-12">
             <p class="text-center">No services content available yet.</p>
         </div>
     @endunless
 </div>
