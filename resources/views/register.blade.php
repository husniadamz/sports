<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Join SportsCentre</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background: linear-gradient(135deg, #f5f9ff 0%, #ffe5f1 100%);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            .navbar-custom {
                background-color: #ffffff;
                box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            }

            .register-wrapper {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 120px 1rem 2rem;
            }

            .register-card {
                background: #ffffff;
                border-radius: 1.25rem;
                box-shadow: 0 12px 30px rgba(13, 110, 253, 0.15);
                overflow: hidden;
                max-width: 1000px;
                width: 100%;
            }

            .register-card .brand-panel {
                background: linear-gradient(135deg, rgba(13,110,253,0.92), rgba(92,167,255,0.75));
                color: #fff;
                padding: 3rem 2.75rem;
            }

            .brand-panel h2 {
                font-weight: 700;
            }

            .brand-panel ul {
                padding-left: 1.2rem;
            }

            .brand-panel li {
                margin-bottom: 0.75rem;
            }

            .register-form-section {
                padding: 3rem 2.75rem;
            }

            .form-control {
                border-radius: 0.75rem;
                padding: 0.9rem 1rem;
            }

            .btn-register {
                background: linear-gradient(135deg, #0d6efd, #5ca7ff);
                border: none;
                border-radius: 0.75rem;
                padding: 0.9rem;
                font-weight: 600;
            }

            .btn-register:hover {
                background: linear-gradient(135deg, #0b5ed7, #4c97f0);
            }

            .form-check-input:checked {
                background-color: #0d6efd;
                border-color: #0d6efd;
            }

            footer {
                background: #fff;
                box-shadow: 0 -2px 8px rgba(0,0,0,0.05);
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('welcome') }}">
                    <i class="fas fa-dumbbell text-primary"></i> SportsCentre
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRegister">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarRegister">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#contact">Contact</a></li>
                        <li class="nav-item">
                            <a class="btn btn-outline-primary px-4" href="{{ route('login') }}">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="register-wrapper">
            <div class="register-card">
                <div class="row g-0">
                    <div class="col-lg-5 brand-panel">
                        <div class="d-flex flex-column h-100">
                            <div>
                                <div class="d-inline-flex align-items-center mb-3">
                                    <span class="badge bg-light text-primary rounded-pill px-3 py-2">Create Account</span>
                                </div>
                                <h2>Unlock Premium Training</h2>
                                <p class="mt-3">Become a SportsCentre member to access guided programs, top-tier coaches, and tailored nutrition plans.</p>
                                <ul class="mt-4">
                                    <li>Unlimited class bookings & performance tracking</li>
                                    <li>Personalized workout & nutrition roadmaps</li>
                                    <li>Exclusive member-only events and challenges</li>
                                </ul>
                            </div>
                            <div class="mt-auto pt-5">
                                <h5 class="fw-semibold">Already registered?</h5>
                                <p class="mb-3">Sign in to your account to continue your progress.</p>
                                <a href="{{ route('login') }}" class="btn btn-light text-primary fw-semibold w-100">Back to Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 register-form-section">
                        <h3 class="fw-bold mb-2">Join SportsCentre Today</h3>
                        <p class="text-muted mb-4">Complete the form below to personalize your training experience.</p>
                        <form action="#" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label fw-semibold">First name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-user text-primary"></i></span>
                                        <input type="text" class="form-control border-start-0" id="firstName" placeholder="adam" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label fw-semibold">Last name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-user text-primary"></i></span>
                                        <input type="text" class="form-control border-start-0" id="lastName" placeholder="husni" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label fw-semibold">Email address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-envelope text-primary"></i></span>
                                        <input type="email" class="form-control border-start-0" id="email" placeholder="adam@gmail.com" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label fw-semibold">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control border-start-0" id="password" placeholder="Create a password" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirmPassword" class="form-label fw-semibold">Confirm password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control border-start-0" id="confirmPassword" placeholder="Repeat password" required>
                                    </div>
                                </div>
                               
                              
                            </div>
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="text-primary text-decoration-none">terms & conditions</a>.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-register w-100 text-white mt-4">Create Account</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
    @include('partials.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>