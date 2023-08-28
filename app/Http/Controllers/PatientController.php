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
        $results = DB::select('SELECT `id`,`name`, `specialty`, `email`, `phone` FROM USERS WHERE role = ?', ['doctor']);

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
        $results = DB::select('SELECT * FROM prescriptions WHERE patient_id = ?', [session('user')->id]);

        if (empty($results)) {
            return back()->with([
                'error' => 'Prescription Not found',
            ]);
        } else {
            return view('pages.patients.patient_prescription')->with('prescriptions', $results);
        }
    }
    function showInquiry($id)
    {
        $doctorId = $id;
        session([
            'doctorId' => $doctorId,
        ]);
        return view('pages.patients.inquiry');
    }
    function inquiry(Request $request)
    {
        $doctorId = session('doctorId');
        $patientId = session('user')->id;
        $message = $request->message;
        $request->validate([
            'message' => 'required|min:20',
        ]);
        DB::insert('INSERT INTO inquiries (doctor_id, patient_id, message) VALUES (?,?,?)', [$doctorId, $patientId, $message]);
        return redirect()->route('Doctors')->with(['success' => 'Inquiry Sended successfully']);
    }
}
