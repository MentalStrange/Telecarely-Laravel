<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    function showDashboard()
    {
        return view('pages.doctors.doc_index');
    }
    function showPatient()
    {
        $result = DB::select('SELECT * FROM inquiries where doctor_id = ?', [session('user')->id]);
        if (!$result) {
            return back()->with(['error' => 'No patient found']);
        }
        return view('pages.doctors.doctor_patient')->with('patients', $result);
    }
}
