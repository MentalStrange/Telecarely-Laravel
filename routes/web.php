<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/index');
})->name('/');
// guest pages
Route::get('/login', [UsersController::class, 'showLogin']);
Route::get('/signup', [UsersController::class, 'showSignUp']);


// Users pages
Route::post('/login', [UsersController::class, 'login']);
Route::post('/signup', [UsersController::class, 'signup']);

// doctor pages
Route::get('/doctor/dashboard', [DoctorController::class, 'showDashboard'])->name('doctor');

// patient pages
Route::get('patient/dashboard', [PatientController::class, 'showDashboard'])->name('patient');

// logout function
Route::get('logout', [UsersController::class, 'logout'])->name('logout');
