<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RIDE AIDE LLC | Non-Emergency Medical Transportation Services') }}</title>
    <!-- Primary Meta Tags -->
    <meta name="title" content="Ride_Aide LLC | Non-Emergency Medical Transportation Services">
    <meta name="description"
        content="Ride_Aide LLC provides safe, reliable, and compassionate non-emergency medical transportation across Washington and internationally. We specialize in assisting seniors, individuals with disabilities, and those with limited mobility.">

    <!-- Author & Publisher -->
    <meta name="author" content="Daniel Mwangi (Site Designer)">
    <meta name="publisher" content="Ride_Aide LLC">
    <meta name="contact" content="damalide20@gmail.com"> <!-- Site designer contact, not customer service -->
    <meta name="copyright" content="© 2025 Ride_Aide LLC. All rights reserved.">

    <!-- Keywords -->
    <meta name="keywords"
        content="non-emergency medical transportation, international NEMT, wheelchair transport, Ride_Aide LLC, senior medical rides, therapy transportation, safe patient travel, mobility transportation services, Seattle, Washington">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.rideaidellc.com/">
    <meta property="og:title" content="Ride_Aide LLC | Non-Emergency Medical Transportation Services">
    <meta property="og:description"
        content="We provide wheelchair-accessible, safe, and dependable transport services to medical appointments, therapy, and more. Available across Washington and globally.">
    <meta property="og:image" content="https://www.rideaidellc.com/images/og-image.jpg">
    <meta property="og:site_name" content="Ride_Aide LLC">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.rideaidellc.com/">
    <meta property="twitter:title" content="Ride_Aide LLC | Non-Emergency Medical Transportation Services">
    <meta property="twitter:description" content="Trusted global NEMT services for individuals with mobility needs.">
    <meta property="twitter:image" content="https://www.rideaidellc.com/images/og-image.jpg">
    <meta property="twitter:creator" content="@rideaidellc">

    <!-- Additional SEO -->
    <meta name="robots" content="index, follow">
    <meta name="language" content="en">

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

<body class="font-sans">
    <div class="min-h-screen bg-gray-100">


        <livewire:welcome.navigation />

        <main>
            {{ $slot }}
        </main>
    </div>



    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/main.js"></script>



</body>

</html>
