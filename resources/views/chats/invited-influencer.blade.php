@extends('layout.master')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@section('content')
    <style>
        .lobibox-notify.notify-mini .lobibox-notify-body {
    margin: 7px 1px 0px 0px !important;
}
.lobibox-notify, .lobibox-notify-success, .animated-fast, .fadeInDown, .notify-mini{
    width: 100px !important;
    margin-right: 120px !important; 
    /* text-align: center !important; */
}
        .switch {
            position: relative;
            display: inline-block;
            width: 26px;
            height: 10px;

        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            top: -3px;
            /* left: 4px; */
            /* bottom: 1px; */
            background-color: #0504aa;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(16px);
            -ms-transform: translateX(16px);
            transform: translateX(16px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .shaking {
    display: inline-block;
    transition: transform 0.2s ease-in-out;
   }
   .social-wrapper:hover .shaking  {
   /* Change to your desired hover color */
 
    animation: shake 1.5s linear infinite;
   }

  @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }
        .slider.round:before {
            border-radius: 50%;
        }

        .influencerdetail {
            /* display: none;
            opacity:0.9;
            width:200px;
            position: absolute; */
            /* height: 270px; */
        }

        .avatar-one:hover .influencerdetail {
            /* top: -8px; */
            opacity: 1;
            visibility: visible;
            height: 100%
        }

        .avatar-one .influencerdetail {
            position: absolute;
            left: 0;
            top: 0;
            /* padding: 5px;  */
            /* padding-left:3px; */
            /* padding-right:3px; */
            z-index: 1;
            height: 200px;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            transition: all 0.35s ease-in-out;
            width: 100%;
            visibility: hidden;
            opacity: 0
        }
        #select2-language_dropdown-container {
            margin-left: -22px !important;
        }
        .avatar-one .influencerdetail::after {
            position: absolute;
            left: 0;
            top: 0px;
            content: "";
            height: 200px;
            width: 100%;
            background: #000;
            z-index: -1;
            /* border-radius: 1rem; */
            /* border-radius: 15px; */
            opacity: 0.8;
            -webkit-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out
        }
        .datepicker:focus{
    border: 1px solid blue !important;
}
        .filled {
            color: #997045 !important;
        }

        .middle-search:focus {
            border: none !important;
            outline: none !important;
        }

        tr th {
            padding: 10px;
        }

        tr td {
            padding: 10px;
        }

        .select-group {
            background: #FFFFFF;
            box-shadow: 0px 2px 24px rgba(196, 196, 196, 0.25);
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0px 19px;
        }

        .select-group .form-select {
            background-color: #FBFBFB;
            border: 0;
            height: 45px;
        }

        .select-group .form-select:focus {
            box-shadow: none;
        }

        .down-load {
            margin-left: auto;
        }

        .down-load .btn-primary {
            min-width: 118px;
            background: #1B2559;
            border-radius: 5px;
            color: #fff;
            border: 0;
            padding: 10px 15px;
        }

        ul li {
            list-style: none;
        }

        .subscribe-employe ul li {
            padding-bottom: 10px;
            position: relative;
        }

        .subscribe-employe ul {
            padding: 0;
            margin: 0;
            display: flex;
        }

        .subscribe-employe ul .active a {
            color: #0d6efd;
        }

        .subscribe-employe ul li a {
            padding: 0px 20px;
            font-size: 18px;
            color: #131523;
            font-weight: 600;

        }
        .ui-state-default  {
        border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }
  #ui-datepicker-div{
width: 195px !important;
  }
  ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
}

