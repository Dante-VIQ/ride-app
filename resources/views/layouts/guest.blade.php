<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RIDE AIDE LLC | Non-Emergency Medical Transportation Services') }}</title>
    <!-- Primary Meta Tags -->
    <meta name="title" content="Ride_Aide LLC – Safe & Compassionate Non-Emergency Medical Transportation">
    <meta name="description"
        content="Ride_Aide LLC provides reliable, compassionate non-emergency medical transportation throughout Washington. Serving seniors, disabled individuals, and those with limited mobility.">
    <meta name="keywords"
        content="Non-Emergency Medical Transportation, NEMT Washington, wheelchair transport, senior transport, Ride_Aide LLC, medical appointments, dialysis transport, therapy ride, Seattle medical ride, Tacoma transport service">
    <meta name="author" content="Daniel Mwangi, Web Designer - Kenya">
    <meta name="robots" content="index, follow">
    <meta name="language" content="en">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="coverage" content="Worldwide">
    <meta name="copyright" content="Ride_Aide LLC">
    <meta name="reply-to" content="damalide20@gmail.com">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.rideaidellc.com">
    <meta property="og:title" content="Ride_Aide LLC – Safe & Compassionate Medical Transportation">
    <meta property="og:description"
        content="Non-emergency medical transportation services across Washington. Reliable, accessible, and senior-friendly.">
    {{-- <meta property="og:image" content="https://www.rideaidellc.com/images/og-image.jpg"> --}}

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ride_Aide LLC – Medical Transport You Can Trust">
    <meta name="twitter:description"
        content="Transportation services for medical appointments, dialysis, therapy, and more across Washington.">
    <meta name="twitter:image" content="https://www.rideaidellc.com/images/og-image.jpg">

    <!-- Additional SEO -->
    <meta name="robots" content="index, follow">
    <meta name="language" content="en">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .image-stack {
            background-image: url('images/wheelvan9.jpg');
            background-size: 100% 100%;
            /* Show the whole image */
            background-position: center;
            background-repeat: no-repeat;
            height: 70vh;
            /* fill viewport height */
            min-height: 400px;
            /* fallback for small screens */
            /* fill viewport height */
        }
    </style>

    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-serif">
    <div class="min-h-screen bg-gray-100">


        <livewire:welcome.navigation />

        <main>
            {{ $slot }}
        </main>
    </div>
    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256‑..." crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/main.js"></script>



</body>

</html>
