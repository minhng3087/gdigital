
jQuery(function ($) {
    // $("header").load("header.html");

    // $("footer").load("footer.html");

        jQuery(document).ready(function($) {

            $('.counter').counterUp({

                delay: 10,

                time: 1000

            });

        });



        $('.banner-slider').owlCarousel({

            loop:true,

            autoWidth:false,

            autoplay: true,

            items:1,

            dots: false,

            nav: true,

            navText: ["<img src='./public/images/icon/left.png'>","<img src='./public/images/icon/right.png'>"],

            responsive:{

                0:{

                    items:1,

                    center:true

                },

                480:{

                    items:1

                },

                678:{

                    items:1

                },

                960:{

                    items:1

                }

            }

        });



    $('.partner-slider').owlCarousel({

        loop:true,

        autoWidth:false,

        autoplay: true,

        items:6,

        margin: 20,

        dots: false,

        nav: true,

        navText: ["<img src='../public/images/icon/left-2.png'>","<img src='../public/images/icon/right-2.png'>"],

        responsive:{

            0:{

                items:2

            },

            480:{

                items:3

            },

            678:{

                items:4

            },

            960:{

                items:6

            }

        }

    });





    // menu mobile

    jQuery(document).ready(function ($) {

        var $lateral_menu_trigger = $('#cd-menu-trigger'),

            $content_wrapper = $('.cd-main-content'),

            $navigation = $('header');



        //open-close lateral menu clicking on the menu icon

        $lateral_menu_trigger.on('click', function (event) {

            event.preventDefault();



            $lateral_menu_trigger.toggleClass('is-clicked');

            $navigation.toggleClass('lateral-menu-is-open');

            $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {

                // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden

                $('body').toggleClass('overflow-hidden');

            });

            $('#cd-lateral-nav').toggleClass('lateral-menu-is-open');



            //check if transitions are not supported - i.e. in IE9

            if ($('html').hasClass('no-csstransitions')) {

                $('body').toggleClass('overflow-hidden');

            }

        });



        //close lateral menu clicking outside the menu itself

        $content_wrapper.on('click', function (event) {

            if (!$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span')) {

                $lateral_menu_trigger.removeClass('is-clicked');

                $navigation.removeClass('lateral-menu-is-open');

                $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {

                    $('body').removeClass('overflow-hidden');

                });

                $('#cd-lateral-nav').removeClass('lateral-menu-is-open');

                //check if transitions are not supported

                if ($('html').hasClass('no-csstransitions')) {

                    $('body').removeClass('overflow-hidden');

                }



            }

        });



        //open (or close) submenu items in the lateral menu. Close all the other open submenu items.

        $('.item-has-children').children('.arrow').on('click', function (event) {

            event.preventDefault();

            $(this).parent('.item-has-children').toggleClass('li-active');

            $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);

        });

    });



    // choose langue



    var currentSelectDiv = null;

    $('.option').click(function(e) {

        //storing the id attribute

        currentSelectDiv = $(this).parents("div.select").attr("id");



        $(this).siblings().toggle().removeClass('active');

        $(this).addClass('active');

    });



    $(document).click(function(e) {

        $('.option').each(function() {

            // check IDs to make sure only closing other lis

            if( $(this).parents("div.select").attr("id") !=

                currentSelectDiv) {

                if ( !$(this).is(":hidden" ) ) {

                    $(this).not('.active').toggle();

                }

            }

        });

        currentSelectDiv = null;

    });



    if ($('#back-to-top').length) {

        var scrollTrigger = 600, // px

            backToTop = function () {

                var scrollTop = $(window).scrollTop();

                if (scrollTop > scrollTrigger) {

                    $('#back-to-top').addClass('show');

                } else {

                    $('#back-to-top').removeClass('show');

                }

            };

        backToTop();

        $(window).on('scroll', function () {

            backToTop();

        });

        $('#back-to-top').on('click', function (e) {

            e.preventDefault();

            $('html,body').animate({

                scrollTop: 0

            }, 700);

        });

    }



    $('.country-code').click(function () {

        $('.country-list').slideToggle(200);

    });



    $(".code-span").on("click", function(event) {

        event.preventDefault();

        var str = $(this).find('.code-txt').text();

        $('.code').text(str);
        $('.code').val(str);

        $(".country-select img").prop("src", $(event.currentTarget).find('img').attr("src"));

    });



    $('.logined').click(function () {

        $('.login-abs').toggleClass('show');

    });



    $('.choose-link').click(function (e) {

        e.preventDefault();

        $(this).find('i').css('color', 'yellow')

    });



    $('.click-tr').click(function () {

        // $(this).parent('tbody').find('.click-tr').removeClass('bg');

        // $(this).parent('tbody').find('.show-tr').removeClass('visible');

        $(this).toggleClass('bg');

        $(this).next('.show-tr').toggleClass('visible')

    });



});

