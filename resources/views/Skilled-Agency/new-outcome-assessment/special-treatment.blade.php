
<div id="discipline-treatment" class="tabcontent tab-pane {{isset($active) && $active=='treatment'?'active':''}}" role="tabpanel">
    <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
             @include('skilled-agency.outcome-assessment.page26')
         <div class="mt-4"><button type="submit" value="treatment" name="treatment" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="physician-order">Save & Continue</button></div>
         <div class="mt-[20px]"><button type="submit" value="activeDig" name="activeDig" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="health-conditions">Save & Exit</button></div>
    </form>
</div>



