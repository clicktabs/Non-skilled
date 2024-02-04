<div class="container">
    <div class="card mb-2">
        <div class="card-body row">
            @include('nursing.components.header')
            <form method="post">
                <h1 class="mb-3 mt-3 font-bold text-center ">HOME HEALTH AIDE SUPERVISORY VISIT</h1>
                <div class="row">
                    <div class="col">
                        <div
                            class="d-flex align-items-center form-control justify-content-between py-3 flex-wrap gap-3">
                            <div class="d-flex align-items-center">
                                <label class="m-0 p-0">Patient Name: </label>
                                <input type="text" name="patient_name" class="border-0 border-bottom py-0 outline-0"/>
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="m-0 p-0" for="date">Date: </label>
                                <input type="date" name="patient_date" id="date" class="border-0 py-0"/>
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="m-0 p-0">Time In: </label>
                                <input type="time" name="patient_time_in" class="border-0 py-0"/>
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="m-0 p-0">Time Out: </label>
                                <input type="time" name="patient_time_out" class="border-0 py-0"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-control py-3 mt-4">
                    <div class="row p-0 gap-3 justify-content-start vital_signs">
                        <div class="col">
                            <label class="d-block m-0 p-0" for="vital_sign">VITAL SIGNS:</label>
                            <input type="text" class="border-0 border-bottom py-0" id="vital_sign" name="vital_sign" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block" for="patient_bp">B/P: </label>
                            <input type="text" name="patient_bp" id="patient_bp" class="border-0 border-bottom py-0" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block">R: </label>
                            <input type="text" name="patient_r" class="border-0  border-bottom  py-0" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block">L: </label>
                            <input type="text" name="patient_l" class="border-0  border-bottom  py-0" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block">Weight: </label>
                            <input type="text" name="patient_weight" class="border-0  border-bottom  py-0" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block">Pulse: </label>
                            <input type="text" name="patient_pulse" class="border-0  border-bottom  py-0" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block">AP: </label>
                            <input type="text" name="patient_ap" class="border-0  border-bottom  py-0" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block">RP: </label>
                            <input type="text" name="patient_rp" class="border-0  border-bottom  py-0" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block">Resp: </label>
                            <input type="text" name="patient_resp" class="border-0  border-bottom  py-0" style="max-width: 100px"/>
                        </div>
                        <div class="col">
                            <label class="m-0 p-0 d-block">Temp: </label>
                            <input type="text" name="patient_temp" class="border-0  border-bottom  py-0" style="max-width: 100px"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col" style="overflow-x: auto">
                        <h4 class="font-bold my-3">SKILLED OBSERVATION AND ASSESSMENT (Please Circle or Check Off Appropriate Response(s)</h4>
                        <table class="table-responsive table table-bordered">
                            <tbody>
                            <tr>
                                <td class="font-bold">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span class="font-bold mr-4">AIDE PRESENT</span>
                                        <label class="p-0 mr-4 mb-0">Yes <input type="radio" name="aide_present" class="ml-3" /> </label>
                                        <label class="p-0 mr-0 mb-0">No <input type="radio" name="aide_present" class="ml-3" /> </label>
                                    </div>
                                </td>
                                <td class="font-bold">TREATMENT TASK OBSERVED</td>
                                <td class="font-bold">QUALITY OF CARE</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="mb-0 font-bold" >Name of Aide:</label>
                                    <input type="text" name="aide_name" class="border-0" />
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <label class="m-0 p-0">BATH</label>
                                            <input type="checkbox" name="patient_bath" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">SKIN CARE</label>
                                            <input type="checkbox" name="patient_skin" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">PERSONAL CARE</label>
                                            <input type="checkbox" name="patient_personal_care" />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <label class="m-0 p-0">Excellent</label>
                                            <input type="checkbox" name="patient_excellent" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">Good</label>
                                            <input type="checkbox" name="patient_good" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">Fair</label>
                                            <input type="checkbox" name="patient_fair" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">Poor</label>
                                            <input type="checkbox" name="patient_poor" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span class="font-bold mr-4">KNOWLEDGEABLE OF TASKS</span>
                                        <label class="p-0 mr-4 mb-0">Yes <input type="radio" name="knowledgeable_task" class="ml-3" /> </label>
                                        <label class="p-0 mr-0 mb-0">No <input type="radio" name="knowledgeable_task" class="ml-3" /> </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <label class="m-0 p-0 d-block">ORAL CARE</label>
                                            <input type="checkbox" name="patient_oral_care" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0 d-block">INCONTINENCE CARE</label>
                                            <input type="checkbox" name="patient_incontinence_care" />
                                        </div>
                                    </div>
                                </td>
                                <td rowspan="2">
                                    <label class="font-bold">Significant Other Comments:</label>
                                    <textarea cols="2" class="form-control border-0 p-0"></textarea>
                                </td>
                            </tr>
                            {{-- 2nd row --}}
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span class="font-bold mr-4">SAFETY EQUIPMENT USED</span>
                                        <label class="p-0 mr-4 mb-0">Yes <input type="radio" name="safety_equipment" class="ml-3" /> </label>
                                        <label class="p-0 mr-0 mb-0">No <input type="radio" name="safety_equipment" class="ml-3" /> </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <label class="m-0 p-0">NUTRITION</label>
                                            <input type="checkbox" name="patient_nutrition" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">BED CARE</label>
                                            <input type="checkbox" name="patient_bed_care" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">EXERCISE</label>
                                            <input type="checkbox" name="patient_exercise" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            {{-- 3rd Row --}}
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span class="font-bold mr-4">CHANGE IN POC</span>
                                        <label class="p-0 mr-4 mb-0">Yes <input type="radio" name="change_poc" class="ml-3" /> </label>
                                        <label class="p-0 mr-0 mb-0">No <input type="radio" name="change_poc" class="ml-3" /> </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <label class="m-0 p-0">BP</label>
                                            <input type="checkbox" name="patient_bp" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">PULSE</label>
                                            <input type="checkbox" name="patient_pulse" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">RESP</label>
                                            <input type="checkbox" name="patient_resp" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">TEMP</label>
                                            <input type="checkbox" name="patient_temp" />
                                        </div>
                                        <div>
                                            <label class="m-0 p-0">WEIGHT</label>
                                            <input type="checkbox" name="patient_weight" />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="font-bold">Patient Comments:</label>
                                    <textarea cols="2" class="form-control border-0 p-0"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <label class="font-bold">RN COMMENTS:</label>
                                    <textarea cols="2" class="form-control border-0 p-0"></textarea>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="d-flex align-items-center flex-wrap">
                            <span class="font-bold mr-4">CHANGE IN PLAN OF CARE:</span>
                            <label class="p-0 mr-4 mb-0">Yes <input type="radio" name="plan_of_care" class="ml-3" /> </label>
                            <label class="p-0 mr-0 mb-0">No <input type="radio" name="plan_of_care" class="ml-3" /> </label>
                        </div>
                        <textarea cols="3" class="form-control border-0 border-bottom p-0 w-full"></textarea>
                        <div class="mt-4">
                            <div class="d-flex align-items-center">
                                <label class="w-full mr-3">Client Signature : <input type="file" class="form-control border-0 border-bottom w-full" /></label>
                                <label class="w-full mr-0">Date : <input type="date" class="form-control border-0 border-bottom w-full py-0" name="client_signature_date" /></label>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <label class="w-full mr-3">Nurse Signature : <input type="file" class="form-control border-0 border-bottom w-full" /></label>
                                <label class="w-full mr-3">Date : <input type="date" class="form-control border-0 border-bottom w-full py-0" name="nurse_signature_date" /></label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="form-control btn btn-primary mt-5 save_btn">Save</button>
            </form>
        </div>
    </div>
</div>
