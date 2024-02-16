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

   {{-- @extends('layouts.app')

   @section('content') --}}

       <main>

         <div class="container pt-5">
            <div class="page-header">
               <img src="img/Logo.jpg" alt="" width="300px">
               <h1 class="text-center fs-3 my-4">UNUSUAL INCIDENT REPORT LOG</h1>
            </div>
            <div class="form-holder pb-5">
               <form action="" method="post" id="oasis-e-form">
                  <div class="table-responsive">
                     <table class="table table-bordered align-middle default-td not-responsive">
                        <tr>
                           <td class="py-1" colspan="5">
                              <div class="input-group clean-input-group">
                                 <label class="input-group-text">Provider/Facility:</label>
                                 <input style="min-width: 150px;" type="text" id="" class="form-control">
                              </div>
                           </td>
                           <td class="py-1" colspan="2">
                              <div class="input-group clean-input-group">
                                 <label class="input-group-text">Month/Year:</label>
                                 <input style="min-width: 150px;" type="text" id="" class="form-control">
                              </div>
                           </td>
                           <td class="py-1" colspan="3">
                              <div class="input-group clean-input-group">
                                 <label class="input-group-text">County:</label>
                                 <input style="min-width: 150px;" type="text" id="" class="form-control">
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>Name</td>
                           <td>UI #</td>
                           <td>Date & Time</td>
                           <td>Injury</td>
                           <td>Home Name and Address</td>
                           <td>Location</td>
                           <td>Description of the Incident (Explain the risk of Harm)</td>
                           <td>Immediate Actions Taken to Ensure Health and Welfare</td>
                           <td>Causes and Contributing Factors</td>
                           <td>Prevention Plan</td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                           <td><input type="text" name="" class="form-control"></td>
                        </tr>
                     </table>
                  </div>
      
                  <div class="row row-flex gy-2 mt-2">
                     <div class="col-lg">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Reviewed by:</label>
                           <input style="min-width: 150px;" type="text" id="" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Title:</label>
                           <input style="min-width: 150px;" type="text" id="" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text">Date:</label>
                           <input style="min-width: 150px;" type="date" id="" class="form-control">
                        </div>
                     </div>
                  </div>
      
                  <div class="row row-flex gy-2 mt-1 align-items-center">
                     <div class="col-lg">
                        <div class="d-block labels-group my-2">
                           <span>Trends and Pattern Identified?</span> &nbsp; &nbsp;
                           <label class="form-check-label fw-normal"><input type="radio" name="tpi" class="form-check-input"> YES</label> &nbsp;
                           <label class="form-check-label fw-normal"><input type="radio" name="tpi" class="form-check-input"> NO</label>
                        </div>
                        <div class="d-block labels-group my-2">
                           <span>Trends and Pattern Addressed?</span> &nbsp; &nbsp;
                           <label class="form-check-label fw-normal"><input type="radio" name="tpa" class="form-check-input"> YES</label> &nbsp;
                           <label class="form-check-label fw-normal"><input type="radio" name="tpa" class="form-check-input"> NO</label>
                        </div>
                     </div>
                     <div class="col-lg"><p>If yes, please complete section below.</p></div>
                  </div>
      
                  <table class="table table-bordered align-middle default-td mt-2">
                     <tr>
                        <td>
                           <label for="" class="form-label mb-0">Action taken to address identified Patterns and Trends:</label>
                           <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                        </td>
                     </tr>
                  </table>
      
                  <p style="font-size: 13px;"><small>O.A.C. 5123-17-02 (M)(8) Each agency provider and independent provider shall maintain a log of all unusual incidents. The log shall contain only unusual incidents as defined in paragraph (C)(25) of this rule and shall include, but is not limited to, the name of the of the individual, a brief description of the unusual incident, any injuries, time, date, location, cause and contributing factors and preventive measures. (M)(9) Members of an individual’s team shall ensure that risks associated with unusual incidents are addressed in the individual plan or individual service plan of each individual affected.</small></p>
                  <p class="text-end">DODD MUI – UNUSUAL INCIDENT LOG – DECEMBER 2019</p>
               </form>
            </div>
         </div>

   <script src="bs/js/bootstrap.min.js"></script>
</main>

{{-- @endsection --}}
