<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Referral</title>

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="large-display-size" style="border: 3px solid black; font-weight: 700;">
      <div class="text-center py-3">
        <h3 class="text" style="font-family: Arial, Helvetica, sans-serif;">REFERRAL / INTAKE FROM</h3>
        <div style="height: 0.3rem" class="bg-dark"></div>
      </div>

     <div style="margin: 1.8rem;">
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group row">
                    <label for="patientName" class="col-sm-3 col-form-label">Patient Name:</label>
                    <div class="col-sm-9 p-0">
                        <input type="text" class="input input-width" id="patientName" name="patientName">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Address:</label>
                    <div class="col-sm-9 p-0">
                        <input type="text" class="input input-width" id="address" name="address">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form>
                <div class="form-group row">
                    <label for="ssMedicare" class="col-sm-3 col-form-label">SS / Medicare #:</label>
                    <div class="col-sm-9 p-0">
                        <input type="text" class="input input-width" id="ssMedicare" name="ssMedicare">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="medicare" class="col-sm-3 col-form-label">Medicare #:</label>
                    <div class="col-sm-9 p-0">
                        <input type="text" class="input input-width" id="medicare" name="medicare">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


      <div class="container site-container">
    <div class="row">
        <div class="col-md-6 middle-border">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>City / State / Zip:</td>
                            <td>
                                <input type="text" class="input input-width" name="cityStateZip">
                            </td>
                        </tr>
                        <tr>
                            <td>Phone #’s</td>
                            <td>
                                <input type="text" class="input input-width" name="phoneNumbers">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                INS (PVT) Workers Comp: <br />
                                <p class="mt-4">* Attach Verification Sheet</p>
                            </td>
                            <td>
                                <input type="text" class="input input-width" name="insuranceWorkersComp">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


     <div class="container site-container">
    <div class="row">
        <div class="col-md-6 middle-border">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr></tr>
                        <tr>
                            <td>D.O.B:</td>
                            <td>
                                <input type="text" class="input input-width" name="dob">
                            </td>
                        </tr>
                        <tr>
                            <td>Referral Source:</td>
                            <td>
                                <input type="text" class="input input-width" name="referralSource">
                            </td>
                        </tr>
                        <tr>
                            <td>Hospital:</td>
                            <td>
                                <input type="text" class="input input-width" name="hospital">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                Sex: M F/ Race: <br />
                                <p style="font-weight: bold" class="mt-3">Marital Status: M S W D</p>
                            </td>
                            <td>
                                <input type="text" class="input input-width" name="sexRaceMaritalStatus">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    <div class="container">
    <div class="row">
        <div class="col-sm-3 p-0">
            <div class="custom-table border border-dark">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <p>State of Care Date:</p>
                                <input style="margin-bottom: .66rem;" type="text" class="input" name="stateOfCareDate">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-9 p-0">
            <div class="custom-table border border-dark">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <p style="font-weight: bold">DME:</p>
                                <div style="margin: 0.9rem" class="d-flex">
                                    <div class="form-check mr-3">
                                        <input class="form-check-input" type="checkbox" value="" id="dmeOrderedCheckbox" name="dmeOrdered">
                                        <label class="form-check-label" for="dmeOrderedCheckbox">DME / Supplies Ordered</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="noneNeededCheckbox" name="noneNeeded">
                                        <label class="form-check-label" for="noneNeededCheckbox">None needed at this time</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


     <div class="container">
    <div class="row">
        <div class="col-md-12 p-0 border border-dark">
            <div class="custom-table">
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <td style="width: 70%">
                                <div class="d-flex">
                                    <span class="mr-3">Principal DX:</span>
                                    <div>
                                        <input type="text" class="input-width form-control border border-dark ml-2" name="principalDX">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    Date of O/E:
                                    <div>
                                        <input type="text" class="form-control border border-dark ml-2" name="dateOfOE1">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    Secondary DX:
                                    <div>
                                        <input type="text" class="input-width form-control border border-dark ml-2" name="secondaryDX">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    Date of O/E:
                                    <div>
                                        <input type="text" class="form-control border border-dark ml-2" name="dateOfOE2">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


      
