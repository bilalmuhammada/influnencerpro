@extends('layout.master')
<style>   
.dropzone-container {
    border: 2px solid #ccc;
    padding: 20px;
    text-align: center;
    margin-top: 20px;
  }
  .floating {
    padding-top: 20px !important;
  }
 
  .dz-message{
display: none !important;
  }
  .inputbg:focus, .floating:focus {
    border: 1px solid blue !important;
}
.dropzone .dz-preview .dz-image {
    border-radius: 0px !important;}


    /* Define the scrollbar track */
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

.ui-state-default  {
        border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }
  #ui-datepicker-div{
width: 200px !important;
  }
  .from_date:focus, .to_date:focus {
    border: 1px solid blue !important;
}
.dropzone{
    border: 0px !important;
    box-shadow: 0 0px 22px #997045 !important;
}

.dz-error-mark{
display: none !important;
}
</style>

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
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0" style="border:0px solid red;    width: 58%;">
                <div class="card px-0 pb-0 " style="border:0px solid red;">
                    {{-- <h2 id="heading">Profile</h2> --}}
                    <!-- <p>Fill all form field to go to next step</p> -->
                    <form id="msform" action="/upload" class="dropzone" >
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="personal"><strong>Personal Info</strong></li>
                            <li id="account"><strong>Platform URL</strong></li>
                            <li id="payment"><strong>Profile Image</strong></li>
                            <li id="confirm"><strong>Complete</strong></li>
                        </ul>
                        <fieldset>
                            <div class="form-card ps-3 pe-3">
                                <div class="row" style="margin-top:-20px;">
                                    {{--                                    <div class="col-md-4">--}}
                                    {{--                                        <input type="text" name="uname" placeholder="Name"/>--}}
                                    {{--                                    </div>--}}
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                           
                                            <select name="category_ids[]" class="form-control floating  category_ids"
                                                    >
                                                {{-- <option value="">Select Influencer Category</option> --}}
                                                @foreach(getCategories() as $category)
                                                    <option
                                                        value="{{ $category->id }}" {{ $influencer->categories && in_array($category->id, $influencer->categories->pluck('category_id')->toArray()) ? 'selected' : ''  }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
 <label for="" class="focus-label">Influencer Category</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                        {{-- <div class="input-container"> --}}
                                           
                                            <select name="spoken_language_ids[]" id="" class="form-control floating "
                                                    >
                                                {{-- <option value="">Spoken Language</option> --}}
                                                @foreach(getSpokenLanguages() as $language)
                                                    <option
                                                        value="{{ $language->id }}" {{ $influencer->spoken_languages && in_array($language->id, $influencer->spoken_languages->pluck('spoken_language_id')->toArray()) ? 'selected' : ''  }}>{{ $language->name }}</option>
                                                @endforeach
                                            </select>
 <label for="" class="focus-label">Spoken Language</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        {{-- <div class="input-container"> --}}
                                            <div class="form-group form-focus">
                                           
                                            <select name="ethnicity_id" id="" class="form-control floating">
                                                {{-- <option value="">Ethnicity</option> --}}
                                                @foreach(getEthnicity() as $ethnicity)
                                                    <option
                                                        value="{{ $ethnicity->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->ethnicity_id == $ethnicity->id ? 'selected' : '' }}>{{ $ethnicity->name }}</option>
                                                @endforeach
                                            </select>
 <label for="" class="focus-label">Ethnicity</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row" style="margin-top:3px;">
                                    <div class="col-md-4">
                                        {{-- <div class="input-container"> --}}
                                            <div class="form-group form-focus">
                                          
                                            <select name="country_id" id="" class="form-control floating">
                                                {{-- <option value="">Country</option> --}}
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
  <label for="" class="focus-label">Nationality</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        {{-- <div class="input-container"> --}}
                                            <div class="form-group form-focus">
                                            {{-- <label for="username" class="inner_label">Age</label> --}}
                                            <input type="text" class="form-control  floating" name="age" placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->age : '' }}"/>
                                                   <label class="focus-label">Age</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                        {{-- <div class="input-container">
                                            --}}
                                            <select name="gender" id="" class="form-control floating"
                                                    value="{{ $influencer_personal_info ? $influencer_personal_info->gender : '' }}">
                                                {{-- <option value="">--Select Gender--</option> --}}
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
                                            <label for="username" class="focus-label">Gender</label> 
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                        {{-- <div class="input-container"> --}}
                                           
                                            <select name="hair_type" id=""
                                            class="form-control available-country floating">
                                        {{-- <option value="">Hair Typess</option> --}}
                                        @foreach( $userInformation as $userinfo)
                                            <option
                                                value="{{ $userinfo->id }}" >{{ $userinfo->hairtype }}</option>
                                        @endforeach
                                    </select>
                                      <label for="username" class="focus-label">Hair Type</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <select name="hair_color" id=""
                                            class="form-control available-country floating">
                                        {{-- <option value="">Hair Color</option> --}}
                                        @foreach( $userInformation as $userinfo)
                                            <option
                                                value="{{ $userinfo->id }}" >{{ $userinfo->haircolor }}</option>
                                        @endforeach
                                    </select>
                                    <label for="username" class="focus-label">Hair Color</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <select name="eye_color" id=""
                                            class="form-control available-country floating">
                                        {{-- <option value="">Eye Type</option> --}}
                                        @foreach( $userInformation as $userinfo)
                                            <option
                                                value="{{ $userinfo->id }}" >{{ $userinfo->eyecolor }}</option>
                                        @endforeach
                                    </select>
                                    <label for="username" class="focus-label">Eye Color</label>
                                        </div>
                                    </div>
                                

                                </div>
                                <div class="row" >
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                          
                                            <input type="text" class="form-control floating" name="height"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->height : '' }}"/>
                                                   <label for="username" class="focus-label">Height-CM</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                        
                                            <input type="text" class="form-control floating" name="weight"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->weight : '' }}"/>
                                                   <label for="username" class="focus-label">Weight-KG</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <input type="number" class="form-control floating" name="shoes_size"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->shoes_size : '' }}"/>
                                                   <label for="username" class="inner_label focus-label">Shoes Size-EU</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" name="clothsize" 
                                         
                                            value="{{ $influencer_personal_info ? $influencer_personal_info->clothsize : '' }}"/>
                                            <label for="username" class="focus-label">Cloth Size</label>
                                        </div>
                                 
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            {{--                                        <input type="text" class="form-control" name="professional_category"--}}
                                            {{--                                               placeholder="}
                                            {{--                                               value="{{ $influencer_professional_detail ? $influencer_professional_detail->professional_category  : '' }}">--}}
                                       
                                            <select name="arts[]" id="professional_category"
                                                    class="form-control professional_category floating " >
                                                {{-- <option value="">--Select Art--</option> --}}
                                                @foreach(getArts() as $art)
                                                    <option
                                                        value="{{ $art->key }}" {{ $influencer->arts && in_array($art->key, $influencer->arts->pluck('art_key')->toArray()) ? 'selected' : ''  }}>{{ $art->name }}</option>
                                                @endforeach
                                            </select>
                                                 <label for="username" class="focus-label">Art</label>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" name="tattoes" 
                                         
                                            value="{{ $influencer_personal_info ? $influencer_personal_info->tattoes : '' }}"/>
                                            <label for="username" class="focus-label">Tattoes</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row available-box" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <select name="country_id" id=""
                                                    class="form-control available-country floating">
                                                {{-- <option value="">Country</option> --}}
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->state_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
<label for="username" class="focus-label">Country</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <select name="city_id" id="" class="form-control city_id floating">
                                                {{-- <option value="">--City--</option> --}}
                                                @foreach(getCityByStateId(1) as $city)
                                                    <option
                                                        value="{{ $city->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            </select>
<label for="username" class="focus-label">City</label>
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                         
                                            <input type="text" class="form-control datepicker floating"
                                                   name="main_available_from_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="From Date"
                                                   value="{{ $main_availability ? formatDateToread($main_availability->availability_from_date)  : '' }}">
                                            <label for="username" class="inner_label focus-label">From Date</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                        
                                            <input type="text" class="form-control datepicker floating"
                                                   name="main_available_to_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="To Date"
                                                   value="{{ $main_availability ? formatDateToread($main_availability->availability_to_date)  : '' }}">
                                                   <label for="username" class="inner_label focus-label">To Date</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row available-box" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                           
                                            <select name="available_country_id[0]" id=""
                                                    class="form-control available-country floating">
                                                {{-- <option value="">--Country--</option> --}}
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $availabilities && count($availabilities) > 0 && $availabilities[0]['country_id'] == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
 <label for="username" class=" focus-label">Country</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                          
                                            <select name="available_city_id[0]" id="" class="form-control city_id floating">
                                                @php
                                                    if($availabilities && count($availabilities) > 0){
                                                        $states_ids = getStateByCountryId($availabilities[0]['country_id'])->pluck('id')->toArray();
                                                    }else{
                                                         $states_ids = [1];
                                                    }
                                                @endphp

                                                {{-- <option value="">--City--</option> --}}
                                                @foreach(getCityByStateIds($states_ids) as $city)
                                                    <option
                                                        value="{{ $city->id }}" {{ $availabilities && count($availabilities) > 0 &&  $availabilities[0]['city_id'] == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            </select>
  <label for="username" class="focus-label">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                          
                                            <input type="text" class="form-control datepicker floating"
                                                   name="availability_from_date[0]"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="From Date"
                                                   value="{{ count($availabilities) > 0  ? formatDateToread($availabilities[0]['availability_from_date'])  : '' }}">
                                                   <label for="username" class="inner_label focus-label">From Date</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                          
                                            <input type="text" class="form-control datepicker floating"
                                                   name="availability_to_date[0]"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="To Date"
                                                   value="{{ count($availabilities) > 0  ? $availabilities[0]['to_date_formatted'] :  '' }}">
                                                   <label for="username" class="inner_label focus-label">To Date</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row available-box" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                         
                                            <select name="available_country_id[1]" id=""
                                                    class="form-control available-country  floating">
                                                {{-- <option value="">Country</option> --}}
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $availabilities && count($availabilities) >= 2 && $availabilities[1]['country_id'] == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
   <label for="username" class=" focus-label">Country</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                        
                                            <select name="available_city_id[1]" id="" class="form-control city_id floating">

                                                @php
                                                    if($availabilities && count($availabilities) >= 2){
                                                        $states_ids = getStateByCountryId($availabilities[1]['country_id'])->pluck('id')->toArray();
                                                    }else{
                                                         $states_ids = [1];
                                                    }
                                                @endphp

                                                {{-- <option value="">City</option> --}}
                                                @foreach(getCityByStateIds($states_ids) as $city)
                                                    <option
                                                        value="{{ $city->id }}" {{ $availabilities && count($availabilities) >= 2 && $availabilities[1]['city_id'] == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                                <label for="username" class="focus-label">City</label>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                           
                                            <input type="text" class="form-control datepicker floating"
                                                   name="availability_from_date[1]"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="From Date"
                                                   value="{{ count($availabilities) >= 2 && isset($availabilities[1]) ? formatDateToread($availabilities[1]['availability_from_date']) :  '' }}">
                                                   <label for="username" class="inner_label focus-label">From Date</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                            
                                            <input type="text" class="form-control datepicker floating "
                                                   name="availability_to_date[1]"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                
                                                   value="{{ count($availabilities) >= 2 && isset($availabilities[1]) ? $availabilities[1]['to_date_formatted'] :  '' }}">
                                                   <label for="username" class="inner_label focus-label">To Date</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row" style="">
                                    
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <input type="price" class="form-control floating" name="price"
                                                   placeholder=""
                                                   value="{{ $influencer_professional_detail->price ?? ''  }}">
                                                   <label for="username" class="inner_label focus-label">Price $</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">

                                             <input type="text" class="form-control floating" name="Priceinclude"
                                                   placeholder="Reel Story Vlog Modal"
                                                   value=""/>
                                            {{-- <select name="Priceinclude" id="Priceinclude" 
                                                    class="form-control floating " >
                                                <option value="">Price Negotiable</option> 
                                                
                                                    <option value="1">Reel</option>
                                                     
                                                    <option value="0">Story</option>  
                                                    <option value="2">Vlog</option>
                                                     
                                                    <option value="2">Modal</option>  
                                                
                                            </select> --}}
                                            <label for="username" class="focus-label ">Price Includes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus focus-label">
                                           
                                            <select name="priceNegotion" id=""
                                                    class="form-control floating available-country">
                                                {{-- <option value="">Price Negotiable</option> --}}
                                                
                                                    <option value="1">Yes</option>
                                                     
                                                    <option value="0">No</option>  
                                                
                                            </select>
 <label for="username" class=" focus-label">Price Negotiable</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row available-box" style="">
                                    <div class="col-md-4">
                                       
                                        <div class="form-group form-focus">
                                          
                                            <select name="is_collaboration" id="" class="form-control floating">
                                                {{-- <option value="">--Collaboration--</option> --}}
                                                <option
                                                    value="1" {{ $influencer_personal_info &&  $influencer_personal_info->is_collaboration == 1 ? 'selected' : '' }}>
                                                    Yes
                                                </option>
                                                <option
                                                    value="0" {{ $influencer_personal_info &&  $influencer_personal_info->is_collaboration == 0 ? 'selected' : '' }}>
                                                    No
                                                </option>
                                            </select>
  <label for="username" class="focus-label">Collaboration</label>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <select name="willing_to_traval" id="" class="form-control floating">
                                                {{-- <option value="">Willing To Traval</option> --}}
                                                <option
                                                    value="1" {{ $influencer_personal_info &&  $influencer_personal_info->willing_to_traval == 1 ? 'selected' : '' }}>
                                                    Yes
                                                </option>
                                                <option
                                                    value="0" {{ $influencer_personal_info &&  $influencer_personal_info->willing_to_traval == 0 ? 'selected' : '' }}>
                                                    No
                                                </option>
                                            </select>
<label for="username" class="focus-label">Willing To Traval</label>
                                        </div>
                                    </div>
                                   

                                </div>
                                <div class="row" >
                                    
                                    <div class="col-md-12" >
                                        <div class="form-group form-focus">
                                        
                                                <textarea class="form-control floating" style="height:120px;" name="bi">{{ $influencer_personal_info ? $influencer_personal_info->bio : '' }}</textarea>
                                                <label class="inner_label focus-label">Bio</label>
                                    
                                        
                                            {{-- <input type="text" class="form-control floating" name="bio" style="height: 100px"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->bio : '' }}"/>
                                                   <label for="username" class="inner_label focus-label">Bio</label> --}}
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
                            <input type="button" name="next" style="margin-top: 70px;" class="next action-button" value="Next"/>
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
                                                {{-- <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="instagram_username"
                                                           placeholder="Username"
                                                           value="{{ $instagramProfiles ? $instagramProfiles->username : '' }}"/>
                                                </div> --}}
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="instagram_url"
                                                           placeholder="URL" value="{{ $instagramProfiles ? $instagramProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label">Instagram URL</label>
                                                        </div>
                                                    </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id="" style=" width: 92%; margin-left: 7px;"
                                                           class="form-control floating inputbg"
                                                           name="instagram_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $instagramProfiles ? $instagramProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label"> Followers</label>
                                                        </div>
                                                </div>
                                              
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/fb.png') }}" alt="insta"
                                                         width="40">
                                                </div>
                                                {{-- <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="facebook_username"
                                                           placeholder="Username"
                                                           value="{{ $facebookProfiles ? $facebookProfiles->username : '' }}"/>
                                                </div> --}}
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg"  style=" width: 92% margin-left: 7px;" name="facebook_url"
                                                           placeholder="URL" value="{{ $facebookProfiles ? $facebookProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label">Facebook URL</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 92% ;margin-left: 7px;"
                                                           class="form-control floating"
                                                           name="facebook_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $facebookProfiles ? $facebookProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label"> Followers</label>
                                                        </div>
                                                </div>
                                         
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center " style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/tiktok.png') }}"
                                                         alt="insta" width="40">
                                                </div>
                                                {{-- <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="tiktok_username"
                                                           placeholder="Username"
                                                           value="{{ $tiktokProfiles ? $tiktokProfiles->username : '' }}"/>
                                                </div> --}}
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="tiktok_url"
                                                           placeholder="URL" value="{{ $tiktokProfiles ? $tiktokProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label">TikTok URL</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 92% ;margin-left: 7px;"
                                                           class="form-control floating inputbg"
                                                           name="tiktok_followers"
                                                           placeholder=" 10K,  1M,  2,5M "
                                                           value="{{ $tiktokProfiles ? $tiktokProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img
                                                        src="{{ asset('assets/img/social-icon/youtube.png') }}"
                                                        alt="insta" width="40">
                                                </div>
                                                {{-- <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="youtube_username"
                                                           placeholder="Username"
                                                           value="{{ $youtubeProfiles ? $youtubeProfiles->username : '' }}"/>
                                                </div> --}}
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="youtube_url"
                                                           placeholder="URL" value="{{ $youtubeProfiles ? $youtubeProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label">Youtube URL</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id="" style=" width: 92%; margin-left: 7px;"
                                                           class="form-control  floating inputbg"
                                                           name="youtube_followers"
                                                           placeholder=" 10K,  1M,  2,5M "
                                                           value="{{ $youtubeProfiles ? $youtubeProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img
                                                        src="{{ asset('assets/img/social-icon/twitter.png') }}"
                                                        alt="insta" width="40">
                                                </div>
                                                {{-- <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="twitter_username"
                                                           placeholder="Username"
                                                           value="{{ $twitterProfiles ? $twitterProfiles->username : '' }}"/>
                                                </div> --}}
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="twitter_url"
                                                           placeholder="URL" value="{{ $twitterProfiles ? $twitterProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label">Twitter URL</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 92%; margin-left: 7px;"
                                                           class="form-control floating inputbg"
                                                           name="twitter_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $twitterProfiles ? $twitterProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/snapchat.png') }}"
                                                         alt="insta"
                                                         width="40">
                                                </div>
                                                {{-- <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="snapchat_username"
                                                           placeholder="Username"
                                                           value="{{ $snapchatProfiles ? $snapchatProfiles->username : '' }}"/>
                                                </div> --}}
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="snapchat_url"
                                                           placeholder="URL" value="{{ $snapchatProfiles ? $snapchatProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label">Snapchat URL</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id="" style=" width: 92% ;margin-left: 7px;"
                                                           class="form-control floating inputbg"
                                                           name="snapchat_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $snapchatProfiles ? $snapchatProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/pinterest.png') }}"
                                                         alt="insta"
                                                         width="40">
                                                </div>
                                                {{-- <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="pinterest_username"
                                                           placeholder="Username"
                                                           value="{{ $pinterestProfiles ? $pinterestProfiles->username : '' }}"/>
                                                </div> --}}
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="pinterest_url"
                                                           placeholder="URL" value="{{ $pinterestProfiles ? $pinterestProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label">Pinterest URL</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 92% ;margin-left: 7px;"
                                                           class="form-control floating inputbg"
                                                           name="pinterest_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $pinterestProfiles ? $pinterestProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/web.jpg') }}" alt="insta"
                                                         width="40">
                                                </div>
                                                {{-- <div class="col-md-3">
                                                    <input type="text" id=""
                                                           class="form-control"
                                                           name="web_username"
                                                           placeholder="Username"
                                                           value="{{ $webProfiles ? $webProfiles->username : '' }}"/>
                                                </div> --}}
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="web_url"
                                                           placeholder="URL" value="{{ $webProfiles ? $webProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label">Web URL</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 92%; margin-left: 7px;"
                                                           class="form-control floating inputbg"
                                                           name="web_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $webProfiles ? $webProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label"> Followers</label>
                                                        </div>
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
                                        <label for="" style="color:#0504aa;font-weight:bold;"> Instagram URL</label>
                                        <input type="text"
                                               placeholder=""
                                               class="form-control inputbg" name=""
                                               style="border:0px solid #1A237E;!important"/>
                                    </div>
                                </div>
                                <label style="color:#0504aa;font-weight:bold;">Or Upload  images</label>
                                <div class="row mt-2" style="margin-left: 108px">
                                    <div class="col-md-10 dropzone-container" id="myDropzone" style="border: white">
                                      <span>Click here or drag and drop files to upload</span>
                                    </div>
                                  </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous"
                                   value="Previous"/>
                            <input type="button" name="next" class="next action-button submit-btn" value="Submit"/>
                            
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

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    {{-- <script src="{{ asset('assets/js/skills.js') }}"></script> --}}
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    
  
  <script>
          




        $(document).ready(function () {
            show_img();
            show_img('#image0', '#logo0');
            // $('.feature-select2').select2();
            // $('.category_id').select2();

            $('.datepicker').datepicker({
                format: 'dd-M-yyyy'
            });
            $('.select2').select2();


            Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#myDropzone", {
      url: "/your-upload-endpoint", // Set your upload endpoint URL here
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 5, // MB
      acceptedFiles: "image/*",
      addRemoveLinks: false, 
      init: function() {
        this.on("addedfile", function(file) {
            console.log("File added:", file);
            var removeButton = Dropzone.createElement("<button class='remove-button' style='width: 25px;height: 25px; border: none; background-color: transparent;position: absolute;color: #FF5A5A; top: 5px; right: 5px; z-index: 10;font-size: 14px;font-weight: bolder;cursor: pointer; transition: transform 0.2s ease;'>X</button>");
            var _this = this;
            removeButton.addEventListener("click", function(e) {
                alert('dd');
                e.preventDefault();
                e.stopPropagation();
                _this.removeFile(file);
            });
            file.previewElement.appendChild(removeButton);
        });
        this.on("removedfile", function(file) {
            console.log("File removed:", file);
        });
    }
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
