@extends('layout.master')

@section('content')
    {{--    @dd(request()->all())--}}
    <style>
        .select2-container--default .select2-selection--single{
            background-color: #fff !important;
    /* border: 1px solid #aaa !important; */
    border-radius: 4px !important;
    color: black !important;
        }
        
        .social-wrapper:hover .followers-count {
    color:goldenrod; /* Change to your desired hover color */
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
   .card .icon-container {
    pointer-events: none; /* Disable clicks for the container of the icons */
}

.card .icon-container > i {
    pointer-events: auto; /* Enable clicks only for the icons themselves */
}

   .changetogold{
  color: blue;
   }
   .changetogold:hover{
  color: blue;
   }

.dropdowndecoration:hover {
        border: 1px solid blue!important;
}

 .dropdowndecoration {
    border-radius: 0.3rem;
    border: 1px solid #997045!important;
}
        #select2-nationality_id-container{
            color:rgb(6 6 6 / 74%)!important;
            /* margin-left: 12px; */
            font-size: 14px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            border: none !important;
            margin-left: 5px !important;
           
        }
        .font_label {
            padding-top: 0px !important;
        }
        .select2-search__field{
            padding-left: 13px !important;
        }
        .select2-search--inline{
            display: none;
        }
        .datepicker {
            padding-left: 10px !important;}
        /* .select2-container--default.select2-container--focus .select2-selection--multiple:focus{
            border: 1px solid blue !important;
        } */

        .tagify__tag {
            width: 47% !important;
        }
        ::-webkit-scrollbar {
              width: 6px; /* You can adjust this value based on your preference */
           }
.ui-state-default  {
    border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }
  .lobibox-notify, .lobibox-notify-success, .animated-fast, .fadeInDown, .notify-mini{
    width: 100px !important;
    margin-right: 120px !important; 
    /* text-align: center !important; */
}
  #ui-datepicker-div{
width: 200px !important;
  }
  .font_label{
    padding-top: 8px !important;
    margin-bottom: -0.5rem !important;

  }
  .select2-selection__rendered[role="textbox"][aria-readonly="true"] {
    color: black !important;
    padding-left: 0px !important;
}

  #select2--container,.select2-selection__rendered{
 color: black !important;
 padding-left: 0px !important;
  }
  .nationality_id{
    border-color: #997045;

  }
  .nationality_id:hover{
    border-color: blue;

  }
  .select2-results__options{
    min-height: 70px !important;
  }
 

  .select2-container--default .select2-selection--single {
    color: blue !important;
}
/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}
.form-control{
    border-color: #997045 !important;
}
.form-control:hover{
    border-color: blue !important;
}
.select2-container--default .select2-selection--multiple {
    border-color: #997045 !important; 
}