<div class="container">
    <div class="row">
        <div class="col-md-12 p-0">
            <div class="custom-table">
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <td style="width: 70%">
                                <div class="d-flex">
                                    <p>Surgical Procedure:</p>
                                    <div>
                                        <input type="text" class="input input-width" name="surgicalProcedure">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <p>Date:</p>
                                    <div>
                                        <input type="text" class="form-control border border-dark ml-2" name="surgeryDate">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="container">
                    <div class="row mt-2">
                        <div class="col">
                            <p>Functional Limitations:</p>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckAmputation" name="functionalLimitations">
                                <label class="form-check-label" for="flexCheckAmputation">Amputation</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckSpeech" name="functionalLimitations">
                                <label class="form-check-label" for="flexCheckSpeech">Speech</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckParalysis" name="functionalLimitations">
                                <label class="form-check-label" for="flexCheckParalysis">Paralysis</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckHearing" name="functionalLimitations">
                                <label class="form-check-label" for="flexCheckHearing">Hearing</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckContracture" name="functionalLimitations">
                                <label class="form-check-label" for="flexCheckContracture">Contracture</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckVision" name="functionalLimitations">
                                <label class="form-check-label" for="flexCheckVision">Vision</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckParalysisExtremity" name="extremityInvolved">
                                <label style="font-weight: bold" class="form-check-label mt-0 mb-0" for="flexCheckParalysisExtremity">Extremity involved (Circle)</label>
                                <span class="mx-2">RUE</span>
                                <span class="mx-2">RLE</span>
                                <span class="mx-2">LUE</span>
                                <span class="mx-2">LLE</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <div style="background-color: rgb(201, 194, 194)" class="d-flex align-items-center p-2">
                                        <div class="mr-3">Activities Permitted:</div>
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckVision1" name="activitiesPermitted">
                                            <label class="form-check-label" for="flexCheckVision1">OOB</label>
                                        </div>
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckVision2" name="activitiesPermitted">
                                            <label class="form-check-label" for="flexCheckVision2">Bed-rest</label>
                                        </div>
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckVision3" name="activitiesPermitted">
                                            <label class="form-check-label" for="flexCheckVision3">Brp</label>
                                        </div>
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckVision4" name="activitiesPermitted">
                                            <label class="form-check-label" for="flexCheckVision4">Amp</label>
                                        </div>
                                        <div class="form-check mr-5">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckVision5" name="activitiesPermitted">
                                            <label class="form-check-label" for="flexCheckVision5">Trans</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

  


    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="d-flex my-2">
                <p style="font-weight: bold">WT.Bearing:</p>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckFull" name="wtBearing">
                    <label class="form-check-label" for="flexCheckFull">Full</label>
                </div>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckPartial" name="wtBearing">
                    <label class="form-check-label" for="flexCheckPartial">Partial</label>
                </div>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckNone" name="wtBearing">
                    <label class="form-check-label" for="flexCheckNone">None</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="d-flex my-2">
                <p style="font-weight: bold">Wheelchair:</p>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCane" name="wheelchair">
                    <label class="form-check-label" for="flexCheckCane">Cane</label>
                </div>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckWalker" name="wheelchair">
                    <label class="form-check-label" for="flexCheckWalker">Walker</label>
                </div>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckWheelchair" name="wheelchair">
                    <label class="form-check-label" for="flexCheckWheelchair">Wheelchair</label>
                </div>
            </div>
        </div>
    </div>
