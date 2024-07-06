@extends('layout.web.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0px !important;
        }
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
                                    <h3>Join InfluencerPro</h3>
                                    <p>Make the most of your professional life</p>
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
                                            <input type="hidden" name="role" value="influencer">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating name" name="name">
                                                <div class="invalid-feedback">
                                                    Please provide a valid First Name.
                                                </div>
                                                <label class="focus-label">First Name </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="last_name">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Last Name.
                                                </div>
                                                <label class="focus-label">Last Name </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="phone">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Mobile.
                                                </div>
                                                <label class="focus-label">Mobile </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="email" class="form-control floating" name="email">
                                                <div class="invalid-feedback">
                                                    Please provide a valid email.
                                                </div>
                                                <label class="focus-label">Email </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="country">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Country.
                                                </div>
                                                <label class="focus-label">Country </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="city">
                                                <div class="invalid-feedback">
                                                    Please provide a valid City.
                                                </div>
                                                <label class="focus-label">City </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="password" class="form-control floating" name="password"
                                                >
                                                <i class="fa-solid fa-eye" id="eye"></i>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Password.
                                                </div>
                                                <label class="focus-label">Password (At least 8 chars 1 capital letter 1
                                                    special character and one Number.)</label>
                                            </div>
                                            <div class="form-group form-focus mb-0">
                                                <input type="password" class="form-control floating"
                                                       name="confirm_password">
                                                       <i class="fa-solid fa-eye" id="eye"></i>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Confirm Password.
                                                </div>
                                                <label class="focus-label">Confirm Password</label>
                                            </div>
                                            <div class="dont-have">
                                                <label class="custom_check">
                                                    <input type="checkbox" name="agreed_to_terms"
                                                           class="agreed_to_terms"
                                                           style="border:1px solid #eee !important;">
                                                    <span class="checkmark"></span> You agree to the influencerPro
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms
                                                        & Conditions</a> and <a href="#" data-bs-toggle="modal"
                                                                                data-bs-target="#privacyModal">Privacy
                                                        Policy</a>.
                                                    <div class="invalid-feedback">
                                                        Please Check this.
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="invalid-feedback" style="display: none">

                                            </div>
                                            <div class="btn-join text-center">
                                            <button class="t-btn influencer-register" type="button">
                                                AGREE TO JOIN
                                            </button>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-start">
                                                    <a class="forgot-link" href="{{ url('forgot-password') }}">Forgot
                                                        Password ?</a>
                                                </div>
                                                <div class="col-6 text-end dont-have">Already on InfluencerPro <a
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
                                                <div class="invalid-feedback">
                                                    Please provide a valid Brand Name.
                                                </div>
                                                <label class="focus-label">Brand Name</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="name"/>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Presenter First Name.
                                                </div>
                                                <label class="focus-label">Presenter First Name</label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="last_name">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Presenter Last Name.
                                                </div>
                                                <label class="focus-label">Presenter Last Name </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="phone"/>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Mobile.
                                                </div>
                                                <label class="focus-label">Mobile </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="email" class="form-control floating" name="email">
                                                <div class="invalid-feedback">
                                                    Please provide a valid email.
                                                </div>
                                                <label class="focus-label">Email </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="country">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Country.
                                                </div>
                                                <label class="focus-label">Country </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="city">
                                                <div class="invalid-feedback">
                                                    Please provide a valid City.
                                                </div>
                                                <label class="focus-label">City </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                {{--                                                <input type="text" class="form-control floating" name="country">--}}
                                                <select name="country_id" class="form-control floating" id="country_id">
                                                    @foreach(getCountries() as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Location Country.
                                                </div>
                                                <label class="focus-label">Location Country </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <select name="city_id" class="form-control floating" id="city_id">
                                                    @foreach(getCityByStateId(1) as $city)
                                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Location City.
                                                </div>
                                                <label class="focus-label">Location City </label>
                                            </div>
                                            <div class="form-group form-focus">
                                                <input type="password" class="form-control floating" name="password">
                                                <i class="fa-solid fa-eye" id="eye"></i>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Password.
                                                </div>
                                                <label class="focus-label">Password (At least 8 chars 1 capital letter 1
                                                    special character and one Number.)</label>
                                            </div>
                                            <div class="form-group form-focus mb-0">
                                                <input type="password" class="form-control floating"
                                                       name="confirm_password">
                                                       <i class="fa-solid fa-eye" id="eye"></i>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Confirm Password.
                                                </div>
                                                <label class="focus-label">Confirm Password</label>
                                            </div>
                                            <div class="dont-have">
                                                <label class="custom_check">
                                                    <input type="checkbox" name="agreed_to_terms"
                                                           class="agreed_to_terms">
                                                    <span class="checkmark"></span> You agree to the influencerPro
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms
                                                        & Conditions</a> and <a href="#" data-bs-toggle="modal"
                                                                                data-bs-target="#privacyModal">Privacy
                                                        Policy</a>.
                                                    <div class="invalid-feedback">
                                                        Please Check this.
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="invalid-feedback term-invalid" style="display: none">

                                            </div>
                                            <div class="btn-join text-center">
                                            <button class="t-btn brand-register" type="button">
                                                AGREE TO JOIN
                                            </button>
                                            </div>


                                            <div class="row form-row">
                                                <div class="col-6 text-start">
                                                    <a class="forgot-link" href="#">Forgot Password ?</a>
                                                </div>
                                                <div class="col-6 text-end dont-have">Already on influencerPro <a
                                                        href="{{env('BASE_URL').'login'}}">Click here</a></div>
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
    <script>
        $(document).ready(function () {

            @if(request()->role == 'influencer')
                var form = $('#influencer-register-form')[0];
            @else
                var form = $('#brand-register-form')[0];
                var inputs = $(form).find('input');

                remove_validation_on_input_change(inputs);
            @endif

        });

        function checkRole(thisElem) {
           role = $(thisElem).attr('role');
            console.log(role)
        }

        $(document).on('click', '.influencer-register', function (e) {
            e.preventDefault();
            register($('#influencer-register-form')[0]);
        });

        $(document).on('click', '.brand-register', function (e) {
            e.preventDefault();
            register($('#brand-register-form')[0]);
        });

        function register(form) {
            console.log(form);
            var inputs = $(form).find('input');
            var allInputsValid = validate_inputs(form);

            if (!$(form).find('.agreed_to_terms').is(":checked")) {
                $('.term-invalid').show();
                // $('.invalid-feedback').html('Please Check User Agreement, Privacy Policy');
                return;
            }

            if (allInputsValid) {
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
                        if (response.status) {
                            // Handle successful submission here
                            setTimeout(function () {
                                window.location.assign(base_url + "login");
                            }, 600);
                        } else {
                            $('.invalid-feedback').show();
                            // Handle validation errors
                            var errors = response.errors;

                            // Clear previous validation messages
                            $(form).find('.invalid-feedback').html('');

                            // Add the 'was-validated' class to show validation messages
                            // form.classList.add('is-invalid');
                            form.classList.remove('was-validated');
                            // Display validation messages for each field6
                            for (var fieldName in errors) {
                                var errorElement = $(form).find('[name="' + fieldName + '"]');
                                // errorElement.removeClass('was-validated')
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
            }
        }

        $(document).on('change', '#country_id', function () {
            var nationality_id = $(this).val();
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "GET",
                    dataType: "json",
                    data: {
                        "nationality_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#city_id").empty();

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#city_id").empty();
                        }
                    }
                });
            }
        });

    </script>
@endsection
