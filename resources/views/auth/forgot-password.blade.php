@extends('layout.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0;
        }
        input:focus {
    border: 1px solid blue !important;

}
.form-control {
    width: 100%; /* Adjust width as needed */
    max-width: 400px; /* Optional: Set a maximum width */
    margin: 0 auto; /* Center align */
}
.form-focus .focus-label{
    left: 140px !important;
}
.login-color{
    color: blue !important;
}
.login-color:hover{
    color: #997045 !important;
}
.form-group {
    text-align: center; /* Center align label and input */
}

.login-right {
    padding: 20px; /* Optional: Add padding for better spacing */
}

.reset-btn {
    width: auto; /* Adjust button width if necessary */
    margin: 0 auto; /* Center align button */
    display: block;
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
                                    <h3>Reset Password</h3>
                                    <p style="margin-bottom: 40px !important;">Enter your email</p>
                                </div>
                                <!--<div class="alert alert-primary show-msg" role="alert" style="display: none"></div>-->
                                <form id="forgot-password-form">
                                    <div class="form-group text-center form-focus" style="margin-bottom: 40px !important;">
                                        <input type="email" class="form-control floating email" name="email">
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <button class="btn-block btn-lg t-btn reset-btn" type="submit" style="margin-bottom: 24px; border-radius: 4px !important;">Reset</button>
                                    <div class="row">
                                        <div class="col-6 text-end dont-have " style="margin-left: 70px;">Login <a style="margin-left: 20px; " class="login-color" href="{{ env('BASE_URL') }}/login">Click here</a></div>
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
                                setTimeout(function() {
                                    window.location.href = base_url + '/verify-otp';
                                }, 2000);
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
