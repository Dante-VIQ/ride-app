 <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @unless ($services->isEmpty())
         @foreach ($services as $service)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="h-64 bg-navy flex items-center justify-center">
            
                    <img src="{{ asset($service->image) }}"
                         alt="{{ $service->name }}"
                         class="w-full h-full object-cover">
             
            </div>
            <div class="p-8">
                <h3 class="cormorant text-2xl font-bold text-navy mb-2">{{ $service->title }}</h3>
                {{-- <p class="text-gold font-semibold mb-4">{{ $member->title }}</p> --}}
                <p class="text-gray-700">{{ $service->description }}</p>
            </div>
        </div>
            @endforeach
     @else
         <div class="col-12">
             <p class="text-center">No services content available yet.</p>
         </div>
     @endunless
</div>
    