<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InfectionControl;
use App\Http\Requests\InfectionControlRequest;
use DataTables;

class InfectionController extends Controller
{
    public function index()
    {
        return view('skilled-agency.infections.infection-control');
    }

    public function store(InfectionControlRequest $request)
    {
        $validatedData = $request->validated();
        $infectionReport = InfectionControl::create($validatedData);

        return redirect()->route('skilled-agency.infection-control.index')->with('success', 'Infection Added successfully.');
    }

    public function PatientInfectionListAjax(Request $request) {
        if($request->ajax())
        {
            $data= InfectionControl::all();

            return DataTables::of($data)->addIndexColumn()
            ->addColumn('id', function ($infection) {
                return '<input type="checkbox" name="infection_ids[]" value="'.$infection->id.'">';
             })
             ->addColumn('patient_name', function ($infection) {
                return $infection->patientInfo->first_name . ' ' . $infection->patientInfo->last_name;
             })
             ->addColumn('mrn', function ($infection) {
                return $infection->patientInfo->patient_code;
             })
             ->addColumn('dob', function ($infection) {
                return $infection->patientInfo->date_of_birth;
             })
             ->addColumn('insurance', function ($infection) {
                return $infection->patientInfo->insurance_type;
             })
             ->addColumn('address', function ($infection) {
                return $infection->address->address_line_1;
             })
             ->addColumn('phone', function ($infection) {
                return $infection->address->phone;
             })
             ->addColumn('date', function ($infection) {
                return $infection->dateReported;
             })
             ->addColumn('npi', function ($infection) {
                return $infection->physician->physician->npi_number;
             })
             ->rawColumns(['id', 'patient_name', 'mrn', 'dob', 'insurance', 'address', 'phone', 'date', 'npi'])
            ->make(true);
        }
    }
}
