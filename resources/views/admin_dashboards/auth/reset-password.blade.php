@extends('auth.layout.master')
@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <h4 class="card-title text-muted text-center">Change Password</h4>
            <ol class="breadcrumb">
            </ol>
        </nav>

        <div class="row  mx-auto">
            <div class="col-md-7 grid-margin stretch-card  mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample reset-password-form">
                            <input type="hidden" name="password_reset_code" class="password_reset_code"
                                   value="{{$password_reset_code}}">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">New Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder=" New Password">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" autocomplete="off" placeholder=" Confirm Password">
                            </div>
                            <a class="btn btn-primary me-2 reset-password-submit">Submit</a>
                            <button class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

