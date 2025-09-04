<header class="header"  style="border-bottom:0px solid #eee;">

    <style>
        /* .VIpgJd-ZVi9od-ORHb{
            display: none !important;} */
            ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {

    border-color:blue  transparent transparent transparent !important; 
}
.select2-container--default .select2-selection--single .select2-selection__arrow b:hover {

border-color:goldenrod transparent transparent transparent !important; 
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
.select2-search__field{
    border-radius: 0.30rem !important;
    padding-left: 10px !important;
    border-color: #997045 !important;
}
.select2-search__field:hover{
    border-color: blue !important;
}

           
 .select2-container--default .select2-results > .select2-results__options {
    min-height: 120px; /* Set minimum height */

    border-radius: 0.4rem;
          }
          
          .select2-selection .select2-selection--single{
            margin-left: -12px !important;
          }
          .select2-container--default.select2-container--open.select2-container--below .select2-selection--single, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple{
            margin-left: -10px !important;
          }
         
          .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable{
            color: blue !important;
          }
            .select2-container--default .select2-results>.select2-results__options{
                overflow-x: hidden !important;
                border-radius: 0.3rem !important;
                min-height: 120px !important;
               
                background-color: #ffffff !important;
                color: rgb(0, 0, 0) !important;
            }

            .select2-container--open .select2-dropdown--below{
                background-color: #ffffff !important;
                border-radius:0.4rem !important; 
                
            }
            .select2-container--default .select2-selection--single{
                border: 0px solid !important ;
            }
            .select2-dropdown {
                border: 0px solid !important;
            }
            .register-btn, .log-btn{
                color: blue;
               

            }
            
            .select2-dropdown .select2-dropdown--below{
                width: 144px !important;
                border-radius: 0.4rem !important;
            }
            .register-btn:hover, .log-btn:hover{
                color:goldenrod !important;

            }
        .colorchange{
            color: blue;
        }
        .colorchange:hover{
            color: goldenrod !important; 
        }

        #select2-country_dropdown-container{
            margin-left: -9px !important;
        }
            .select2-container--default .select2-selection--single .select2-selection__rendered{
                color: blue !important;
                width: 200px !important;
              
            }
            .select2-container--default .select2-selection--single .select2-selection__arrow {
                right: 12px !important;
            }
    </style>
   <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
 
    <script type="text/javascript">
        function translateLanguage() {
            var dropdown = document.getElementById("country_dropdown");
            // alert(dropdown);
         
            var selectedLanguage = dropdown.options[dropdown.selectedIndex].value;
            //  alert(selectedLanguage);
            

            // var selectedLanguageCode = languageMapping[selectedLanguage];

            var selectedLanguageCode =selectedLanguage;

            if (selectedLanguageCode) {
                var googleTranslateCombo = document.querySelector('.goog-te-combo');
                if (googleTranslateCombo) {
                    googleTranslateCombo.value = selectedLanguageCode;
                    googleTranslateCombo.dispatchEvent(new Event('change'));
                }
                else{
                    // alert('dd');
                    // translateLanguage();
                }
            }

        }
    </script>  
