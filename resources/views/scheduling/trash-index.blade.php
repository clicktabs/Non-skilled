@extends('layouts.app')
@section('extra_css')
    <link href="{{asset('assets/css/calendar/style.css')}}" rel="stylesheet" type="text/css"/>
    <style>
        .dataTables_wrapper .dataTables_length select {
            width: 120px;
        }

        #listEditModal {
            display: none;
        }

        .jquery-modal.blocker.current {
            z-index: 999;
        }

        .jquery-modal .modal a.close-modal {
            top: 15px;
            right: 5px;
            display: none;
        }
        .modal {
            max-width: 100% !important;
            background: transparent;
        }
        .modal.fade .modal-dialog {
            transform: translate(0, 0) !important;
        }
        .action .btn {
            padding: 5px 15px !important;
        }
        .dataTables_length {

        }
        .dataTables_length label {
            width: 220px;
            display: flex;
            align-items: center;
            margin: 0 auto;
        }
        .dataTables_length label select {
            margin: 0 20px;
        }
    </style>
@endsection
@section('content')
    <main class=" vs jj ttm vl ou uf na">
        <div class="y pr dw jk rounded-sm la rc !bg-[#4133BF]">

            <!-- Background illustration -->
            <div class="g q k ip id pointer-events-none hidden tnh" aria-hidden="true">
                <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                        <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                        <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                            <stop stop-color="#A5B4FC" offset="0%"></stop>
                            <stop stop-color="#818CF8" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                            <stop stop-color="#4338CA" offset="0%"></stop>
                            <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <g transform="rotate(64 36.592 105.604)">
                            <mask id="welcome-d" fill="#fff">
                                <use xlink:href="#welcome-a"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                        </g>
                        <g transform="rotate(-51 91.324 -105.372)">
                            <mask id="welcome-f" fill="#fff">
                                <use xlink:href="#welcome-e"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                        </g>
                        <g transform="rotate(44 61.546 392.623)">
                            <mask id="welcome-h" fill="#fff">
                                <use xlink:href="#welcome-g"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <!-- Content -->
            <div class="y">
                <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Schedules Trash</h1>
            </div>

        </div>
        <div class="bg-white bd rounded-sm border border-slate-200 container-fluid pt-[50px] pb-[80px]">
            <table class="client_table ux ou display nowrap" style="width:100%" id="schedulingList">
                <thead class="bg-[#4133BF] text-[#fff]">
                    <tr>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Status</th>
                        <th class="action">Action</th>
                    </tr>
                </thead>

                <tbody class="text-sm gp le ln">
                    @if($softDeletedSchedules)
                        @foreach($softDeletedSchedules as $schedule)
                            <tr class="active cursor-pointer " data-id="{{$schedule->id}}">
                                <td>{{ \Carbon\Carbon::parse($schedule->kt_calendar_datepicker_start_date)->format('m-j-Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($schedule->kt_calendar_datepicker_end_date)->format('m-j-Y') }}</td>
                                <td>{{$schedule->start_time}}</td>
                                <td>{{$schedule->end_time}}</td>
                                <td>
                                    <div class="rounded-[5px] {{$schedule->scheduling_status ? $schedule->scheduling_status : 'completed'}}">
                                        <p class="text-white text-center py-[5px] px-[10px] border-none">{{$schedule->scheduling_status ? Str::replace(array('_', '-'), ' ', Str::ucfirst($schedule->scheduling_status)) : 'Completed'}}</p>
                                    </div>
                                </td>

                                <td>
                                    <form action="{{ route('schedule.restore', $schedule->id) }}" class="btn btn-success" class="btn btn-success" method="post">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-success">Restore</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </main>
@endsection
@section('extra_js')
    <script>
        $(document).ready(function () {
            function reset_modal_input() {
                $('#kt_calendar_datepicker_start_date, #kt_calendar_datepicker_end_date, #patient, #client_assess, #employee, #task, #sc_sub_addon_id, #bill_unit_type, #pay_unit_type, #scheduling_status, #payor_sub_addon_id, #scheduling_notes').val('');
                $('#mi_no_select').append();
                $('.total_hrs').text(`00 H : 00 M`);
            }
            function editWeeklySchedule(id){
                $.ajax({
                    url: "/schedule/get-edit-weekly-schedule",
                    type: "POST",
                    data: {id:id},
                    success: function(data){
                        if(data.schedule === null) {
                            return;
                        }
                        $('#schadule_id').val(data.schedule.id);
                        $('#save_event_data').empty();
                        $('#save_event_data').append('Update');
                        $('#patient').val(data.schedule.patient_id);
                        $('#mi_no_select').append($('<option>', {
                            value: data.schedule.mi_no,
                            text : data.schedule.mi_no
                        }));

                        $('#client_assess').val(data.schedule.client_assess);
                        $('#employee').val(data.schedule.employee_id);
                        $('#task').val(data.schedule.task);
                        $('#sc_sub_addon_id').val(data.schedule.sc_sub_addon_id);
                        $('#bill_unit_type').val(data.schedule.bill_unit_type);
                        $('#pay_unit_type').val(data.schedule.pay_unit_type);
                        $('#scheduling_status').val(data.schedule.scheduling_status);
                        $('#payor_sub_addon_id').val(data.schedule.payor_sub_addon_id);
                        $('#scheduling_notes').val(data.schedule.scheduling_notes);

                        let originalDateTimeStart = data.schedule.kt_calendar_datepicker_start_date+"T"+data.schedule.start_time;
                        let startLocalDate = moment(originalDateTimeStart, "MM-DD-YYYY HH:mm:ss").format("MM-DD-YYYY[T]HH:mm");

                        let originalDateTimeEnd = data.schedule.kt_calendar_datepicker_end_date+"T"+data.schedule.end_time;
                        let endLocalDate = moment(originalDateTimeEnd, "MM-DD-YYYY HH:mm:ss").format("MM-DD-YYYY[T]HH:mm");

                        let start_date = $('#kt_calendar_datepicker_start_date');
                        let end_date = $('#kt_calendar_datepicker_end_date');

                        start_date.val(originalDateTimeStart);
                        end_date.val(originalDateTimeEnd);

                        let m1 = moment(startLocalDate, 'MM-DD-YYYY HH:mm');
                        let m2 = moment(endLocalDate, 'MM-DD-YYYY HH:mm');
                        let duration = moment.duration(m1.diff(m2));
                        let hours = duration.hours();
                        let minutes = duration.minutes();
                        $('.total_hrs').text(`${Math.abs(hours)} H : ${Math.abs(minutes)} M`);

                    }
                });
            }
            $('#rec_event_data').click(function () {
                $('.week_lists').css("display", "flex").fadeIn();
            });

            $('#schedulingList').DataTable({
                order: [ 1, 'desc' ],
                scrollX: true,
            });

            $('.select-employees').on('change', function() {
                // Update
                // jQuery('.loader_wrap').fadeIn();
                let id = $(this).closest('tr').data('id');
                let employeeId = $(this).val();

                $.ajax({
                    url: '/schedule/calendar/employee/update',
                    method: 'POST',
                    cache: false,
                    data: {
                        id: id,
                        employee_id: employeeId,
                    },
                    success: function (data) {
                        toastr.success(data.message)
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 300;
                        toastr.options.closeEasing = 'swing';
                        toastr.options.progressBar = true;
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            });

            jQuery(document).on('submit', '#scheduleForm', function(e) {
                    e.preventDefault();
                jQuery('.loader_wrap').fadeIn();
                let data = new FormData(this);
                data.append("_method", "PUT");

                jQuery.ajax({
                    url: "/schedule-update/api",
                    method: 'POST',
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        // jQuery('#schedulingList').DataTable().ajax.reload();
                        // location.reload();
                        $('.jquery-modal.blocker.current').trigger('click');
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            })

            $('body').on('click', '.edit', function () {
                $('#kt_modal_add_event_form').modal({
                    fadeDuration: 100
                });
                let event_id = $(this).data('eventid');
                editWeeklySchedule(event_id);
            });

            $('#cancel_event_data').click(function () {
                $('.jquery-modal.blocker.current').trigger('click');
            });

            $('body').on('click', '.delete', function () {
            // jQuery('.loader_wrap').fadeIn();
            let event_id = $(this).data('eventid');
            let data = [event_id];
            $.ajax({
                url: "/schedule/delete-schedule",
                type: "POST",
                data: {ids: data},
                success: function (data) {
                    // Reload the entire page
                    location.reload();
                },
                complete: function () {
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });


            $('#kt_modal_add_event_close').click(function () {
                $('.jquery-modal.blocker.current').trigger('click')
            });
            function updateMiNo(selectElement) {
                // Get the selected option element
                let selectedOption = selectElement.options[selectElement.selectedIndex];
                let miNo = selectedOption.getAttribute('data-mi_no');
                // Set the MR No value to the blank option in the mi_no select element
                let miNoSelect = document.getElementById('mi_no_select');

                // Create the blank option if it doesn't exist
                let blankOption = miNoSelect.querySelector('option[value=""]');
                if (!blankOption) {
                    blankOption = document.createElement('option');
                    blankOption.value = "";
                    miNoSelect.appendChild(blankOption);
                }

                // Set the value and text of the blank option
                blankOption.value = miNo;
                blankOption.text = miNo;
                miNoSelect.value = miNo;
            }

            $('.jquery-modal.blocker.current').click(function () {
                $('#kt_modal_add_event_form').modal('hide');
                $('.week_lists').fadeOut();
                reset_modal_input();
                $('#schadule_id').val('');
                $(this).hide();
            });
        });
    </script>

@endsection
