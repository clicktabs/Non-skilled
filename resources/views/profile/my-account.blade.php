@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{asset('assets/css/patients-admission.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/patient/communication/style.css')}}"/>
    <link rel="stylesheet" href="https://unpkg.com/signature_pad/dist/signature-pad.css">
    <style>
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

        .signature-container {
        max-width: 400px;
        margin: 0 auto;
    }

    #signatureCanvas {
        border: 2px solid #333;
        width: 100%;
        height: 200px;
        cursor: crosshair;
    }

    .button-container {
        margin-top: 0px;
        text-align: center;
    }

    .button-container button {
        margin: 0 10px;
    }
    .label{
        font-weight: bold;
    }
    @media (max-width: 767){
        .table-responsive2{
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }
    @media (min-width: 768px) {
    /* Add styles for smaller screens here */
    .tableDesign {
        table-layout: fixed;
        max-width: 100%;
    }

    /* Define specific pixel widths for each column */
    .w-35 {
        width: 35%;
    }

    .w-15 {
        width: 15%;
    }

    .w-20 {
        width: 20%;
    }

    .table td {
        white-space: normal;
    }
}

    </style>
@endsection

@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">
            <!-- Page header -->
            <div class="rc">
                <!-- Title -->
                <h1 class="gu teu text-slate-800 font-bold">Account Settings ✨</h1>
            </div>
            <div id="tabs">
                <div class="main_content_nav">
                    <ul class="bg-[#4133BF]">
                        @if($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('Administrator'))
                            <li><a href="#tabs-account">My account</a></li>
                            <li><a href="#tabs-evv-setup">EVV Setup</a></li>
                            <li><a href="#tabs-agreement">Agreement</a></li>
                            @if ($user->hasRole('admin') || $user->hasRole('Administrator'))
                                <li><a href="#tabs-subscription">Subscription</a></li>
                            @endif
                        @elseif($user->hasRole('Employee'))
                            <li><a href="#tabs-accountEmp">My account</a></li>
                            <li><a href="#tabs-agreement">Agreement</a></li>
                        @endif
                    </ul>
                </div>

                @if($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('Administrator'))
                    @include('profile.adminAccount')
                    @include('profile.evvSetup')
                    @include('profile.agreement')
                    @if ($user->hasRole('super-admin'))
                    @else
                        @include('profile.subscription')
                    @endif

                @elseif($user->hasRole('Employee'))
                    @include('profile.employeeAccount')
                    @include('profile.agreement')
                @else

                @endif
            </div>
        </div>
    </main>

@endsection

@section('extra_js')
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script>
        $("#tabs").tabs();

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    jQuery('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    jQuery('#imagePreview').hide();
                    jQuery('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        jQuery("#imageUpload").change(function () {
            readURL(this);
        });
    </script>



@endsection
