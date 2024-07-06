
<style>
    .badge-skill{
        padding: 2px !important;

    }
</style>
<div class="content" id="profile" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-4 theiaStickySidebar" style="border:0px solid red; height: 900px;">

                <div class="card search-filter" style="border:0px solid red;">
                    <!-- <div class="card-header d-flex justify-content-between"> -->
                    <div class="card-header__">
                        <div class="influencer" id="influencer">
                            <img class="card-title mb-0" src="{{ $influencer ? $influencer->image_url : '' }}"
                                 alt="author"
                                 width="100%" height="200px"><br/>
                        </div>
                        <!-- <lable>Book Talent<i class="fa fa-email"></i></lable> -->
                        <!-- <a href="javascript:void(0);">Clear All</a> -->
                    </div>
                    <div class="card-body" style="background-color:#efc89f;">

                        <div class="filter-widget">
                            <h4><b>Profile Info</b></h4>
                        </div>
                        <div class="row">
                            <div class="col-md-4" >
                                <label class="font-label">Category</label>
                                <div class="form-group">
                                    <p class="badge badge-pill badge-skill">
                                    @foreach ($influencer->categories as $category)
                                            {{ $category->category->name ?? '' }}
                                            <br>
                                        @endforeach
                                </p>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Languages</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">@foreach ($influencer->spoken_languages as $spokenLanguage)
                                            {{ $spokenLanguage->spoken_language?->name }}
                                            <br>
                                        @endforeach</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Ethnicity</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ $influencer->personal_information->ethnicity->name ?? '' }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Nationality</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->country, 'name') }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Age</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'age') }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Gender</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'gender') }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Hair Type</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->hair_type : '' }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Hair color</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->hair_color : '' }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Eye color</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'eye_color') }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Height-CM</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'height') }} </span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Weight-KG</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'weight') }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Shoes Size-EU</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'shoes_size') }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Tattoo</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->tattoes : '' }}</span>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <label class="font-label">Art</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">
                                        @foreach($influencer->arts as $art)
                                            {{ getSafeValueFromObject($art, 'art_name') }}
                                            <br>
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                            {{-- <div class="col-md-4" > --}}

                            {{-- </div> --}}
                             <div class="col-md-12"> 
                       <label class="font-label">Platforms Icons</label>
                                <div class="form-group">
                                    @foreach($influencer->social_media_profiles as $social)
                            <span class="badge badge-pill badge-skill"><img
                                    src="{{ $social->icon_url }}" alt="{{ $social->type }}"
                                                width="20"></span>
                                    @endforeach
                            </div>
                             </div>
                            <div class="col-md-6" >
                                <label class="font-label">Based City</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->city, 'name') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <label class="font-label">Based Country</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->country, 'name') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <label class="font-label">Availability</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill"
                                        style="width:100%;">{{ $main_availability ? formatDateToread($main_availability->availability_from_date)  : '' }}</span>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <label class="font-label">&nbsp;</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill"
                                        style="width:100%;">{{ $main_availability ? formatDateToread($main_availability->availability_to_date)  : '' }}</span>
                                </div>
                            </div>
                            @foreach($availabilities as $availability)
                                <div class="col-md-6" >
                                    <label class="font-label">Other City</label>
                                    <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($availability->city, 'name') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-label"> Other Country</label>
                                    <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($availability->country, 'name') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" >
                                    <label class="font-label">Availability</label>
                                    <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill"
                                        style="width:100%;">{{ formatDateToread(getSafeValueFromObject($availability, 'availability_from_date')) }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6" >
                                    <label class="font-label">&nbsp;</label>
                                    <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill"
                                        style="width:100%;">{{ formatDateToread(getSafeValueFromObject($availability, 'availability_to_date')) }}</span>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-md-4" >
                                <label class="font-label">Willing to Travel</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'willing_to_travel_formatted') }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="font-label">Price<br/> &nbsp;</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }}</span>
                                </div>
                            </div>

                            <div class="col-md-4" >
                                <label class="font-label">Open for Collaboration</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->personal_information, 'is_collaboration_formatted') }}</span>
                                </div>
                            </div>


                            {{--                                <div class="col-md-6">--}}
                            {{--                                    <label class="font-label">Price Negotiable</label>--}}
                            {{--                                    <div class="form-group">--}}
                            {{--                                        <span class="badge badge-pill badge-skill">....</span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-md-6">--}}
                            {{--                                    <label class="font-label">Price Includes</label>--}}
                            {{--                                    <div class="form-group">--}}
                            {{--                                        <span class="badge badge-pill badge-skill">art...</span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            <div class="col-md-4">
                                <label class="font-label">Price Include</label>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->user_professional_detail, 'price_include_formatted') }}</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="font-label">Bio</label>
                               
                                <div class="form-group">
                                <p style="text-align:justify;font-size:8px;" class="badge-skill">
                                {{ getSafeValueFromObject($influencer->personal_information, 'bio') }}"
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
            <div class="col-md-12 col-lg-7 col-xl-8">
                
                    <div class="row">
                        <div class="col-md-6">
                            <strong>
                        <span style="font-size:30px;padding-left:3px;">
                            {{ $influencer ? $influencer->full_name : ''}}
                            <span style="font-size: 12px;position:relative;top:-9px;">
                                
                                    {{-- <a href="javascript:void(0)" class="share-link" onclick="shareLink()">
                                        <img src="{{ asset('assets/img/icons/share.png') }}" alt="" width="30px">
                                    </a> --}}
                                    <div class="text-center" style="font-size: 11px;">&nbsp;</div>
                            </span>
                        </span></strong>
                            {{--&nbsp;<small>({{ $influencer->total_clicks }})</small>--}}
                        </div>
                    <div class="col-md-6" style="padding-top:5px;">
                        <div class="text-end">
                            @if(empty($chat) || $chat->status == 'rejected')
                                <button id="send-chat-request-for-chat" onclick="sendRequestCall()" type="button"
                                        style="border:none;background:inherit;border:1px solid #eee;padding:5px 30px;">
                                    Chat
                                </button>
                                <!-- <button class="btn btn-primary send-chat-request">Chat Request Send</button> -->
                            @elseif($chat->status == 'accepted')
                                {{-- <a class="open-chat btn"
                                   href="{{ env('BASE_URL') }}chats?i={{ $influencer->id }}&u={{ $influencer->name }}"><b>
                                        Chat</b></a> --}}
                            @endif
                        </div>
                    </div>
                </div>
                @php
                    $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                    $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                    $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                    $youtube = getInfluencerSocialMediaProfileByTypeAndId('youtube', $influencer->id);
                    $twitter = getInfluencerSocialMediaProfileByTypeAndId('twitter', $influencer->id);
                    $snapchat = getInfluencerSocialMediaProfileByTypeAndId('snapchat', $influencer->id);
                @endphp
                <div class="details" style="margin-top:-7px;height:auto;padding:0px 3px;">
                    <ul style="list-style-type: none;">
                        @if($instagram)
                            <li style=" display: inline-block;"><span style="font-size: 12px;text-align:center;"><a
                                        href=""><img src="{{ asset('assets/img/social-icon/insta.png') }}" alt=""
                                                     width="30px"></a> <div class="text-center"
                                                                            style="font-size:11px;">{{ formatNumber($instagram ? $instagram->followers :  0) }}</div></span>
                            </li> &nbsp;
                        @endif

                        @if($twitter)
                            <li style=" display: inline-block;"><span style="font-size: 12px;text-align:center;"><a
                                        href=""><img
                                            src="{{ asset('assets/img/social-icon/twitter.png') }}"
                                            alt=""
                                            width="30px"></a> <div class="text-center"
                                                                   style="font-size:11px;">{{ formatNumber($twitter ? $twitter->followers :  0) }}</div></span>
                            </li> &nbsp;
                        @endif
                        @if($youtube)
                            <li style=" display: inline-block;"><span style="font-size: 12px;text-align:center;"><a
                                        href=""><img
                                            src="{{ asset('assets/img/social-icon/youtube.png') }}"
                                            alt=""
                                            width="30px"></a> <div class="text-center"
                                                                   style="font-size:11px;">{{ formatNumber($youtube ? $youtube->followers :  0) }}</div></span>
                            </li> &nbsp;
                        @endif
                        @if($tiktok)
                            <li style=" display: inline-block;"><span style="font-size: 12px;"><a href=""><img
                                            src="{{ asset('assets/img/social-icon/tiktok.png') }}" alt=""
                                            width="30px"></a> <div
                                        class="text-center"
                                        style="font-size:11px;">{{ formatNumber($tiktok ? $tiktok->followers : 0) }}</div></span>
                            </li>&nbsp;
                        @endif
                        @if($facebook)
                            <li style=" display: inline-block;"><span style="font-size: 12px;"><a href=""><img
                                            src="{{ asset('assets/img/social-icon/fb.png') }}" alt="" width="30px"></a> <div
                                        class="text-center"
                                        style="font-size:11px;">{{ formatNumber($facebook ? $facebook->followers : 0) }}</div></span>
                            </li> &nbsp;
                        @endif
                        @if($snapchat)
                            <li style=" display: inline-block;"><span style="font-size: 12px;"><a href=""><img
                                            src="{{ asset('assets/img/social-icon/snapchat.png') }}" alt=""
                                            width="30px"></a> <div
                                        class="text-center"
                                        style="font-size:11px;">{{ formatNumber($snapchat ? $snapchat->followers : 0) }}</div></span>
                            </li> &nbsp;
                    @endif
                    <!-- <li style="display: inline-block;">
                            <span style="font-size: 12px;">
                                <a href="javascript:void(0)" class="share-link" onclick="shareLink()">
                                    <img src="{{ asset('assets/img/icons/share.png') }}" alt="" width="30px">
                                </a>
                                <div class="text-center" style="font-size: 11px;">&nbsp;</div>
                            </span>
                        </li> -->
                    </ul>
                    <!-- <span style="font-size: 14px;"><img src="assets/img/social-icon/insta.png" alt="" width="30px">&nbsp;&nbsp;&nbsp;<img src="assets/img/social-icon/fb.png" alt="" width="30px">&nbsp;&nbsp;&nbsp;<img src="assets/img/social-icon/tiktok.png" alt="" width="30px"></span> -->
                </div>
                <div class="details" style="margin-top:13px;margin-bottom:8px;">
                    <div class="row">
                        <div class="col-md-3"><span style="font-size: 14px;font-weight:bold;padding:0px 3px;">Model, Actress, Influencer</span>
                        </div>
                        <div class="col-md-3"><span
                                style="font-size: 14px;font-weight:bold;padding:0px 3px;">Nationality: {{ getSafeValueFromObject($influencer->country, 'name') }}</span>
                        </div>
                        <div class="col-md-3"><span
                                style="font-size: 14px;font-weight:bold;padding:0px 3px;">Based in: {{ getSafeValueFromObject($influencer->state, 'name') }}</span>
                        </div>
                        <div class="col-md-3"><span
                                style="font-size: 14px;font-weight:bold;padding:0px 3px;">Price: {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }}</span>
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
                <div class="row">
                    @forelse($influencer->influencer_profile_images as $image)
                        <div class="col-md-3 col-lg-3 col-xl-3 gallerys p-3">
                            <div class="avatar-one"
                                 style="width:100%;box-shadow:1px 1px 1px 1px #eee;">
                                <a href="{{ $image->file_name_url }}">
                                    <!-- <div class="start"
                                         style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:220px;">
                                        <i class="fas fa-check-circle text-success verified"
                                           style="background-color:;padding:7px;border-radius:50%;"></i>
                                    </div> -->
                                    <img src="{{ $image->file_name_url }}" alt="author"
                                         width="100%" height="200px">
                                </a>
                                {{--                                    <div class="influencer-dev" style="margin:10px;padding:3px;">--}}
                                {{--                                        <h5 style="font-size:16px;">{{ $influencer->full_name }}</h5>--}}
                                {{--                                        <h5 style="font-size:16px;">No. &nbsp;{{ $influencer->phone }}</i></h5>--}}
                                {{--                                    </div>--}}
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No Related Recrod Found</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>