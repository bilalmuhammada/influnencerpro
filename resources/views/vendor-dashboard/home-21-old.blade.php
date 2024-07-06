@extends('layout.master')
@section('content')
    {{--    @dd(request()->all())--}}

    <section style="border-top:2px solid #eee;">
        <br/>
        <div class="row">
            <div class="col-md-12 ">
                <div class="input-box text-center mx-auto"
                     style="border:none;height:55px;width:570px;border:1px solid #999;border-radius:30px;text-align:center;">
                    <input type="text" class="middle-search" placeholder=" Search..."
                           style="border:none;height:50px;width:500px;"><i class="fa fa-search"></i>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="container" style="max-width: 1440px !important;">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar" style="border:0px solid red;">
                    <form action="{{ env('BASE_URL') }}vendor/influencers-filter">
                        <input type="hidden" name="source" value="web">
                        <div class="card search-filter" style="border:0px solid red;">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title mb-0">FILTERS</h4>
                                <a href="{{ env('BASE_URL') }}vendor/dashboard">Clear All</a>
                            </div>
                            <div class="card-body">
                                {{--                                <div class="filter-widget">--}}
                                {{--                                    <h4>Add Skills</h4>--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <span class="badge badge-pill badge-skill">+ All Professionals</span>--}}
                                {{--                                        <span class="badge badge-pill badge-skill">+ Performers</span>--}}
                                {{--                                        <span class="badge badge-pill badge-skill">+ Voice overs</span>--}}
                                {{--                                        <span class="badge badge-pill badge-skill">+ Influencers</span>--}}
                                {{--                                        <input type="text" class="form-control">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="filter-widget">
                                    @php $categories = getCategories();  @endphp
                                    <h4>Influencers category</h4>
                                    <div class="form-group">
                                        <select class="form-control select2" name="category_id[]" multiple>
                                            <option value="">Select Category</option>
                                            @forelse($categories as $category)
                                                <option
                                                    value="{{ $category->id }}"
                                                    @if(request()->category_id && in_array($category->id, request()->category_id))
                                                    selected
                                                    @endif>{{ $category->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>


                                <div class="filter-widget">
                                    <h4>Search by Platform</h4>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span style="font-size:11px;position:relative;top:-7px;">
                                                <img src="{{ asset('assets/img/social-icon/insta.png')}}" alt="insta"
                                                     width="20">
                                                Instagram</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="instagram"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->instagram) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>

                                            <div class="col-md-12">
                                                <span style="font-size:11px;position:relative;top:-7px;">
                                                <img src="{{ asset('assets/img/social-icon/fb.png')}}" alt="fb"
                                                     width="20">
                                                Facebook</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="facebook"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->facebook) {

                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                            <div class="col-md-12">
                                                <span style="font-size:11px;position:relative;top:-7px;">
                                                <img src="{{ asset('assets/img/social-icon/youtube.png')}}" alt="youtube"
                                                     width="20">
                                                Youtube</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="youtube"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->youtube) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                            <div class="col-md-12">
                                                <span style="font-size:11px;position:relative;top:-7px;">
                                                <img src="{{ asset('assets/img/social-icon/tiktok.png')}}" alt="tiktok"
                                                     width="20">
                                                TikTok
                                                </span>
                                                <label class="switch">
                                                    <input type="checkbox" name="tiktok"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->tiktok) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="filter-widget">
                                    <h4>Search by Following</h4>


                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span
                                                    style="font-size:11px;position:relative;top:-7px;">Nano(1-10k)</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="nano"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->nano) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                            <div class="col-md-12">
                                            <span
                                                style="font-size:11px;position:relative;top:-7px;font-weight:500;margin-bottom:10px;">Micro(10-100k)</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="micro"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->micro) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                            <div class="col-md-12">
                                            <span
                                                style="font-size:11px;position:relative;top:-7px;">Macro(100K-1M)</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="macro"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->macro) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                            <div class="col-md-12">
                                            <span
                                                style="font-size:11px;position:relative;top:-7px;">Mega(more than 1M)</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="mega"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->mega) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="filter-widget">
                                    <h4>Search by name</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type name..."
                                               name="influencer_name"
                                               value="@if(isset(request()->influencer_name)) {{ request()->influencer_name }} @endif">
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4>Gender</h4>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span style="font-size:11px;position:relative;top:-7px;">Male</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="male"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->male) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                            <div class="col-md-12">
                                            <span
                                                style="font-size:11px;position:relative;top:-7px;font-weight:500;margin-bottom:10px;">Female</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="female"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->female) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                            <div class="col-md-12">
                                                <span style="font-size:11px;position:relative;top:-7px;">Binary</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="other"
                                                    <?php
                                                        if (isset(request()->category_id)) {
                                                            if (request()->other) {
                                                                echo "checked";
                                                            }
                                                        } elseif (!isset(request()->category_id)) {
                                                            echo "checked";
                                                        }
                                                        ?>
                                                    >
                                                    <span class="slider round"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="filter-widget">
                                    <h4>Age</h4>
                                    <div id="slider-range"></div>
                                    <div class="row slider-labels">
                                        <div class="col-xs-12 caption">
                                            <span id="slider-range-value1"></span> - <span
                                                id="slider-range-value2"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form>
                                                <input type="hidden" name="min_value" id="min-value"
                                                       value="@if(isset(request()->min_value)) {{ request()->min_value }} @else 0 @endif">
                                                <input type="hidden" name="max_value" id="max-value"
                                                       value="@if(isset(request()->max_value)) {{ request()->max_value }} @else 50 @endif">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-widget">
                                    <h4>Spoken languages</h4>
                                    <div class="form-group">
                                        @php $spoken_languages = getSpokenLanguages(); @endphp
                                        <select class="form-control select2" name="spoken_language_id">
                                            <option value="">Select languages</option>
                                            @forelse($spoken_languages as $language)
                                                <option value="{{ $language->id }}"
                                                        @if(isset(request()->spoken_language_id) && request()->spoken_language_id == $language->id) selected @endif>{{ $language->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4>Ethnicity Look</h4>
                                    <div class="form-group">
                                        @php $ethnicities = getEthnicity(); @endphp
                                        <select class="form-control select2" name="ethnicity_id">
                                            <option value="">Select Ethnicity</option>
                                            @forelse($ethnicities as $ethnicity)
                                                <option value="{{ $ethnicity->id }}"
                                                        @if(isset(request()->ethnicity_id) && request()->ethnicity_id == $ethnicity->id) selected @endif>{{ $ethnicity->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4>Nationality</h4>
                                    <div class="form-group">
                                        @php $countries = getCountries(); @endphp
                                        <select class="form-control select2 nationality_id" multiple
                                                name="country_id[]">
                                            <option value="">Select Nationality</option>
                                            @forelse($countries as $country)
                                                <option value="{{ $country->id }}"
                                                        @if(isset(request()->country_id) && in_array($country->id, request()->country_id)) selected @endif>{{ $country->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4>Based in</h4>
                                    <div class="form-group">
                                        @php
                                            $country_id = 1;
                                            if(isset(request()->state_id)){
                                                $country_id = request()->country_id;
                                            }
                                            $states = getStateByCountryId($country_id);
                                        @endphp
                                        <select class="form-control select2" name="state_id" id="state_id">
                                            <option value="">Select Based</option>
                                            @forelse($states as $state)
                                                <option value="{{ $state->id }}"
                                                        @if(isset(request()->state_id) && request()->state_id == $state->id) selected @endif>{{ $state->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4>Region</h4>
                                    <div class="form-group">
                                        @php
                                            $state_id = 1;
                                                if(isset(request()->state_id)){
                                                    $state_id = request()->state_id;
                                                }
                                                $cities = getCityByStateId($state_id);
                                        @endphp
                                        <select class="form-control select2" name="city_id" id="city_id">
                                            <option value="">Select Region</option>
                                            @forelse($cities as $city)
                                                <option value="{{ $city->id }}"
                                                        @if(isset(request()->city_id) && request()->city_id == $city->id) selected @endif>{{ $city->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="filter-widget">
                                    <h4>Hair Type</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Hair Type..."
                                               name="hair_type"
                                               value="@if(isset(request()->hair_type)) {{ request()->hair_type }} @endif">
                                    </div>
                                </div>


                                <div class="filter-widget">
                                    <h4>Hair Color</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type Hair Color..."
                                               name="hair_color"
                                               value="@if(isset(request()->hair_color)) {{ request()->hair_color }} @endif">
                                    </div>
                                </div>

                                <div class="filter-widget">
                                    <h4>Tattoo</h4>
                                    <div class="form-group">
                                        <select class="form-control select2 tattoo" name="tattoo">
                                            <option value="" readonly="">Select</option>
                                            <option value="yes"
                                                    @if(isset(request()->tattoo) && request()->tattoo == 'yes') selected @endif>
                                                Yes
                                            </option>

                                            <option value="yes"
                                                    @if(isset(request()->tattoo) && request()->tattoo == 'no') selected @endif>
                                                No
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="filter-widget">
                                    <h4>Art</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type Art..."
                                               name="art"
                                               value="@if(isset(request()->art)) {{ request()->art }} @endif">
                                    </div>
                                </div>


                                <div class="btn-search">
                                    <button type="submit" class="btn btn-block">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="col-md-9 mx-auto text-center">
                        <div class="row mx-auto">
                            <div class="quick-filter mx-auto">
                                <ul class="main-nav nav mx-auto" style="text-align:center !important;">
                                    <li class="@if(request()->instagram != 'on' && request()->twitter != 'on' && request()->youtube != 'on' && request()->tiktok != 'on' && request()->snapchat != 'on' && request()->facebook != 'on') active @endif">
                                        <a href="{{ env('BASE_URL') }}vendor/dashboard">All
                                            Influencers</a></li>
                                    <li class="@if(request()->instagram == 'on') active @endif">
                                        <a href="{{ env('BASE_URL') }}vendor/influencers-filter?instagram=on">Instagram</a>
                                    </li>
                                    <li class="@if(request()->twitter == 'on') active @endif"><a
                                            href="{{ env('BASE_URL') }}vendor/influencers-filter?twitter=on">Twitter</a>
                                    </li>
                                    <li class="@if(request()->youtube == 'on') active @endif"><a
                                            href="{{ env('BASE_URL') }}vendor/influencers-filter?youtube=on">Youtube</a>
                                    </li>
                                    <li class="@if(request()->tiktok == 'on') active @endif"><a
                                            href="{{ env('BASE_URL') }}vendor/influencers-filter?tiktok=on">Tik Tok</a>
                                    </li>
                                    <li class="@if(request()->facebook == 'on') active @endif"><a
                                            href="{{ env('BASE_URL') }}vendor/influencers-filter?facebook=on">Facebook</a>
                                    </li>
                                    <li class="@if(request()->snapchat == 'on') active @endif"><a
                                            href="{{ env('BASE_URL') }}vendor/influencers-filter?snapchat=on">Snap Chat</a>
                                    </li>
                                    <!-- <li class="has-submenu">
                                        <a href="#">More<i class="fas fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li class="has-submenu">
                                            <li class="@if(request()->snapchat == 'on') active @endif"><a
                                                    href="{{ env('BASE_URL') }}vendor/influencers-filter?snapchat=on">snapchat</a>
                                            </li>
                                            <li class="@if(request()->facebook == 'on') active @endif"><a
                                                    href="{{ env('BASE_URL') }}vendor/influencers-filter?facebook=on">Facebook</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sort-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="freelance-view">
                                        <h4>Showing 1 - <span
                                                class="total_influencer_count">{{ $total_influencers >= 20 ? '20' : $total_influencers }}</span>
                                            of {{ $total_influencers }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="sort-by">
                                        <select class="custom-select infl-status" onchange="filterBaseOnStatus()">
                                            <option value="">All</option>
                                            {{--                                                                                        <option>Relevance</option>--}}
                                            <option value="RATED" @if(request()->status == 'RATED') selected @endif>
                                                <!-- Rating -->
                                                30
                                            </option>
                                            <option value="POPULAR" @if(request()->status == 'POPULAR') selected @endif>
                                                <!-- Popular -->
                                                50
                                            </option>
                                            <option value="POPULAR" @if(request()->status == 'POPULAR') selected @endif>
                                                <!-- Popular -->
                                                100
                                            </option>
                                            {{--                                            <option>Latest</option>--}}
                                            {{--                                            <option value="ACTIVE">Free</option>--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="bootstrap-tags text-start pl-0">--}}
                    {{--                        <span class="badge badge-pill badge-skills">Influencer <span class="tag-close"--}}
                    {{--                                                                                     data-role="remove"><i--}}
                    {{--                                    class="fas fa-times"></i></span></span>--}}
                    {{--                        <span class="badge badge-pill badge-skills">USA <span class="tag-close" data-role="remove"><i--}}
                    {{--                                    class="fas fa-times"></i></span></span>--}}
                    {{--                        <span class="badge badge-pill badge-skills">Hourly <span class="tag-close" data-role="remove"><i--}}
                    {{--                                    class="fas fa-times"></i></span></span>--}}
                    {{--                        <span class="badge badge-pill badge-skills">0-1 years <span class="tag-close"--}}
                    {{--                                                                                    data-role="remove"><i--}}
                    {{--                                    class="fas fa-times"></i></span></span>--}}
                    {{--                        <span class="badge badge-pill badge-skills">USD <span class="tag-close" data-role="remove"><i--}}
                    {{--                                    class="fas fa-times"></i></span></span>--}}
                    {{--                    </div>--}}
                    <div class="row" id="infulecer-show">
                        @forelse($influencers as $influencer)

                            <div class="col-md-3 col-lg-3 col-xl-3 influencer-box">
                                <div class="card avatar-one"
                                     style="width:100%;box-shadow:1px 1px 1px 1px #eee;">
                                    <a href="{{ env('BASE_URL') }}influencers/{{ $influencer->id }}/detail">
                                        <div class="start"
                                             style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:100%;">
                                            <i class="fas fa-check-circle main-icon"
                                               style="background-color:;padding:7px;margin:2px;border-radius:50%; color: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'green' : '#999' }} !important;"></i>

                                        </div>
                                        <div class="influencerdetail" id="">
                                            <div class="start"
                                                 style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:220px;">

                                                <i class="fas fa-check-circle text-success add-to-favourite"
                                                   data-id="{{ $influencer->id }}"
                                                   style="padding:7px;border-radius:50%; display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'inline-block' : 'none' }}"></i>

                                                <i class="fas fa-check-circle remove-favourite"
                                                   data-id="{{ $influencer->id }}"
                                                   style="padding:7px;border-radius:50%; color: #999 !important; display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'none' : 'inline-block' }}"></i>

                                            </div>
                                            <br>
                                            {{--<span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; {{ $influencer->state ? $influencer->state->name : '' }}</span><br/>--}}
                                            {{--<span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; {{ $influencer->user_professional_detail && $influencer->user_professional_detail->category ? $influencer->user_professional_detail->category->name : '' }}</span>--}}
                                            <ul style="list-style-type: none;margin-top:30px;">
                                                @php
                                                    $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                                                    $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                                                    $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                                                    $twitter = getInfluencerSocialMediaProfileByTypeAndId('twitter', $influencer->id);
                                                    $youtube = getInfluencerSocialMediaProfileByTypeAndId('youtube', $influencer->id);
                                                    $snapchat = getInfluencerSocialMediaProfileByTypeAndId('snapchat', $influencer->id);
                                                @endphp
                                                &nbsp;
                                                <li style=" display: inline-block;color:#fff;"><span
                                                        style="font-size: 12px;text-align:center;"><a href=""><img
                                                                src="{{ asset('assets/img/social-icon/insta.png') }}"
                                                                alt=""
                                                                width="25px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($instagram ? $instagram->followers :  0) }}</div></span>
                                                </li> &nbsp;
                                                <li style=" display: inline-block;color:#fff;"><span
                                                        style="font-size: 12px;text-align:center;"><a href=""><img
                                                                src="{{ asset('assets/img/social-icon/twitter.png') }}"
                                                                alt=""
                                                                width="25px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($twitter ? $twitter->followers :  0) }}</div></span>
                                                </li> &nbsp;
                                                <li style=" display: inline-block;color:#fff;"><span
                                                        style="font-size: 12px;text-align:center;"><a href=""><img
                                                                src="{{ asset('assets/img/social-icon/youtube.png') }}"
                                                                alt=""
                                                                width="25px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($youtube ? $youtube->followers :  0) }}</div></span>
                                                </li> &nbsp;
                                                <li style=" display: inline-block;color:#fff;"><span
                                                        style="font-size: 12px;"><a href=""><img
                                                                src="{{ asset('assets/img/social-icon/tiktok.png') }}"
                                                                alt=""
                                                                width="25px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($tiktok ? $tiktok->followers : 0) }}</div></span>
                                                </li> &nbsp;
                                                <li style=" display: inline-block;color:#fff;"><span
                                                        style="font-size: 12px;"><a href=""><img
                                                                src="{{ asset('assets/img/social-icon/fb.png') }}"
                                                                alt="" width="25px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($facebook ? $facebook->followers : 0) }}</div></span>
                                                </li> &nbsp;
                                                <li style=" display: inline-block;color:#fff;"><span
                                                        style="font-size: 12px;"><a href=""><img
                                                                src="{{ asset('assets/img/social-icon/snapchat.png') }}"
                                                                alt="" width="25px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($snapchat ? $snapchat->followers : 0) }}</div></span>
                                                </li>&nbsp; 
                                            </ul>
                                        </div>
                                        <img src="{{ $influencer ? $influencer->image_url : '' }}" class="influencer"
                                             alt="author" width="100%" height="200px">
                                    </a>
                                    <div class="influencer-dev" style="margin:10px;padding:3px;">
                                        <h5 style="font-size:12px;"
                                            class="influencer-name">{{ $influencer ? $influencer->full_name : '' }}</h5>
                                        <h5 style="font-size:12px;">{{ $influencer->user_professional_detail && $influencer->user_professional_detail->category ? $influencer->user_professional_detail->category->name : '' }}</h5>
                                        <h5 style="font-size:12px;">Price: 1000$ &nbsp;&nbsp;Based in: {{ $influencer->state ? $influencer->state->name : '' }}</h5>
                                    </div>
                                </div>
                            {{--                                dsf--}}
                            <!----------->
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>Nothing Found</p>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')
    <script src="{{ asset('assets/js/range.js') }}"></script>
    <script src="{{ asset('assets/js/skills.js') }}"></script>
    <script>
        var range_start = "{{ isset(request()->min_value) ? request()->min_value : 0 }}";
        var range_end = "{{ isset(request()->max_value) ? request()->max_value : 50 }}";
        // // Initialize theia-sticky-sidebar
        // jQuery(document).ready(function() {
        //     jQuery('.sidebar').theiaStickySidebar({
        //         // Configuration options go here
        //     });
        // });


        $(document).on('change', '.nationality_id', function () {
            var nationality_id = $(this).val();
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-states-by-multi-nationality',
                    type: "GET",
                    dataType: "json",
                    data: {
                        "nationality_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#state_id").empty();
                            $("#state_id").append('<option value="">Select Based</option>');

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#state_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#state_id").empty();
                        }
                    }
                });
            }
        });

        $(document).on('change', '#state_id', function () {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-state',
                    type: "GET",
                    dataType: "json",
                    data: {
                        "state_id": state_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#city_id").empty();
                            $("#city_id").append('<option value="">Select Region</option>');

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#city_id").empty();
                        }
                    }
                });
            }
        });

        $(document).on('click', '.add-to-favourite', function (e) {
            e.preventDefault();
            thisElem = $(this);
            $.ajax({
                url: api_url + 'influencers/add-to-favourites',
                type: "POST",
                dataType: "json",
                data: {
                    "influencer_id": $(this).attr('data-id')
                },
                success: function (response) {
                    if (response.status) {
                        show_success_message(response.message);
                        $(thisElem).hide();
                        $(thisElem).parents('.influencerdetail').find('.remove-favourite').show();
                        $(thisElem).parents('.avatar-one').find('.main-icon').css('color', 'gold');
                    } else {
                        show_error_message(response.message);

                    }
                }
            });
        });

        $(document).on('click', '.remove-favourite', function (e) {
            e.preventDefault();
            thisElem = $(this);
            $.ajax({
                url: api_url + 'influencers/remove-from-favourites',
                type: "POST",
                dataType: "json",
                data: {
                    "influencer_id": $(this).attr('data-id')
                },
                success: function (response) {
                    if (response.status) {
                        show_success_message(response.message);
                        $(thisElem).hide();
                        $(thisElem).parents('.influencerdetail').find('.add-to-favourite').show();
                        $(thisElem).parents('.avatar-one').find('.main-icon').css('color', '#0504aa');
                    } else {
                        show_error_message(response.message);

                    }
                }
            });
        });

        // front filter

        $(".middle-search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            console.log(value)
            $("#infulecer-show .influencer-box").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        function filterBaseOnStatus() {
            window.location.href = "{{ env('BASE_URL') }}vendor/influencers-filter?status=" + $('.infl-status').val();
        }


        // PAGINATION CODE START HERE


        var currentPage = 1;
        var isLoading = false;

        // Function to fetch influencers and render them
        function fetchAndRenderInfluencers(page) {
            if (isLoading) {
                return;
            }

            isLoading = true;

            $.ajax({
                url: api_url + `paginated-influencers?page=${page}`,
                type: 'GET',
                dataType: 'json',
                success: function (response) {

                    if (response.influencers.data.length > 0) {
                        $(response.influencers.data).each(function (i, value) {
                            renderInfluencer(value);
                        });

                        total_influencer_count = $('.total_influencer_count').text();

                        $('.total_influencer_count').html(Number(total_influencer_count) + Number(response.influencers.data.length));
                    }

                    isLoading = false;
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching influencers:', error);
                    isLoading = false;
                }
            });
        }

        // Debounce function to add a delay before making a new request
        function debounce(func, wait) {
            var timeout;
            return function () {
                var context = this;
                var args = arguments;
                clearTimeout(timeout);
                timeout = setTimeout(function () {
                    timeout = null;
                    func.apply(context, args);
                }, wait);
            };
        }

        // Initial load
        // fetchAndRenderInfluencers(currentPage);

        // Infinite scroll pagination with debounce
        $(window).scroll(function () {
            var scrollPosition = $(window).scrollTop();
            var windowHeight = $(window).height();
            var documentHeight = $(document).height();

            // Set the position where you want to trigger the next request
            var triggerPosition = documentHeight * 0.5;

            // Check if the user is near the bottom of the page
            if (scrollPosition + windowHeight >= triggerPosition && !isLoading) {
                currentPage++;
                fetchAndRenderInfluencers(currentPage);
            }
        });


        // Function to render influencers on the page
        function renderInfluencer(influencer) {

            var influencerHtml = `<div class="col-md-3 col-lg-3 col-xl-3 influencer-box">
                <div class="card avatar-one"
                     style="width:100%;box-shadow:1px 1px 1px 1px #eee;">
                    <a href="${base_url}influencers/${influencer.id}/detail">
                                        <div class="start"
                                             style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:100%;">
                                            <i class="fas fa-check-circle main-icon"
                                               style="background-color:;padding:7px;margin:2px;border-radius:50%; color: ${influencer.is_favourite_influencer == false ? 'green' : '#999'} !important;"></i>

                                        </div>
                                        <div class="influencerdetail" id="">
                                            <div class="start"
                                                 style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:220px;">

                                                <i class="fas fa-check-circle text-success add-to-favourite"
                                                   data-id="${influencer.id}"
                                                   style="background-color:;padding:7px;border-radius:50%; display: ${influencer.is_favourite_influencer == false ? 'inline-block' : 'none'}"></i>

                                                <i class="fas fa-check-circle remove-favourite"
                                                   data-id="${influencer.id}"
                                                   style="background-color:;padding:7px;border-radius:50%; color: #999 !important; display: ${influencer.is_favourite_influencer == false ? 'none' : 'inline-block'}"></i>

                                            </div>
                                            <br>
                                            <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; ${influencer.state ? influencer.state.name : ''}</span><br/>
                                            <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; ${influencer.user_professional_detail && influencer.user_professional_detail.category ? influencer.user_professional_detail.category.name : ''}</span>
                                            <ul style="list-style-type: none;margin-top:10px;">

            <li style=" display: inline-block;color:#fff;">&nbsp;&nbsp; <span
                    style="font-size: 12px;text-align:center;"><a href=""><img
                            src="{{ asset('assets/img/social-icon/insta.png') }}"
                                                                alt=""
                                                                width="30px"></a> <br> &nbsp;&nbsp;&nbsp;&nbsp; ${influencer.instagram_followers}</span>
                                                </li> &nbsp;
                                                <li style=" display: inline-block;color:#fff;"><span
                                                        style="font-size: 12px;"><a href=""><img
                                                                src="{{ asset('assets/img/social-icon/fb.png') }}"
                                                                alt="" width="30px"></a> <br>&nbsp;&nbsp;${influencer.facebook_followers}</span>
                                                </li> &nbsp;
                                                <li style=" display: inline-block;color:#fff;"><span
                                                        style="font-size: 12px;"><a href=""><img
                                                                src="{{ asset('assets/img/social-icon/tiktok.png') }}"
                                                                alt=""
                                                                width="30px"></a> <br>&nbsp;&nbsp;${influencer.tiktok_followers}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <img src="${influencer ? influencer.image_url : ''}" class="influencer"
                                             alt="author" width="100%" height="200px">
                                    </a>
                                    <div class="influencer-dev" style="margin:10px;padding:3px;">
                                        <h5 style="font-size:16px;"
                                            class="influencer-name">${influencer ? influencer.full_name : ''}</h5>
                                        <h5 style="font-size:16px;">No.
                                            &nbsp;${influencer.phone ?? ''}</i></h5>
                                    </div>
                                </div>

            </div>`;

            $('#infulecer-show').append(influencerHtml);
        }

    </script>
@endsection
