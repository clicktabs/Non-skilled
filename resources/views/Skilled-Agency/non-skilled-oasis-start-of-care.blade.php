<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Non-skilled-Oasis-Start-of-Care</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <style>:root{--bs-border-width:1px;--bs-border-color:#888;}@media print{nav{display:none}.h1,h1{font-size:1.9rem}.h2,h2{font-size:1.5rem}body{-webkit-print-color-adjust:exact;print-color-adjust:exact}h2.d-md-flex{display:flex!important}h2>.border-md-end-1{border-right:1px var(--bs-border-style) var(--bs-border-color)!important}.row>.col-auto>.input-group>.form-control{max-width:130px}}.bg-secondary-subtle{background-color:#eee!important}.navbar-expand-lg .navbar-nav{flex-direction:row;column-gap:20px}body{background-color:#fff}.nm-3{margin-left:-15px!important;margin-right:-15px!important}.nmt-1{margin-top:-1px!important}.nmb-1{margin-bottom:-1px!important}.labels-mt-1 label{margin-top:5px}.clean-input-group{align-items:flex-end;column-gap:10px}.clean-input-group .form-control,.clean-input-group .input-group-text{border-radius:0;border:0;padding:0;background: none;}.clean-input-group .form-control{border-bottom:var(--bs-border-width) solid var(--bs-border-color)}.clean-input-group .form-control:focus{border-color:transparent;box-shadow:none;border-bottom:var(--bs-border-width) solid #000}#oasis-e-form img{max-width:100%}#oasis-e-form p:last-child{margin-bottom:0}#oasis-e-form .form-fields-wrapper{border:2px solid var(--bs-border-color);border-radius:15px;overflow:hidden}#oasis-e-form .table td{padding-left:1rem;padding-right:1rem}#oasis-e-form .table td>.d-block{margin:5px 0}#oasis-e-form .table td>.d-block .form-check-input,#oasis-e-form td table td .form-check-input{margin-right:5px}#oasis-e-form .table:not(.default-td)>:not(caption)>*>*{background-color:transparent;padding: 0.35rem 1rem}#oasis-e-form h3{font-size:1.4em;font-weight:700}#oasis-e-form h4{font-weight:700;margin:0;font-size:1.2em}#oasis-e-form h5{font-size:1em;font-weight:700}#oasis-e-form table h5,#oasis-e-form td table{margin:0}#oasis-e-form label.form-check-label{font-weight:500}#oasis-e-form .labels-group label{margin-right:10px}@media (max-width:1199px){#oasis-e-form td table.table-bordered td{display:table-cell}#oasis-e-form td table.stack-padding td{padding-left:10px;padding-right:10px}}@media (max-width:991px){#oasis-e-form .table td[data-title]::before{content:attr(data-title);display:block;font-weight:700;text-align:center}#oasis-e-form .labels-group{margin-top:5px}.mt-md-2{margin-top:10px!important}}@media (min-width:992px){.nmt-lg-1{margin-top:-1px!important}.border-lg-end-2{border-right:2px var(--bs-border-style) var(--bs-border-color)!important}}@media (min-width:768px){.border-md-end-2{border-right:2px var(--bs-border-style) var(--bs-border-color)!important}.border-md-end-1{border-right:1px var(--bs-border-style) var(--bs-border-color)!important}}.form-holder h2>span{padding:5px 15px}@media (max-width:1199px){.d-block-on-xl{display: block!important;width: 100% !important;}}@media (max-width:767px){.form-holder h2>span{display:block}#oasis-e-form .table-responsive{max-width:calc(540px - var(--bs-gutter-x))}}@media (max-width:575px){#oasis-e-form .table-responsive{max-width:calc(100vw - var(--bs-gutter-x))}}table tr th, table tr td {white-space: wrap!important;}.table-py-8 td{padding-top: 8px!important;padding-bottom: 8px!important;}.table-py-5 td{padding-top: 5px!important;padding-bottom: 5px!important;}.border-1{border: 1px solid var(--bs-border-color)!important;}th, td {padding-top: 5px;}#oasis-e-form .form-check-label input[type="checkbox"] {margin-right: 5px;}#oasis-e-form .table-vertical-nopadding:not(.default-td)>:not(caption)>*>*{padding: 0 1rem;}</style>
</head>

<body>

   <div class="container pt-5">
    <div class="form-holder">
        <form action="" method="post" id="oasis-e-form">
            <!-- CARDIAC CARE PLAN -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <!-- CARDIAC CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>CARDIAC CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="CARDIAC_CARE">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Alteration">Alteration in tissue perfusion</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Cardiac">Cardiac output, decreased</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Fluid">Fluid volume excess</label><br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Management">Management of therapeutic regimen, ineffective</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Knowledge">Knowledge deficit (specify)</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="min-width: 50%;">
                                <input type="text" name="Knowledge_specify" id="Knowledge_specify" class="form-control">
                            </div>
                            <br>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="ONSET">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Adequate">Adequate cardiac output as evidenced by reduction in symptoms and return to baseline vital signs within</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <input type="text" class="form-control" name="days" style="width: 60px;">
                                <span class="input-group-text fw-medium">days.</span>
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" name="Target" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" name="Achieved" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Vital">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Medication">Medication response</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Safety">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Cardiovascular">Cardiovascular status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Weight">Weight</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="CG_ability">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Mental">Mental status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Self_care">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Self_careOther">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Adequateknowledge">Adequate knowledge of disease process and self-care
                                as evidenced by</label><br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="demonstrations">Patient</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="verbalization">Caregiver verbalization
                                and demonstrations</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" name="dateVerbalization" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="verbalizationAchieved">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Fluids">Fluids in balance as evidenced by decreased peripheral
                                edema and maintained within 3-4 days.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" name="date_Fluids" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" name="achieved_Fluids" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="3">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Energy">Energy conservation with activity</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Coping">Coping/Problem solving strategies</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="monitor">To monitor weight</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="angina">S/S angina</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="retention">S/S fluid retention</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="process">S/S disease process</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="dysrhythmia">S/S dysrhythmia</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="stressManagement">Stress management</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="diet">Cardiac diet</label></td>
                                    <td rowspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="complications">S/S complications</label>
                                        <div class="clean-input-group">
                                            <input type="text" name="actionsTake" class="form-control">
                                            <p style="margin: 0;">with actions to take</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="actionsTake_Other">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Therapeutic">Therapeutic pharmacologic levels achieved as
                                demonstrated through venipuncture by range WNL for
                                patient.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <span class="input-group-text fw-medium">Target range:</span>
                                <input type="text" class="form-control" name="targetRange">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" name="RangDate" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" name="rangAchieved" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="behavior">Improved coping behavior as evidenced by verbalization
                                and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="behaviorTarget">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="behaviorAchieved">
                            </label>
                        </td> 
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="achievedOther">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="DIRECTCARE">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="DIRECT">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Venipuncture">Venipuncture</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="disciplines">Refer to other disciplines</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="disciplinesOther">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control" name="venipunctureComment"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="venipunctureCommentTarget">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="venipunctureCommentAchieved">
                            </label>
                        </td>
                    </tr>

                    <!-- RESPIRATORY CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>RESPIRATORY CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="DIAGNOSIS">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Airway">Airway clearance, ineffective</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Gas">Gas exchange impaired</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Activity">Activity intolerance</label><br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="regimen">Management of therapeutic regimen, ineffective</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="KnowledgeDeficit">Knowledge deficit (specify)</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="min-width: 50%;">
                                <input type="text" id="" name="specifyknowledgeDeficit" class="form-control">
                            </div>
                            <br>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control" name="OtherONSET">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control" name="ONSETOther">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="SKILLED">Adequate oxygenation within 1-2 weeks as noted by:</label>
                            <div class="ms-3">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" name="absence">absence of respiratory complaints.</label>
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" name="normal">normal breath sounds, respiratory rate and depth.</label>
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" name="skin_good">skin–good color, warm and dry.</label>
                            </div>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="skin_goodTarget">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="skin_goodAchieved">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Vital">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Respiratory">Respiratory status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="safetyNeed">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="ability">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Weight">Weight</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="selfcareAbility">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Mental_status">Mental status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="medicationResponse">Medication response</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="nutritionalStatus">Nutritional status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="nutritionalstatusOther">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Prevention">Prevention of infection as evidenced by baseline
                                temperature and thin clear sputum within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="preventionDate">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="preventionAchieved">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Increased">Increased</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Patient">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Caregiver">Caregiver knowledge regarding
                                pulmonary disease and care as verbalized and
                                demonstrated within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="pulmonary">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="pulmonaryDate">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="3">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="respiratory_infect">S/S respiratory infect.</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Hydration">Hydration</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Cough">Cough & deep breath</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Pursed">Pursed lip breathing</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Inhalation">Inhalation</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Oxygen">Oxygen usage</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Disease">Disease process</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="hand_held">Tx: hand-held nebulizer</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Trach">Tx: Trach care</label></td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Suctioning">Suctioning</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Stoma">Stoma & cannula</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="stomaOther">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="pharmacologic">Therapeutic pharmacologic levels achieved as
                                demonstrated through venipuncture by range WNL for
                                patient.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <span class="input-group-text fw-medium">Target range:</span>
                                <input type="text" class="form-control" name="venipunctureDemonstrated">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="venipuncturedemonstrated_Date">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="venipunctureDemonstrated_Achieved">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Improved">Improved coping behavior as evidenced by verbalization
                                and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="improvedTarget">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="improvedAchieved">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control" name="ImprovedComment"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="ImprovedComment1">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="ImprovedComment2">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Admin">Admin. trach. care</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Cannula<">Cannula</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Suctioning">Suctioning</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Obtain">Obtain C&S of sputum</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Admin_inhalation">Admin. inhalation tx</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Venipuncture_tx">Venipuncture</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Venipuncture_tx1">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control" name="venipunctureComment"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="venipunctureCommentTarget">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="venipunctureCommentAchieved">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 60px;">
                            <p>PATIENT NAME – Last, First, Middle Initial</p>
                        </td>
                        <td style="height: 60px;">
                            <p>ID#</p>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- GENITOURINARY CARE PLAN -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <!-- GENITOURINARY CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>GENITOURINARY CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="GENITOURINARY_CARE_PLAN">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Urinary">Urinary elimination, altered</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Incontinence">Incontinence, total</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="volumeDeficit">Fluid volume deficit</label><br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="skinIntegrity">Skin integrity impaired, secondary to incontinence</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="regimenManagement">Management of therapeutic regimen, ineffective</label><br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="knowledgeDeficit">Knowledge deficit (specify)</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="min-width: 50%;">
                                <input type="text" id=""  name="knowledgeDeficit_specify" class="form-control">
                            </div>
                            <br>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input">Other (specify)</span>
                                <input type="text" class="form-control" name="knowledgeDeficit_Other">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control" name="knowledgeDeficit_ONSET">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="catheter">Patient will demonstrate no S/S infection or urinary
                                catheter complications within 2 weeks.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <input type="text" class="form-control" style="width: 60px;" name="catheterDays">
                                <span class="input-group-text fw-medium">days.</span>
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control" name="catheterTarget">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control" name="catheterAchieved">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="OBSERVATIONS_signs">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="OBSERVATIONS_electrolytes">Fluids and electrolytes</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="safetyNeeds">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="GU_status">GU status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="GU_Weight">Weight</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="GU_patient">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="GU_Mental">Mental status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="GU_ability">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="Nutritional">Nutritional status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="medication_Response">Medication response</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="medication_ResponseOther">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Progressive">Progressive absence of urinary impairment within 1-2
                                weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Family will comply with self-care needs for
                                urinary elimination within 1-2 weeks (i.e., self-foley care,
                                etc.).</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">S/S infection</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Bladder training program</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mgmt. of urinary incont.</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Importance of adequate
                                        fluid intake</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Care of foley catheter</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Aseptic technique</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Perineal hygiene</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Therapeutic pharmacologic levels achieved as
                                demonstrated through venipuncture by range WNL for
                                patient.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <span class="input-group-text fw-medium">Target range:</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Improved coping behavior as evidenced by verbalization
                                and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="3">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Insert/change Foley catheter:</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 2rem;">
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Type</span>
                                            <input type="text" class="form-control">
                                        </label>
                                    </td>
                                    <td style="padding-left: 2rem;">
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Balloon amt.</span>
                                            <input type="text" class="form-control">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 2rem;">
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Size</span>
                                            <input type="text" class="form-control">
                                        </label>
                                    </td>
                                    <td style="padding-left: 2rem;">
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Frequency</span>
                                            <input type="text" class="form-control">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Straight catheterization for residual or to
                                        obtain urinalysis culture & sensitivity</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Bladder irrigation: Solution/Freq.</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <!-- MUSCULOSKELETAL CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>MUSCULOSKELETAL CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Activity intolerance</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Pain</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Infection, high risk for</label>
                            <div class="clean-input-group d-inline-flex ms-1">
                                <input type="text" id="" class="form-control">
                            </div>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Skin integrity, impaired</label>
                            <br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Management of therapeutic regimen, ineffective</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Knowledge deficit (specify)</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="min-width: 50%;">
                                <input type="text" id="" class="form-control">
                            </div>
                            <br>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Family will verbalize understanding of pt.’s
                                safety and mobility needs and demonstrate compliance
                                within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="3">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Integumentary status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Weight</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mental status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Medication response</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Nutritional status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Fluids and electrolytes</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Wound status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">OT referral</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Pain control</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient will remain safely in home with personal care
                                assistance for 6-9 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Therapeutic pharmacologic levels achieved as
                                demonstrated through venipuncture by range WNL for
                                patient.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <span class="input-group-text fw-medium">Target range:</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Improved coping behavior as evidenced by verbalization
                                and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Positioning in bed</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">HHA referral</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">ROM exercises</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">PT referral</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Activity restrictions</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient will safely and correctly use assistive devices as
                                demonstrated by lack of falls and/or other problems and
                                verbalization of increased ambulatory stability.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 60px;">
                            <p>PATIENT NAME – Last, First, Middle Initial</p>
                        </td>
                        <td style="height: 60px;">
                            <p>ID#</p>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- INTEGUMENTARY CARE PLAN -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <!-- INTEGUMENTARY CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>INTEGUMENTARY CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Mobility, impaired physical</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Pain</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Fluid volume deficit</label><br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Nutrition, altered: less than body requirements</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Skin integrity, impaired</label><br>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Skin intact, free from irritation, abrasion, excoriation or
                                disruptions within 1 week.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="3">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Integumentary status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Weight</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mental status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Medication response</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Nutritional status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Fluids and electrolytes</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Wound status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">ET referral</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Pain control</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will verbalize understanding of S/S of
                                integumentary complications with actions to take within
                                1 week.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will demonstrate appropriate
                                compliance with skin/wound care regimen within 1-3
                                weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Wound healed completely within</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <input type="text" class="form-control" style="width: 60px;">
                                <span class="input-group-text fw-medium">weeks.</span>
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        
                        <td style="padding: 0.35rem 0;" rowspan="5">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">S/S wound infection</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Repositioning in bed & rationale</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Skin care</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Wound care per prescribed
                                        order</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Pt. hygiene</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Pain relief</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Surg. incisions</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Comfort measures</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Suture care</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Wound care procedure to</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Skin care to prevent further degeneration from fecal/
                                        urinary incontinence</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Need to take/record temp. and relationship to disease
                                        process</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Pressure relieving devices:</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Measures to decrease pressure points and improve
                                        circulation</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Nutrition</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Hydration and need for proper maintenance
                                        of diet in healing process</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Infection control measures relative to wound care</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Therapeutic pharmacologic levels achieved as
                                demonstrated through venipuncture by range WNL for
                                patient.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <span class="input-group-text fw-medium">Target range:</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Improved coping behavior as evidenced by verbalization
                                and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        
                        <td style="padding: 0.35rem 0;">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Wound care</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Venipuncture</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Wound C & S</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- SAFETY CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>SAFETY CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Communication, impaired verbal</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Violence, high risk for: self-directed or directed at others</label>
                            <br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Sensory/Perceptual alterations (specify)</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">(visual</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">auditory</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">kinesthetic</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">gustatory</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">tactile</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">olfactory)</label>
                            <br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Protection, altered</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Social Isolation</label>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient will remain safe in home for duration of care plan
                                and after discharge from home care organization.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mental status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Medication S/E</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Caregiver will</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Verbalize</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Demonstrate understanding of safety measures related to care within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will verbalize general home and
                                environmental safety within 1 week.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="4">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Home safety measures</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Ambulation and obstacles</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Electrical safety (pacemaker)</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Medication safety</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Cardiac precautions</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Infection control measures</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Emergency (911 info.)</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Diabetic safety issues</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Oxygen safety</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Seizure precautions</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Hip precautions</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Universal precautions</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Anticoagulant precautions</label></td>
                                    <td rowspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Isolation (specify)</label>
                                        <div class="clean-input-group">
                                            <input type="text" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Emergency-preparedness plan</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Hazardous waste disposal measures (sharps)</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Orthopedic safety (total replacements)</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Refer to</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">OT</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">PT (with MD order) for evaluation of
                                        home and proper ambulation techniques.</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 60px;">
                            <p>PATIENT NAME – Last, First, Middle Initial</p>
                        </td>
                        <td style="height: 60px;">
                            <p>ID#</p>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- ENDOCRINE CARE PLAN -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <!-- ENDOCRINE CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>ENDOCRINE CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Fluid volume excess</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Tissue perfusion, altered</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Nutrition, altered</label><br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Management of therapeutic regimen, ineffective</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Knowledge deficit (specify)</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="min-width: 50%;">
                                <input type="text" id="" class="form-control">
                            </div>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will verbalize understanding of
                                diabetes disease process with S/S of complications
                                and actions to take within 1 week.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Fluids and electrolytes</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">GI status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Weight</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mental status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Nutritional status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Medication response</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will demonstrate appropriate and
                                safe insulin technique within 2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will verbalize and demonstrate
                                understanding of diabetes self-care needs within 2
                                weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        
                        
                        <td style="padding: 0.35rem 0;" rowspan="5">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver admin. of insulin, to include knowledge of
                                        purpose, dose, side effects and schedule</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self observational skills (BG, weights, etc.)</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Action, side effects, dosage, schedule of oral hypoglycemics</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">S/S, prevention, emergency treatment of</label><br>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Hypo</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Hyperglycemia</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self glucose monitoring</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Injection site rotation</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Insulin mixing</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">S/Q insulin infusion pump & care</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">S/S of infection</label></td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Skin</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Foot care regimen</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Urine testing</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Special diet:</label>
                                        <div class="clean-input-group d-inline-flex" style="width: auto;">
                                            <input type="text" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient will have no evidence of complications related</label>
                            <label class="input-group clean-input-group ps-3">
                                <span class="input-group-text fw-medium">to:</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Therapeutic pharmacologic levels achieved as
                                demonstrated through venipuncture by range WNL for
                                patient.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <span class="input-group-text fw-medium">Target range:</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver prepares correct meals and
                                verbalizes dietary instructions related to condition.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Improved coping behavior as evidenced by
                                verbalization and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Prepare insulin syringes:</label>
                                        <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                            <span class="input-group-text fw-medium"># of syringes</span>
                                            <input type="text" class="form-control">
                                        </label>
                                        <br>
                                        <label class="input-group clean-input-group ps-3">
                                            <span class="input-group-text fw-medium">Freq. of refill</span>
                                            <input type="text" class="form-control">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Admin. of insulin</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Venipuncture</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <!-- COMFORT/PAIN CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>COMFORT/PAIN CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Pain</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Injury, high risk for</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="min-width: 30%;">
                                <input type="text" id="" class="form-control">
                            </div>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Anxiety</label><br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Communication, impaired verbal</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Management of therapeutic regimen, ineffective</label>
                            <br>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Absence of pain or discomfort as evidenced by patient
                                responses, appearance and increased functional
                                mobility, where possible.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Nutritional status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Pain control</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self-care ability</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Medication response</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mental status</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will verbalize/demonstrate
                                understanding of comfort measures.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Therapeutic pharmacologic levels achieved as
                                demonstrated through venipuncture by range WNL for
                                patient.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <span class="input-group-text fw-medium">Target range:</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="3">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Alternatives to medications for pain control; heat/cold/
                                        positioning/imagery/relaxation techniques</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Importance and rationale for 24 hour analgesia schedule</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Pain control measures</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Management of nausea and vomiting</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Symptom control measures</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Improved coping behavior as evidenced by verbalization
                                and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Emotional support to</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Administration of pain medication(s)</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 60px;">
                            <p>PATIENT NAME – Last, First, Middle Initial</p>
                        </td>
                        <td style="height: 60px;">
                            <p>ID#</p>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- GASTROINTESTINAL CARE PLAN -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <!-- GASTROINTESTINAL CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>GASTROINTESTINAL CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Diarrhea</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Nutrition, altered</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Fluid volume deficit</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Constipation</label>
                            <br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Management of therapeutic regimen, ineffective</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Knowledge deficit (specify)</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="min-width: 50%;">
                                <input type="text" id="" class="form-control">
                            </div>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Adequate nutritional and hydration intake evidenced by
                                dietary compliance within 1 week.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">GI status</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Weight</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mental status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Medication response</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Nutritional status</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Fluids and electrolytes</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Adequate knowledge of disease process as evidenced by
                                patient responses to increased comfort within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Return to baseline bowel pattern as evidenced by regular
                                bowel movements and increased comfort within 1-2
                                weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="5">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Fluid intake needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Use of nutritional supplements</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">New bowel regimen</label></td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Fluid requirements</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Restrictions</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Nutritional needs</label></td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mgmt. of</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Nausea</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Vomiting</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">S/S of impaction</label></td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mgmt. of</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Constipation</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">NG</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">GT feeding</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label ms-3"><input type="checkbox" class="form-check-input" name="">Diarrhea</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Suppository adm.</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Use of bulk-forming agents</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Fruit/Fiber increase</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">NG feeding</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">GT feeding</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Ostomy care</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Admin. of solution</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Bowel training</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Use of equipment</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Ileol. conduit care</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Head elevation</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">S/S complications</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Optimal fluid and electrolyte balance as evidenced by no
                                S/S of dehydration and electrolyte levels WNL within 1
                                week.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Compliance with new and/or revised bowel regimen as
                                demonstrated by patient and/or caregiver verbalization.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Therapeutic pharmacologic levels achieved as
                                demonstrated through venipuncture by range WNL for
                                patient.</label>
                            <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                <span class="input-group-text fw-medium">Target range:</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Improved coping behavior as evidenced by verbalization
                                and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        
                        <td style="padding: 0.35rem 0;" rowspan="3">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Insert</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Reinsert NG tube</label>
                                        <div class="ms-3">
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">- Size</span>
                                                <input type="text" class="form-control">
                                            </label>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">- Type</span>
                                                <input type="text" class="form-control">
                                            </label>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">- Freq.</span>
                                                <input type="text" class="form-control">
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Perform rectal exam</label></div>
                                        <div><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Disimpaction</label></div>
                                        <div><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Enemas:</label></div>
                                        <label class="input-group clean-input-group ms-3">
                                            <span class="input-group-text fw-medium">- Type</span>
                                            <input type="text" class="form-control">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <!-- COPING/EMOTIONAL/SOCIAL CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>COPING/EMOTIONAL/SOCIAL CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Adjustment, impaired</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Anxiety</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Caregiver role strain, high risk for</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="min-width: 30%;">
                                <input type="text" id="" class="form-control">
                            </div>
                            <br>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Coping, ineffective:</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Individual</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Family</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Powerlessness</label>
                            <br>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Improved coping behavior as evidenced by verbalization
                                and ability to maintain within 1-2 weeks.</label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Vital signs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">CG ability to care for patient</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Safety needs</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self-care ability</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Mental status</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Stress management skills</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Coping</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Problem solving strategies</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td colspan="2"><b>DIRECT CARE</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Refer to MSW</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Suicide prevention protocol</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Refer to geriatric crisis/adult services</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Refer to local mental health/crisis</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Refer to psych nurse</label></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 60px;">
                            <p>PATIENT NAME – Last, First, Middle Initial</p>
                        </td>
                        <td style="height: 60px;">
                            <p>ID#</p>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- SPIRITUAL CARE PLAN -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <!-- SPIRITUAL CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>SPIRITUAL CARE PLAN</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">N/A</label>
                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Spiritual Disconnection/Distress</label>
                            <br>
                            <label class="input-group clean-input-group align-items-center">
                                <span class="input-group-text fw-medium form-check-label"><input type="checkbox" class="form-check-input" name="">Other (specify)</span>
                                <input type="text" class="form-control">
                            </label>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will utilize available spiritual resources</label>
                            <div class="clean-input-group">
                                <input type="text" id="" class="form-control">
                            </div>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Spiritual Needs</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient Belief System</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Primary Caregiver Belief System</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Conflicts</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Self-expression</label></td></tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Patient</label>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Caregiver will achieve spiritual connection</label>
                            <div class="clean-input-group">
                                <input type="text" id="" class="form-control">
                            </div>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td><b>TEACH/INSTRUCT</b></td>
                                </tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Resources Available</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Normal Anticipatory Grieving</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td></tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        
                        
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tr>
                                    <td><b>DIRECT CARE</b></td>
                                </tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Contact Patient’s Clergy</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Contact Primary Caregiver’s Clergy</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Refer for Ministerial Intervention</label></td></tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Assist with Spiritual Practices</label>
                                        <br>
                                        <label class="form-check-label ms-3"><input type="checkbox" class="form-check-input" name="">Baptism</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Annointing with Oil</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="">Last Rites</label>
                                    </td>
                                </tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Assist with Funeral Planning/Memorial Services</label></td></tr>
                                <tr><td><label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label></td></tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="">Other</label>
                            <textarea cols="52" rows="1" class="form-control"></textarea>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>NURSING DIAGNOSIS:</b>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium"><b>ONSET</b></span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-dark text-white text-center"><b>DESIRED OUTCOMES</b></td>
                        <td class="bg-dark text-white text-center"><b>DATES</b></td>
                        <td class="bg-dark text-white text-center" style="width: 40%;"><b>SKILLED INTERVENTIONS</b></td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;" rowspan="2">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tbody>
                                    <tr>
                                    <td><b>OBSERVATIONS/ASSESSMENTS</b></td>
                                </tr>
              
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tbody>
                                    <tr>
                                    <td><b>TEACH/INSTRUCT</b></td>
                                </tr>
              
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                        <td>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Target<br>Date</small></span>
                                <input type="date" class="form-control">
                            </label>
                            <label class="input-group clean-input-group" style="width: auto;">
                                <span class="input-group-text fw-medium text-start" style="line-height: normal;"><small>Date<br>Achieved</small></span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                        <td style="padding: 0.35rem 0;">
                            <table class="table table-borderless table-vertical-nopadding">
                                <tbody>
                                    <tr>
                                    <td><b>DIRECT CARE</b></td>
                                </tr>
              
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 60px;">
                            <p>PATIENT NAME – Last, First, Middle Initial</p>
                        </td>
                        <td style="height: 60px;">
                            <p>ID#</p>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- NOTES -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <!-- SPIRITUAL CARE PLAN -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>NOTES</b></td>
                    </tr>

                    <tr>
                        <td colspan="3" style="height: 400px;">
                        </td>
                    </tr>

                    <!-- PLAN REVIEWED/REVISED BY -->
                    <tr>
                        <td class="bg-dark text-white text-center" colspan="3"><b>PLAN REVIEWED/REVISED BY</b></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Cardiac - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Respiratory - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Genitourinary - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Musculoskeletal - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Integumentary - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Safety - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Endocrine - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Comfort/Pain - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Gastrointestinal - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Coping/Emotional/Social - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Spiritual - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Other - Signature/Title</span>
                                <input type="text" class="form-control">
                            </label>
                        </td>
                        <td>
                            <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Date</span>
                                <input type="date" class="form-control">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 60px;">
                            <p>PATIENT NAME – Last, First, Middle Initial</p>
                        </td>
                        <td style="height: 60px;">
                            <p>ID#</p>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
   </div>

</body>
</html>