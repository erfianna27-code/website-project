<?php

use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Halaman Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Halaman Gallery
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Halaman Career
Route::get('/career', function () {
    return view('career');
})->name('career');