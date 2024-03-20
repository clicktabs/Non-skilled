<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>post-fall</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section style="border: 2px solid black; margin: 2rem">
      <div class="">
        <div class="text-center p-5">
          <h1>POST FALL EVALUATION</h1>
          <p>
            Purpose: To encourage an effective evaluation of circumstances and
            conditions related to a recent fall in efforts to identify unmet
            risks.
          </p>
        </div>

        <section class="large-view">
          <div class="d-flex">
            <div class="col-md-4">
              <label class="input-group clean-input-group">
                <span class="input-group-text bg-transparent fw-bold"
                  >Patient Name</span
                >
                <input
                  type="text"
                  id="patientName"
                  name="patientName"
                  class="form-control"
                />
              </label>
            </div>
            <div class="col-md-4">
              <label class="input-group clean-input-group">
                <span class="input-group-text bg-transparent fw-bold"
                  >Fall Data</span
                >
                <input
                  type="text"
                  id="fallData"
                  name="fallData"
                  class="form-control"
                />
              </label>
            </div>
            <div class="col-md-4">
              <label class="input-group clean-input-group">
                <span class="input-group-text bg-transparent fw-bold"
                  >Clinician</span
                >
                <input
                  type="text"
                  id="clinician"
                  name="clinician"
                  class="form-control"
                />
              </label>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered border-white">
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex">
                      <p class="m-0"><span>1.</span> Was this fall observed?</p>
                      <div class="form-check mx-2">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="observedNo"
                          name="observedNo"
                        />
                        <label class="form-check-label" for="observedNo"
                          >No</label
                        >
                      </div>

                      <div class="form-check mx-2">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="observedYes"
                          name="observedYes"
                        />
                        <label class="form-check-label" for="observedYes"
                          >Yes, By Whom?</label
                        >
                      </div>
                      <div>
                        <label class="input-group clean-input-group">
                          <input
                            type="text"
                            id="observedByWhom"
                            name="observedByWhom"
                            class="form-control"
                          />
                        </label>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex">
                      <span>2. Location of fall.</span>
                      <div>
                        <label class="input-group clean-input-group">
                          <input
                            type="text"
                            id="locationOfFall"
                            name="locationOfFall"
                            class="form-control"
                          />
                        </label>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex">
                      <p class="m-0">
                        <span>3.</span> Was the patient alone during the fall?
                      </p>
                      <div class="form-check mx-2">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="aloneDuringFallYes"
                          name="aloneDuringFallYes"
                        />
                        <label class="form-check-label" for="aloneDuringFallYes"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check mx-2">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="aloneDuringFallNo"
                          name="aloneDuringFallNo"
                        />
                        <label class="form-check-label" for="aloneDuringFallNo"
                          >No</label
                        >
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex">
                      <span
                        >4. What was the patient doing during the fall?</span
                      >
                      <div>
                        <label class="input-group clean-input-group">
                          <input
                            type="text"
                            id="patientActivityDuringFall"
                            name="patientActivityDuringFall"
                            class="form-control"
                          />
                        </label>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex">
                      <p class="m-0">
                        <span>5.</span> Was the patient alone during the fall?
                      </p>
                      <div class="form-check mx-2">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="aloneDuringFallYes2"
                          name="aloneDuringFallYes2"
                        />
                        <label
                          class="form-check-label"
                          for="aloneDuringFallYes2"
                          >Yes</label
                        >
                      </div>

                      <div class="form-check mx-2">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="aloneDuringFallNo2"
                          name="aloneDuringFallNo2"
                        />
                        <label class="form-check-label" for="aloneDuringFallNo2"
                          >No</label
                        >
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex">
                      <p class="m-0">
                        <span>6.</span> Was the patient alone during the fall?
                      </p>
                      <div class="form-check mx-2">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="aloneDuringFallNo3"
                          name="aloneDuringFallNo3"
                        />
                        <label class="form-check-label" for="aloneDuringFallNo3"
                          >No</label
                        >
                      </div>

                      <div class="form-check mx-2 d-flex">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="aloneDuringFallYes3"
                          name="aloneDuringFallYes3"
                        />
                        <label
                          class="form-check-label"
                          for="aloneDuringFallYes3"
                          >Yes, If yes describe devices.</label
                        >
                        <div>
                          <label class="input-group clean-input-group">
                            <input
                              type="text"
                              id="devicesDescription"
                              name="devicesDescription"
                              class="form-control"
                            />
                          </label>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex">
                      <span
                        >7. Describe the location where the fall occurred:</span
                      >
                      <div>
                        <label class="input-group clean-input-group">
                          <input
                            type="text"
                            id="fallLocationDescription"
                            name="fallLocationDescription"
                            class="form-control"
                          />
                        </label>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <section class="large-view">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th
                    style="
                      width: 30%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">Clue</p>
                  </th>
                  <th
                    style="
                      width: 10%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">Yes</p>
                  </th>
                  <th
                    style="
                      width: 10%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">No</p>
                  </th>
                  <th
                    style="
                      width: 30%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">Clue</p>
                  </th>
                  <th
                    style="
                      width: 10%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">Yes</p>
                  </th>
                  <th
                    style="
                      width: 10%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">No</p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="border: 1px solid black">
                    Water Spills Water Spills
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Patient in a hurry? (why)
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">
                    Phone/TV cords on floor
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Patient not using cane/walker as instructed
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">Clutter on the floor</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">Improper footwear</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">Poor lighting</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Clothing got in the way
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">Improper bed height</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">Patient became tired</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">
                    Other furniture involved
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Patient reaching for items
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">Wheelchair unlocked</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Patient using incontinent supplies at time of fall?
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">
                    Wheelchair foot rests in the way
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">Other:</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <!-- Remaining rows -->
              </tbody>
            </table>
          </div>
        </section>

        <p class="large-view">
          <span>8. </span>Has the patient’s health care status changed?
        </p>

        <section class="large-view">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th
                    style="
                      width: 30%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">Clue</p>
                  </th>
                  <th
                    style="
                      width: 10%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">Yes</p>
                  </th>
                  <th
                    style="
                      width: 10%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">No</p>
                  </th>
                  <th
                    style="
                      width: 30%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">Clue</p>
                  </th>
                  <th
                    style="
                      width: 10%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">Yes</p>
                  </th>
                  <th
                    style="
                      width: 10%;
                      border: 1px solid black;
                      background-color: rgb(173, 172, 172);
                    "
                  >
                    <p class="text-center m-0">No</p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="border: 1px solid black">
                    New/Increased/decrease in blood pressure medications.
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Decrease in fluid intake
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">
                    New/Increased/decrease in blood Psychotropic medications
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Recent fever/cough/cold
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">
                    New/Increased/decrease in pain medications.
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Change in diagnosis status
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">
                    Change in blood pressure
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Change in mental status
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">
                    Recent return from Hospital
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">Change in Behaviors</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">Recent weight loss</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black">
                    Change in mobility status
                  </td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td style="border: 1px solid black">Other</td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                  <td style="border: 1px solid black"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <section class="m-2 mb-5 large-view">
          <p>Analysis:</p>
          <div class="">
            <div class="d-flex py-2">
              <p class="m-0">
                Do the clues reflect environmental factors that could have
                contributed to the fall?
              </p>
              <div class="form-check mx-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="environmentalFactorsNo"
                  name="environmentalFactors"
                />
                <label class="form-check-label" for="environmentalFactorsNo">
                  No
                </label>
              </div>

              <div class="form-check mx-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="environmentalFactorsYes"
                  name="environmentalFactors"
                />
                <label class="form-check-label" for="environmentalFactorsYes">
                  Yes
                </label>
              </div>
            </div>

            <!-- Repeat the same pattern for other questions -->
            <div class="d-flex py-2">
              <p class="m-0">
                Do the clues reflect any health factors that could have
                contributed to the fall?
              </p>
              <div class="form-check mx-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="healthFactorsNo"
                  name="healthFactors"
                />
                <label class="form-check-label" for="healthFactorsNo">
                  No
                </label>
              </div>

              <div class="form-check mx-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="healthFactorsYes"
                  name="healthFactors"
                />
                <label class="form-check-label" for="healthFactorsYes">
                  Yes
                </label>
              </div>
            </div>

            <div class="d-flex py-2">
              <p class="m-0">Are there similarities to the previous fall?</p>
              <div class="form-check mx-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="similaritiesToPreviousFallNo"
                  name="similaritiesToPreviousFall"
                />
                <label
                  class="form-check-label"
                  for="similaritiesToPreviousFallNo"
                >
                  No
                </label>
              </div>

              <div class="form-check mx-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="similaritiesToPreviousFallYes"
                  name="similaritiesToPreviousFall"
                />
                <label
                  class="form-check-label"
                  for="similaritiesToPreviousFallYes"
                >
                  Yes
                </label>
              </div>
            </div>
            <div class="d-flex py-2">
              <p class="m-0">
                Any unmet needs identified (i.e. reeducation, environmental,
                medications, Etc.)
              </p>
              <div class="form-check mx-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="unmetNeedsNo"
                  name="unmetNeeds"
                />
                <label class="form-check-label" for="unmetNeedsNo"> No </label>
              </div>

              <div class="form-check mx-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="unmetNeedsYes"
                  name="unmetNeeds"
                />
                <label class="form-check-label" for="unmetNeedsYes">
                  Yes
                </label>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
