<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientEmergencyPrecedence;
use App\Models\PatientEmergencyAlternateAddress;
use App\Models\PatientEmergencyContact;
use App\Models\PatientExtraInfo;
use Illuminate\Http\Request;
use DataTables;

class PatientEmergencyPrecedenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PatientEmergencyPrecedence $request)
    {
        $patient_emergency = new PatientEmergencyContact();
        $patient_emergency->patient_id = $request->patient_id;
        $patient_emergency->name = $request->emergency_first_name;
        $patient_emergency->relationship_to_patient = $request->emergency_relationship_patient;
        $patient_emergency->address = $request->emergency_patient_address;
        $patient_emergency->city = $request->emergency_patient_city;
        $patient_emergency->state = $request->emergency_patient_state;
        $patient_emergency->zip = $request->emergency_patient_zip;
        $patient_emergency->phone = $request->emergency_patient_phone;
        $patient_emergency->alternate_phone = $request->emergency_alternate_phone;
        $patient_emergency->save();

        $patient_emergency_alternate = new PatientEmergencyAlternateAddress();
        $patient_emergency_alternate->patient_id = $request->patient_id;
        $patient_emergency_alternate->name = $request->emergency_alternate_first_name;
        $patient_emergency_alternate->relationship_to_patient = $request->emergency_relationship_to_patient;
        $patient_emergency_alternate->address = $request->emergency_relationship_address;
        $patient_emergency_alternate->city = $request->emergency_relationship_city;
        $patient_emergency_alternate->state = $request->emergency_relationship_state;
        $patient_emergency_alternate->zip = $request->emergency_relationship_zip;
        $patient_emergency_alternate->phone = $request->emergency_relationship_phone;
        $patient_emergency_alternate->alternate_phone = $request->emergency_relationship_alternate_phone;
        $patient_emergency_alternate->save();

        if(PatientExtraInfo::where('patient_id', $request->patient_id )->exists()) {
            $patient_extra_info_update = PatientExtraInfo::where('patient_id', $request->patient_id )->first();
            $patient_extra_info_update->emergency_preparedness = json_encode($request->emergency_preparedness);
            $patient_extra_info_update->coordination_of_care = json_encode($request->coordination_of_care);
            $patient_extra_info_update->save();
            return response()->json([
                'status'=> 200,
                'data' => $patient_extra_info_update
            ]);
        } else {
            return response()->json([
                'status'=> 400,
                'message' => 'Please save patient demographic first.'
            ]);
        }
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

    public function PatientEmergencyContactAjax(Request $request) {
        if($request->ajax())
        {
            $data= PatientEmergencyContact::all();
            // dd($data);
            // $data = Patient::select('first_name', 'middle_name', 'last_name', 'patient_code')->where()->;

            /* if($request->filled('from_date') && $request->filled('to_date'))
            {
                $data = $data->whereBetween('created_at', [$request->from_date, $request->to_date]);
            } */

            return DataTables::of($data)->addIndexColumn()
            ->addColumn('id', function ($contact) {
                return '<input type="checkbox" name="contact_ids[]" value="'.$contact->patient_id.'">';
             })
             ->addColumn('name', function ($contact) {
                return $contact->name;
             })
             ->addColumn('patient', function ($contact) {
                return $contact->patient->first_name . ' ' . $contact->patient->last_name;
             })
             ->addColumn('relationship', function ($contact) {
                return ucwords($contact->relationship_to_patient);
             })
             ->addColumn('phone', function ($contact) {
                return $contact->phone;
             })
             ->addColumn('address', function ($contact) {
                return $contact->address;
             })
             ->rawColumns(['id', 'name', 'patient', 'relationship', 'phone', 'address'])
            ->make(true);
        }
    }
}
