@extends('layout.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 5px;
            font-size: .9em !important;
            display: none;
            color: #dc3545;
            text-align: left;
            margin-left: 10%;
        }

        input:focus {
            border: 1px solid blue !important;
        }

        .t-btn.reset-btn {
            border-radius: 4px !important;
            padding: 10px 30px !important;
            width: auto !important;
            margin: 20px auto !important;
            display: block;
        }



        .reset-btn {
            background-color: #997045 !important;
            border: none !important;
            color: white !important;
            font-size: 18px !important;
            font-weight: 600 !important;
            padding: 8px 16px !important;
            width: 100%;
            max-width: 200px;
            border-radius: 4px !important;
            cursor: pointer;
            transition: 0.3s;
            margin: 30px auto 10px;
            display: block;
        }

        .reset-btn:hover {
            background-color: #142d6b !important;
            transform: translateY(-2px);
        }


        .dont-have {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
            text-align: center;

            letter-spacing: 0.3px;
        }

        .login-here-link {
            color: #0504aa !important;
            font-weight: 500;
            text-decoration: none;
            margin-left: 6px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .login-here-link:hover {
            color: #997045 !important;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 43%;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 10;
            opacity: 0.7;
        }

        .toggle-password:hover {
            opacity: 1;
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


                                    <h3>Create New Password</h3>
                                    <p class="text-muted">Enter your new password</p>
                                </div>
                                <div class="alert alert-success show-msg" role="alert" style="display: none"></div>

                                <form id="forgot-password-form">
                                    <input type="hidden" name="password_reset_code" value="{{ $password_reset_code }}">

                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating password" name="password"
                                            id="password">
                                        <div class="input-group-append">
                                            <span class="toggle-password" onclick="togglePassword('password')"
                                                style="cursor: pointer;">👁️</span>
                                        </div>
                                        <div class="invalid-feedback">Please provide a valid password.</div>
                                        <label class="focus-label">New Password</label>
                                    </div>

                                    <div class="form-group form-focus mt-4">
                                        <input type="password" class="form-control floating confirm_password"
                                            name="confirm_password" id="confirm_password">
                                        <div class="input-group-append">
                                            <span class="toggle-password" onclick="togglePassword('confirm_password')"
                                                style="cursor: pointer;">👁️</span>
                                        </div>
                                        <div class="invalid-feedback">Passwords do not match.</div>
                                        <label class="focus-label">Confirm Password</label>
                                    </div>

                                    <button class="reset-btn" type="submit">Reset Password</button>

                                    <div class="dont-have">
                                        Remember your password? <a href="{{ url('login') }}" class="login-here-link">Login
                                            Here</a>
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
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const icon = passwordField.nextElementSibling.querySelector(".toggle-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.textContent = "🙈";
            } else {
                passwordField.type = "password";
                icon.textContent = "👁️";
            }
        }

        $(document).ready(function () {
            var form = $('#forgot-password-form')[0];
            var inputs = $(form).find('input');
            remove_validation_on_input_change(inputs);
        });

        $(document).on('submit', '#forgot-password-form', function (e) {
            e.preventDefault();
            var form = $(this);
            var password = form.find('.password').val();
            var confirmPassword = form.find('.confirm_password').val();

            $('.invalid-feedback').hide();
            form.find('.form-control').removeClass('is-invalid');

            if (password.length < 6) {
                form.find('.password').addClass('is-invalid').siblings('.invalid-feedback').show().text('Password must be at least 6 characters.');
                return;
            }

            if (password !== confirmPassword) {
                form.find('.confirm_password').addClass('is-invalid').siblings('.invalid-feedback').show().text('Passwords do not match.');
                return;
            }

            $('.reset-btn').prop('disabled', true).text('Updating...');

            var formData = new FormData(form[0]);
            $.ajax({
                url: api_url + 'reset-password',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('.show-msg').html(response.message).show();
                        setTimeout(function () {
                            window.location.href = base_url + '/login';
                        }, 2000);
                    } else {
                        $('.reset-btn').prop('disabled', false).text('Reset Password');
                        var errors = response.errors;
                        for (var fieldName in errors) {
                            var errorElement = form.find('[name="' + fieldName + '"]');
                            errorElement.addClass('is-invalid');
                            errorElement.siblings('.invalid-feedback').html(errors[fieldName]).show();
                        }
                    }
                },
                error: function () {
                    $('.reset-btn').prop('disabled', false).text('Reset Password');
                    alert('Server error, please try again.');
                }
            });
        });
    </script>
@endsection