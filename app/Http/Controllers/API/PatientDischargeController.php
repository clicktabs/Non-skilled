<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientDischargeRequest;
use App\Models\Patient;
use App\Models\PatientDischarge;
use Illuminate\Http\Request;
use DataTables;

class PatientDischargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PatientDischargeRequest $request)
    {
        $discharge_patient = PatientDischarge::where('patient_id', $request->patient_id)->first();
        if($discharge_patient) {
            $patient_discharge = PatientDischarge::find($discharge_patient->id);
        } else {
            $patient_discharge = new PatientDischarge();
        }
        $patient_discharge->status = $request->patient_status;
        $patient_discharge->discharge_date = $request->discharge_date;
        $patient_discharge->patient_id = $request->patient_id;
        $patient_discharge->discharge_reason = $request->discharge_reason;
        $patient_discharge->discharge_comment = $request->discharge_comment;
        Patient::where('id', $request->patient_id)->update(['status'=>$request->patient_status]);
        $patient_discharge->save();
        
        // return redirect()->route($redirected_url)->with('success', 'Patient status update succesfully!. ');
        return response()->json([
            'status'=> 200,
            'message' => 'Patient status update succesfully!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function PatientDischargeListAjax(Request $request) {
        if($request->ajax())
        {
            $data= PatientDischarge::all();

            return DataTables::of($data)->addIndexColumn()
            ->addColumn('id', function ($discharge) {
                return '<input type="checkbox" name="discharge_ids[]" value="'.$discharge->id.'">';
             })
             ->addColumn('patient_name', function ($discharge) {
                return $discharge->patient->first_name . ' ' . $discharge->patient->last_name;
             })
             ->addColumn('mrn', function ($discharge) {
                return $discharge->patient->patient_code;
             })
             ->addColumn('dob', function ($discharge) {
                return $discharge->patient->date_of_birth;
             })
             ->addColumn('insurance', function ($discharge) {
                return $discharge->patient->insurance_type;
             })
             ->addColumn('address', function ($discharge) {
                return $discharge->address->address_line_1;
             })
             ->addColumn('phone', function ($discharge) {
                return $discharge->address->phone;
             })
             ->addColumn('date', function ($discharge) {
                return $discharge->discharge_date;
             })
             ->addColumn('npi', function ($discharge) {
                return $discharge->physician->physician->npi_number;
             })
             ->rawColumns(['id', 'patient_name', 'mrn', 'dob', 'insurance', 'address', 'phone', 'date', 'npi'])
            ->make(true);
        }
    }
}
