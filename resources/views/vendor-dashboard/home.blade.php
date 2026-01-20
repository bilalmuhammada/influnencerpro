@extends('layout.master')

@section('content')

    <style>
        
        .social-wrapper:hover .followers-count {
    color:goldenrod; /* Change to your desired hover color */
}
        .shaking {
    display: inline-block;
    transition: transform 0.2s ease-in-out;
   }
    .social-wrapper:hover .shaking, 
    .d-flex:hover .shaking {
        animation: shake 2s linear infinite;
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
  color: #997045;
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
            background-color: rgba(5, 4, 170, 0.04) !important;
            border: none !important;
            border-radius: 20px !important;
            padding: 0 0px !important;
            margin: 0px 3px 0 0 !important;
            display: flex !important;
            align-items: center !important;
            color: #0504aa !important;
            font-weight: 500 !important;
            font-size: 11px !important;
            transition: all 0.2s ease !important;
           
            flex-shrink: 0 !important;
            position: relative !important;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice:hover {
            background-color: rgba(5, 4, 170, 0.08) !important;
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
    color: blue !important;
    padding-left: 0px !important;
}

  .card.search-filter .select2-container .select2-selection__rendered {
    color: #1e293b !important;
    padding-left: 0px !important;
    line-height: 32px !important;
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
.select2-results__message{
 text-align: center !important;
}
#select2-city_id-results{
    /* display: none !important; */
    min-height: 40px !important;
}

#select2-nationality_id-results{
padding-left: 3px !important;
} 
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    border: none !important;
    background: transparent !important;
    color: #0504aa !important;
    margin-right: 0px !important;
    font-size: 14px !important;
    font-weight: bold !important;
    opacity: 0.4 !important;
    transition: all 0.2s ease !important;
    position: relative !important;
    top: 0px !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    opacity: 1 !important;
    color: #ff4d4f !important;
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
    border-color: blue !important; 
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}
.lobibox-notify.notify-mini .lobibox-notify-body {
    margin: 7px 1px 0px 0px !important;
}
.select2-selection__choice__display {
    padding-left: 0 !important;
    font-size: 11px !important;
    color: #0504aa !important;
}
.select2-selection--multiple{
    overflow-y: overlay !important;
}
.select2-selection__clear{
    display:none; 
}

/* Refined Premium Filter Design */
.search-filter {
    border-radius: 12px !important;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08) !important;
    border: 1px solid rgba(0, 0, 0, 0.05) !important;
    background: #f2e49c !important;
    overflow: hidden;
}

.search-filter .card-header {
    background: #f2e49c !important;
    padding: 4px 20px !important;
    border-bottom: 1px solid #f0f0f0 !important;
}

.search-filter .card-title {
    color: #1a1a1a;
    font-weight: 700 !important;
    font-size: 15px !important;
    letter-spacing: 0.5px;
}

.search-filter .card-body {
    padding: 2px 20px !important;
}



.filter-widget:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.font_label {
    display: block;
    font-weight: 700 !important;
    font-size: 11px !important;
    color: blue !important;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    margin-bottom: 4px !important;
    padding-top: 0 !important;
}

ul, li {
    margin-bottom: 0px !important;
}

/* Hide number input spin buttons */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type=number] {
    -moz-appearance: textfield;
}


.card.search-filter .form-control:focus,
.card.search-filter .select2-container--default.select2-container--focus .select2-selection--multiple,
.card.search-filter .select2-container--default.select2-container--open .select2-selection--single {
    border-color: blue !important;
    /* box-shadow: 0 0 0 3px rgba(5, 4, 170, 0.1) !important; */
    background-color: #fff !important;
}

.card.search-filter .form-control:hover,
.card.search-filter .select2-container--default .select2-selection--single:hover,
.card.search-filter .select2-container--default .select2-selection--multiple:hover {
    border-color: blue !important;
}

/* Custom Checkbox */
.filter-widget input[type="checkbox"] {
    width: 18px !important;
    height: 18px !important;
    cursor: pointer;
    border-radius: 5px;
    border: 1.5px solid #cbd5e1 !important;
    appearance: none;
    -webkit-appearance: none;
    background-color: #fff;
    position: relative;
    vertical-align: middle;
    transition: all 0.2s ease;
    margin: 0 !important;
}

.filter-widget input[type="checkbox"]:checked {
    background-color: #0504aa;
    border-color: #0504aa;
}

.filter-widget input[type="checkbox"]:checked::after {
    content: "✓";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 12px;
    font-weight: bold;
}

