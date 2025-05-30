

<style>
    
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
    .changeColor:hover{
     color: blue !important;
    }
</style>
<footer class="footer" style="border:0px solid red;">
    <div class="container mb-30" style="margin-top: 50px;">
        <div class="col-lg-12 col-md-12 col-12 m-10" style="border:0px solid red; margin-top:0px;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <h6>
                        Join Us & Discover More.<br/>
                        <div style="color:#0000FF;margin-top:6px;"><b>Download our App now!</b></div>
                    </h6>
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 54px;margin-top: -30px;">
                    <img src="{{ asset('assets/iphone.png') }}" alt=" " class="" height="80px" width="100px">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 26px;margin-top: -20px;">
                    <img src="{{ asset('assets/img/icon/icons/google-play-stores.png') }}" alt=" " class="shaking" height="45px"
                         style="margin-top:20px;">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 64px;margin-top: -20px;">
                    <img src="{{ asset('assets/img/icon/icons/apple-store.png') }}" alt=" " class="shaking" height="45px"
                         style="margin-top:20px;">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 62px;margin-top: -20px;">
                    <img src="{{ asset('assets/img/icon/icons/huawei-app-gallery.png') }}" alt=" " class="shaking" height="45px"
                         style="margin-top:20px;">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top aos" style="border:0px solid red;">
        <div class="container" style="border:0px solid red;margin-top:-25px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-menu">
                    <!-- <div class="footer-bottom-logo">
                        <a href="{{ env('BASE_URL') }}" class="menu-logo">
                        <img src="assets/img/logo/Influencers Pro-01-01.png" class="img-fluid" alt="Logo">
                        </a>
                        </div> -->
                        <h5  style="font-size:15px;font-weight: bold;" class="footer-title">Company</h5>
                        <ul >
                            {{-- <li><a href="{{ env('BASE_URL') }}"><i class="fas fa-angle-right me-1"></i>Home</a></li> --}}
                            <li><a href="#"  data-bs-toggle="modal" data-bs-target="#aboutus"  class="changeColor">
                                {{-- <i class="fas fa-angle-right me-1"></i> --}}
                                
                                About Us</a></li>
                            <li><a href="{{ env('BASE_URL') }}/contact-us" class="changeColor"> 
                                {{-- <i class="fas fa-angle-right me-1"></i> --}}
                                Contact Us</a>
                                </li>
                            @if(session()->missing('User'))
                                <!-- <li><a href="{{ url('login') }}"><i class="fas fa-angle-right me-1"></i>Login</a></li> -->
                                <!-- <li><a href="{{ env('BASE_URL') . 'register' }}"><i class="fas fa-angle-right me-1"></i>Register</a> -->
                                </li>
                            @endif
                            <li><a href="{{ env('BASE_URL') }}/termcondition" class="changeColor"
                                 {{-- data-bs-toggle="modal" data-bs-target="#termsModal" --}}
                                 >
                                 
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
                <!-- <div class="col-xl-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Help & Support</h2>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right me-1"></i>FAQ</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal"><i
                                        class="fas fa-angle-right me-1"></i>Terms & Conditions</a>
                            </li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal"><i
                                        class="fas fa-angle-right me-1"></i>Privacy Policy</a>
                            </li> -->
                            <!-- <li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Change Location</a></li> -->
                        <!-- </ul>
                    </div>
                </div> -->
                <!-- <div class="col-xl-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Other Links</h2>
                        <ul> -->
                            <!-- <li><a href="#"><i class="fas fa-angle-right me-1"></i>Browse Influencers</a></li> -->
                            <!-- <li><a href="#"><i class="fas fa-angle-right me-1"></i>Influencers Detail</a></li> -->
                            <!-- <li><a href="#"><i class="fas fa-angle-right me-1"></i>Browse Brands</a></li> -->
                            <!-- <li><a href="#"><i class="fas fa-angle-right me-1"></i>Brand Details</a></li> -->
                        <!-- </ul>
                    </div>
                </div> -->
                <div class="col-xl-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h5  style="font-size:15px;font-weight: bold;" class="footer-title">Socials</h5>
                        <ul style="margin-left: 14px;margin-top: 14px;">
                            <li ><a href="https://www.facebook.com/profile.php?id=61564513546656&mibextid=LQQJ4d" class="icon shaking" target="_blank"><img
                                        src="{{ asset('assets/img/social-icon/fb.png') }}" alt="fb"
                                        width="25" style="margin-bottom: 8px;"
                                        height="25"></a></li>
                            <li><a href="https://www.instagram.com/influencerpro_org?igsh=MWIzb3pzMnQzMmFrcA==" class="icon shaking" target="_blank"><img
                                        src="{{ asset('assets/icons/instagram.png') }}"
                                        alt="insta" width="25" style="margin-bottom: 8px;"
                                        height="25"></a></li>
                            <li><a href="https://x.com/influencerpro_" class="icon shaking" target="_blank"><img
                                        src="{{ asset('assets/img/social-icon/twitter.png') }}"
                                        alt="twitter"    style="margin-bottom: 8px;"
                                        width="25" height="25"></a></li>
                            {{-- <li><a href="http://www.youtube.com/@InfluencerPro_org" class="icon" target="_blank"><img
                                        src="{{ asset('assets/img/social-icon/youtube.png') }}" alt="youtube"
                                        width="30"
                                        height="30"></a></li> --}}
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Our Location</h2>
                        <iframe width="250"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767360.116125572!2d60.93867314919207!3d19.721934610035287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2s!4v1685620432319!5m2!1sen!2s"
                                style=" filter: grayscale(100%) invert(92%) contrast(63%);border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <br>
                        <span>We accepted : </span>
                        <img src="{{ asset('assets/img/card.png') }}" alt="cards" width="200" height="55">
                        <div class="social-icon d-flex"> -->
                            <!-- <span>Follow us on :</span>
                            <ul>
                            <li><a href="#" class="icon" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
                            <li><a href="#" class="icon" target="_blank"><i class="fab fa-instagram"></i> </a></li>
                            <li><a href="#" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
                            </ul> -->
                        <!-- </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">

            <div class="copyright">
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
                                <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid shaking"
                                     alt="Logo" style="margin-bottom: 4px;">
                            </a>
                        </div>
                        <div class="copyright-text bilal-footer1"   style="margin-bottom: 22px;">
                            <p class="mb-0" style="color:#00498e;font-weight: 500;font-size:12px; margin-top: -10px;">© InfluencerPro.org 2025, All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 right-text">
                     
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
<script>
    // $('.popup-video').magnificPopup({
    //     type: 'iframe'
    // });
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(carousel, 10000);
    }
</script>
</div>
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"><img src="{{ asset('assets/img/icon/top-icon.svg') }}" class="img-fluid" alt></span>
</button>
<script src="assets/js/feather.min.js"></script>
{{--<script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>--}}

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>

{{--<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ asset('assets/js/slick.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>


<script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

<script src="{{ asset('assets/js/profile-settings.js') }}"></script>
<script src="{{ asset('assets/js/step-form/script.js') }}"></script>
<script src="{{ asset('assets/js/custom.js?v=') . date('ymdhis') }}"></script>
<script src="{{ asset('assets/js/footer.js?v=') . date('ymdhis') }}"></script>



<script src="https://cdn.jsdelivr.net/npm/lobibox@1.2.7/dist/js/lobibox.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<script>
    $(document).ready(function () {
        ajax_setup();
        $('.select2').select2();


    })
</script>

@yield('page_scripts')
