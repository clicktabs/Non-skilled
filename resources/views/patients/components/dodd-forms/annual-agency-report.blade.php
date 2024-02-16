

<main>

   <div class="container pt-5">
      <div class="page-header">
         <img src="img/Logo.jpg" alt="" width="300px">
         <h1 class="text-center mt-5 mb-0 fw-bolder">ANNUAL REPORT – AGENCY PROVIDER</h1>
      </div>
      <div class="form-holder pt-5 pb-5">
         {{-- @if(session::get('success'))
            <div class="alert alert-success">
               {{ session::get('success')}}
            </div>
         @endif
         @if(session::get('success'))
         <div class="alert alert-danger">
            {{ session::get('fail')}}
         </div>
      @endif --}}
         <form action="store" method="post">
            @csrf
            <table class="table table-borderless align-middle default-td">
               <tr>
                  <td class="px-0">
                     <div class="input-group clean-input-group">
                        <label class="input-group-text" for="agencyprovider_Name">AGENCY PROVIDER NAME:</label>
                        <input style="min-width: 200px;" type="number" name="agencyprovider_Name" id="agencyprovider_Name" class="form-control" value="{{ old('agencyprovider_Name')}}">
                        {{-- <span style="color:red">@error('agencyprovider_Name'){{$message}} @enderror</span> --}}
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="px-0">
                     <div class="input-group clean-input-group">
                        <label class="input-group-text" for="agencyproviderMUI_Review">MUI ANNUAL REVIEW (January 1 through December 31) for the year</label>
                        <input style="min-width: 200px;" type="date" name="agencyproviderMUI_Review" id="agencyproviderMUI_Review" class="form-control">
                        {{-- <span style="color:red">@error('agencyprovider_Name'){{$message}} @enderror</span> --}}
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="px-0">
                     <b>Agency providers are required to complete the Annual Review by January 31 and send to the County Board by February 28.</b>
                  </td>
               </tr>
               <tr>
                  <td class="px-0">
                     <div class="input-group clean-input-group">
                        <label class="input-group-text" for="agencyproviderMUI_categories">Total Number of MUI categories for the previous year:</label>
                        <input style="min-width: 200px;" type="number" name="agencyproviderMUI_categories" id="agencyproviderMUI_categories" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="px-0">
                     <div class="input-group clean-input-group">
                        <label class="input-group-text" for="agencyprovidertotalnumber_MUI">Total Number of MUI categories for the same period 2 years ago:</label>
                        <input style="min-width: 200px;" type="number" name="agencyprovidertotalnumber_MUI" id="agencyprovidertotalnumber_MUI" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="px-0">
                     <div class="input-group clean-input-group">
                        <label class="input-group-text" for="agencyprovidersameperiod_MUI">Total Number of MUI categories for the same period 3 years ago:</label>
                        <input style="min-width: 200px;" type="number" name="agencyprovidersameperiod_MUI" id="agencyprovidersameperiod_MUI" class="form-control">
                     </div>
                  </td>
               </tr>
            </table>

            <p>Number of MUI categories by type:</p>
            <table class="table table-bordered align-middle default-td not-responsive">
               <thead>
                  <tr class="text-center">
                     <th>MUI Categories</th>
                     <th>Previous year</th>
                     <th>2 years ago</th>
                     <th>3 years ago</th>
                  </tr>
               </thead>
               <tbody>
                     <td>Attempted suicide</td>
                     <label for="annualReport_Attempted_suicide_1"></label>
                     <td><input type="number" name="annualReport_Attempted_suicide_1" id="annualReport_Attempted_suicide_1" class="form-control"></td>
                     <label for="annualReport_Attempted_suicide_2"></label>
                     <td><input type="number" name="annualReport_Attempted_suicide_2" id="annualReport_Attempted_suicide_2" class="form-control"></td>
                     <label for="annualReport_Attempted_suicide_3"></label>
                     <td><input type="number" name="annualReport_Attempted_suicide_3" id="nnualReport_Attempted_suicide_3" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Death-Non-Accidental</td>
                     <label for="annualReport_Attempted_Death-Non-Accidental"></label>
                     <td><input type="number" name="annualReport_Attempted_Death-Non-Accidental" id="nnualReport_Attempted_Death-Non-Accidental" class="form-control"></td>
                     <label for="annualReport_Attempted_Death-Non-Accidental_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Death-Non-Accidental_1" id="annualReport_Attempted_Death-Non-Accidental_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Death-Non-Accidental_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Death-Non-Accidental_2" id="annualReport_Attempted_Death-Non-Accidental_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Exploitation</td>
                     <label for="annualReport_Attempted_Exploitation"></label>
                     <td><input type="number" name="annualReport_Attempted_Exploitation" id="annualReport_Attempted_Exploitation" class="form-control"></td>
                     <label for="annualReport_Attempted_Exploitation_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Exploitation_1" id="annualReport_Attempted_Exploitation_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Exploitation_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Exploitation_2" id="annualReport_Attempted_Exploitation_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Failure to Report</td>
                     <label for="annualReport_Attempted_Failure"></label>
                     <td><input type="number" name="annualReport_Attempted_Failure" id="annualReport_Attempted_Failure" class="form-control"></td>
                     <label for="annualReport_Attempted_Failure_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Failure_1" id="annualReport_Attempted_Failure_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Failure_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Failure_2" id="annualReport_Attempted_Failure_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Law Enforcement</td>
                     <label for="annualReport_Attempted_Enforcement"></label>
                     <td><input type="number" name="annualReport_Attempted_Enforcement" id="annualReport_Attempted_Enforcement" class="form-control"></td>
                     <label for="annualReport_Attempted_Enforcement_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Enforcement_1" id="annualReport_Attempted_Enforcement_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Enforcement_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Enforcement_2" id="annualReport_Attempted_Enforcement_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Medical Emergency</td>
                     <label for="annualReport_Attempted_Medical_Emergency"></label>
                     <td><input type="number" name="annualReport_Attempted_Medical_Emergency" id="annualReport_Attempted_Medical_Emergency" class="form-control"></td>
                     <label for="annualReport_Attempted_Medical_Emergency_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Medical_Emergency_1" id="annualReport_Attempted_Medical_Emergency_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Medical_Emergency_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Medical_Emergency_2" id="annualReport_Attempted_Medical_Emergency_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Misappropriation</td>
                     <label for="annualReport_Attempted_Misappropriation"></label>
                     <td><input type="number" name="annualReport_Attempted_Misappropriation" id="annualReport_Attempted_Misappropriation" class="form-control"></td>
                     <label for="annualReport_Attempted_Misappropriation_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Misappropriation_1" id="annualReport_Attempted_Misappropriation_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Misappropriation_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Misappropriation_2" id="annualReport_Attempted_Misappropriation_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Missing Individual</td>
                     <label for="annualReport_Attempted_Missing_Individual"></label>
                     <td><input type="number" name="annualReport_Attempted_Missing_Individual" id="annualReport_Attempted_Missing_Individual" class="form-control"></td>
                     <label for="annualReport_Attempted_Missing_Individual_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Missing_Individual_1" id="annualReport_Attempted_Missing_Individual_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Missing_Individual_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Missing_Individual_2" id="annualReport_Attempted_Missing_Individual_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Neglect</td>
                     <label for="annualReport_Attempted_Neglect"></label>
                     <td><input type="number" name="annualReport_Attempted_Neglect" id="annualReport_Attempted_Neglect" class="form-control"></td>
                     <label for="annualReport_Attempted_Neglect_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Neglect_1" id="annualReport_Attempted_Neglect_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Neglect_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Neglect_2" id="annualReport_Attempted_Neglect_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Peer-to-Peer Act</td>
                     <label for="annualReport_Attempted_PeertoPeer"></label>
                     <td><input type="number" name="annualReport_Attempted_PeertoPeer" id="annualReport_Attempted_PeertoPeer" class="form-control"></td>
                     <label for="annualReport_Attempted_PeertoPeer_1"></label>
                     <td><input type="number" name="annualReport_Attempted_PeertoPeer_1" id="annualReport_Attempted_PeertoPeer_1" class="form-control"></td>
                     <label for="annualReport_Attempted_PeertoPeer_2"></label>
                     <td><input type="number" name="annualReport_Attempted_PeertoPeer_2" id="annualReport_Attempted_PeertoPeer_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Physical Abuse</td>
                     <label for="annualReport_Attempted_Physical_Abuse"></label>
                     <td><input type="number" name="annualReport_Attempted_Physical_Abuse" id="annualReport_Attempted_Physical_Abuse" class="form-control"></td>
                     <label for="annualReport_Attempted_Physical_Abuse_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Physical_Abuse_1" id="annualReport_Attempted_Physical_Abuse_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Physical_Abuse_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Physical_Abuse_2" id="annualReport_Attempted_Physical_Abuse_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Prohibited Sexual Relations</td>
                     <label for="annualReport_Attempted_Prohibited"></label>
                     <td><input type="number" name="annualReport_Attempted_Prohibited" id="annualReport_Attempted_Prohibited" class="form-control"></td>
                     <label for="annualReport_Attempted_Prohibited_1"></label>
                     <td><input type="number" name="annualReport_Attempted_Prohibited_1" id="annualReport_Attempted_Prohibited_1" class="form-control"></td>
                     <label for="annualReport_Attempted_Prohibited_2"></label>
                     <td><input type="number" name="annualReport_Attempted_Prohibited_2" id="annualReport_Attempted_Prohibited_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Rights Code Violation</td>
                     <label for="annualReport_Rights_ Code_Violation"></label>
                     <td><input type="number" name="annualReport_Rights_ Code_Violation" id="annualReport_Rights_ Code_Violation" class="form-control"></td>
                     <label for="annualReport_Rights_ Code_Violation_1"></label>
                     <td><input type="number" name="annualReport_Rights_ Code_Violation_1" id="annualReport_Rights_ Code_Violation_1" class="form-control"></td>
                     <label for="annualReport_Rights_Code_Violation_2"></label>
                     <td><input type="number" name="annualReport_Rights_Code_Violation_2" id="annualReport_Rights_Code_Violation_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Sexual Abuse</td>
                     <label for="annualReport_Rights_Sexual_Abuse"></label>
                     <td><input type="number" name="annualReport_Rights_Sexual_Abuse" id="annualReport_Rights_Sexual_Abuse" class="form-control"></td>
                     <label for="annualReport_Rights_Sexual_Abuse_1"></label>
                     <td><input type="number" name="annualReport_Rights_Sexual_Abuse_1" id="annualReport_Rights_Sexual_Abuse_1" class="form-control"></td>
                     <label for="annualReport_Rights_Sexual_Abuse_2"></label>
                     <td><input type="number" name="annualReport_Rights_Sexual_Abuse_2" id="annualReport_Rights_Sexual_Abuse_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Significant Injury</td>
                     <label for="annualReport_Rights_Significant_Injury"></label>
                     <td><input type="number" name="annualReport_Rights_Significant_Injury" id="annualReport_Rights_Significant_Injury" class="form-control"></td>
                     <label for="annualReport_Rights_Significant_Injury_1"></label>
                     <td><input type="number" name="annualReport_Rights_Significant_Injury_1" id="annualReport_Rights_Significant_Injury_1" class="form-control"></td>
                     <label for="annualReport_Rights_Significant_Injury_2"></label>
                     <td><input type="number" name="annualReport_Rights_Significant_Injury_2" id="annualReport_Rights_Significant_Injury_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Unapproved Behavioral Support</td>
                     <label for="annualReport_Rights_Unapproved_Behavioral"></label>
                     <td><input type="number" name="annualReport_Rights_Unapproved_Behavioral" id="annualReport_Rights_Unapproved_Behavioral" class="form-control"></td>
                     <label for="annualReport_Rights_Unapproved_Behavioral_1"></label>
                     <td><input type="number" name="annualReport_Rights_Unapproved_Behavioral_1" id="annualReport_Rights_Unapproved_Behavioral_1" class="form-control"></td>
                     <label for="annualReport_Rights_Unapproved_Behavioral_2"></label>
                     <td><input type="number" name="annualReport_Rights_Unapproved_Behavioral_2" id="annualReport_Rights_Unapproved_Behavioral_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Unanticipated Hospitalization</td>
                     <label for="annualReport_Rights_Unanticipated_Hospitalization"></label>
                     <td><input type="number" name="annualReport_Rights_Unanticipated_Hospitalization" id="annualReport_Rights_Unanticipated_Hospitalization"  class="form-control"></td>
                     <label for="annualReport_Rights_Unanticipated_Hospitalization_1"></label>
                     <td><input type="number" name="annualReport_Rights_Unanticipated_Hospitalization_1" id="annualReport_Rights_Unanticipated_Hospitalization_1" class="form-control"></td>
                     <label for="annualReport_Rights_Unanticipated_Hospitalization_2"></label>
                     <td><input type="number" name="annualReport_Rights_Unanticipated_Hospitalization_2" id="annualReport_Rights_Unanticipated_Hospitalization_2" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Verbal Abuse</td>
                     <label for="annualReport_Rights_Verbal_Abuse"></label>
                     <td><input type="number" name="annualReport_Rights_Verbal_Abuse" id="annualReport_Rights_Verbal_Abuse" class="form-control"></td>
                     <label for="annualReport_Rights_Verbal_Abuse_1"></label>
                     <td><input type="number" name="annualReport_Rights_Verbal_Abuse_1" id="annualReport_Rights_Verbal_Abuse_1" class="form-control"></td>
                     <label for="annualReport_Rights_Verbal_Abuse_2"></label>
                     <td><input type="number" name="annualReport_Rights_Verbal_Abuse_2" id="annualReport_Rights_Verbal_Abuse_2" class="form-control"></td>
                  </tr>
               </tbody>
            </table>

            <label class="mb-1 mt-4" for="annualReport_Rights_Explain">Explain the reasons for any significant differences from year to year and any MUI categories with a high number of incidents (use additional pages as necessary):</label>
            <textarea type="text" name="annualReport_Rights_Explain" id="annualReport_Rights_Explain" cols="30" rows="10" class="form-control"></textarea>

            <p class="mb-0 mt-4"><b><u>Agency Trends and Patterns – current year</u></b></p>
            <label class="mb-1" for="annualReport_Rights_AgencyTrends">Identify and explain any agency-wide trends and any trends by residence, region, or program:</label>
            <textarea type="text" name="annualReport_Rights_AgencyTrends" id="annualReport_Rights_AgencyTrends" cols="30" rows="6" class="form-control"></textarea>

            <label class="mb-1 mt-4" for="annualReport_Rights_Description_action">Description of action plans and preventive measures to address these trends/patterns:</label>
            <textarea type="text" name="annualReport_Rights_Description_action" id="annualReport_Rights_Description_action" cols="30" rows="4" class="form-control"></textarea>

            <p class="mb-0 mt-4"><b><u>Agency Trends and Patterns - previous year</u></b></p>
            <label class="mb-1" for="annualReport_Rights_previouse_year">Previous year’s agency–wide trends or trends by residence, region, or program:</label>
            <textarea type="text" name="annualReport_Rights_previouse_year" id="annualReport_Rights_previouse_year" cols="30" rows="4" class="form-control"></textarea>

            <label class="mb-1 mt-4" for="annualReport_Rights_preventive">Were the action plans and preventive measures effective?</label>
            <textarea type="text" name="annualReport_Rights_preventive" id="annualReport_Rights_preventive" cols="30" rows="2" class="form-control"></textarea>

            <p class="mb-0 mt-4"><b><u>Individual Trends and Patterns</u></b></p>
            <label class="mb-1" for="">Individuals with 5 or more MUI categories in 6 months or 10 or more MUI categories in 12 months in the current year:</label>
            <div class="d-block my-2">
               <div class="input-group clean-input-group">
                  <label class="input-group-text" for="annualReport_Rights_individualswith5">Name:</label>
                  <input style="min-width: 200px;" type="text" name="annualReport_Rights_individualswith5" id="annualReport_Rights_individualswith5" class="form-control">
               </div>
            </div>
            <div class="d-block my-2">
               <div class="input-group clean-input-group">
                  <label class="input-group-text" for="annualReport_Rights_MUI_types">MUI types:</label>
                  <input style="min-width: 200px;" type="number" name="annualReport_Rights_MUI_types" id="annualReport_Rights_MUI_types" class="form-control">
               </div>
            </div>

            <label for="annualReport_Rights_actionplansPreventives" class="mb-0 mt-3">Action plans and preventive measures taken to address this trend/pattern:</label>
            <textarea text="text" name="annualReport_Rights_actionplansPreventives" id="annualReport_Rights_actionplansPreventives" cols="30" rows="2" class="form-control"></textarea>

            <div class="d-block my-3">
               <div class="input-group clean-input-group">
                  <label class="input-group-text" for="annualReport_Rights_datatheAction">Date the action plans and preventive measures were added to the individual’s plan:</label>
                  <input style="min-width: 200px;" type="date" name="annualReport_Rights_datatheAction" id="annualReport_Rights_datatheAction" class="form-control">
               </div>
               <p><i>(Use additional pages to add additional individuals if needed.)</i></p>
            </div>

            <div class="d-block mb-2 mt-4">
               <div class="input-group clean-input-group">
                  <label class="input-group-text" for="annualReport_Rights_Datereview">Date review was completed:</label>
                  <input style="min-width: 200px;" type="date" name="annualReport_Rights_Datereview" id="annualReport_Rights_Datereview" class="form-control">
               </div>
            </div>
            <div class="d-block my-2">
               <div class="input-group clean-input-group">
                  <label class="input-group-text" for="annualReport_Rights_nameofpersonComplete">Name of person completing this review:</label>
                  <input style="min-width: 200px;" type="text" name="annualReport_Rights_nameofpersonComplete" id="annualReport_Rights_nameofpersonComplete" class="form-control">
               </div>
               <div class=" mt-4">
                  <button type="submit" class=" btn btn-primary btn-block active" >Save</button>
              </div>
            </div>
               <h6 class="text-center mt-5 mb-3">DODD MUI UNIT – ANNUAL REVIEW FORM – AGENCY – FEB. 2020</h6>
         </form>
      </div>
   </div>

   <script src="bs/js/bootstrap.min.js"></script>

</main>


