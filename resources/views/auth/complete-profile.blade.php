@extends('layout.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<style>   
.select2-container--default .select2-selection--multiple {
        max-height: 52px; /* Adjust selected items container height */
        overflow-y: auto;
    }
.dropzone-container {
    border: 2px solid #ccc;
    padding: 20px;
    /* text-align: center; */
    margin-top: 0px;
  }
  .dz-image {
    position: relative;
  }
.fileInput{
    color:#0504aa !important;
}


.fileInput:hover{
    color:goldenrod !important;
}
  #select2--results{
min-height: 70px !important;
  }
  .dropdowndecoration:hover {
        border: 1px solid blue!important;
}

 .dropdowndecoration {
    border-radius: 0.30rem;
    border: 1px solid #997045!important;
}

  .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
    color:blue !important;
    font-weight: 600 !important;
    /* background-color: #6161e4 !important; */
  }
  .select2-dropdown {
border: 0px !important;
  }
  .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    border-right:0px solid !important;
 
    top: -2px !important;
   
  }
  .select2-selection__choice__display{
    margin-left: -5px !important;
    font-size: 12px;
  }
  .dz-preview {
            position: relative;
        }
  .dz-preview .dz-remove {
    position: absolute;
    top: 8px;
    left: 170px;
   
    background-color: #f0f8ff03;
    color: #f20909f7;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    font-size: 35px;
    width: 20px;
    font-weight: 600;
    height: 20px;
    text-align: center;
    line-height: 18px;
        }
        .dz-preview .dz-remove:hover {
            color: blue;

        }

        .select2-selection__clear{
    display:none; 
}
  .floating {
    padding-top: 20px !important;
  }
  .dz-image img{
width: 200px;
height: 200px;
  }

  .select2-search__field{
    border-color: #997045 !important;
  }
  .select2-search__field:focus{
    border-color: blue !important;
  }
  #select2--container{
    padding-top: 16px;
  color: #0b0b0b !important;
  }
  #select2-mySelect-container{
    padding-top: 16px;
  }
  .dz-success-mark{
    display: none;
  }
  .inner_label{
    margin-left: 12px;
  }
 
  .dz-message{
/* display: none !important; */
  }
  .form
  .select2-container--default .select2-selection--multiple .select2-selection__choice{
    font-size: 10px !important;
    border: 0px solid #aaa !important;
  }
  .select2-container {

    z-index: 1 !important;
}
.baseCountry{
font-size: 14px;
font-weight: bold;
}
  .inputbg:focus,.floating:focus {
    border: 1px solid blue !important;
}



.select2-results__option {
    padding: 6px 0px 0px 14px !important;}
.dropzone .dz-preview .dz-image {
    border-radius: 0px !important;}
#Priceinclude::placeholder {
            font-size: 14px !important; /* Change font size */
            /* color: black !important;   */
            /* font-weight: bold  !important; Change color */
        }
.form-control{
    color: black !important;

}
    /* Define the scrollbar track */
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

.ui-state-default  {
        border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }

  #select2-language_dropdown-container {
    margin-left: -15px !important;
}
  #ui-datepicker-div{
width: 210px !important;
  }
  #msform .select2-container .select2-selection--single .select2-selection__rendered {
    /* padding-right: 30px; */
    padding-left: 12px !important;
}
  .from_date:focus, .to_date:focus {
    border: 1px solid blue !important;
}
#my-dropzone .dz-preview {
            display: inline-block;
            margin: 30px;
        }
        #my-dropzone .dz-image {
            width: 150px;
            height: 150px;
        }
        #my-dropzone .dz-details {
            display: none;
        }
        #my-dropzone .dz-message {
            text-align: center;
            margin: 20px;
        }

.dz-error-mark{
display: none !important;
}
#select2-mySelect-container{
   color:  #0b0b0b !important;
}
#select2-arts-container{
    display: inherit !important;
    padding-top: 13px !important;
    max-height: 10px !important;

}
#select2-category_ids-container{
    display: inherit !important;
    padding-top: 13px !important;
    max-height: 10px !important;
}
#select2-spoken_language_ids-container{
    display: inherit !important;
    padding-top: 13px !important;   
    max-height: 10px !important;
}


.select2-container--default.select2-container--focus .select2-selection--multiple{
    overflow: auto !important;
}
.select2-container--default .select2-selection--multiple.select2-selection--clearable{
    overflow: auto !important;
}
.shaking {
    display: inline-block;
    transition: transform 1s ease-in-out;
   }

  .shaking:hover {
   /* Change to your desired hover color */
 
    animation: shake 6s linear infinite;
   }

  @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }
