<!-- partial:partials/_footer.html -->
<style>
    .changeColor:hover{
     color: blue !important;
    }
    .shaking {
    display: inline-block;
    transition: transform 0.2s ease-in-out;
   }
      .shaking:hover {
    animation: shake 2s linear infinite;
   }

  @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }

</style>
<footer class="footer" style="border:0px solid red;">
    <div class="container mb-30">
        <div class="col-lg-12 col-md-12 col-12 m-10" style="border:0px solid red;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12" style="margin-top: 16px;">
                    <h6>
                        Join Us & Discover More.<br/>
                        <div style="color:#0000FF;"><b>Download our App now!</b></div>
                    </h6>
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 54px; margin-top: 14px;">
                    <img src="{{ asset('assets/img/icons/iphone.png') }}" alt=" " height="80px" width="100px">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 26px;">
                    <img src="{{ asset('assets/img/icons/google-play-store.png') }}" alt=" " height="45px"
                         style="margin-top:20px;">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 64px;">
                    <img src="{{ asset('assets/img/icons/apple-store.png') }}" alt=" " height="45px"
                         style="margin-top:20px;">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 62px;">
                    <img src="{{ asset('assets/img/icons/huawei-app-gallery.png') }}" alt=" " height="45px"
                         style="margin-top:20px;">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top aos" style="border:0px solid red;">
        <div class="container" style="border:0px solid red;margin-top:-25px;">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-menu">
                    <!-- <div class="footer-bottom-logo">
                        <a href="{{ env('BASE_URL') }}" class="menu-logo">
                        <img src="assets/img/logo/Influencers Pro-01-01.png" class="img-fluid" alt="Logo">
                        </a>
                        </div> -->
                        <h5  style="font-size:15px;font-weight: bold;" class="footer-title">Company</h5>
                        <ul>
                            {{-- <li><a href="{{ env('BASE_URL') }}"><i class="fas fa-angle-right me-1"></i>Home</a></li> --}}
                            <li><a href="#"  data-bs-toggle="modal" data-bs-target="#aboutus"  class="changeColor">
                                {{-- <i class="fas fa-angle-right me-1"></i> --}}
                                
                                About Us</a></li>
                            <li><a href="{{ env('BASE_URL') }}/contact-us" class="changeColor"> 
                                {{-- <i class="fas fa-angle-right me-1"></i> --}}
                                Contact
                                    Us</a></li>
                            @if(session()->missing('User'))
                                <!-- <li><a href="{{ url('login') }}"><i class="fas fa-angle-right me-1"></i>Login</a></li> -->
                                <!-- <li><a href="{{ env('BASE_URL') . 'register' }}"><i class="fas fa-angle-right me-1"></i>Register</a> -->
                                </li>
                            @endif
                            <li><a href="{{ env('BASE_URL') }}/termcondition" class="changeColor"
                                 {{-- data-bs-toggle="modal" data-bs-target="#termsModal" --}}
                                 >
                                 {{-- <i class="fas fa-angle-right me-1"></i> --}}
                                        Terms of Use</a>
                            </li>
                            <li><a href="{{ env('BASE_URL') }}/privacy-policy" class="changeColor"
                                 {{-- data-bs-toggle="modal" data-bs-target="#privacyModal" --}}
                                 >
                                 {{-- <i class="fas fa-angle-right me-1"></i> --}}
                                 Privacy Policy</a>
                            </li>
                            <!-- <li><a href="{{ env('BASE_URL') }}subscriptions"><i class="fas fa-angle-right me-1"></i>Subscription</a>
                            </li> -->
                        </ul>

                    </div>
                </div>
                
                <div class="col-xl-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h5  style="font-size:15px;font-weight: bold;" class="footer-title">Socials</h5>
                        <ul style="margin-left: 14px;">
                            <li ><a href="https://www.facebook.com/profile.php?id=61564513546656&mibextid=LQQJ4d" class="icon shaking" target="_blank"><img
                                        src="{{ asset('assets/img/social-icon/fb.png') }}" alt="fb"
                                        width="25" style="margin-bottom: 5px;"
                                        height="25"></a></li>
                            <li><a href="https://www.instagram.com/influencerpro_org?igsh=MWIzb3pzMnQzMmFrcA==" class="icon shaking" target="_blank"><img
                                        src="{{ asset('assets/img/social-icon/instagram.png')}}"
                                        alt="insta" width="25" style="margin-bottom: 5px;"
                                        height="25"></a></li>
                            <li><a href="https://x.com/influencerpro_" class="icon shaking" target="_blank"><img
                                        src="{{ asset('assets/img/social-icon/twitter.png') }}"
                                        alt="twitter"    style="margin-bottom: 5px;"
                                        width="25" height="25"></a></li>
                            
                        </ul>
                    </div>
                </div>
            

            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">

            <div class="copyright1">
                <div class="row">
                    <div class="col-md-4"></div>
                 
                    <div class="col-md-4 text-center">
                        <!-- <ul class="nav footer-bottom-nav">
                        <li><a href="#">Chat</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of use</a></li>
                        </ul> -->
                        <div class="footer-bottom-logo">
                            <a href="{{ env('BASE_URL') }}" class="menu-logo">
                                <img src="{{ asset('assets/images/logo/Influencers Pro-01-01.png') }}" class="img-fluid shaking"
                                     alt="Logo" width="150">
                            </a>
                        </div>
                        <div class="copyright-text bilal-footer1"   style="margin-top: -14px;">
                            <p class="mb-0">© InfluencerPro.org 2024, All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 right-text">
                     
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- partial -->
