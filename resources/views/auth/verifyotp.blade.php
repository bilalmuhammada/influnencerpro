@extends('layout.master')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .invalid-feedback {
        margin-top: 15px;
        font-size: .9em !important;
        display: none;
        color: #dc3545;
    }

    .otp-container {
        text-align: center;
        padding: 60px 30px;
        background: #fff;
    }

    .otp-inputs {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 30px 0;
    }

    .otp-input {
        width: 60px;
        height: 70px;
        font-size: 32px;
        font-weight: bold;
        text-align: center;
        border: 2px solid #997045; /* Logo Gold */
        border-radius: 4px; /* Sharp edges */
        background: transparent;
        transition: all 0.3s ease;
        color: #997045;
    }

    .otp-input:focus {
        border: 2px solid blue !important; /* Blue */
        box-shadow: 0 0 10px rgba(27, 60, 142, 0.2);
        outline: none;
    }

    .otp-input.has-value {
        border-color: blue;
    }

    .verify-btn {
        background-color: #997045; /* Logo Blue */
        border: none;
        color: white;
        font-size: 18px;
        font-weight: 600;
        padding: 12px 50px;
        border-radius: 4px; /* Sharp edges */
        cursor: pointer;
        transition: 0.3s;
        margin-top: 20px;
    }

    .verify-btn:hover:not(:disabled) {
        background-color: blue;
        transform: translateY(-2px);
    }

    .verify-btn:disabled {
        background-color: #997045;
        cursor: not-allowed;
    }

    .resend {
        font-size: 15px;
        margin-top: 30px;
        color: #997045; /* Logo Gold */
    }

    .resend a {
        color: blue; /* Logo Gold */
        text-decoration: none;
        font-weight: bold;
        margin-left: 5px;
    }

    .resend a:hover {
        color: #997045;
        text-decoration: underline;
    }

    h3 {
        color: #333;
        font-weight: 700;
        margin-bottom: 10px;
    }

    p.instruction {
        color: black;
        font-size: 16px;
    }
</style>

<div class="container">
    <div class="otp-container">
        <h3>Email Verification</h3>
        <p class="instruction">Enter OTP</p>

        <form id="otp-form">
            <div class="otp-inputs" style="margin-top: 32px;"> <!-- Pushed down 1px -->
                <input type="text" maxlength="1" class="otp-input" id="otp1" autocomplete="off">
                <input type="text" maxlength="1" class="otp-input" id="otp2" autocomplete="off">
                <input type="text" maxlength="1" class="otp-input" id="otp3" autocomplete="off">
                <input type="text" maxlength="1" class="otp-input" id="otp4" autocomplete="off">
            </div>
            <div class="invalid-feedback">Please enter a valid OTP.</div>

            <button type="submit" class="verify-btn" id="verifyBtn">Verify</button>
        </form>

        <div class="resend">
            Didn’t receive OTP? <a href="{{ route('resend.otp') }}">Resend</a>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script>
    const inputs = document.querySelectorAll('.otp-input');
    const verifyBtn = document.getElementById('verifyBtn');

    // CSRF setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Handle input behavior
    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.inputType === "deleteContentBackward") return;
            
            // Allow only numbers
            input.value = input.value.replace(/[^0-9]/g, '');
            
            if (input.value) {
                input.classList.add('has-value');
                // Move to next input
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            } else {
                input.classList.remove('has-value');
            }
            checkInputs();
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === "Backspace" && !input.value && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });

    function checkInputs() {
        let otp = "";
        inputs.forEach(input => otp += input.value);
        verifyBtn.disabled = otp.length !== 4;
    }

    // Submit OTP
    $(document).on('submit', '#otp-form', function(e) {
        e.preventDefault();

        let otp = "";
        inputs.forEach(input => otp += input.value);

        if (otp.length < 4) {
            $('.invalid-feedback').show().text('Please enter a valid 4-digit OTP.');
            return;
        }

        $('#verifyBtn').prop('disabled', true).text('Verifying...');
        $('.invalid-feedback').hide();

        $.ajax({
            url: base_url + '/verify-otp',
            type: 'POST',
            data: { otp: otp },
            dataType: "JSON",
            success: function(response) {
                if (response.status === true) {
                    if (response.is_password_reset) {
                        window.location.href = base_url + '/reset/' + response.otp;
                    } else {
                        localStorage.setItem("user_token", response.token ?? '');
                        window.location.href = base_url + '/login';
                    }
                } else {
                    $('.invalid-feedback').show().text(response.message || 'Invalid OTP.');
                    $('#verifyBtn').prop('disabled', false).text('Verify');
                }
            },
            error: function() {
                $('.invalid-feedback').show().text('Server error, please try again.');
                $('#verifyBtn').prop('disabled', false).text('Verify');
            }
        });
    });
</script>
@endsection

