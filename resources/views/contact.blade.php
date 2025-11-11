<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact - SportsCentre</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <style>
            body { font-family: 'Roboto', sans-serif; }
            .contact-hero { background: linear-gradient(135deg,#dc3545 0%,#dc354550 100%); color: #fff; padding: 4rem 0; }
            .form-card { box-shadow: 0 6px 18px rgba(0,0,0,0.08); border: none; }
        </style>
    </head>
    <body>
        @include('partials.navbar')

        <header class="contact-hero text-center">
            <div class="container">
                <h1 class="display-5 fw-bold">Get in touch</h1>
                <p class="lead">Questions about memberships, classes, or our facilities? Send us a message and we'll get back to you shortly.</p>
            </div>
        </header>

        <main class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card form-card">
                        <div class="card-body p-4">
                            <form method="POST" action="{{ route('contact.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Your full name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="you@example.com">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" rows="6" class="form-control" placeholder="How can we help?">{{ old('message') }}</textarea>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Or call us at <strong>+1 (555) 123-4567</strong></small>
                                    <button class="btn btn-danger" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        @include('partials.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
