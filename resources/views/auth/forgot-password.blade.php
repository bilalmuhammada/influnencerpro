@extends('layout.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 5px;
            font-size: .9em !important;
            display: none;
            color: #dc3545;
            text-align: left;

        }

        input:focus {
            border: 1px solid blue !important;
        }

        .t-btn.reset-btn {
            border-radius: 4px !important;
            padding: 8px 20px !important;
            /* Smaller bar */
            width: auto !important;
            margin: 20px auto !important;
            display: block;
            background-color: #997045 !important;
            /* Light Blue */
            border: none;
            color: white;
            font-size: 16px;
        }

        .t-btn.reset-btn:hover {
            background-color: blue !important;
            /* Gold on hover */
        }


        .login-color {
            color: blue !important;
            font-weight: 500;
        }

        .login-color:hover {
            color: #997045 !important;
        }
    </style>
    <div class="content">
        <div class="container" style="margin-top: 60px;">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right">
                                <div class="login-header text-center">
                                    <h3>Reset Password</h3>
                                    <p class="text-muted">Enter your email</p>
                                </div>
                                <div class="alert alert-success show-msg" style="display: none;"></div>
                                <form id="forgot-password-form">
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating email" name="email">
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <div class="text-center">
                                        <button class="t-btn reset-btn" type="submit">Reset</button>
                                    </div>
                                    <div class="text-end mt-3"> <!-- Pushed down and right-aligned -->
                                        <p class="dont-have">Remember your password? <a class="login-color"
                                                href="{{ env('BASE_URL') }}/login">Click Here</a></p>
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
        $(document).ready(function () {
            var form = $('#forgot-password-form')[0];
            var inputs = $(form).find('input');

            remove_validation_on_input_change(inputs);
        });

        $(document).on('submit', '#forgot-password-form', function (e) {
            e.preventDefault();
            var form = $(this)[0];

            reset_call(form);
        });

        function reset_call(form) {
            var inputs = $(form).find('input');
            var allInputsValid = validate_inputs(form);

            if (allInputsValid) {
                form.classList.add('was-validated');
                var formData = new FormData(form);
                $.ajax({
                    url: api_url + 'forgot-password-check',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {

                            $('.show-msg').html(response.message);
                            $('.show-msg').show();

                            if (response.redirect) {
                                setTimeout(function () {
                                    window.location.href = base_url + '/verify-otp';
                                }, 2000);
                            }
                        } else {
                            $('.show-msg').html(response.message);
                            $('.show-msg').show();
                        }
                    },
                    error: function (xhr) {
                        $('.show-msg').html("Something went wrong. Please try again.");
                        $('.show-msg').show();
                    }
                });
            }
        }
    </script>
@endsection