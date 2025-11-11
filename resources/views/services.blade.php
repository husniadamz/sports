<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services - SportsCentre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .card i {
            color: #0d6efd;
        }
        header {
            background: linear-gradient(to right, #0d6efd, #00b4d8);
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <!-- Header -->
    <header class="text-white text-center py-5">
        <div class="container">
            <h1 class="display-5 fw-bold">Our Sports Facilities</h1>
            <p class="lead mb-0">Book your court today and enjoy a great game experience with your friends and family!</p>
        </div>
    </header>

    <!-- Main Section -->
    <main class="container my-5">
        <div class="row g-4">
            <!-- Badminton -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="fa-solid fa-shuttlecock fa-2x"></i></div>
                        <h5 class="card-title fw-bold">Badminton Court</h5>
                        <p class="card-text">High-quality indoor courts with non-slip flooring and professional lighting.</p>
                        <p class="h6 text-primary">RM20 / hour</p>
                    </div>
                </div>
            </div>

            <!-- Futsal -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="fa-solid fa-futbol fa-2x"></i></div>
                        <h5 class="card-title fw-bold">Futsal Court</h5>
                        <p class="card-text">Spacious futsal pitch with synthetic turf, suitable for both casual and competitive games.</p>
                        <p class="h6 text-primary">RM60 / hour</p>
                    </div>
                </div>
            </div>

            <!-- Ping Pong -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="fa-solid fa-table-tennis-paddle-ball fa-2x"></i></div>
                        <h5 class="card-title fw-bold">Ping Pong Table</h5>
                        <p class="card-text">Professional-grade tables available for singles or doubles play.</p>
                        <p class="h6 text-primary">RM10 / hour</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <section class="mt-5 text-center">
            <a href="{{ url('/') }}" class="btn btn-outline-secondary">Back to Home</a>
            <a href="{{ route('contact') }}" class="btn btn-primary ms-2">Book Now</a>
        </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
