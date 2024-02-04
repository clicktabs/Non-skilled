@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/nursingVisitNote/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/oasisCss/style_page14.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/patient/communication/style.css') }}" />

@endsection
@section('content')
<main>
<div class="container">
    <div class="card mb-2">
        <div class="card-body row">
        
            <form method="post">
                <h1 class="mb-3 mt-3 font-bold text-center ">FALL RISK Assessment</h1>
                <div class="row mt-3">
                    <div class="col" style="overflow-x: auto">
                        <table class="table-responsive table table-bordered">
                            <thead>
                            <tr>
                                <th>Parameter</th>
                                <th>Patient Condition</th>
                                <th>Score</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="font-bold" rowspan="3">Level of Consciousness/ Mental Status</td>
                                <td>Alert & oriented x 3 or comatose</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Disoriented x 3 at all times</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Intermittent Confusion</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            {{-- 2nd row --}}
                            <tr>
                                <td class="font-bold" rowspan="3">History Of Falls (Past three months)</td>
                                <td>No falls in past 3 months</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>1 – 2 falls in past 3 months</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>3 or more falls in past three months</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            {{-- End 2nd row --}}
                            {{-- 3rd row --}}
                            <tr>
                                <td class="font-bold" rowspan="3">Ambulatory/Elimination Status</td>
                                <td>Ambulatory & Incontinent</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Chair bound, may require assistance</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Ambulatory & Incontinent</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            {{-- End 3rd row --}}
                            {{-- 4th row --}}
                            <tr>
                                <td class="font-bold" rowspan="3">Vision Status</td>
                                <td>Adequate (w/ or w/o glasses)</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Poor (w/ or w/o glasses)</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Legally blind</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                              </tr>
                            {{-- End 4th row --}}
                            {{-- 5th row --}}
                            <tr>
                                <td class="font-bold" rowspan="7">Gait / Balance</td>
                                <td>Gait and balance normal</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Balance problem while standing</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Balance problem while walking</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Decreased muscular coordination</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Change in gait while walking through doorway</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Jerking or unstable while making turns</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Requires use of assistive device(cane, w/c, etc)</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            {{-- End 5th row --}}
                            {{-- 6th row --}}
                            <tr>
                                <td class="font-bold" rowspan="3">Systolic Blood Pressure</td>
                                <td>No noted drop between laying and standing</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Drop < 20mm Hg between laying and standing</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Drop >20mm Hg between laying and standing</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            {{-- End 6th row --}}
                            {{-- 7th row --}}
                            <tr>
                                <td rowspan="4">
                                    <span class="font-bold">Medications</span>
                                    <p>Respond based on the following</p>
                                    <p>Types of medications: anesthetics</p>
                                    <p>Antihistamines, Antihypertensive</p>
                                    <p>Antiseizure, Benzodiazepines</p>
                                    <p>Cathartics, Diuretics, Hypoglycemic,</p>
                                    <p>Narcotics, Psychotropics, sedatives</p>
                                    <p>Hypnotics</p>
                                </td>
                                <td>None of these medications taken currently <br/> and/or within the last 7 days</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Takes 1-2 of these medications currently/or <br/> within the last 7 days</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>Takes 3-4 these medications currently/or <br/> within the last 7 days</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>If patient has had a change in medication and <br/> /or change in dosage in the past
                                    5 days
                                </td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            {{-- End 7th row --}}
                            {{-- 8th row --}}
                            <tr>
                                <td rowspan="3"><span class="font-bold"> Predisposing Diseases </span>
                                    <p>Hypertension, vertigo, CVA</p>
                                    <p>Parkinson’s disease, loss of limb(s)</p>
                                    <p>Seizures, Arthritis, Osteoporosis</p>
                                </td>
                                <td>None present</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>1-2 present</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            <tr>
                                <td>3 or more present</td>
                                <td><input class="form-control" type="number" value="0" min="1"/></td>
                            </tr>
                            {{-- End 8th row --}}
                            {{-- Table footer --}}
                            <tr class="table_footer">
                                <td class="font-bold">Total score >10 represents</td>
                                <td class="font-bold">HIGH FALL RISK</td>
                                <td class="total_accident_risk_assesment font-bold">0</td>
                            </tr>
                            {{-- End table footer --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <button type="submit" class="form-control btn btn-primary mt-5 save_btn">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
   
@section('extra_js')