.select2-container--default .select2-selection--multiple:hover {
    border-color: blue !important; 
}
.select2-container{
    border-color: #997045 !important; 
}
.select2-container:focus{
    border-color: blue !important; 
}
.select2-results__message{
 text-align: center !important;
}
#select2-city_id-results{
    /* display: none !important; */
    min-height: 40px !important;
}
#select2-language_dropdown-container{
    margin-left: 9px !important;
}
#select2-nationality_id-results{
padding-left: 3px !important;
} 
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
    border: 0px solid !important;
    background-color: #e4e4e4 !important;
}
.changecolor{
color: #0504aa !important; 
}
.active{
    color: goldenrod !important; 
}
.changecolor:hover{
    color: goldenrod !important; 
}
.clearall{
    color: #0504aa !important;
}
.clearall:hover{
    color: goldenrod !important;
}
.select2-container:hover{
    border-color: #0504aa !important; 
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}
.lobibox-notify.notify-mini .lobibox-notify-body {
    margin: 7px 1px 0px 0px !important;
}
.select2-container--default .select2-selection--multiple{
    border: 1px solid #997045 !important;
    border-radius: 6px;
    height: 45px !important;
    padding: 6px 0px 3px 9px;
}
.select2-selection__choice__display{
 margin-left: -6px !important;
 font-size: 14px;

}
.select2-selection--multiple{
    overflow-y: overlay !important;
}
.select2-selection__clear{
    display:none; 
}
.select2-container--default .select2-results__option{

    
    padding-left: 11px !important;
}
    </style>
    <section style="border-top:2px solid #eee;">
        <br/>
        <div class="row" style="display: none;">
            <div class="col-md-12 ">
                <div class="input-box text-center mx-auto"
                     style="border:none;height:55px;width:570px;border:1px solid #999;border-radius:30px;text-align:center;">
                    <input type="text" class="middle-search" placeholder=" Search..."
                           style="border:none;height:50px;width:500px; display: none;" ><i class="fa fa-search"></i>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="container" style="max-width: 1440px !important;">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar" style="border:0px solid red;">
                    <form action="{{ env('BASE_URL') }}vendor/influencers-filter" id="fiter-infl">
                        <input type="hidden" name="source" value="web">
                        <div class="card search-filter" style="border:0px solid red;">
                            <div class="card-header d-flex justify-content-between"
                                 style="background:#f2e49c  !important;">
                                <h4 class="card-title mb-0">FILTERS</h4>
                                <a href="{{ env('BASE_URL') }}/vendor/dashboard" class="clearall">Clear All</a>
                            </div>
                            <div class="card-body" style="background:#f2e49c  !important;">
                                                              
                                <div class="filter-widget">
                                    <input type="text" class="form-control" placeholder="Search..." name="">
                                    <label for="" class="font_label">Country</label>
                                    @php $countries = getCountries()->sortBy('name'); @endphp
                                    <select class="form-control  nationality_id" id="nationality_id" 
                                            name="country_id">
                                        <option value="" disabled hidden selected>&nbsp;</option>
                                        @forelse($countries as $country)
                                            <option value="{{ $country->id }}"
                                                    @if(isset(request()->country_id) && in_array($country->id, request()->country_id)) selected @endif>{{ $country->name }}</option>
                                        @empty
                                            <option value="">No Data</option>
                                        @endforelse
                                    </select>
                                    <label for="" class="font_label">City</label>
                                    <select name="city_id[]" class="form-control select2" multiple id="city_id">

                                    </select>
                                    @php $categories = getCategories()->sortBy('name');  @endphp
                                    <div class="form-group">
                                        <label for="" class="font_label">Category</label>
                                        <select class="form-control select2" name="category_id[]" multiple>
                                           
                                            @forelse($categories as $category)
                                                <option
                                                    value="{{ $category->id }}"
                                                    @if(request()->category_id && in_array($category->id, request()->category_id))
                                                    selected
                                                    @endif>{{ $category->name }}</option>
                                            @empty
                                                <option value="">No Data</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>


                                <div class="filter-widget">
                                    <label class="font_label">Platforms</label>
                                    <div class="col-md-12">
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <span style="font-size:14px;position:relative;top:-3px;">
                                                <img src="{{ asset('assets/img/social-icon/insta.png')}}" alt="insta"
                                                     width="20" class="shaking" style=" margin-right: 3px;"
                                                 >
                                                Instagram</span> <input type="checkbox" name="instagram"
                                                                        <?php

                                                                        if (request()->instagram) {
                                                                            echo "checked";

                                                                        } else {
                                                                            echo "";
                                                                        }
                                                                        ?>
                                                                        style="width:20px;height:20px; margin-left: 4px;">
                                            </div>
                                            <div class="col-md-6">
                                                <span style="font-size:14px;position:relative;top:-3px;">
                                                <img src="{{ asset('assets/img/social-icon/fb.png')}}" alt="insta"
                                                     width="20" class="shaking" style=" margin-right: 3px;">
                                                     Facebook</span> <input type="checkbox" name="facebook"
                                                                            <?php

                                                                            if (request()->facebook) {
                                                                                echo "checked";
                                                                            } else {
                                                                                echo "";
                                                                            }
                                                                            ?>
                                                                            style="width:20px;height:20px; margin-left: 4px;">
                                            </div>
                                            <div class="col-md-6">
                                                <span style="font-size:14px;position:relative;top:-3px;">
                                                <img src="{{ asset('assets/img/social-icon/youtube.svg')}}" alt="insta"
                                                     width="20" class="shaking" style=" margin-right: 5px;">
                                                     Youtube &nbsp;&nbsp; </span> <input type="checkbox" name="youtube"
                                                                                         <?php

                                                                                         if (request()->youtube) {
                                                                                             echo "checked";

                                                                                         } else {
                                                                                             echo "";
                                                                                         }
                                                                                         ?>
                                                                                         style="width:20px;height:20px; margin-left: 4px;">
                                            </div>
                                            <div class="col-md-6">
                                                <span style="font-size:14px;position:relative;top:-3px;">
                                                <img src="{{ asset('assets/img/social-icon/tiktok.png')}}" alt="insta"
                                                     width="20" class="shaking" style=" margin-right: 3px;">
                                                     Tiktok &nbsp; &nbsp; &nbsp; </span> <input type="checkbox"
                                                                                                name="tiktok"
                                                                                                <?php

                                                                                                if (request()->tiktok) {
                                                                                                    echo "checked";

                                                                                                } else {
                                                                                                    echo "";
                                                                                                }
                                                                                                ?>
                                                                                                style="width:20px;height:20px; margin-left: 3px;">
                                            </div>
                                            <div class="col-md-6">
                                                <span style="font-size:14px;position:relative;top:-3px;">
                                                <img
                                                    src="{{ asset('assets/img/social-icon/twitter.png')}}"
                                                    alt="insta"
                                                    width="20" class="shaking" style=" margin-right: 3px;">
                                                     Twitter &nbsp;&nbsp; &nbsp;</span> <input type="checkbox"
                                                                                               name="twitter"
                                                                                               <?php

                                                                                               if (request()->twitter) {
                                                                                                   echo "checked";

                                                                                               } else {
                                                                                                   echo "";
                                                                                               }
                                                                                               ?>
                                                                                               style="width:20px;height:20px; margin-left: 4px;">
                                            </div>

                                            <div class="col-md-6">
                                                <span style="font-size:14px;position:relative;top:-3px;">
                                                <img
                                                    src="{{ asset('assets/img/social-icon/pinterest.png')}}"
                                                    alt="insta"
                                                    width="20" class="shaking" style=" margin-right: 3px;">
                                                    Pinterest &nbsp;&nbsp; &nbsp;</span> <input type="checkbox"
                                                                                               name="twitter"
                                                                                               <?php

                                                                                               if (request()->pinterest) {
                                                                                                   echo "checked";

                                                                                               } else {
                                                                                                   echo "";
                                                                                               }
                                                                                               ?>
                                                                                               style="width:20px;height:20px; margin-left: -10px;">
                                            </div>
                                            <div class="col-md-6">
                                                <span style="font-size:14px;position:relative;top:-3px;">
                                                <img
                                                    src="{{ asset('assets/img/social-icon/snapchat.png')}}"
                                                    alt="insta" class="shaking"
                                                    style="margin-left: -3px; margin-right: 4px; height: 23px;width: 23px;">
                                                    Snapchat &nbsp;&nbsp; &nbsp;</span> <input type="checkbox"
                                                                                               name="twitter"
                                                                                               <?php

                                                                                               if (request()->snapchat) {
                                                                                                   echo "checked";

                                                                                               } else {
                                                                                                   echo "";
                                                                                               }
                                                                                               ?>
                                                                                               style="width:20px;height:20px;margin-left: -10px;">
                                            </div>
                                            <div class="col-md-6">
                                                <span style="font-size:14px;position:relative;top:-3px;">
                                                <img
                                                    src="{{ asset('assets/img/social-icon/web.png')}}"
                                                    alt="insta"
                                                    width="20" class="shaking" style="margin-right: 4px;">
                                                    Website &nbsp;&nbsp; &nbsp;</span> <input type="checkbox"
                                                                                               name="twitter"
                                                                                               <?php

                                                                                               if (request()->website) {
                                                                                                   echo "checked";

                                                                                               } else {
                                                                                                   echo "";
                                                                                               }
                                                                                               ?>
                                                                                               style="width:20px;height:20px ;margin-left: -8px;">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="filter-widget">
                                    <label class="font_label">Followers</label>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col filters">1 - 250K</div>
                                                    <div class="col">
                                                        <input type="checkbox" name="nano"
                                                               <?php

                                                               if (request()->nano) {
                                                                   echo "checked";

                                                               } else {
                                                                   echo "";
                                                               }
                                                               ?>
                                                               style="width:20px;height:20px; margin-left: 5px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col filters">250K - 500K</div>
                                                    <div class="col">
                                                        <input type="checkbox" name="micro"
                                                               <?php

                                                               if (request()->micro) {
                                                                   echo "checked";

                                                               } else {
                                                                   echo "";
                                                               }
                                                               ?> style="width:20px;height:19px  ;  margin-left: -8px;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col filters">500k - 1M</div>
                                                    <div class="col">
                                                        <input type="checkbox" name="small"
                                                               <?php

                                                               if (request()->small) {
                                                                   echo "checked";

                                                               } else {
                                                                   echo "";
                                                               }
                                                               ?> style="width:20px;height:20px  ;  margin-left:5px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col filters">1M - 5M</div>
                                                    <div class="col">
                                                        <input type="checkbox" name="medium"
                                                               <?php

                                                               if (request()->medium) {
                                                                   echo "checked";

                                                               } else {
                                                                   echo "";
                                                               }
                                                               ?> style="width:20px;height:19px; margin-left: 5px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col filters">5M - 50M</div>
                                                    <div class="col">
                                                        <input type="checkbox"
                                                               name="mega"
                                                               <?php

                                                               if (request()->mega) {
                                                                   echo "checked";

                                                               } else {
                                                                   echo "";
                                                               }
                                                               ?>
                                                               style="width:20px;height:21px;margin-left: 5px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col filters">50M+</div>
                                                    <div class="col">
                                                        <input type="checkbox"
                                                               name="mega"
                                                               <?php

                                                               if (request()->mega) {
                                                                   echo "checked";

                                                               } else {
                                                                   echo "";
                                                               }
                                                               ?>
                                                               style="width:20px;height:19px; margin-left: 5px;">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- <div class="filter-widget"> -->
                                        <!-- </div> -->

                                        <!-- <div class="filter-widget"> -->
                                        <label class="font_label">Language</label>
                                        <!-- <div class="form-group"> -->
                                        @php $spoken_languages = getlanguge(); @endphp
                                        <select class="form-control select2" name="spoken_language_ids[]"  multiple="multiple">
                                            {{-- <option value="">&nbsp;&nbsp;</option> --}}
                                            @forelse($spoken_languages as $language)
                                                <option value="{{ $language->id }}"
                                                        @if(isset(request()->spoken_language_ids) && in_array($language->id, request()->spoken_language_ids)) selected @endif>{{ $language->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                        <!-- </div> -->
                                        <!-- </div> -->
                                        <!-- <div class="filter-widget"> -->
                                        <label class="font_label">Ethnicity</label>
                                        <!-- <div class="form-group"> -->
                                        @php $ethnicities = getEthnicity(); @endphp
                                        <select class="form-control select2" name="ethnicity_ids[]" multiple>
                                            {{-- <option value="">&nbsp;&nbsp;</option> --}}
                                            @forelse($ethnicities as $ethnicity)
                                                <option value="{{ $ethnicity->id }}"
                                                        @if(isset(request()->ethnicity_ids) && in_array($ethnicity->id, request()->ethnicity_ids)) selected @endif>{{ $ethnicity->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                        <!-- </div> -->
                                        <!-- </div> -->
                                        <!-- <div class="filter-widget"> -->
                                        <label class="font_label">Nationality</label>
                                        <!-- <div class="form-group"> -->
                                        @php $countries = getnationality(); @endphp
                                        <select class="form-control seletct2 nationality_id" 
                                                name="country_id" multiple="multiple">
                                            {{-- <option value="">&nbsp;&nbsp;</option>  --}}
                                            @forelse($countries as $country)
                                                <option value="{{ $country->id }}"
                                                        @if(isset(request()->country_id) && in_array($country->id, request()->country_id)) selected @endif>{{ $country->name }}</option>
                                            @empty
                                                <option value="">No Result Found</option>
                                            @endforelse
                                        </select>
                                        <!-- </div> -->
                                        <!-- </div> -->
                                        <!-- <div class="filter-widget"> -->

                                        @php

                                            if(request()->age){
                                                 $age = getValuesFromObjectOfArray(json_decode(request()->age));

                                                $ages = implode(',', $age);

                                            } else {
                                                $ages = '';
                                            }
                                        @endphp
                                        <label class="font_label">Age</label>
                                        <!-- <div class="form-group"> -->
                                        {{--                                        <select class="form-control" name="">--}}
                                        {{--                                            <option value="">+More</option>--}}
                                        {{--  
                                                                              </select>--}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" pattern="\+?\d*" oninput="validateInput(this)" name="age1"
                                            
                                                placeholder='Min' value="" >
                                            </div>
                                            <div class="col-md-6">


                                                <input type="text" class="form-control" name="age" pattern="\+?\d*" oninput="validateInput(this)"
                                                
                                                placeholder='Max ' value="{{$ages}}" >
                                              
                                            </div>
                                          
                                          
                                           
                                        </div>
                                       

                                        <!-- </div> -->
                                    </div>
                                    <label class="font_label">Gender</label>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span
                                                    style="font-size:14px;position:relative;top:-7px;">Male &nbsp;</span>
                                                <input type="checkbox" name="male"
                                                       <?php

                                                       if (request()->male) {
                                                           echo "checked";

                                                       } else {
                                                           echo "";
                                                       }
                                                       ?> style="width:20px;height:20px">
                                            </div>
                                            <div class="col-md-6">
                                                <span
                                                    style="font-size:14px;position:relative;top:-7px;">Female &nbsp;</span>
                                                <input type="checkbox" name="female"
                                                       <?php

                                                       if (request()->female) {
                                                           echo "checked";

                                                       } else {
                                                           echo "";
                                                       }
                                                       ?> style="width:20px;height:20px">
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <span
                                                    style="font-size:14px;position:relative;top:-7px;">Other</span>
                                                <input type="checkbox" name="other"
                                                       <?php
                                                       //if (request()->other) {
                                                       //    echo "checked";
                                                       //} else {
                                                          // echo "";
                                                      // }
                                                       ?> 
                                                       style="width:20px;height:20px">
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- <div class="filter-widget"> -->
                                    @php

                                        if(request()->hair_types){
                                             $hairs = getValuesFromObjectOfArray(json_decode(request()->hair_types));

                                            $hair_type = implode(',', $hairs);

                                        } else {
                                            $hair_type = 'Long, Short, Curly';
                                        }

                                        $hair_type1 = explode(",", $hair_type);
                                    @endphp

                                    <label class="font_label">Hair Type</label>
                                    {{-- <input name='hair_types' class='form-control'
                                           placeholder='write some hair types'
                                           value="{{$hair_type}}"> --}}
                                                                       <select name="hair_types[]" class="form-control select2" multiple  id="">
                                                                        {{-- @foreach($hair_type1 as $hair)  
                                                                        
                                                                        <option value="{{$hair}}">{{$hair}}</option>
                                                                         
                                                                           @endforeach --}}
                                                                           {{-- <option selected value="">&nbsp;&nbsp;</option> --}}
                                                                           <option value="afro">Afro</option>
                                                                           <option value="blad">Bald</option>
                                                                           <option value="curly">Curly</option>
                                                                           <option value="coily">Coily</option>
                                                                         
                                                                          
                                                                           <option value="long">Long</option>
                                                                           <option value="short">Short</option>
                                                                           <option value="straight">Straight</option>
                                                                           <option value="thick">Thick</option>
                                                                           
                                                                            <option value="wavy">Wavy</option>
                                                                           
                                                                           
                                                                  </select> 


                                <!-- <div class="filter-widget"> -->

                                    @php

                                        if(request()->hair_color){
                                             $hairs = getValuesFromObjectOfArray(json_decode(request()->hair_color));

                                            $hair_color = implode(',', $hairs);

                                        } else {
                                            $hair_color = 'Black, Blue, White';
                                        }
                                        $hair_color1 = explode(",", $hair_color);
                                    @endphp
                                    <label class="font_label">Hair Color</label>
                                    <!-- <div class="form-group"> -->
                                        <select name="hair_color[]" class="form-control select2 " multiple  id="">
                                            {{-- @foreach($hair_color1 as $hcolor)  
                                            
                                            <option value="{{$hcolor}}">{{$hcolor}}</option>
                                             
                                               @endforeach --}}
                                               {{-- <option selected value="">&nbsp;&nbsp;</option> --}}
                                               <option value="balayage">Balayage</option> 
                                               <option value="black">Black</option>
                                               <option value="blonde">Blonde</option>
                                               <option value="brown">Brown</option>
                                               <option value="dark">Dark</option>
                                               <option value="ginger">Ginger</option>
                                               <option value="gold">Gold</option>
                                               <option value="green">Green</option>
                                               <option value="grey">Grey</option>
                                               <option value="mixed">Mixed</option>

                                              
                                               <option value="red">Red</option>
                                               <option value="white">White</option>
                                              
                                      </select> 
                                    <!-- </div> -->

                                    @php

                                        if(request()->hair_color){
                                             $eyes = getValuesFromObjectOfArray(json_decode(request()->hair_color));

                                            $eye_color = implode(',', $eyes);

                                        } else {
                                            $eye_color = 'Black, Blue, White';
                                        }
                                        $eye_color1 = explode(",", $eye_color);
                                    @endphp
                                    <label class="font_label">Eye Color</label>
                                    <select name="eye_color[]" class="form-control select2 " multiple  id="">
                                        {{-- @foreach($eye_color1 as $ecolor)  
                                        
                                        <option value="{{$ecolor}}">{{$ecolor}}</option>
                                         
                                           @endforeach --}}
                                           {{-- <option selected value="">&nbsp;&nbsp;</option> --}}
                                           <option value="azure">Azure</option>
                                           <option value="Agate">Agate</option>
                                           <option value="amber">Amber</option>
                                           <option value="blue">Blue</option>
                                           <option value="black">Black</option>
                                           <option value="brown">Brown</option>
                                           <option value="grey">Gray</option> 
                                           <option value="green">Green</option>
                                           <option value="hazel">Hazel</option>
                                           <option value="mixed">Mixed</option>
                                           <option value="nordic">Nordic</option>
                                          
                                           <option value="red">Red</option>
                                           <option value="Serene ">Serene </option>
                                          
   
                                          
                                        
                                          
                                          

                                  </select> 
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="font_label">Height-CM</label>
                                            <input type="text" class="form-control" name="height" pattern="\+?\d*"  oninput="validateInput(this)"
                                                   {{-- placeholder=" Height..." --}}
                                                   value="@if(request()->height){{ request()->height }}@endif">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="font_label">Weight-KG</label>
                                            <input type="text" class="form-control" name="width" pattern="\+?\d*"  oninput="validateInput(this)"
                                                   {{-- placeholder=" Weight..." --}}
                                                   value="@if(request()->width){{ request()->width }}@endif">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="font_label">Shoes Size - EU</label>
                                            <input type="text" class="form-control" name="shoes_size" pattern="\+?\d*"  oninput="validateInput(this)"
                                                   {{-- placeholder=" Shoes Size..." --}}
                                                   value="@if(request()->shoes_size){{ request()->shoes_size }}@endif">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="font_label">Cloth Size</label>
                                            {{-- <input type="text" class="form-control" name="cloth_size"
                                                   {{-- placeholder=" Cloth Size..." --}}
                                                   {{-- value="@if(request()->cloth_size){{ request()->cloth_size }}@endif"> --}} 
                                                   <select name="clothsize" id=""
                                                   class="form-control available-country mySelect floating">
                                                   <option selected value="">&nbsp;&nbsp;</option>
                                               <option value="XS">XS</option>
                                               <option value="S">S</option>
                                               <option value="M">M</option>
                                                <option value="L">L</option> 
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                                <option value="XXXL">XXXL</option>
                                           </select>
                                                </div>
                                        <div class="col-md-6">
                                            {{-- select2 --}}
                                            <label class="font_label">Tattoo</label>
                                            <select  name="tattoo" class="form-control mySelect tattoo ">
                                                <option disabled selected hidden value="">&nbsp;&nbsp;</option>
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
                                        <div class="col-md-6">
                                            <label class="font_label">Collaboration</label>
                                            <select name="is_collaboration" class="form-control mySelect is_collaboration " id="">
                                                <option disabled selected hidden value="">&nbsp;&nbsp;</option>
                                                <option value="1" @if(request()->is_collaboration == 1) selected @endif>
                                                    Yes
                                                </option>
                                                <option value="0" @if(request()->is_collaboration == 0)  @endif>
                                                    No
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="font_label">Art</label>
                                            <select type="text" class="form-control select2" name="art[]" multiple>
                                                @foreach(getArts()->sortBy('name') as $art)
                                                    <option
                                                        value="{{ $art->key }}"
                                                        @if(in_array($art->key, request()->art ?? [])) selected @endif>{{ $art->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="font_label">Availability</label>
                                            <input type="text" class="form-control datepicker1" name="availability_from_date" placeholder="Date" 
                                                   value="@if(request()->availability_from_date){{  date('d-m-Y',strtotime(request()->availability_from_date)) }}@endif" style=" background-color: white;">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="font_label">&nbsp;</label>
                                            <input type="text" class="form-control datepicker1" name="availability_to_date" placeholder="Date" 
                                                   value="@if(request()->availability_to_date){{date('d-m-Y',strtotime(request()-> request()->availability_to_date)) }}@endif" style=" background-color: white;">
                                        </div>
                                    </div>


                                    <label class="font_label">Price $</label>
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" name="min_price" pattern="\+?\d*"  oninput="validateInput(this)"  placeholder="Min" class="form-control "
                                                                     value="@if(request()->min_price){{ request()->min_price }}@endif"
                                                                   ></div>
                                        <div class="col-md-6"><input type="text" name="max_price" pattern="\+?\d*"  oninput="validateInput(this)"  placeholder="Max" class="form-control "
                                                                     value="@if(request()->max_price){{ request()->max_price }}@endif"
                                                                     ></div>
                                    </div>

                                </div>

                                <div class="btn-search text-center" style="margin-top: 12px;">
                                    <button type="submit" class="btn btn-block">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="col-md-10 mx-auto text-center" style="margin-top: -15px;">
                        <div class="row mx-auto">
                            <div class="quick-filter mx-auto">
                                <ul class="main-nav nav mx-auto" style="text-align:center !important;">
                                    <li  class="@if(request()->instagram != 'on' && request()->twitter != 'on' && request()->youtube != 'on' && request()->tiktok != 'on' && request()->snapchat != 'on' && request()->pinterest != 'on' && request()->facebook != 'on') active @endif ">
                                        <a href="{{ env('BASE_URL') }}/vendor/dashboard" class="changecolor @if(request()->instagram != 'on' && request()->twitter != 'on' && request()->youtube != 'on' && request()->tiktok != 'on' && request()->snapchat != 'on' && request()->pinterest != 'on' && request()->facebook != 'on') active @endif ">All
                                            Influencers</a></li>
                                    <li class="@if(request()->instagram == 'on') active  @endif ">
                                        <a href="{{ env('BASE_URL') }}/vendor/influencers-filter?instagram=on"  class="changecolor @if(request()->instagram == 'on') active  @endif " >Instagram</a>
                                    </li>
                                    <li class="@if(request()->twitter == 'on') active @endif changecolor"><a
                                            href="{{ env('BASE_URL') }}/vendor/influencers-filter?twitter=on" class="changecolor @if(request()->twitter == 'on') active @endif">Twitter</a>
                                    </li>
                                    <li class="@if(request()->youtube == 'on') active @endif changecolor"><a
                                            href="{{ env('BASE_URL') }}/vendor/influencers-filter?youtube=on" class="changecolor @if(request()->youtube == 'on') active @endif">Youtube</a>
                                    </li>
                                    <li class="@if(request()->tiktok == 'on') active @endif changecolor"><a
                                            href="{{ env('BASE_URL') }}/vendor/influencers-filter?tiktok=on" class="changecolor @if(request()->tiktok == 'on') active @endif">Tik Tok</a>
                                    </li>
                                    <li class="@if(request()->facebook == 'on') active @endif changecolor"><a
                                            href="{{ env('BASE_URL') }}/vendor/influencers-filter?facebook=on" class="changecolor @if(request()->facebook == 'on') active @endif">Facebook</a>
                                    </li>
                                    <li class="@if(request()->snapchat == 'on') active @endif "><a
                                            href="{{ env('BASE_URL') }}/vendor/influencers-filter?snapchat=on" class="changecolor @if(request()->snapchat == 'on') active @endif">Snap
                                            Chat</a>
                                    </li>
                                    <li class="@if(request()->pinterest == 'on') active @endif "><a
                                        href="{{ env('BASE_URL') }}/vendor/influencers-filter?pinterest=on" class="changecolor @if(request()->pinterest == 'on') active @endif">Pinterest
                                        </a>
                                </li>
                                    <li class="@if(request()->website== 'on') active @endif "><a
                                        href="{{ env('BASE_URL') }}/vendor/influencers-filter?website=on" class="changecolor @if(request()->website== 'on') active @endif">Website</a>
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
                                        <select class="custom-select get-infl">
                                            <option value="1000">All</option>
                                            {{--                                                                                        <option>Relevance</option>--}}
                                            <option value="30">
                                                <!-- Rating -->
                                                30
                                            </option>
                                            <option value="50">
                                                <!-- Popular -->
                                                50
                                            </option>
                                            <option value="100">
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
                 
                    <div class="row" id="infulecer-show">
                        @forelse($influencers as $influencer)
                            <div class="col-md-3 col-lg-3 col-xl-3 influencer-box">
                        {{-- <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail" > --}}
                                
                                <div class="card avatar-one" 
                                     {{-- onclick="window.location.href='{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail'" --}}
                                   style="width:100%;cursor: pointer;">
                        
                                   <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>

                            
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

                                            <div  class="influencerdetail">
                                            <div style="position:absolute;text-align:right;border:0px solid red;;right: 20px;top:6px;z-index: 99999;">

                                                 <i class="fa-solid fa-heart shaking  add-to-favourite"
                                                 data-id="{{ $influencer->id }}"
                                                 data-fvt="1"
                                                  
                                                 style="padding:7px;border-radius:50%;margin-top: 12px;  color:{{$color}}!important; margin-right: -8px;  display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'inline-block' : '' }}"></i>

                                                <i class="fas fa-check-circle shaking  add-to-invented"
                                                   data-id="{{ $influencer->id }}"
                                                   data-fvt="2"
                                                 
                                                   style="padding:7px;border-radius:50%;margin-top: 12px; color:{{$color1}}!important; margin-right: -6px;display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'inline-block' : '' }}"></i>

                    
                                            </div>
                                            <!-- {{--<span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; {{ $influencer->state ? $influencer->state->name : '' }}</span><br/>--}} -->
                                             {{-- <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; {{ $influencer->user_professional_detail && $influencer->user_professional_detail->category ? $influencer->user_professional_detail->category->name : '' }}</span> --}}
                                          
                                             <ul class="start" data-id="{{$influencer->id}}" style="list-style-type: none ;         height: 100%;">

                                                @php
                                                
                                                    $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                                                    $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                                                    $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                                                    $twitter = getInfluencerSocialMediaProfileByTypeAndId('twitter', $influencer->id);
                                                    $youtube = getInfluencerSocialMediaProfileByTypeAndId('youtube', $influencer->id);
                                                    $snapchat = getInfluencerSocialMediaProfileByTypeAndId('snapchat', $influencer->id);
                                            //    dd( $instagram );
                                               @endphp
                                                &nbsp;
                                                @if($instagram && isset($instagram->followers))



                                                    <li style="display: inline-block;;color:#fff; margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center; margin-left:6px;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/insta.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px; ">
                                                        <span>  {{ strtoupper($instagram ? $instagram->followers : 0) }}</span> 
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                @endif

                                                @if($twitter && isset($twitter->followers))
                                                <li style="display: inline-block; color:#fff; margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/twitter.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size: 11px;">
                                                            <span>{{ strtoupper($twitter ? $twitter->followers : 0) }}</span>
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                            @endif
                                            

                                                @if($youtube && isset($youtube->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/youtube.svg') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                          <span> {{ strtoupper($youtube ? $youtube->followers : 0) }}</span> 
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                    
                                                @endif
                                                @if($tiktok && isset($tiktok->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/tiktok.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                          <span> {{ strtoupper($tiktok ? $tiktok->followers : 0) }}</span> 
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                  
                                                @endif
                                                @if($facebook && isset($facebook->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/fb.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                          <span>   {{ strtoupper($facebook ? $facebook->followers : 0) }}</span>  
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                    
                                                @endif
                                                @if($snapchat && isset($snapchat->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 50%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/snapchat.png') }}" class="shaking" style="margin-bottom: 8px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                          <span>{{ strtoupper($snapchat ? $snapchat->followers : 0) }}</span>  
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                   
                                                @endif
                                            </ul>

                                        </div>
                                        <img src="{{ $influencer ? $influencer->image_url : '' }}" class="influencer"
                                             alt="author" width="100%" height="200px" >
                                    {{-- </a> --}}
                                    <div class="influencer-dev" style="margin: 10px 10px 0px 10px; padding: 3px 0px 0px 3px;">
                                        <h5 style="font-size:12px;"
                                            class="influencer-name bilal-list-influencer">{{ $influencer ? $influencer->full_name : '' }}</h5>


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

                            if($influencer->personal_information!=null){
                            $city =  DB::table('cities')->where('id',$influencer->personal_information->city_id)->first();
                            // $country =  DB::table('countries')->where('id',$influencer->personal_information->national_id)->first();
                            }
                            

                                            
                                            @endphp
                                        <h5 style="font-size:12px;">{!! $categoryNames ?? '' !!}</h5>
                                        <h5 style="font-size:12px;">
                                            Price: {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }}
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:&nbsp;{{$city->name ?? ''}}
                                    </div>
                                </div>
                            {{--                                dsf--}}
                            <!----------->
                        {{-- </a> --}}

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

    <script>

    
        function validateInput(input) {
    // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
    input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
}
        var range_start = "{{ isset(request()->min_value) ? request()->min_value : 0 }}";
        var range_end = "{{ isset(request()->max_value) ? request()->max_value : 50 }}";
        // // Initialize theia-sticky-sidebar
        // jQuery(document).ready(function() {
        //     jQuery('.sidebar').theiaStickySidebar({
        //         // Configuration options go here
        //     });
        // });
        function validateInput(input) {
    // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
    input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
} 


        $(document).ready(function () {
            $('.datepicker1').datepicker({
       dateFormat: 'dd-M-yy',
       changeMonth: true,
       changeYear: true,
       yearRange: "2024:+0",
   });
            $('.start').on('click', function (e) {
        
        // Redirect to the desired URL
    
        const influencerId = $(this).data('id'); // Assume data-id is set for each `.start`
        const baseUrl = "{{ env('BASE_URL') }}"; // Replace with your actual base URL if needed
        window.location.href = `${baseUrl}/influencers/${influencerId}/detail`;
    
              //  onclick="window.location.href='{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail'"
      
    });
   
    $('.selectdropdown').select2();

    $('#nationality_id').select2({
         placeholder: " ",  // Set placeholder text
        allowClear: true,                        // Enable clearing selection
        width: '100%',                           // Ensure full width for the dropdown
        minimumInputLength: 0                   // Set minimum input to trigger search
    });
  


    
            
            $('.seletct2').select2({
                placeholder: " ", // Sets the placeholder text
                allowClear: true,
            });
            $('.mySelect').select2({
                placeholder: " ", // Sets the placeholder text
                allowClear: true, 
    minimumResultsForSearch: Infinity // Disables the search box
  });
            var age_input = document.querySelector('input[name="age"]');
            var hair_types_input = document.querySelector('input[name="hair_types"]');
            var eye_color_input = document.querySelector('input[name="eye_color"]');
            var hair_color_input = document.querySelector('input[name="hair_color"]');


            // initlialize_tagify(age_input);
            initlialize_tagify(hair_types_input);
            initlialize_tagify(eye_color_input);
            initlialize_tagify(hair_color_input);
        });

        function initlialize_tagify(input) {
            // init Tagify script on the above inputs
            tagify = new Tagify(input, {
                maxTags: 10,
                dropdown: {
                    maxItems: 20,           // <- mixumum allowed rendered suggestions
                    classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0,             // <- show suggestions on focus
                    closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
                }
            });
        }


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

        $(document).on('change', '#nationality_id', function () {
            var nationality_id = $(this).val();
            
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "POST",
                    dataType: "json",
                    data: {
                        "country_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;

                            $("#city_id").empty();
                            // $("#city_id").append('<option value="">Select Region</option>');

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                     $("#city_id").append('<option value="">No Data</option>');
                            // $("#city_id").empty();
                        }
                    }
                });
            }
        });

        $(document).on('click', '.add-to-favourite', function (e) {
            e.preventDefault(); // Prevent the default action (link click).
            e.stopImmediatePropagation();
          

            let thisElem = $(this);
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
                    if(response.fr_in==1){
                        $('.add-to-favourite').css('color', 'red');
                      }else{
                        $('.add-to-favourite').css('color', 'white');
}
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
        $(document).on('click', '.add-to-invented', function (e) {
            e.preventDefault(); // Prevent the default action (link click).
            e.stopImmediatePropagation();
            // e.preventDefault();
            let thisElem = $(this);
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
                        show_error_message(response.message);
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
        var record_limit = 20;
        var filter_using_scroll = true;

        $(document).on('change', '.get-infl', function () {
            currentPage = 1;
            filter_using_scroll = false;
            record_limit = $(this).val();
            $('#infulecer-show').html('');


            fetchAndRenderInfluencers(currentPage);
        })

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
                data: {limit: record_limit},
                success: function (response) {

                    if (response.influencers.data.length > 0) {
                        $(response.influencers.data).each(function (i, value) {
                            renderInfluencer(value);
                        });

                        if (filter_using_scroll == true) {
                            total_influencer_count = $('.total_influencer_count').text();
                            console.log(total_influencer_count)

                            $('.total_influencer_count').html(Number(total_influencer_count) + Number(response.influencers.data.length));
                        } else {
                            $('.total_influencer_count').html(Number(response.influencers.data.length));
                        }
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
                filter_using_scroll = true;
                currentPage++;
                fetchAndRenderInfluencers(currentPage);
            }
        });


        // Function to render influencers on the page
        function renderInfluencer(influencer) {

            var influencerHtml = `<div class="col-md-3 col-lg-3 col-xl-3 influencer-box">
                           
                                <div class="card avatar-one" 
                                     {{-- onclick="window.location.href='{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail'" --}}
                                   style="width:100%;cursor: pointer;">
                        
                                   <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>

                            
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

                                            <div  class="influencerdetail">
                                            <div style="position:absolute;text-align:right;border:0px solid red;;right: 20px;z-index: 99999;">

                                                 <i class="fa-solid fa-heart  add-to-favourite"
                                                 data-id="{{ $influencer->id }}"
                                                 data-fvt="1"
                                                  
                                                 style="padding:7px;border-radius:50%;margin-top: 12px;  color:{{$color}}!important; margin-right: -8px;  display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'inline-block' : '' }}"></i>

                                                <i class="fas fa-check-circle   add-to-invented"
                                                   data-id="{{ $influencer->id }}"
                                                   data-fvt="2"
                                                 
                                                   style="padding:7px;border-radius:50%;margin-top: 12px; color:{{$color1}}!important; margin-right: -6px;display: {{ hasFavoritedInfluencers($influencer->id, session()->get('User')->id) == false ? 'inline-block' : '' }}"></i>

                    
                                            </div>
                                            <!-- {{--<span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; {{ $influencer->state ? $influencer->state->name : '' }}</span><br/>--}} -->
                                             {{-- <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; {{ $influencer->user_professional_detail && $influencer->user_professional_detail->category ? $influencer->user_professional_detail->category->name : '' }}</span> --}}
                                          
                                             <ul class="start" data-id="{{$influencer->id}}" style="list-style-type: none ;         height: 100%;">
                                                 @php
                                                
                                                    $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                                                    $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                                                    $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                                                    $twitter = getInfluencerSocialMediaProfileByTypeAndId('twitter', $influencer->id);
                                                    $youtube = getInfluencerSocialMediaProfileByTypeAndId('youtube', $influencer->id);
                                                    $snapchat = getInfluencerSocialMediaProfileByTypeAndId('snapchat', $influencer->id);
                                            //    dd( $instagram );
                                               @endphp
                                                &nbsp;
                                                @if($instagram && isset($instagram->followers))



                                                    <li style="display: inline-block;;color:#fff; margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center; margin-left:6px;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/insta.png') }}" class="shaking" style="margin-bottom: 10px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                        <span>  {{ $instagram ? $instagram->followers : 0 }}</span> 
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                @endif

                                                @if($twitter  && isset($twitter->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/twitter.png') }}" class="shaking" style="margin-bottom: 10px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                        <span>  {{ $twitter ? $twitter->followers : 0 }}</span> 
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;

                                                    
                                                @endif

                                                @if($youtube && isset($youtube->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/youtube.svg') }}" class="shaking" style="margin-bottom: 10px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                          <span> {{ $youtube ? $youtube->followers : 0 }}</span> 
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                    
                                                @endif
                                                @if($tiktok && isset($tiktok->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/tiktok.png') }}" class="shaking" style="margin-bottom: 10px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                          <span> {{ $tiktok ? $tiktok->followers : 0 }}</span> 
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                  
                                                @endif
                                                @if($facebook && isset($facebook->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 60%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/fb.png') }}" class="shaking" style="margin-bottom: 10px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                          <span>   {{ $facebook ? $facebook->followers : 0 }}</span>  
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                    
                                                @endif
                                                @if($snapchat && isset($snapchat->followers))
                                                <li style="display: inline-block;;color:#fff;  margin-top: 50%;">
                                                    <div class="social-wrapper" style="text-align: center;">
                                                        <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                            <img src="{{ asset('assets/img/social-icon/snapchat.png') }}" class="shaking" style="margin-bottom: 10px;" alt="" width="25px">
                                                        </a>
                                                        <div class="text-center font-change followers-count" style="font-size:11px;">
                                                          <span>{{ $snapchat ? $snapchat->followers : 0 }}</span>  
                                                        </div>
                                                    </div>
                                                </li>&nbsp;&nbsp;
                                                   
                                                @endif
                                            </ul>

                                        </div>
                                        <img src="{{ $influencer ? $influencer->image_url : '' }}" class="influencer"
                                             alt="author" width="100%" height="200px">
                                    {{-- </a> --}}
                                    <div class="influencer-dev" style="margin: 10px 10px 0px 10px; padding: 3px 0px 0px 3px;">
                                        <h5 style="font-size:12px;"
                                            class="influencer-name bilal-list-influencer">{{ $influencer ? $influencer->full_name : '' }}</h5>


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

                            if($influencer->personal_information!=null){
                            $city =  DB::table('cities')->where('id',$influencer->personal_information->city_id)->first();
                            // $country =  DB::table('countries')->where('id',$influencer->personal_information->national_id)->first();
                            }
                            

                                            
                                            @endphp
                                        <h5 style="font-size:12px;">{!! $categoryNames ?? '' !!}</h5>
                                        <h5 style="font-size:12px;">
                                            Price: {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }}
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:&nbsp;{{$city->name ?? ''}}
                                    </div>
                                </div>
                            {{--                                dsf--}}
                            <!----------->
                        {{-- </a> --}}

                            </div>`;

            $('#infulecer-show').append(influencerHtml);
        }

    </script>
@endsection
