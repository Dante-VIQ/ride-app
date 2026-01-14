<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Admin - @yield('title', 'Dashboard')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Admin CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            background-color: #343a40;
            color: white;
        }
        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, .75);
            padding: 0.75rem 1rem;
        }
        .sidebar .nav-link:hover {
            color: white;
            background-color: rgba(255, 255, 255, .1);
        }
        .sidebar .nav-link.active {
            color: white;
            background-color: #007bff;
        }
        .sidebar-heading {
            font-size: .75rem;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .5);
            padding: 0.5rem 1rem;
        }
        .main-content {
            padding-left: 240px;
            padding-top: 60px;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                padding-left: 0;
            }
        }
        .navbar-brand {
            padding: 0.5rem 1rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('analysis') }}">
                <i class="fas fa-car me-2"></i> RideAlly Admin
            </a>
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-user-circle me-1"></i> Admin
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/"><i class="fas fa-home me-2"></i> Back to Site</a></li>
                    {{-- <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a></li> --}}
                    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form> --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('analysis') ? 'active' : '' }}" href="{{ route('analysis') }}">
                                <i class="fas fa-tachometer-alt me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.bookings.*') ? 'active' : '' }}" href="{{ route('admin.bookings.index') }}">
                                <i class="fas fa-calendar-alt me-2"></i>
                                Bookings
                                <span class="badge bg-primary float-end">{{ App\Models\Booking::where('status', 'pending')->count() }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/service">
                                <i class="fas fa-users me-2"></i>
                                Services
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/admin/head">
                                <i class="fas fa-car me-2"></i>
                                Headers
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.view') }}">
                                <i class="fas fa-chart-line me-2"></i>
                                Employees
                            </a>
                        </li>
                    </ul>

                    {{-- <h6 class="sidebar-heading mt-4">Settings</h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>
                                General Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-envelope me-2"></i>
                                Email Templates
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-shield me-2"></i>
                                Admin Users
                            </a>
                        </li>
                    </ul> --}}
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    var bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>
</body>
</html>