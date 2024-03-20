@extends('layouts.app')

@section('extra_css')
    <style>
        .dataTables_length label{
            width: 250px;
        }
        .dataTables_length label select {
            width: 100px;
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
        .editEmployeeModal {
            display: none;
        }
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }
        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }
        .avatar-upload .avatar-edit input {
            display: none;
        }
        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }
        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }
        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }
        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
@endsection
@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">
            <!-- Welcome banner -->
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
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Employee Trash</h1>
                </div>

            </div>

            <div class="row mb-4">
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <!-- Table -->
                        <div class="lf">
                            <table class="ux ou display nowrap" style="width:100%" id="employeeTable">
                                <!-- Table header -->
                                <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                    <tr>
                                        <th>Image</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Hiring Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm gp le ln">
                                <!-- Row -->
                                @if ($softDeletedEmployees)
                                    @foreach($softDeletedEmployees as $employee)
                                        <tr class="active cursor-pointer " data-id="{{$employee->id}}">
                                            <td style="width:20px; height:10px;">
                                                @if (isset($employee->photo) && file_exists(public_path('employee/' . $employee->photo)))
                                                    <img src="{{ asset('employee/' . $employee->photo) }}" alt="{{ $employee->name }}'s photo">
                                                @else
                                                    <img src="{{asset('employee/avatar.svg')}}" alt="Default photo">
                                                @endif
                                            </td>
                                            <td><a href="{{route('employees.show', $employee->id)}}">{{$employee->first_name}}</a></td>
                                            <td> <a href="{{route('employees.show', $employee->id)}}">{{$employee->last_name}}</a></td>
                                            <td>{{ \Carbon\Carbon::parse($employee->doh)->format('M d, Y') }}</td>
                                            <td class="dx flex items-center gap-[10px] shrink-0">
                                                <form action="{{ route('employee.restore', $employee->id) }}" class="btn btn-success" method="post">
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
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('extra_js')
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script>
        let eId = '';
        $(document).ready(function () {
            $('#employeeTable').DataTable({
                order: [ 1, 'desc' ],
                scrollX: true,
            });

            jQuery(document).on('submit', '#employeeForm', function(e) {
                e.preventDefault();
                let validator = jQuery('#employeeForm').validate({
                    rules: {
                        first_name: "required",
                        last_name: "required",
                        dob: "required",
                        ssn: "required",
                        gender: "required",
                        doh: "required",
                        dot: "required",
                        status: "required",
                        type: "required",
                        job_title: "required",
                        credentials: "required",
                        agency_branch: "required",
                        address_line_1: "required",
                        county: "required",
                        phone: "required",
                        home_phone: "required",
                        city: "required",
                        fax: "required",
                        email: "required",
                        state: "required",
                        zip: "required",
                        prefered_contact: "required",
                    }
                });
                if(validator.valid()) {
                    jQuery('.loader_wrap').fadeIn();
                    let data = new FormData(this);
                    data.append("_method", "PUT")
                    jQuery.ajax({
                        // data: $('#employeeForm').serialize(),
                        url: "/api/employee-update/"+eId,
                        method: 'POST',
                        data: data,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            window.location.reload();
                            $('#employeeForm').trigger("reset");
                            jQuery('.loader_wrap').fadeOut();
                            jQuery('.close-modal').trigger('click');
                            toastr.success(data.message)
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 300;
                            toastr.options.closeEasing = 'swing';
                            toastr.options.progressBar = true;
                        },
                        error: function (data) {
                            let errors = data.responseJSON;
                            for (const key of Object.keys(errors.errors)) {
                                let input = $('#'+key);
                                input.addClass('error');
                                input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                            }
                            jQuery('.loader_wrap').fadeOut();
                            jQuery('.close-modal').trigger('click');
                        }
                    });
                }
            });
        });

        jQuery(document).ready(function () {
            jQuery('table tbody').on('click', '.edit_employee', function() {
            // jQuery('.edit_employee').click(function () {
                $('.editEmployeeModal').modal({
                    fadeDuration: 100
                });

                eId = jQuery(this).data("id");

                jQuery.ajax({
                    url: "/api/employee-edit/"+eId,
                    method: 'POST',
                    data: eId,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        setInputField(data);
                        jQuery('.loader_wrap').fadeOut();
                    },
                    error: function (data) {
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            });
        });
        function setInputField(data) {
            jQuery('#first_name').val(data.employee.first_name);
            jQuery('#last_name').val(data.employee.last_name);
            jQuery('#mi').val(data.employee.mi);
            let dob = moment(data.employee.dob).format('MM-DD-YYYY');

            jQuery('#dob').val(dob);
            jQuery('#ssn').val(data.employee.ssn);
            console.log(data.employee.photo);
            jQuery('#imagePreview').css('background-image', 'url(/employee/'+data.employee.photo+')');
            let doh = moment(data.employee.doh).format('MM-DD-YYYY');
            let dot = moment(data.employee.dot).format('MM-DD-YYYY');
            jQuery('#doh').val(doh);
            jQuery('#dot').val(dot);
            jQuery('#gender').val(data.employee.gender);
            jQuery('#type').val(data.employee.type);
            jQuery('#status').val(data.employee.status);
            jQuery('#job_title').val(data.employee.job_title);
            jQuery('#credentials').val(data.employee.credentials);
            jQuery('#agency_branch').val(data.employee.agency_branch);
            jQuery('#address_line_1').val(data.employee.address_line_1);
            jQuery('#phone').val(data.employee.mobile_phone);
            jQuery('#address_line_2').val(data.employee.address_line_2);
            jQuery('#home_phone').val(data.employee.home_phone);
            jQuery('#city').val(data.employee.city);
            jQuery('#fax').val(data.employee.fax);
            jQuery('#email').val(data.employee.email);
            jQuery('#state').val(data.employee.state);
            jQuery('#zip').val(data.employee.zip);
            jQuery('#prefered_contact').val(data.employee.prefered_contact);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    jQuery('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    jQuery('#imagePreview').hide();
                    jQuery('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        jQuery("#photo").change(function() {
            readURL(this);
        });

        jQuery('#results').hide();

        jQuery('#address_line_1').keyup(function () {
            jQuery('#results').fadeIn();
            let xmlhttp = new XMLHttpRequest();
            let url = "https://api.geoapify.com/v1/geocode/autocomplete?text=" + jQuery('#address_line_1').val() + "&apiKey=59b779c0242a424b9f13a8bbc50bf287";
            xmlhttp.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200)
                {
                    let myArr = JSON.parse(this.responseText);
                    address_lockup(myArr.features);
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        });

        function address_lockup(arr)
        {
            let out = "";
            let i;

            if(arr.length > 0)
            {
                for(i = 0; i < arr.length; i++)
                {
                    out += "<div class='address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='"+arr[i].properties.address_line1+"' data-zip='"+arr[i].properties.zip+"' data-county='"+arr[i].properties.county+"' data-city='"+arr[i].properties.city+"' data-country='"+arr[i].properties.country+"'  data-lat='"+arr[i].properties.lat+"' data-lon='"+arr[i].properties.lon+"' data-state='"+arr[i].properties.state+"'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('results').innerHTML = out;
            }
            else
            {
                document.getElementById('results').innerHTML = "Sorry, no results...";
            }
        }

        jQuery(document).on('click', '.address', function () {
            jQuery('#address_line_1').val(jQuery(this).data('addressline1'));
            // jQuery('#zip').val(jQuery(this).data('zip'));
            jQuery('#county').val(jQuery(this).data('county'));
            jQuery('#city').val(jQuery(this).data('city'));
            jQuery('#zip').val(jQuery(this).data('zip'));
            jQuery('#state').val(jQuery(this).data('state'));
            jQuery('#lat').val(jQuery(this).data('lat'));
            jQuery('#lon').val(jQuery(this).data('lon'));
            jQuery('#results').fadeOut();
            // console.log(jQuery(this).data('lat'), jQuery(this).data('lang'), jQuery(this).data('address'))
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        jQuery("#imageUpload").change(function() {
            readURL(this);
        });
    </script>
@endsection
