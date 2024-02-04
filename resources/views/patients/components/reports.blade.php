@extends('layouts.app')
@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.min.css') }}">
<style>
    table a {
        color: blue;
    }
    table a b {
        font-weight: 600;
    }
</style>
@endsection
@section('content')
    <main>
        <div class="vs jj ttm vl ou uf na">
            <div class="row mb-4">
                <h1 class="fs-2 mb-4 text-dark">Report Center</h1>
                <div class="p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr> 
                                <td>
                                    <select class="form-select" aria-label="Location select">
                                        <option value="">Select Location</option>
                                        <option value="">Location 1</option>
                                        <option value="">Location 2</option>
                                        <option value="" selected>Location 3</option>
                                        <option value="">Location 4</option>
                                    </select>
                                </td> 
                                <td>
                                    <select class="form-select" aria-label="Location select">
                                        <option value="">Select Option</option>
                                        <option value="">DODD</option>
                                        <option value="">Non-skilled</option>
                                        <option value="">skilled</option>
                                    </select>
                                </td>  
                                <td style="max-width: 200px">
                                    <select class="form-select" aria-label="Location select">
                                        <option value="">Select Report Item</option>
                                        <option value="">Patient Roster</option>
                                        <option value="">Patient Emergency Contact List</option>
                                        <option value="">Patient Address</option>
                                        <option value="">Patient Birthday</option>
                                        <option value="">Patient physician List</option>
                                        <option value="">Patient Start of Care List</option>
                                        <option value="">Patient to Employee List</option>
                                        <option value="">Patient to Case Manager List</option>
                                        <option value="">Patient Authorisation</option>
                                        <option value="">Survey Census</option>
                                        <option value="">Plan of Care History</option>
                                        <option value="">Patient 60 day Summary</option>
                                        <option value="">Patient Orders History</option> 
                                        <option value="">Patient Discharge List</option> 
                                        <option value="">Patient Infection List</option> 
                                        <option value="">Physician Order History by Patient</option> 
                                        <option value="">Employee Roster</option>  
                                        <option value="">Employee License</option>  
                                        <option value="">Expiring Documents</option>  
                                        <option value="">Employee Task</option>  
                                        <option value="">Employee Visits</option>  
                                        <option value="">Employee Birthday</option>                      
                                    </select>
                                </td>
                                <td style="max-width: 200px">
                                    <div id="daterange"  class="float-end" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; text-align:center;height: auto;border-radius: 4px;">
                                        <i style="margin-right: 5px;" class="fa-regular fa-calendar-days"></i><span></span><i class="fa-solid fa-angle-down" style="margin-left: 5px;"></i>
                                    </div>
                                </td>
                                {{-- <td>
                                    <select id="task" class="form-select" aria-label="All Tasks select">
                                        <option value="">All Tasks</option>
                                        <option value="PT Plan of Care">PT Plan of Care</option>
                                        <option value="Skilled Nurse Visit">Skilled Nurse Visit</option>
                                        <option value="Plan Of Care">Plan Of Care</option>
                                        <option value="Plan Of Care">Plan Of Care</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" aria-label="All Tasks select">
                                        <option value="">Select Status</option>
                                        <option value="" selected>Pending</option>
                                        <option value="">Review</option>
                                        <option value="">Submitted</option>
                                    </select>
                                </td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>

                <table id="daterange_table" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Patient Name</th>
                            <th>MRN</th>
                            <th>Event Date</th>
                            <th></th>
                            <th>Task</th>
                            <th>Status</th>
                            <th>Notes</th>
                            <th>Assigned To</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

@section('extra_js')
    <script src="{{ asset('assets/js/daterangepicker.min.js') }}"></script>

    <script type="text/javascript">
    $(function () {
    
        var start_date = moment().subtract(1, 'M');
        var end_date = moment();
        var dateRange = start_date.format('MM/DD/YYYY') + ' - ' + end_date.format('MM/DD/YYYY');
    
        let startDate = '', endDate = '';
        $('#daterange span').html(dateRange);
    
        $('#daterange').daterangepicker(function(start_date, end_date){
            $('#daterange span').html(dateRange);
        });
        $('#daterange').on('apply.daterangepicker', function(ev, picker) {
            startDate = picker.startDate.format('MM/DD/YYYY')
            endDate = picker.endDate.format('MM/DD/YYYY')

            table.draw();
        });
    
        var table = $('#daterange_table').DataTable({
            processing : true,
            serverSide : true,
            ajax : {
                url : "{{ route('patients.qa') }}",
                data : function(data){
                    if( startDate && endDate ) {
                        data.from_date = $('#daterange').data('daterangepicker').startDate.format('MM/DD/YYYY');
                        data.to_date = $('#daterange').data('daterangepicker').endDate.format('MM/DD/YYYY');
                    }
                }
            },
            columns : [
                {data : 'id', name : 'id'},
                {data : 'name', name : 'first_name', className: "details-control"},
                {data : 'mrn', name : 'mrn'},
                {data : 'event_date', name : 'event_date'},
                {data : 'type', name : 'type'},
                {data : 'task', name : 'task'},
                {data : 'status', name : 'status'},
                {data : 'notes', name : 'notes'},
                {data : 'assigned_to', name : 'assigned_to'},
            ]
        });

        function format ( d ) {
            return $(`<tr>
                            <td colspan="9">Patient: <b>DALTON, ANDY</b></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                        </tr>`).toArray();
}


        $('#daterange_table tbody').on('click', 'td.details-control', function () {
            var tr = $(this).parents('tr');
            var row = table.row( tr );

            console.log(row.child);
        
            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row (the format() function would return the data to be shown)
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    
    });
    </script>
@endsection