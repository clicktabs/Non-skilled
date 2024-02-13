@extends('layouts.app')
@section('extra_css')
    <style>
        .dataTables_length label{
            width: 250px;
        }
        .dataTables_length label select {
            width: 100px;
        }
        #patientTable {
            padding-top: 30px;
        }
        table.dataTable>tbody>tr.child ul.dtr-details {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .blocker.jquery-modal {
            z-index: 99;
        }
        .jquery-modal .modal a.close-modal {
            top: 15px;
            right: 5px;
        }
        #nonAdmittedPatients {
            display: none;
        }
        #nonAdmittedPatients .dataTables_wrapper .dataTables_scroll {
            clear: both;
            padding-top: 30px;
        }
    </style>
@endsection
@section('content')

    <main>

    <table class="ux ou display nowrap !pt-0" style="width:100%" id="patientTable">
    <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
    <tr>
        <th class="dx">
            <div class="gh gt">Patient</div>
        </th>
        <th class="dx">
            <div class="gh gt">MRN</div>
        </th>
        <th class="dx">
            <div class="gh gt">Date of Birth</div>
        </th>
        <th class="dx">
            <div class="gh gt">Name of Form</div>
        </th>
        <th class="dx">
            <div class="gh gt">Date Deleted</div>
        </th>
        <th class="dx">
            <div class="gh gt">Referral date</div>
        </th>
        <th class="dx">
            Action
        </th>
    </tr>
    </thead>
    <!-- Table body -->
    <tbody class=" text-center text-sm gp le ln">

            <tr>
                <td class="dx">
                    <div class="flex items-center">
                        <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">
                            
                        </div>
                    </div>
                </td>
                <td class="dx">
      
                </td>

                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx">
              
                    <div class="gn"></div>
                </td>
                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx flex items-center gap-[10px] shrink-0">
                    <a href="" class="btn ho xi ye">Edit</a>
                    <form name="patientAdmitForm" id="patientAdmitForm">
                        @csrf
                        <input type="text" class="hidden" id="patient_id" name="patient_id" value="" />
                        <button class="btn ho xi ye admit" data-pid="">Admit</button>
                    </form>
                    <button type="button" class="btn btn-danger !bg-[#bb2d3b] ho xi ye non_admit" data-id="">Non-Admit</button>
                    <button type="button" class="btn btn-danger !bg-[#bb2d3b] ho xi ye delete" data-id="">Delete</button>
                </td>
            </tr>
    </tbody>
</table>


@endsection
@section('extra_js')

@endsection
