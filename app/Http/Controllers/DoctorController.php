<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function showDashboard()
    {
        // select number of patient
        $patientCount = DB::select('SELECT COUNT(id) as patientCount FROM users WHERE role = ? ', ['patient']);
        if (!empty($patientCount)) {
            session([
                'patientCount' => $patientCount[0]->patientCount
            ]);
        }
        // select number of doctor
        $doctorCount = DB::select('SELECT COUNT(id) as doctorCount FROM users where role = ? ', ['doctor']);
        if (!empty($doctorCount)) {
            session([
                'doctorCount' => $doctorCount[0]->doctorCount
            ]);
        }
        // select number of sessions patient
        $sessions = DB::select('SELECT COUNT(id) as sessionCount FROM inquiries WHERE doctor_id = ? ', [session('user')->id]);
        if (!empty($sessions)) {
            session([
                'sessionCount' => $sessions[0]->sessionCount
            ]);
        }
        return view('pages.doctors.doc_index');
    }
    function showPatient()
    {
        $results = DB::select('SELECT * FROM inquiries where doctor_id = ?', [session('user')->id]);

        // select patients id using results
        $patientIds = [];
        foreach ($results as $result) {
            $patientIds[] = $result->patient_id;
        }
        // select patient name using patients id
        $patientNames = [];
        foreach ($patientIds as $patientId) {
            $patient = DB::select('SELECT * FROM users where id = ?', [$patientId]);
            $patientNames[] = $patient[0]->name;
        }
        if (!$results) {
            return back()->with(['error' => 'No patient found']);
        }
        session([
            'patientNames' => $patientNames
        ]);
        return view('pages.doctors.doctor_patient')->with('patients', $results);
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

    // select the count of patients
    function countPatient()
    {
        $count = DB::select('SELECT COUNT(id) FROM users WHERE role = ? ', ['patient']);

        if (!empty($count)) {
            return session([
                'count' => $count[0]
            ]);
            return with([
                'success' => 'successfully counted'
            ]);
        }
    }
}
