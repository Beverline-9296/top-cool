<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Top-Cool Aluminium & Glass - Simple appointment booking system
| This application provides a public landing page with appointment booking
| functionality and email notifications.
|
*/

// Homepage - Landing page with services showcase
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Public appointment booking routes
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])
    ->middleware('throttle:5,1') // Rate limit: 5 requests per minute
    ->name('appointments.store');
