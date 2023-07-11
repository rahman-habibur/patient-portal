<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.patient.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $patient = new Patient();

        $patient->title = $request->title;
        $patient->patient_name = $request->name;
        $patient->moblie = $request->mobile;
        $patient->patient_age = $request->age;
        $patient->patient_gender = $request->gender;
        $patient->patient_blood = $request->blood;
        $patient->guardian_name = $request->guardian;
        $patient->guardian_mobile = $request->guardian_mobile;
        $patient->email = $request->email;
        $patient->area = $request->area;
        $patient->address = $request->address;
        $patient->note = $request->note;
        $patient->patient_image = "12345";

        dd($request);
        // $patient->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $patient = Patient::all();
        return view('backend.patient.patientlist', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('backend.patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->patient_name = $request->name;
        $patient->patient_gender = $request->gender;
        $patient->patient_age = $request->age;
        $patient->patient_blood = $request->blood;
        $patient->guardian_name = $request->guardian;
        $patient->mobile = $request->mobile;
        $patient->guardian_mobile = $request->guardian_mobile;
        $patient->email = $request->email;
        $patient->area = $request->area;
        $patient->address = $request->address;
        $patient->note = $request->note;

        $patient->update();
        return redirect()->route('patient.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return back();
    }
}