.card.search-filter .form-control,
.card.search-filter .select2-container--default .select2-selection--single,
.card.search-filter .select2-container--default .select2-selection--multiple {
    border: 1.5px solid #997045 !important;
    border-radius: 4px !important;
    min-height: 34px !important;
    height: auto !important;
    margin-left:0px;
    background-color: #fcfdfe !important;
    padding: 0 12px !important;
    font-size: 14px !important;
    color: #1e293b !important;
    display: flex !important;
    align-items: center !important;
    overflow: hidden !important;
}

.card.search-filter .select2-container--default .select2-selection--single {
    height: 34px !important;
}

.card.search-filter .select2-container .select2-selection__rendered {
    color: #1e293b !important;
    padding-left: 0px !important;
    line-height: 34px !important;
    display: flex !important;
    align-items: center !important;
    width: 100% !important;
}

#spoken_language_ids + .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #0504aa !important;
    font-weight: 500 !important;
}

.card.search-filter .select2-container--default .select2-selection--multiple .select2-selection__rendered {
    display: flex !important;
    flex-wrap: nowrap !important;
    gap: 0px !important;
    padding: 0 4px !important;
    line-height: normal !important;
   
    align-items: center !important;
    width: 100% !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scrollbar-width: none !important;
}

.card.search-filter .select2-container--default .select2-selection--multiple .select2-selection__rendered::-webkit-scrollbar {
    display: none !important;
}

.select2-container--default.select2-container--focus .select2-selection--multiple,
.select2-container--default.select2-container--open .select2-selection--single {
    border-color: blue !important;
    /* box-shadow: 0 0 0 3px rgba(5, 4, 170, 0.1) !important; */
}

/* Clear All Button */
.clearall {
    font-weight: 600 !important;
    font-size: 12px !important;
    color: #0504aa !important;
    text-decoration: none;
    padding: 0px 12px;
    border-radius: 6px;
    background: rgba(5, 4, 170, 0.05);
    transition: all 0.2s ease;
}

