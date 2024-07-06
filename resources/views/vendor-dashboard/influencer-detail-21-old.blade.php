@extends('layout.master')
@section('content')
    @php
        $influencer = getInfluencerById(request()->id);
        $influencersByCategory = getInfluencersByCategoryId($influencer->user_professional_detail ? $influencer->user_professional_detail->category_id : '');
    @endphp

    <div class="content" style="padding-top: 100px; border-top: 1px solid #ccc">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar" style="border:0px solid red;">

                    <div class="card search-filter" style="border:0px solid red;">
                        <div class="card-header d-flex justify-content-between">
                            <!-- <h4 class="card-title mb-0">FILTERS</h4> -->
                            <!-- <div class="card-title mb-0 influencerdetail"
                                 style="background-color: #000; width: 100%; height: 265px !important; display: none"
                                 id="influencerdetail">
                                <br>
                                <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; {{ getSafeValueFromObject($influencer->state, 'name') }}</span><br/>
                                <span
                                    style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; {{ $influencer->user_professional_detail ? $influencer->user_professional_detail->category->name : '' }}</span>
                                <ul style="list-style-type: none;margin-top:10px;">
                                    @php
                                        $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                                        $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                                        $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                                    @endphp
                                    <li style=" display: inline-block;color:#fff;">&nbsp;&nbsp; <span
                                            style="font-size: 12px;text-align:center;"><a href=""><img
                                                    src="{{ asset('assets/img/social-icon/insta.png') }}" alt=""
                                                    width="30px"></a> <br> &nbsp;&nbsp;&nbsp;&nbsp; {{ formatNumber($instagram ? $instagram->followers :  0) }}</span>
                                    </li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="{{ asset('assets/img/social-icon/fb.png') }}" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;{{ formatNumber($facebook ? $facebook->followers : 0) }}</span>
                                    </li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="{{ asset('assets/img/social-icon/tiktok.png') }}"
                                                             alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;{{ formatNumber($tiktok ? $tiktok->followers : 0) }}</span>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="influencer" id="influencer">
                                <img class="card-title mb-0" src="{{ $influencer ? $influencer->image_url : '' }}"
                                     alt="author"
                                     width="265px" height="200px"><br/>
                            </div>
                            <!-- <lable>Book Talent<i class="fa fa-email"></i></lable> -->
                            <!-- <a href="javascript:void(0);">Clear All</a> -->
                        </div>
                        <div class="card-body">

                            <div class="filter-widget">
                                <h4><b>Basic Details</b></h4>

                            </div>
                            <div class="filter-widget">
                                <h4>Influencers category</h4>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">{{ $influencer->user_professional_detail ? $influencer->user_professional_detail->category->name : '' }}</span>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Models category</h4>
                                <div class="form-group">
                                    <span
                                        class="badge badge-pill badge-skill">Fitness, Glamour, Lifestyle, Travel</span>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="col-md-12" style="font-size: 11px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-size: 13px;">Spoken Languages</h4>
                                            <div class="form-group">
                                                <span
                                                    class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->spoken_language->name : '' }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 style="font-size: 13px;">English dialects</h4>
                                            <div class="form-group">
                                                <span
                                                    class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->dialects : '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-widget">
                                <div class="col-md-12" style="font-size: 11px;">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 style="font-size: 13px;">Ethnicity</h4>
                                            <div class="form-group">
                                                <span
                                                    class="badge badge-pill badge-skill">{{ $influencer->personal_information->ethnicity->name ?? '' }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 style="font-size: 11px;">Hair Type</h4>
                                            <div class="form-group">
                                                <span
                                                    class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->hair_type : '' }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 style="font-size: 11px;">Hair Colour</h4>
                                            <div class="form-group">
                                                <span
                                                    class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->hair_color : '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-widget">
                                <div class="col-md-12" style="font-size: 11px;">
                                    <h4 style="font-size: 15px;">Art</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 style="font-size: 11px;">{{ getSafeValueFromObject($influencer->user_professional_detail, 'professional_category') }}</h4>
                                            <div class="form-group">
                                                <span
                                                    class="badge badge-pill badge-skill">{{ getSafeValueFromObject($influencer->user_professional_detail, 'professional_category') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-widget">
                                <div class="col-md-12" style="font-size: 11px;">
                                    <h4 style="font-size: 13px;">I have the following:</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 style="font-size: 13px;">Features</h4>
                                            <div class="form-group">
                                                @forelse($influencer->features as $feature)
                                                    <span
                                                        class="badge badge-pill badge-skill">{{ $feature->feature->name }}</span>
                                                @empty
                                                    df
                                                @endforelse
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 style="font-size: 11px;">valid license</h4>
                                            <div class="form-group">
                                                <span
                                                    class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->valid_license : '' }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 style="font-size: 11px;">Tattoes</h4>
                                            <div class="form-group">
                                                <span
                                                    class="badge badge-pill badge-skill">{{ $influencer->personal_information ? $influencer->personal_information->tattoes : '' }}</span>
                                            </div>
                                        </div>
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
                 <strong><span style="font-size:30px;">{{ $influencer ? $influencer->full_name : ''}}</span></strong>
                    {{--&nbsp;<small>({{ $influencer->total_clicks }})</small>--}}
                 </div>
                 <div class="col-md-6">
                 <div class="text-end">
                    @if(empty($chat) || $chat->status == 'rejected')
                        <button class="btn btn-primary send-chat-request">Chat Request Send</button>
                    @elseif($chat->status == 'accepted')
                        <a class="btn btn-primary" href="{{ env('BASE_URL') }}chats?i={{ $influencer->id }}&u={{ $influencer->name }}">Open
                            Chat</a>
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
                    <div class="details">
                        <ul style="list-style-type: none;">
                            <li style=" display: inline-block;"><span style="font-size: 12px;text-align:center;"><a
                                        href=""><img src="{{ asset('assets/img/social-icon/insta.png') }}" alt=""
                                                     width="30px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($instagram ? $instagram->followers :  0) }}</div></span>
                            </li> &nbsp;
                            <li style=" display: inline-block;"><span style="font-size: 12px;text-align:center;"><a
                                        href=""><img src="{{ asset('assets/img/social-icon/twitter.png') }}" alt=""
                                                     width="30px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($twitter ? $twitter->followers :  0) }}</div></span>
                            </li> &nbsp;
                            <li style=" display: inline-block;"><span style="font-size: 12px;text-align:center;"><a
                                        href=""><img src="{{ asset('assets/img/social-icon/youtube.png') }}" alt=""
                                                     width="30px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($youtube ? $youtube->followers :  0) }}</div></span>
                            </li> &nbsp;
                            <li style=" display: inline-block;"><span style="font-size: 12px;"><a href=""><img
                                            src="{{ asset('assets/img/social-icon/tiktok.png') }}" alt="" width="30px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($tiktok ? $tiktok->followers : 0) }}</div></span>
                            </li>&nbsp;
                            <li style=" display: inline-block;"><span style="font-size: 12px;"><a href=""><img
                                            src="{{ asset('assets/img/social-icon/fb.png') }}" alt="" width="30px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($facebook ? $facebook->followers : 0) }}</div></span>
                            </li> &nbsp;
                            <li style=" display: inline-block;"><span style="font-size: 12px;"><a href=""><img
                                            src="{{ asset('assets/img/social-icon/snapchat.png') }}" alt="" width="30px"></a> <div class="text-center" style="font-size:11px;">{{ formatNumber($snapchat ? $snapchat->followers : 0) }}</div></span>
                            </li>
                        </ul>
                        <!-- <span style="font-size: 14px;"><img src="assets/img/social-icon/insta.png" alt="" width="30px">&nbsp;&nbsp;&nbsp;<img src="assets/img/social-icon/fb.png" alt="" width="30px">&nbsp;&nbsp;&nbsp;<img src="assets/img/social-icon/tiktok.png" alt="" width="30px"></span> -->
                    </div>
                    <div class="details" style="margin-top:8px;">
                    <div class="row">
                        <div class="col-md-3"><span style="font-size: 14px;font-weight:bold;">Model, Actress, Influencer</span></div>
                        <div class="col-md-3"><span style="font-size: 14px;font-weight:bold;">Nationality: {{ getSafeValueFromObject($influencer->country, 'name') }}</span></div>
                        <div class="col-md-3"><span style="font-size: 14px;font-weight:bold;">Based in: {{ getSafeValueFromObject($influencer->state, 'name') }}</span></div>
                        <div class="col-md-3"><span style="font-size: 14px;font-weight:bold;">Price: 1000$</span></div>
                        {{--<div class="col-md-3"><span style="font-size: 14px;font-weight:bold;">Age: {{ getSafeValueFromObject($influencer->personal_information, 'age') }}</span></div>--}}
                    </div>
                    </div>
                    <div class="profile" style="margin-top: 8px;">
                        <strong><span style="font-size:30px;">Profile</span></strong>
                    </div>


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
                                        <div class="start"
                                             style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:220px;">
                                            <i class="fas fa-check-circle text-success verified"
                                               style="background-color:;padding:7px;border-radius:50%;"></i>
                                        </div>
                                        <img src="{{ $image->file_name_url }}" alt="author"
                                             width="100%" height="150px">
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
@endsection

@section('page_scripts')

    <script>
        $(document).ready(function () {
            // $(".influencer").mouseover(function () {
            //     $(".influencerdetail").show();
            //     $(".influencer").hide();
            // });
            // $(".influencer").mouseout(function () {
            //     $(".influencerdetail").hide();
            //     $(".influencer").show();
            // });
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

        $(document).on('click', '.send-chat-request', function (e) {
            e.preventDefault();
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
        });

        $(document).ready(function () {
            $('.gallerys').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enable: true
                }
            });
        })
    </script>
@endsection

