<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ListingController;


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

Route::get('/bookings/listing', [ListingController::class, 'index'])->middleware(['auth', 'verified'])->name('listing');


Route::post('/bookings/listing', [ListingController::class, 'store'])->middleware(['auth', 'verified'])->name('listing.store');
