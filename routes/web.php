<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EditDashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;


// Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);


// Register Route
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


// Reservation
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation');
Route::get('/dashboard', [ReservationController::class, 'index'])->name('dashboard')->middleware('auth');

// EditDashboard
Route::get('/dashboard/edit', [EditDashboardController::class, 'index'])->name('editdashboard')->middleware('auth');


// RoomsDashboard
Route::get('/dashboard/edit/rooms', [RoomsController::class, 'index'])->name('rooms')->middleware('auth');



Route::get('/', function () {
    return view('welcome');
})->name('/');