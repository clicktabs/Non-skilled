{{-- @extends('layouts.app')

@section('content') --}}
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>60-Day Summary/Case Conference</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <style>
        :root {
            --bs-border-color: #a9a9a9;
        }

        body {
            font-size: 14px;
        }

        .container {
            max-width: 1700px;
        }

        .table>:not(caption)>*>* {
            padding-left: 0.8rem;
            padding-right: 0.81rem;
        }

        .clean-input-group {
            align-items: flex-end;
            column-gap: 10px;
        }

        .clean-input-group .input-group-text,
        .clean-input-group .form-control {
            border-radius: 0;
            border: 0 none;
            padding: 0;
            background: none;
        }

        .clean-input-group .form-control {
            border-bottom: var(--bs-border-width) solid var(--bs-border-color);
        }

        .clean-input-group .form-control:focus {
            border-color: transparent;
            box-shadow: none;
            border-bottom: var(--bs-border-width) solid #000;
        }

        .table.padding-thin>:not(caption)>*>* {
            padding-left: 0.2rem;
            padding-right: 0.2rem;
        }

        .table.padding-hr-0>:not(caption)>*>* {
            padding-left: 0;
            padding-right: 0;
        }

        .input-padding-thin .form-control {
            padding-left: .3rem;
            padding-right: .3rem;
        }

        /* Print */
        @media print {

            .d-flex,
            .d-md-flex,
            .d-lg-flex {
                display: flex !important;
            }
        }
        .vt{
            background-image: linear-gradient(rgb(238, 239, 192), rgb(203, 242, 240));
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="jj ttm vl ou uf na">
      <div class="vt container pt-5 px-4 overflow-auto">
        <div class="form-holder mt">
            <p class="text-center">
                <small>Andrew Developmental Disabilities Services, LLC</small><br>
                5330 East Main Street, Suite 103, Whitehall, Ohio 43213<br>
                Provider # 2553544
            </p>

            <h1 class="fs-5 text-center fw-bolder position-relative mt-4" style="padding: 0 240px;">Medication Count Sheet</h1>

            <form action="" method="post">
                <!-- table -->
                <table class="table table-bordered align-middle text-center mb-1"> 
                    <div class="row">
                            <div class="col-md-6"><th><label for="name">Individual Name:</label></th></div>
                            <div class="col-md-6"><td><input type="text" name="" id="name" class="form-control"></td></div>
                    </div>                  
                        <div class="row">
                            <div class="col-md-6"><th><label for="ISPDate">Staff Name:</label></th></th></div>
                            <div class="col-md-6"><td><input type="text" name="" id="name" class="form-control"></td></div>
                        </div>
                </table>
                <!-- table -->
                <table class="table table-bordered align-middle text-center mt-1 padding-thin input-padding-thin" id="append-rows">
                    <tr class="align-top">
                        <th style="width: 180px;"><b>Drug Name</b><br></th>
                        <th style="width: 300px;">RX # </th>
                        <th style="width: 300px;">Total Amount </th>
                        <th style="width: 300px;">Controlled Med Yes or No?</th>
                    </tr>
                </table>

                <div class=" pb-3">
                    <button type="button" class="btn btn-primary add-row active">Add row</button>
                    <button type="button" class="btn btn-danger delete-row active">Delete row</button>
                    <button type="submit" class="btn btn-primary active">save</button>
                </div>
            </form>
        </div><!--/ .form-holder -->
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!---- Create or delete row -------->
    <script type="text/javascript">
        $(document).ready(function() {
            let tableRow = `<tr class="table-row">
                        <td><textarea name="" id="" cols="30" rows="1" class="form-control"></textarea></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td>
                            <label for="">Yes</label>
                            <input type="radio" class="form-control">
                        </td>
                        <td>
                            <label for="">No</label>
                            <input type="radio" class="form-control">
                        </td>

                    </tr>`;
            
            let counter = 0;
            $(document).on("click", ".add-row", function() {
                $('#append-rows').append(tableRow);
                counter++;
            });

            $(document).on("click", ".delete-row", function(event) {
                $('.table-row:last-child').remove();
                counter -= 1;
            });
        });
    </script>
    <!--========== End of Create or delete row ==============-->


{{-- @endsection --}}