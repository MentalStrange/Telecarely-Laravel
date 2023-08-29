<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    function showDashboard()
    {
        $patientCount = DB::select('SELECT COUNT(id) as patientCount FROM users WHERE role = ? ', ['patient']);
        if (!empty($patientCount)) {
            session([
                'patientCount' => $patientCount[0]->patientCount
            ]);
        }
        // select number of doctor
        $prescriptionsCount = DB::select('SELECT COUNT(id) as prescriptionCount FROM prescriptions where patient_id = ? ', [session('user')->id]);
        if (!empty($prescriptionsCount)) {
            session([
                'prescriptionCount' => $prescriptionsCount[0]->prescriptionCount
            ]);
        }
        return view('pages.patients.patient_index');
    }
    // show all doctors for patient....
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

        $doctorIds = [];
        foreach ($results as $result) {
            $doctorIds[] = $result->doctor_id;
        }

        $doctorNames = [];
        foreach ($doctorIds as $doctorId) {
            $doctor = DB::select('SELECT * FROM users WHERE id = ?', [$doctorId]);
            $doctorNames[] = $doctor[0]->name;
        }
        if (empty($results)) {
            return back()->with([
                'error' => 'Prescription Not found',
            ]);
        } else {
            session([
                'doctorNames' => $doctorNames,
            ]);
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
