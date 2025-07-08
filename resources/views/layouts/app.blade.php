<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RIDE AIDE LLC') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .image-stack {
           background-image: url('images/wheelvan9.jpg');
        background-size: 100% 100%; /* Show the whole image */
        background-position: center;
         background-repeat: no-repeat;   
         height: 70vh;               /* fill viewport height */ 
         min-height: 400px;           /* fallback for small screens */
            /* fill viewport height */
    }
            
      
        </style>
    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="relative h-40 sm:h-48 md:h-56 lg:h-64 overflow-hidden flex items-center px-4 sm:px-6">
                <!-- Logo as faded background -->
                <img src="{{ asset('images/RIDE TOP.png') }}" alt="Ride Aide LLC"
                    class="absolute top-0 left-0 h-full w-auto opacity-20 sm:opacity-30 object-contain pointer-events-none select-none" />

            </header
             @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
    </div>

@push('scripts')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    @endpush

    @livewireScripts
</body>

</html>
