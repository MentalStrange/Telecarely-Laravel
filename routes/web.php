<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/index');
})->name('/');
// guest pages
Route::get('/login', [UsersController::class, 'showLogin'])->name('showLogin');
Route::get('/signup', [UsersController::class, 'showSignUp']);


// Users pages
Route::post('/login', [UsersController::class, 'login']);
Route::post('/signup', [UsersController::class, 'signup']);

// doctor pages
Route::get('/doctor/dashboard', [DoctorController::class, 'showDashboard'])->name('doctor');
Route::get('/doctor/patient', [DoctorController::class, 'showPatient'])->name('patients');
Route::get('/doctor/patient/{patientId}', [DoctorController::class, 'showPatientPrescription'])->name('showPatientPrescription');
Route::post('/doctor/patient', [DoctorController::class, 'sendPrescription'])->name('sendPrescription');

// patient pages
Route::get('patient/dashboard', [PatientController::class, 'showDashboard'])->name('patient');
Route::get('patient/allDoctors', [PatientController::class, 'showAllDoctors'])->name('Doctors');
Route::get('patient/prescription', [PatientController::class, 'showPrescription'])->name('prescription');
Route::get('patient/allDoctors/{id}', [PatientController::class, 'showInquiry'])->name('showInquiry');
Route::post('patient/allDoctors', [PatientController::class, 'inquiry'])->name('inquiry');

// logout function
Route::get(
    'logout',
    [UsersController::class, 'logout']
)->name('logout');
