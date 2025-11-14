<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard - SportsCentre</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f9ff 0%, #ffe5e5 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .dashboard-wrapper {
            flex: 1;
            padding: 90px 0 40px;
        }

        .page-header-title {
            font-weight: 700;
        }

        .card-stat {
            border-radius: 1rem;
            border: none;
            box-shadow: 0 8px 22px rgba(0,0,0,0.08);
        }

        .card-stat .icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .card-cta {
            border-radius: 1rem;
            border: none;
            box-shadow: 0 8px 22px rgba(0,0,0,0.08);
        }

        .badge-sport {
            font-size: 0.7rem;
            letter-spacing: .05em;
        }

        .booking-list-item {
            border-left: 4px solid #dc3545;
        }

        footer {
            background: #fff;
            box-shadow: 0 -2px 8px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('welcome') }}">
                <i class="fas fa-dumbbell text-danger"></i> SportsCentre
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-user-circle me-1 text-danger"></i>
                                {{ Auth::user()->name ?? 'My Account' }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-id-badge me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-clock-rotate-left me-2"></i>My Bookings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item text-danger">
                                            <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- Dashboard Content --}}
    <div class="dashboard-wrapper">
        <div class="container">

            {{-- Header Section --}}
            <div class="row mb-4 align-items-center">
                <div class="col-md-8">
                    <h1 class="page-header-title mb-1">
                        Welcome back, 
                        <span class="text-danger">
                            {{ Auth::user()->name ?? 'Member' }}
                        </span>
                    </h1>
                    <p class="text-muted mb-0">
                        Manage your bookings, check your upcoming sessions, and stay active with SportsCentre.
                    </p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('services') }}" class="btn btn-outline-danger me-2">
                        <i class="fa-solid fa-list-check me-1"></i> View Services
                    </a>
                    <a href="{{ route('welcome') }}#contact" class="btn btn-danger">
                        <i class="fa-solid fa-calendar-plus me-1"></i> Book Now
                    </a>
                </div>
            </div>

            {{-- Stat Cards --}}
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="card card-stat p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-danger bg-opacity-10 text-danger me-3">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-1 small text-uppercase">Upcoming Bookings</p>
                                <h4 class="mb-0 fw-bold">
                                    {{-- Example static number, later you can use dynamic count --}}
                                    3
                                </h4>
                            </div>
                        </div>
                        <div class="mt-3">
                            <small class="text-muted">You have active bookings this week.</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card card-stat p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-warning bg-opacity-10 text-warning me-3">
                                <i class="fa-solid fa-medal"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-1 small text-uppercase">Total Sessions Played</p>
                                <h4 class="mb-0 fw-bold">12</h4>
                            </div>
                        </div>
                        <div class="mt-3">
                            <small class="text-muted">Keep it up! You’re staying active and consistent.</small>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card card-stat p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle bg-success bg-opacity-10 text-success me-3">
                                <i class="fa-solid fa-heart-pulse"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-1 small text-uppercase">Favourite Sport</p>
                                <h5 class="mb-0 fw-bold">Badminton</h5>
                            </div>
                        </div>
                        <div class="mt-3">
                            <small class="text-muted">Most of your bookings are for badminton courts.</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Main Section: Quick Actions + Upcoming Bookings --}}
            <div class="row g-4">
                {{-- Quick Booking Cards --}}
                <div class="col-lg-8">
                    <div class="card card-cta mb-4">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">
                                Quick Booking
                            </h5>
                            <p class="text-muted mb-4">
                                Choose your sport and jump straight into booking a new session.
                            </p>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="border rounded-4 p-3 h-100 d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="badge bg-danger badge-sport text-uppercase">Badminton</span>
                                            <i class="fa-solid fa-shuttlecock text-danger fs-5"></i>
                                        </div>
                                        <p class="small text-muted mb-3">
                                            Indoor court with pro-grade flooring and lighting.
                                        </p>
                                        <a href="#" class="btn btn-sm btn-outline-danger mt-auto">
                                            Book Badminton
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="border rounded-4 p-3 h-100 d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="badge bg-warning text-dark badge-sport text-uppercase">Futsal</span>
                                            <i class="fa-solid fa-futbol text-warning fs-5"></i>
                                        </div>
                                        <p class="small text-muted mb-3">
                                            Synthetic turf pitch for 5–7-a-side futsal matches.
                                        </p>
                                        <a href="#" class="btn btn-sm btn-outline-warning text-dark mt-auto">
                                            Book Futsal
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="border rounded-4 p-3 h-100 d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="badge bg-success badge-sport text-uppercase">Ping Pong</span>
                                            <i class="fa-solid fa-table-tennis-paddle-ball text-success fs-5"></i>
                                        </div>
                                        <p class="small text-muted mb-3">
                                            High-quality tables for casual or competitive play.
                                        </p>
                                        <a href="#" class="btn btn-sm btn-outline-success mt-auto">
                                            Book Ping Pong
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Optional: Latest Announcements --}}
                    <div class="card card-cta">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">Announcements</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="fa-solid fa-bullhorn text-danger me-2"></i>
                                    <strong>New!</strong> Weekend futsal promo – 10% off bookings after 8PM.
                                </li>
                                <li class="mb-2">
                                    <i class="fa-solid fa-bullhorn text-danger me-2"></i>
                                    Doubles badminton tournament coming this month. Limited slots available.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Side Panel: Upcoming Bookings --}}
                <div class="col-lg-4">
                    <div class="card card-cta mb-4">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">Upcoming Bookings</h5>
                            {{-- Example static items; later you loop from DB --}}
                            <div class="border rounded-4 p-3 mb-2 booking-list-item bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="badge bg-danger badge-sport text-uppercase">Badminton</span>
                                        <p class="mb-1 fw-semibold mt-1">Court 2</p>
                                        <small class="text-muted">Today · 8:00 PM – 9:00 PM</small>
                                    </div>
                                    <div class="text-end">
                                        <small class="text-muted d-block">Ref: #B1234</small>
                                        <a href="#" class="small text-danger text-decoration-none">View</a>
                                    </div>
                                </div>
                            </div>

                            <div class="border rounded-4 p-3 mb-2 booking-list-item bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="badge bg-warning text-dark badge-sport text-uppercase">Futsal</span>
                                        <p class="mb-1 fw-semibold mt-1">Main Pitch</p>
                                        <small class="text-muted">Fri · 9:00 PM – 10:30 PM</small>
                                    </div>
                                    <div class="text-end">
                                        <small class="text-muted d-block">Ref: #F5678</small>
                                        <a href="#" class="small text-danger text-decoration-none">View</a>
                                    </div>
                                </div>
                            </div>

                            <div class="border rounded-4 p-3 mb-2 booking-list-item bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="badge bg-success badge-sport text-uppercase">Ping Pong</span>
                                        <p class="mb-1 fw-semibold mt-1">Table 1</p>
                                        <small class="text-muted">Sun · 4:00 PM – 5:00 PM</small>
                                    </div>
                                    <div class="text-end">
                                        <small class="text-muted d-block">Ref: #P9012</small>
                                        <a href="#" class="small text-danger text-decoration-none">View</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 text-end">
                                <a href="#" class="small text-danger text-decoration-none">
                                    View all bookings <i class="fa-solid fa-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Profile summary --}}
                    <div class="card card-cta">
                        <div class="card-body">
                            <h6 class="fw-bold mb-2">Account Summary</h6>
                            <p class="mb-1">
                                <i class="fa-solid fa-envelope text-danger me-2"></i>
                                {{ Auth::user()->email ?? 'you@example.com' }}
                            </p>
                            <p class="mb-2">
                                <i class="fa-solid fa-user text-danger me-2"></i>
                                Member since:
                                <span class="fw-semibold">
                                    {{ Auth::user()->created_at?->format('d M Y') ?? 'N/A' }}
                                </span>
                            </p>
                            <a href="#" class="btn btn-sm btn-outline-danger mt-2">
                                <i class="fa-solid fa-pen-to-square me-1"></i> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Footer --}}
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
