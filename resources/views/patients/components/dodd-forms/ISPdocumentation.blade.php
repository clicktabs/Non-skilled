
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    </style>
</head>

<body>
    <div class="container vt pt-5 px-4">
        <div class="form-holder">
            <p class="text-center">
                <small>Andrew Developmental Disabilities Services, LLC</small><br>
                5330 East Main Street, Suite 103, Whitehall, Ohio 43213<br>
                Provider # 2553544
            </p>

            <h1 class="fs-5 text-center fw-medium position-relative" style="padding: 0 240px;">ISP PROVIDER SERVICES
                DOCUMENTATION <small class="position-absolute" style="right: 0;">MONTHS/YEAR: March 2020</small></h1>

            <form action="" method="post">
                <!-- table -->
                <table class="table table-bordered align-middle text-center mb-1">
                    <tr>
                        <th><label for="name">Name</label></th>
                        <th><label for="address">Address</label></th>
                        <th><label for="medicaid">Medicaid #</label></th>
                        <th><label for="ODMR-Resident">ODMR/DD Resident #</label></th>
                        <th><label for="ServiceCoordinator">Service Coordinator</label></th>
                    </tr>
                    <tr>
                        <td><input type="text" name="" id="name" class="form-control"></td>
                        <td><input type="text" name="" id="address" class="form-control"></td>
                        <td><input type="text" name="" id="medicaid" class="form-control"></td>
                        <td><input type="text" name="" id="ODMR-Resident" class="form-control"></td>
                        <td><input type="text" name="" id="ServiceCoordinator" class="form-control"></td>
                    </tr>
                    <tr>
                        <th><label for="ISPDate">ISP Date</label></th>
                        <th><label for="county">County</label></th>
                        <th><label for="">Plan Period</label></th>
                        <th><label for="ODMRFacility">ODMR/DD Facility #</label></th>
                        <th><label for="TypeofService">Type of Service</label></th>
                    </tr>
                    <tr>
                        <td><input type="date" name="" id="ISPDate" class="form-control"></td>
                        <td><input type="text" name="" id="county" class="form-control"></td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <input type="date" name="" id="" class="form-control">
                                <span>─</span>
                                <input type="date" name="" id="" class="form-control">
                            </div>
                        </td>
                        <td><input type="text" name="" id="ODMRFacility" class="form-control"></td>
                        <td><input type="text" name="" id="TypeofService" class="form-control"></td>
                    </tr>
                </table>

                <!-- table -->
                <table class="table table-borderless align-middle text-center mt-1 mb-1">
                    <tr>
                        <td class="fw-medium p-0" style="color: red;">R=Refusal</td>
                        <td class="fw-medium p-0" style="color: red;">H=Hospital</td>
                        <td class="fw-medium p-0" style="color: red;">V=Vacation</td>
                        <td class="fw-medium p-0" style="color: red;">HV=Home Visit</td>
                        <td class="fw-medium p-0" style="color: red;">A=Attempted</td>
                        <td class="fw-medium p-0" style="color: red;">N/A=Not Applicable</td>
                    </tr>
                </table>

                <!-- table -->
                <table class="table table-bordered align-middle text-center mt-1 padding-thin input-padding-thin" id="append-rows">
                    <tr class="align-top">
                        <th style="width: 200px;"><b>Service</b><br>
                            (See ISP for detailed
                            descriptions)</th>
                        <th style="width: 120px;">Frequency/
                            Duration</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>
                    </tr>
                </table>

                <div class="">
                    <button type="button" class="btn btn-primary add-row">Add row</button>
                    <button type="button" class="btn btn-danger delete-row">Delete row</button>
                </div>
            </form>
        </div><!--/ .form-holder -->
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
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
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


