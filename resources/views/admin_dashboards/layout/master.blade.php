<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include("admin_dashboards.layout.header")
<!--end::Head-->
<!--begin::Body-->
<body>
{{--@dd(session()->get('user'))--}}
    <div class="main-wrapper">
        @include('admin_dashboards.layout.sidebar')
        <div class="page-wrapper">
            @include("admin_dashboards.layout.topbar")
            @yield('content')
        </div>
    </div>
    
    @if(session()->get('user'))
    
    @else
    {{-- @include('admin_dashboards.layout.footer') --}}
    @endif
    
    <script src="{{ asset('asset-admin/vendors/core/core.js')}}"></script>
    <script src="{{ asset('asset-admin/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('asset-admin/vendors/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('asset-admin/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('asset-admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('asset-admin/vendors/apexcharts/apexcharts.min.js')}}"></script>
   
    <script src="{{ asset('asset-admin/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('asset-admin/js/template.js')}}"></script>
    

    <script src="{{ asset('asset-admin/js/dashboard-light.js')}}"></script>
    {{-- <script src="{{ asset('assets/js/datepicker.js')}}"></script> --}}
    <!-- End custom js for this page -->

    <!-- Custom js for this page -->
    <script src="{{ asset('asset-admin/js/data-table.js')}}"></script>
    <!-- End custom js for this page -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script src="{{ asset('asset-admin/js/dropify.js')}}"></script>
    <script src="{{ asset('asset-admin/vendors/dropify/dist/dropify.min.js')}}"></script>
    {{--datatable link start--}}

    


    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('asset-admin/js/custom.js')}}"></script>
    <script src="{{ asset('asset-admin/js/authenticate.js')}}"></script>


    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
    .dataTables_wrapper .dataTables_filter input{
        padding: 7px 0px 6px 14px !important; 
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
  </style>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>

function formatCountry(country) {
    if (!country.id) {
        return country.text;
    }

    var flagUrl = $(country.element).data('flag-url'); // Access the flag-url data attribute

    // If no flag URL is available, fallback to default image or nothing
    if (!flagUrl) {
        var $country = $( 
        '<img src="' + flagUrl + '" class="img-flag" style="width:20px; height:13px;margin-top:-5px; display:none; />' + 
        '<span style="font-size:14px; margin-left: 2px;">' + country.text + '</span>'
    );// Optional default image
    }else{
        var $country = $( 
        '<img src="' + flagUrl + '" class="img-flag" style="width:20px;height:13px;margin-top:-5px;" />' + 
        '<span style="font-size:14px; margin-left: 7px;">' + country.text + '</span>'
    );
    }

   

    return $country;
}

       $(document).ready(function () {

       
        $('span.select2-selection__rendered').each(function() {
        var imgFlag = $(this).find('img.img-flag');
        
        // If the img src is 'undefined' or empty string, hide it
        if (imgFlag.attr('src') === 'undefined' || imgFlag.attr('src') === '' || imgFlag.attr('src') === undefined) {
            imgFlag.hide();  // Using hide() method for better handling of display
        }
    });


         $(".currency_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
        });
        $(".city_dropdown").select2({
            // templateSelection: formatCountry,
            // templateResult: formatCountry,
        });

        $(".datepicker").datepicker({
            'dateFormat':"dd-M-yy",
            changeMonth: true,
             changeYear: true,
             yearRange: "2024:+0",
        });
        $(".datepicker").change(function() {
    var input = $(this); // Store reference to `this`
    setTimeout(function() {
        input.parents('.form-focus').toggleClass('focused', input.val().length > 0);
    }, 10);
});

        $(".datepicker1").datepicker({
            'dateFormat':"dd-M-yy",
            changeMonth: true,
             changeYear: true,
             yearRange: "1950:+0",
        });
        $(".datepicker1").change(function() {
    var input = $(this); // Store reference to `this`
    setTimeout(function() {
        input.parents('.form-focus').toggleClass('focused', input.val().length > 0);
    }, 10);
});
       
         $(".currency_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
        });
        $(".country_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
            // minimumResultsForSearch: -1
        });
        $(".chat").select2({
   
    minimumResultsForSearch: -1
});
        var varyingModal = document.getElementById('varyingModal')
        // alert(varyingModal);
        // if(varyingModal){
        varyingModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = varyingModal.querySelector('.modal-title')
            var modalBodyInput = varyingModal.querySelector('.modal-body input')

            modalTitle.textContent = 'New message to ' + recipient
            modalBodyInput.value = recipient
        });

      });
    </script>
      @yield('page_scripts')

</body>
</html>
