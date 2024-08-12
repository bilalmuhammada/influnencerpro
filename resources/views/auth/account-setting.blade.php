@extends('layout.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0px !important;
        }
        .floating:focus {
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
    <div class="content">
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-4 offset-md-4">
{{-- <hr> --}}
                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right">
                                <div class="login-header text-center">
                                    <!-- <img src="assets/img/logo/Influencers Pro-01-01.png" class="img-fluid" alt="Logo"> -->
                                    <!-- <h3>Account Setting</h3> -->
                                    <h3>Edit Profile</h3>
                                    <!-- <p>Make the most of your professional life</p> -->
                                </div>
                                <form id="account-setting-form">
                                    <input type="hidden" name="role" value="influencer">
                                    <div class="form-group form-focus">
                                        <input type="file" class="form-control floating bilal-profileedit" name="image" accept="image/*">
                                        <div class="invalid-feedback">
                                            Please provide a valid Image.
                                        </div>
                                        <!-- <label class="focus-label">Upload Image </label> -->
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating name" name="name" value="{{ session()->get('User')['name'] }}">
                                        <div class="invalid-feedback">
                                            Please provide a valid Name.
                                        </div>
                                        <label class="focus-label">Name </label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating" name="email" readonly value="{{ session()->get('User')['email'] }}">
                                        <label class="focus-label">Email </label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="phone" value="{{ session()->get('User')['phone'] }}">
                                        <div class="invalid-feedback">
                                            Please provide a valid Mobile.
                                        </div>
                                        <label class="focus-label">Mobile </label>
                                    </div>
                                   <div class="form-group form-focus">
                                      <input type="text" class="form-control floating" name="password" placeholder="8  Characters - 1 Capital, 1 Number, 1 Special" value="">
                                     <div class="invalid-feedback">
                                        Please provide a valid Password.
                              </div>
                              <label class="focus-label">Change Password </label>
                     </div>
                           <div class="form-group form-focus">
                                  <input type="text" class="form-control floating" name="password" value="">
                                  <div class="invalid-feedback">                                           Please provide a valid Password.
                                    </div>
                                   <label class="focus-label">Confirm Password </label>
                                    </div> 
                                    <div class="text-center">
                                    <button class="t-btn account-setting-update" type="button">
                                        Update
                                    </button>
                                    </div>
                                </form>
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
            var form = $('#account-setting-form')[0];
            var inputs = $(form).find('input');

            // remove_validation_on_input_change(inputs);
        });

        $(document).on('click', '.account-setting-update', function (e) {
            e.preventDefault();
            var form = $('#account-setting-form')[0];

            var formData = new FormData(form);
            $.ajax({
                url: api_url + 'auth/account-setting-update',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        // Handle successful submission here
                        show_success_message(response.message)
                        setTimeout(function(){
                            window.location.href = '';
                        }, 500);
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

            var inputs = $(form).find('input');
            // var allInputsValid = validate_inputs(form);

            // if (allInputsValid) {
            //     form.classList.remove('was-validated');
            //     var formData = new FormData(form);
            //     $.ajax({
            //         url: api_url + 'auth/account-setting-update',
            //         type: 'POST',
            //         data: formData,
            //         processData: false,
            //         contentType: false,
            //         dataType: "JSON",
            //         success: function (response) {
            //             if (response.status) {
            //                 // Handle successful submission here
            //                 show_success_message(response.message)
            //             } else {
            //                 $('.invalid-feedback').show();
            //                 // Handle validation errors
            //                 var errors = response.errors;
            //
            //                 // Clear previous validation messages
            //                 $(form).find('.invalid-feedback').html('');
            //
            //                 // Add the 'was-validated' class to show validation messages
            //                 // form.classList.add('is-invalid');
            //                 form.classList.remove('was-validated');
            //                 // Display validation messages for each field6
            //                 for (var fieldName in errors) {
            //                     var errorElement = $(form).find('[name="' + fieldName + '"]');
            //                     // errorElement.removeClass('was-validated')
            //                     errorElement.addClass('is-invalid')
            //                     errorElement.siblings('.invalid-feedback').html(errors[fieldName]);
            //                 }
            //             }
            //         },
            //         error: function (response) {
            //             // Handle error
            //             // showAlert("error", "Server Error");
            //         }
            //     });
            // }
        });


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
