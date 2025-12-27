<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RIDE AIDE LLC | Non-Emergency Medical Transportation Services') }}</title>

    <!-- Primary Meta Tags -->
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
    <meta property="og:image" content="http://127.0.0.1:8000/images/ride-logo.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ride_Aide LLC – Medical Transport You Can Trust">
    <meta name="twitter:description"
        content="Transportation services for medical appointments, dialysis, therapy, and more across Washington.">
    <meta name="twitter:image" content="http://127.0.0.1:8000/images/ride-logo.png">

   <link rel="icon" href="{{ asset('images/ride-logo.PNG') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/ride-logo.PNG') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('images/ride-logo.PNG') }}" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Image Stack Section */
        .image-stack {
            position: relative;
            min-height: 70vh;
            /* background-image: url('/images/DODGE CARAVAN.jpg'); */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Foreground image positioned at top 0 left 0 */
        .foreground-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            max-width: 400px;
            z-index: 50;
            /* padding: 30px; */
            /* transform: translateX(-10px) translateY(-10px);
            animation: float 8s ease-in-out infinite; */
        }

        /* Text overlay at bottom center */
        .text-overlay {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 20;
            width: 90%;
            max-width: 700px;
        }

        .quote-box {
            background-color: rgba(255, 255, 255, 0.92);
            color: #1a365d;
            padding: 10px 20px;
            text-align: center;
            font-size: 1.4rem;
            font-weight: 700;
            font-style: italic;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 2px solid #ecc94b;
            position: relative;
            overflow: hidden;
        }

        .quote-box::before,
        .quote-box::after {
            content: '"';
            position: absolute;
            font-size: 5rem;
            color: #ecc94b;
            opacity: 0.2;
            font-family: Georgia, serif;
        }

        .quote-box::before {
            top: -20px;
            left: 20px;
        }

        .quote-box::after {
            bottom: -50px;
            right: 20px;
        }



        /* Animation for foreground image */
        @keyframes float {
            0% {
                transform: translateX(-10px) translateY(-10px);
            }

            50% {
                transform: translateX(10px) translateY(10px);
            }

            100% {
                transform: translateX(-10px) translateY(-10px);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .image-stack {
                background-size: cover;
                background-position: center;
                position: relative;
                min-height: 70vh;
            }

            .foreground-image {
                width: 60%;
            }

            .quote-box {
                font-size: 1.2rem;
                padding: 15px 20px;
            }
        }

        @media (max-width: 768px) {
            .image-stack {
                background-size: cover;
                background-position: center;
                position: relative;
                min-height: 70vh;
            }

            .foreground-image {
                width: 80%;
            }

            .quote-box {
                font-size: 1.1rem;
            }

        }

        @media (max-width: 576px) {

            .image-stack {
                background-size: cover;
                background-position: center;
                position: relative;
                min-height: 70vh;
            }

            .foreground-image {
                width: 100%;
            }

            .quote-box {
                font-size: 1rem;
            }


        }
    </style>

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-serif">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- JavaScript Libraries -->
    <!-- jQuery FIRST (no defer) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Your Template Script (depends on jQuery) -->
    <script src="js/main.js" defer></script>

    <script>
        //  Simple animations
        document.addEventListener('DOMContentLoaded', function() {
                    const quoteBox = document.querySelector('.quote-box');

                    // Pulsing animation for the quote box
                    setInterval(() => {
                        quoteBox.style.transform = 'scale(1.03)';
                        setTimeout(() => {
                            quoteBox.style.transform = 'scale(1)';
                        }, 300);
                    }, 5000);
    </script>
    @livewireScripts


</body>

</html>
