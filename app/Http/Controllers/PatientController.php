<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    function showDashboard()
    {
        return view('pages.patients.patient_index');
    }
    // show all doctores for patient....
    function showAllDoctors()
    {
        $results = DB::select('SELECT `name`, `specialty`, `email`, `phone` FROM USERS WHERE role = ?', ['doctor']);

        if (empty($results)) {
            return back()->with([
                'error' => 'Doctors Not found',
            ]);
        } else {
            return view('pages.patients.all_doctors')->with('doctors', $results);
        }
    }

    function showPrescription()
    {
        $results = DB::select('SELECT `doctor_id`, `drug_name`, `drug_amount` FROM prescriptions WHERE patient_id = ?', [session('user')->id]);

        if (empty($results)) {
            return back()->with([
                'error' => 'Prescription Not found',
            ]);
        } else {
            return view('pages.patients.patient_prescription')->with('prescriptions', $results);
        }
    }
}
