@extends('layout.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0px !important;
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
                                    <!-- <img src="assets/img/logo/Influencers Pro-01-01.png" class="img-fluid" alt="Logo"> -->
                                    <h3>Account Setting</h3>
                                    <p>Make the most of your professional life</p>
                                </div>
                                <form id="brand-register-form">
                                    <input type="hidden" name="role" value="vendor">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="brand_name" value="{{ session()->get('User')['brand_name'] }}">
                                        <label class="focus-label">Brand Name</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="name" value="{{ session()->get('User')['name'] }}"/>
                                        <div class="invalid-feedback">
                                            Please provide a valid Presenter First Name.
                                        </div>
                                        <label class="focus-label">Presenter First Name</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="last_name" value="{{ session()->get('User')['last_name'] }}"/>
                                        <label class="focus-label">Presenter Last Name </label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="phone" value="{{ session()->get('User')['phone'] }}"/>
                                        <label class="focus-label">Mobile </label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating" name="email" value="{{ session()->get('User')['email'] }}" readonly>
                                        <label class="focus-label">Email </label>
                                    </div>
                                    <div class="form-group form-focus">
                                        {{--                                                <input type="text" class="form-control floating" name="country">--}}
                                        <select name="country_id" class="form-control floating" id="country_id">
                                            @foreach(getCountries() as $country)
                                                <option value="{{ $country->id }}" @if(session()->get('User')['country_id'] == $country->id) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <label class="focus-label">Location Country </label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <select name="city_id" class="form-control floating" id="city_id">
                                            @foreach(getCityByStateId(1) as $city)
                                                <option value="{{ $city->id }}" @if(session()->get('User')['city_id'] == $city->id) selected @endif>{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        <label class="focus-label">Location City </label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control" name="password">
                                        <label class="focus-label">Password (Leave it empty if you don't want to change)</label>
                                    </div>

                                    <button class="btn btn-primary btn-block btn-lg brand-register"
                                            type="button">Save
                                    </button>
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
            var form = $('#influencer-register-form')[0];
            var inputs = $(form).find('input');

            remove_validation_on_input_change(inputs);
        });

        $(document).on('click', '.brand-register', function (e) {
            e.preventDefault();
            var form = $('#brand-register-form')[0];

            update_account_setting(form);
        });

        function update_account_setting(form) {
            var formData = new FormData(form);
            $.ajax({
                url: api_url + 'auth/vendor-account-setting-update',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        // Handle successful submission here
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
