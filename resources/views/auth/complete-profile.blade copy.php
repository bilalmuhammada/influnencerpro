@extends('layout.master')
@section('content')
    @php
        $influencer_personal_info = $influencer->personal_information;
        $influencer_professional_detail = $influencer->user_professional_detail;
        $influencer_features = $influencer->features->pluck('feature_id')->toArray();
        $socialMediaProfiles = $influencer->social_media_profiles;
        $facebookProfiles = $socialMediaProfiles->where('type', 'facebook')->first();
        $instagramProfiles = $socialMediaProfiles->where('type', 'instagram')->first();
        $tiktokProfiles = $socialMediaProfiles->where('type', 'tiktok')->first();
        $twitterProfiles = $socialMediaProfiles->where('type', 'twitter')->first();
        $youtubeProfiles = $socialMediaProfiles->where('type', 'youtube')->first();
        $snapchatProfiles = $socialMediaProfiles->where('type', 'snapchat')->first();
        $pinterestProfiles = $socialMediaProfiles->where('type', 'pinterest')->first();
        $webProfiles = $socialMediaProfiles->where('type', 'web')->first();

        $main_availability = $influencer->availabilities->where('is_default', 1)->first();

        $availabilities = $influencer->availabilities->where('is_default', 0);

    @endphp
    <!-- partial:index.partial.html -->
    <div class="container-fluid" style="border:0px solid red;padding-top:60px;">
        <hr>
        <div class="row justify-content-center" style="border:0px solid red;">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0" style="border:0px solid red;">
                <div class="card px-0 pb-0 " style="border:0px solid red;">
                    <h2 id="heading">Profile</h2>
                    <!-- <p>Fill all form field to go to next step</p> -->
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="personal"><strong>Personal Info</strong></li>
                            <li id="account"><strong>Platform URL</strong></li>
                            <li id="payment"><strong>Profile Image</strong></li>
                            <li id="confirm"><strong>complete</strong></li>
                        </ul>
                        <fieldset>
                            <div class="form-card ps-3 pe-3">
                                <div class="row" style="margin-top:-20px;">
                                    {{--                                    <div class="col-md-4">--}}
                                    {{--                                        <input type="text" name="uname" placeholder="Name"/>--}}
                                    {{--                                    </div>--}}
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="" class="inner_label">Influencer Category</label>
                                            <select name="category_ids[]" id="" class="form-control select2 category_id"
                                                    multiple>
                                                <option value="">--Select Influencer Category--</option>
                                                @foreach(getCategories() as $category)
                                                    <option
                                                        value="{{ $category->id }}" {{ $influencer->categories && in_array($category->id, $influencer->categories->pluck('category_id')->toArray()) ? 'selected' : ''  }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="" class="inner_label">Spoken Language</label>
                                            <select name="spoken_language_ids[]" id="" class="form-control select2"
                                                    multiple>
                                                <option value="">--Spoken Language--</option>
                                                @foreach(getSpokenLanguages() as $language)
                                                    <option
                                                        value="{{ $language->id }}" {{ $influencer->spoken_languages && in_array($language->id, $influencer->spoken_languages->pluck('spoken_language_id')->toArray()) ? 'selected' : ''  }}>{{ $language->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="" class="inner_label">Ethnicity</label>
                                            <select name="ethnicity_id" id="" class="form-control">
                                                <option value="">--Ethnicity--</option>
                                                @foreach(getEthnicity() as $ethnicity)
                                                    <option
                                                        value="{{ $ethnicity->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->ethnicity_id == $ethnicity->id ? 'selected' : '' }}>{{ $ethnicity->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                </div>
                                <div class="row" style="margin-top:3px;">
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="" class="inner_label">Nationality</label>
                                            <select name="country_id" id="" class="form-control">
                                                <option value="">--Nationality--</option>
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Age</label>
                                            <input type="text" class="form-control" name="age" placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->age : '' }}"/>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Gender</label>
                                            <select name="gender" id="" class="form-control"
                                                    value="{{ $influencer_personal_info ? $influencer_personal_info->gender : '' }}">
                                                <option value="">--Select Gender--</option>
                                                <option
                                                    value="MALE" {{ $influencer_personal_info &&  $influencer_personal_info->gender == 'MALE' ? 'selected' : '' }}>
                                                    Male
                                                </option>
                                                <option
                                                    value="FEMALE" {{ $influencer_personal_info &&  $influencer_personal_info->gender == 'FEMALE' ? 'selected' : '' }}>
                                                    Female
                                                </option>
                                                <option
                                                    value="OTHER" {{ $influencer_personal_info &&  $influencer_personal_info->gender == 'OTHER' ? 'selected' : '' }}>
                                                    Other
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:-20px;">
                                    <div class="col-md-4">

                                        <div class="input-container">
                                            <label for="username" class="inner_label">Hair Type</label>
                                            <select name="hair_type" id=""
                                            class="form-control available-country">
                                        <option value="">--Hair Type--</option>
                                        @foreach( $userInformation as $userinfo)
                                            <option
                                                value="{{ $userinfo->id }}" >{{ $userinfo->hairtype }}</option>
                                        @endforeach
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Hair Color</label>
                                            <select name="hair_color" id=""
                                            class="form-control available-country">
                                        <option value="">--Hair Type--</option>
                                        @foreach( $userInformation as $userinfo)
                                            <option
                                                value="{{ $userinfo->id }}" >{{ $userinfo->haircolor }}</option>
                                        @endforeach
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Eye Color</label>
                                            <select name="eye_color" id=""
                                            class="form-control available-country">
                                        <option value="">--Hair Type--</option>
                                        @foreach( $userInformation as $userinfo)
                                            <option
                                                value="{{ $userinfo->id }}" >{{ $userinfo->eyecolor }}</option>
                                        @endforeach
                                    </select>
                                        </div>
                                    </div>
                                

                                </div>
                                <div class="row" >
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Height-CM</label>
                                            <input type="text" class="form-control" name="height"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->height : '' }}"/>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Weight-KG</label>
                                            <input type="text" class="form-control" name="weight"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->weight : '' }}"/>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Shoes Size-EU</label>
                                            <input type="number" class="form-control" name="shoes_size"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->shoes_size : '' }}"/>

                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:-20px;">
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Tattoes</label>
                                            <input type="text" class="form-control" name="tattoes"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->tattoes : '' }}"/>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            {{--                                        <input type="text" class="form-control" name="professional_category"--}}
                                            {{--                                               placeholder="}
                                            {{--                                               value="{{ $influencer_professional_detail ? $influencer_professional_detail->professional_category  : '' }}">--}}
                                            <label for="username" class="inner_label">Art</label>
                                            <select name="arts[]" id="professional_category"
                                                    class="form-control professional_category select2" multiple>
                                                <option value="">--Select Art--</option>
                                                @foreach(getArts() as $art)
                                                    <option
                                                        value="{{ $art->key }}" {{ $influencer->arts && in_array($art->key, $influencer->arts->pluck('art_key')->toArray()) ? 'selected' : ''  }}>{{ $art->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Collaboration</label>
                                            <select name="is_collaboration" id="" class="form-control">
                                                <option value="">--Collaboration--</option>
                                                <option
                                                    value="1" {{ $influencer_personal_info &&  $influencer_personal_info->is_collaboration == 1 ? 'selected' : '' }}>
                                                    Yes
                                                </option>
                                                <option
                                                    value="0" {{ $influencer_personal_info &&  $influencer_personal_info->is_collaboration == 0 ? 'selected' : '' }}>
                                                    No
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row available-box" style="margin-top:-20px;">
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Nationality</label>
                                            <select name="country_id" id=""
                                                    class="form-control available-country">
                                                <option value="">--Country--</option>
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->state_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">City</label>
                                            <select name="city_id" id="" class="form-control city_id">
                                                <option value="">--City--</option>
                                                @foreach(getCityByStateId(1) as $city)
                                                    <option
                                                        value="{{ $city->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">From Date</label>
                                            <input type="text" class="form-control datepicker"
                                                   name="main_available_from_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="From Date"
                                                   value="{{ $main_availability ? formatDateToread($main_availability->availability_from_date)  : '' }}">

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">To Date</label>
                                            <input type="text" class="form-control datepicker"
                                                   name="main_available_to_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="To Date"
                                                   value="{{ $main_availability ? formatDateToread($main_availability->availability_to_date)  : '' }}">

                                        </div>
                                    </div>

                                </div>
                                <div class="row available-box" style="margin-top:-20px;">
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Nationality</label>
                                            <select name="available_country_id[0]" id=""
                                                    class="form-control available-country">
                                                <option value="">--Country--</option>
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $availabilities && count($availabilities) > 0 && $availabilities[0]['country_id'] == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">City</label>
                                            <select name="available_city_id[0]" id="" class="form-control city_id">
                                                @php
                                                    if($availabilities && count($availabilities) > 0){
                                                        $states_ids = getStateByCountryId($availabilities[0]['country_id'])->pluck('id')->toArray();
                                                    }else{
                                                         $states_ids = [1];
                                                    }
                                                @endphp

                                                <option value="">--City--</option>
                                                @foreach(getCityByStateIds($states_ids) as $city)
                                                    <option
                                                        value="{{ $city->id }}" {{ $availabilities && count($availabilities) > 0 &&  $availabilities[0]['city_id'] == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">From Date</label>
                                            <input type="text" class="form-control datepicker"
                                                   name="availability_from_date[0]"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="From Date"
                                                   value="{{ count($availabilities) > 0  ? formatDateToread($availabilities[0]['availability_from_date'])  : '' }}">

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">To Date</label>
                                            <input type="text" class="form-control datepicker"
                                                   name="availability_to_date[0]"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="To Date"
                                                   value="{{ count($availabilities) > 0  ? $availabilities[0]['to_date_formatted'] :  '' }}">

                                        </div>
                                    </div>

                                </div>
                                <div class="row available-box" style="margin-top:-20px;">
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Nationality</label>
                                            <select name="available_country_id[1]" id=""
                                                    class="form-control available-country">
                                                <option value="">Country</option>
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $availabilities && count($availabilities) >= 2 && $availabilities[1]['country_id'] == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">City</label>
                                            <select name="available_city_id[1]" id="" class="form-control city_id">

                                                @php
                                                    if($availabilities && count($availabilities) >= 2){
                                                        $states_ids = getStateByCountryId($availabilities[1]['country_id'])->pluck('id')->toArray();
                                                    }else{
                                                         $states_ids = [1];
                                                    }
                                                @endphp

                                                <option value="">City</option>
                                                @foreach(getCityByStateIds($states_ids) as $city)
                                                    <option
                                                        value="{{ $city->id }}" {{ $availabilities && count($availabilities) >= 2 && $availabilities[1]['city_id'] == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">From Date</label>
                                            <input type="text" class="form-control datepicker"
                                                   name="availability_from_date[1]"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="From Date"
                                                   value="{{ count($availabilities) >= 2 && isset($availabilities[1]) ? formatDateToread($availabilities[1]['availability_from_date']) :  '' }}">

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">To Date</label>
                                            <input type="text" class="form-control datepicker"
                                                   name="availability_to_date[1]"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="To Date"
                                                   value="{{ count($availabilities) >= 2 && isset($availabilities[1]) ? $availabilities[1]['to_date_formatted'] :  '' }}">

                                        </div>
                                    </div>

                                </div>

                                <div class="row" style="margin-top:-20px;">
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Willing To Traval</label>
                                            <select name="willing_to_traval" id="" class="form-control">
                                                <option value="">--Willing To Traval--</option>
                                                <option
                                                    value="1" {{ $influencer_personal_info &&  $influencer_personal_info->willing_to_traval == 1 ? 'selected' : '' }}>
                                                    Yes
                                                </option>
                                                <option
                                                    value="0" {{ $influencer_personal_info &&  $influencer_personal_info->willing_to_traval == 0 ? 'selected' : '' }}>
                                                    No
                                                </option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Price $</label>
                                            <input type="price" class="form-control" name="price"
                                                   placeholder=""
                                                   value="{{ $influencer_professional_detail->price ?? ''  }}">

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Cloths</label>
                                            <input type="text" class="form-control" name="clothsize"
                                                   placeholder="cloth size"
                                                   value=""/>

                                        </div>
                                    </div>
                                </div>
                                <div class="row available-box" style="margin-top:-20px;">
                                    <div class="col-md-4">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Price Negotiable</label>
                                            <select name="priceNegotion" id=""
                                                    class="form-control available-country">
                                                <option value="">Price Negotiable</option>
                                                
                                                    <option value="1">Yes</option>
                                                     
                                                    <option value="0">No</option>  
                                                
                                            </select>

                                        </div>
                                    </div>
                                   

                                </div>
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Price Includes</label>
                                            <select name="Priceinclude" id="Priceinclude"
                                                    class="form-control available-country " multiple>
                                                <option value="">Price Negotiable</option>
                                                
                                                    <option value="1">Reel</option>
                                                     
                                                    <option value="0">Story</option>  
                                                    <option value="2">Vlog</option>
                                                     
                                                    <option value="2">Modal</option>  
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top:-20px;">
                                        <div class="input-container">
                                            <label for="username" class="inner_label">Bio</label>
                                            <input type="text" class="form-control" name="bio"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->bio : '' }}"/>

                                        </div>

                                    <!-- <select name="is_collaboration" id="" class="form-control">
                                            <option value="">--Collaboration--</option>
                                            <option
                                                value="1" {{ $influencer_personal_info &&  $influencer_personal_info->is_collaboration == 1 ? 'selected' : '' }}>
                                                Yes
                                            </option>
                                            <option
                                                value="0" {{ $influencer_personal_info &&  $influencer_personal_info->is_collaboration == 0 ? 'selected' : '' }}>
                                                No
                                            </option>
                                        </select> -->
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/insta.png') }}"
                                                         alt="insta" width="40">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="instagram_username"
                                                           placeholder="Username"
                                                           value="{{ $instagramProfiles ? $instagramProfiles->username : '' }}"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="instagram_followers"
                                                           placeholder="Followers"
                                                           value="{{ $instagramProfiles ? $instagramProfiles->followers : '' }}"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="instagram_url"
                                                           placeholder="URL" value="{{ $instagramProfiles ? $instagramProfiles->url : '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/fb.png') }}" alt="insta"
                                                         width="40">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="facebook_username"
                                                           placeholder="Username"
                                                           value="{{ $facebookProfiles ? $facebookProfiles->username : '' }}"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="facebook_followers"
                                                           placeholder="Followers"
                                                           value="{{ $facebookProfiles ? $facebookProfiles->followers : '' }}"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="facebook_url"
                                                           placeholder="URL" value="{{ $facebookProfiles ? $facebookProfiles->url : '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/tiktok.png') }}"
                                                         alt="insta" width="40">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="tiktok_username"
                                                           placeholder="Username"
                                                           value="{{ $tiktokProfiles ? $tiktokProfiles->username : '' }}"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="tiktok_followers"
                                                           placeholder="Followers"
                                                           value="{{ $tiktokProfiles ? $tiktokProfiles->followers : '' }}"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="tiktok_url"
                                                           placeholder="URL" value="{{ $tiktokProfiles ? $tiktokProfiles->url : '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img
                                                        src="{{ asset('assets/img/social-icon/youtube.png') }}"
                                                        alt="insta" width="40">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="youtube_username"
                                                           placeholder="Username"
                                                           value="{{ $youtubeProfiles ? $youtubeProfiles->username : '' }}"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="youtube_followers"
                                                           placeholder="Followers"
                                                           value="{{ $youtubeProfiles ? $youtubeProfiles->followers : '' }}"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="youtube_url"
                                                           placeholder="URL" value="{{ $youtubeProfiles ? $youtubeProfiles->url : '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img
                                                        src="{{ asset('assets/img/social-icon/twitter.png') }}"
                                                        alt="insta" width="40">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="twitter_username"
                                                           placeholder="Username"
                                                           value="{{ $twitterProfiles ? $twitterProfiles->username : '' }}"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="twitter_followers"
                                                           placeholder="Followers"
                                                           value="{{ $twitterProfiles ? $twitterProfiles->followers : '' }}"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="twitter_url"
                                                           placeholder="URL" value="{{ $twitterProfiles ? $twitterProfiles->url : '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/snapchat.png') }}"
                                                         alt="insta"
                                                         width="40">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="snapchat_username"
                                                           placeholder="Username"
                                                           value="{{ $snapchatProfiles ? $snapchatProfiles->username : '' }}"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="snapchat_followers"
                                                           placeholder="Followers"
                                                           value="{{ $snapchatProfiles ? $snapchatProfiles->followers : '' }}"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="snapchat_url"
                                                           placeholder="URL" value="{{ $snapchatProfiles ? $snapchatProfiles->url : '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/pinterest.png') }}"
                                                         alt="insta"
                                                         width="40">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="pinterest_username"
                                                           placeholder="Username"
                                                           value="{{ $pinterestProfiles ? $pinterestProfiles->username : '' }}"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="pinterest_followers"
                                                           placeholder="Followers"
                                                           value="{{ $pinterestProfiles ? $pinterestProfiles->followers : '' }}"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="pinterest_url"
                                                           placeholder="URL" value="{{ $pinterestProfiles ? $pinterestProfiles->url : '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/web.jpg') }}" alt="insta"
                                                         width="40">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="web_username"
                                                           placeholder="Username"
                                                           value="{{ $webProfiles ? $webProfiles->username : '' }}"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="web_followers"
                                                           placeholder="Followers"
                                                           value="{{ $webProfiles ? $webProfiles->followers : '' }}"/>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="web_url"
                                                           placeholder="URL" value="{{ $webProfiles ? $webProfiles->url : '' }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            
                            <input type="button" name="previous" class="previous action-button-previous"
                                   value="Previous"/>
                                   <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    {{--                                    <div class="col-md-4">--}}
                                    {{--                                        <input type="file" name="pic" accept="image/*">--}}
                                    {{--                                        <div class="col-md-6">--}}
                                    {{--                                            <div class="col-md-12">--}}
                                    {{--                                                <img--}}
                                    {{--                                                    src="{{ $influencer ? $influencer->image_url : asset('assets/img/img.png')}}"--}}
                                    {{--                                                    id="image" alt=""--}}
                                    {{--                                                    style="width: 200px; border: 1px solid #000; height: 180px">--}}
                                    {{--                                                <input type="file" class="form-control" id="logo" name="logo"--}}
                                    {{--                                                       onchange=""--}}
                                    {{--                                                       style="width: 200px; background-color: #e9ecef" accept="image/*">--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="col-md-12">
                                        <label for="" style="color:#0504aa;font-weight:bold;">Enter Plateform Url</label>
                                        <input type="text"
                                               placeholder=""
                                               class="form-control" name=""
                                               style="border:0px solid #1A237E;!important"/>
                                    </div>
                                </div>
                                <label style="color:#0504aa;font-weight:bold;">Or Upload your images</label>
                                <div class="row mt-2 multi-images">
                                    @forelse ($influencer->influencer_profile_images as $image)
                                        <div class="col-md-4 avatar-image">
                                            
                                            <label for="logo{{ $image->id }}" style="cursor: pointer;">
                                                <img
                                                    src="{{ $image->file_name_url ?? asset('assets/img/img.png')}}"
                                                    id="image0" alt=""
                                                    style="width: 220px; border: 1px solid #000; height: 180px">
                                            </label>
                                            <input type="file" class="form-control" id="logo{{ $image->id }}"
                                                   name="profile_images[]"
                                                   onchange=""
                                                   style="width: 220px; background-color: #e9ecef; display: none"
                                                   accept="image/*">
                                                   <div class="close-button" style="position: absolute; top: 0; right: 0;">
                                                    <i class="fas fa-times-circle text-danger"></i>
                                                </div>
                                        </div>
                                    @empty
                                        <div class="col-md-4">
                                            
                                            <label for="logo0" style="cursor: pointer;">
                                                <img
                                                    src="{{ asset('assets/img/img.png')}}"
                                                    id="image0" alt=""
                                                    style="width: 220px; border: 1px solid #000; height: 180px">
                                            </label>
                                            <input type="file" class="form-control" id="logo0" name="profile_images[]"
                                                   onchange=""
                                                   style="width: 220px; background-color: #e9ecef; display: none"
                                                   accept="image/*">
                                                   <div class="close-button" style="position: absolute; top: 0; right: 0;">
                                                    <i class="fas fa-times-circle text-danger"></i>
                                                </div>
                                        </div>
                                    @endforelse
                                    <div class="col-md-3 add-more-box">
                                        <button class="btn btn-primary btn-sm add-more-image">Add more</button>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button submit-btn" value="Submit"/>
                            <input type="button" name="previous" class="previous action-button-previous"
                                   value="Previous"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row justify-content-center">
                                    <div class="col-3" style="text-align:center;">
                                        <!-- <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> -->
                                        <i class="fa fa-check"
                                           style="font-size:60px;color:#997045;border:2px solid #fff;"></i>
                                    </div>
                                </div>
                                <!-- <br><br> -->
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <!-- <h4 class="purple-text text-center"><b>Profile</b></h4> -->
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')
    <script src="{{ asset('assets/js/skills.js') }}"></script>
    <script>
        $(document).ready(function() {
    // Initialize Select2
    $('#Priceinclude').select2();

    // Pre-select options
   
});


        $(document).ready(function () {
            show_img();
            show_img('#image0', '#logo0');
            $('.feature-select2').select2();
            $('.category_id').select2();

            $('.datepicker').datepicker({
                format: 'dd-M-yyyy'
            });


            // Set the maximum number of allowed selections
            var maxSelections = 3;

            // Event listener for changes in the selection
            $('.category_id').on('select2:select', function (e) {
                // Check if the maximum number of selections is reached
                if ($('.category_id').val().length > maxSelections) {
                    // Remove the last selected option
                    $('.category_id').find('option:selected').last().prop('selected', false);
                    // Trigger the change event to update Select2
                    $('.category_id').trigger('change');
                }
            });
        });

        $(document).on('click', '.submit-btn', function () {
            // Get the selected tags from the Slick input
            // var selectedTags = $('#input-tag').slick('getTags');

            formData = new FormData($('#msform')[0]);

            var tags = [];
            // Extract tags from the list
            $('#tags li').each(function () {
                tags.push($(this).text().trim());
            });


            formData.append('skills[]', tags);


            $.ajax({
                url: api_url + 'auth/complete-profile-web',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.status == 200) {
                        console.log(data)
                        // window.location = base_url + '/register/complete-profile';
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            })
        });

        var count = 0;

        $(document).on('click', '.add-more-image', function (e) {
            e.preventDefault();
            count++;

            var imageBox = `<div class="col-md-4">
            <label for="logo-${count}" style="cursor: pointer;">
                                        <img
                                            src="{{ asset('assets/img/img.png') }}"
                                            id="image-${count}" alt=""
                                            style="width: 220px; border: 1px solid #000; height: 180px">
                                            </label>
                                        <input type="file" class="form-control" id="logo-${count}" name="profile_images[]" onchange=""
                                               style="width:220px; background-color: #e9ecef; display:none" accept="image/*">
                                    </div>`;

            $('.add-more-box').before(imageBox);
            show_img('#image-' + count, '#logo-' + count);
        });

        $(document).on('click', '.delete-image', function (e) {
            e.preventDefault();

            thisElem = $(this);
            $.ajax({
                url: api_url + 'influencers/remove-profile-image',
                type: 'POST',
                data: {attachment_id: $(this).attr('data-attachment-id')},
                success: function (data) {
                    if (data.status) {
                        $(thisElem).parents('.avatar-image').remove();
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            })
        });

        $(document).on('change', '.available-country', function () {
            var country_id = $(this).val();
            var thisElem = $(this);

            if (country_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "POST",
                    dataType: "json",
                    data: {
                        "nationality_id": country_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $(thisElem).parents('.available-box').find(".city_id").empty();
                            if (states) {
                                $.each(states, function (index, value) {
                                    $(thisElem).parents('.available-box').find(".city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $(thisElem).parents('.available-box').find(".city_id").empty();
                        }
                    }
                });
            }
        })

    </script>
@endsection
