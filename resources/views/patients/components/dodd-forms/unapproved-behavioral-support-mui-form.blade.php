

   {{-- @extends('layouts.app')

   @section('content') --}}

       <main>

   <div class="container pt-5">
      <div class="page-header">
         <img src="img/Logo.jpg" alt="" width="300px">
         <h1 class="text-center mt-5 mb-0 fs-2">Unapproved Behavioral Support MUI Form</h1>
      </div>
      <div class="form-holder pt-4 pb-4">
         <form action="store" method="post" id="oasis-e-form">
            @csrf
            <table class="table table-bordered align-middle default-td">
               <tr>
                  <td>
                     <div class="d-block">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Individual’s Name:</label>
                           <input style="min-width: 150px;" type="text" name="IndividualsName" class="form-control">
                        </div>
                     </div>
                     <div class="d-block">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Date of UBS:</label>
                           <input style="min-width: 150px;" type="date" name="DateofUBS" class="form-control">
                        </div>
                     </div>
                     <div class="d-block">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Name of Person Completing Form:</label>
                           <input style="min-width: 150px;" type="text" name="PersonCompletingForm" class="form-control">
                        </div>
                     </div>
                     <div class="d-block">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Title:</label>
                           <input style="min-width: 150px;" type="text" name="Title" class="form-control">
                        </div>
                     </div>
                     <div class="d-block">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Contact Information:</label>
                           <input style="min-width: 150px;" type="text" name="ContactInformation" class="form-control">
                        </div>
                     </div>
                  </td>
                  <td>
                     <div class="d-block">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Date Form Completed:</label>
                           <input style="min-width: 150px;" type="date" name="DateFormCompleted" class="form-control">
                        </div>
                     </div>
                     <div class="d-block">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">MUI Number:</label>
                           <input style="min-width: 150px;" type="text" name="MUINumber" class="form-control">
                        </div>
                     </div>
                     <div class="d-block">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Provider:</label>
                           <input style="min-width: 150px;" type="text" name="Provider" class="form-control">
                        </div>
                     </div>
                  </td>
               </tr>
            </table>

            <table class="table table-bordered align-middle default-td">
               <tr>
                  <td><b>UBS/HISTORY ANTECEDENTS</b></td>
               </tr>
               <tr>
                  <td>
                     <p class="mb-1">Please list what led to UBS. Provide a time line and whether this individual has a history of this behavior. Provider details of prevention measures from prior incidents. How many times was the intervention/support used? How long (total) was the individual restrained?</p>
                     <textarea name="whatledtoUBS" id="" cols="30" rows="8" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td><b>BEHAVIOR STRATEGIES</b></td>
               </tr>
               <tr>
                  <td>
                     <p class="mb-1">Did the individual have behavioral support strategies outlined in their service plan? Did the staff know about the strategies? Was the staff trained on the implementation of the behavioral support strategies?</p>
                     <textarea name="behavioralsupport " id="" cols="30" rows="6" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td><b>TYPE OF UBS <small>(CHECK ALL THAT APPLY)</small></b></td>
               </tr>
               <tr>
                  <td>
                     <p class="mb-1"><b><u>Physical Restraint:</u></b></p>
                     <div class="row row-flex">
                        <div class="col-lg">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Baskethold" class="form-check-input"> Baskethold</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MultiplePersonCarry" class="form-check-input"> Multiple Person Carry</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MultiplePersonEscort" class="form-check-input"> Multiple Person Escort</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="OnePersonCarry" class="form-check-input"> One Person Carry</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="OnePersonEscort" class="form-check-input"> One Person Escort</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="OnePersonRestraint" class="form-check-input"> One Person Restraint</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="DownwithResistance" class="form-check-input"> Physically Prompted Hands Down with Resistance</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Prone" class="form-check-input"> Prone</label></div>
                        </div>
                        <div class="col-lg">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MultipleAppendages" class="form-check-input"> Restraint of Multiple Appendages</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="SeatedRestraint" class="form-check-input"> Seated Restraint</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="SideRestraint" class="form-check-input"> Side Restraint</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="StandingRestraint" class="form-check-input"> Standing Restraint</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Supine" class="form-check-input"> Supine</label></div>
                           <div class="d-block">
                              <label class="form-check-label"><input type="checkbox" name="TimeOutlist details" class="form-check-input"> Time Out- list details of time-out, including length of </label>
                              <div class="input-group clean-input-group d-inline-flex w-auto">
                                 <label class="input-group-text fw-medium">time:</label>
                                 <input style="width: 100px;" type="time" name="time" class="form-control">
                              </div> 
                           </div>
                           <div class="d-block">
                              <input type="checkbox" id="" class="form-check-input">
                              <div class="input-group clean-input-group d-inline-flex w-auto">
                                 <label class="input-group-text fw-medium">Other:</label>
                                 <input style="min-width: 150px;" type="text" name="Other" class="form-control">
                              </div> 
                           </div>
                        </div>
                     </div>

                     <p class="mt-3 mb-1"><b><u>Mechanical:</u></b></p>
                     <div class="row row-flex">
                        <div class="col-lg">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="FullBody-papooseBoardWrap" class="form-check-input"> Full Body-papoose Board Wrap</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="FullBody-seatedPosition" class="form-check-input"> Full Body-seated Position</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="FullBody-supinePosition" class="form-check-input"> Full Body-supine Position</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="GaitBelt" class="form-check-input"> Gait Belt</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Helmet" class="form-check-input"> Helmet</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="LockedSeatBelt" class="form-check-input"> Locked Seat Belt/Vest – not during transportation</label></div>
                        </div>
                        <div class="col-lg">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Mitts" class="form-check-input"> Mitts</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Splints" class="form-check-input"> Splints</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Transportationlocked" class="form-check-input"> Transportation – locked seatbelt/vest/others</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Wheelchaircontrolsdisabled" class="form-check-input"> Wheelchair controls disabled</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Wheelchairforindividual" class="form-check-input"> Wheelchair for individual - not used regularly</label></div>
                           <div class="d-block">
                              <input type="checkbox" id="" class="form-check-input">
                              <div class="input-group clean-input-group d-inline-flex w-auto">
                                 <label class="input-group-text fw-medium">Other:</label>
                                 <input style="min-width: 150px;" type="text" name="OtherMechanical" class="form-control">
                              </div> 
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td><b>INJURIES</b></td>
               </tr>
               <tr>
                  <td>
                     <p class="mb-1">Were there any injuries to the individual or anyone else involved in the UBS? Did the individual receive timely medical attention?</p>
                     <textarea name="injuries" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td><b>DESCRIPTION</b></td>
               </tr>
               <tr>
                  <td>
                     <p class="mb-1">Describe in detail the intervention/support and the reason used. How was it necessary for the health and welfare if individual or other individuals?</p>
                     <textarea name="interventionsupport" id="" cols="30" rows="6" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td><b>CAUSE AND CONTRIBUTING FACTORS <small>(CHECK ALL THAT APPLY)</small></b></td>
               </tr>
               <tr>
                  <td>
                     <div class="row row-flex">
                        <div class="col-lg">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="SupervisionNotMet" class="form-check-input"> Supervision Not Met</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="StaffRatioNotAppropriate" class="form-check-input"> Staff Ratio Not Appropriate</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="DietNotFollowed" class="form-check-input"> Diet Not Followed</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AskedtoCompleteTask" class="form-check-input"> Asked to Complete Task</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ChangeinRoutine" class="form-check-input"> Change in Routine</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ExcessiveNoise" class="form-check-input"> Excessive Noise</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AttentionUnavailable" class="form-check-input"> 1:1 Attention Unavailable</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="PeerAggression" class="form-check-input"> Peer Aggression</label></div>
                        </div>
                        <div class="col-lg">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="OutingCancelled" class="form-check-input"> Outing Cancelled</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ControlIssues" class="form-check-input"> Control Issues – Staff/Family/Peers</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MedicationChanges" class="form-check-input"> Medication Changes</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Illness" class="form-check-input"> Illness</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="PossibleHallucination" class="form-check-input"> Possible Hallucination</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="LossImportantRelationship" class="form-check-input"> Loss of Important Relationship</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ISP_BSPNotFollowed" class="form-check-input"> ISP/BSP Not Followed</label></div>
                        </div>
                     </div>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text fw-medium">Other:</label>
                        <input style="min-width: 150px;" type="text" name="Otherinterventionsupport" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td><b>PREVENTION MEASURES <small>(CHECK ALL THAT APPLY)</small></b></td>
               </tr>
               <tr>
                  <td>
                     <div class="row row-flex">
                        <div class="col-lg">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="environmentalchanges" class="form-check-input"> Physical/Social environmental changes</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AgencyPolicy_SystemChange" class="form-check-input"> Agency Policy/System Change</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Stafftraining" class="form-check-input"> Staff training</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Counseling" class="form-check-input"> Counseling</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="addressISPchanges" class="form-check-input"> Team meeting to address ISP changes</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AppointmentMedicalcare" class="form-check-input"> Appointment with Medical care provider</label></div>
                        </div>
                        <div class="col-lg">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Medicationchange" class="form-check-input"> Medication changes</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="appointmentscheduled" class="form-check-input"> Follow up appointment scheduled</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="PT_OT_Speechreferra" class="form-check-input"> PT/OT/Speech referral made to address Communication or mobility concern</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Dietchangeordered" class="form-check-input"> Diet change ordered</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Homehealthcare" class="form-check-input"> Home health care</label></div>
                        </div>
                     </div>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text fw-medium">Other:</label>
                        <input style="min-width: 150px;" type="text" name="OtherPREVENTION" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td><b>INVESTIGATIVE AGENT REVIEW</b></td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-0"><b>Comments and Questions:</b></label>
                     <textarea name="CommentsQuestions" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="row row-flex">
                        <div class="col-md">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text fw-medium">IA NAME:</label>
                              <input style="min-width: 150px;" type="text" name="IANAME" class="form-control">
                           </div>
                        </div>
                        <div class="col-md">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text fw-medium">REVIEW COMPLETED DATE:</label>
                              <input style="min-width: 150px;" type="text" name="REVIEWCOMPLETEDDATE" class="form-control">
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
            </table>
            <p class="text-end">DODD MUI – UBS MUI FORM DECEMBER 2019</p>
            <div class=" mt-4">
               <button type="submit" class=" btn btn-primary btn-block active" >Save</button>
           </div>
         </form>
      </div>
   </div>

   <script src="bs/js/bootstrap.min.js"></script>
</main>

{{-- @endsection --}}
