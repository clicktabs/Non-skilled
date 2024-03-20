<div class="">
    <div
        class="list-title mt-4 d-flex flex-column flex-md-row justify-content-between">
        {{-- <h4>Vitals</h4> --}}
        <button class="add_patient_documents btn btn-primary !bg-[#4133BF] text-[#fff]">
            Add Patient Documents
        </button>
    </div>
    <div class="table-responsive">
        <table class="table mt-4">
            <thead class="bg-[#4133BF] text-[#fff] text-center">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th style="font-weight: bold; text-align: left;">Inactive Patient Documents
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th>Document Type</th>
                <th>Document Name</th>
                <th>Date</th>
                <th>Uploaded On</th>
                <th>Uploaded BY</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
           
                    </td>
                    <td>
                        <button type="button"
                                class="btn btn-primary vital-edit-btn"> Edit </button>
                    </td>
                    {{-- <td>
                        <form
                            action="{{ route('vitals.destroy', $vital->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-danger">Delete
                            </button>
                        </form>
                    </td> --}}

                </tr>
            </tbody>
        </table>
    </div><!----/End----->
    <div class="table-responsive">
        <table class="table mt-4">
            <thead class="bg-[#4133BF] text-[#fff] text-center">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th style="font-weight: bold; text-align: left;">Active Patient Documents
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th>Document Type</th>
                <th>Document Name</th>
                <th>Date</th>
                <th>Uploaded On</th>
                <th>Uploaded BY</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody class="text-center">
      
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="button" class="btn btn-primary vital-edit-btn" id="">Edit
                        </button>
                    </td>
                    {{-- <td>
                        <form
                            action="{{ route('vitals.destroy', $vital->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-danger">Delete
                            </button>
                        </form>
                    </td> --}}

                </tr>
            </tbody>
        </table>
    </div><!----/End----->
    <div class="modal fade !max-w-full" id="docModal" tabindex="-1"
         role="dialog" aria-labelledby="docModal" aria-hidden="true">

        <div class="container">
            <h4 class="text-center font-[700] text-[20px] !bg-[#4133BF] text-[#fff] p-2">Upload Document</h4>
            <form action="" method="POST">
                @csrf
                <div class="medication-content"
                     style="border: 1px solid gray; padding:3%">
                       <input type="hidden" name="patient_id"
                           value="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pulse" class="py-1">Document Type<span class="text-red">*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-md-6">
                            <label for="temperature"
                                   class="py-1">Upload<span
                                    class="text-red">*</span></label>
                            <input name="temperature" id="temperature"
                                   type="text" placeholder="Temperature"
                                   class="form-control s ou  p-3" required>
                        </div>
                    </div>
                   
                    <div class="row mt-5">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button type="submit" class="form-control btn btn-primary">Save & Exit
                            </button>
                        </div>
                      </div>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="modal fade !max-w-full" id="editquickViewvitalModal"
         tabindex="-1" role="dialog" aria-labelledby="vitalModal"
         aria-hidden="true">

        <div class="container edit-modal-content2">

        </div>
    </div> --}}
</div>
