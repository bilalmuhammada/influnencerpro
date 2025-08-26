@extends('admin_dashboards.layout.master')
<style>
    .form-control::placeholder{
    color: blue !important;
    font-size: 12px !important;
}

.fa-eye-slash {
    position: absolute !important;
    top: 28% !important;
    right: 4% !important;
    cursor: pointer !important;
    /* color: lightgray !important; */
    }
</style>
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h3 class="card-title text-muted text-center" style="color: blue !important;">Edit Profile</h3>
            <ol class="breadcrumb">
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-5 grid-margin stretch-card" style="margin:0px auto;">
                <div class="card">
                    <div class="card-body" style="  margin-top: -35px;">
                        <form class="forms-sample" id="form_date">
                            <input type="hidden" name="role" value="vendor">

                            <div class="form-group form-focus">
                                <input type="file" class="form-control floating bilal-profileedit" name="image" accept="image/*">
                                <div class="invalid-feedback">
                                    Please provide a valid Image.
                                </div>
                                <!-- <label class="focus-label">Upload Image </label> -->
                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Name" value="{{ $admin->name ?? '' }}">
                            </div> --}}

                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating name" name="name" value="{{ $admin->name ?? '' }}">
                                <div class="invalid-feedback">
                                    Please provide a valid Name.
                                </div>
                                <label class="focus-label">Name </label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="email" class="form-control floating" name="email" 
                                {{-- placeholder="Please provide a valid Email."  --}}
                                 value="{{ $admin->email ?? '' }}">
                                <label class="focus-label">Email </label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="phone"
                                 {{-- placeholder="Please enter a valid Mobile."  --}}
                                 value="{{ $admin->phone ?? '' }}">
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid Mobile.
                                </div> --}}
                                <label class="focus-label">Mobile </label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="password" class="form-control floating" name="password"
                                 {{-- placeholder="8  Characters - 1 Capital, 1 Number, 1 Special"  --}}
                                 value="">
                                 <i class="fa fa-eye" id="togglePassword"
                                 onclick="togglePassword('profile')"></i>
                               <div class="invalid-feedback">
                                  Please provide a valid Password.
                        </div>
                        <label class="focus-label">Change Password </label>
               </div>
               <div class="form-group form-focus">
                <input type="password" class="form-control floating" name="password" value="">
                <i class="fa fa-eye" id="togglePassword"
                onclick="togglePassword('brand_confirm_password')"></i>
                {{-- <div class="invalid-feedback">                                           Please provide a valid Password.
                  </div> --}}
                 <label class="focus-label">Confirm Password </label>
                  </div>

                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Email" value="{{ $admin->email ?? '' }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Mobile" value="{{ $admin->phone ?? '' }}">
                            </div> --}}
                            {{-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" id="myDropify" name="image"/>
                            </div> --}}
                            {{--                            <div class="mb-3">--}}
                            {{--                                <div class="form-check form-switch mb-2">--}}
                            {{--                                    <input type="checkbox" class="form-check-input" id="formSwitch1" name="status">--}}
                            {{--                                    <label class="form-check-label" for="formSwitch1">Active</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="text-center" style="margin-top: 12px;"> 
                                {{-- <button class="t-btn account-setting-update" type="button">
                                    Update
                                </button> --}}
                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')

    <script type="text/javascript">
 $(document).ready(function() {
        if ($('.floating').length > 0) {
            
            $('.floating').on('focus blur', function (e) {
                $(this).parents('.form-focus').toggleClass('focused', 
                    (e.type === 'focus' || this.value.length > 0)
                );
            }).trigger('blur');
        }

        $('#togglePassword').on('click', function() {
            let input = $(this).siblings('input');
            let type = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
    });

        $(document).on('submit', '#form_date', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: api_url + 'admins-dashboard/edit-profile',
                type: 'post',
                dataType: "JSON",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status == true) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        })

                        setTimeout(function () {
                            window.location.reload();
                        }, 500);
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        })
    </script>
@endsection
