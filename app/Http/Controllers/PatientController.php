<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    function showDashboard()
    {
        return view('pages.patients.patient_index');
    }
}
