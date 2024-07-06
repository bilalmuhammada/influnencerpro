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
    @endphp
    <!-- partial:index.partial.html -->
    <div class="container-fluid" style="border:0px solid red;padding-top:60px;">
        <hr>
        <div class="row justify-content-center" style="border:0px solid red;">
                <div class="card px-0 pb-0 " style="border:0px solid red;">
                    <h2 id="heading">Profile Setting    </h2>
                    <!-- <p>Fill all form field to go to next step</p> -->
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="personal"><strong>Personal</strong></li>
                            <li id="account"><strong>Accounts</strong></li>
                            <li id="payment"><strong>Image</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title" style="font-size:16px;font-weight:bold;">
                                            <span>&nbsp;</span>Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps" style="font-size:16px;font-weight:bold;">Step 1 - 4<span>&nbsp;</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    {{--                                    <div class="col">--}}
                                    {{--                                        <input type="text" name="uname" placeholder="Name"/>--}}
                                    {{--                                    </div>--}}
                                    <div class="col">
                                        <input type="text" class="form-control" name="dialects" placeholder="Dialects"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->dialects : '' }}"/>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="hair_type" placeholder="Hair Type"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->hair_type : '' }}"/>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="hair_color"
                                               placeholder="Hair Color"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->hair_color : '' }}"/>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="age" placeholder="Age"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->age : '' }}"/>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="valid_license"
                                               placeholder="Valid license"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->valid_license : '' }}"/>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="tattoes" placeholder="Tattoes"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->tattoes : '' }}"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
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
                                            {{-- <option
                                                value="OTHER" {{ $influencer_personal_info &&  $influencer_personal_info->gender == 'OTHER' ? 'selected' : '' }}>
                                                Other
                                            </option> --}}
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="spoken_language_id" id="" class="form-control">
                                            <option value="">--Spoken Language--</option>
                                            @foreach(getSpokenLanguages() as $language)
                                                <option
                                                    value="{{ $language->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->spoken_language_id == $language->id ? 'selected' : '' }}>{{ $language->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="ethnicity_id" id="" class="form-control">
                                            <option value="">--Ethnicity--</option>
                                            @foreach(getEthnicity() as $ethnicity)
                                                <option
                                                    value="{{ $ethnicity->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->ethnicity_id == $ethnicity->id ? 'selected' : '' }}>{{ $ethnicity->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels"></label>
                                        <select name="country_id" id="" class="form-control">
                                            <option value="">--Nationality--</option>
                                            @foreach(getCountries() as $country)
                                                <option
                                                    value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels"></label>
                                        <select name="state_id" id="" class="form-control">
                                            <option value="">--Based in--</option>
                                            @foreach(getStateByCountryId(1) as $state)
                                                <option
                                                    value="{{ $state->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->state_id == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels"></label>
                                        <select name="city_id" id="" class="form-control">
                                            <option value="">--Select Region--</option>
                                            @foreach(getCityByStateId(1) as $city)
                                                <option
                                                    value="{{ $city->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="number" class="form-control" name="shoes_size"
                                               placeholder="Shoes size"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->shoes_size : '' }}"/>
                                    </div>
                                    <div class="col">
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
                                    <div class="col">
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
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="eye_color" placeholder="Eye color"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->eye_color : '' }}"/>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" name="height"
                                               placeholder="Height"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->height : '' }}"/>
                                    </div>
                                                                        <div class="col">
                                                                            <input type="number" class="form-control"
                                                                                   name="weight" placeholder="Weight"
                                                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->weight : '' }}"/>
                                                                        </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="bio"
                                               placeholder="Bio"
                                               value="{{ $influencer_personal_info ? $influencer_personal_info->bio : '' }}"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <select name="features[]" id="" class="form-control feature-select2"
                                                multiple placeholder="Features">
                                            <option value="">--Select Feature--</option>
                                            @foreach(getFeatures() as $feature)
                                                <option
                                                    value="{{$feature->id}}" {{ $influencer_features && in_array($feature->id, $influencer_features) ? 'selected' : '' }}>{{$feature->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title" style="font-size:16px;font-weight:bold;">
                                            <span>&nbsp;</span>Social Media Account Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps" style="font-size:16px;font-weight:bold;">Step 2 - 4<span>&nbsp;</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="display:inline-block;">
                                                <div style="display:inline-block;"><span> &nbsp; &nbsp;</span><input
                                                        type="checkbox"
                                                        name="facebook" {{ $facebookProfiles ? 'checked' : '' }}></div>
                                                <div style="display:inline-block;width:72px;">Facebook</div>
                                                <div style="display:inline-block;"><input type="text" id=""
                                                                                          class="form-control"
                                                                                          name="facebook_username"
                                                                                          placeholder="Username"
                                                                                          value="{{ $facebookProfiles ? $facebookProfiles->username : '' }}"/>
                                                </div>
                                                <div style="display:inline-block;"><input type="text" id=""
                                                                                          class="form-control"
                                                                                          name="facebook_followers"
                                                                                          placeholder="Followers"
                                                                                          value="{{ $facebookProfiles ? $facebookProfiles->followers : '' }}"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div style="display:inline-block;">
                                                <div style="display:inline-block;"><span> &nbsp; &nbsp;</span><input
                                                        type="checkbox"
                                                        name="twitter" {{ $twitterProfiles ? 'checked' : '' }}></div>
                                                <div style="display:inline-block;width:72px;">Twitter</div>
                                                <div style="display:inline-block;"><input type="text" id=""
                                                                                          class="form-control"
                                                                                          name="twitter_username"
                                                                                          placeholder="Username"
                                                                                          value="{{ $twitterProfiles ? $twitterProfiles->username : '' }}"/>
                                                </div>
                                                <div style="display:inline-block;"><input type="text" id=""
                                                                                          class="form-control"
                                                                                          name="twitter_followers"
                                                                                          placeholder="Followers"
                                                                                          value="{{ $twitterProfiles ? $twitterProfiles->followers : '' }}"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div style="display:inline-block;">
                                                <div style="display:inline-block;"><span> &nbsp; &nbsp;</span><input
                                                        type="checkbox"
                                                        name="instagram" {{ $instagramProfiles ? 'checked' : '' }}>
                                                </div>
                                                <div style="display:inline-block;width:72px;">Instagram</div>
                                                <div style="display:inline-block;"><input type="text" id=""
                                                                                          class="form-control"
                                                                                          name="instagram_username"
                                                                                          placeholder="Username"
                                                                                          value="{{ $instagramProfiles ? $instagramProfiles->username : '' }}"/>
                                                </div>
                                                <div style="display:inline-block;"><input type="text" id=""
                                                                                          class="form-control"
                                                                                          name="instagram_followers"
                                                                                          placeholder="Followers"
                                                                                          value="{{ $instagramProfiles ? $instagramProfiles->followers : '' }}"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div style="display:inline-block;">
                                                <div style="display:inline-block;"><span> &nbsp; &nbsp;</span><input
                                                        type="checkbox"
                                                        name="tiktok" {{ $tiktokProfiles ? 'checked' : '' }}></div>
                                                <div style="display:inline-block;width:72px;">Tiktok</div>
                                                <div style="display:inline-block;"><input type="text" id=""
                                                                                          class="form-control"
                                                                                          name="tiktok_username"
                                                                                          placeholder="Username"
                                                                                          value="{{ $tiktokProfiles ? $tiktokProfiles->username : '' }}"/>
                                                </div>
                                                <div style="display:inline-block;"><input type="text" id=""
                                                                                          class="form-control"
                                                                                          name="tiktok_followers"
                                                                                          placeholder="Followers"
                                                                                          value="{{ $tiktokProfiles ? $tiktokProfiles->followers : '' }}"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Next"/>
                            <input type="button" name="previous" class="previous action-button-previous"
                                   value="Previous"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title" style="font-size:16px;font-weight:bold;">
                                            <span>&nbsp;</span>Professional Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps" style="font-size:16px;font-weight:bold;">Step 3 - 4<span>&nbsp;</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    {{--                                    <div class="col">--}}
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
                                  
                                    <div class="col">
                                        <select name="category_id" id="" class="form-control select2">
                                            <option value="">--Select Influencer Category--</option>
                                            @foreach(getCategories() as $category)
                                                <option
                                                    value="{{ $category->id }}" {{ $influencer_professional_detail && $influencer_professional_detail->category_id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="category_model_id" id="category_model_id" class="form-control">
                                            <option value="">--Select Model Category--</option>
                                            @foreach(getCategories() as $category)
                                                <option
                                                    value="{{ $category->id }}" {{ $influencer_professional_detail && $influencer_professional_detail->category_model_id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="available_from_date"
                                               onfocus="(this.type='date')"
                                               onblur="(this.type='text')"
                                               placeholder="Available from date"
                                               value="{{ $influencer_professional_detail ? $influencer_professional_detail->available_from_date  : '' }}">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="available_to_date"
                                               onfocus="(this.type='date')"
                                               onblur="(this.type='text')"
                                               placeholder="Available to date"
                                               value="{{ $influencer_professional_detail ? $influencer_professional_detail->available_to_date  : '' }}">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" name="price"
                                               placeholder="Price"
                                               value="{{ $influencer_professional_detail ? $influencer_professional_detail->price  : '' }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for=""></label>
                                        <div class="tags-input">
                                            <ul id="tags"></ul>
                                            <input type="text" id="input-tag"
                                                   placeholder="Add Your Multi Skills & Press Enter"
                                                   class="form-control" name=""
                                                   style="border:0px solid #1A237E;!important"/>
                                        </div>
                                    </div>
                                </div>
                                <h2>Upload your images</h2>
                                <div class="row mt-2 multi-images">
                                    @forelse ($influencer->influencer_profile_images as $image)
                                        <div class="col-md-4 avatar-image">
                                            <div class="start delete-image" data-attachment-id="{{ $image->id }}"
                                                 style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:195px; cursor: pointer">
                                                <i class="fas fa-times-circle text-danger"
                                                   style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                            </div>
                                            <img
                                                src="{{ $image->file_name_url ?? asset('assets/img/img.png')}}"
                                                id="image0" alt=""
                                                style="width: 200px; border: 1px solid #000; height: 180px">
                                            <input type="file" class="form-control" id="logo0" name="profile_images[]"
                                                   onchange=""
                                                   style="width: 200px; background-color: #e9ecef" accept="image/*">
                                        </div>
                                    @empty
                                        <div class="col-md-4">
                                            <img
                                                src="{{ asset('assets/img/img.png')}}"
                                                id="image0" alt=""
                                                style="width: 200px; border: 1px solid #000; height: 180px">
                                            <input type="file" class="form-control" id="logo0" name="profile_images[]"
                                                   onchange=""
                                                   style="width: 200px; background-color: #e9ecef" accept="image/*">
                                        </div>
                                    @endforelse
                                    <div class="col-md-4 add-more-box">
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
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title" style="font-size:16px;font-weight:bold;">
                                            <span>&nbsp;</span>Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps" style="font-size:16px;font-weight:bold;">Step 4 - 4<span>&nbsp;</span>
                                        </h2>
                                    </div>
                                </div>
                                <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3" style="text-align:center;">
                                        <!-- <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> -->
                                        <i class="fa fa-check" style="font-size:60px;color:#0504aa;"></i>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">Profile Updated Successfully</h5>
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

        $(document).ready(function () {
            show_img();
            show_img('#image0', '#logo0');
            $('.feature-select2').select2();
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
                url: api_url + 'auth/complete-profile',
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
                                        <img
                                            src="{{ asset('assets/img/img.png') }}"
                                            id="image-${count}" alt=""
                                            style="width: 200px; border: 1px solid #000; height: 180px">
                                        <input type="file" class="form-control" id="logo-${count}" name="profile_images[]" onchange=""
                                               style="width: 200px; background-color: #e9ecef" accept="image/*">
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
        })

    </script>
@endsection
