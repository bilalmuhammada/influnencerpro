@extends('layout.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .profile {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
}
.font-change{
    margin-top: 7px;
    font-size: 13px;
    color: blue;

}
.linespace{
    line-height: 1.25;

}
.delete-icon:hover{
    filter: hue-rotate(220deg) saturate(2) brightness(1.2);


}

.form-group::first-letter {
    text-transform: uppercase !important;
} 


.lobibox-notify.notify-mini .lobibox-notify-body {
    margin: 7px 1px 0px 0px !important;
}
.lobibox-notify, .lobibox-notify-success, .animated-fast, .fadeInDown, .notify-mini{
    width: 110px !important;
    margin-right: 110px !important; 
    /* text-align: center !important; */
}
.profile h1 {
    margin-top: 160px;
    margin-bottom: 10px;
}

.profile .contact-info {
    margin-bottom: 5px;
}

.profile h2 {
    margin-top: 20px;
    margin-bottom: 10px;
}

.profile ul {
    padding-left: 20px;
}

.profile ul li {
    margin-bottom: 5px;
}

.profile .job-info {
    font-style: italic;
    margin-bottom: 5px;
}

.profile .job-description {
    margin-bottom: 20px;
}
.social-wrapper:hover .followers-count {
    color:goldenrod; /* Change to your desired hover color */
}



#downloadButton {
    width: 30px;
    margin: 6px;
    height: 30px;

    border: none;
    color: rgb(0, 0, 0);
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}


/* Icon styles */






.gallerys {
    position: relative;
    overflow: hidden;
}

.avatar-one {
    position: relative;
    box-shadow: 1px 1px 1px 1px #eee;
}

.image-actions {
    position: absolute;
    top: 10px;
    right: 10px;
    display: none; /* Hide by default */
    /* background: rgba(255, 255, 255, 0.8); Optional: background for better visibility */
    padding: 5px;
    border-radius: 4px;
}

.gallerys:hover .image-actions {
    display: flex; /* Show when hovering over the gallery container */
}
.open-chat:hover{
    
color: goldenrod !important;
}
.open-chat{
    color: blue !important;
}

.image-actions img {
    width: 12px;
    height: 15px;
    cursor: pointer;
}
::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
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

.shaking {
    display: inline-block;
    transition: transform 0.2s ease-in-out;
   }

   .social-wrapper:hover .shaking  {
    animation: shake 1.5s linear infinite;
   }

  @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }
</style>
@section('content')

    @php
        $influencer = getInfluencerById(request()->id);
        $influencersByCategory = getInfluencersByCategoryId($influencer->user_professional_detail ? $influencer->user_professional_detail->category_id : '');

        $main_availability = $influencer->availabilities->where('is_default', 1)->first();
        $availabilities = $influencer->availabilities->where('is_default', 0);
