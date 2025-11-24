<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - SportsCentre</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			background: linear-gradient(135deg, #f8f9fa 0%, #ffe5e5 100%);
			min-height: 100vh;
			display: flex;
			flex-direction: column;
		}

		.navbar-custom {
			background-color: #ffffff;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
		}

		.login-wrapper {
			flex: 1;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 120px 1rem 2rem;
		}

		.login-card {
			background: #ffffff;
			border-radius: 1.25rem;
			box-shadow: 0 12px 30px rgba(220, 53, 69, 0.15);
			overflow: hidden;
			max-width: 960px;
			width: 100%;
		}

		.login-card .brand-panel {
			background: linear-gradient(135deg, rgba(220, 53, 69, 0.92), rgba(220, 53, 69, 0.75));
			color: #fff;
			padding: 3rem 2.5rem;
		}

		.brand-panel h2 {
			font-weight: 700;
		}

		.brand-panel p {
			opacity: 0.85;
		}

		.login-form-section {
			padding: 3rem 2.5rem;
		}

		.form-control {
			border-radius: 0.75rem;
			padding: 0.9rem 1rem;
		}

		.btn-login {
			background: linear-gradient(135deg, #dc3545, #ff5c74);
			border: none;
			border-radius: 0.75rem;
			padding: 0.9rem;
			font-weight: 600;
		}

		.btn-login:hover {
			background: linear-gradient(135deg, #c82333, #ff4c64);
		}

		.form-check-input:checked {
			background-color: #dc3545;
			border-color: #dc3545;
		}

		footer {
			background: #fff;
			box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
		<div class="container">
			<a class="navbar-brand fw-bold" href="{{ route('welcome') }}">
				<i class="fas fa-dumbbell text-danger"></i> SportsCentre Adam
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLogin">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarLogin">
				<ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
					<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}#contact">Contact</a></li>
					<li class="nav-item">
						<a class="btn btn-outline-danger px-4" href="{{ route('register') }}">Join Now</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="login-wrapper">
		<div class="login-card">
			<div class="row g-0">
				<div class="col-lg-5 brand-panel">
					<div class="d-flex flex-column h-100">
						<div>
							<div class="d-inline-flex align-items-center mb-3">
								<span class="badge bg-light text-danger rounded-pill px-3 py-2">Member Login</span>
							</div>
							<h2>Welcome Back, Athlete!</h2>
							<p class="mt-3">Access your personalized dashboard to manage classes, view workout plans, and track your progress.</p>
						</div>
						<div class="mt-auto pt-5">
							<h5 class="fw-semibold">New here?</h5>
							<p class="mb-3">Unlock exclusive training programs and nutrition plans tailored to your goals.</p>
							<a href="{{ route('register') }}" class="btn btn-light text-danger fw-semibold w-100">Create Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-7 login-form-section">
					<h3 class="fw-bold mb-2">Sign in to continue</h3>
					<p class="text-muted mb-4">Enter your credentials below to access your SportsCentre account.</p>
					<form action="{{ route('login.perform') }}" method="POST">
						@csrf
						<div class="mb-3">
							<label for="email" class="form-label fw-semibold">Email address</label>
							<div class="input-group">
								<span class="input-group-text bg-white border-end-0">
									<i class="fas fa-envelope text-danger"></i>
								</span>
								<input type="email"
									class="form-control border-start-0"
									id="email"
									name="email"
									value="{{ old('email') }}"
									placeholder="you@example.com"
									required>
							</div>
						</div>

						<div class="mb-3">
							<label for="password" class="form-label fw-semibold">Password</label>
							<div class="input-group">
								<span class="input-group-text bg-white border-end-0">
									<i class="fas fa-lock text-danger"></i>
								</span>
								<input type="password"
									class="form-control border-start-0"
									id="password"
									name="password"
									placeholder="Enter your password"
									required>
							</div>
						</div>

						<div class="d-flex justify-content-between align-items-center mb-4">
							<div class="form-check">
								<input class="form-check-input"
									type="checkbox"
									value="1"
									id="remember"
									name="remember">
								<label class="form-check-label" for="remember">
									Remember me
								</label>
							</div>
							<a href="#" class="text-danger text-decoration-none">Forgot password?</a>
							{{-- later you can change to route('password.request') --}}
						</div>

						<button type="submit" class="btn btn-login w-100 text-white">Sign In</button>
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