<nav class="navbar navbar-expand-lg header-nav" >
    <div class="navbar-header" style="display: flex;">
        <a id="mobile_btn" href="javascript:void(0);">

        </a>
        <a href="{{ env('BASE_URL') }}" class="navbar-brand logo" style="margin-left: 41px;">
            <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid shaking" alt="Logo">
        </a>
        <div class="mobile-country desktop-menu-right" style="margin-top: 15px;">
        
            <select class="form-control country_dropdown1 " name="country_dropdown"  style="width:157px;" id="country_dropdown" onchange="translateLanguage()">>
                {{-- <option value="null" selected style="color: blue;">Language</option --}}
                @foreach(getlanguge() as $language)
                    <option value="{{ $language->prefix }}" data-flag-url="{{ $language->flag_image_url }}"  {{ $language->id == 131 ? 'selected' : '' }}  >
                    {{ $language->name }}     
                    </option>
                @endforeach
            </select>
           
    </div>
    </div>


    {{-- <div class="country" style="border:0px solid green;position:relative;right:544px;"> --}}
       
        </span>
{{-- </div> --}}
<div id="google_translate_element" style="display: none;"></div>


    <div class="main-menu-wrapper">
        <div class="menu-header">
            <a href="{{ env('BASE_URL') }}" class="menu-logo">
                <img src="{{ asset('assets/img/logo/InfluencersPro-01.png') }}" class="img-fluid" alt="Logo">
            </a>
            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                <i class="fas fa-times"></i>
            </a>
        </div>
        @php
            $influencers = getDropdownMenu('influencer');
            $brands = getDropdownMenu('vendor');
        @endphp
        <ul class="main-nav nav">
            @if(session()->has('User') && session()->get('role') == 'vendor')
               <li><a href="{{ env('BASE_URL') . '/vendor/dashboard' }}" class="colorchange {{ request()->is('vendor/dashboard') ? 'active' : '' }}" style="margin-right: 76px;">Dashboard</a></li>
               
            @endif

            @if(session()->get('role') == 'influencer')
                    <li><a href="{{ env('BASE_URL') . '/influencer/dashboard' }}" class="colorchange"  style="margin-right: 76px;">Dashboard</a></li>
                 
                </li>
            @endif
        <!-- <li><a href="about-us.php">About us</a></li>
            <li><a href="contact-us.php">Contact us</a></li> -->
            @if(session()->missing('User'))
                <li class="has-submenu">
                    <a href="#" class="register-btn">Register<i
                            class="fas fa-chevron-down register-btn"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu"></li>
                        <li><a href="{{ env('BASE_URL') . '/register?role=influencer' }}">As  Influencer</a></li>
                        <li><a href="{{ env('BASE_URL') . '/register?role=brand' }}">As  Brand</a></li>
                    </ul>
                </li>
                <li style="margin-right: 14px;margin-left: -10px;">
                    <a href="{{ url('login') }}" class="log-btn">
                        {{-- <img src="{{ asset('assets/img/icon/lock-icon.svg') }}" class="me-1" alt="icon">  --}}
                        Login
                    </a>
                </li>

            @elseif(session()->get('role') != 'influencer' &&  session()->get('role') != 'vendor')
                <li>
                    <a href="javascript:void(0)" class="logout-btn" onclick="logout(this)">
                        <img src="{{ asset('assets/img/icon/lock-icon.svg') }}" class="me-1" alt="icon"> Logout
                    </a>
                </li>
            @endif

        </ul>
    </div>
</nav>
</header>
<!-- Select2 CSS -->

<script>
    $(document).ready(function() {
        // Initialize Select2
        $(document).ready(function() {
    console.log('Initializing Select2');
    
    $('#country_dropdown').select2({
        width: 'resolve',
        templateResult: function(option) {
            console.log('Option:', option);
            return formatOption(option);
        },
        templateSelection: formatOption,
        escapeMarkup: function (markup) { return markup; }
    });

    function formatOption(option) {
        if (!option.id) { return option.text; }

        var flagUrl = $(option.element).data('flag-url');
        console.log('Flag URL:', flagUrl);

        if (flagUrl) {
        return $('<span style="font-size:14px;font-weight:bold;  white-space: nowrap;  padding:8px;"><img src="' + flagUrl + '" class="img-flag" style="width: 20px;margin-bottom: 6px; height:14px; margin-right: 5px;" /> ' + option.text + '</span>');
    } else {
        // return $('<span style="font-size:18px;margin-left:25px;font-weight:600; "><img src="'   '" class="img-flag" style="width: 20px; height:14px; margin-right: 3px;" /> ' + option.text + '</span>');
    
        return $('<span style="font-size:14px;font-weight:bold;    white-space: nowrap; padding:8px;">' +
    // '<img src="{{ asset("/assets/img/social-icon/lang.png") }}" class="img-flag" style="width: 18px; height:18px;  margin-right: 5px;margin-bottom: 5px;" /> '  +
    option.text + 
    '</span>');}
        // return $('<span style="font-size:18px;"><img src="' + flagUrl + '" class="img-flag" style="width: 30px; height: 20px; margin-right: 0px;" /> ' + option.text + '</span>');
    }
});
});
</script>

<!-- </header> -->
