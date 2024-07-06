@extends('layout.web.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0;
        }
    </style>
    <div class="content">
        <div class="container" style="margin-top: 60px;">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right">
                                <div class="login-header text-center">
                                    <a href="{{ env('BASE_URL') }}"><img
                                            src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" alt="logo"
                                            class="img-fluid"></a>
                                    <h3>Welcome Back</h3>
                                    <p>Don't miss your next opportunity. Sign in to stay updated on your professional
                                        world.</p>
                                </div>
                                <form id="login-form">
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating email" name="email">
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating password" name="password">
                                        <div class="invalid-feedback">
                                            Please provide a correct password.
                                        </div>
                                        <label class="focus-label">Password</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom_check">
                                            <input type="checkbox" name="rem_password">
                                            <span class="checkmark"></span> Remember password
                                        </label>
                                    </div>
                                    <button class="btn-block btn-lg t-btn login-btn" type="submit">Login</button>


                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <a class="forgot-link" href="{{ env('BASE_URL') }}forgot-password">Forgot
                                                Password ?</a>
                                        </div>
                                        <div class="col-6 text-end dont-have">New to party life? <a
                                                href="{{ env('BASE_URL') }}register?role=influencer">Click
                                                here</a></div>
                                    </div>
                                </form>
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
        // var token = localStorage.getItem("user_token");
        // if (token) {
        //     window.location = base_url;
        // }

        $(document).ready(function () {
            var form = $('#login-form')[0];
            var inputs = $(form).find('input');

            remove_validation_on_input_change(inputs);
        });

        $(document).on('submit', '#login-form', function (e) {
            e.preventDefault();
            var form = $(this)[0];

            login_call(form);
        });

        function login_call(form) {
            var inputs = $(form).find('input');
            var allInputsValid = validate_inputs(form);

            if (allInputsValid) {
                form.classList.add('was-validated');
                var formData = new FormData(form);
                $.ajax({
                    url: api_url + 'auth/login',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            // Handle successful submission here
                            localStorage.setItem("user_token", response.token.token);

                            if (response.role_key == 'influencer') {
                                setTimeout(function () {
                                    window.location.href = base_url + 'influencer/dashboard';
                                }, 600);
                            } else if(response.role_key == 'vendor') {
                                setTimeout(function () {
                                    window.location.assign(base_url + 'vendor/dashboard');
                                }, 600);
                            }else {
                                setTimeout(function () {
                                    window.location.assign(base_url);
                                }, 600);
                            }
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

    </script>
@endsection