.datepicker {
    padding-left: 18px !important;
}
.social-wrapper:hover .followers-count {
    color:goldenrod; /* Change to your desired hover color */
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

    </style>

    <section style="border-top:2px solid #eee;padding-top:90px;">
        {{-- <br/> --}}
        <div class="row">
            <div class="col-md-12 ">
                <!-- <div class="input-box text-center mx-auto"
                     style="border:none;height:55px;width:570px;border:1px solid #999;border-radius:30px;text-align:center;">
                    <input type="text" class="middle-search" placeholder=" Search..."
                           style="border:none;height:50px;width:500px;"><i class="fa fa-search"></i>
                </div> -->
            </div>
        </div>
    </section>
    {{-- <br/> --}}
    <div class="container">
        <div class="col-md-12">
            <div class="row" style="padding-left:25px;padding-right:25px;">
                <div class="col-md-10">
                    <form action="{{ env('BASE_URL') }}chats/invited-influencers">
                        <div class="row">
                            <div class="col-lg-2 col-md-6">
                                <input type="text" class="form-control datepicker from_date" style="width:115%;"  name="from_date"
                                       placeholder="Date">
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <input type="text" class="form-control datepicker to_date" style="width:115%;margin-left: 14px;"  name="to_date" placeholder="Date">
                            </div>
                            <div class="col-lg-2 col-md-6" style="margin-top:5px;margin-left: 31px;">
                                <button class="btn btn-primary filter">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="col-md-2" style="text-align:right;">
                    <a href="{{ env('BASE_URL') }}download-csv" class="btn btn-primary filter">Download</a>
                </div> --}}
            </div>
        </div>
    </div>
    <br/>
    <div class="container mx-auto">
        <div class="col-md-12">
            <div class="row mx-auto">


                  @forelse($influencers as $influencer)
                    <div class="col-md-2 col-lg-2 col-xl-2" style="margin-left:13px;margin-right:20px;top:6px;">
                        <div class="card avatar-one"
                             style="border:0px solid #997045;width:244px; padding: 0px;">
                            <a href="{{ env('BASE_URL') }}influencers/{{ $influencer->id }}/detail">
                                
                                
                                @php
                                $color = 'white';
                                  $color1 = 'white';
                                  
                                  if (isset($influencer->favourites) && count($influencer->favourites) > 0) {
                                      if ($influencer->favourites[0]->influencer_id == $influencer->id) {
                                          if ($influencer->favourites[0]->fr_in == 1) {
                                              $color = 'red';
                                          }
                                       
                                      }
                                  }
                              
                                  if (isset($influencer->invented) && count($influencer->invented) > 0) {
                                      if ($influencer->invented[0]->influencer_id == $influencer->id) {
                                          
                                          if ($influencer->invented[0]->fr_in == 2) {
                                              $color1 = '#61de2a';
                                          }
                                      }
                                  }
                                  
                                
                               
                                
                              @endphp
                               
                                <div class="influencerdetail" id="">
                                    <div class="start"style="position:absolute;text-align:right;border:0px solid red;width:244px;margin-left:-15px;top:6px;">

                                        <i class="fa-solid fa-heart shaking add-to-favourite"
                                        data-id="{{ $influencer->id }}"
                                        data-fvt="1"
                                        style="padding:7px;border-radius:50%;margin-top: 12px;  color:{{$color}}!important; margin-right: -8px; display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'inline-block' : '' }}"></i>
    
                                       <i class="fas fa-check-circle shaking  add-to-invented"
                                          data-id="{{ $influencer->id }}"
                                          data-fvt="2"
                                          style="padding:7px;border-radius:50%;margin-top: 12px; color:{{$color1}}!important; margin-right: -1px; display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'inline-block' : '' }}"></i>
    
                                       {{-- <i class="fas fa-check-circle remove-favourite"
                                          data-id="{{ $influencer->id }}"
                                          style="padding:7px;border-radius:50%; color: #999 !important; display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'none' : 'inline-block' }}"></i> --}}
    
                                   </div>
                                    <br>
                                    {{--<span
                                        style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; {{ $influencer->state ? $influencer->state->name : '' }}</span><br/>--}}
                                    {{--<span
                                        style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; {{ $influencer->user_professional_detail && $influencer->user_professional_detail->category ? $influencer->user_professional_detail->category->name : '' }}</span>--}}
                                    <ul style="list-style-type: none;margin-top:120px;">
                                        @php
                                            $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                                            $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                                            $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                                            $twitter = getInfluencerSocialMediaProfileByTypeAndId('twitter', $influencer->id);
                                            $youtube = getInfluencerSocialMediaProfileByTypeAndId('youtube', $influencer->id);
                                            $snapchat = getInfluencerSocialMediaProfileByTypeAndId('snapchat', $influencer->id);
                                        @endphp
                                         @if($instagram && isset($instagram->followers))



                                         <li style="display: inline-block;;color:#fff;">
                                         <div class="social-wrapper" style="text-align: center; margin-left:14px;">
                                             <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                 <img src="{{ asset('assets/img/social-icon/insta.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                             </a>
                                             <div class="text-center font-change followers-count" style="font-size:11px;">
                                                 {{ $instagram ? $instagram->followers : 0 }}
                                             </div>
                                         </div>
                                     </li>&nbsp;&nbsp;
                                                         @endif
         
                                                         @if($twitter  && isset($twitter->followers))
                                                         <li style="display: inline-block;;color:#fff;">
                                                             <div class="social-wrapper" style="text-align: center;">
                                                                 <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                                     <img src="{{ asset('assets/img/social-icon/twitter.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                                 </a>
                                                                 <div class="text-center font-change followers-count" style="font-size:11px;">
                                                                     {{ $twitter ? $twitter->followers : 0 }}
                                                                 </div>
                                                             </div>
                                                         </li>&nbsp;&nbsp;
         
                                                             
                                                         @endif
         
                                                         @if($youtube && isset($youtube->followers))
                                                         <li style="display: inline-block;;color:#fff;">
                                                             <div class="social-wrapper" style="text-align: center;">
                                                                 <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                                     <img src="{{ asset('assets/img/social-icon/youtube.svg') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                                 </a>
                                                                 <div class="text-center font-change followers-count" style="font-size:11px;">
                                                                     {{ $youtube ? $youtube->followers : 0 }}
                                                                 </div>
                                                             </div>
                                                         </li>&nbsp;&nbsp;
                                                         
                                                             
                                                         @endif
                                                         @if($tiktok && isset($tiktok->followers))
                                                         <li style="display: inline-block;;color:#fff;">
                                                             <div class="social-wrapper" style="text-align: center;">
                                                                 <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                                     <img src="{{ asset('assets/img/social-icon/tiktok.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                                 </a>
                                                                 <div class="text-center font-change followers-count" style="font-size:11px;">
                                                                     {{ $tiktok ? $tiktok->followers : 0 }}
                                                                 </div>
                                                             </div>
                                                         </li>&nbsp;&nbsp;
                                                        
                                                           
                                                         @endif
                                                         @if($facebook && isset($facebook->followers))
                                                         <li style="display: inline-block;;color:#fff;">
                                                             <div class="social-wrapper" style="text-align: center;">
                                                                 <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                                     <img src="{{ asset('assets/img/social-icon/fb.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                                 </a>
                                                                 <div class="text-center font-change followers-count" style="font-size:11px;">
                                                                     {{ $facebook ? $facebook->followers : 0 }}
                                                                 </div>
                                                             </div>
                                                         </li>&nbsp;&nbsp;
                                                         
                                                             
                                                         @endif
                                                         @if($snapchat && isset($snapchat->followers))
                                                         <li style="display: inline-block;;color:#fff;">
                                                             <div class="social-wrapper" style="text-align: center;">
                                                                 <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                                     <img src="{{ asset('assets/img/social-icon/snapchat.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                                 </a>
                                                                 <div class="text-center font-change followers-count" style="font-size:11px;">
                                                                     {{ $snapchat ? $snapchat->followers : 0 }}
                                                                 </div>
                                                             </div>
                                                         </li>&nbsp;&nbsp;
                                                       
                                                            
                                                         @endif
                                    </ul>
                                </div>
                                <img src="{{ $influencer ? $influencer->image_url : '' }}" alt="author"
                                     class="influencer"
                                     width="100%" height="200px" >
                            </a>
                            @php
                            $categoryNames = '';
                            foreach ($influencer->categories as $key => $category) {
        // Format the first category with # and italic style
        if ($key == 0) {
            $categoryNames .= "<span style='font-style: italic;'># " . '</span>'.$category->name ;
        } else {
            // Append other categories without # and italic style
            $categoryNames .= ', ' . $category->name;
        }
    }


                            // dd($influencer->categories);
                            @endphp
                            <div class="influencer-dev" style="margin: 10px 10px 0px 10px; padding: 3px 0px 0px 3px;">
                                <h5 style="font-size:12px;"
                                    class="influencer-name">{{ $influencer ? $influencer->full_name : '' }}</h5>
                                    <h5 style="font-size:12px;">{!! $categoryNames ?? '' !!}</h5>
                                <h5 style="font-size:12px;">
                                    Price: {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }}
                                    &nbsp;&nbsp;City: {{ $influencer->city ? $influencer->city->name : '' }}</h5>
                            </div>
                        </div>
                    </div>
                @empty

                    <div class="col-12 text-center">
                        <p>No Data</p>
                    </div>

                @endforelse

            </div>

            </div>
        </div>
    </div>
