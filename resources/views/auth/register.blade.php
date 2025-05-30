@extends('layout.web.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0px !important;
            margin-left: 5px;
        }
        input:focus {
            border: 1px solid blue !important;
        }
        #select2-country_dropdown-container{
margin-left: -9px !important;
        }
        .email::placeholder {
            color: red !important;
        }
        input::placeholder {
            font-size: 12px;
        }
        .form-control:invalid ~ .invalid-feedback {
            display: block;
        }
        ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
}

/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}
.toggle-password {
            position: absolute;
            right: 23px;
            top: 43%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        /* .invalid-feedback {
            display: none;
            color: red;
        }
        .is-invalid + .invalid-feedback {
            display: block;
        } */
    </style>
    <div class="content">
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-6 offset-md-3">

                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right">
                                <div class="login-header text-center">
                                    <!-- <img src="assets/img/logo/Influencers Pro-01-01.png" class="img-fluid" alt="Logo"> -->
                                    <h3> <span class="rgt">Join</span> InfluencerPro</h3>
                                    <p class="changetext">Make the best of your Professional Life!</p>
                                </div>
                                <nav class="user-tabs mb-4">
                                    <ul role="tablist" class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a href="#developer" data-bs-toggle="tab" role="influencer"
                                               class="nav-link @if(request()->role == 'influencer') active @endif"
                                               onclick="checkRole(this)">Influencer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#company" data-bs-toggle="tab" role="brand"
                                               class="nav-link @if(request()->role == 'brand') active @endif"
                                               onclick="checkRole(this)">Brand</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="tab-content pt-0">
                                    <div role="tabpanel" id="developer"
                                         class="tab-pane fade @if(request()->role == 'influencer') active show @endif">
                                        <form id="influencer-register-form">

                                            <div class="alert-div" style="display: none;">
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <div class="alert-text-register" style="font-size: 14px;">  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button></div>
                                                   
                                                </div>
                                            </div>
                                            <input type="hidden" name="role" value="influencer">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating name" name="name">
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid First Name.
                                                </div> --}}
                                                <label class="focus-label">First Name </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="last_name">
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Last Name.
                                                </div> --}}
                                                <label class="focus-label">Last Name </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating " name="phone"  pattern="\+?\d*"  oninput="validateInput(this)" placeholder="Please enter a valid Mobile.">
                                                {{-- <div class="invalid-feedback">
                                                    {{-- Please provide a valid Mobile. --}}
                                                {{-- </div> --}} 
                                                <label class="inner_label focus-label">Mobile </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                
                                                <input type="email" class="form-control floating inputbg" name="email"
                                                       placeholder="Please provide a valid Email." >
                                                {{-- <label class="inner_label focus-label">Email33 </label> --}}
                                                <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Email</label>

                                            </div>
                                            
                                            <div class="form-group form-focus">
                                                
                                                <select name="gender" class="form-control floating" id="gender">
                                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Gender.
                                                </div> --}}
                                                <label class="focus-label">Gender</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control datepicker11 floating" name="age"   id="datepicker11" >
                                             
                                                <label class="focus-label">Date of Birth</label>
                                            </div>


                                            <div class="form-group form-focus">
                                                <select name="national_id" class="form-control  floating" id="national_id">
                                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                                    @foreach(getnationality() as $nationality)
                                                        <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                                    @endforeach
                                                </select>
                                               
                                                <label class="focus-label">Nationality </label>
                                            </div>
                                            <div class="form-group form-focus">
                                               
                                                <select name="country_id" class="form-control  floating" id="country_id">
                                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                                    @foreach(getCountries() as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Country.
                                                </div> --}}
                                                <label class="focus-label">Country </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <select name="city_id" class="form-control  floating" id="city_id">
                                                    {{-- <option value="">Select City</option> --}}
                                                </select>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid City.
                                                </div> --}}
                                                <label class="focus-label">City </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="password" class="form-control floating" name="password"
                                                       id="password"
                                                placeholder="8 Characters - 1 Capital, 1 Number, 1 Special" >
                                                <div class="input-group-append">
                                                    <span class="toggle-password" onclick="togglePassword('password')" style="cursor: pointer;">👁️</span>
                                                </div>

                                                <label class="focus-label">Password</label>
                                            </div>
                                            <div class="form-group form-focus mb-0">
                                                <input type="password" class="form-control floating"
                                                       name="confirm_password" id="confirm_password">
                                                       <div class="input-group-append">
                                                        <span class="toggle-password" onclick="togglePassword('confirm_password')" style="cursor: pointer;">👁️</span>
                                                    </div>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Confirm Password.
                                                </div> --}}
                                                <label class="focus-label">Confirm Password</label>
                                            </div>
                                            <div class="dont-have">
                                                <span class="custom_check">
                                                    {{-- <input type="checkbox" name="agreed_to_terms" class="agreed_to_terms"  style="width: 20px;height: 20px;"   
                                                > --}}
                                                    {{-- <span class="checkmark"></span> --}}
                                                <span style="font-size: 14px;">
                                                By registering I agree to the 
                                                    <a href="{{ env('BASE_URL') }}/termcondition" target="_blank">Terms & Conditions</a> and 
                                                    <a href="{{ env('BASE_URL') }}/privacy-policy" target="_blank">Privacy Policy</a>.
                                                </span>
                                                    <div class="invalid-feedback">
                                                        Please Check this.
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="invalid-feedback" style="display: none">

                                            </div>
                                            <div class="btn-join text-center" style="margin-top: 10px;">
                                                <button class="t-btn influencer-register" type="button">
                                                    Register
                                                </button>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-start">
                                                    <a class="forgot-link" style="color: blue;"  href="{{ url('forgot-password') }}">Forgot
                                                        Password?</a>
                                                </div>
                                                <div class="col-6 text-end dont-have">Already on InfluencerPro?&nbsp;&nbsp; <a
                                                        href="{{ url('login') }}">Click here</a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" id="company"
                                         class="tab-pane fade @if(request()->role == 'brand') active show @endif">
                                        <form id="brand-register-form">
                                            <input type="hidden" name="role" value="vendor">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="brand_name">
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Brand Name.
                                                </div> --}}
                                                <label class="focus-label">Brand Name</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="company_name">
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Company Name.
                                                </div> --}}
                                                <label class="focus-label">Company Name</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating "  placeholder="Please provide a valid Business Website." name="website">
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Website.
                                                </div> --}}
                                                <label class="inner_label focus-label">Business Website</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating " id="bemail" placeholder="Please provide a valid Business Email." name="email">
                                              
                                                <label class="inner_label focus-label">Business Email</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating"  name="first_name"/>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid First Name.
                                                </div> --}}
                                                <label class="focus-label">First Name</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="last_name">
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Last Name.
                                                </div> --}}
                                                <label class="focus-label">Last Name </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating position"
                                                       name="position">
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Position.
                                                </div> --}}
                                                <label class="focus-label">Position </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating"   pattern="\+?\d*" placeholder="Please provide a valid Mobile." oninput="validateInput(this)" name="phone"/>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Mobile.
                                                </div> --}}
                                                <label class="inner_label focus-label">Mobile </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                
                                                <select name="gender" class="form-control floating" id="gender">
                                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Gender.
                                                </div> --}}
                                                <label class="focus-label">Gender</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control datepicker22 floating"  id="datepicker22"  name="age">
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid age.
                                                </div> --}}
                                                <label class="focus-label">Date of Birth</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <select name="national_id" class="form-control  floating" id="national_id">
                                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                                    @foreach(getnationality() as $nationality)
                                                        <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                                                    @endforeach
                                                </select>
                                               
                                                <label class="focus-label">Nationality </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                {{--    <input type="text" class="form-control floating" name="country">--}}
                                                <select name="country_id" class="form-control  floating" id="country_id">
                                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                                    @foreach(getCountries() as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Country.
                                                </div> --}}
                                                <label class="focus-label">Country </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <select name="city_id" class="form-control  floating" id="brand_city_id">
                                                    {{-- <option value="">Select City</option> --}}
                                                </select>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid City.
                                                </div> --}}
                                                <label class="focus-label">City </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="password" class="form-control floating " name="password"
                                                       id="password_brand" placeholder="8  Characters - 1 Capital, 1 Number, 1 Special">
                                                       <div class="input-group-append">
                                                        <span class="toggle-password" onclick="togglePassword_brand('password_brand')" style="cursor: pointer;">👁️</span>
                                                    </div>
                                                
                                                <label class="inner_label focus-label bilal-register">Password</label>
                                            </div>
                                            <div class="form-group form-focus mb-0">
                                                <input type="password" class="form-control floating"
                                                       name="confirm_password" id="confirm_password_brand">
                                                       <div class="input-group-append">
                                                        <span class="toggle-password" onclick="togglePassword_brand('confirm_password_brand')" style="cursor: pointer;">👁️</span>
                                                    </div>
                                                {{-- <div class="invalid-feedback">
                                                    Please provide a valid Confirm Password.
                                                </div> --}}
                                                <label class="focus-label">Confirm Password</label>
                                            </div>
                                            <div class="dont-have">
                                                <span class="custom_check">
                                                    {{-- <input type="checkbox" name="agreed_to_terms" class="agreed_to_terms"  style="width: 20px;height: 20px;"   
                                                > --}}
                                                    {{-- <span class="checkmark"></span> --}}
                                                    <span style="font-size: 14px;">
                                                        By registering I agree to the 
                                                    <a href="{{ env('BASE_URL') }}/termcondition" target="_blank">Terms & Conditions</a> and 
                                                    <a href="{{ env('BASE_URL') }}/privacy-policy" target="_blank">Privacy Policy</a>.
                                                    </span>
                                                    <div class="invalid-feedback">
                                                        Please Check this.
                                                    </div>
                                                </span>
                                            </div>
                                            

                                            <div class="invalid-feedback term-invalid" style="display: none">

                                            </div>
                                            <div class="btn-join text-center" style="margin-top: 10px;">
                                                <button class="t-btn brand-register" type="button">
                                                  Register
                                                </button>
                                            </div>


                                            <div class="row form-row">
                                                <div class="col-6 text-start">
                                                    <a class="forgot-link" style="color: blue;" href="{{ env('BASE_URL') }}/forgot-password">Forgot
                                                        Password?</a>
                                                </div>
                                                <div class="col-6 text-end dont-have">Already on influencerPro? &nbsp;&nbsp;
                                                    <a href="{{env('BASE_URL').'/login'}}">Click here</a></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')
    <script type="text/javascript" >

        
 function togglePassword_brand(fieldId) {


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

function validateInput(input) {
    // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
    input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
}
    $('#brand-register-form').on('submit', function(event) {
        var emailInput = $('#bemail');
        var emailError = $('#emailError');
        var email = emailInput.val();
        var officialEmailPattern = /^[a-zA-Z0-9._%+-]+@company\.com$/;

        if (!officialEmailPattern.test(email)) {
            event.preventDefault();
            emailError.show();
            // emailInput.addClass('is-invalid');
        } else {
            emailError.hide();
            // emailInput.removeClass('is-invalid');
        }
    });


  
    jQuery(document).ready(function($) {

       
      
            $('.mySelect').select2({
                placeholder: " ", // Sets the placeholder text
                allowClear: true, 
                minimumResultsForSearch: Infinity // Disables the search box
        });


                @if(request()->role == 'influencer')
            var form = $('#influencer-register-form')[0];
                @else
            var form = $('#brand-register-form')[0];
            var inputs = $(form).find('input');

            remove_validation_on_input_change(inputs);
            @endif

        });
        function checkRole(thisElem) {
            var role = $(thisElem).attr('role');
        
         
          if(role=='brand' ){
        
            $('.rgt').text('Register');
            $('.changetext').text('Gain access to millions of Influencers’ Database!');

          }else{
            $('.rgt').text('Join');
            $('.changetext').text('Make the best of your Professional Life!');
          }
            
        }

        $(document).ready(function () {
               var role1= "{{ request('role') }}";
              
               if(role1=='brand'){
        
        $('.rgt').text('Register');
        $('.changetext').text('Gain access to millions of Influencers’ Database!');

      }else{
        $('.rgt').text('Join');
        $('.changetext').text('Make the best of your Professional Life!');
      }
               
        });
        
    

        $(document).on('click', '.influencer-register', function (e) {
            e.preventDefault();
            register($('#influencer-register-form')[0]);
        });

        $(document).on('click', '.brand-register', function (e) {
            e.preventDefault();
            register($('#brand-register-form')[0]);
        });

        function register(form) {
            var inputs = $(form).find('input');
            // var allInputsValid = validate_inputs(form);

            // if (!$(form).find('.agreed_to_terms').is(":checked")) {
            //     $('.term-invalid').show();
            //     // $('.invalid-feedback').html('Please Check User Agreement, Privacy Policy');
            //     return;
            // }

            // if (allInputsValid) {
                form.classList.remove('was-validated');
                var formData = new FormData(form);
                $.ajax({
                    url: api_url + 'auth/register',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function (response) {
                        var errors = response.errors;
                        if (response.status) {
                    for (var fieldName in errors) {
                    var errorElement = $(form).find('[name="' + fieldName + '"]');
// errorElement.removeClass('was-validated')
                    errorElement.removeClass('is-invalid')
// errorElement.siblings('.invalid-feedback').html(errors[fieldName]);
                     }
                            // Handle successful submission here
                            setTimeout(function () {
                                window.location.assign(base_url + "/login");
                            }, 600);
                        } else {

                        
                        
                            // $('.invalid-feedback').show();
                            // Handle validation errors
                           

                            
             
            console.log(response.errors);

                         // Clear previous validation messages
                            // $(form).find('.invalid-feedback').html('');

                            // Add the 'was-validated' class to show validation messages
                            // form.classList.add('is-invalid');
                            // form.classList.remove('was-validated');
                            // Display validation messages for each field6
                            for (var fieldName in errors) {

                              


                           

                                var errorElement = $(form).find('[name="' + fieldName + '"]');
                                errorElement.removeClass('was-validated')
                                errorElement.addClass('is-invalid')
                                errorElement.siblings('.invalid-feedback').html(errors[fieldName]);
                            }
                        }
                    },
                    error: function (response) {
                        // Handle error
                        // showAlert("error", "Server Error");
                    }
                });
            // }
        }

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
                                    $("#city_id").append('<option selected hidden disabled value="">&nbsp;&nbsp;</option><option value="' + value.id + '">' + value.name + '</option>');
                                    // $("#brand_city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                    $("#brand_city_id").append('<option selected hidden disabled value="">&nbsp;&nbsp;</option><option value="' + value.id + '">' + value.name + '</option>');
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
