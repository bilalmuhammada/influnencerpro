@extends('layout.web.master')

@section('content')
<style>
    .invalid-feedback {
        margin-top: 5px;
        font-size: .8em !important;
        display: none;
    }

    input:focus {
        border: 1px solid #0504aa !important;
        box-shadow: 0 0 5px rgba(5, 4, 170, 0.3);
    }

    .otp-container {
        text-align: center;
        padding: 50px 30px;
        border-radius: 10px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
        background: #fff;
        margin-top: 60px;
    }

    .otp-logo img {
        width: 150px;
        margin-bottom: 20px;
    }

    .form-control {
        height: 50px;
        font-size: 18px;
        text-align: center;
        border-radius: 8px;
        border: 1px solid #ccc;
        width: 100%;
        max-width: 200px;
        margin: 0 auto;
    }

    .verify-btn {
        background-color: #0504aa;
        border: none;
        color: white;
        font-size: 16px;
        padding: 12px 30px;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        transition: 0.3s;
    }

    .verify-btn:hover {
        background-color: #000080;
    }

    .resend {
        font-size: 14px;
        margin-top: 20px;
    }

    .resend a {
        color: #0504aa;
        text-decoration: none;
        font-weight: bold;
    }

    .resend a:hover {
        text-decoration: underline;
    }

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #997045;
        border-radius: 34px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }
</style>

<div class="container">
    <div class="col-md-6 offset-md-3">
        <div class="otp-container">
            <div class="otp-logo">
                <img src="{{ asset('assets/images/logo/Influencers Pro-01-01.png') }}" alt="InfluencerPro">
            </div>
            <h3>Email Verification</h3>
            <p>Enter the 6-digit OTP sent to your registered email.</p>

            <form id="otp-form">
                <div class="form-group">
                    <input type="text" maxlength="6" name="otp" class="form-control" id="otp" placeholder="Enter OTP" required>
                    <div class="invalid-feedback">Please enter a valid OTP.</div>
                </div>

                <button type="submit" class="verify-btn" id="verifyBtn" disabled>Verify OTP</button>
            </form>

            <div class="resend">
                Didn’t receive the code? <a href="{{ route('resend.otp') }}">Resend OTP</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script>
    const api_url = "{{ env('API_URL') }}";
    const base_url = "{{ env('BASE_URL') }}";

    const otpInput = document.getElementById('otp');
    const verifyBtn = document.getElementById('verifyBtn');

    // Enable button when OTP length = 6
    otpInput.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, ''); // only digits
        verifyBtn.disabled = this.value.length !== 6;
    });

    // Submit OTP via AJAX
    $(document).on('submit', '#otp-form', function(e) {
        e.preventDefault();

        const otp = otpInput.value.trim();

        if (otp.length < 6) {
            $('.invalid-feedback').show().text('Please enter a valid 6-digit OTP.');
            return;
        }

        $.ajax({
            url: base_url + 'auth/verify-otp',
            type: 'POST',
            data: { otp: otp },
            dataType: "JSON",
            success: function(response) {
                if (response.status) {
                    localStorage.setItem("user_token", response.token);
                    window.location.href = base_url + '/dashboard';
                } else {
                    $('.invalid-feedback').show().text(response.message || 'Invalid OTP.');
                }
            },
            error: function() {
                $('.invalid-feedback').show().text('Server error, please try again.');
            }
        });
    });
</script>
@endsection
