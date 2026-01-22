<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services/airport-transfer', function () {
    return view('services.airport-transfer');
});

Route::get('/services/hourly-booking', function () {
    return view('services.hourly-booking');
});

Route::get('/services/wheelchair-transfer', function () {
    return view('services.wheelchair-transfer');
});

Route::get('/services/bulky-items', function () {
    return view('services.bulky-items');
});

Route::get('/online-booking', function () {
    // Placeholder - user might want a real form here later
    return view('contact');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/fleet', function () {
    return view('fleet');
});

Route::get('/blog', function () {
    return view('blog');
});
