<?php

use Illuminate\Support\Facades\Route;
 
//home
Route::get('/', function () {
    return view('index');
});

// Courses route
Route::get('/courses', function () {
    return view('courses'); // Create courses.blade.php if not present
})->name('courses');

// Teacher route
Route::get('/teacher', function () {
    return view('teacher'); // Create teacher.blade.php in your views folder
})->name('teacher');

// About route
Route::get('/about', function () {
    return view('about'); // Ensure you have about.blade.php in your views
})->name('about');

// Pricing route
Route::get('/pricing', function () {
    return view('pricing'); // Create pricing.blade.php if not present
})->name('pricing');

// Blog route (can be a dynamic blog page or static)
Route::get('/blog', function () {
    return view('blog'); // Create blog.blade.php if needed
})->name('blog');

// Contact route
Route::get('/contact', function () {
    return view('contact'); // Ensure you have contact.blade.php
})->name('contact');