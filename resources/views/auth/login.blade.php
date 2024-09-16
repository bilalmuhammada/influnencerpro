@extends('layout.web.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0;
        }
        input:focus {
    border: 1px solid blue !important;
}
::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
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
    </style>
    <div class="content" style="">
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right">
                                <div class="login-header text-center">
                                    <h3>Welcome Back!</h3>
                                    <p>Sign in to stay updated on your professional world!</p>
                                </div>
                                <form id="login-form">
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating email" name="email" >
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <div class="form-group form-focus" style="margin-top:14px;">
                                        <input type="password" class="form-control floating password" name="password" id="password">
                                        <i class="fa-solid fa-eye" id="eye" onclick="togglePassword()"></i>
                                        <div class="invalid-feedback">
                                            Please provide a correct password.
                                        </div>
                                        <label class="focus-label">Password</label>
                                    </div>
                                    <div class="form-group" style="margin-top: 15px;">
                                        <label class="custom_check">
                                            <input type="checkbox" name="rem_password" style="margin-left: -86px !important;">
                                            {{-- <span class="checkmark"></span>  --}}
                                            Remember password
                                        </label>
                                    </div>
                                    <div class="text-center">
                                    <button class="t-btn login-btn" type="submit" style="padding:10px 30px;">Login</button>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <a class="forgot-link" href="{{ env('BASE_URL') }}/forgot-password" style="color:#0504aa;">Forgot
                                                Password?</a>
                                        </div>
                                        <div class="col-6 text-end dont-have" style="margin-top: 34px !important;">New to InfluencerPro? <a
                                                href="{{ env('BASE_URL') }}/register?role=influencer" style="color:#0504aa;">Click
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

        
        var api_url = "{{ env('API_URL') }}";
        
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            // var toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // toggleIcon.src = 'https://img.icons8.com/material-outlined/24/000000/invisible.png';
            } else {
                passwordInput.type = 'password';
                // toggleIcon.src = 'https://img.icons8.com/material-outlined/24/000000/visible.png';
            }
        }

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
                                    window.location.href = base_url + '/influencer/dashboard';
                                }, 600);
                            } else if(response.role_key == 'vendor') {
                                setTimeout(function () {
                                    window.location.assign(base_url + '/vendor/dashboard');
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
