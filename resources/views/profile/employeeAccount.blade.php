<div class="bg-white bd rounded-sm rc" id="tabs-accountEmp">
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
                    <h3 class="gf gb text-slate-800 font-bold rt">My Account (Employee Panel)</h3>
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
