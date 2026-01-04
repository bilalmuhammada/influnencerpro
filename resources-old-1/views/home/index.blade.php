@extends('layout.web.master')
@section('content')
    <section class="contents" style="border:0px solid red;padding:0px 0 0px;margin:-10px;">
        <!-- <div class="container"> -->
        <div class="container-fluid" style="margin-top: 20px;border-top:0px solid #eee;height:auto;">
            <div class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="mySlides" style="background-color:#997045;height:400px;">
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;border:0px solid red;width:100%;margin-left:50px;line-height:20%;margin-top:100px;">
                                    <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trusted by over 2M+ users</h5>
                                    </div>
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">Get the perfect <span
                                            class="orange-text"><br>Influencers & Brands</span></h1>
                                    <p style="color:#fff;">With the world's #1 Influencers marketplace</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/banner-img.svg') }}" class="img-fluid" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------>
                    <div class="mySlides" style="background-color:#997045;height:400px;">
                        <div class="row">
                            <div class="col-md-8 col-lg-7">
                                <div class="banner-content aos" data-aos="fade-up"
                                     style="padding:2%;border-radius:2%;border:0px solid red;width:100%;margin-left:50px;line-height:20%;margin-top:100px;">
                                    <div class="rating d-flex" style="border:0px solid red;">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <h5 style="color:#fff;">Trused by over 2M+ users</h5>
                                    </div>
                                    <!-- <img src="assets/img/location/location-02.JPG" alt="image"> -->
                                    <h1 style="color:#fff;">Empowering Business
                                        <span class="orange-text"><br>Globally</span></h1>
                                    <p style="color:#fff;">With the world's #1 Influencers marketplace</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-5">
                                <div class="banner-imgs aos" style="width:300px;">
                                    <img src="{{ asset('assets/img/app-version.png') }}" class="img-fluid" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="section projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="padding:10px;">Our Categories</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 mx-auto" style="border:0px solid red;">
                @php $categories = getCategories(); @endphp
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-lg-2 col-md-6 col-sm-6" style="border:0px solid red;width:155px;">
                            <div class="project-item aos">
                                <div class="project-img">
                                    <a href="{{ env('BASE_URL') }}category/{{ $category->id }}/influencers"><img src="{{ $category->image_url }}" alt class="img-fluid"></a>

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
                        <h1 class="header-title" style="padding:10px;">Influencer Marketing Brief</h1>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        <h2>Influencers Market</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in.
                            Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus. Lorem ipsum
                            dolor sit amet consectetur. Nunc </p>
                        <h5>Nunc tristique neque tempor nisl feugiat lectus</h5>
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
                        <img class="img-fluid" src="{{ asset('assets/img/dash-1.PNG') }}" alt="App">
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
                        <h1 class="header-title" style="padding:10px;">Influencer Analyze Info</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-version-img text-center aos" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('assets/img/dash-1.PNG') }}" alt="App">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        <h2>Analyze any Influencer in the world</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in.
                            Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus. Lorem ipsum
                            dolor sit amet consectetur. Nunc </p>
                        <h5>Nunc tristique neque tempor nisl feugiat lectus</h5>
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
                <img class="img-fluid" src="{{ asset('assets/img/dash-1.PNG') }}" alt="App">
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
                        <h1 class="header-title" style="padding:10px;">Influencer Marketing Boost Info</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-version-img text-center aos" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('assets/img/dash-1.PNG') }}" alt="App">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        <h2>Fuel your best influencer marketing strategies</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in.
                            Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus. Lorem ipsum
                            dolor sit amet consectetur. Nunc </p>
                        <h5>Nunc tristique neque tempor nisl feugiat lectus</h5>
                    </div>
                </div>

                <!-- <div class="col-md-6 d-flex align-items-center">
                <div class="app-version-blk aos" data-aos="fade-up">
                <h2>Ensure success, every time</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in. Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus. Lorem ipsum dolor sit amet consectetur. Nunc </p>
                <h5>Nunc tristique neque tempor nisl feugiat lectus</h5>
                </div>
                </div>
                <div class="col-md-6">
                <div class="app-version-img text-center aos" data-aos="fade-up">
{{--                <img class="img-fluid" src="{{ asset('assets/img/dash-1.PNG' }}" alt="App">--}}
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
                        <h1 class="header-title" style="padding:10px;">Nationality Info </h1>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="app-version-blk aos" data-aos="fade-up">
                        <h2>Integrated analytics to guide your search</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in.
                            Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus. Lorem ipsum
                            dolor sit amet consectetur. Nunc </p>
                        <h5>Nunc tristique neque tempor nisl feugiat lectus</h5>
                        <br/>
                        <!-- <button class="t-btn" type="submit">Get started free</button> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-version-img text-center aos" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('assets/img/dash-1.PNG') }}" alt="App">
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
    </section>
    <section class="section app-version" style="background-color:#997045;padding:10px;">
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
    </section>
    <!---------new section----->
    <section class="section app-version" style="border:0px solid red;">
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
    </section>
    <!---------end new section---->
    <!---------new section----->
    <section class="section app-version" style="border:0px solid red;">
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
    </section>
    <!---------end new section---->
    <!---------new section----->
    <section class="section app-version" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="margin-top: 0px;">How it Works</h1>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12 mx-auto">

                    <div class="row justify-content-center">
                        &nbsp;
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">1</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Apply to join</h6>
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

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">2</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Compaign Matchmaking</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
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
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">3</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Choose your Ripple</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
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
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">4</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Secure Payment</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
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
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">5</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Watch the video</h6>
                                        <div class="play-btn">
                                            <a class="popup-video"
                                               href="https://www.youtube.com/watch?time_continue=3&amp;v=_X0eYtY8T_U"><i
                                                    class="fas fa-play"></i></a>
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
    <!---------new section----->
    <section class="section app-version" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="margin-top: -50px;padding:20px;">Overall Info- Advantages for
                            Brands from
                            Subscription(Pointers)</h1>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12 mx-auto">

                    <div class="row justify-content-center">
                        <!-- &nbsp; -->
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
    <!---------new section----->
    <section class="section app-version" style="border:0px solid red;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mx-auto">
                    <div class="section-header text-center aos">
                        <h1 class="header-title" style="margin-top: 0px;">How it Works</h1>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12 mx-auto">

                    <div class="row justify-content-center">
                        <!-- &nbsp; -->
                        <div class="col-xl-2 col-md-6" style="width:235px;">
                            <!-- <div class="row"> -->
                            <div class="listing" style="width:220px;padding:0px;border:0px solid red;">

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">1</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Apply to join</h6>
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

                                <div class="feature-item freelance-count aos" data-aos="fade-up" style="height:230px;">
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">2</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Compaign Matchmaking</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
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
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">3</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Choose your Ripple</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
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
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">4</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Secure Payment</h6>
                                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur.</p>
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
                                    <button
                                        style="width:70px;height:70px;border-radius:50%;color:#fff;background-color:#0504aa;">
                                        <h1 class="text-center">5</h1></button>

                                    <div class="feature-content course-count">
                                        <h6>Watch the video</h6>
                                        <div class="play-btn">
                                            <a class="popup-video"
                                               href="https://www.youtube.com/watch?time_continue=3&amp;v=_X0eYtY8T_U"><i
                                                    class="fas fa-play"></i></a>
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
                        <h1 class="header-title" style="margin-bottom: 0px;padding:10px;">Reviews of the
                            Influencers</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <!-------------------->

                <!-------------------->
                <div class="">
                    <div class="sliderx">
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
    font-size: 15px;
    font-style: italic;
    line-height: 25px;
    color: #999;
    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
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
                        <h1 class="header-title" style="margin-bottom: 0px;padding:10px;">Reviews of the Brands</h1>
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
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                        font-size: 15px;
                                        font-style: italic;
                                        line-height: 25px;
                                        color: #999;
                                        ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->
                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                        font-size: 15px;
                                        font-style: italic;
                                        line-height: 25px;
                                        color: #999;
                                        ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                        font-size: 15px;
                                        font-style: italic;
                                        line-height: 25px;
                                        color: #999;
                                        ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                        font-size: 15px;
                                        font-style: italic;
                                        line-height: 25px;
                                        color: #999;
                                        ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                    font-size: 15px;
                                    font-style: italic;
                                    line-height: 25px;
                                    color: #999;
                                    height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
                        <!-------------------->

                        <!-------------------->
                        <div class="review-blog" width="220" style="background-color: none !important; ">
                            <div class="circlez" style="border: 0px solid red;">
                                <div class="circleThumb"
                                     style="background-image:url({{ asset('assets/img/icon/icons/vinodz.png')}});"></div>
                            </div>
                            <div class="itmax" style="border:1px solid #0504aa;margin-top:15px;padding:10px;">
                                <div class="review-top d-flex align-items-center" style="">
                                    <div class="review-img">
                                    </div>
                                    <div class="review-info align-items-center" style="padding-top:25px;border:0px solid red;width:500px;text-align:center;
                                        font-size: 15px;
                                        font-style: italic;
                                        line-height: 25px;
                                        color: #999;
                                        ">
                                        <h3><a href="#" style="font-size: 14px;">Brayan</a></h3>
                                        <h5>Team Lead</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">5.0</span>
                                        </div>
                                    </div>
                                    <div class="test-quote-img">
                                        <img class="img-fluid" src="{{ asset('assets/img/test-quote.svg') }}" alt="quote">
                                    </div>
                                </div>
                                <div class="review-content" style="
                                        font-size: 15px;
                                        font-style: italic;
                                        line-height: 25px;
                                        color: #999;
                                        height: 200px;">
                                    <p>Lorem ipsum dolor sit amet, m dui, nibh faucibus aenean.Lorem ipsum dolor sit
                                        amet, nibh faucibus aenean.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
                                </div>
                            </div>
                        </div>
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
                        <h1 class="header-title">Our Clients</h1>
                    </div>
                </div>
            </div>
            <div class="marquee">
  <div class="marquee-content">
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
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-02.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-06.svg') }}" alt="">
    </div>



    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-01.svg') }}" alt="">
    </div>

    <div class="marquee-item">
      <img src="{{ asset('assets/img/company-logo-02.svg') }}" alt="">
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






  </div>
</div>

            <!-- </marquee> -->
@endsection
