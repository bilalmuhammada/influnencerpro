@extends('layout.master')
@section('content')
    @php
        $influencer = getInfluencerById(request()->id);
        $influencersByCategory = getInfluencersByCategoryId($influencer->user_professional_detail->category_id);
    @endphp

    <div class="content" style="padding-top: 100px; border-top: 1px solid #ccc">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar" style="border:0px solid red;">

                    <div class="card search-filter" style="border:0px solid red;">
                        <div class="card-header d-flex justify-content-between">
                            <!-- <h4 class="card-title mb-0">FILTERS</h4> -->
                            <div class="card-title mb-0 influencerdetail"
                                 style="background-color: #000; width: 100%; height: 210px !important; display: none"
                                 id="influencerdetail">
                                <br>
                                <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; {{ $influencer ? $influencer->state->name : '' }}</span><br/>
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
                            </div>
                            <div class="influencer" id="influencer">
                            <div class="start"
                                             style="color:#0504aa;position:absolute;margin-top:0px;text-align:right;border:0px solid red;width:270px;">
                                             <i class="fas fa-check-circle text-success verified"
                                               style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                        </div>
                                <img class="card-title mb-0" src="{{ $influencer ? $influencer->image_url : '' }}"
                                     alt="author"
                                     width="100%" height="210px"><br/>
                            </div>
                            <!-- <lable>Book Talent<i class="fa fa-email"></i></lable> -->
                            <!-- <a href="javascript:void(0);">Clear All</a> -->
                        </div>
                        <div class="card-body">
                                <div class="filter-widget">
                                    @php $categories = getCategories();  @endphp
                                    <h4>Categories</h4>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Categories"  style="border-radius:40px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            Active Lifestyle
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            1
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            2
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            3
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            4
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            5
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <label for="Tier"><b>Tier</b></label>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            Nano(0-4.99999)
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size" checked>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                        Nano(0-4.99999)
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size" checked>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                        Nano(0-4.99999)
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size" checked>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                        Nano(0-4.99999)
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size" checked>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                        Nano(0-4.99999)
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size" checked>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                        Nano(0-4.99999)
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size" checked>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <label for=""><b>Compaigns</b></label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Compaigns" style="border-radius:40px;">
                                    </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            1
                                        </div>
                                        <div class="col-md-6 col-6 text-end text-size" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            2
                                        </div>
                                        <div class="col-md-6 col-6 text-end text-size" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            3
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            4
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            5
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6 text-size">
                                            6
                                        </div>
                                        <div class="col-md-6 col-6 text-end" >
                                            <input type="checkbox" class="checkbox-size">
                                        </div>
                                    </div>
                                </div>


                                <div class="btn-search">
                                    <button type="submit" class="btn btn-block">Search</button>
                                </div>
                            </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <strong><span style="font-size:30px;">{{ $influencer ? $influencer->full_name : ''}}</span></strong>&nbsp;<small>({{ $influencer->total_clicks }}
                        )</small>
                    @if(empty($chat) || $chat->status == 'rejected')
                        <button class="btn btn-primary send-chat-request">Chat Request Send</button>
                    @endif
                    <div class="details" style="margin-top:10px;">
                        <span style="font-size: 14px;">Model, Actress, Influencer &nbsp;<i
                                class="fas fa-map-marker-alt me-1"></i>Based in: {{ $influencer ? $influencer->state->name : '' }}&nbsp;&nbsp;&nbsp;<i
                                class="fas fa-map-marker-alt me-1"></i>Nationality: {{ $influencer ? $influencer->country->name : '' }}&nbsp;&nbsp;&nbsp;<i
                                class="fas fa-map-marker-alt me-1"></i>Age: {{ $influencer->personal_information ? $influencer->personal_information->age : '' }}</span>
                    </div>
                    <div class="details" style="margin-top:10px;">
                        <ul style="list-style-type: none;">
                            <li style=" display: inline-block;"><span style="font-size: 12px;text-align:center;"><a
                                        href=""><img src="{{ asset('assets/img/social-icon/insta.png') }}" alt=""
                                                     width="30px"></a> <br> &nbsp;&nbsp;{{ formatNumber($instagram ? $instagram->followers :  0) }}</span>
                            </li> &nbsp;
                            <li style=" display: inline-block;"><span style="font-size: 12px;"><a href=""><img
                                            src="{{ asset('assets/img/social-icon/fb.png') }}" alt="" width="30px"></a> <br>&nbsp;&nbsp;{{ formatNumber($facebook ? $facebook->followers : 0) }}</span>
                            </li> &nbsp;
                            <li style=" display: inline-block;"><span style="font-size: 12px;"><a href=""><img
                                            src="{{ asset('assets/img/social-icon/tiktok.png') }}" alt="" width="30px"></a> <br>&nbsp;&nbsp;{{ formatNumber($tiktok ? $tiktok->followers : 0) }}</span>
                            </li>
                        </ul>
                        <!-- <span style="font-size: 14px;"><img src="assets/img/social-icon/insta.png" alt="" width="30px">&nbsp;&nbsp;&nbsp;<img src="assets/img/social-icon/fb.png" alt="" width="30px">&nbsp;&nbsp;&nbsp;<img src="assets/img/social-icon/tiktok.png" alt="" width="30px"></span> -->
                    </div>
                    <div class="profile" style="margin-top: 30px;">
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
                        @forelse($influencersByCategory as $influencer)
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <div class="avatar-one"
                                     style="border:1px solid red;width:100%;box-shadow:1px 1px 1px 1px #eee;">
                                    <a href="{{ env('BASE_URL') }}influencers/{{ $influencer->id }}/detail">
                                        <div class="start"
                                             style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:220px;">
                                             <i class="fas fa-check-circle text-success verified"
                                               style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                        </div>
                                        <img src="{{ $influencer ? $influencer->image_url : '' }}" alt="author"
                                             width="100%" height="200px">
                                    </a>
                                    <div class="influencer-dev" style="margin:10px;padding:3px;">
                                        <h5 style="font-size:16px;">{{ $influencer->full_name }}</h5>
                                        <h5 style="font-size:16px;">No. &nbsp;{{ $influencer->phone }}</i></h5>
                                    </div>
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
    </script>
@endsection
