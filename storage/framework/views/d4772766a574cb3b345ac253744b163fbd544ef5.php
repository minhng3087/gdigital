<?php
    $setting = Cache::get('setting');
    
?>
<!--------------------------------------------------------------->
<footer>

        <section class="footer">

            <div class="footer-nav">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 col-md-7">

                            <ul class="flex-center">
                                <?php 
                                    $cate_bot = DB::table("product_categories")->select()->where('bot',1)->where('status',1)->orderBy('pos','asc')->get();
                                    foreach($cate_bot as $item_bot){
                                ?>
                                <li><a href="<?php echo e(asset($item_bot->alias.'.htm')); ?>" title="<?php echo $item_bot->name; ?>"><?php echo $item_bot->name; ?></a> </li>
                                <?php } ?>    
                                <li><a href="<?php echo e(url('lien-he')); ?>" title="">Liên hệ</a> </li>

                            </ul>

                        </div>

                        <div class="col-lg-6 col-md-5">

                            <div class="social flex-center-end">

                                <a href="<?php echo $setting->links1?>" title="facebook" class="fa fa-facebook"></a>

                                <a href="<?php echo $setting->links4?>" title="youtube" class="fa fa-youtube"></a>

                                <a href="<?php echo $setting->links5?>" title="google" class="fa fa-google-plus"></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="footer-info">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="company">

                                <div class="logo-footer">

                                    <a href="<?php echo url('/'); ?>"  title="logo" ><img  src="<?php echo e(asset('upload/hinhanh/'.$setting->photo3)); ?>" alt="logo"/></a>

                                </div>

                               <?php echo $setting->content?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <p class="hotline text-right">

                                <span>Tư vấn bán hàng</span>

                                <a href="" title="" class="phone"><?php echo $setting->phone;?></a>

                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="copyright">

                <div class="container">

                    <p><?php echo $setting->copyright;?></p>

                </div>

            </div>

        </section>

    </footer>


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

<script type="text/javascript">
    $(".click_f").click(function(){
            $.ajax({
                url: 'duandalam',
                type: 'get',
                dataType:"html",
                success: function (data){
                    $("#view").html(data);
                }
            });
        });
</script>

 <!--Link js-->
    <a href="#" id="back-to-top" title="Back to top" class="show">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <a href="" title="" class="callnow-icon">
        <img src="<?php echo e(asset('public/images/icon/call.png')); ?>" alt="" title="">
    </a>
    <!--Menu on mobile-->
    <nav id="cd-lateral-nav" class=" visible-mobile">
        <ul class="cd-navigation nav-dropdown">
            <li class="active"><a href="<?php echo e(url('/')); ?>" title="">Trang chủ</a> </li>
            <?php 
                $data_pro = DB::table("product_categories")->select()->where('menu',1)->where('status',1)->orderBy('pos','asc')->get();
                foreach($data_pro as $rows){
                $data_pro2 = DB::table("product_categories")->select()->where('parent_id',$rows->id)->where('status',1)->orderBy('pos','asc')->limit(6)->get();    
            ?>
            <li class="has-child">
                <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                <?php if(count($data_pro2)>0){?>
                <div class="nav-child">
                    <div class="container">
                        <ul>
                            <?php foreach($data_pro2 as $row){?>
                                <li><a href="<?php if($row->alias != null){?><?php echo e(asset($row->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($row->name.'.htm'))); ?> <?php } ?>" title="<?php echo $row->name; ?>"><?php echo $row->name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
    
                </div>
               <?php } ?> 
            </li>
            <?php } ?>
            <li><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">Liên hệ</a> </li>
            <li>
                <a href="" title="">
                    <img src="<?php echo e(asset('public/images/icon/call.png')); ?>" alt="" title="">
                </a>
            </li>
        </ul>
    </nav>
    <!--Link js-->
    <script type="text/javascript" src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/owl.carousel.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/jquery.fancybox.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/wow.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/waypoints.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/jquery.counterup.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/private.js')); ?>"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
    

