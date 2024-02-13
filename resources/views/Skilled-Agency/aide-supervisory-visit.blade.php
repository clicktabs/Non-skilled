@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/nursingVisitNote/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/oasisCss/style_page14.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/patient/communication/style.css') }}" />

@endsection
@section('content')
<main>
   <div class="vt p-2">@include('layouts.company_info')</div>
   <div class="container ">
      <div class="form-holder">
         <form action="{{route('skilled-agency.aide-supervisory-visit.store')}}" method="post" id="oasis-e-form">
            @csrf
            <h3 class="text-white bg-dark py-2 px-3">Aide Supervisory Visit</h3>
            <table class="table table-bordered align-middle default-td">
               <tr>
                  <td class="bg-secondary-subtle" colspan="4">
                     <b>Visit Assessment</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <span class="fw-medium">Supervision Date:</span>
                  </td>
                  <input type="hidden" name="schedule_id" value="{{isset($schedule_id)?$schedule_id:''}}">
                  <td><input type="date" class="form-control" name="SupervisionDate" value="{{ $supervisory ? $supervisory->SupervisionDate : '' }}"></td>
                  <td>
                     <div class="input-group">
                        <label class="input-group-text">Start:</label>
                        <input type="time" name="Start" class="form-control" value="{{ $supervisory ? $supervisory->Start : '' }}">
                     </div>
                  </td>
                  <td>
                    <div class="input-group">
                        <label class="input-group-text">End:</label>
                        <input type="time" name="End" class="form-control" value="{{ $supervisory ? $supervisory->End : '' }}">
                    </div>
                </td>
               </tr>
               <tr>
                <td><span class="fw-medium">Supervisor Name:</span></td>
                <td colspan="3">
                    <input type="text" name="SupervisorName" value="{{ $supervisory ? $supervisory->SupervisorName : '' }}">
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Clinician Name:</span></td>
                <td colspan="3">
                    <input type="text" name="ClinicianName" class="form-control" value="{{ $supervisory ? $supervisory->ClinicianName : '' }}">
                    <span class="fw-medium"><i>Name of person being supervised</i></span>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Clinician Present at Time of Visit:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input" value="yes" {{ $supervisory && $supervisory->cpatov === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input" value="no" {{ $supervisory && $supervisory->cpatov === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Notifies client/caregiver of schedule:</span></td>
                <td colspan="3">
                    <input type="date" name="schedulevisit" class="form-control" value="{{ $supervisory ? $supervisory->schedulevisit : '' }}">
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Reports for duty as assigned:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="dutyAssigned" class="form-check-input" value="yes" {{ $supervisory && $supervisory->dutyAssigned === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="dutyAssigned" class="form-check-input" value="no" {{ $supervisory && $supervisory->dutyAssigned === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Cooperative with client and others:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="Cooperative" class="form-check-input" value="yes" {{ $supervisory && $supervisory->Cooperative === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="Cooperative" class="form-check-input" value="no" {{ $supervisory && $supervisory->Cooperative === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Courteous toward client and others:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="Courteous" class="form-check-input" value="yes" {{ $supervisory && $supervisory->Courteous === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="Courteous" class="form-check-input" value="no" {{ $supervisory && $supervisory->Courteous === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Maintains an open communication with client and others:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="communication" class="form-check-input" value="yes" {{ $supervisory && $supervisory->communication === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="communication" class="form-check-input" value="no" {{ $supervisory && $supervisory->communication === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Follows client plan of care as instructed:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="Followsinstruction" class="form-check-input" value="yes" {{ $supervisory && $supervisory->Followsinstruction === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="Followsinstruction" class="form-check-input" value="no" {{ $supervisory && $supervisory->Followsinstruction === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Documents appropriately:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="Documentsappropriately" class="form-check-input" value="yes" {{ $supervisory && $supervisory->Documentsappropriately === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="Documentsappropriately" class="form-check-input" value="no" {{ $supervisory && $supervisory->Documentsappropriately === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Demonstrates competency with assigned tasks:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="competency" class="form-check-input" value="yes" {{ $supervisory && $supervisory->competency === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="competency" class="form-check-input" value="no" {{ $supervisory && $supervisory->competency === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Timely notification to supervisor of client's needs or changes
                    in condition:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="Timely" class="form-check-input" value="yes" {{ $supervisory && $supervisory->Timely === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="Timely" class="form-check-input" value="no" {{ $supervisory && $supervisory->Timely === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Adheres to organizational policies and procedures:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="Adheres" class="form-check-input" value="yes" {{ $supervisory && $supervisory->Adheres === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="Adheres" class="form-check-input" value="no" {{ $supervisory && $supervisory->Adheres === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Complies with infection prevention and control policies and procedures:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="Complies" class="form-check-input" value="yes" {{ $supervisory && $supervisory->Complies === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="Complies" class="form-check-input" value="no" {{ $supervisory && $supervisory->Complies === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>
            <tr>
                <td><span class="fw-medium">Honors patient rights:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="patientrights" class="form-check-input" value="yes" {{ $supervisory && $supervisory->patientrights === 'yes' ? 'checked' : '' }}> Yes</label>
                    <label class="form-check-label"><input type="radio" name="patientrights" class="form-check-input" value="no" {{ $supervisory && $supervisory->patientrights === 'no' ? 'checked' : '' }}> No</label>
                </td>
            </tr>

            <tr><td class="border-0"></td></tr>

            <tr>
                <td class="bg-secondary-subtle" colspan="4">
                    <b>Changes and/or Instructions</b>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <textarea name="Changes" id="" cols="30" rows="4" class="form-control">{{ $supervisory ? $supervisory->Changes : '' }}</textarea>
                </td>
            </tr>

            </table>
               <div class=" py-5">
                  <button type="submit" class="bg-primary btn btn-primary">Save</button>
               </div>
         </form>
      </div>
   </div>


 @endsection

 @section('extra_js')
