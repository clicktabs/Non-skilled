<div class="bg-white bd rounded-sm rc" id="tabs-account">
    <div class="flex vt ak zc qv">
        <!-- Panel -->
        <div class="uw">
            <!-- Panel body -->
            <div class="d_fd">
                <form action="{{route('account.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <section>
                    <div class="flex items-center">
                        <div class="mr-4">
                            <div class="container">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg"/>
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        @if (!empty($account) && !empty($account->image))
                                            <div id="imagePreview" style="background-image: url('{{ $account->image }}');"></div>
                                        @else
                                            <div id="imagePreview"
                                                style="background-image: url('{{asset('employee/avatar.svg')}}');">
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Business Profile -->

                <!-- Account Information -->
                <section class="px-[20px]">
                    <h3 class="gf gb text-slate-800 font-bold rt">My Account (Admin Panel)</h3>
                    <div class="je jc fg jm jb rw">
                        <!-- Company Name -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="company_name">Company Name</label>
                            <input id="company_name" name="company_name" class="s ou" type="text" value="{{ $account ? $account->company_name : '' }}">
                        </div>
                        <!-- Contact Person First Name -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="contact_person_firstname">Contact person FirstName</label>
                            <input id="contact_person_firstname" name="contact_person_firstname" class="s ou" type="text" value="{{ $account ? $account->contact_person_firstname : '' }}">
                        </div>
                        <!-- Last Name -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="contact_person_lastname">LastName</label>
                            <input id="contact_person_lastname" name="contact_person_lastname" class="s ou" type="text" value="{{ $account ? $account->contact_person_lastname : '' }}">
                        </div>
                    </div>
                </section>

                <!-- Address Information -->
                <section class="px-[20px]">
                    <div class="je jc fg jm jb rw">
                        <!-- Address Line 1 -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="address_line">Address Line 1</label>
                            <input id="address_line" name="address_line" class="s ou" type="text" value="{{ $account ? $account->address_line : '' }}">
                        </div>
                        <!-- City -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="city">City</label>
                            <input id="city" name="city" class="s ou" type="text" value="{{ $account ? $account->city : '' }}">
                        </div>
                        <!-- State -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="state">State</label>
                            <input id="state" name="state" class="s ou" type="text" value="{{ $account ? $account->state : '' }}">
                        </div>
                        <!-- Zip -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="zip">Zip</label>
                            <input id="zip" name="zip" class="s ou" type="text" value="{{ $account ? $account->zip : '' }}">
                        </div>
                    </div>
                </section>

                <!-- Contact Information -->
                <section class="px-[20px]">
                    <div class="je jc fg jm jb rw">
                        <!-- Phone -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="phone">Phone</label>
                            <input id="phone" name="phone" class="s ou" type="text" value="{{ $account ? $account->phone : '' }}">
                        </div>
                        <!-- Fax -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="fax">Fax</label>
                            <input id="fax" name="fax" class="s ou" type="text" value="{{ $account ? $account->fax : '' }}">
                        </div>
                        <!-- Email -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="email">Email</label>
                            <input id="email" name="email" class="s ou" type="text" value="{{ $account ? $account->email : '' }}">
                        </div>
                    </div>
                </section>

                <!-- Provider Information -->
                <section class="px-[20px]">
                    <div class="je jc fg jm jb rw">
                        <!-- National Provider ID (NPI) -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="npi">National Provider ID (NPI)</label>
                            <input id="npi" name="npi" class="s ou" type="text" value="{{ $account ? $account->npi : '' }}">
                        </div>
                        <!-- Primary Tax ID -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="tax_id">Primary Tax ID</label>
                            <input id="tax_id" name="tax_id" class="s ou" type="text" value="{{ $account ? $account->tax_id : '' }}">
                        </div>
                        <!-- Secondary Tax ID -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="secondary_tax">Secondary Tax ID</label>
                            <input id="secondary_tax" name="secondary_tax" class="s ou" type="text" value="{{ $account ? $account->secondary_tax : '' }}">
                        </div>
                    </div>
                </section>

                <!-- Additional Information -->
                <section class="px-[20px]">
                    <div class="je jc fg jm jb rw">
                        <!-- Medicaid Provider Number -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="medicaid_p_n">Medicaid Provider Number</label>
                            <input id="medicaid_p_n" name="medicaid_p_n" class="s ou" type="text" value="{{ $account ? $account->medicaid_p_n : '' }}">
                        </div>
                        <!-- Medicare Provider Number -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="medicare_p_n">Medicare Provider Number</label>
                            <input id="medicare_p_n" name="medicare_p_n" class="s ou" type="text" value="{{ $account ? $account->medicare_p_n : '' }}">
                        </div>
                        <!-- DD Provider Contract ID -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="dd_contract">DD Provider Contract Number</label>
                            <input id="dd_contract" name="dd_contract" class="s ou" type="text" value="{{ $account ? $account->provider_contract : '' }}">
                        </div>
                        <!-- Passport Provider Contract ID -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="provider_contract">Passport Contract Number</label>
                            <input id="passport" name="passport" class="s ou" type="text" value="{{ $account ? $account->provider_contract : '' }}">
                        </div>
                    </div>
                </section>

                <!-- Agency Information -->
                <section class="px-[20px]">
                    <div class="je jc fg jm jb rw">
                        <!-- Unique Agency Oasis ID Code -->
                            <!-- CAPHS Vendor ID -->
                            <div class="jr">
                                <label class="block text-sm gp rt" for="caphs_vendor_id">CAPHS Vendor ID</label>
                                <input id="caphs_vendor_id" name="caphs_vendor_id" class="s ou" type="text" value="{{ $account ? $account->caphs_vendor_id : '' }}">
                            </div>
                        <div class="jr">
                            <label class="block text-sm gp rt" for="unique_agency_oasis">Unique Agency Oasis ID Code</label>
                            <input id="unique_agency_oasis" name="unique_agency_oasis" class="s ou" type="text" value="{{ $account ? $account->unique_agency_oasis : '' }}">
                        </div>
                        <!-- DME Medicaid Provider Identifier -->
                        <div class="jr">
                            <label class="block text-sm gp rt" for="dme_medicaid_p_i">DME Medicaid Provider Identifier</label>
                            <input id="dme_medicaid_p_i" name="dme_medicaid_p_i" class="s ou" type="text" value="{{ $account ? $account->dme_medicaid_p_i : '' }}">
                        </div>
                    </div>
                </section>
            </div>

            <!-- Panel footer -->
            <footer class="mt-[20px]">
                <div class="flex ak vm vg co border-slate-200">
                    <div class="flex ls">
                        <button class="btn ho xi ye">Save Changes</button>
                    </div>
                </div>
            </footer>
        </form>

        </div>

    </div>
</div>
