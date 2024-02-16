{{-- <!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nursing Visit Form</title>
   <link rel="stylesheet" href="bs/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body> --}}
{{-- 
   @extends('layouts.app')

   @section('content') --}}

       <main>

   <div class="container pt-5">
      <div class="page-header">
         <img src="img/Logo.jpg" alt="" width="300px">
         <h1 class="text-center mt-5 mb-0 fs-2">Unanticipated Hospitalization MUI Form</h1>
      </div>
      <div class="form-holder pt-5 pb-5">
         <form action="store" method="POST" id="">
            @csrf
            <div class="row row-flex gy-2 my-1">
               <div class="col-md">
                  <div class="input-group clean-input-group">
                     <label class="input-group-text"><b>Individual’s Name:</b></label>
                     <input style="min-width: 150px;" type="text" name="IndividualsName" class="form-control">
                  </div>
               </div>
               <div class="col-md">
                  <div class="input-group clean-input-group">
                     <label class="input-group-text"><b>Date Form Completed:</b></label>
                     <input style="min-width: 150px;" type="date" name="DateFormCompleted" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row row-flex gy-2 my-1">
               <div class="col-md">
                  <div class="input-group clean-input-group">
                     <label class="input-group-text"><b>Date of Hospitalization:</b></label>
                     <input style="min-width: 150px;" type="date" name="DateofHospitalization" class="form-control">
                  </div>
               </div>
               <div class="col-md">
                  <div class="input-group clean-input-group">
                     <label class="input-group-text"><b>MUI Number:</b></label>
                     <input style="min-width: 150px;" type="text" name="MUI Number" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row row-flex gy-2 my-1">
               <div class="col-md">
                  <div class="input-group clean-input-group">
                     <label class="input-group-text"><b>Name of Person Completing Form:</b></label>
                     <input style="min-width: 150px;" type="text" name="NameofPersonCompletingForm" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row row-flex gy-2 my-1">
               <div class="col-md">
                  <div class="input-group clean-input-group">
                     <label class="input-group-text"><b>Title:</b></label>
                     <input style="min-width: 150px;" type="text" name="Title" class="form-control">
                  </div>
               </div>
               <div class="col-md">
                  <div class="input-group clean-input-group">
                     <label class="input-group-text"><b>Provider:</b></label>
                     <input style="min-width: 150px;" type="text" name="Provider" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row row-flex gy-2 my-1">
               <div class="col-md">
                  <div class="input-group clean-input-group">
                     <label class="input-group-text"><b>Contact Information:</b></label>
                     <input style="min-width: 150px;" type="text" name="ContactInformation" class="form-control">
                  </div>
               </div>
            </div>

            <table class="table table-bordered align-middle default-td mt-4">
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>HISTORY / ANTECEDENTS:</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-0"><b>Please list what led to the hospitalization and the medical history of the individual. Have there been recent similar illnesses? What was the health of the individual in the 72 hours leading up to the hospitalization?</b></label>
                     <textarea name="hospitalization" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>TYPE OF HOSPITALIZATION:</b>
                  </td>
               </tr>
               <tr>
                  <td class="labels-group">
                     <label class="form-check-label"><input type="radio" name="toh" class="form-check-input"> Medical</label>
                     <label class="form-check-label"><input type="radio" name="toh" class="form-check-input"> Psychiatric</label>

                     <p class="mt-1 mb-0"><b>How many days was the individual in the hospital?</b></p>
                     <textarea name="daysindividualinthehospita" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>REASON FOR HOSPITALIZATION – Please mark all that apply:</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <table class="table table-bordered default-td">
                        <tr>
                           <td>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AbdominalPains" class="form-check-input">Abdominal Pains</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AbnormalBlood" class="form-check-input">Abnormal Blood Levels</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AbsentPulse" class="form-check-input">Absent Pulse</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AllergicReaction" class="form-check-input">Allergic Reaction</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AlteredState" class="form-check-input">Altered State</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="BaclofenPumpIssuesBlood" class="form-check-input">Baclofen Pump Issues Blood</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Pressure" class="form-check-input">Pressure</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="BloodSugarLevels" class="form-check-input">Blood Sugar Levels</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="BodyTemperatureVariations" class="form-check-input">Body Temperature Variations</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="BowelObstruction" class="form-check-input">Bowel Obstruction</label></div>
                           </td>
                           <td>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Cancer" class="form-check-input">Cancer</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ChestPains" class="form-check-input">Chest Pains</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="DebucitusUlcer" class="form-check-input">Debucitus Ulcer</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="DehydrationVolumeDepletion" class="form-check-input">Dehydration/Volume Depletion</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Edema" class="form-check-input">Edema</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Emesis" class="form-check-input">Emesis (vomiting/diarrhea)</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Gallbladder" class="form-check-input">Gallbladder</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="GeneralizedPain" class="form-check-input">Generalized Pain</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="HeartProblems" class="form-check-input">Heart Problems</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ImpairedRespiration" class="form-check-input">Impaired Respiration</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="form-check-input" class="form-check-input">Infection</label></div>
                           </td>
                           <td>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="IngestionPICA" class="form-check-input">Ingestion- PICA</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Kidney" class="form-check-input">Kidney</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MedicalError" class="form-check-input">Medical Error</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ObservationEvaluation" class="form-check-input">Observation/Evaluation</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="PlacediteminOrifice" class="form-check-input">Placed item in Orifice</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="PneumoniaandInfluenza" class="form-check-input">Pneumonia and Influenza</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Seizures" class="form-check-input">Seizures</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Shunt" class="form-check-input">Shunt</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Stroke" class="form-check-input">Stroke</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="SyncopeUncontrollable" class="form-check-input">Syncope Uncontrollable</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Bleeding" class="form-check-input">Bleeding</label></div>
                           </td>
                        </tr>
                     </table>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text"><b>Other:</b></label>
                        <input style="min-width: 150px;" type="text" name="otherREASON" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>SYMPTOMS AND RESPONSE:</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-0"><b>What were the individual’s symptoms – over what length of time – and what was the response?</b></label>
                     <textarea name="individualssymptoms" id="" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>DIAGNOSIS AND DISCHARGE SUMMARY:</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-0"><b>Please describe in detail the individual’s diagnosis and discharge summary. Please attach discharge summary.</b></label>
                     <textarea name="individualsdiagnosis" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>FOLLOW-UP APPOINTMENTS / CHANGES TO MEDICATIONS / CONTINUING CARE</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-0"><b>Please list the changes and the continuing needs of the individual along with the person responsible for these. Please attach discharge paperwork and follow-up appointment outcomes.</b></label>
                     <textarea name="continuingneeds" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>CAUSE AND CONTRIBUTING FACTORS:</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <table class="table table-bordered default-td">
                        <tr>
                           <td>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MedicationChange" class="form-check-input">Medication Change</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ChokedonFood" class="form-check-input">Choked on Food</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MedicationError" class="form-check-input">Medication Error</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Environmental" class="form-check-input">Fall-Due to Environmental Factors</label></div>
                           </td>
                           <td>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MobilityIssues" class="form-check-input">Fall- Due to Mobility Issues</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="ImproperDiet" class="form-check-input">Aspiration Due to Improper Diet Texture</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="TimelyMedicalCare" class="form-check-input">Failure to Provide Timely Medical Care</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="InputOutput" class="form-check-input">Staff Did Not Monitor Input/Output of Fluids</label></div>
                           </td>
                        </tr>
                     </table>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text"><b>Other:</b></label>
                        <input style="min-width: 150px;" type="text" name="OtherFACTORS" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>PREVENTION MEASURES:</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <table class="table table-bordered default-td">
                        <tr>
                           <td>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="EnvironmentalChange" class="form-check-input">Physical/Social Environmental Change</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AgencyPolicy" class="form-check-input">Agency Policy/System Change</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="StaffTraining" class="form-check-input">Staff Training</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Counseling" class="form-check-input">Counseling</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="addressISPChanges" class="form-check-input">Team Meeting to address ISP Changes</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MedicalCareProvider" class="form-check-input">Appointment with Medical Care Provider</label></div>
                           </td>
                           <td>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="MedicationChanges" class="form-check-input">Medication Changes</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="AppointmentScheduled" class="form-check-input">Follow up Appointment Scheduled</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="PTOTSpeechReferral" class="form-check-input">PT/OT/Speech Referral made to address communication or mobility concern</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="DietChangeOrdered" class="form-check-input">Diet Change Ordered</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="HomeHealthCare" class="form-check-input">Home Health Care</label></div>
                           </td>
                        </tr>
                     </table>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text"><b>Other:</b></label>
                        <input style="min-width: 150px;" type="text" name="OtherPREVENTION" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="bg-secondary-subtle">
                     <b>INVESTIGATIVE AGENT REVIEW::</b>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label mb-0">Comments & Questions:</label>
                     <textarea name="CommentsQuestions" id="" cols="30" rows="4" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="row row-flex gy-2">
                        <div class="col-lg">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text"><b>IA NAME:</b></label>
                              <input style="min-width: 150px;" type="text" name="IA_NAME" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">Review Completed Date:</label>
                              <input style="min-width: 150px;" type="date" name="ReviewCompletedDate" class="form-control">
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
            </table>
            <div class=" mt-4">
               <button type="submit" class=" btn btn-primary btn-block active" >Save</button>
           </div>
            <p class="text-end mt-4 mb-3">DODD MUI - HOSPITALIZATION MUI FORM December 2019</p>
         </form>
      </div>
   </div>

   <script src="bs/js/bootstrap.min.js"></script>

</main>

{{-- @endsection --}}
{{-- </body>
</html> --}}