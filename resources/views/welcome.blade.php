<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sports Centre - Welcome</title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                overflow-x: hidden;
            }
            
            .navbar-custom {
                background-color: #ffffff;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            
            .hero-section {
                background: linear-gradient(135deg, #dc3545 0%, #dc354550 100%);
                min-height: 400px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .feature-icon {
                font-size: 3.5rem;
                color: #dc3545;
                margin-bottom: 1rem;
            }
            
            .card {
                transition: all 0.3s ease;
                border: none;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            }
            
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            }
            
            .cta-section {
                background-color: #f8f9fa;
                padding: 3rem 0;
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('welcome') }}">
                    <i class="fas fa-dumbbell text-danger"></i> SportsCentre
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-outline-danger ms-lg-3">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-danger ms-lg-3">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                                        <a href="{{ route('register') }}" class="btn btn-sm btn-danger">Join Now</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div style="margin-top: 80px;">
            <div class="container my-5">
                <div class="row align-items-center">
                    <!-- Content Section -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h1 class="display-4 fw-bold mb-3">Welcome to Our Sports Centre</h1>
                        <p class="lead text-muted mb-4">Experience world-class fitness facilities and professional coaching. Get started today with our premium membership.</p>
                        
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex gap-3 mb-3">
                                <span class="badge bg-danger rounded-circle" style="width: 2rem; height: 2rem; display: flex; align-items: center; justify-content: center; font-size: 0.9rem;"></span>
                                <span>
                                    Explore our
                                    <a href="{{ route('services') }}" class="text-danger text-decoration-none fw-bold">Services</a>
                                </span>
                            </li>
                            <li class="d-flex gap-3 mb-3">
                                <span class="badge bg-danger rounded-circle" style="width: 2rem; height: 2rem; display: flex; align-items: center; justify-content: center; font-size: 0.9rem;"></span>
                                <span>
                                    Learn more
                                    <a href="{{ route('about') }}" class="text-danger text-decoration-none fw-bold">About Us</a>
                                </span>
                            </li>
                            <li class="d-flex gap-3">
                                <span class="badge bg-danger rounded-circle" style="width: 2rem; height: 2rem; display: flex; align-items: center; justify-content: center; font-size: 0.9rem;"></span>
                                <span>Join thousands of satisfied members</span>
                            </li>
                        </ul>
                        
                        <div class="d-flex gap-2">
                            <a href="{{ route('services') }}" class="btn btn-dark btn-lg">Get Started</a>
                            <a href="{{ route('about') }}" class="btn btn-outline-dark btn-lg">Learn More</a>
                        </div>
                    </div>
                    
                    <!-- Hero Section -->
                    <div class="col-lg-6">
                        <div class="hero-section rounded">
                            <div class="text-center">
                                <i class="fas fa-dumbbell feature-icon"></i>
                                <h3 class="fw-bold text-dark">Premium Fitness</h3>
                                <p class="text-dark">State-of-the-art equipment and expert coaching</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-heart text-danger" style="font-size: 2.5rem; margin-bottom: 1rem;"></i>
                                <h5 class="card-title fw-bold">Health & Wellness</h5>
                                <p class="card-text text-muted">Transform your fitness journey with personalized plans</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-users text-danger" style="font-size: 2.5rem; margin-bottom: 1rem;"></i>
                                <h5 class="card-title fw-bold">Community</h5>
                                <p class="card-text text-muted">Join a supportive community of fitness enthusiasts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fas fa-trophy text-danger" style="font-size: 2.5rem; margin-bottom: 1rem;"></i>
                                <h5 class="card-title fw-bold">Results</h5>
                                <p class="card-text text-muted">Achieve your fitness goals with proven methods</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
