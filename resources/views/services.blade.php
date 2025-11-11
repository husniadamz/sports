<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services - SportsCentre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">SportsCentre</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navServices">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navServices">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-5">Our Services</h1>
            <p class="lead">Flexible memberships, classes, and personal coaching tailored to you.</p>
        </div>
    </header>

    <main class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="fa fa-dumbbell fa-2x"></i></div>
                        <h5 class="card-title">Gym Membership</h5>
                        <p class="card-text">24/7 access to our gym floor with modern equipment and free weights.</p>
                        <p class="h6">From $29/month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="fa fa-chalkboard-teacher fa-2x"></i></div>
                        <h5 class="card-title">Group Classes</h5>
                        <p class="card-text">Yoga, HIIT, Spin, Pilates and more — scheduled throughout the week.</p>
                        <p class="h6">Drop-in or membership included</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="fa fa-user-tie fa-2x"></i></div>
                        <h5 class="card-title">Personal Training</h5>
                        <p class="card-text">One-on-one coaching, bespoke programs and progress tracking.</p>
                        <p class="h6">Book a consultation</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-5 text-center">
            <a href="{{ url('/') }}" class="btn btn-outline-secondary">Back to Home</a>
            <a href="{{ route('about') }}" class="btn btn-primary ms-2">Learn More About Us</a>
        </section>
    </main>

    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} SportsCentre</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>