(function ($) {
    "use strict";
    $(document).ready(function () {
        if ($(window).width() > 767) {
            if ($('.theiaStickySidebar').length > 0) {
                $('.theiaStickySidebar').theiaStickySidebar({ additionalMarginTop: 70 });
            }
        }
    });

    $(document).on('click', '.searchbar .fa-search', function () {
        $(".togglesearch").toggle();
        $(".top-search").focus();
    });
    setTimeout(function () {
        $('#global-loader');
        setTimeout(function () {
            $("#global-loader").fadeOut("slow");
        }, 100);
    }, 500);
    if ($(window).width() <= 991) {
        var Sidemenu = function () {
            this.$menuItem = $('.main-nav a');
        };

        function init() {
            var $this = Sidemenu;
            $('.main-nav a').on('click', function (e) {
                if ($(this).parent().hasClass('has-submenu')) {
                    e.preventDefault();
                }
                if (!$(this).hasClass('submenu')) {
                    $('ul', $(this).parents('ul:first')).slideUp(350);
                    $('a', $(this).parents('ul:first')).removeClass('submenu');
                    $(this).next('ul').slideDown(350);
                    $(this).addClass('submenu');
                } else if ($(this).hasClass('submenu')) {
                    $(this).removeClass('submenu');
                    $(this).next('ul').slideUp(350);
                }
            });
        }

        init();
    }
    if ($('.course-count .counter-up').length > 0) {
        $('.course-count .counter-up').counterUp({delay: 15, time: 1500});
    }
    if ($('.dot-slider').length > 0) {
        $('.dot-slider').slick({
            dots: true,
            autoplay: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            swipe: false,
            touchMove: false,
            vertical: true,
            verticalScrolling: true,
            speed: 1000,
            autoplaySpeed: 2000,
            useTransform: true,
            responsive: [{breakpoint: 992, settings: {slidesToShow: 1}}, {
                breakpoint: 800,
                settings: {slidesToShow: 1}
            }, {breakpoint: 776, settings: {slidesToShow: 1}}, {breakpoint: 567, settings: {slidesToShow: 1}}]
        });
    }
    var maxLength = 100;
    $('#review_desc').on('keyup change', function () {
        var length = $(this).val().length;
        length = maxLength - length;
        $('#chars').text(length);
    });
    $('.freelance-widget .favourite').on('click', function () {
        $(this).toggleClass('color-active');
    });
    $('.project-item-feature .favourite').on('click', function () {
        $(this).toggleClass('three-active');
    });
    $('.free-two .favourite').on('click', function () {
        $(this).toggleClass('blue-active');
    });
    if ($('.select').length > 0) {
        $('.select').select2({minimumResultsForSearch: -1, width: '100%'});
    }
    if ($('.datetimepicker').length > 0) {
        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY',
            icons: {
                up: "fas fa-chevron-up",
                down: "fas fa-chevron-down",
                next: 'fas fa-chevron-right',
                previous: 'fas fa-chevron-left'
            }
        });
    }
    if ($('.floating').length > 0) {
        $('.floating').on('focus blur', function (e) {
            $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
        }).trigger('blur');
    }
    $('body').append('<div class="sidebar-overlay"></div>');
    $(document).on('click', '#mobile_btn', function () {
        $('main-wrapper').toggleClass('slide-nav');
        $('.sidebar-overlay').toggleClass('opened');
        $('html').addClass('menu-opened');
        return false;
    });
    $(document).on('click', '.sidebar-overlay', function () {
        $('html').removeClass('menu-opened');
        $(this).removeClass('opened');
        $('main-wrapper').removeClass('slide-nav');
    });
    $(document).on('click', '#menu_close', function () {
        $('html').removeClass('menu-opened');
        $('.sidebar-overlay').removeClass('opened');
        $('main-wrapper').removeClass('slide-nav');
    });
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    function animateElements() {
        $('.circle-bar1').each(function () {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var percent = $(this).find('.circle-graph1').attr('data-percent');
            var animate = $(this).data('animate');
            if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                $(this).data('animate', true);
                $(this).find('.circle-graph1').circleProgress({
                    value: percent / 100,
                    size: 400,
                    thickness: 40,
                    startAngle: 1.5,
                    fill: {color: '#19D1AF'}
                });
            }
        });
    }

    if ($('.circle-bar').length > 0) {
        animateElements();
    }
    $(window).scroll(animateElements);
    $(document).ready(function () {
        let progressVal = 0;
        let businessType = 0;
        $(".next_btn").click(function () {
            $(this).parent().parent().next().fadeIn('slow');
            $(this).parent().parent().css({'display': 'none'});
            if (progressVal == 0) {
                $('.acc-title-02').show();
                $('.progress-25').hide();
                $('.progress-50').show();
            } else if (progressVal == 1) {
                $('.acc-title-03').show();
                $('.progress-50').hide();
                $('.progress-75').show();
                $('#individual').hide();
                $('#partnership').hide();
                $('#society').hide();
                $('#proprietorship').hide();
                $('#privateltd').hide();
                if ($('#business-type').val() == "Individual") {
                    $('#individual').show();
                    businessType = 1;
                } else if ($('#business-type').val() == "Partnership/LLP") {
                    $('#partnership').show();
                    businessType = 2;
                } else if ($('#business-type').val() == "Society/Trust/Club/NGO") {
                    $('#society').show();
                    businessType = 3;
                } else if ($('#business-type').val() == "Proprietorship") {
                    $('#proprietorship').show();
                    businessType = 4;
                } else if ($('#business-type').val() == "Private Ltd/Public Ltd") {
                    $('#privateltd').show();
                    businessType = 5;
                }
            } else if (progressVal == 2) {
                $('.acc-title-04').show();
                $('.progress-75').hide();
                $('.progress-100').show();
                $('#individual-doc').hide();
                $('#partnership-doc').hide();
                $('#society-doc').hide();
                $('#proprietorship-doc').hide();
                $('#privateltd-doc').hide();
                if (businessType == 1) {
                    $('#individual-doc').show();
                } else if (businessType == 2) {
                    $('#partnership-doc').show();
                } else if (businessType == 3) {
                    $('#society-doc').show();
                } else if (businessType == 4) {
                    $('#proprietorship-doc').show();
                } else if (businessType == 5) {
                    $('#privateltd-doc').show();
                }
            } else if (progressVal == 3) {
                $('.acc-title-05').show();
                $('.circle-percent-75').hide();
                $('.circle-percent-100').show();
            }
            progressVal = progressVal + 1;
            $('.progress-active').removeClass('progress-active').addClass('progress-activated').next().addClass('progress-active');
        });
        $(".prev_btn").click(function () {
            $(this).parent().parent().prev().fadeIn('slow');
            $(this).parent().parent().css({'display': 'none'});
            $('.acc-title-01').hide();
            $('.acc-title-02').hide();
            $('.acc-title-03').hide();
            $('.acc-title-04').hide();
            $('.acc-title-05').hide();
            progressVal = progressVal - 1;
            if (progressVal == 0) {
                $('.acc-title-01').show();
                $('.progress-25').show();
                $('.progress-50').hide();
            } else if (progressVal == 1) {
                $('.acc-title-02').show();
                $('.progress-50').show();
                $('.progress-75').hide();
            } else if (progressVal == 2) {
                $('.acc-title-03').show();
                $('.progress-75').show();
                $('.progress-100').hide();
            } else if (progressVal == 3) {
                $('.acc-title-04').show();
                $('.circle-percent-75').show();
                $('.circle-percent-100').hide();
            }
            $('.progress-active').removeClass('progress-active').prev().removeClass('progress-activated').addClass('progress-active');
        });
    });
    $("#new_add").click(function () {
        var html = '';
        html += '<div class="row" id="form-row">';
        html += '<div class="col-md-4 col-lg-4 col-xl-4">';
        html += '<div class="form-group description-group">';
        html += '<input type="text" class="form-control" placeholder="Enter Language">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-4 col-lg-4 col-xl-4">';
        html += '<div class="form-group description-group">';
        html += '<select name="price" class="form-control select-level" id="business-type">';
        html += '<option value="Individual" selected>Choose Level</option>';
        html += '<option value="">Basic</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-4 col-lg-4 col-xl-4">';
        html += '<div class="new-addd">';
        html += '<a  id="remove_row" class="remove_row"> Remove</a>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#add_row').append(html);
    });
    $(document).on('click', '#remove_row', function () {
        $(this).closest('#form-row').remove();
    });
    $("#skill_add").click(function () {
        var html = '';
        html += '<div class="row" id="form-row">';
        html += '<div class="col-md-12 col-lg-2"></div>';
        html += '<div class="col-md-4 col-lg-3">';
        html += '<div class="form-group ">';
        html += '<input type="text" class="form-control" placeholder="Ex : UI UX Design">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-4 col-lg-3">';
        html += '<div class="form-group ">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="">Intermediate</option>';
        html += '<option value="" >Medium</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-4">';
        html += '<div class="new-addd">';
        html += '<a  id="remove_row" class="remove_row"> Remove</a>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#skill_add_row').append(html);
    });
    $("#edu_add").click(function () {
        var html = '';
        html += '<div class="row" id="form-row">';
        html += '<div class="col-md-12 col-lg-2"></div>';
        html += '<div class="col-md-2 col-lg-1">';
        html += '<div class="form-group ">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="0">India</option>';
        html += '<option value="1" >Chinna</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group ">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="0">College/University Name</option>';
        html += '<option value="1" >University Name</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group ">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="0">College/University Name</option>';
        html += '<option value="1" >University Name</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2 col-lg-1">';
        html += '<div class="form-group ">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="0">Intermediate</option>';
        html += '<option value="0">Average</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="new-addd">';
        html += '<a  id="remove_row" class="remove_row"> Remove</a>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#education_add_row').append(html);
    });
    $("#certify_add").click(function () {
        var html = '';
        html += '<div class="row" id="form-row">';
        html += '<div class="col-md-12 col-lg-2"></div>';
        html += '<div class="col-md-4 col-lg-3">';
        html += '<div class="form-group ">';
        html += '<input type="text" class="form-control" placeholder="Certification or Award">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-4 col-lg-3">';
        html += '<div class="form-group ">';
        html += '<input type="text" class="form-control" placeholder="Certified from (e.g. Adobe)">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="form-group ">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="0">Year</option>';
        html += '<option value="1" >2012</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="new-addd">';
        html += '<a  id="remove_row" class="remove_row"> Remove</a>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#certify_add_row').append(html);
    });
    $("#experience_add").click(function () {
        var html = '';
        html += '<div class="row" id="form-row">';
        html += '<div class="col-md-12 col-lg-2"></div>';
        html += '<div class="col-md-10 col-lg-8">';
        html += '<div class="row">';
        html += '<div class="col-md-6">';
        html += '<div class="form-group ">';
        html += '<input type="text" class="form-control" placeholder="Enter your position or title">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-6">';
        html += '<div class="form-group ">';
        html += '<input type="text" class="form-control" placeholder="Enter company name">';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="row">';
        html += '<div class="col-md-3 d-flex align-items-end">';
        html += '<div class="form-group">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="">Select Month</option>';
        html += '<option value="" >1</option>';
        html += '<option value="" >2</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3 d-flex align-items-end">';
        html += '<div class="form-group">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="">Select Year</option>';
        html += '<option value="" >2010</option>';
        html += '<option value="" >2011</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3 d-flex align-items-end">';
        html += '<div class="form-group">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="">Select Month</option>';
        html += '<option value="" >1</option>';
        html += '<option value="" >2</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3 d-flex align-items-end">';
        html += '<div class="form-group">';
        html += '<select name="price" class="form-control select-level">';
        html += '<option value="">Select Year</option>';
        html += '<option value="" >2010</option>';
        html += '<option value="" >2011</option>';
        html += '</select>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-2">';
        html += '<div class="new-addd">';
        html += '<a  id="remove_row" class="remove_row"> Remove</a>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#experience_add_row').append(html);
    });
    $('#check_hour').click(function () {
        if ($(this).is(':checked')) {
            $(".checkout-hour").show();
            $(".check-hour").hide();
        } else {
            $(".checkout-hour").hide();
            $(".check-hour").show();
        }
    });
    $(document).on('click', '.accounts_type', function () {
        var id = $(this).data('id');
        localStorage.setItem('screen', id);
    });
    $(document).ready(function () {
        var screen = localStorage.getItem('screen');
        if (screen != '') {
            $('#' + screen).prop('checked', true);
        } else {
            $('#freelance').prop('checked', true);
        }
    });
    $(".hours-info").on('click', '.trash', function () {
        $(this).closest('.hours-cont').remove();
        return false;
    });
    $(".add-hours").on('click', function () {
        var hourscontent = '<div class="row form-row hours-cont">' +
            '<div class="col-12 col-md-10">' +
            '<div class="row form-row">' +
            '<div class="col-12 col-md-6">' +
            '<div class="form-group">' +
            '<label>Start Time</label>' +
            '<select class="form-control">' +
            '<option>-</option>' +
            '<option>12.00 am</option>' +
            '<option>12.30 am</option>' +
            '<option>1.00 am</option>' +
            '<option>1.30 am</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-6">' +
            '<div class="form-group">' +
            '<label>End Time</label>' +
            '<select class="form-control">' +
            '<option>-</option>' +
            '<option>12.00 am</option>' +
            '<option>12.30 am</option>' +
            '<option>1.00 am</option>' +
            '<option>1.30 am</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>' +
            '</div>';
        $(".hours-info").append(hourscontent);
        return false;
    });

    function resizeInnerDiv() {
        var height = $(window).height();
        var header_height = $(".header").height();
        var footer_height = $(".footer").height();
        var setheight = height - header_height;
        var trueheight = setheight - footer_height;
        $(".content").css("min-height", trueheight);
    }

    if ($('.content').length > 0) {
        resizeInnerDiv();
    }
    $(window).on('resize', function () {
        if ($('.content').length > 0) {
            resizeInnerDiv();
        }
    });
    if ($('.bookingrange').length > 0) {
        var start = moment().subtract(6, 'days');
        var end = moment();

        function booking_range(start, end) {
            $('.bookingrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('.bookingrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, booking_range);
        booking_range(start, end);
    }
    var chatAppTarget = $('.chat-window');
    (function () {
        if ($(window).width() > 991)
            chatAppTarget.removeClass('chat-slide');
        $(document).on("click", ".chat-window .chat-users-list a.media", function () {
            if ($(window).width() <= 991) {
                chatAppTarget.addClass('chat-slide');
            }
            return false;
        });
        $(document).on("click", "#back_user_list", function () {
            if ($(window).width() <= 991) {
                chatAppTarget.removeClass('chat-slide');
            }
            return false;
        });
    })();
    if ($('.datatable').length > 0) {
        $('.datatable').DataTable({"bFilter": true,});
    }
    $(document).on('click', '.select-group .select-item .service-item', function () {
        $('.selected .service-item .fa').removeClass('fa-check');
        $('.select-item .service-item').removeClass('selected');
        $(this).addClass('selected');
    });
    $(window).on('load', function () {
        if ($('#loader').length > 0) {
            $('#loader').delay(350).fadeOut('slow');
            $('body').delay(350).css({'overflow': 'visible'});
        }
    })
    $(document).on('click', '.readmore', function () {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    });
    if ($('.slidercontainer').length > 0) {
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;
        slider.oninput = function () {
            output.innerHTML = this.value;
        }
    }
    if ($('.main-wrapper .aos').length > 0) {
        AOS.init({duration: 1200, once: true});
    }
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 0) {
            $('.scroll-to-target').addClass('open');
        } else {
            $('.scroll-to-target').removeClass('open');
        }
        if ($(this).scrollTop() > 500) {
            $('.scroll-to-target').addClass('open');
        } else {
            $('.scroll-to-target').removeClass('open');
        }
    });
    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function () {
            var target = $(this).attr('data-target');
            $('html, body').animate({scrollTop: $(target).offset().top}, 500);
        });
    }
    if ($('.summernote').length > 0) {
        $('.summernote').summernote({
            height: 200,
            minHeight: null,
            maxHeight: null,
            focus: false,
            toolbar: [['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough', 'superscript', 'subscript']], ['fontsize', ['fontsize']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['height', ['height']]]
        });
    }
    if ($('#store').length > 0) {
        document.getElementById('store').storeID.onchange = function () {
            var newaction = this.value;
            document.getElementById('store').action = newaction;
        }
    }
    ;
    if ($('#developers-slider').length > 0) {
        $('#developers-slider').owlCarousel({
            items: 5,
            margin: 30,
            dots: false,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 3}, 1170: {items: 4}}
        });
    }
    if ($('#trend-slider').length > 0) {
        $('#trend-slider').owlCarousel({
            items: 5,
            margin: 30,
            dots: true,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 2}, 991: {items: 3}, 1170: {items: 4}}
        });
    }
    if ($('#review-three-slider').length > 0) {
        $('#review-three-slider').owlCarousel({
            items: 5,
            margin: 30,
            dots: true,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 1}, 1170: {items: 1}}
        });
    }
    if ($('#feature-project-slider').length > 0) {
        $('#feature-project-slider').owlCarousel({
            items: 5,
            margin: 30,
            dots: true,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 2}, 991: {items: 3}, 1170: {items: 4}}
        });
    }
    if ($('#blog-slider').length > 0) {
        $('#blog-slider').owlCarousel({
            items: 5,
            margin: 30,
            dots: true,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 2}, 991: {items: 3}, 1170: {items: 3}}
        });
    }
    if ($('#blog-slider').length > 0) {
        $('#blog-slider').owlCarousel({
            items: 5,
            margin: 25,
            dots: false,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 1}, 1170: {items: 3}}
        });
    }
    if ($('#testimonial-slider').length > 0) {
        $('#testimonial-slider').owlCarousel({
            items: 5,
            margin: 30,
            dots: false,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 2}, 991: {items: 3}, 1170: {items: 3}}
        });
    }
    if ($('#testimonial-slider-two').length > 0) {
        $('#testimonial-slider-two').owlCarousel({
            items: 5,
            margin: 30,
            dots: false,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 2}, 991: {items: 3}, 1170: {items: 3}}
        });
    }
    if ($('#testimonial-two').length > 0) {
        $('#testimonial-two').owlCarousel({
            items: 5,
            margin: 30,
            slideSpeed: 500,
            dots: false,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 1}, 991: {items: 1}, 1170: {items: 1}}
        });
    }
    if ($('#company-slider').length > 0) {
        $('#company-slider').owlCarousel({
            items: 8,
            margin: 30,
            dots: false,
            nav: false,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 2}, 768: {items: 3}, 1170: {items: 6}}
        });
    }
    if ($('#popular-slider').length > 0) {
        $('#popular-slider').owlCarousel({
            items: 6,
            margin: 30,
            dots: false,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 2}, 1170: {items: 3}}
        });
    }
    if ($('#blog-article').length > 0) {
        $('#blog-article').owlCarousel({
            items: 6,
            margin: 30,
            dots: false,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 2}, 1170: {items: 3}}
        });
    }
    if ($('#trust-company-slider').length > 0) {
        $('#trust-company-slider').owlCarousel({
            items: 6,
            margin: 30,
            dots: false,
            nav: true,
            smartSpeed: 2000,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            loop: true,
            responsiveClass: true,
            responsive: {0: {items: 1}, 768: {items: 2}, 1170: {items: 6}}
        });
    }
    if ($('.say-about.slider-for').length > 0) {
        $('.say-about.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.client-img.slider-nav'
        });
    }
    if ($('.client-img.slider-nav').length > 0) {
        $('.client-img.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.say-about.slider-for',
            dots: false,
            arrows: false,
            centerMode: true,
            focusOnSelect: true
        });
    }
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $(".header").removeClass("sticky");
        } else {
            $(".header").addClass("sticky");
        }
    });
    $('#edit_experiance').on('click', function () {
        $('.pro-new').css('display', 'block');
        $('.pro-text').css('display', 'none');
    });
    $('.profile-cancel-btn').on('click', function () {
        $('.pro-new').css('display', 'none');
        $('.pro-text').css('display', 'block');
    });
    $('#edit_overview').on('click', function () {
        $('.pro-new1').css('display', 'block');
        $('.pro-text1').css('display', 'none');
    });
    $('.profile-cancel-btn').on('click', function () {
        $('.pro-new1').css('display', 'none');
        $('.pro-text1').css('display', 'block');
    });
    $('#edit_education').on('click', function () {
        $('.pro-new2').css('display', 'block');
        $('.pro-text2').css('display', 'none');
    });
    $('.profile-cancel-btn').on('click', function () {
        $('.pro-new2').css('display', 'none');
        $('.pro-text2').css('display', 'block');
    });
    $('#edit_name').on('click', function () {
        $('.pro-new3').css('display', 'block');
        $('.pro-text3').css('display', 'none');
    });
    $('.profile-cancel-btn').on('click', function () {
        $('.pro-new3').css('display', 'none');
        $('.pro-text3').css('display', 'block');
    });
})(jQuery);
