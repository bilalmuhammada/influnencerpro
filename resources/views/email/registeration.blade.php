<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>InfluencerPro - User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      color: #333;
      text-align: center;
      background-color: #fff;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 40px auto;
      padding: 30px;
      border: 1px solid #eee;
      border-radius: 8px;
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .logo img {
      width: 150px;
    }
    .otp {
      font-size: 36px;
      font-weight: bold;
      color: #000;
      text-align: center;
      margin: 30px 0;
      letter-spacing: 3px;
    }
    .footer {
      font-size: 10px;
      color: #666;
      margin-top: 25px;
      text-align: center;
    }
    .divider {
      border-top: 2px dashed #f1c40f;
      margin: 25px auto;
      width: 80%;
    }
    .social-icons {
      text-align: center;
      margin: 15px 0;
    }
    .social-icons img {
      width: 28px;
      margin: 0 8px;
      vertical-align: middle;
    }
    a {
      color: #1b3c8e;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- Centered Logo -->
    <div class="logo">
      <a href="{{ env('BASE_URL') }}">
        <img src="{{ asset('assets/img/logo/InfluencersPro-011.png') }}" alt="InfluencerPro Logo" class="img-fluid shaking">
      </a>
    </div>

    <!-- Greeting -->
    <p>Hey ,<strong>{{ $details['name'] }}</strong></p>
    <p>Welcome to <strong>InfluencerPro</strong>! Please verify your email using the OTP:</p>

    <!-- OTP Code -->
    <div class="otp">{{ $details['otp'] }}</div>

    <p class="footer">If you did not request this verification, please ignore this email.</p>

    <div class="divider"></div>

    <!-- Centered Social Icons -->
    <div class="social-icons">
      <a href="https://instagram.com/yourpage">
        <img src="{{ asset('assets/img/social-icon/insta.png') }}" alt="Instagram">
      </a>
      <a href="https://facebook.com/yourpage">
        <img src="{{ asset('assets/img/social-icon/fb.png') }}" alt="Facebook">
      </a>
      <a href="https://twitter.com/yourpage">
        <img src="{{ asset('assets/img/social-icon/twitter.png') }}" alt="Twitter">
      </a>
      <a href="https://yourwebsite.com">
        <img src="{{ asset('assets/img/social-icon/web.png') }}" alt="Website">
      </a>
    </div>

    <!-- Footer -->
    <p class="footer">&copy; {{ date('Y') }} InfluencerPro. All rights reserved.</p>

  </div>

</body>
</html>
