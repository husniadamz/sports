<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Contact page (GET)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact form (POST) - simple validation and redirect with success message
Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:150',
        'message' => 'required|string|max:2000',
    ]);

    // Log the contact message for now. In a real app you might send an email or store it.
    Log::info('Contact form submitted', $data);

    return back()->with('success', 'Thanks — your message has been received. We will get back to you soon.');
})->name('contact.submit');

// Show login page (if not already exist)
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login')
    ->middleware('guest');

// Handle login form submit
Route::post('/login', [LoginController::class, 'login'])
    ->name('login.perform')
    ->middleware('guest');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware('auth')->name('dashboard');
