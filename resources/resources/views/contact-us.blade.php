@extends('layout.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0;
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
        
    </style>
    <div class="content">
        <div class="container" style="margin-top: 60px;">
            <div class="row">
                <div class="col-md-6 offset-md-3">

                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right">
                                <div class="login-header text-center">
                                    <a href="{{ env('BASE_URL') }}"><img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" alt="logo"
                                                             class="img-fluid"></a>
                                    <h3>Contact Us</h3>
                                    <p>Don't miss your next opportunity. Contact us to stay updated on your professional
                                        world.</p>
                                </div>
                                <form action="#" id="contact-us-form">
                                    <div class="form-group form-focus">
                                        <input type="name" class="form-control floating">
                                        <label class="focus-label">First Name</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="name" class="form-control floating">
                                        <label class="focus-label">Last Name</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="name" class="form-control floating">
                                        <label class="focus-label">Mobile</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating">
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <label class="form-label" style="color:#8C635B;">Attachments</label>

                                    <div class="form-group form-focus">
                                        <input type="file" class="form-control floating">
                                        <!-- <label class="focus-label">Attachments</label> -->
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Location Country33</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Location City</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <!-- <input type="text" class="form-control floating"> -->
                                        <textarea type="text" class="form-control floating"
                                                  style="height:90px;"></textarea>
                                        <label class="focus-label">Message</label>
                                    </div>
                                    <br/>
                                    <button class="btn-block btn-lg t-btn contact-us" type="submit">Submit</button>
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
        var token = localStorage.getItem("user_token");
        if (token) {
            window.location = base_url;
        }

        $(document).ready(function () {
            var form = $('#contact-us-form')[0];
            var inputs = $(form).find('input');

            remove_validation_on_input_change(inputs);
        });

        $(document).on('submit', '#contact-us-form', function (e) {
            e.preventDefault();
            var form = $(this)[0];

            contact_us_ajax_call(form);
        });

        function contact_us_ajax_call(form) {
            var inputs = $(form).find('input');
            var allInputsValid = validate_inputs(form);

            if (allInputsValid) {
                form.classList.add('was-validated');
                var formData = new FormData(form);
                $.ajax({
                    url: api_url + 'contact-us',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            // Handle successful submission here

                            setTimeout(function () {
                                window.location.assign(base_url);
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
        function validateInput(input) {
    // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
    input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
}
    </script>
@endsection
