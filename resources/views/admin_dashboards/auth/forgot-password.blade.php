@extends('auth.layout.master')
<style>
       input:focus {
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
.main-wrapper .page-wrapper{
    min-height: 50vh !important;
}
</style>
@section('content')

    <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="password-alert bg-success text-white mb-3"
                     style="border-radius:5px;padding:5px;display: none;font-size:13px;">Please check Your Email
                </div>
                {{-- <div class="card"> --}}
                    <div class="row">
                        <!-- <div class="col-md-4 pe-md-0">
                            <div class="auth-side-wrapper">

                            </div>
                        </div> -->
                        <div class="col-md-7 ps-md-0 mx-auto">
                            <div class="auth-form-wrapper px-4 py-5">
                                <div class="login-header text-center">
                                    <a href="{{ env('BASE_URL') }}"><img src="{{asset('assets/images/logo/Influencers Pro-01-01.png')}}" alt="logo"></a>
                                    <h3>Reset Password</h3>
                                    <p>Enter your email to reset your new password</p>
                                </div>
                                <!-- login title start -->

                                <form class="forgot-password-form">
                                    {{-- <div class="mb-3">
                                        <label for="userEmail" class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control login-user" id="userEmail"
                                               placeholder="Email" name="email">
                                    </div> --}}

                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating email" id="userEmail" placeholder="Email" name="email">
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                        <label class="focus-label">Email</label>
                                    </div>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary me-2 mb-2 mb-md-0 text-white forgot-submit">Reset</a>
                                    </div>
                                    <div class="row" style="margin-top: 14px;">
                                        <div class="col-6 text-end dont-have" style="margin-left: -147px;"><a style="margin-left: 20px;color: #0504aa;" href="{{ env('BASE_URL') }}/login">Login</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>

@endsection
