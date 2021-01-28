jQuery(document).ready(function($) {

    $(window).on("scroll",function() {

        var hb = $('.headers').height();

        if ($(this).scrollTop() > hb ) {

            $('.header-stick').addClass('active');

        } else {

            $('.header-stick').removeClass('active');

        }



        if ($(this).scrollTop() > 0 ) {

            $('.back-to-top').addClass('active');

        } else {

            $('.back-to-top').removeClass('active');

        }

    });



    $('.back-to-top').click(function(){

        $('html, body').animate({scrollTop:0}, 400);

    });

});



// js menu mobile

jQuery(document).ready(function($) {

    $('.megamenu-mobile-content .item-sub > a span').click(function(e){

        e.preventDefault();

        $(this).parent().next().slideToggle('slow');

        $(this).parent().parent().toggleClass('active');

    });

});

// end js menu mobile



jQuery(document).ready(function($) {



    $(".slick-slidershow").slick({

        dots: false,

        infinite: true,

        speed: 500,

        slidesToShow: 1,

        slidesToScroll: 1,

        adaptiveHeight: true,

        prevArrow: '<button class="slick-arrow slick-prev" href="javascript:0"><i class="fas fa-chevron-circle-left icon"></i></button>',

        nextArrow: '<button class="slick-arrow slick-next" href="javascript:0"><i class="fas fa-chevron-circle-right icon"></i></button>',

        responsive: [

            {

                breakpoint: 1200,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 992,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 768,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 576,

                settings: {

                    slidesToShow: 1,

                }

            }

        ]

    });



    $(".slick-products").slick({

        dots: false,

        infinite: true,

        speed: 500,

        slidesToShow: 4,

        slidesToScroll: 1,

        adaptiveHeight: true,

        prevArrow: '<button class="slick-arrow slick-prev" href="javascript:0"><i class="far fa-angle-left icon"></i></button>',

        nextArrow: '<button class="slick-arrow slick-next" href="javascript:0"><i class="far fa-angle-right icon"></i></button>',

        responsive: [

            {

                breakpoint: 1200,

                settings: {

                    slidesToShow: 3,

                }

            },

            {

                breakpoint: 992,

                settings: {

                    slidesToShow: 2,

                }

            },

            {

                breakpoint: 768,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 576,

                settings: {

                    slidesToShow: 1,

                }

            }

        ]

    });



    $(".slick-testimonials").slick({

        dots: false,

        infinite: true,

        speed: 500,

        slidesToShow: 1,

        slidesToScroll: 1,

        adaptiveHeight: true,

        prevArrow: '<button class="slick-arrow slick-prev" href="javascript:0"><i class="fas fa-chevron-circle-left icon"></i></button>',

        nextArrow: '<button class="slick-arrow slick-next" href="javascript:0"><i class="fas fa-chevron-circle-right icon"></i></button>',

        responsive: [

            {

                breakpoint: 1200,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 992,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 768,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 576,

                settings: {

                    slidesToShow: 1,

                }

            }

        ]

    });



    $(".slick-brands").slick({

        dots: true,

        infinite: true,

        speed: 500,

        slidesToShow: 5,

        slidesToScroll: 1,

        adaptiveHeight: true,

        prevArrow: '',

        nextArrow: '',

        responsive: [

            {

                breakpoint: 1200,

                settings: {

                    slidesToShow: 5,

                }

            },

            {

                breakpoint: 992,

                settings: {

                    slidesToShow: 4,

                }

            },

            {

                breakpoint: 768,

                settings: {

                    slidesToShow: 3,

                }

            },

            {

                breakpoint: 576,

                settings: {

                    slidesToShow: 2,

                }

            }

        ]

    });



    $(".slick-services-related").slick({

        dots: false,

        infinite: true,

        speed: 500,

        slidesToShow: 3,

        slidesToScroll: 1,

        adaptiveHeight: true,

        prevArrow: '<button class="slick-arrow slick-prev" href="javascript:0"><i class="far fa-angle-left icon"></i></button>',

        nextArrow: '<button class="slick-arrow slick-next" href="javascript:0"><i class="far fa-angle-right icon"></i></button>',

        responsive: [

            {

                breakpoint: 1200,

                settings: {

                    slidesToShow: 3,

                }

            },

            {

                breakpoint: 992,

                settings: {

                    slidesToShow: 2,

                }

            },

            {

                breakpoint: 768,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 576,

                settings: {

                    slidesToShow: 1,

                }

            }

        ]

    });



    $(".slick-products-related").slick({

        dots: false,

        infinite: true,

        speed: 500,

        slidesToShow: 3,

        slidesToScroll: 1,

        adaptiveHeight: true,

        prevArrow: '<button class="slick-arrow slick-prev" href="javascript:0"><i class="far fa-angle-left icon"></i></button>',

        nextArrow: '<button class="slick-arrow slick-next" href="javascript:0"><i class="far fa-angle-right icon"></i></button>',

        responsive: [

            {

                breakpoint: 1200,

                settings: {

                    slidesToShow: 3,

                }

            },

            {

                breakpoint: 992,

                settings: {

                    slidesToShow: 2,

                }

            },

            {

                breakpoint: 768,

                settings: {

                    slidesToShow: 1,

                }

            },

            {

                breakpoint: 576,

                settings: {

                    slidesToShow: 1,

                }

            }

        ]

    });



    $('.slick-products-for').slick({

        slidesToShow: 1,

        slidesToScroll: 1,

        arrows: false,

        fade: true,

        asNavFor: '.slick-products-nav'

    });

    $('.slick-products-nav').slick({

        slidesToShow: 3,

        slidesToScroll: 1,

        asNavFor: '.slick-products-for',

        dots: false,

        focusOnSelect: true,

        prevArrow: '<button class="slick-arrow slick-prev" href="javascript:0"><i class="far fa-angle-left icon"></i></button>',

        nextArrow: '<button class="slick-arrow slick-next" href="javascript:0"><i class="far fa-angle-right icon"></i></button>',

    });



});



