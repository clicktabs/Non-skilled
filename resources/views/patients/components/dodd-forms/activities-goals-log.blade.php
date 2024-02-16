
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
        .vt{
            background-image: linear-gradient(rgb(238, 239, 192), rgb(203, 242, 240));
            border-radius: 4px;
        }
    </style>
    <main>
    <div class="container pt-5 px-4">
        <div class="vt form-holder p-3">
            <p class="text-center">
                <small>Andrew Developmental Disabilities Services, LLC</small><br>
                5330 East Main Street, Suite 103, Whitehall, Ohio 43213<br>
                Provider # 2553544
            </p>

            <h1 class="pt-3 pb-3 fs-5 text-center fw-medium position-relative" style="padding: 0 240px;">Activities Goal Log
                DOCUMENTATION </h1>

            <form action="" method="post">
                <!-- table -->
                <table class="table table-bordered align-middle text-center mb-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="">Consumer Name:</label>
                            <input type="text">
                        </div>
                    </div>
                </table>
                <!-- table -->
                <table class="table table-bordered align-middle text-center mt-1 padding-thin input-padding-thin" id="append-rows">
                    <tr class="align-top">
                        <th style="width: 200px;"><b>Job</b><br></th>
                        <th>1</th>
                        <th>INT</th>
                        <th>2</th>
                        <th>INT</th>
                        <th>3</th>
                        <th>INT</th>
                        <th>4</th>
                        <th>INT</th>
                        <th>5</th>
                        <th>INT</th>
                        <th>6</th>
                        <th>INT</th>
                        <th>7</th>
                        <th>INT</th>
                        <th>8</th>
                        <th>INT</th>
                        <th>9</th>
                        <th>INT</th>
                        <th>10</th>
                        <th>INT</th>

                    </tr>
                </table>

                <div class="pl-3">
                    <button type="button" class="btn btn-primary add-row active">Add row</button>
                    <button type="button" class="btn btn-danger delete-row active">Delete row</button>
                    <button type="submit" class="btn btn-primary active">Save</button>
                </div>
            </form>
        </div><!--/ .form-holder -->
    </div>
</main>
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


