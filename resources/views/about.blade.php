<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - SportsCentre</title>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navAbout">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navAbout">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section bg-dark text-white d-flex align-items-center" style="height:50vh;">
        <div class="container text-center">
            <h1 class="display-5">About SportsCentre</h1>
            <p class="lead">We provide premier fitness facilities, expert trainers, and a welcoming community.</p>
            <a href="{{ route('services') }}" class="btn btn-primary">View Services</a>
        </div>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Our Mission</h2>
                <p>At SportsCentre our mission is to empower every member to reach their fitness goals. We combine modern equipment, diverse classes, and personalised coaching.</p>

                <h3>Facilities</h3>
                <ul>
                    <li>Fully equipped gym floor</li>
                    <li>Olympic weightlifting area</li>
                    <li>Multi-purpose studios for classes</li>
                    <li>Spa and recovery lounges</li>
                </ul>
            </div>
            <aside class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Opening Hours</h5>
                        <p class="card-text">Mon-Fri: 5:00 - 23:00<br>Sat-Sun: 7:00 - 20:00</p>
                        <a href="{{ route('services') }}" class="btn btn-outline-primary">Join Today</a>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} SportsCentre</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>