// js popups

jQuery(document).ready(function($) {



    // popups

    $('.btn-popup').click(function(e){

        // e.preventDefault();



        var adat = $(this).hasClass('btn-popup-consultation-scheduling');

        if (adat) {

            $('.art-popups-consultation-scheduling').addClass('active');

        }

    });

    ////////////////////

    var hg_pop = $('.art-popups-consultation-scheduling .popups-content').outerHeight();

    var hg_win = $(window).height();

    if (hg_pop > hg_win) {

        // $('.art-popups-consultation-scheduling .popups-box').css({'top': '10px'});        

        $('.art-popups-consultation-scheduling .popups-box').height(hg_win - 20);

    } else {

        // $('.art-popups-consultation-scheduling .popups-box').css({'top': 'auto'});        

        $('.art-popups-consultation-scheduling .popups-box').height('auto');

    } 

    ////////////////////

    $('.art-popups .popups-box').click(function(){

        $(this).parent().removeClass('active');

    });

    ////////////////////

    $('.art-popups .popups-content').click(function(e){

        e.stopPropagation();

    });

    // end popups

    $(window).resize(function(){

        // popups

        var hg_pop = $('.art-popups-consultation-scheduling .popups-content').outerHeight();

        var hg_win = $(window).height();

        if (hg_pop > hg_win) {

            // $('.art-popups-consultation-scheduling .popups-box').css({'top': '10px'});        

            $('.art-popups-consultation-scheduling .popups-box').height(hg_win - 20);

        } else {

            // $('.art-popups-consultation-scheduling .popups-box').css({'top': 'auto'});        

            $('.art-popups-consultation-scheduling .popups-box').height('auto');

        } 

        // end popups

    });

});

// end js popups



// js tab

jQuery(document).ready(function($) {

    $('.title-tab a').click(function(e){

        e.preventDefault();



        var ac = $(this).hasClass('active');



        if (!ac) {

            var clnm = $(this).attr('class').replace('tab-title','');

            var clsnm = '.tab-content' + clnm;



            var natab = $(this).parent().parent().parent().attr('class');



            $('.' + natab + ' .title-tab a').removeClass('active');

            $(this).addClass('active');

            $('.' + natab + ' .tab-content').removeClass('active');

            $('.' + natab + ' ' + clsnm).addClass('active');

        } else {

            $(this).removeClass('active');

            $('.tab-content').removeClass('active');

        }

    });    

});

// end js tab



jQuery(document).ready(function($) {

    $('.art-about-us .banner-image .image').click(function(){

        $(this).parent().addClass('active');

    });  

    $('.art-about-us .banner-image .video').click(function(){

        $(this).parent().removeClass('active');

    }); 



    AOS.init({

        easing: 'ease-in-out-sine',
        
        duration: 800,

    });

});

