<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/terms', function () {
    return view('terms.terms');
})->name('terms');



// auth routes from breeze package
require __DIR__ . '/auth.php';

Route::get('/bookings/listing', function () {
    return view('bookings.listing');
})->name('listing');
