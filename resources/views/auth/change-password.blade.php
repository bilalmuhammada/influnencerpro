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
            border: 1px solid #1b3c8e !important;
            box-shadow: 0 0 5px rgba(27, 60, 142, 0.3);
        }
        .form-control {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 8px;
            height: 50px;
        }
        .form-focus {
            margin-left: auto;
            margin-right: auto;
            max-width: 400px;
        }
        .form-focus .focus-label {
            left: 20px !important;
            font-weight: 500;
        }
        .login-right {
            padding: 40px 20px;
            background: #fff;
            border-radius: 12px;
        }
        .reset-btn {
            background-color: #1b3c8e;
            border: none;
            color: white;
            font-size: 18px;
            font-weight: 600;
            padding: 12px 50px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            margin: 20px auto;
            display: block;
        }
        .reset-btn:hover {
            background-color: #142d6b;
            transform: translateY(-2px);
        }
    </style>
    <div class="content">
        <div class="container" style="margin-top: 60px;">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right shadow-sm">
                                <div class="login-header text-center">
                                  
                                          
                                    <h3>Create New Password</h3>
                                    <p class="text-muted">Enter your new password below to secure your account.</p>
                                </div>
                                <div class="alert alert-success show-msg" role="alert" style="display: none"></div>

                                <form id="forgot-password-form">
                                    <input type="hidden" name="password_reset_code" value="{{ $password_reset_code }}">
                                    
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating password" name="password">
                                        <div class="invalid-feedback">Please provide a valid password.</div>
                                        <label class="focus-label">New Password</label>
                                    </div>

                                    <div class="form-group form-focus mt-4">
                                        <input type="password" class="form-control floating confirm_password" name="confirm_password">
                                        <div class="invalid-feedback">Passwords do not match.</div>
                                        <label class="focus-label">Confirm Password</label>
                                    </div>

                                    <button class="reset-btn" type="submit">Reset Password</button>
                                    
                                    <div class="text-center mt-3">
                                        <p class="dont-have">Remember your password? <a href="{{ env('BASE_URL') }}/login">Login Here</a></p>
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
                        setTimeout(function() {
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