.clearall:hover {
    background: rgba(5, 4, 170, 0.1);
    color: #04038a !important;
}
.sidebar-submit:hover {
    background: blue !important;
    border-color: blue !important;
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
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
                    <form action="{{ env('BASE_URL') }}vendor/influencers-filter" id="fiter-infl">
                        <input type="hidden" name="source" value="web">
                        <div class="card search-filter">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">FILTERS</h4>
                                <a href="{{ env('BASE_URL') }}/vendor/dashboard" class="clearall">Clear All</a>
                            </div>
                            <div class="card-body">
                                                              
                                <div class="filter-widget">
                                    <label class="font_label">Search</label>
                                    <input type="text" class="form-control mb-1" placeholder="Search by name..." name="search">
                                    
                                    <label class="font_label">Country</label>
                                    @php $countries = getCountries()->sortBy('name'); @endphp
                                    <select class="form-control select2 mb-3" id="nationality_id" name="country_id">
                                        <option value="" disabled hidden selected>Select Country</option>
                                        @forelse($countries as $country)
                                            <option value="{{ $country->id }}"
                                                @if(request()->country_id == $country->id) selected @endif>{{ $country->name }}</option>
                                        @empty
                                            <option value="">No Data</option>
                                        @endforelse
                                    </select>

                                    <label class="font_label">City</label>
                                    <select name="city_id[]" class="form-control selectMul" multiple id="city_id">
                                    </select>
                                </div>

                                <div class="filter-widget">
                                    <label class="font_label">Category</label>
                                    @php $categories = getCategories()->sortBy('name');  @endphp
                                    <select class="form-control selectMul" name="category_id[]" multiple>
                                        @forelse($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if(request()->category_id && in_array($category->id, request()->category_id)) selected @endif>{{ $category->name }}</option>
                                        @empty
                                            <option value="">No Data</option>
                                        @endforelse
                                    </select>
                                </div>

                                <div class="filter-widget">
                                    <label class="font_label">Platforms</label>
                                    <div class="row g-2">
                                        @php
                                            $social_platforms = [
                                                ['name' => 'instagram', 'label' => 'Instagram', 'icon' => 'insta.png'],
                                                ['name' => 'facebook', 'label' => 'Facebook', 'icon' => 'fb.png'],
                                                ['name' => 'youtube', 'label' => 'YouTube', 'icon' => 'youtube.svg'],
                                                ['name' => 'tiktok', 'label' => 'TikTok', 'icon' => 'tiktok.png'],
                                                ['name' => 'twitter', 'label' => 'Twitter', 'icon' => 'twitter.png'],
                                                ['name' => 'pinterest', 'label' => 'Pinterest', 'icon' => 'pinterest.png'],
                                                ['name' => 'snapchat', 'label' => 'Snapchat', 'icon' => 'snapchat.png'],
                                                ['name' => 'website', 'label' => 'Website', 'icon' => 'web.png'],
                                            ];
                                        @endphp
                                        @foreach($social_platforms as $platform)
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <label class="mb-0 d-flex align-items-center cursor-pointer" for="check_{{ $platform['name'] }}" style="font-size: 13px;">
                                                        <img src="{{ asset('assets/img/social-icon/' . $platform['icon']) }}" alt="{{ $platform['label'] }}" width="18" class="me-2 shaking">
                                                        {{ $platform['label'] }}
                                                    </label>
                                                    <input type="checkbox" name="{{ $platform['name'] }}" id="check_{{ $platform['name'] }}" {{ request()->{$platform['name']} ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <div class="filter-widget">
                                    <label class="font_label">Followers</label>
                                    <div class="row g-2">
                                        @php
                                            $follower_ranges = [
                                                ['name' => 'nano', 'label' => '1 - 250K'],
                                                ['name' => 'micro', 'label' => '250K - 500K'],
                                                ['name' => 'small', 'label' => '500K - 1M'],
                                                ['name' => 'medium', 'label' => '1M - 5M'],
                                                ['name' => 'mega', 'label' => '5M - 50M'],
                                                ['name' => 'mega_plus', 'label' => '50M+'],
                                            ];
                                        @endphp
                                        @foreach($follower_ranges as $range)
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <label class="mb-0 cursor-pointer" for="check_{{ $range['name'] }}" style="font-size: 13px;">
                                                        {{ $range['label'] }}
                                                    </label>
                                                    <input type="checkbox" name="{{ $range['name'] }}" id="check_{{ $range['name'] }}" {{ request()->{$range['name']} ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="filter-widget">
                                    <label class="font_label">Language</label>
                                    @php $spoken_languages = getlanguge(); @endphp
                                    <select class="form-control selectMul" name="spoken_language_ids[]" multiple="multiple" id="spoken_language_sidebar">
                                        @forelse($spoken_languages as $language)
                                            <option value="{{ $language->id }}" data-flag-url="{{ asset($language->flag_image_url) }}"
                                                    @if(isset(request()->spoken_language_ids) && in_array($language->id, request()->spoken_language_ids)) selected @endif>{{ $language->name }}</option>
                                        @empty
                                            <option value="">No Result Found</option>
                                        @endforelse
                                    </select>
                                </div>

                                <div class="filter-widget">
                                  
                                    <label class="font_label mt-1">Ethnicity</label>
                                    @php $ethnicities = getEthnicity(); @endphp
                                    <select class="form-control selectMul mb-3" name="ethnicity_ids[]" multiple>
                                        @forelse($ethnicities as $ethnicity)
                                            <option value="{{ $ethnicity->id }}"
                                                    @if(isset(request()->ethnicity_ids) && in_array($ethnicity->id, request()->ethnicity_ids)) selected @endif>{{ $ethnicity->name }}</option>
                                        @empty
                                            <option value="">No Result Found</option>
                                        @endforelse
                                    </select>

                                    <label class="font_label mt-1">Nationality</label>
                                    @php $nationalities = getnationality(); @endphp
                                    <select class="form-control selectMul" name="country_id">
                                        <option value="" disabled hidden selected>Select Nationality</option>
                                        @forelse($nationalities as $country)
                                            <option value="{{ $country->id }}"
                                                    @if(request()->country_id == $country->id) selected @endif>{{ $country->name }}</option>
                                        @empty
                                            <option value="">No Result Found</option>
                                        @endforelse
                                    </select>
                                </div>

                                <div class="filter-widget">
                                    
                                    
                                    <div class="row g-2 mb-3">
                                        <div class="col-6">
                                            <label class="font_label" >Gender</label>
                                            <div class="d-flex flex-column gap-1 mt-1">
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <label class="mb-0 cursor-pointer" for="check_male" style="font-size: 13px;">Male</label>
                                                    <input type="checkbox" name="male" id="check_male" {{ request()->male ? 'checked' : '' }}>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <label class="mb-0 cursor-pointer" for="check_female" style="font-size: 13px;">Female</label>
                                                    <input type="checkbox" name="female" id="check_female" {{ request()->female ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="font_label">Age Range</label>
                                            <div class="d-flex gap-2">
                                                <input type="number" class="form-control form-control-sm" name="age1" placeholder="Min" value="{{ request()->age1 }}">
                                                <input type="number" class="form-control form-control-sm" name="age" placeholder="Max" value="{{ request()->age }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 mb-3">
                                        <div class="col-6">
                                            <label class="font_label">Hair Type</label>
                                            <select name="hair_types[]" class="form-control selectMul" multiple="multiple">
                                                <option value="afro">Afro</option>
                                                <option value="bald">Bald</option>
                                                <option value="curly">Curly</option>
                                                <option value="coily">Coily</option>
                                                <option value="long">Long</option>
                                                <option value="short">Short</option>
                                                <option value="straight">Straight</option>
                                                <option value="thick">Thick</option>
                                                <option value="wavy">Wavy</option>
                                            </select>
                                        </div>


                                <!-- <div class="filter-widget"> -->

                                        <div class="col-6">
                                            <label class="font_label">Hair Color</label>
                                            <select name="hair_color[]" class="form-control selectMul" multiple="multiple">
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
                                        </div>
                                    </div>


                                    <div class="row g-2 mb-2">
                                        <div class="col-6">
                                            <label class="font_label">Eye Color</label>
                                            <select name="eye_color[]" class="form-control selectMul" multiple="multiple">
                                                @php
                                                    $eye_colors = [
                                                        'azure' => 'Azure',
                                                        'agate' => 'Agate',
                                                        'amber' => 'Amber',
                                                        'blue' => 'Blue',
                                                        'black' => 'Black',
                                                        'brown' => 'Brown',
                                                        'grey' => 'Gray',
                                                        'green' => 'Green',
                                                        'hazel' => 'Hazel',
                                                        'mixed' => 'Mixed',
                                                        'nordic' => 'Nordic',
                                                        'red' => 'Red',
                                                        'serene' => 'Serene'
                                                    ];
                                                @endphp
                                                @foreach($eye_colors as $val => $label)
                                                    <option value="{{ $val }}" {{ in_array($val, request()->eye_color ?? []) ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="font_label">Cloth Size</label>
                                            <select name="clothsize[]" class="form-control selectMul" multiple="multiple">
                                                @php
                                                    $cloth_sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'];
                                                @endphp
                                                @foreach($cloth_sizes as $size)
                                                    <option value="{{ $size }}" {{ in_array($size, request()->clothsize ?? []) ? 'selected' : '' }}>{{ $size }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                 

                                
                                    <div class="row g-2 mb-2">
                                        <div class="col-4">
                                            <label class="font_label">Height (cm)</label>
                                            <input type="number" class="form-control form-control-sm" name="height" value="{{ request()->height }}">
                                        </div>
                                        <div class="col-4">
                                            <label class="font_label">Weight (kg)</label>
                                            <input type="number" class="form-control form-control-sm" name="width" value="{{ request()->width }}">
                                        </div>
                                        <div class="col-4">
                                            <label class="font_label">Shoes (EU)</label>
                                            <input type="number" class="form-control form-control-sm" name="shoes_size" value="{{ request()->shoes_size }}">
                                        </div>
                                    </div>

                                    <div class="row g-2 mb-2">
                                        <div class="col-6">
                                            <label class="font_label">Tattoo</label>
                                            <select name="tattoo" class="form-control selectMul">
                                                <option value="">Any</option>
                                                <option value="yes" {{ request()->tattoo == 'yes' ? 'selected' : '' }}>Yes</option>
                                                <option value="no" {{ request()->tattoo == 'no' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="font_label">Collaboration</label>
                                            <select name="is_collaboration" class="form-control selectMul">
                                                <option value="">Any</option>
                                                <option value="1" {{ request()->is_collaboration == '1' ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ request()->is_collaboration == '0' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label class="font_label">Art Skills</label>
                                        <select class="form-control selectMul" name="art[]" multiple>
                                            @foreach(getArts()->sortBy('name') as $art)
                                                <option value="{{ $art->key }}" {{ in_array($art->key, request()->art ?? []) ? 'selected' : '' }}>{{ $art->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row g-2 mb-1">
                                        <div class="col-6">
                                            <label class="font_label">Price Min ($)</label>
                                            <input type="number" name="min_price" class="form-control form-control-sm" placeholder="Min" value="{{ request()->min_price }}">
                                        </div>
                                        <div class="col-6">
                                            <label class="font_label">Price Max ($)</label>
                                            <input type="number" name="max_price" class="form-control form-control-sm" placeholder="Max" value="{{ request()->max_price }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-search text-center mt-2">
                                    <button type="submit" class="btn btn-primary py-1 sidebar-submit" style="width: 140px; border-radius: 4px; font-weight: 600; background: #997045; border: 1px solid #997045; box-shadow: 0 4px 10px rgba(5, 4, 170, 0.2); font-size: 13px;">Apply Filters</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="col-md-10 mx-auto text-center" style="margin-top: -15px;">
                        <div class="row mx-auto">
                            <div class="quick-filter mx-auto">
                                <ul class="main-nav nav mx-auto" style="text-align:center !important; gap: 20px;">
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
   
              
        

        

            
            
            
            $('.mySelect').select2({
                placeholder: " ",
                allowClear: true, 
                minimumResultsForSearch: Infinity
            });
            
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
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:&nbsp;{{$city->name ?? ''}}</h5>
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
