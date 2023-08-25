<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function showDashboard()
    {
        return view('pages.doctors.doc_index');
    }
}
