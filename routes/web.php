<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/index');
})->name('/');
// guest pages
Route::group(['middleware' => 'Guests'], function () {
    Route::get('/login', [UsersController::class, 'showLogin'])->name('showLogin');
    Route::get('/signup', [UsersController::class, 'showSignUp']);
    Route::post('/login', [UsersController::class, 'login'])->name('login');
    Route::post('/signup', [UsersController::class, 'signup'])->name('signup');
});


// Users pages
Route::get('logout', [UsersController::class, 'logout'])->name('logout');

// doctor pages
Route::group(['middleware' => 'DoctorMiddleware'], function () {
    Route::get('/doctor/dashboard', [DoctorController::class, 'showDashboard'])->name('doctor');
    Route::get('/doctor/patient', [DoctorController::class, 'showPatient'])->name('patients');
    Route::get('/doctor/patient/{patientId}', [DoctorController::class, 'showPatientPrescription'])->name('showPatientPrescription');
    Route::post('/doctor/patient', [DoctorController::class, 'sendPrescription'])->name('sendPrescription');
});


// patient pages
Route::group(['middleware' => 'PatientMiddleware'], function () {
    Route::get('patient/dashboard', [PatientController::class, 'showDashboard'])->name('patient');
    Route::get('patient/allDoctors', [PatientController::class, 'showAllDoctors'])->name('Doctors');
    Route::get('patient/prescription', [PatientController::class, 'showPrescription'])->name('prescription');
    Route::get('patient/allDoctors/{id}', [PatientController::class, 'showInquiry'])->name('showInquiry');
    Route::post('patient/allDoctors', [PatientController::class, 'inquiry'])->name('inquiry');
});


// logout function
// Route::get(
//     'logout',
//     [UsersController::class, 'logout']
// )->name('logout');
