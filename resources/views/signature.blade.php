<style>
    #signatureCanvas {
        border: 2px solid #333;
        cursor: crosshair;
    }
</style>

<!-- Doctor Modal -->
<div class="modal fade" id="doctorFormModal" tabindex="-1" role="dialog" aria-labelledby="doctorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctorModalLabel">Enter PIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="doctorPin">PIN:</label>
                    <input type="text" class="form-control" id="doctorPin" placeholder="Enter PIN">
                </div>
                <div class="form-group">
                    <label for="doctorCpin">Confirm PIN:</label>
                    <input type="text" class="form-control" id="doctorCpin" placeholder="Confirm PIN">
                </div>
                <div id="doctorSignatureImageContainer" style="display: none;">
                    <img id="doctorSignatureImage" src="" alt="Doctor's Signature">
                </div>
                <div id="doctorErrorMessage" class="text-danger"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="doctorGetSignatureButton" class="btn btn-primary" data-dismiss="modal">Get Signature</button>
            </div>
        </div>
    </div>
</div>
{{-- person signature for edath --}}
<div class="modal fade" id="personFormModal" tabindex="-1" role="dialog" aria-labelledby="personModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="personModalLabel">Enter PIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="personPin">PIN:</label>
                    <input type="text" class="form-control" id="personPin" placeholder="Enter PIN">
                </div>
                <div class="form-group">
                    <label for="personCpin">Confirm PIN:</label>
                    <input type="text" class="form-control" id="personCpin" placeholder="Confirm PIN">
                </div>
                <div id="personSignatureImageContainer" style="display: none;">
                    <img id="personSignatureImage" src="" alt="Person's Signature">
                </div>
                <div id="personErrorMessage" class="text-danger"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="personGetSignatureButton" class="btn btn-primary" data-dismiss="modal">Get Signature</button>
            </div>
        </div>
    </div>
</div>

<!-- Family Modal -->
<div class="modal fade" id="familyFormModal" tabindex="-1" role="dialog" aria-labelledby="familyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="familyModalLabel">Enter Family's Signature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row p-3">
                    <div class="col-md-6">
                        <div class="signature-container">
                            <div>
                                <canvas id="signatureCanvas" width="400" height="200" style="border: 2px solid black"></canvas>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>

                <div id="familyErrorMessage" class="text-danger"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="clearButton" class="btn btn-danger">Clear</button>
                <button type="button" id="familyGetSignatureButton" class="btn btn-primary" data-dismiss="modal">Save Signature</button>
            </div>
        </div>
    </div>
</div>

<!-- Nurse Modal -->
<div class="modal fade" id="nurseFormModal" tabindex="-1" role="dialog" aria-labelledby="nurseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nurseModalLabel">Enter Nurse's PIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nursePin">PIN:</label>
                    <input type="text" class="form-control" id="nursePin" placeholder="Enter PIN">
                </div>
                <div class="form-group">
                    <label for="nurseCpin">Confirm PIN:</label>
                    <input type="text" class="form-control" id="nurseCpin" placeholder="Confirm PIN">
                </div>

                <div id="nurseErrorMessage" class="text-danger"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="nurseGetSignatureButton" class="btn btn-primary" data-dismiss="modal">Get Signature</button>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="https://unpkg.com/signature_pad"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var canvas = document.getElementById('signatureCanvas');
        var signaturePad = new SignaturePad(canvas);


        let saveButton = document.getElementById('saveButton');
        let clearButton = document.getElementById('clearButton');

        if( saveButton && clearButton ) {
            saveButton.addEventListener('click', function () {
                var signatureData = signaturePad.toDataURL();

                // Send the signatureData, password, and pin to the server for saving to the database
                fetch('signatures/upload', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        signatureImage: signatureData,
                    })
                })
                    .then(function (response) {
                        if (response.ok) {
                            return response.json(); // Parse the response JSON
                        } else {
                            throw new Error('Failed to save the signature.');
                        }
                    })
                    .then(function (data) {
                    if (data.success) {
                        console.log('Signature saved successfully!');
                        toastr.success(data.success);
                        signaturePad.clear();

                        if(data.signatureUrl){
                            var signatureImage = document.getElementById('signatureImage');
                            var downloadLink = document.getElementById('downloadSignatureLink');

                            signatureImage.src = data.signatureUrl;
                            downloadLink.href = data.signatureUrl;
                        }

                    } else if (data.danger) {
                        console.error(data.danger);
                        toastr.error(data.danger);
                    }
                })
                    .catch(function (error) {
                        console.error('Failed to save the signature:', error);
                    });
            });

            clearButton.addEventListener('click', function () {
                signaturePad.clear();
            });
        }
    });
</script>
<script>
    $(document).ready(function () {
    // Function to handle the AJAX request
    function getSignature(role) {
        var pinSelector = '#' + role + 'Pin';
        var pin = $(pinSelector).val();
        var encodedPin = encodeURIComponent(pin);
        var url = '/check-pin?pin=' + encodedPin;

        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            success: function (response) {
                if ('signature' in response) {
                    // PIN is correct, display the signature image
                    var signatureImageSrc = response.signature;
                    var assetSignatureImageSrc = "{{ asset('') }}" + signatureImageSrc;
                    $('#' + role + 'SignatureImage').attr('src', assetSignatureImageSrc);
                    $('#' + role + 'SignaturePath').attr('src', assetSignatureImageSrc);
                    $('#' + role + 'SignatureImageContainer').show();
                    $('#' + role + 'ErrorMessage').hide();

                    // Close the modal
                    $('#' + role + 'FormModal').modal('hide');
                } else if ('error' in response) {
                    // Incorrect PIN, show an error message
                    $('#' + role + 'SignatureImageContainer').hide();
                    $('#' + role + 'ErrorMessage').text(response.error).show();
                }
            },
            error: function (error) {
                // Handle AJAX error
                console.error(error);
                var errorMessageDiv = $('#' + role + 'ErrorMessage');
                errorMessageDiv.text("An error occurred. Please try again.").show();
                $('#' + role + 'SignatureImageContainer').hide();
            }
        });
    }

    // Click event for the doctor's get signature button
    $("#doctorGetSignatureButton").click(function () {
        getSignature('doctor');
    });

    // Click event for the nurse's get signature button
    $("#nurseGetSignatureButton").click(function () {
        getSignature('nurse');
    });

    // Click event for the person's get signature button
    $("#personGetSignatureButton").click(function () {
        getSignature('person');
    });

    // Click event for the family's get signature button
    $("#familyGetSignatureButton").click(function () {
        getSignature('family');
    });
});

    </script>