//    dd($influencer->image_url
   @endphp

    <div class="content  pdfdownload" id="pdfdownload" style="padding-top: 100px; " >
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar gallerys" style="border:0px solid red;">

                    <div class="card search-filter" style="border:0px solid red;">
                        <!-- <div class="card-header d-flex justify-content-between"> -->
                        <div class="card-header__">
                            <div class="influencer project-img" style="border-radius:0.2rem !important; " id="influencer">
                                <a href="{{ $influencer ? $influencer->influencer_profile_image_main : '' }}">
                                <img class="card-title mb-0" src="{{ $influencer ? $influencer->influencer_profile_image_main : '' }}"
                                     alt="author"
                                     width="100%" height="208px">
                                </a><br/>
                            </div>
                            <!-- <lable>Book Talent<i class="fa fa-email"></i></lable> -->
                            <!-- <a href="javascript:void(0);">Clear All</a> -->
                        </div>
                        <div class="card-body" style="background-color:#f2e49c;height: auto;">

                            <div class="filter-widget">
                                <h4><b>Profile Info</b></h4>
                            </div>
                            <div class="row" style="line-height: 1;">
                                {{-- <div class="col-md-6" style="height:65px;margin-bottom:9px;">
                                    <label class="font-label">Category</label>
                                    <div class="form-group">
                                        <p class="badge badge-pill badge-skill">
                                        @foreach ($influencer->categories as $category)
                                                {{ $category->category->name ?? '' }}
                                                <br>
                                            @endforeach
                                    </p>
                                    </div>
                                </div> --}}
                                <div class="col-md-6" >
                                    <label class="font-label">Art</label>
                                    <div class="form-group linespace">
                                        <span class="badge badge-pill badge-skill">@foreach($influencer->arts as $art){{ getSafeValueFromObject($art, 'art_name') }}<br>@endforeach</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-label">Languages</label>
                                    <div class="form-group linespace">
                                        <span class="badge badge-pill badge-skill">
                                            @php $langShown = false; @endphp
                                            @foreach ($influencer->spoken_languages as $sl)
                                                @if($sl->spoken_language)
                                                    {{ $sl->spoken_language->name }}<br>
                                                    @php $langShown = true; @endphp
                                                @endif
                                            @endforeach
                                            
                                            @if(!$langShown)
                                                @if($influencer->personal_information && $influencer->personal_information->spoken_language)
                                                    {{ $influencer->personal_information->spoken_language->name }}
                                                @elseif($influencer->personal_information && $influencer->personal_information->dialects)
                                                    {{ $influencer->personal_information->dialects }}
                                                @endif
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Ethnicity</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ $influencer->personal_information->ethnicity->name ?? '' }}</span>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6" >
                                    <label class="font-label">Nationality</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->country, 'name') }}</span>
                                    </div>
                                </div> --}}
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Gender</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ ucfirst(getSafeValueFromObject($influencer->personal_information, 'gender')) }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Age</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'age') }}</span>
                                    </div>
                                </div>
                               
                                <div class="col-md-6" style="margin-top: 8px;" >
                                    <label class="font-label">Hair Type</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ $influencer->personal_information ? Str::ucfirst( $influencer->personal_information->hair_type) : '' }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;" >
                                    <label class="font-label">Hair Color</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ $influencer->personal_information ? Str::ucfirst($influencer->personal_information->hair_color) : '' }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Eye Color</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ ucfirst($influencer->personal_information->eye_color ?? '') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Height-CM</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'height') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Weight-KG</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'weight') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;" >
                                    <label class="font-label">Shoes Size-EU</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'shoes_size') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6"  style="margin-top: 8px;">
                                    <label class="font-label">Cloth Size-EU</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'clothsize') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Tattoo</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->tattoes : '' }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Willing to Travel</label>
                                    <div class="form-group linespace">
                                        <span
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'willing_to_travel_formatted') }}</span>
                                    </div>
                                </div>
                               
                                {{-- <div class="col-md-6" >
                                    <label class="font-label">Availability</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill"
                                            style="width:100%; font-size: 12px !important;" >{{formatDateToread($influencer->personal_information->main_available_from_date ?? '')}}&nbsp;&nbsp;&nbsp;&nbsp;{{formatDateToread($influencer->personal_information->base_date ?? '')}} --}}
                                            {{-- {{ $main_availability ? formatDateToread($main_availability->availability_from_date)  : '' }} --}}
                                        {{-- </span>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-md-6" >

                                </div> --}}
                                <!-- <div class="col-md-12"> -->
                            <!-- <label class="font-label">Platforms Icons</label>
                                    <div class="form-group">
                                        @foreach($influencer->social_media_profiles as $social)
                                <span class="badge badge-pill badge-skill"><img
                                        src="{{ $social->icon_url }}" alt="{{ $social->type }}"
                                                    width="20"></span>
                                        @endforeach
                                </div> -->
                                <!-- </div> -->
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Based City</label>
                                    @php
                                    $city = null;
                                    $main_available_from_date = '';
                                    if($influencer->personal_information !=null){
                                        $main_available_from_date=  $influencer->personal_information->main_available_from_date;   
                                        $city =  DB::table('cities')->where('id',$influencer->personal_information->city_id )->first();
                                    }
                                   @endphp
                                    <div class="form-group linespace">
                                        <span
                                            class="badge badge-pill badge-skill">{{$city->name ?? ''}}
                                            {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                        </span>
                                        <br>
                                        
                                          <span
                                          class="badge badge-pill badge-skill">{{   formatDateToShowread($main_available_from_date ?? '')}}
                                          {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                      </span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Based Country</label>
                                    @php
                                    $country = null;
                                    $base_date = '';
                                    if($influencer->personal_information !=null){
                                        $base_date = $influencer->personal_information->base_date;
                                        $country =  DB::table('countries')->where('id',$influencer->personal_information->country_id)->first();
                                    }
                                    @endphp
                                      <div class="form-group linespace">
                                          <span
                                              class="badge badge-pill badge-skill">{{$country->name ?? ''}} 
                                              {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                          </span>
                                          
                                          <br> 
                                          <span
                                        
                                          class="badge badge-pill badge-skill">{{formatDateToShowread($base_date ?? '')}}
                                          {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                      </span>
                                      </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Traveling City</label>
                                    @php
                                    $city1 = null;
                                    $travlling_one_from_date = '';
                                    if($influencer->personal_information !=null){
                                        $travlling_one_from_date =  $influencer->personal_information->travlling_one_from_date;
                                        if($influencer->personal_information->travlling_one_city_id){
                                            $city1 =  DB::table('cities')->where('id',$influencer->personal_information->travlling_one_city_id)->first();
                                        }
                                    }
                                    @endphp
                                     <div class="form-group linespace">
                                        <span
                                            class="badge badge-pill badge-skill">{{$city1->name ?? ''}}
                                            {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                        </span>
                                        <br>
                                          <span
                                          class="badge badge-pill badge-skill">{{formatDateToShowread($travlling_one_from_date ?? '')}}
                                          {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                      </span>
                                    </div>
                                </div>
                                    <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Traveling Country  &nbsp;&nbsp;1</label>
                                    @php
                                    if($influencer->personal_information !=null){
                                        $travlling_one_to_date= $influencer->personal_information->travlling_one_to_date;
                                    $country1 =  DB::table('countries')->where('id',$influencer->personal_information->travlling_one_country_id)->first();
                                    }
                                    @endphp
                                      <div class="form-group linespace">
                                          <span
                                              class="badge badge-pill badge-skill">{{$country1->name ?? ''}}
                                              {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                          </span>
                                          <br>
                                          <span
                                          class="badge badge-pill badge-skill">{{formatDateToShowread($travlling_one_to_date ?? '')}}
                                          {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                      </span>
                                      </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Traveling City </label>
                                    @php
                                    $city2 = null;
                                    $travlling_two_from_date = '';
                                    if($influencer->personal_information !=null){
                                        $travlling_two_from_date =  $influencer->personal_information->travlling_two_from_date;
                                        if($influencer->personal_information->travlling_two_city_id){
                                            $city2 =  DB::table('cities')->where('id',$influencer->personal_information->travlling_two_city_id)->first();
                                        }
                                    }
                                    @endphp
                                      <div class="form-group linespace">
                                        <span
                                            class="badge badge-pill badge-skill">{{$city2->name ?? ''}}
                                            {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                        </span>
                                        <br>
                                        <span
                                        class="badge badge-pill badge-skill">{{formatDateToShowread($travlling_two_from_date ?? '')}}
                                        {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                    </span>
                                    </div>
                                </div>
                                    <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Traveling Country &nbsp;&nbsp;2</label>
                                    @php
                                    $country2 = null;
                                    $travlling_two_to_date = '';
                                    if($influencer->personal_information !=null){
                                        $travlling_two_to_date =  $influencer->personal_information->travlling_two_to_date;
                                        if($influencer->personal_information->travlling_two_country_id){
                                            $country2 =  DB::table('countries')->where('id',$influencer->personal_information->travlling_two_country_id)->first();
                                        }
                                    }
                                    @endphp
                                      <div class="form-group linespace">
                                          <span
                                              class="badge badge-pill badge-skill">{{$country2->name ?? ''}}
                                              {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                          </span>
                                          <br>
                                          <span
                                          class="badge badge-pill badge-skill">{{formatDateToShowread($travlling_two_to_date ?? '')}}
                                          {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                      </span>
                                      </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Traveling City</label>
                                    @php
                                    $city3 = null;
                                    $travlling_three_from_date = '';
                                    if($influencer->personal_information !=null){
                                        $travlling_three_from_date =  $influencer->personal_information->travlling_three_from_date;
                                        if($influencer->personal_information->travlling_three_city_id){
                                            $city3 =  DB::table('cities')->where('id',$influencer->personal_information->travlling_three_city_id)->first();
                                        }
                                    }
                                    @endphp
                                    <div class="form-group linespace">
                                        <span
                                            class="badge badge-pill badge-skill">{{$city3->name ?? ''}}
                                            {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                        </span>
                                        <br>
                                        <span
                                        class="badge badge-pill badge-skill">{{formatDateToShowread($travlling_three_from_date ?? '')}}
                                        {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                    </span>
                                    </div>
                                </div>
                                    <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Traveling Country &nbsp;&nbsp;3</label>
                                    @php
                                    $country3 = null;
                                    $travlling_three_to_date = '';
                                    if($influencer->personal_information !=null){
                                       $travlling_three_to_date =  $influencer->personal_information->travlling_three_to_date;
                                       if($influencer->personal_information->travlling_three_country_id){
                                            $country3 =  DB::table('countries')->where('id',$influencer->personal_information->travlling_three_country_id)->first();
                                       }
                                    }
                                    @endphp
                                      <div class="form-group linespace">
                                          <span
                                              class="badge badge-pill badge-skill" style="margin-bottom: 12px;">{{$country3->name ?? ''}}
                                              {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                          </span>
                                          <br>
                                        
                                          <span
                                          class="badge badge-pill badge-skill" >{{formatDateToShowread($travlling_three_to_date ?? '')}}
                                          {{-- {{ getSafeValueFromObject($influencer->personal_information, 'name') }} --}}
                                      </span>
                                      </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label">Price Negotiable</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ $influencer->personal_information && $influencer->personal_information->price_negotiable==1 ? "Yes" : " "  }}
                                            {{-- {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }} --}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 8px;">
                                    <label class="font-label"> Collaboration</label>
                                    <div class="form-group">
                                        <span
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'is_collaboration_formatted') }}</span>
                                    </div>
                                </div>
                               
                                <div class="col-md-12" style="margin-top: 8px;" >
                                    <label class="font-label">Price Include</label>
                                    <div class="form-group">
                                        <p style="text-align:justify;line-height: 1.5rem !important;" 
                                            class="badge-skill">{{$influencer->personal_information->price_include ?? ''}}
                                            {{-- {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_include_formatted') }} --}}
                                        </p>
                                    </div> 
                                </div>
                                
                              
                              
                                <div class="col-md-12" style="margin-top: 8px;">
                                    <label class="font-label">Bio</label>
                                   
                                    <div class="form-group">
                                    <p style="text-align:justify;line-height: 1.5rem !important;" class="badge-skill">
                                    {{ getSafeValueFromObject($influencer->personal_information, 'bio') }}
                                     </p>
                                        <!-- <div
                                            class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'bio') }}</div> -->
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="btn-search">
                                <button type="button" class="btn btn-block">Search</button>
                            </div> -->
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>
                        <span style="font-size:30px;padding-left:3px; display: flex; margin-top: -12px;">
                            {{ $influencer ? $influencer->full_name : ''}}
                             <a href="javascript:void(0)" style="margin: 9px 10px 0px 18px;" class="share-link" onclick="shareLink()">
                                        <img src="{{ asset('assets/img/icons/share.png') }}" alt=""  class="shaking" width="30px">
                                    </a>
                                <a id="downloadButton bilal-influncerdetail" style="margin: 9px 6px 0px 0px;" class="downloadButton">
                                    {{-- <i class="fas fa-download" style="color: blue;"></i> --}}
                                    <img src="{{ asset('assets/img/icons/dwnld.png') }}"  class="shaking" alt="" width="30px">
                                </a>
                                   
                                    <div class="text-center" style="font-size: 11px;">&nbsp;</div>
                          
                        </span></strong>
                            {{--&nbsp;<small>({{ $influencer->total_clicks }})</small>--}}
                        </div>
                        <div class="col-md-6" style="padding-top:5px;">
                            {{-- <div class="text-end">
                                @if(empty($chat) || $chat->status == 'rejected')
                                    <button id="send-chat-request-for-chat" onclick="sendRequestCall()" type="button"
                                            style="border:none;background:inherit;border:1px solid #eee;padding:5px 30px;">
                                        Chat
                                    </button>
                                    <!-- <button class="btn btn-primary send-chat-request">Chat Request Send</button> -->
                                @elseif($chat->status == 'accepted')--}}
                                   
                                {{-- @endif
                            </div>  --}}
                        </div>
                    </div>
                    @php
                        $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                        $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                        $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                        $youtube = getInfluencerSocialMediaProfileByTypeAndId('youtube', $influencer->id);
                        $twitter = getInfluencerSocialMediaProfileByTypeAndId('twitter', $influencer->id);
                        $snapchat = getInfluencerSocialMediaProfileByTypeAndId('snapchat', $influencer->id);
                        $pinterestProfiles = getInfluencerSocialMediaProfileByTypeAndId('pinterest', $influencer->id);
                        $web = getInfluencerSocialMediaProfileByTypeAndId('web', $influencer->id);
            //    dd( , isset($instagram->followers) );
                  @endphp
                    <div class="details" style=" margin-top:57px;hight:auto;padding:7px 3px;">
                       
                        <ul style="list-style-type: none;">
                            @if($instagram && isset($instagram->followers))
                            <li style="display: inline-block;">
                                <div class="social-wrapper" style="text-align: center;">

                                        <a href="{{ $instagram ? 'https://' . ltrim($instagram->url, 'https://') : ''}}" target="_blank" rel="noopener noreferrer">
                                       
                                        <img src="{{ asset('assets/img/social-icon/insta.png') }}" class="shaking" alt="" width="30px">
                                    </a>
                                    <div class="text-center font-change followers-count">
                                        {{ strtoupper($instagram ? $instagram->followers : 0) }}
                                    </div>
                                </div>
                            </li> &nbsp; &nbsp;
                            @endif
                            
                            @if($twitter  && isset($twitter->followers))
                            <li style="display: inline-block;">
                                <div class="social-wrapper" style="text-align: center;">
                                    <a href="{{ $twitter ? 'https://' . ltrim($twitter->url, 'https://') : ''}}" target="_blank" rel="noopener noreferrer">
                                       
                                        <img src="{{ asset('assets/img/social-icon/twitter.png') }}" class="shaking" alt="" width="30px">
                                    </a>
                                    <div class="text-center font-change followers-count">
                                        {{ strtoupper($instagram ? $instagram->followers : 0) }}
                                    </div>
                                </div>
                            </li> &nbsp; &nbsp;
                            @endif
                            
                            @if($youtube && isset($youtube->followers))
                            <li style="display: inline-block;">
                                <div class="social-wrapper" style="text-align: center;">
                                    <a href="{{ $youtube ? 'https://' . ltrim($youtube->url, 'https://') : ''}}" target="_blank" rel="noopener noreferrer">
                                       
                                        <img src="{{ asset('assets/img/social-icon/youtube.svg') }}" class="shaking" alt="" width="30px">
                                    </a>
                                    <div class="text-center font-change followers-count">
                                        {{ strtoupper($youtube ? $youtube->followers : 0) }}
                                    </div>
                                </div>
                            </li> &nbsp; &nbsp;
                            @endif
                            @if($tiktok && isset($tiktok->followers))
                            <li style="display: inline-block;">
                                <div class="social-wrapper" style="text-align: center;">
                                    <a href="{{ $tiktok ? 'https://' . ltrim($tiktok->url, 'https://') : ''}}" target="_blank" rel="noopener noreferrer">
                                       
                                        <img src="{{ asset('assets/img/social-icon/tiktok.png') }}" class="shaking" alt="" width="30px">
                                    </a>
                                    <div class="text-center font-change followers-count">
                                        {{ strtoupper($tiktok ? $tiktok->followers : 0) }}
                                    </div>
                                </div>
                            </li> &nbsp; &nbsp;
                            @endif
                            @if($facebook && isset($facebook->followers))
                            <li style="display: inline-block;">
                                <div class="social-wrapper" style="text-align: center;">
                                    <a href="{{ $facebook ? 'https://' . ltrim($facebook->url, 'https://') : ''}}" target="_blank" rel="noopener noreferrer">
                                       
                                        <img src="{{ asset('assets/img/social-icon/fb.png') }}" class="shaking" alt="" width="30px">
                                    </a>
                                    <div class="text-center font-change followers-count">
                                        {{ strtoupper($facebook ? $facebook->followers : 0) }}
                                    </div>
                                </div>
                            </li> &nbsp; &nbsp;
                            @endif
                            
                            @if($snapchat && isset($snapchat->followers))
                            <li style="display: inline-block;">
                                <div class="social-wrapper" style="text-align: center;">
                                    <a href="{{ $snapchat ? 'https://' . ltrim($snapchat->url, 'https://') : ''}}" target="_blank" rel="noopener noreferrer">
                                     
                                        <img src="{{ asset('assets/img/social-icon/snapchat.png') }}" class="shaking" alt="" width="33px">
                                    </a>
                                    <div class="text-center font-change followers-count">
                                        {{ strtoupper($snapchat ? $snapchat->followers : 0) }}
                                    </div>
                                </div>
                            </li> &nbsp; &nbsp;
                        @endif
                        
                        @if($pinterestProfiles && isset($pinterestProfiles->followers))
                        <li style="display: inline-block;">
                            <div class="social-wrapper" style="text-align: center;">
                                <a href="{{ $pinterestProfiles ? 'https://' . ltrim($pinterestProfiles->url, 'https://') : ''}}" target="_blank" rel="noopener noreferrer">
                                     
                                    <img src="{{ asset('assets/img/social-icon/pinterest.png') }}" class="shaking" alt="" width="30px">
                                </a>
                                <div class="text-center font-change followers-count">
                                    {{ strtoupper($pinterestProfiles ? $pinterestProfiles->followers : 0) }}
                                </div>
                            </div>
                        </li> &nbsp; &nbsp;
                @endif
                @if($web && isset($web->followers))
                <li style="display: inline-block;">
                    <div class="social-wrapper" style="text-align: center;">
                        <a href="{{ $web ? 'https://' . ltrim($web->url, 'https://') : ''}}" target="_blank" rel="noopener noreferrer">
                                    
                            <img src="{{ asset('assets/img/social-icon/web.png') }}" class="shaking" alt="" width="30px">
                        </a>
                        <div class="text-center font-change followers-count">
                            {{ strtoupper($web ? $web->followers : 0)  }}
                        </div>
                    </div>
                </li> &nbsp;
                  @endif
                         <li style="display: inline-block;float: right; margin-right: -14px; margin-top: -14px;">
                           
                            <a class="open-chat btn" style="font-size: 21px;"
                                href="{{ env('BASE_URL') }}/chats?i={{ $influencer->id }}&u={{ $influencer->name }}"><b>
                                 Chat
                                </b>
                            </a> 
                         </li> 
                        </ul>
                        <!-- <span style="font-size: 14px;"><img src="assets/img/social-icon/insta.png" alt="" width="30px">&nbsp;&nbsp;&nbsp;<img src="assets/img/social-icon/fb.png" alt="" width="30px">&nbsp;&nbsp;&nbsp;<img src="assets/img/social-icon/tiktok.png" alt="" width="30px"></span> -->
                    </div>
                    @php
                    // dd($influencer->user_professional_detail);
                    @endphp
                    <div class="details" style="margin-top:4px;">
                        <div class="row">
                            <div class="col-md-3">
                                <span style="font-size: 14px; font-weight: bold; padding: 0px 3px; color: blue;">
                                    {!! $influencer->categories->map(function($category, $index) {
                                        return ($index === 0 
                                        ? '<span style="color: black; font-style: italic;">#</span> ' 
                                            : '') . $category->name;
                                    })->join(',&nbsp;') !!}
                                </span>
                            </div>
                            
                            @php
                            if($influencer->personal_information!=null){
                            $city =  DB::table('cities')->where('id',$influencer->personal_information->city_id)->first();
                            $country =  DB::table('countries')->where('id',$influencer->personal_information->national_id)->first();
                            }
                              @endphp
                              <div class="col-md-3"><span
                                style="font-size: 14px;padding:0px 3px;font-weight:bold;"> <span  >City: </span> 
                                <span style="color: blue;">
                                    {{ $city->name ?? '' }}
                                    </span>
                                {{-- {{ getSafeValueFromObject($influencer->state, 'name') }} --}}
                            </span>
                        </div>
                            <div class="col-md-3"><span
                                    style="font-size: 14px;padding:0px 3px;font-weight:bold;"> <span >Nationality: </span>
                                    <span style="color: blue;"> {{ $country->name ?? '' }}</span>
                                    {{-- {{ getSafeValueFromObject($influencer->user_professional_detail, 'name') }} --}}
                                </span>
                            </div>
                            <div class="col-md-3"><span
                                style="font-size: 14px;padding:0px 3px;font-weight:bold;"><span >Price: </span> 
                                <span style="color: blue;">{{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }}</span>
                                {{-- {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }} --}}
                            </span>
                        </div>
                            
                       
                            {{--<div class="col-md-3"><span style="font-size: 14px;font-weight:bold;padding:0px 3px;">Age: {{ getSafeValueFromObject($influencer->personal_information, 'age') }}</span></div>--}}
                        </div>
                    </div>
                <!-- <div class="profile" style="margin-top: 8px;">
                        <strong><span style="font-size:30px;">Profile</span><small><a
                                    href="{{ env('BASE_URL') . 'influencer/complete-profile' }}">Edit
                                    Profile</a></small></strong>
                    </div> -->


                    <!-- <div class="sort-tab"> -->
                    <!-- <div class="row align-items-center"> -->
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="freelance-view">
                                <h4>Showing 1 - 12 of 455</h4>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="d-flex justify-content-sm-end">
                            <div class="sort-by">
                                <select class="custom-select">
                                <option>Relevance</option>
                                <option>Rating</option>
                                <option>Popular</option>
                                <option>Latest</option>
                                <option>Free</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
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
                   
                    <div class="row" style="margin-top: -9px;">

                

                        @forelse($influencer->influencer_profile_images as $image)
<div class="col-md-3 col-lg-3 col-xl-3 gallerys p-3">
    <div class="avatar-one project-img" style="width:100%;   border-radius:0.3rem !important; ">
        <a href="{{ $image->file_name_url }}">
            <img src="{{ $image->file_name_url }}" alt="author" width="100%" height="200px">
        </a>
        
        @if($influencer->role_id==session()->get('User')['role_id'])
        <div class="image-actions">
            {{-- <a href="{{ $image->file_name_url }}" download class="btn  mr-2" style="padding: 0;">
                <img src="{{ asset('assets/icons/dwnl.png') }}" alt="Download" style="width: 24px; height: 24px;">
            </a> --}}
            
            <img src="{{ asset('assets/icons/close.png') }}" alt="Delete" class="delete-icon" data-url="{{ route('influencer.image.delete', ['id' => $image->id]) }}">
        </div>
        @endif
    </div>
</div>
@empty
<div class="col-12 text-center" style="margin-top: 20px;">
    <p>No Images</p>
</div>
@endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- @include('pages.files.components.table.ajax') --}}
    {{-- @include("vendor-dashboard.influncerProfiledownload"); --}}
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <script>
        
    $(document).ready(function() {

        $('.downloadButton').on('click', function() {

            let element = document.getElementById("pdfdownload");
         
            

            const logoUrl = "{{ asset('assets/img/logo/Influencers Pro-01-01.png')  }}";
            const influencerName = '{{ $influencer->full_name }}';


            html2pdf()
            .from(element)
            .set({
                margin: 6,
                filename: `InfluencerPro - ${influencerName}.pdf`,
                image: { type: 'jpeg', quality: 0.98 },
                // html2canvas: { scale: 1 },
          html2canvas: { 
            scale: 2, // Ensure proper scaling
            useCORS: true, // Allow cross-origin images
            letterRendering: true, // Improve text rendering
            allowTaint: true, // Allow tainted images
            logging: true, // Enable logging for debugging
        },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
            })
            .toPdf()
            .get('pdf')
            .then(function (pdf) {
                const pageWidth = pdf.internal.pageSize.getWidth();  // A4 Landscape Width (297mm)
                const pageHeight = pdf.internal.pageSize.getHeight(); // A4 Landscape Height (210mm)
                const totalPages = pdf.internal.getNumberOfPages();
                const imgWidth = 100 * 0.6;  // 60% of page width for better appearance
                const imgHeight = 80 * 0.2; // Maintain aspect ratio (adjust as needed)
                const centerX = (pageWidth - imgWidth) / 2;
                const topY = 3; // Adjust Y-position for top placement
                const bottomY = pageHeight - imgHeight-6 ; // Adjust Y-position for bottom placement

                const text = "© InfluencerPro.org {{ date('Y') }}, All Rights Reserved.";
        
                // Add Centered Logo at the Top of the First Page
                pdf.setPage(1);
                pdf.addImage(logoUrl, 'PNG', centerX, topY, imgWidth, imgHeight);

                // Add Centered Logo at the Bottom of the Last Page
                pdf.setPage(totalPages);
                pdf.addImage(logoUrl, 'PNG', centerX, bottomY, imgWidth, imgHeight);
                const textX = centerX - 7; // Adjust horizontal position if needed
             const textY = bottomY + imgHeight; // Position text below the image (2 units margin)

        // Set text styling
        pdf.setFontSize(10); // Reduce font size to make it fit
        pdf.setFont("helvetica", "normal"); // Set font family
        pdf.setTextColor(0, 73, 142); // Set text color (#00498e in RGB)

        // Add the text
        pdf.text(text, textX, textY);


                
            pdf.setFontSize(5);  // Reduce font size to make it fit
       
                pdf.save(`InfluencerPro - ${influencerName}.pdf`);
            });






         });
        // Handle delete icon click
        $('.delete-icon').on('click', function() {
           
            var url = $(this).data('url');
            var imageElement = $(this).closest('.gallerys');
            if (confirm('Are you sure you want to delete this image?')) {
                var imageId = $(this).data('image-id');
                var $this = $(this);

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            imageElement.remove();
                            show_success_message(response.message);
                        } else {
                            show_error_message(response.message);
                        }
                        // On success, remove the image element or show a success message
                        // $this.closest('.gallerys').remove();
                        // t('Image deleted successfully.');
                       
                    },
                    error: function(xhr) {
                        // Handle errors
                        console.log('An error occurred while deleting the image.');
                    }
                });
            }
        });
    });




    
        $(document).ready(function () {
            console.log('hello');
            // $(".influencer").mouseover(function () {
            //     $(".influencerdetail").show();
            //     $(".influencer").hide();
            // });
            // $(".influencer").mouseout(function () {
            //     $(".influencerdetail").hide();
            //     $(".influencer").show();
            // });

            $('.gallerys').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enable: true
                }
            });
        });

        // Get the image and text elements by their IDs
        const image = document.getElementById('influencer');
        const text = document.getElementById('influencerdetail');

        // Add a mouseover event listener to the image
        image.addEventListener('mouseover', () => {
            // Show the text when hovering over the image
            text.style.display = 'block';
            image.style.display = 'none';
        });

        // Add a mouseout event listener to the image
        text.addEventListener('mouseout', () => {
            // Hide the text when the mouse leaves the image
            text.style.display = 'none';
            image.style.display = 'block';
        });

        function sendRequestCall() {
            $.ajax({
                url: api_url + 'chats/send-chat-request',
                method: 'POST',
                data: {
                    user_id: "{{ request()->id }}",
                },
                success: function (response) {
                    if (response.status) {
                        show_success_message(response.message);
                    }
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        function shareLink() {






            console.log('klsdf')
            // Create a dummy input element
            var dummyInput = document.createElement('input');
            // Set its value to the current URL
            dummyInput.value = window.location.href;
            // Append it to the body
            document.body.appendChild(dummyInput);
            // Select the text in the input
            dummyInput.select();
            // Execute the copy command
            document.execCommand('copy');
            // Remove the input element
            document.body.removeChild(dummyInput);

            // Optionally, you can provide user feedback (e.g., show a tooltip)
            show_success_message('URL Copied');
        }
    </script>
@endsection

@section('page_scripts')


@endsection

