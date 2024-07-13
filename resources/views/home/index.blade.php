@extends('layout.web.master')
<style>

    .numberstyle{
        font-size: 55px;
    font-weight: bolder;
    color: goldenrod;
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
/* Default text style */
.responsive-text {
    color: rgb(169, 128, 25) !important;
    /* font-size: 1.5rem; Use responsive units like rem */
    line-height: 1.5; /* Adjust line height for readability */
    /* text-align: center; Center the text for better visibility */
}

/* Media queries for different screen sizes */
@media (max-width: 1200px) {
    .responsive-text {
        font-size: 1.25rem;
    }
}

@media (max-width: 992px) {
    .responsive-text {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .responsive-text {
        font-size: 0.875rem;
    }
}

@media (max-width: 576px) {
    .responsive-text {
        font-size: 0.75rem;
    }
}

   
</style>
@section('content')
    <section class="contents">
        <!-- <div class="container"> -->
        <div class="container-fluid" style="border-top:0px solid #eee;height:auto;">
            <div class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/11.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;line-height:20%;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Get the perfect  --}}
                                        <span
                                            class="orange-text"><br>Brand</span></h1>
                                    <p class="responsive-text">World’s Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace to Join!</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/sebimg1.JPEG') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Empowering Business --}}
                                        <span class="orange-text"><br>Influncers</span></h1>
                                        <p style="color:rgb(169, 128, 25);white-space: nowrap;">Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace <br> to    
                                            hire for Business Brands Marketing Worldwide!
                                            </p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/12.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;line-height:20%;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Get the perfect  --}}
                                        <span
                                            class="orange-text"><br>Brand</span></h1>
                                    <p class="responsive-text">World’s Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace to Join!</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/4.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Empowering Business --}}
                                        <span class="orange-text"><br>Influncers</span></h1>
                                    <p style="color:rgb(169, 128, 25);;white-space: nowrap;">Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace </br>to    
                                        hire for Business Brands Marketing Worldwide!
                          </p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/5.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;line-height:20%;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Get the perfect  --}}
                                        <span
                                            class="orange-text"><br>Brand</span></h1>
                                    <p class="responsive-text">World’s Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace to Join!</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/6.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Empowering Business --}}
                                        <span class="orange-text"><br>Influncers</span></h1>
                                    <p style="color:rgb(169, 128, 25);white-space: nowrap;">Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace <br>  to  
                                        hire for Business Brands Marketing Worldwide!
                          </p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/7.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;line-height:20%;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Get the perfect  --}}
                                        <span
                                            class="orange-text"><br>Brand</span></h1>
                                    <p class="responsive-text">World’s Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace to Join!</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/8.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Empowering Business --}}
                                        <span class="orange-text"><br>Influncers</span></h1>
                                    <p style="color:rgb(169, 128, 25);white-space: nowrap;">Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace <br> to    
                                        hire for Business Brands Marketing Worldwide!
                          </p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/9.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;line-height:20%;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Get the perfect  --}}
                                        <span
                                            class="orange-text"><br>Brand</span></h1>
                                    <p class="responsive-text">World’s Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace to Join!</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/10.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Empowering Business --}}
                                        <span class="orange-text"><br>Influncers</span></h1>
                                    <p style="color:rgb(169, 128, 25);white-space: nowrap;">Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace <br> to    
                                        hire for Business Brands Marketing Worldwide!
                          </p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/111.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;line-height:20%;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Get the perfect  --}}
                                        <span
                                            class="orange-text"><br>Brand</span></h1>
                                    <p class="responsive-text">World’s Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace to Join!</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="banner-imgs mySlides" style="padding-top:150px;height:550px;background-size: cover;background-image:url({{ asset('assets/banner-image/12.jpg') }});">
                       
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;width:100%;margin-left:50px;">
                                    {{-- <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div> --}}
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">
                                        {{-- Empowering Business --}}
                                        <span class="orange-text"><br>Influncers</span></h1>
                                    <p style="color:rgb(169, 128, 25);white-space: nowrap;">Best Celebrity & Pro-Influencers, Media Artists & Talents Marketplace <br> to    
                                        hire for Business Brands Marketing Worldwide!
                          </p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!------------------>
                   
                   <!------------------>
            

                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="section projects" style="margin-top: 10px;">
        <div class="container-fluid">
        <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title">Multi Categories</h1>
                    </div>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-12 col-md-12 mx-auto mb-3">
                    <div class="section-header text-center aos">
                        <img src="{{ asset('assets/img/social-icon/insta.png') }}" alt="" width="60px" height="60px" style="margin-right: 10px;">
                        <img src="{{ asset('assets/img/social-icon/fb.png') }}" alt="" width="60px" height="60px"style="margin-right: 10px;" >
                        <img src="{{ asset('assets/img/social-icon/tiktok.png') }}" alt="" width="60px" height="60px" style="margin-right: 10px;" >
                        <img src="{{ asset('assets/img/social-icon/youtube.png') }}" alt="" width="60px" height="60px"  style="margin-right: 10px;">
                        <img src="{{ asset('assets/img/social-icon/twitter.png') }}" alt="" width="60px" height="60px"style="margin-right: 10px;" >
                        <img src="{{ asset('assets/img/social-icon/snapchat.png') }}" alt="" width="60px" height="60px" style="margin-right: 10px; border-radius: 2px;">
                        <img src="{{ asset('assets/img/social-icon/pinterest.png') }}" alt="" width="60px" height="60px" style="margin-right: 10px;" >
                        <img src="{{ asset('assets/img/social-icon/web.png') }}" alt="" width="60px" height="60px" style="margin-right: 10px;" >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section projects">
        <div class="container-fluid">
            <div class="col-lg-8 col-md-12 col-12 mx-auto" style="border:0px solid red;">
                @php $categories = getCategories(); @endphp
                <div class="row mx-auto">
                    @foreach($categories as $category)
                        <div class="col-lg-2 col-md-6 col-sm-6 mx-auto" style="border:0px solid red;width:170px;border:0px solid red;">
                            <div class="project-item aos">
                                <div class="project-img">
                                <a href="{{ env('BASE_URL') }}category/{{ $category->id }}/influencers"><img src="{{ $category->image_url }}" alt="cats"  class="img-fluid"></a>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="project-content">
                                        <!-- <h4>20</h4> -->
                                        <h5><a href="{{ env('BASE_URL') }}category/{{ $category->id }}/influencers">{{ $category->name }}</a></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                </div>
            </div>
        </div>

    </section>
    <section class="section app-version">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <h1 class="header-title" style="padding-bottom:18px;">Influencer Marketing</h1>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        {{-- <h2>Influencers Market</h2> --}}
                        <p>Influencer Marketing became the strongest social media marketing in the World, with effective more than 75% of Businesses Revenue Growth & 82% of Business Leads Generated in 2023. Pro-Influencers drive Brand Affirmation & Message to Business Target Audience at fastest pace through a perceived Latest-Trend Awareness and Influential Social Impact in their professional field. </p>
                        {{-- <h5>Nunc tristique neque tempor nisl feugiat lectus</h5> --}}
                        <!-- <br/>
                        <div class="col-md-8 align-items-center">
                        <div class="form-group form-focus">
                        <input type="email" class="form-control floating">
                        <label class="focus-label">Email </label>
                        </div>
                        </div> -->
                        <!-- <button class="t-btn" type="submit">Start Now</button>
                        <br/>
                        <br/> -->
                        <!-- <span class="checkmark"></span> You agree to the InfluencerPro <a href="privacy-policy.html">User Agreement, Privacy Policy,</a> and <a href="privacy-policy.html">Cookie Policy</a>. -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-version-img text-center aos" data-aos="fade-up">
                        <!-- <img class="img-fluid" src="{{ asset('assets/img/app-version.png') }}" alt="App"> -->
                        <img class="img-fluid" src="{{ asset('assets/img/blog/1.avif') }}" alt="App">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section app-version">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <h1 class="header-title" style="padding-bottom:18px;">Business Marketing</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-version-img text-center aos" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('assets/banner-image/marketing.jpg') }}" alt="App">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        {{-- <h2>Business Marketing</h2> --}}
                        <p>In today’s globalized and highly competitive environment, Businesses play a fundamental role in worldwide economy growth by fostering innovation & providing goods and services, as well contributes to society by supporting communities and promoting social and economic developments. 
                            Successful businesses must adapt to changing social business marketing & Latest-Trend Awareness in order to stay successful.
                             </p>
                        {{-- <h5>Nunc tristique neque tempor nisl feugiat lectus</h5> --}}
                    </div>
                </div>

                <!-- <div class="col-md-6 d-flex align-items-center">
                <div class="app-version-blk aos" data-aos="fade-up">
                <h2>Minute-by-minute access to any compaign</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in. Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus. Lorem ipsum dolor sit amet consectetur. Nunc </p>
                <h5>Nunc tristique neque tempor nisl feugiat lectus</h5>
                </div>
                </div>
                <div class="col-md-6">
                <div class="app-version-img text-center aos" data-aos="fade-up">
                <img class="img-fluid" src="{{ asset('assets/img/blog/2.jpg') }}" alt="App">
                </div>
                </div> -->

            </div>
        </div>
    </section>
    <section class="section app-version">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <h1 class="header-title" style="padding-bottom:18px;">InfluencerPro</h1>
                    </div>
                </div>
              
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        {{-- <h2>InfluencerPro</h2> --}}
                        <p>InfluencerPro is number 1 worldwide visionary force at the intersection of Influencer collaborations & a suite of innovative direct-connection between Influencers & Businesses, offering direct access to millions of Celebrity & 
                            Pro-Influencers, Media Artists & Talents database in over 30 business categories, where Business Brands gain access to Micro, Nano, Mega & Celebrity Influencers profiles with easy Filter & Chat function, that helps Business Brands generate high Revenues & Guaranteed ROI on their marketing budget-set. 
                             </p>
                        {{-- <h5>Nunc tristique neque tempor nisl feugiat lectus</h5> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-version-img text-center aos" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('assets/img/blog/3.webp') }}" alt="App">
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="section app-version">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <h1 class="header-title">Join Us </h1>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        <h2><a href="{{ env('BASE_URL') . 'register?role=influencer' }}">Influncer </a></h2>
                        <p>Join InfluencerPro and be a Pro-Influncer to receive direct Collaborations from all Business Brands Worldwide!</p>
                        {{-- <h5>Nunc tristique neque tempor nisl feugiat lectus</h5> --}}
                        <br/>
                        <!-- <button class="t-btn" type="submit">Get started free</button> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        <h2><a href="{{ env('BASE_URL') . 'register?role=brand' }}">Brand</a></h2>
                        <p>Register InfluencerPro & Gain access to Millions of Pro-Influencers Database which allows you to view Influencers Profiles & Social Platforms, Multi-Country Availability, Direct Chat, Price Offers & Collaborations!</p>
                        {{-- <h5>Nunc tristique neque tempor nisl feugiat lectus</h5> --}}
                        <br/>
                        <!-- <button class="t-btn" type="submit">Get started free</button> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{--<section class="section app-version">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <h1 class="header-title" style="padding:10px;">Demographic Info </h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-version-img text-center aos" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('assets/img/dash-1.PNG') }}" alt="App">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        <h2>Understand audience demographic</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in.
                            Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus. Lorem ipsum
                            dolor sit amet consectetur. Nunc </p>
                        <br/>
                        <br/>
                        <br/>

                        <!-- <button class="t-btn" type="submit">Request Demo</button> -->
                        <br/>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    {{-- <section class="section app-version" style="background-color:#997045;padding:10px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos" data-aos="fade-up">
                        <h1 class="header-title" style="padding:10px;">Advantage info</h1>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        <h2 class="text-center">Drive real ROI with influencer marketing</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl
                            feugiat lectus in. Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet
                            faucibus. Lorem ipsum dolor sit amet consectetur. Nunc </p>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </section> --}}
    <!---------new section----->
    {{-- <section class="section app-version" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="padding:10px;">Overall Info</h1>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12 mx-auto">

                    <div class="row justify-content-center">
                        &nbsp;
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-01.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Influencer Database</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-02.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Influencer Audience Insights</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-02.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Performance Dashboard</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-01.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Content Management System</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-02.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Campaign Reports</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!---------end new section---->
    <!---------new section----->
    {{-- <section class="section app-version" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="margin-top: -50px;padding:20px;">Overall Info- Advantages for
                            Influencers from Subscription</h1>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12  mx-auto" style="border:0px solid red;">
                    <div class="row justify-content-center">
                        <!-- &nbsp; -->
                        <div class="col-xl-2 col-md-6" style="border:0px solid red;width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-01.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Influencer Database</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-02.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Influencer Audience Insights</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-02.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Performance Dashboard</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-01.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Content Management System</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;border:0px solid red;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:220px;">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/img/icon/icon-02.png') }}" class="img-fluid" alt>
                                    </div>
                                    <div class="feature-content course-count">
                                        <h6>Campaign Reports</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!---------end new section---->
    <!---------new section----->
    <section class="section app-version" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="margin-top: -49px">How it Works - Influencers</h1>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12 mx-auto">

                    <div class="row justify-content-center">
                        &nbsp;
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                   
                                        <h1  style="color: goldenrod;" class=" numberstyle text-center">1</h1>

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Select Category</h6>
                                        <p style="font-size: 12px ;  ">Choose the right category      </p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">2</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Create Profile </h6>
                                        <p style="font-size: 12px;">Fill in Profile Details.</p>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">3</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Fill Socials URL </h6>
                                        <p style="font-size: 12px;">Place Social Platforms URLs .</p>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">4</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Receive Brand Collaborations </h6>
                                        <p style="font-size: 12px;">Start receiving Brands Collaborations .</p>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">5</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Watch the video</h6>
                                        <div class="play-btn">
                                            <a class="popup-video"
                                               href="https://www.youtube.com/watch?time_continue=3&amp;v=_X0eYtY8T_U"><i
                                                    class="fas fa-play text-primary"></i></a>
                                        </div>

                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section app-version" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="margin-top: -40px">How it Works - Brands</h1>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12 mx-auto">

                    <div class="row justify-content-center">
                        <!-- &nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">1</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Register Brand Profile </h6>
                                        <p style="font-size: 12px;">Create Brand Profile.</p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">2</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Filter Influencers </h6>
                                        <p style="font-size: 12px;">Filter your requirements .</p>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">3</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Select Influencers & Talents </h6>
                                        <p style="font-size: 12px;">Favorite from Options.</p>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">4</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6 style="  font-weight: bolder;">Chat & Book</h6>
                                        <p style="font-size: 12px; ">Chat & Hire Influencers & Talents for your Brand.</p>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    {{-- <button style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;"> --}}
                                        <h1 class="text-center numberstyle">5</h1>
                                    {{-- </button> --}}

                                    <div class="feature-content course-count">
                                        <h6>Watch the video</h6>
                                        <div class="play-btn">
                                            <a class="popup-video"
                                               href="https://www.youtube.com/watch?time_continue=3&amp;v=_X0eYtY8T_U"><i
                                                    class="fas fa-play text-primary" ></i></a>
                                        </div>

                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!---------end new section---->
    <!-----------deleted--------->
    <section class="section app-version">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="margin-top: -23px">
                            Influencer Reviews</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <!-------------------->

                <!-------------------->
                <div class="row">
                    <div class="sliderx">
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/image3.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;font-size: 15px; line-height: 25px;">
                                        <h3><a href="#" style="font-size: 14px;">Alena </a></h3>
                                        <h5>Business, Lifestyle, Travel</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style="font-size: 15px;line-height: 25px;height: 200px;">
                                    <p>I feel like an elevated Pro-Influencer in InfluencerPro and already receiving lots of Paid-Collaborations from Brands….</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/image8.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;font-size: 15px;   line-height: 25px;">
                                        <h3><a href="#" style="font-size: 14px;">Delilah </a></h3>
                                        <h5>Blogger, Speaker</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style=" font-size: 15px;line-height: 25px; height: 200px;">
                                    <p> Become a Professional Influencer and start Earning from influencing career. Highly recommend to join!</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/image6.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center; font-size: 15px;line-height: 25px;">
                                        <h3><a href="#" style="font-size: 14px;">Oliver</a></h3>
                                        <h5>Travel, Fitness, Retail</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style=" font-size: 15px; line-height: 25px;height: 200px;">
                                    <p>InfluencerPro has a professional and organized profile creation function in which I can mark my calendar availability in 4 countries.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/image5.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center; font-size: 15px; line-height: 25px; ">
                                        <h3><a href="#" style="font-size: 14px;">Freya</a></h3>
                                        <h5>Real Estate, Finance </h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style=" font-size: 15px; line-height: 25px;height: 200px;">
                                    <p>Best Influencer Marketplace to be part of, and all my influencer friends have joined already.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/image1.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;  font-size: 15px; line-height: 25px; ">
                                        <h3><a href="#" style="font-size: 14px;">Oliver</a></h3>
                                        <h5>Singer, Entertainment</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style=" font-size: 15px;line-height: 25px; height: 200px;">
                                    <p>I’ve loved using it, simple and easy profile creation and Brand collaborations are via just a direct chat. Recommend to all Influencers!!.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/image2.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center; font-size: 15px;line-height: 25px; ">
                                        <h3><a href="#" style="font-size: 14px;">Evelyn</a></h3>
                                        <h5> Creative, Foodie, Family</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style="font-size: 15px;line-height: 25px;height: 200px;">
                                    <p>InfluencerPro makes my collaborations easy, saves time and I’m earning from my influencering career.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                    
                        <!-------------------->
                        <!-------------------->
                     
                        <!-------------------->


                        <!--------final touch------------>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------->
    <section class="section app-version">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="margin-top: -31px;">Brand Reviews  </h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="row">
                    <div class="sliderx">
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/profiles/img1.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;font-size: 15px;line-height: 25px; ">
                                        <h3><a href="#" style="font-size: 14px;">Lucas</a></h3>
                                        <h5>Commertial Director</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style="font-size: 15px;line-height: 25px;  height: 200px;">
                                    <p>Well organized and can find hundreds of Marketing Influencers in just a click.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/profiles/2.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;font-size: 15px; line-height: 25px; ">
                                        <h3><a href="#" style="font-size: 14px;"> Emily</a></h3>
                                        <h5>Marketing Manager</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style=" font-size: 15px; line-height: 25px;height: 200px;">
                                    <p>InfluencerPro saves my time and offers specialized Influencers with availability calendar in my preferred business category with direct chats..</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/profiles/imag3.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center; font-size: 15px; line-height: 25px;  ">
                                        <h3><a href="#" style="font-size: 14px;">Grace</a></h3>
                                        <h5>Social Media Manager</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style="font-size: 15px;line-height: 25px; height: 200px;">
                                    <p>Made my work so easy, finding Professional Influencers and Collaboration negotiations were always very hard. Hence, with InfluencerPro I can directly see full profiles and collab prices..</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/profiles/imag4.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center; font-size: 15px;  line-height: 25px;  ">
                                        <h3><a href="#" style="font-size: 14px;">George</a></h3>
                                        <h5>Business Owner </h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <i class="fas fa-star"></i> --}}
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style="font-size: 15px; line-height: 25px;   height: 200px;">
                                    <p>As a start-up business owner, I feel safe and assured to hire right fit influencers at any time I want to market my business.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/profiles/imag5.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center; font-size: 15px; line-height: 25px; ">
                                        <h3><a href="#" style="font-size: 14px;">Camila</a></h3>
                                        <h5>Events Manager</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style=" font-size: 15px;line-height: 25px;  height: 200px;">
                                    <p>Can hire Talents, Speakers, Singers, Dancers and DJs for parties.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/profiles/imag6.jpg')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid  #997045;margin-top:50px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                    font-size: 15px;
                                   
                                    line-height: 25px;
                                   ">
                                        <h3><a href="#" style="font-size: 14px;">Audrey</a></h3>
                                        <h5>CEO</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            {{-- <span class="average-rating">5.0</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div> --}}
                                </div>
                                <div class="review-content" style=" font-size: 15px; line-height: 25px; height: 200px;">
                                    <p>My Team is happy to use InfluencerPro for our Social Media Marketing.
                                        Recommend for all!.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                     
                        <!-------------------->

                        <!-------------------->
                      
                        <!-------------------->

                        <!-------------------->
                       
                        <!-------------------->

                        <!-------------------->
                        
                        <!-------------------->

                        <!--------final touch------------>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------->
    <section class="section app-version">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center aos">
                        <h1 class="header-title">Brands</h1>
                    </div>
                </div>
            </div>
            <div class="marquee" style="margin-top:38px">
  <div class="marquee-content">
    {{-- <div class="marquee-item">
      <img src="{{ asset('assets/img/company/company1.png') }}"  style="margin-top: -39px; height: 132px; width: 123px;" alt="">
    </div> --}}

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company/Celine.svg') }}" alt="">
    </div>

    {{-- <div class="marquee-item">
      <img src="{{ asset('assets/img/company/Fiat Black.png') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
    </div> --}}

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company/company2.png') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company/company3.png') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company/mark.webp') }}" style="margin-top: -39px; height: 132px; width: 123px;" alt="">
    </div>



    <div class="marquee-item">
        <img src="{{ asset('assets/img/company/company4.jpg') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
    </div>

    <div class="marquee-item">
        <img src="{{ asset('assets/img/company/company5.png') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
    </div>
    {{-- <div class="marquee-item">
        <img src="{{ asset('assets/img/company/company1.png') }}"  style="margin-top: -26px; height: 79px;  width: 123px;;" alt="">
      </div> --}}
  
      <div class="marquee-item">
        <img src="{{ asset('assets/img/company/Celine.svg') }}" alt="">
      </div>
  
      {{-- <div class="marquee-item">
        <img src="{{ asset('assets/img/company/Fiat Black.png') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
      </div>
   --}}
      <div class="marquee-item">
        <img src="{{ asset('assets/img/company/company2.png') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
      </div>
  
      <div class="marquee-item">
        <img src="{{ asset('assets/img/company/company3.png') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
      </div>
  
      <div class="marquee-item">
        <img src="{{ asset('assets/img/company/mark.webp') }}" style="margin-top: -39px; height: 132px; width: 123px;" alt="">
      </div>
  
  
  
      <div class="marquee-item">
          <img src="{{ asset('assets/img/company/company4.jpg') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
      </div>
  
      <div class="marquee-item">
          <img src="{{ asset('assets/img/company/company5.png') }}" style="margin-top: -39px; height: 132px; width: 123px;"  alt="">
      </div>
  
    {{-- <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-02.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-03.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-04.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-02.svg') }}" alt="">
    </div>
    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-03.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-04.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-02.svg') }}" alt="">
    </div> --}}






  </div>
</div>

            <!-- </marquee> -->
@endsection
