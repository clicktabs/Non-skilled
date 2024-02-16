   {{-- @extends('layouts.app')

   @section('content') --}}

       <main>

   <div class="container pt-5">
      <div class="page-header">
         <img src="img/Logo.jpg" alt="" width="300px">
      </div>
      <div class="vt form-holder pt-5 pb-5">
         <form action="reportui" method="POST" id="oasis-e-form">
            @csrf
            <table class="table table-bordered align-middle default-td mb-0">
               <tr>
                  <td class="py-3" colspan="2">
                     <h1 class="text-center fs-2 my-0">DODD – Possible or Determined MUI Report Form</h1>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <div class="input-group clean-input-group">
                        <label class="input-group-text">Provider Name & Address</label>
                        <input style="min-width: 200px;" type="text" name="ProviderNameAddress" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="input-group clean-input-group">
                        <label class="input-group-text">Individual’s Name:</label>
                        <input style="min-width: 200px;" type="text" name="IndividualsName" class="form-control">
                     </div>
                  </td>
                  <td>
                     <div class="input-group clean-input-group">
                        <label class="input-group-text">DOB:</label>
                        <input style="min-width: 200px;" type="text" name="dob" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="input-group clean-input-group">
                        <label class="input-group-text">Address:</label>
                        <input style="min-width: 200px;" type="text" name="Address" class="form-control">
                     </div>
                  </td>
                  <td>
                     <div class="input-group clean-input-group">
                        <label class="input-group-text">City/County:</label>
                        <input style="min-width: 200px;" type="text" name="city" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <div class="row row-flex gy-2">
                        <div class="col-auto">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">Date of Incident:</label>
                              <input style="min-width: 200px;" type="date" name="DateofIncident" class="form-control">
                           </div>
                        </div>
                        <div class="col-auto">
                           <div class="row row-flex">
                              <div class="col-auto">
                                 <div class="input-group clean-input-group">
                                    <label class="input-group-text">Time of Incident:</label>
                                    <input style="min-width: 120px;" type="time" name="TimeofIncident" class="form-control">
                                 </div>
                              </div>
                              <div class="col-auto labels-group">
                                 <label class="form-check-label"><input type="radio" name="ampm" class="form-check-input"> AM</label>
                                 <label class="form-check-label"><input type="radio" name="ampm" class="form-check-input"> PM</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="" class="form-label mb-1">Location of Incident (home in bathroom, at the mall, lunchroom at work):</label>
                     <textarea name="LocationofIncident" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="" class="form-label mb-1">Description of Incident (Who, What, Where, When):</label>
                     <textarea name="DescriptionofIncident" id="" cols="30" rows="6" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="" class="form-label mb-1">Injury – Describe Type & Location:</label>
                     <textarea name="InjuryDescribe" id="" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="" class="form-label mb-1">Immediate Action to Ensure Health & Welfare of Individuals:</label>
                     <textarea name="ImmediateAction" id="" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-1">Name of PPI(s):</label>
                     <textarea name="NameofPPI" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
                  <td>
                     <label for="" class="form-label mb-1">Relationship to Individual:</label>
                     <textarea name="RelationshiptoIndividual" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-1">Witnesses to Incident:</label>
                     <textarea name="Witnesses" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
                  <td>
                     <label for="" class="form-label mb-1">Others Involved:</label>
                     <textarea name="OthersInvolved" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
               </tr>
            </table>

            <div class="table-responsive" style="margin-top: -1px;">
               <table class="table table-bordered align-middle default-td not-responsive">
                  <tr>
                     <td>Type of Notification</td>
                     <td>Name/Title</td>
                     <td>Date/Time</td>
                  </tr>
                  <tr>
                     <td>Guardian / Advocate/Family</td>
                     <td><input type="text" name="NameTitle" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>SSA</td>
                     <td><input type="text" name="ssa" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_1" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Licensed or Certified Provider</td>
                     <td><input type="text" name="CertifiedProvider" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Staff or Family living at the Individual’s home</td>
                     <td><input type="text" name="StafforFamily " class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_3" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>LE (Name, Badge Number, Jurisdiction, Contact Info)</td>
                     <td><input type="text" name="NameBadgeNumber" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_4" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Children’s Services (if applicable)</td>
                     <td><input type="text" name="ChildrenServices" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_5" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>County Board</td>
                     <td><input type="text" name="CountyBoard" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_6" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Administrator (Required for ICF)</td>
                     <td><input type="text" name="Administrator" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_7" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Senior Management</td>
                     <td><input type="text" name="SeniorManagement" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_8" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Other Providers of Service</td>
                     <td><input type="text" name="OtherProvidersofService" class="form-control"></td>
                     <td><input type="datetime-local" name="DateTime_9" class="form-control"></td>
                  </tr>
               </table>
            </div>

            <table class="table table-bordered align-middle default-td">
               <tr>
                  <td>
                     <p>Additional Information/or Administrative Follow-Up:</p>
                     <label for="" class="form-label mb-0">A.Further Medical Follow-up:</label>
                     <textarea name="FurtherMedicalFollow-up" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-0">B.Administrative Action:</label>
                     <textarea name="AdministrativeAction" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="row row-flex align-items-end gy-2">
                        <div class="col-lg">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">Printed Name:</label>
                              <input style="min-width: 150px;" type="text" name="PrintedName" class="form-control">
                           </div>
                           <div class="my-1"></div>
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">Signature:</label>
                              <input style="min-width: 150px;" type="text" name="Signature" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">Title:</label>
                              <input style="min-width: 150px;" type="text" name="Title" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">Date:</label>
                              <input style="min-width: 150px;" type="date" name="Date" class="form-control">
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
            </table>

            <div class="row row-flex py-3">
               <div class="col-lg">
                  <p class="mb-1">Body Part Injured:</p>
                  <div class="row row-flex">
                     <div class="col-sm">
                        <div class="d-block"><label class="form-check-label fw-normal"><input type="checkbox" name="HeadFace" class="form-check-input"> Head or Face</label></div>
                        <div class="d-block"><label class="form-check-label fw-normal"><input type="checkbox" name="MouthTeeth" class="form-check-input"> Mouth / Teeth</label></div>
                        <div class="d-block"><label class="form-check-label fw-normal"><input type="checkbox" name="HandsArms" class="form-check-input"> Hands/Arms</label></div>
                        <div class="d-block"><label class="form-check-label fw-normal"><input type="checkbox" name="FeetLegs" class="form-check-input"> Feet/Legs</label></div>
                     </div>
                     <div class="col-sm">
                        <div class="d-block"><label class="form-check-label fw-normal"><input type="checkbox" name="NeckChest" class="form-check-input"> Neck or Chest</label></div>
                        <div class="d-block"><label class="form-check-label fw-normal"><input type="checkbox" name="Abdomen" class="form-check-input"> Abdomen</label></div>
                        <div class="d-block"><label class="form-check-label fw-normal"><input type="checkbox" name="BackButtocks" class="form-check-input"> Back/Buttocks</label></div>
                        <div class="d-block"><label class="form-check-label fw-normal"><input type="checkbox" name="Genitals" class="form-check-input"> Genitals</label></div>
                     </div>
                  </div>

                  <label for="" class="form-label mt-3">Detailed description of area(s) injured:</label>
                  <textarea name="Detaileddescription" id="" cols="30" rows="6" class="form-control"></textarea>
               </div>

               <div class="col-lg">
                  <p class="text-center fs-6"><b><u>Check All Areas Injured</u></b></p>
                  <div class="text-center"><img src="ap.jpg" alt="" width="500"></div>
               </div>
            </div>

            <table class="table table-bordered align-middle default-td">
               <tr>
                  <td>
                     <label for="" class="form-label mb-0">Causes and Contributing Factors:</label>
                     <textarea name="ContributingFactors" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-0">Preventive measures: (For Provider’s internal use)</label>
                     <textarea name="Preventivemeasures" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="row row-flex gy-2">
                        <div class="col-md">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">Administrator Review:</label>
                              <input style="min-width: 150px;" type="text" name="AdministratorReview" class="form-control">
                           </div>
                        </div>
                        <div class="col-md">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">Date:</label>
                              <input style="min-width: 150px;" type="date" id="Dated" class="form-control">
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
            </table>
            <p class="text-end mt-4 mb-3">DODD MUI UNIT INCIDENT REPORT DECEMBER 2019</p>
            <div class=" mt-4">
               <button type="submit" class=" btn btn-primary btn-block active" >Save</button>
           </div>
         </form>
      </div>
   </div>

   <script src="bs/js/bootstrap.min.js"></script>

</main>

{{-- @endsection --}}