/* .select2-selection__rendered{
    position: absolute;
    top: 12px;
    /* height: 12px; */

/* } */ 
.select2-container--default:focus .select2-selection--multiple:focus{
    border: 1px solid blue !important;
}
.select2-container--default .select2-selection--multiple{
    border: 1px solid #997045 !important;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">

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
                    <form id="msform" action="/upload"  enctype="multipart/form-data" >
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
                                    {{--     
                                
                                </div>--}}

 
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                           
                                            <select name="category_ids[]" id="category_ids"   class="form-control floating   category_ids"
                                            multiple >
                                                {{-- <option value="">Select Influencer Category</option> --}}
                                                @foreach(getCategories()->sortBy('name') as $category)
                                                    <option
                                                        value="{{ $category->id }}" {{ $influencer->categories && in_array($category->id, $influencer->categories->pluck('id')->toArray()) ? 'selected' : ''  }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                         <label for="" style="top: -18px;" class="focus-label">Influencer Category</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            {{--                                        <input type="text" class="form-control" name="professional_category"--}}
                                            {{--                                               placeholder="}
                                            {{--                                               value="{{ $influencer_professional_detail ? $influencer_professional_detail->professional_category  : '' }}">--}}
                                            <select name="arts[]" id="arts"
                                            class="form-control floating"     multiple>
                                           
                                                {{-- <option value="">--Select Art--</option> --}}
                                                @foreach(getArts()->sortBy('name')  as $art)
                                                    <option value="{{ $art->key }}" {{ $influencer->arts && in_array($art->key, $influencer->arts->pluck('art_key')->toArray()) ? 'selected' : ''  }}>{{ $art->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="username" class="focus-label" >Art</label>
                                                 {{-- <label for="" class="focus-label"></label> --}}

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            <select name="spoken_language_ids[]" id="spoken_language_ids" class="form-control  floating" multiple>
                                                @foreach(getlanguge() as $language)
                                                    <option value="{{ $language->id }}" {{ $influencer->spoken_languages && in_array($language->id, $influencer->spoken_languages->pluck('spoken_language_id')->toArray()) ? 'selected' : ''  }}>
                                                        {{ $language->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <label for="spoken_language_ids"  class="focus-label">Languages</label>
                                        </div>
                                        </div>
                                    
                                   

                                </div>
                               
                                <div class="row" style="margin-top:3px;">
                                    <div class="col-md-4">
                                        {{-- <div class="input-container"> --}}
                                            <div class="form-group form-focus dropdowndecoration" style="height:50px;" >
                                          
                                            <select name="national_id" id="" class="form-control selectdropdown floating">
                                                {{-- <option value="">Country</option> --}}
                                                <option value="" disabled selected hidden></option>
                                                @foreach(getnationality() as $country)
                                                    <option 
                                                        value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->national_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="" class="focus-label">Nationality</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        {{-- <div class="input-container"> --}}
                                            <div class="form-group form-focus dropdowndecoration"  style="height:50px;">
                                           
                                            <select name="ethnicity_id" id="mySelect" class="form-control mySelect floating">
                                                <option value="" selected hidden  disabled></option>
                                                @foreach(getEthnicity() as $ethnicity)
                                                    <option
                                                        value="{{ $ethnicity->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->ethnicity_id == $ethnicity->id ? 'selected' : '' }}>{{ $ethnicity->name }}</option>
                                                @endforeach
                                            </select>
                                        <label for="" class="focus-label">Ethnicity</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 50px" >
                                       
                                            <select name="gender" id="" class="form-control mySelect floating"
                                                    value="{{ $influencer_personal_info ? $influencer_personal_info->gender : '' }}">
                                                    <option value="" selected hidden  disabled></option>
                                                <option
                                                  value="Male" {{ $influencer_personal_info &&  $influencer_personal_info->gender == 'Male' ? 'selected' : '' }}>
                                                    Male
                                                </option>
                                                <option
                                                    value="Female" {{ $influencer_personal_info &&  $influencer_personal_info->gender == 'Female' ? 'selected' : '' }}>
                                                    Female
                                                </option>
                                               
                                            </select>
                                            <label for="username" class="focus-label">Gender</label> 
                                        </div>
                                    </div>
                                  
                                  
                                   
                                </div>

                                <div class="row" style="margin-top: 12px;">
                                    <div class="col-md-4">
                                        {{-- <div class="input-container"> --}}
                                            <div class="form-group form-focus">
                                            {{-- <label for="username" class="inner_label">Age</label> --}}
                                            <input type="text" class="form-control  floating" name="age"   pattern="\+?\d*"  oninput="validateInput(this)"  placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->age : '' }}"/>
                                                   <label class="focus-label">Age</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 53px;">
                                        {{-- <div class="input-container"> --}}
                                           
                                            <select name="hair_type" id=""
                                            class="form-control  mySelect floating">
                                      
                                        <option value="" selected hidden  disabled></option>
                                        <option value="afro" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'afro' ? 'selected' : '' }}>Afro</option>
                                        <option value="blad" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'blad' ? 'selected' : '' }}>Bald</option>
                                        <option value="curly" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'curly' ? 'selected' : '' }}>Curly</option>
                                        <option value="coily" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'coily' ? 'selected' : '' }}>Coily</option>
                                        <option value="long" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'long' ? 'selected' : '' }}>Long</option>
                                        <option value="short" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'short' ? 'selected' : '' }}>Short</option>
                                        <option value="straight" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'straight' ? 'selected' : '' }}>Straight</option>
                                        <option value="thick" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'thick' ? 'selected' : '' }}>Thick</option>
                                        <option value="wavy" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_type == 'wavy' ? 'selected' : '' }}>Wavy</option>
                                    </select>
                                      <label for="username" class="focus-label">Hair Type</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 53px;">
                                            
                                            <select name="hair_color" id=""
                                            class="form-control mySelect floating">
                                            <option value="" selected hidden  disabled></option>
                                            
                                            <option value="balayage" {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'balayage' ? 'selected' : '' }}>Balayage</option>
                                            <option value="black"    {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'black' ? 'selected' : '' }}>Black</option>
                                            <option value="blonde"   {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'blonde' ? 'selected' : '' }}>Blonde</option>
                                            <option value="brown"    {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'brown' ? 'selected' : '' }}>Brown</option>
                                            <option value="dark"     {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'dark' ? 'selected' : '' }}>Dark</option>
                                            <option value="ginger"   {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'ginger' ? 'selected' : '' }}>Ginger</option>
                                            <option value="gold"     {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'gold' ? 'selected' : '' }}>Gold</option>
                                            <option value="green"    {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'green' ? 'selected' : '' }}>Green</option>
                                            <option value="grey"     {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'grey' ? 'selected' : '' }}>Grey</option>
                                            <option value="mixed"    {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'mixed' ? 'selected' : '' }}>Mixed</option>
                                            <option value="red"      {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'red' ? 'selected' : '' }}>Red</option>
                                            <option value="white"    {{ isset($influencer_personal_info) && $influencer_personal_info->hair_color == 'white' ? 'selected' : '' }}>White</option>
                                    </select>
                                    <label for="username" class="focus-label">Hair Color</label>
                                        </div>
                                    </div>
                                    
                                

                                </div>
                                <div class="row" >
                                    <div class="col-md-4" style="margin-top:3px;">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 50px;">
                                            
                                            <select name="eye_color" id=""
                                            class="form-control  mySelect  floating">
                                            <option value="" selected hidden  disabled></option>
                                       


                                           <option value="azure" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'azure' ? 'selected' : '' }}>Azure</option>
                                           <option value="Agate" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'Agate' ? 'selected' : '' }}>Agate</option>
                                           <option value="amber" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'amber' ? 'selected' : '' }}>Amber</option>
                                           <option value="blue" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'blue' ? 'selected' : '' }}>Blue</option>
                                           <option value="black" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'black' ? 'selected' : '' }}>Black</option>
                                           <option value="brown" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'brown' ? 'selected' : '' }}>Brown</option>
                                           <option value="grey" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'grey' ? 'selected' : '' }}>Gray</option>
                                           <option value="green" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'green' ? 'selected' : '' }}>Green</option>
                                           <option value="hazel" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'hazel' ? 'selected' : '' }}>Hazel</option>
                                           <option value="mixed" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'mixed' ? 'selected' : '' }}>Mixed</option>
                                           <option value="nordic" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'nordic' ? 'selected' : '' }}>Nordic</option>
                                           <option value="red" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'red' ? 'selected' : '' }}>Red</option>
                                           <option value="Serene" {{ isset($influencer_personal_info) && $influencer_personal_info->eye_color == 'Serene' ? 'selected' : '' }}>Serene</option>
                                    </select>
                                    <label for="username" class="focus-label">Eye Color</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                          
                                            <input type="text" class="form-control floating" name="height"  pattern="\+?\d*"  oninput="validateInput(this)"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->height : '' }}"/>
                                                   <label for="username" class="focus-label">Height-CM</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                        
                                            <input type="text" class="form-control floating" name="weight"  pattern="\+?\d*"  oninput="validateInput(this)"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->weight : '' }}"/>
                                                   <label for="username" class="focus-label">Weight-KG</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <input type="text" class="form-control floating" name="shoes_size"  pattern="\+?\d*"  oninput="validateInput(this)"
                                                   placeholder=""
                                                   value="{{ $influencer_personal_info ? $influencer_personal_info->shoes_size : '' }}"/>
                                                   <label for="username" class="inner_label focus-label" style="margin-left:0px !important;">Shoes Size-EU</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52px;">
                                            {{-- <input type="text" class="form-control floating" name="clothsize" 
                                         
                                            value="{{ $influencer_personal_info ? $influencer_personal_info->clothsize : '' }}"/> --}}
                                            <select name="clothsize" id=""
                                            class="form-control  mySelect  floating">
                                            <option value="" selected hidden  disabled></option>
                                            <option value="XS" {{ isset($influencer_personal_info) && $influencer_personal_info->clothsize == 'XS' ? 'selected' : '' }}>XS</option>
                                            <option value="S"  {{ isset($influencer_personal_info) && $influencer_personal_info->clothsize == 'S' ? 'selected' : '' }}>S</option>
                                            <option value="M"  {{ isset($influencer_personal_info) && $influencer_personal_info->clothsize == 'M' ? 'selected' : '' }}>M</option>
                                            <option value="L"  {{ isset($influencer_personal_info) && $influencer_personal_info->clothsize == 'L' ? 'selected' : '' }}>L</option>
                                            <option value="XL" {{ isset($influencer_personal_info) && $influencer_personal_info->clothsize == 'XL' ? 'selected' : '' }}>XL</option>
                                            <option value="XXL" {{ isset($influencer_personal_info) && $influencer_personal_info->clothsize == 'XXL' ? 'selected' : '' }}>XXL</option>
                                            <option value="XXXL"{{ isset($influencer_personal_info) && $influencer_personal_info->clothsize == 'XXXL' ? 'selected' : '' }}>XXXL</option>
                                    </select>
                                            <label for="username" class="focus-label">Cloth Size</label>
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
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52px;">
                                            
                                            <select name="base_country_id" id=""
                                                    class="form-control available-country selectdropdownforcountry floating">
                                                    {{-- <option value=" " selected>&nbsp;</option> --}}
                                                    <option value="" selected hidden  disabled></option>
                                                @foreach(getCountries() as $country)
                                                    <option value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                         <label for="username" class="focus-label">Based Country</label>
                                        </div>
                                    </div>
                           
                                    
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration " style="height: 52px;">
                                            
                                            <select name="base_city_id" class="form-control selectdropdown  floating  city_id">
                                                @if(isset($influencer_personal_info->country_id))
                                                @foreach(\App\Models\City::where('country_id', $influencer_personal_info->country_id)->get() as $city)
                                                    <option value="{{ $city->id }}" {{ $influencer_personal_info->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            @else
                                                <option value="" hidden disabled>Select City</option>
                                            @endif
                                            </select>
                                        <label for="username" class="focus-label" >Based City</label>
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                         
                                            <input type="text" class="form-control datepicker floating"
                                                   name="main_available_from_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="Date"
                                                   value="{{ $influencer_personal_info ? formatDateToread($influencer_personal_info->main_available_from_date)  : '' }}">
                                            <label for="username" class="inner_label focus-label" style="margin-left:0px !important;">Availability</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                        
                                            <input type="text" class="form-control datepicker floating"
                                                   name="base_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="Date"
                                                   value="{{ $influencer_personal_info ? formatDateToread($influencer_personal_info->base_date)  : '' }}">
                                                   <label for="username" class="inner_label focus-label" style="margin-left:0px !important;">Date</label>
                                        </div>
                                    </div>

                                </div>
                            
                                <div class="row available-box" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52px;">
                                            
                                            <select name="travlling_one_country_id" id=""
                                                    class="form-control available-country selectdropdownforcountry floating">
                                                <option value="0"  selected>&nbsp;</option> 
                                                @foreach(getCountries() as $country)
                                                    <option
                                                        value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->travlling_one_country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                         <label for="username" class="focus-label">Traveling Country &nbsp;&nbsp;1</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52px;">
                                            
                                            <select name="travlling_one_city_id" id="" class="form-control selectdropdown  floating  city_id">
                                                <option value="" disabled hidden selected>&nbsp;</option>
                                         
                                                @if(isset($influencer_personal_info->travlling_one_country_id))
                                                @foreach(\App\Models\City::where('country_id', $influencer_personal_info->travlling_one_country_id)->get() as $city)
                                                    <option value="{{ $city->id }}" {{ $influencer_personal_info->travlling_one_city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            @else
                                                <option value="" hidden disabled>Select City</option>
                                            @endif
                                            </select>
                                           
                                        <label for="username" class="focus-label"  >Traveling City</label>
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group form-focus ">
                                         
                                            <input type="text" class="form-control datepicker  floating"
                                                   name="travlling_one_from_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="Date"
                                                   value="{{ $influencer_personal_info ? formatDateToread($influencer_personal_info->travlling_one_from_date)  : '' }}">
                                            <label for="username" class="inner_label focus-label" style="margin-left:0px !important;"> Date</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                        
                                            <input type="text" class="form-control datepicker floating"
                                                   name="travlling_one_to_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="Date"
                                                   value="{{ $influencer_personal_info ? formatDateToread($influencer_personal_info->travlling_one_to_date)  : '' }}">
                                                   <label for="username" class="inner_label focus-label" style="margin-left:0px !important;">Date</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row available-box" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52px;">
                                           
                                          
                                            <select name="travlling_two_country_id" id=""
                                            class="form-control available-country selectdropdownforcountry  floating">
                                        <option value="0"  selected>&nbsp;</option>
                                        @foreach(getCountries() as $country)
                                            <option
                                                value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->travlling_two_country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                            <label for="username" class=" focus-label">Traveling Country &nbsp;&nbsp;2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52px;">
                                          
                                            <select name="travlling_two_city_id" id="" class="form-control  selectdropdown floating city_id">
                                           

                                                @if(isset($influencer_personal_info->travlling_two_country_id))
                                                @foreach(\App\Models\City::where('country_id', $influencer_personal_info->travlling_two_country_id)->get() as $city)
                                                    <option value="{{ $city->id }}" {{ $influencer_personal_info->travlling_two_city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            @else
                                                <option value="" hidden disabled>Select City</option>
                                            @endif
                                            </select>
                                            <label for="username" class="focus-label"  >Traveling City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                          
                                            <input type="text" class="form-control datepicker floating"
                                                   name="travlling_two_from_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="Date"
                                                   value="{{ $influencer_personal_info ? formatDateToread($influencer_personal_info->travlling_two_from_date)  : '' }}">
                                                   <label for="username" class="inner_label focus-label" style="margin-left:0px !important;"> Date</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                          
                                            <input type="text" class="form-control datepicker floating"
                                                   name="travlling_two_to_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="Date"
                                                   value="{{ $influencer_personal_info ? formatDateToread($influencer_personal_info->travlling_two_to_date)  : '' }}">
                                                   <label for="username" class="focus-label" style="margin-left:0px !important;"> Date</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row available-box" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52;">
                                         
                                            
                                            <select name="travlling_three_country_id" id=""
                                            class="form-control available-country selectdropdownforcountry floating">
                                            <option value="0" selected>&nbsp;</option>
                                        @foreach(getCountries() as $country)
                                            <option
                                                value="{{ $country->id }}" {{ $influencer_personal_info &&  $influencer_personal_info->travlling_three_country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                           <label for="username" class=" focus-label">Traveling Country &nbsp;&nbsp;3</label>
                                        </div>
                                    </div>


                                
                                  
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52;">
                                        
                                            <select name="travlling_three_city_id" id="" class="form-control selectdropdown  floating  city_id">

                                             

                                                @if(isset($influencer_personal_info->travlling_three_country_id))
                                                @foreach(\App\Models\City::where('country_id', $influencer_personal_info->travlling_three_country_id)->get() as $city)
                                                    <option value="{{ $city->id }}" {{ $influencer_personal_info->travlling_three_city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                @endforeach
                                            @else
                                                <option value="" hidden disabled>Select City</option>
                                            @endif
                                            </select>
                                                <label for="username" class="focus-label" >Traveling City</label>

                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                           
                                            <input type="text" class="form-control datepicker floating"
                                                   name="travlling_three_from_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                   placeholder="Date"
                                                   value="{{ $influencer_personal_info ? formatDateToread($influencer_personal_info->travlling_three_from_date)  : '' }}">
                                                   <label for="username" class="focus-label" style="margin-left:0px !important;">Date</label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-focus">
                                            
                                            <input type="text" class="form-control floating datepicker "
                                                   name="travlling_three_to_date"
                                                   {{--                                               onfocus="(this.type='date')"--}}
                                                   {{--                                               onblur="(this.type='text')"--}}
                                                placeholder="Date"
                                                   value="{{ $influencer_personal_info ? formatDateToread($influencer_personal_info->travlling_three_from_date)  : '' }}">
                                                   {{-- <label for="username" class="focus-label" >Date11</label> --}}
                                                   <label for="username" class="focus-label" style="margin-left:0px !important;">Date </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row" style="">
                                    <div class="col-md-4">
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52px;">
                                            
                                            <select name="willing_to_traval" id="" class="form-control mySelect floating">
                                                {{-- <option value="">Willing To Traval</option> --}}
                                                <option value="" selected hidden  disabled></option>
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
                                    <div class="col-md-4">
                                       
                                        <div class="form-group form-focus dropdowndecoration" style="height: 52px;">
                                          
                                            <select name="is_collaboration" id="" class="form-control mySelect floating">
                                                {{-- <option value="">--Collaboration--</option> --}}
                                                <option value="" selected hidden  disabled></option>
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
                                        <div class="form-group form-focus dropdowndecoration focus-label" style="height: 52px;">
                                           
                                            <select name="price_negotion" id=""
                                                    class="form-control floating mySelect ">
                                                {{-- <option value="">Price Negotiable</option> --}}
                                                <option value="" selected hidden  disabled></option>
                                                    <option value="1" {{ $influencer_personal_info &&  $influencer_personal_info->price_negotiable == 1 ? 'selected' : '' }}>Yes</option>
                                                     
                                                    <option value="0" {{ $influencer_personal_info &&  $influencer_personal_info->price_negotiable == 0 ? 'selected' : '' }}>No</option>  
                                                
                                            </select>
                                        <label for="username" class=" focus-label">Price Negotiable</label>
                                        </div>
                                    </div>

                                    @php
                                    // dd($influencer_professional_detail);
                                    @endphp
                                    <div class="col-md-4">
                                        <div class="form-group form-focus">
                                            
                                            <input type="price" id="price" class="form-control floating" name="price"
                                                   placeholder=""
                                                   value="{{ isset($influencer_professional_detail->price) ? rtrim(rtrim(number_format($influencer_professional_detail->price, 2, '.', ''), '0'), '.') : '' }}">

                                                   <label for="username" class="focus-label" style="margin-left:0px !important;">Price $</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group form-focus">

                                            <textarea class="form-control floating" style="height:52px;" id="Priceinclude" name="price_include"
                                                   placeholder="Reels 2, Stories 7, Vlogs 5, Post 1"
                                                   value=""> {{ $influencer_personal_info->price_include ?? ''  }} </textarea>
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
                                   
                                    
                                </div>
                                <div class="row available-box" style="">
                                   
                                   
                               
                                   

                                </div>
                                <div class="row" >
                                    
                                    <div class="col-md-12" >
                                        <div class="form-group form-focus">
                                        
                                                <textarea class="form-control floating" style="height:120px;" name="bio">{{ $influencer_personal_info ? $influencer_personal_info->bio : '' }}</textarea>
                                                <label class="inner_label focus-label"  style="margin-left: 0px;">Bio</label>
                                    
                                        
                                        
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
                                                         alt="insta" width="40" style="margin-left: 24px;" class="shaking">
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="instagram_url"
                                                           placeholder="URwL" value="{{ $instagramProfiles ? $instagramProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Instagram</label>
                                                        </div>
                                                    </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id="" style=" width: 90%;"
                                                           class="form-control floating inputbg"
                                                           name="instagram_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $instagramProfiles ? $instagramProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 2px;"> Followers</label>
                                                        </div>
                                                </div>
                                              
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/fb.png') }}" alt="insta"
                                                         width="40" style="margin-left: 24px;" class="shaking">
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg"  style=" width: 92% margin-left: 7px;" name="facebook_url"
                                                           placeholder="URL" value="{{ $facebookProfiles ? $facebookProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Facebook</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 90%;"
                                                           class="form-control floating"
                                                           name="facebook_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $facebookProfiles ? $facebookProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 2px;"> Followers</label>
                                                        </div>
                                                </div>
                                         
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center " style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/tiktok.png') }}"
                                                         alt="insta" width="40" style="margin-left:24px;" class="shaking">
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="tiktok_url"
                                                           placeholder="URL" value="{{ $tiktokProfiles ? $tiktokProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 0px;">TikTok</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 90%;"
                                                           class="form-control floating inputbg"
                                                           name="tiktok_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $tiktokProfiles ? $tiktokProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 2px;"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img
                                                        src="{{ asset('assets/img/social-icon/youtube.png') }}"
                                                        alt="insta" width="40" style="margin-left:24px;" class="shaking">
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="youtube_url"
                                                           placeholder="URL" value="{{ $youtubeProfiles ? $youtubeProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Youtube</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id="" style="width:90%;"
                                                           class="form-control  floating inputbg"
                                                           name="youtube_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $youtubeProfiles ? $youtubeProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 2px;"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img
                                                        src="{{ asset('assets/img/social-icon/twitter.png') }}"
                                                        alt="insta" width="40" style="margin-left:24px;" class="shaking">
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating inputbg" name="twitter_url"
                                                           placeholder="URL" value="{{ $twitterProfiles ? $twitterProfiles->url : '' }}">
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Twitter</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 90%;"
                                                           class="form-control floating inputbg"
                                                           name="twitter_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $twitterProfiles ? $twitterProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 2px;"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/snapchat.png') }}"
                                                         alt="insta"
                                                         width="44px" height="44px" style="margin-left:20px;" class="shaking">
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
                                                           <label for="username" class="inner_label focus-label " style="margin-left: 0px;">Snapchat</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id="" style=" width: 90%;"
                                                           class="form-control floating inputbg"
                                                           name="snapchat_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $snapchatProfiles ? $snapchatProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 2px;"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/pinterest.png') }}"
                                                         alt="insta"
                                                         width="40" style="margin-left:21px;" class="shaking">
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
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Pinterest</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 90% ;"
                                                           class="form-control floating inputbg"
                                                           name="pinterest_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $pinterestProfiles ? $pinterestProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 2px;"> Followers</label>
                                                        </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 text-center" style="padding-top:5px;">
                                                    <img src="{{ asset('assets/img/social-icon/web.png') }}" alt="insta"
                                                         width="40" style="margin-left:21px;" class="shaking">
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
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Website</label>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-focus">
                                                    <input type="text" id=""  style=" width: 90%;"
                                                           class="form-control floating inputbg"
                                                           name="web_followers"
                                                           placeholder="10K,  1M,  2,5M "
                                                           value="{{ $webProfiles ? $webProfiles->followers : '' }}"/>
                                                           <label for="username" class="inner_label focus-label" style="margin-left: 2px;"> Followers</label>
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
                                   
                                    <div class="col-md-12">
                                        <label for="" style="color:#0504aa;font-weight:bold;"> Instagram URL</label>
                                        <input type="text"
                                               placeholder=""
                                               class="form-control inputbg" name=""
                                               style="border:0px solid #1A237E;!important"/>
                                    </div>
                                </div>
                                <div style="left: 41%; position: absolute;">
                                    <label for="fileInput" class="fileInput0" style=" font-weight:bold;"> 
                                        Or Upload & Drop Images Here
                                   </label>
                                </div>
                                
                                <!-- Hidden file input -->
                                <input type="file" id="fileInput0"  style="display: none;" accept="image/*" multiple>
                                
                                <!-- Dropzone Container -->
                                <div class="dropzone-container dz-message" id="my-Dropzone" style="border:white; color: blue; font-weight: bold;">
                                  
                                 
                                    <!-- Dropzone message or content -->
                                </div>
                                
                                       
                                    {{-- </div> --}}
                              {{-- </div> --}}
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
                                        <i class="fa fa-check" style="font-size:60px;color:goldenrod;border:2px solid #fff;"></i>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script> --}}
<!-- Include jQuery -->

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- Include jQuery UI JS -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


  <script>


function validateInput(input) {
    // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
    input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
}
$(document).on('change', '.floating', function () {

if ($('.floating').length > 0) {

$('.floating').on('focus blur', function (e) {
$(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
}).trigger('blur');
} 

});
            $(document).ready(function() {
                

               

            $('.datepicker').datepicker({
                dateFormat: 'dd-M-yy',
                changeMonth: true,
                changeYear: true,
              yearRange: "2025:2030"


            });
            $('#price').on('input', function() {
                let value = $(this).val();
                this.value = this.value.replace(/[^0-9]/g, '');
                if (value.includes('.')) {
                    $(this).val(Math.floor(value));
                }
            });
        });

      


        $(document).ready(function () {
          
       
        
    // alert(api_url);
        
  
            Dropzone.autoDiscover = false;
        const myDropzone = new Dropzone("#my-Dropzone", {
            url: api_url + 'auth/upload_profile_web',
            maxFilesize: 2, // MB
            method: 'post',
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: false,
            maxFiles: 5,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Authorization': `Bearer ${token}`
            },
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                console.log(response);
            },
            init: function() {
                this.on("addedfile", function(file) {
                    // Create the remove button
                    var removeButton = Dropzone.createElement("<button class='dz-remove'>×</button>");
                    
                    // Capture the Dropzone instance as closure.
                    var _this = this;

                    // Listen to the click event
                    removeButton.addEventListener("click", function(e) {
                        // Make sure the button click doesn't submit the form
                        e.preventDefault();
                        e.stopPropagation();

                        // Remove the file preview.
                        _this.removeFile(file);

                        // Optionally, you can also remove the file from your server here using an AJAX request.
                    });

                    // Add the button to the file preview element.
                    file.previewElement.appendChild(removeButton);
                });
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

        
     
//         $(document).ready(function() {
//             var selectedCountryId = $('.available-country').val();
  
    
//     if (selectedCountryId) {
//         $('.available-country').trigger('change');
//     }
// });



        $('.available-country').on('change', function () {
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


                        
                      
                        var cityDropdown = $(thisElem).parents('.available-box').find(".city_id").empty();

// Always clear the dropdown and add an empty option
                       cityDropdown.empty().append('<option value="" disabled hidden selected> &nbsp;&nbsp;</option>');

if (response.data.length > 0) {
    var states = response.data;

    // Append other options if states data is available
    if (states) {
        $.each(states, function (index, value) {
            cityDropdown.append('<option value="' + value.id + '">' + value.name + '</option>');
        });
    }
            } else {
            // If no data, the dropdown will only have the empty "Select City" option
             cityDropdown.empty();
            }
                    }
                });
            }
        });



        $(document).ready(function() {
            show_img();
            show_img('#image0', '#logo0');
            var maxSelections = 3;
            $('.category_id').on('select2:select', function (e) {
                // Check if the maximum number of selections is reached
                if ($('.category_id').val().length > maxSelections) {
                    // Remove the last selected option
                    $('.category_id').find('option:selected').last().prop('selected', false);
                    // Trigger the change event to update Select2
                    $('.category_id').trigger('change');
                }
            });
            // $('.feature-select2').select2();
             $('.selectdropdown').select2({
                //    placeholder: " ",
                  allowClear: true
             });
             $('.selectdropdownforcountry').select2({
                //    placeholder: "",
                  allowClear: true
             });
             

            
             $('.mySelect').select2({
    minimumResultsForSearch: Infinity // Disables the search box
  });
            $('#category_ids').select2({
                //   placeholder: "Select Spoken",
                allowClear: true
            }).on('select2:select', function (e) {
                var maxSelection = 3;
                var selectedOptions = $(this).find('option:selected');
                if (selectedOptions.length >= maxSelection) {
                    // Disable the remaining options
                    $(this).find('option:not(:selected)').prop('disabled', true);
                } else {
                    // Enable all options
                    $(this).find('option').prop('disabled', false);
                }
            }).on('select2:unselect', function (e) {
                // Enable all options
                $(this).find('option').prop('disabled', false);
            });
            $('#spoken_language_ids').select2({
                // placeholder: "Select Spoken Languages",
                allowClear: true,
                 width: '100%'
            }).on('select2:select', function (e) {
                var maxSelection = 3;
                var selectedOptions = $(this).find('option:selected');
                if (selectedOptions.length >= maxSelection) {
                    // Disable the remaining options
                    $(this).find('option:not(:selected)').prop('disabled', true);
                } else {
                    // Enable all options
                    $(this).find('option').prop('disabled', false);
                }
            }).on('select2:unselect', function (e) {
                // Enable all options
                $(this).find('option').prop('disabled', false);
            });
            $('#arts').select2({
                // placeholder: "Select Spoken Languages",
                allowClear: true
            }).on('select2:select', function (e) {
                var maxSelection = 3;
                var selectedOptions = $(this).find('option:selected');
                if (selectedOptions.length >= maxSelection) {
                    // Disable the remaining options
                    $(this).find('option:not(:selected)').prop('disabled', true);
                } else {
                    // Enable all options
                    $(this).find('option').prop('disabled', false);
                }
            }).on('select2:unselect', function (e) {
                // Enable all options
                $(this).find('option').prop('disabled', false);
            });
            
            
        });
    </script>
@endsection