@endsection

@section('page_scripts')
    <script>
 $(document).ready(function () {

$('.datepicker').datepicker({
dateFormat: 'dd-M-yy',
changeMonth: true,
changeYear: true,
yearRange: "2024:+0",
});
 });



        $('#downloadCsvButton').on('click', function () {
            // Gather influencer IDs from hidden input fields
            var influencerIds = $('.influencer-id').map(function () {
                return $(this).val();
            }).get();

            // Send AJAX request to download CSV
            $.ajax({
                url: api_url + 'download-csv', // Replace with your Laravel route
                method: 'POST',
                data: {influencer_ids: influencerIds},
                success: function (response) {
                    // Create a Blob from the response data
                    var blob = new Blob([response], {type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'});

                    // Create a downloadable link
                    var downloadLink = document.createElement('a');
                    downloadLink.href = URL.createObjectURL(blob);
                    downloadLink.download = 'users.xlsx';

                    // Append the link to the document and trigger the click event
                    document.body.appendChild(downloadLink);
                    downloadLink.click();

                    // Remove the link from the document
                    document.body.removeChild(downloadLink);
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.log('helo')
                    console.error(status);
                    console.error(error);
                    console.error(xhr.responseText);
                }
            });
        });


        $(document).on('click', '.add-to-favourite', function (e) {
            e.preventDefault();
            thisElem = $(this);
            let influencerId = thisElem.data('id');
            let fvt = thisElem.data('fvt');
            
            $.ajax({
                url: api_url + 'influencers/add-to-favourites',
                type: "POST",
                dataType: "json",
                data: {
                    "influencer_id": influencerId,
                    "fvt": fvt
                },
                success: function (response) {
                    console.log(response.status);
                    if(response.fr_in==1){
                        $('.add-to-favourite').css('color', 'red');
                      }else{
                        $('.add-to-favourite').css('color', 'white');
}
                    if (response.status) {
                        show_success_message(response.message);
                        $(thisElem).hide();
                        $(thisElem).parents('.influencerdetail').find('.remove-favourite').show();
                        $(thisElem).parents('.avatar-one').find('.main-icon').css('color', 'red');
                    } else {
                        show_error_message(response.message);

                    }
                }
            });
        });
        $(document).on('click', '.add-to-invented', function (e) {
            e.preventDefault();
            thisElem = $(this);
            let influencerId = thisElem.data('id');
            let fvt = thisElem.data('fvt');
            
            $.ajax({
                url: api_url + 'influencers/add-to-invented',
                type: "POST",
                dataType: "json",
                data: {
                    "influencer_id": influencerId,
                    "fvt": fvt
                },
                success: function (response) {
                    if(response.fr_in==2){
                        $('.add-to-invented').css('color', '#61de2a');
                      }else{
                        $('.add-to-invented').css('color', 'white');
}
 

                    if (response.status) {

                        console.log(response.fr_in);
                        show_success_message(response.message);
                        $(thisElem).hide();
                        $(thisElem).parents('.influencerdetail').find('.remove-favourite').show();
                        $(thisElem).parents('.avatar-one').find('.main-icon').css('color', '#61de2a');
                    } else {
                        show_error_message(response.message);

                    }
                }
            });
        });
    </script>
@endsection


