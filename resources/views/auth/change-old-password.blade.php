@extends('layout.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0;
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
                                    <a href="{{ env('BASE_URL') }}"><img
                                            src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" alt="logo"
                                            class="img-fluid"></a>
                                    <h3>Change Password </h3>
                                    <!-- <p>Don't miss your next opportunity. Sign in to stay updated on your professional
                                        world.</p> -->
                                </div>
                                <div class="alert alert-primary show-msg" role="alert" style="display: none">

                                </div>

                                <form id="change-password-form">
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating old_password"
                                               name="old_password">
                                        <div class="invalid-feedback">
                                            Please provide a correct old password.
                                        </div>
                                        <label class="focus-label">Old Password</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating password" name="password">
                                        <div class="invalid-feedback">
                                            Please provide a correct password.
                                        </div>
                                        <label class="focus-label">New Password</label>
                                    </div>
                                    <div class="text-center">
                                    <button class="btn-block t-btn reset-btn" type="submit">Change</button>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-6 text-end dont-have">Login <a
                                                href="{{ env('BASE_URL') }}login">Click
                                                here</a></div>
                                    </div> -->
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
            var form = $('#change-password-form')[0];
            var inputs = $(form).find('input');

            remove_validation_on_input_change(inputs);
        });

        $(document).on('submit', '#change-password-form', function (e) {
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
                    url: api_url + 'auth/update-password',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            $('.show-msg').html(response.message);
                            $('.show-msg').show();

                            show_success_message(response.message)
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
