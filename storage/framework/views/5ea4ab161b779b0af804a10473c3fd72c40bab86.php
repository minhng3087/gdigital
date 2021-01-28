<?php
    $setting = Cache::get('setting');
    
?>
 <script>
        $(document).ready(function() {
            $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>

<!--------------------------------------------------------------->
   <div id="footer">



        <div class="container container_pad woocommerce">



            <div class="clearfix"></div>



            <div id="copyright">



                <div class="fr">





                </div>



                <div class="fl">

                    Địa điểm Bistro - Đáng yêu, đẹp và sự sang trọng cho nhãn hàng của bạn!

                </div>



            </div>



        </div>



    </div><!-- /#footer  -->



<!---------------------------------------------------------------->


<?php echo $setting->codechat  ?>

<?php  echo $setting->analytics  ?>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=995740153913517&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--Menu Maker-->

<script type="text/javascript">

    $("#cssmenu").menumaker({

        title: "Menu",

        format: "multitoggle"

    });

</script>



<!-- initialise Superfish -->

<script>



    jQuery(document).ready(function () {

        jQuery('ul.sf-menu').superfish({

            animation: {height: 'show'},	// slide-down effect without fade-in

            delay: 1200			// 1.2 second delay on mouseout

        });

    });



</script>





<!--Flexslider-->

<script>

    jQuery(window).load(function () {

        /*global jQuery:false */

        "use strict";



        jQuery('.mainflex').flexslider({

            animation: "fade",

            slideshow: true,                //Boolean: Animate slider automatically

            slideshowSpeed: 11000,           //Integer: Set the speed of the slideshow cycling, in milliseconds

            animationDuration: 600,

            smoothHeight: true,

            useCSS: false,

            prevText: "",

            nextText: "",

            start: function (slider) {

                slider.removeClass('loading');

            }

        });



    });

</script>


 
