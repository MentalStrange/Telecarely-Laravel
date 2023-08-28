<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    function showPatientPrescription($id)
    {
        $patientId = $id;
        session([
            'patientId' => $patientId
        ]);
        return view('pages.doctors.write_prescription');
    }
    function sendPrescription(Request $request)
    {
        $patientId = session('patientId');
        $doctorId = session('user')->id;
        $drug_name = $request->drug_name;
        $drug_amount = $request->drug_amount;

        $request->validate([
            'drug_name' => 'required',
            'drug_amount' => 'required|numeric'
        ]);
        DB::insert('INSERT INTO prescriptions (patient_id, doctor_id, drug_name, drug_amount) VALUES (?,?,?,?)', [$patientId, $doctorId, $drug_name, $drug_amount]);
        return back()->with(['success' => 'Prescription sent successfully']);
    }
}
