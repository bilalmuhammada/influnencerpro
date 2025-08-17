@extends('layout.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0;
        }
        .floating:focus {
    border: 1px solid blue !important;
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
input[type="file"] {
            color: transparent;
        }

        /* input[type="file"]::-webkit-file-upload-button {
            visibility: hidden;
        } */
    </style>
   <div class="content">
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="account-content">
                    <div class="align-items-center justify-content-center">
                        <div class="login-right">
                            <div class="login-header text-center">
                                <a href="{{ env('BASE_URL') }}"> <img src="{{asset('assets/images/logo/Influencers Pro-01-01.png')}}" alt="logo"></a>
                                <h3>Contact Us33/h3>
                                <p>Share your mind with us!</p>
                            </div>
                            <form action="#" id="contact-us-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" name="first_name">
                                            <label class="focus-label">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" name="last_name">
                                            <label class="focus-label">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="email" class="form-control floating" name="email"  placeholder="Please enter a valid Email.">
                                            <label class="focus-label">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="tel" class="form-control floating" name="mobile" pattern="\+?\d*"  oninput="validateInput(this)"   placeholder="Please enter a valid Mobile."> 
                                            <label class="focus-label">Mobile</label>
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            {{--    <input type="text" class="form-control floating" name="country">--}}
                                            <select name="country_id" class="form-control floating" id="country_id">
                                                @foreach(getCountries() as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Please provide a valid Country.
                                            </div>
                                            <label class="focus-label">Country </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <select name="city_id" class="form-control floating" id="brand_city_id">
                                                <option value="">Select City</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please provide a valid City.
                                            </div>
                                            <label class="focus-label">City </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                          <select name="iam" id="" class="form-control floating"> 
                                          <option  selected value="">I'm a/an                                        </option>
                                            <option value="influncer">Influncer</option>
                                            <option value="brands">Brand</option>
                                           
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <select name="reason" id="" class="form-control floating"> 
                                                {{-- <option  selected value="">Reason</option> --}}
                                                  <option value="collaboration">Collaboration</option>
                                                  <option value="suggestion">Suggestion</option>
                                                  <option value="complain">Complain</option>
                                                  <option value="reportbrand">Report a Brand</option>
                                                  <option value="reportinfluncer">Report an Influncer</option>
                                                </select>
                                                <label class="focus-label">Reason </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" name="subject">
                                            <label class="focus-label">Subject</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-focus">
                                            <input type="file" class="form-control-file" id="attachmentInput" name="attachments">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-focus">
                                            <textarea class="form-control floating" style="height:120px;" name="message"></textarea>
                                            <label class="focus-label">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="text-align: center;
                                    margin-top: 75px;">
                                        <button class="btn-block btn-lg t-btn contact-us" type="submit">Submit</button>
                                    </div>
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
        var token = localStorage.getItem("user_token");
        // if (token) {
        //     window.location = base_url;
        // }

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
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                    $("#brand_city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
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


        function validateInput(input) {
    // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
    input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
}
    </script>
@endsection
