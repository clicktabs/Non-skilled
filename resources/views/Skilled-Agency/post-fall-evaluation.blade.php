<div class="container">
    <div class="card mb-2">
        <div class="card-body row">
            @include('nursing.components.header')
            <form method="post">
                <h1 class="mb-3 mt-3 font-bold text-center ">POST FALL EVALUATION</h1>
                <p class="mt-4 text-center font-bold">
                    Purpose: To encourage an effective evaluation of circumstances and conditions related to
                    a recent fall in efforts to identify unmet risks.
                </p>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <input type="text" class="text border-0 border-bottom form-control" id="text_id"
                               name="same_text" value="">
                        <label class="text" for="text">Patient Name</label>
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="date-picker border-0 border-bottom form-control" id="date_id"
                               name="date-picker" value="">
                        <label class="date_picker" for="date">Fall Date</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="text border-0 border-bottom form-control" id="text_id"
                               name="Clinician" value="">
                        <label class="text" for="text">Clinician</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="mb-0 mr-4">1. Was this fall observed?</label>
                            <span>
                                <input type="radio" class="form-check-input mt-0" id="fall_observed_yes"
                                       name="fall_observed"/>
                                <label class="form-check-label mb-0" for="fall_observed_yes">Yes</label>
                                <input type="radio" class="form-check-input mt-0" id="fall_observed_no"
                                       name="fall_observed"/>
                                <label class="form-check-label mb-0" for="fall_observed_no">No</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="flex-shrink-0" for="by_whom">By Whom?</label>
                            <input type="text" class="text border-0 border-bottom py-0 w-full" id="by_whom"
                                   name="by_whom"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="text" for="location_fall">2. Location of fall.</label>
                            <input type="text" class="text border-0 border-bottom py-0 w-full" id="location_fall"
                                   name="location_fall"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="mb-0 mr-4">3. Was the patient alone during the fall?</label>
                            <span>
                                <input type="radio" class="form-check-input mb-0 mt-0" id="p_a_during_fall_yes"
                                       name="p_a_during_fall_yes"/>
                                <label class="form-check-label mb-0 mt-0" for="p_a_during_fall_yes">Yes</label>
                                <input type="radio" class="form-check-input mb-0 mt-0" id="p_a_during_fall_no"
                                       name="p_a_during_fall_no">
                                <label class="form-check-label mb-0 mt-0" for="p_a_during_fall_no">No</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label class="text d-block" for="p_d_during_fall">4. What was the patient doing during the fall?</label>
                        <input type="text" class="text border-0 border-bottom py-0 w-full" id="p_d_during_fall" name="p_d_during_fall">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="mb-0 mr-4">5. Was this the patients first fall?</label>
                            <span>
                                <input type="checkbox" class="form-check-input mb-0 mt-0" id="p_f_fall_yes" name="p_f_fall" />
                                <label class="form-check-label" for="p_f_fall_yes">Yes</label>
                                <input type="checkbox" class="form-check-input mb-0 mt-0" id="p_f_fall_no" name="p_f_fall" />
                                <label class="form-check-label mb-0 mt-0" for="p_f_fall_no">No</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="mb-0 mr-4">6. Were protective or safety devices in use at time of fall?</label>
                            <span>
                                <input type="checkbox" class="form-check-input  mb-0 mt-0" id="safety_device_time_fall_yes" name="safety_device_time_fall" />
                                <label class="form-check-label mb-0 mt-0" for="safety_device_time_fall_yes">Yes</label>
                                <input type="checkbox" class="form-check-input" id="safety_device_time_fall_no" name="safety_device_time_fall" />
                                <label class="form-check-label mb-0 mt-0" for="safety_device_time_fall_no">No</label>
                            </span>
                        </div>
                        <input type="text" class="text border-0 border-bottom form-control mt-4 w-full" id="text_id" name="safety_device_desc" />
                        <label class="text" for="text">If yes describe devices.</label>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="text border-0 border-bottom form-control w-full" id="safety_device_fall_desc" name="safety_device_fall_desc" />
                        <label class="text" for="safety_device_fall_desc">7. Describe the location where the fall occurred:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Clue</th>
                                <th>Yes</th>
                                <th>No</th>
                                <th>Clue</th>
                                <th>Yes</th>
                                <th>No</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><label class="text" for="text">Water Spills:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Patient in a hurry? (why):</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Phone/TV cords on floor:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Patient not using cane/walker
                                        as instructed:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Clutter on the floor:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Improper footwear:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Poor lighting:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Clothing got in the way:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Improper bed height:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Patient became tired:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Other furniture involved:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Patient reaching for items:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Wheelchair unlocked:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Patient using incontinent
                                        supplies at time of fall?:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Wheelchair foot rests in the way:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Other::</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="text" for="text">8. Has the patient's health care status changed?</label>
                    </div>
                </div>
                <div class="row">
                    <div class="table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Clue</th>
                                <th>Yes</th>
                                <th>No</th>
                                <th>Clue</th>
                                <th>Yes</th>
                                <th>No</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><label class="text" for="text">New/Increased/decrease in blood
                                        pressure medications.</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Decrease in fluid intake:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">New/Increased/decrease in blood
                                        Psychotropic medications:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Recent fever/cough/cold:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">New/Increased/decrease in pain
                                        medications:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Change in diagnosis status:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Change in blood pressure:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Change in mental status:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Recent return from Hospital:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Change in Behaviors:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Recent weight loss:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><label class="text" for="text">Change in mobility status:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                            </tr>
                            <tr>
                                <td><label class="text" for="text">Change in mobility status:</label></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td><input type="checkbox" name="checkbox" id="checkbox_id"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <label class="font-bold">Analysis:</label>
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="mb-0 mr-4">Do the clues reflect environmental factors that could have contributed to the fall?</label>
                            <span>
                                <input type="radio" class="form-check-input  mb-0 mt-0" name="environment_contribute_fall" id="environment_contribute_fall_no" />
                                <label class="form-check-label mb-0 mt-0" for="environment_contribute_fall_no">No</label>
                                <input type="radio" name="environment_contribute_fall" id="environment_contribute_fall_yes" />
                                <label class="text" for="environment_contribute_fall_yes">yes</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="mb-0 mr-4">Do the clues reflect any health factors that could have contributed to the fall?</label>
                            <span>
                                <input type="radio" class="form-check-input  mb-0 mt-0" name="health_factor_contribute_fall" id="health_factor_contribute_fall_no" />
                                <label class="form-check-label mb-0 mt-0" for="health_factor_contribute_fall_no">No</label>
                                <input type="radio" class="form-check-input  mb-0 mt-0" name="health_factor_contribute_fall" id="health_factor_contribute_fall_yes" />
                                <label class="form-check-label mb-0 mt-0" for="health_factor_contribute_fall_yes">yes</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="mb-0 mr-4">Are there similarities to the previous fall?</label>
                            <span>
                                <input type="radio" class="form-check-input  mb-0 mt-0" name="similarities_fall" id="similarities_fall_fall_no" />
                                <label class="form-check-label mb-0 mt-0" for="similarities_fall_fall_no">No</label>
                                <input type="radio" class="form-check-input  mb-0 mt-0" name="similarities_fall" id="similarities_fall_yes" />
                                <label class="form-check-label mb-0 mt-0" for="similarities_fall_yes">yes</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="d-flex flex-wrap align-items-center">
                            <label class="mb-0 mr-4">Any unmet needs identified (i.e. reeducation, environmental, medications, Etc.)</label>
                            <span>
                                <input type="radio" class="form-check-input  mb-0 mt-0" name="unmet_fall" id="unmet_fall_no" />
                                <label class="form-check-label mb-0 mt-0" for="unmet_fall_no">No</label>
                                <input type="radio" class="form-check-input  mb-0 mt-0" name="unmet_fall" id="unmet_fall_yes" />
                                <label class="form-check-label mb-0 mt-0" for="unmet_fall_yes">yes</label>
                            </span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="form-control btn btn-primary mt-5 save_btn">Save</button>
            </form>
        </div>
    </div>
</div>
