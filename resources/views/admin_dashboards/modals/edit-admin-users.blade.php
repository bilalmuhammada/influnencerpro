            <!-- Modal -->
            <style>
                .modal-title{
                    margin-left: 128px;
                    color: blue !important;
                }
                .form-control:hover{
                border-color: blue !important;
                
            }
            .form-control:focus{
                border-color: blue !important;
                
            }
            .form-control{
                border-color: #997045;
                /* text-align: center; */
            }
            </style>
            <div class="modal fade" id="editadmin" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Admin</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body" style="margin-top: -27px">
                            <form class="forms-sample" id="edit-admin-form-data">
                                <input type="hidden" class="id" name="id" value="">
                                {{-- <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Admin Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputUsername1" autocomplete="off" value="Noraiz">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Admin Email</label>
                                    <input type="text" class="form-control" name="email" id="exampleInputUsername1" autocomplete="off" Value="xyz@gmail.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Admin Mobile</label>
                                    <input type="text" class="form-control" name="mobile" id="exampleInputUsername1" autocomplete="off" Value="+6885876">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Admin Country</label>
                                    <input type="text" class="form-control" name="country" id="exampleInputUsername1" autocomplete="off" Value="Dubai">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Admin City</label>
                                    <input type="text" class="form-control" name="city" id="exampleInputUsername1" autocomplete="off" Value="Arjman">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Admin Nationality</label>
                                    <input type="text" class="form-control" name="nationality" id="exampleInputUsername1" autocomplete="off" Value="Arjmani">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Admin Type</label>
                                    <select class="js-example-basic-single form-select" data-width="100%" name="type">
                                        <option value="TX">Select Type</option>
                                        <option value="TX">Buyer</option>
                                        <option value="NY" selected>Seller</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" class="form-control">Vendor Image</label><br />
                                    <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" style="margin-bottom:5px;" alt="" class="form-control">
                                    <br />
                                    <input type="file" class="form-control" id="" name="image" />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <textarea id="maxlength-textarea" name="description" placeholder="Description" class="form-control" id="defaultconfig-4" maxlength="100" rows="8"></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input" id="formSwitch1" name="status">
                                        <label class="form-check-label" for="formSwitch1">Active</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-danger">Cancel</button> --}}









                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating first_name" name="first_name">
                                    {{-- <div class="invalid-feedback">
                                        Please provide a valid First Name.
                                    </div> --}}
                                    <label class="focus-label">First Name </label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating last_name" name="last_name">
                                    {{-- <div class="invalid-feedback">
                                        Please provide a valid Last Name.
                                    </div> --}}
                                    <label class="focus-label">Last Name </label>
                                </div>
    
    
    
    
                                {{-- <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Mobile</label>
                                    <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                           autocomplete="off" placeholder="Mobile">
                                </div> --}}
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating phone " name="phone"  pattern="\+?\d*"  oninput="validateInput(this)"  
                                
                                    {{-- placeholder="Please enter a valid Mobile"  --}}
                                    >
                                    {{-- <div class="invalid-feedback">
                                        {{-- Please provide a valid Mobile. --}}
                                    {{-- </div> --}} 
                                    <label class="inner_label focus-label">Mobile</label>
                                </div>
    
                                <div class="form-group form-focus">
                                                    
                                    <input type="email" class="form-control floating inputbg email" name="email"
                                           {{-- placeholder="Please provide a valid Email." --}}
                                            >
                                    {{-- <label class="inner_label focus-label">Email33 </label> --}}
                                    <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Email</label>
    
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                           autocomplete="off" placeholder="Email">
                                </div> --}}
                                <div class="form-group form-focus">
                                                    
                                    <select name="gender" class="form-control floating gender" id="gender">
                                        {{-- <option selected value=" "> select Gender</option> --}}
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    {{-- <div class="invalid-feedback">
                                        Please provide a valid Gender.
                                    </div> --}}
                                    <label class="focus-label">Gender</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating age" name="age"   pattern="\+?\d*" oninput="validateInput(this)">
                                    {{-- <div class="invalid-feedback">
                                        {{-- Please provide a valid Age. --}}
                                    {{-- </div>  --}}
                                    <label class="focus-label">Age</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating addedby" name="addedby"   >
                                    {{-- <div class="invalid-feedback">
                                        {{-- Please provide a valid Age. --}}
                                    {{-- </div>  --}}
                                    <label class="focus-label">Added By</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating position"
                                           name="position">
                                    <div class="invalid-feedback">
                                        Please provide a valid Position.
                                    </div>
                                    <label class="focus-label">Position </label>
                                </div>
                                <div class="form-group form-focus">
                                    <select name="country_id" class="form-control floating country_id" id="country_id">
                                        @foreach(getCountries() as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid Country.
                                    </div>
                                    <label class="focus-label">Country </label>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Country</label>
                                    <select class="js-example-basic-single form-select country_id" id="country_id" data-width="100%"
                                            name="country_id">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <!-- <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Influencer State</label>
                                    <select class="js-example-basic-single form-select state_id" data-width="100%"
                                            name="state_id">
                                        <option value="" disabled>Select State</option>
    
                                    </select>
                                </div> -->
                                {{-- <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">City</label>
                                    <select class="js-example-basic-single form-select city_id" data-width="100%" id="city_id"
                                            name="city_id">
                                        <option value="" disabled>Select City</option>
    
                                    </select>
                                </div> --}}
                                <div class="form-group form-focus">
                                    <select name="city_id" class="form-control floating city_id" id="city_id">
                                        <option value="">Select City</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid City.
                                    </div>
                                    <label class="focus-label">City </label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="password" class="form-control floating" name="password"
                                           id="influencer_password"
                                    {{-- placeholder="8 Characters - 1 Capital, 1 Number, 1 Special" --}}
                                     >
                                    <i class="fa fa-eye" id="togglePassword"
                                       onclick="togglePassword('influencer_password')"></i>
    
                                    <label class="focus-label">Password</label>
                                </div>
                                <div class="form-group form-focus mb-0">
                                    <input type="password" class="form-control floating"
                                           name="confirm_password" id="influencer_confirm_password">
                                    <i class="fa fa-eye" id="togglePassword"
                                       onclick="togglePassword('influencer_confirm_password')"></i>
                                    <div class="invalid-feedback">
                                        Please provide a valid Confirm Password.
                                    </div>
                                    <label class="focus-label">Confirm Password</label>
                                </div>
    
                                {{-- <div class="mb-3">
                                    <label for="password_influencer" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password_influencer"
                                           autocomplete="off" placeholder="Password">
                                           <i class="fa fa-eye one" id="togglePassword" style="position: absolute;top: 75%;right: 5%;cursor: pointer;color: lightgray;" onclick="togglePassword('password_influencer')"></i>
                                </div>
                                <div class="mb-3">
                                    <label for="confirm_password_infl" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password_infl"
                                           autocomplete="off" placeholder="Confirm Password">
                                           <i class="fa fa-eye two" id="togglePassword" style="position: absolute;top: 86%;right: 5%;cursor: pointer;color: lightgray;" onclick="togglePassword('confirm_password_infl')"></i>
                                </div> --}}
                                <!-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Influencer Type</label>
                                    <select class="js-example-basic-single form-select" name="type" data-width="100%">
                                        <option value="">Select Type</option>
                                        <option value="BUYER">Buyer</option>
                                        <option value="SELLER">Seller</option>
                                    </select>
                                </div> -->
                                <!-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Influencer Image</label>
                                    <input type="file" id="myDropify" name="image"/>
                                </div> -->
                                <!-- <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <textarea id="maxlength-textarea" name="description" class="form-control"
                                              id="defaultconfig-4"
                                              maxlength="100" rows="8"
                                              placeholder="This textarea has a limit of 100 chars."></textarea>
                                </div> -->
                                <!-- <div class="mb-3">
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input" id="formSwitch1" name="status">
                                        <label class="form-check-label" for="formSwitch1">Active</label>
                                    </div>
                                </div> -->
                                <div class="text-center font-bold" style="margin-top: 14px;">
                                    <button type="submit" class="btn btn-primary me-2">submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                    </div>
                </div>
            </div>