</div>


      <div class="table-responsive">
    <table class="table table-bordered mb-0">
        <tbody>
            <tr>
                <td style="width: 70%">
                    <div class="d-flex">
                        <p>Diet:</p>
                        <div>
                            <input type="text" style="width: 60rem" class="form-control ml-2 input" name="diet">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex">
                        <p>Allergies:</p>
                        <div>
                            <input type="text" style="width: 20rem" class="form-control input ml-2" name="allergies">
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


      <div class="container">
    <div class="row">
        <div class="col-md-12 p-0">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex">
                                <p>Foley Cath: Y N (If Yes –Date inserted):</p>
                                <input type="text" class="form-control input-lg input-mobile" name="foleyCath" id="foleyCath">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <p>Size:</p>
                                <input type="text" class="form-control input-lg input-mobile" name="foleySize" id="foleySize">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


     <div class="container">
    <div class="row">
        <div class="col-md-12 p-0 border border-dark">
            <div class="custom-table">
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <td class="col-md-8" style="width: 60%">Lab Work:</td>
                            <td class="col-md-4">
                                <div class="d-flex">Freq:</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-8">
                                <div class="d-flex">
                                    <p>Service Requested,(specify discipline, freq/dur, treatments)</p>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckSN" name="serviceRequested_SN">
                                    <label class="form-check-label mr-3" for="flexCheckSN">SN:</label>
                                    <input class="input-width input" type="text" name="serviceRequested_SN_freq">
                                    Freq
                                    <input class="input-width input" type="text" name="serviceRequested_SN_duration">
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckHHA" name="serviceRequested_HHA">
                                    <label class="form-check-label " for="flexCheckHHA">HHA:</label>
                                    <input class="input-width input" type="text" name="serviceRequested_HHA_freq">
                                    Freq
                                    <input class="input-width input" type="text" name="serviceRequested_HHA_duration">
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckPT" name="serviceRequested_PT">
                                    <label class="form-check-label mr-3" for="flexCheckPT">PT:</label>
                                    <input class="input-width input" type="text" name="serviceRequested_PT_freq">
                                    Freq
                                    <input class="input-width input" type="text" name="serviceRequested_PT_duration">
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckOT" name="serviceRequested_OT">
                                    <label class="form-check-label mr-3" for="flexCheckOT">OT:</label>
                                    <input class="input-width input" type="text" name="serviceRequested_OT_freq">
                                    Freq
                                    <input class="input-width input" type="text" name="serviceRequested_OT_duration">
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckST" name="serviceRequested_ST">
                                    <label class="form-check-label mr-3" for="flexCheckST">ST:</label>
                                    <input class="input-width input" type="text" name="serviceRequested_ST_freq">
                                    Freq
                                    <input class="input-width input" type="text" name="serviceRequested_ST_duration">
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckMSW" name="serviceRequested_MSW">
                                    <label class="form-check-label " for="flexCheckMSW">MSW:</label>
                                    <input class="input-width input" type="text" name="serviceRequested_MSW_freq">
                                    Freq
                                    <input class="input-width input" type="text" name="serviceRequested_MSW_duration">
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckNoService" name="noServiceNeeded">
                                    <label class="form-check-label mr-3" for="flexCheckNoService">No ancillary service needed at this time</label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckReferrals" name="referralsCompleted">
                                    <label class="form-check-label mr-3" for="flexCheckReferrals">Referrals Completed</label>
                                </div>
                            </td>
                            <td class="col-md-4">
                                <div class="d-flex">
                                    Medications: <br />
                                    (N) Ew (C)hanged
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    <div class="d-flex flex-column flex-md-row justify-content-between">
    <div class="mb-2 mb-md-0">
        <p>Primary Caregiver:</p>
    </div>
    <div style="padding-right: 8rem;">
        <p>Emergency Contact #:</p>
    </div>
</div>




      <div class="container p-0 border border-dark">
    <div class="table-responsive">
        <table class="table table-bordered m-0">
            <tbody>
                <tr>
                    <td style="width: 25%">Physician:</td>
                    <td style="width: 75%">Dr.'s address/phone/fax:</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered m-0">
            <tbody>
                <tr>
                    <td style="width: 25%">Physician Orders:</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered m-0">
            <tbody>
                <tr>
                    <td style="width: 60%">
                        <div class="d-flex">
                            <p>Intake RN:</p>
                            <input class="input input-width" type="text" name="intakeRN" id="intakeRN" />
                        </div>
                    </td>
                    <td style="width: 30%">
                        <div class="d-flex">
                            <div class="d-flex">
                                <p>Date:</p>
                                <input class="input" type="text" name="intakeDate" id="intakeDate" />
                            </div>
                            <div class="d-flex">
                                <p>Time:</p>
                                <input class="input" type="text" name="intakeTime" id="intakeTime" />
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
