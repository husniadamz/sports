@php
$year = date('Y');
@endphp

<footer class="bg-dark text-light pt-5 mt-5">
    <style>
        footer h5,
        footer h6 {
            color: #ffc107;
        }

        footer a.text-light:hover {
            color: #ffc107 !important;
        }

        footer .text-muted {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        footer .btn-outline-light {
            border-color: #ffc107;
            color: #ffc107;
        }

        footer .btn-outline-light:hover {
            background-color: #ffc107;
            color: #212529;
        }

        footer small.text-muted i {
            color: #ffc107 !important;
        }

        footer .border-top {
            border-color: rgba(255, 255, 255, 0.15) !important;
        }
    </style>

    <div class="container">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">SportsCentre</h5>
                <p class="text-muted">Premium sports facilities and welcoming community to help you stay active and competitive.</p>
                <p class="mb-0"><i class="fas fa-map-marker-alt text-warning"></i> 123 Fitness Ave, Suite 100</p>
                <p><i class="fas fa-phone text-warning"></i> +1 (555) 123-4567</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3 mb-4">
                <h6 class="fw-bold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('welcome') }}" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-light text-decoration-none">About</a></li>
                    <li><a href="{{ route('services') }}" class="text-light text-decoration-none">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Opening Hours -->
            <div class="col-md-3 mb-4">
                <h6 class="fw-bold">Opening Hours</h6>
                <p class="text-muted mb-1">Mon–Fri: <span class="text-warning">5:00 – 23:00</span></p>
                <p class="text-muted">Sat–Sun: <span class="text-warning">7:00 – 20:00</span></p>
            </div>

            <!-- Social Media -->
            <div class="col-md-2 mb-4">
                <h6 class="fw-bold">Follow Us</h6>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-light btn-sm rounded-circle" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-sm rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-sm rounded-circle" href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <!-- Bottom -->
        <div class="row mt-4 pt-3 border-top border-secondary text-center">
            <div class="col-12">
                <small class="text-muted">
                    &copy; {{ $year }} <span class="text-warning fw-semibold">SportsCentre</span>. All rights reserved.
                </small>
            </div>
        </div>
    </div>
</footer>