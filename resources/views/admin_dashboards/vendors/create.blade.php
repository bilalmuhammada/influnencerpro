@extends('admin_dashboards.layout.master')
<style>
    .form-control{
    border-color: #997045 !important;
    /* text-align: center; */
}
.form-control:hover{
    border-color: blue;
   
    
}
.form-control::placeholder{
    color: blue !important;
    font-size: 12px !important;
}
.form-control:focus{
    border-color: blue !important;
    
}
.toggle-password {
            position: absolute;
            right: 23px;
            top: 43%;
            transform: translateY(-50%);
            cursor: pointer;
}

</style>
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h3 class="card-title text-muted text-center" style="color: blue !important;">Add Brand</h3>
            <ol class="breadcrumb">
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-5 grid-margin stretch-card" style="margin:-32px auto;">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="form_date">
                            <input type="hidden" name="role" value="vendor">
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand Name</label>
                                <input type="text" class="form-control" name="brand_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Brand Name">
                            </div> --}}
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="brand_name">
                                <div class="invalid-feedback">
                                    Please provide a valid Brand Name.
                                </div>
                                <label class="focus-label">Brand Name</label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="company_name">
                                <div class="invalid-feedback">
                                    Please provide a valid Company Name.
                                </div>
                                <label class="focus-label">Company Name</label>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="company_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Company Name">
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Website</label>
                                <input type="text" class="form-control" name="website" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Website">
                            </div> --}}
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating "  
                                {{-- placeholder="Please provide a valid Business Website."  --}}
                                name="website">
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid Website.
                                </div> --}}
                                <label class="inner_label focus-label">Business Website</label>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Business Mail</label>
                                <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Business Mail">
                            </div> --}}
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating email" id="bemail" 
                                {{-- placeholder="Please provide a valid Business Email."  --}}
                                name="email">
                                
                                <label class="inner_label focus-label">Business Email</label>
                            </div>
                           
                            <!-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand Email</label>
                                <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Email">
                            </div> -->
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="First Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Last Name">
                            </div> --}}
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating"  name="first_name"/>
                                <div class="invalid-feedback">
                                    Please provide a valid First Name.
                                </div>
                                <label class="focus-label">First Name</label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="last_name">
                                <div class="invalid-feedback">
                                    Please provide a valid Last Name.
                                </div>
                                <label class="focus-label">Last Name </label>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Position</label>
                                <input type="text" class="form-control" name="position" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="position">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Mobile">
                            </div> --}}

                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating position"
                                       name="position">
                                <div class="invalid-feedback">
                                    Please provide a valid Position.
                                </div>
                                <label class="focus-label">Position </label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating"   pattern="\+?\d*" 
                                {{-- placeholder="Please provide a valid Mobile." --}}
                                 oninput="validateInput(this)" name="phone"/>
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid Mobile.
                                </div> --}}
                                <label class="inner_label focus-label">Mobile </label>
                            </div>

                            <div class="form-group form-focus">
                                                
                                <select name="gender" class="form-control floating" id="gender">
                                    {{-- <option selected value=" "> select Gender</option> --}}
                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Gender.
                                </div>
                                <label class="focus-label">Gender</label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control datepicker1 floating" id="datepicker1" name="age">
                                
                                <label class="focus-label">Date of Birth</label>
                            </div>
                            <div class="form-group form-focus">
                                {{--    <input type="text" class="form-control floating" name="country">--}}
                                <select name="nationality_id" class="form-control nationality floating" id="nationality_id">
                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                    @foreach(getnationality() as $nationality)
                                        <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                    @endforeach
                                </select>
                               
                                <label class="focus-label">Nationality </label>
                            </div>

                            <div class="form-group form-focus">
                                {{--    <input type="text" class="form-control floating" name="country">--}}
                                <select name="country_id" class="form-control floating" id="country_id">
                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                    @foreach(getCountries() as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                               
                                <label class="focus-label">Country </label>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand State</label>
                                <select class="js-example-basic-single form-select state_id" data-width="100%"
                                        name="state_id">
                                    <option value="" disabled>Select State</option>

                                </select>
                            </div> -->
                            <div class="form-group form-focus">
                                <select name="city_id" class="form-control floating" id="brand_city_id">
                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid City.
                                </div>
                                <label class="focus-label">City </label>
                            </div>
                        {{--                            <div class="mb-3">--}}
                        {{--                                <label for="exampleInputUsername1" class="form-label">Brand Nationality</label>--}}
                        {{--                                <input type="text" class="form-control" name="nationality" id="exampleInputUsername1"--}}
                        {{--                                       autocomplete="off" placeholder="Nationality">--}}
                        {{--                            </div>--}}
                        <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Brand Type</label>
                                <select class="js-example-basic-single form-select" data-width="100%" name="type">
                                    <option value="" disabled>Select Type</option>
                                    <option value="BUYER">Buyer</option>
                                    <option value="SELLER">Seller</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Brand Image</label>
                                <input type="file" id="myDropify" name="image"/>
                            </div> -->
                            <!-- <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea id="maxlength-textarea" name="description" class="form-control"
                                          id="defaultconfig-4"
                                          maxlength="100" rows="8"
                                          placeholder="This textarea has a limit of 100 chars."></textarea>
                            </div> -->
                            <div class="form-group form-focus">
                                <input type="password" class="form-control floating" name="password"
                                       id="password"
                                        {{-- placeholder="8  Characters - 1 Capital, 1 Number, 1 Special" --}}
                                        >
                                        <div class="input-group-append">
                                            <span class="toggle-password" onclick="togglePassword('password')" style="cursor: pointer;">👁️</span>
                                        </div>
                                
                                <label class="inner_label focus-label bilal-register">Password</label>
                            </div>
                            <div class="form-group form-focus mb-0">
                                <input type="password" class="form-control floating"
                                       name="confirm_password" id="brand_confirm_password">
                                       <div class="input-group-append">
                                        <span class="toggle-password" onclick="togglePassword('brand_confirm_password')" style="cursor: pointer;">👁️</span>
                                    </div>
                                
                                <label class="focus-label">Confirm Password</label>
                            </div>
                            {{--                            <div class="mb-3">--}}
                            {{--                                <div class="form-check form-switch mb-2">--}}
                            {{--                                    <input type="checkbox" class="form-check-input" id="formSwitch1" name="status">--}}
                            {{--                                    <label class="form-check-label" for="formSwitch1">Active</label>--}}
                            {{--                                </div>--}}
                            {{--      
                                              </div>--}}

                            <div class="text-center font-bold" style="margin-top: 14px;">
                            <button type="submit" class="btn btn-primary me-2">Register</button>
                        </div>
                            {{-- <button class="btn btn-danger">Cancel</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
        function validateInput(input) {
            
            // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
            input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
        }
    $(document).ready(function() {
        if ($('.floating').length > 0) {
            // alert($('.floating').length);
            $('.floating').on('focus blur', function(e) {
                $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
            }).trigger('blur');
        }else{
            
        }

     
});

function togglePassword(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const icon = passwordField.nextElementSibling.querySelector(".toggle-password");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.textContent = "🙈"; // Change the icon to "hide"
    } else {
        passwordField.type = "password";
        icon.textContent = "👁️"; // Change the icon to "show"
    }
}

     


        $(document).on('submit', '#form_date', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: api_url + 'users/store',
                type: 'post',
                dataType: "JSON",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status == true) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        })
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        })

        $(document).on('change', '#country_id', function () {
            var nationality_id = $(this).val();
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "POST",
                    dataType: "json",
                    data: {
                        "nationality_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#city_id").empty();
                            $("#brand_city_id").empty();

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                    $("#brand_city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#city_id").empty();
                            $("#brand_city_id").empty();
                        }
                    }
                });
            }
        });
    </script>
@endsection
