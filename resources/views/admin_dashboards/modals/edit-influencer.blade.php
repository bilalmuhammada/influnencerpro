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
.fa-eye-slash {
    position: absolute !important;
    top: 28% !important;
    right: 4% !important;
    cursor: pointer !important;
    /* color: lightgray !important; */
    }
</style>


            <div class="modal fade" id="editinfluencer" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="width: 600px;">
                  <div class="modal-content" >
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Edit Influencer</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body" style="margin-top: -45px;" >
                    <form class="forms-sample" id="edit-influence-form-data">
                        <input type="hidden" class="id" name="id" value="">
                 <div class="form-group form-focus">
                        
                        <input type="text" class="first_name form-control floating inputbg" name="first_name" id="exampleInputUsername1" autocomplete="off" >
                        <label for="exampleInputUsername1" class="form-label inner_label focus-label">First Name</label>
                    </div>
            
                    
                    <div class="form-group form-focus">
                       
                        <input type="text" class="form-control last_name floating inputbg" name="last_name" id="exampleInputUsername1" autocomplete="off" >
                        <label for="exampleInputUsername1" class="form-label inner_label focus-label">Last Name</label>
                    
                    </div>
                    <div class="form-group form-focus">
                        
                        <input type="text" class="form-control floating phone" name="phone"  pattern="\+?\d*" oninput="validateInput(this)" id="exampleInputUsername1" 
                        {{-- placeholder="Please enter a valid Mobile"  --}}
                        autocomplete="off" Value="">
                        <label for="exampleInputUsername1"  class="form-label form-label inner_label focus-label">Mobile</label>
                    </div>
                    <div class="form-group form-focus">
                        
                        <input type="text" class="form-control floating email" name="email" id="exampleInputUsername1"   
                         {{-- placeholder="Please provide a valid Email."   --}}
                         autocomplete="off" Value="">
                        <label for="exampleInputUsername1" class="form-label inner_label focus-label">Email</label>
                    </div>
                    <div class="form-group form-focus">                       
                        <select name="gender" class="form-control floating gender" id="gender">
                            {{-- <option selected value=" "> select Gender</option> --}}
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid Gender.
                        </div>
                        <label class="focus-label">Gender</label>
                    </div>
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating age"   pattern="\+?\d*" oninput="validateInput(this)" name="age">
                        {{-- <div class="invalid-feedback">
                            Please provide a valid age.
                        </div> --}}
                        <label class="focus-label">Age</label>
                    </div>
                    <div class="form-group form-focus">
                            
                            <select class="js-example-basic-single form-control floating form-select country_id" data-width="100%"
                                    name="country_id" id="country_id">
                                <option value="" disabled>Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <label for="exampleInputUsername1" class="form-label inner_label focus-label">Country</label>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Influencer State</label>
                            <select class="js-example-basic-single form-select state_id" data-width="100%"
                                    name="state_id">
                                <option value="" disabled>Select State</option>

                            </select>
                        </div> -->
                        <div class="form-group form-focus">
                           
                            <select class="js-example-basic-single form-control floating form-select city_id" data-width="100%" id="city_id"
                                    name="city_id">
                                <option value="" disabled>Select City</option>

                            </select>
                            <label for="exampleInputUsername1" class="form-label inner_label focus-label">City</label>
                        </div>
                        <div class="form-group form-focus">
                               
                                <input type="text" class="form-control floating" name="password" id="exampleInputUsername1"
                                       autocomplete="off"  p
                                       {{-- laceholder="8 Characters - 1 Capital, 1 Number, 1 Special" --}}
                                       >
                                       <i class="fa fa-eye one" id="togglePassword" style="position: absolute;top: 36%;right: 5%;cursor: pointer;color: lightgray;"></i>
                                       <label for="exampleInputUsername1" class="form-label inner_label focus-label">Password</label>
                           
                                    </div>
                            <div class="form-group form-focus">
                             
                                <input type="text" class="form-control floating" name="confirm_password" id="exampleInputUsername1"
                                       autocomplete="off"
                                        {{-- placeholder="Confirm Password" --}}
                                        >
                                       <i class="fa fa-eye two" id="togglePassword" style="position: absolute;top: 36%;right: 5%;cursor: pointer;color: lightgray;"></i>
                                       <label for="exampleInputUsername1" class="form-label inner_label focus-label">Confirm Password</label>
                                    </div>
                    <!-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Influencer Type</label>
                        <select class="js-example-basic-single form-select type" data-width="100%" name="type">
										<option value="">Select Type</option>
										<option value="BUYER" selected>Buyer</option>
										<option value="SELLER">Seller</option>
									</select>
                </div> -->
                    <!-- <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label" class="form-control">Influencer Image</label><br/>
                        <img class="wd-80 ht-80 rounded-circle show-image" src="https://via.placeholder.com/80x80" style="margin-bottom:5px;" alt="" class="form-control">
                        <br/>
                        <input type="file" class="form-control" id="" name="image"/>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea id="maxlength-textarea" name="description" placeholder="Description" class="form-control description" id="defaultconfig-4" maxlength="100" rows="8"></textarea>
                    </div> -->
                    <!-- <div class="mb-3">
                    <div class="form-check form-switch mb-2">
											<input type="checkbox" class="form-check-input status" id="formSwitch1" name="status" checked>
											<label class="form-check-label" for="formSwitch1">Active</label>
										</div>
                    </div> -->

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </div>
                   
                    {{-- <button type="button" data-bs-dismiss="modal" aria-label="btn-close" class="btn btn-danger">Cancel</button> --}}
                </form>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                  </div>
                </div>
              </div>

     {{-- @section('page_scripts') --}}

          
{{-- @endsection --}}