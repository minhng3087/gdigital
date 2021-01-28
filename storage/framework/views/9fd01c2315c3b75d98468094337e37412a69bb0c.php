<?php
    $setting = Cache::get('setting');
?>
<!------------------------------------->
<div id="topnav" class="head-ghost">

    <div class="container_alt container_pad">

        <p><?php echo $setting->address?></p>

        <form class="searchform tranz" method="get" action="<?php echo url('tim-kiem'); ?>">

            <input type="hidden" name="type" value="product"/>

            <input type="text" name="q" class="s tranz" size="30" value="Tìm kiếm"/>

            <button class="searchSubmit rad"><i class="fa fa-search"></i>

            </button>

        </form>



    </div>

</div>
<!--Menu-->
  
                               
                              
                               
<div id="cssmenu">
    <ul>
        <li><a  href="<?php echo url('/'); ?>" title="Trang chủ">Trang chủ</a></li>
     <?php 
            $data_pro = DB::table("product_categories")->select()->where('menu',1)->where('status',1)->orderBy('pos','asc')->get();
            foreach($data_pro as $rows){
            $data_pro2 = DB::table("product_categories")->select()->where('parent_id',$rows->id)->where('status',1)->orderBy('pos','asc')->get();    
        ?>
        <li>
            <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
           <?php if(count($data_pro2)>0){?>
            <ul>
                <?php foreach($data_pro2 as $rows2){
                    $data_pro3 = DB::table("product_categories")->select()->where('parent_id',$rows2->id)->where('status',1)->orderBy('pos','asc')->get();    
                ?>
                <li>
                    <a href="<?php if($rows2->alias != null){?><?php echo e(asset($rows2->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows2->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows2->name; ?>"><?php echo $rows2->name; ?></a>
                     <?php if(count($data_pro3)>0){?>
                        <ul>
                        <?php foreach($data_pro3 as $rows3){
                               
                        ?>
                            <li>
                                <a href="<?php if($rows3->alias != null){?><?php echo e(asset($rows3->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows3->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows3->name; ?>"><?php echo $rows3->name; ?></a>
                            </li>
                        <?php } ?>    
    
                        </ul>
                     <?php } ?>   
                </li>
               <?php } ?> 
            </ul>
          <?php } ?>  
        </li>
        <?php } ?>
         <li><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">Liên hệ</a> </li>

    </ul>

</div>



<div class="clearfix"></div>



<!--Menu-->

<div id="header" class="wrapper classic-header">
    <div class="container_alt container_pad">
        <div id="mainhead">
            <div id="titles" class="tranz">
                <h1>
                    <a class="logo" href="<?php echo url('/'); ?>">
                        <img class="tranz" src="<?php echo e(asset('upload/hinhanh/'.$setting->photo)); ?>"/>
                    </a>

                </h1>
                <div class="clearfix"></div>
            </div>
            <ul class="social-menu">

                <li class="sprite-facebook"><a class="mk-social-facebook" title="Facebook" href="<?php echo $setting->links1;?>"><i class="fa fa-facebook"></i></a></li>

                <li class="sprite-twitter"><a class="mk-social-twitter-alt" title="Twitter" href="<?php echo $setting->links2;?>"><i class="fa fa-twitter"></i></a></li>

                <li class="sprite-instagram"><a class="mk-social-photobucket" title="Instagram" href="<?php echo $setting->links3;?>"><i class="fa fa-instagram"></i></a></li>

                <li class="sprite-foursquare"><a class="" title="Foursquare" href="<?php echo $setting->links4;?>"><i class="fa fa-foursquare"></i></a></li>

            </ul>

            <div class="clearfix"></div>

            <ul id="menu-header" class="nav top-menu">

                <li id="menu-item-4553" class="kill menu-item menu-item-type-custom menu-item-object-custom"><a

                        href="#"><i class="fa fa-clock-o"></i>Giờ hiện tại</a>

                    <div class="sub sf-mega">
                            <div class="below_body">
        
                                    <div id="clock">Loading...</div>
                                    
                                    <script type="text/javascript"> function refrClock() {
                                    
                                    var d=new Date();
                                    
                                    var s=d.getSeconds();
                                    
                                    var m=d.getMinutes();
                                    
                                    var h=d.getHours();
                                    
                                    var day=d.getDay();
                                    
                                    var date=d.getDate();
                                    
                                    var month=d.getMonth();
                                    
                                    var year=d.getFullYear();
                                    
                                    var days=new Array("Chủ nhật","Thứ hai","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7");
                                    
                                    var months=new Array("1","2","3","4","5","6","7","8","9","10","11","12"); var am_pm;
                                    
                                    if (s<10) {s="0" + s}
                                    
                                    if (m<10) {m="0" + m}
                                    
                                    if (h>12)
                                    
                                    {h-=12;AM_PM = "PM"}
                                    
                                    else {AM_PM="AM"}
                                    
                                    if (h<10) {h="0" + h}
                                    
                                    document.getElementById("clock").innerHTML=days[day] + " Ngày " + date + "/" +months[month] + "/" + year + " Bây giờ là "+ " [" + h + ":" + m + ":" + s + "] " + AM_PM; setTimeout("refrClock()",1000); } refrClock(); </script>
                            </div>
                    </div>
                </li>

                <li id="menu-item-4554" class="kill menu-item menu-item-type-custom menu-item-object-custom"><a

                        href="#"><i class="fa fa-phone-square"></i> Phone Đặt Chỗ</a>

                    <div class="sub sf-mega"><?php echo $setting->phone;?></div>

                </li>

            </ul>

        </div>

        <!-- end #mainhead  -->



        <div class="navhead">



            <a id="navtrigger" class="rad ribbon" href="#">MENU</a>



            <nav id="navigation" class="rad">



                <ul id="main-nav" class="nav sf-js-enabled sf-arrows">
                    <li class="menu-item current-menu-item  menu-item-type-custom menu-item-object-custom menu-item-has-children">
                        <a href="<?php echo url('/'); ?>" class="sf-with-ul">Trang chủ</a>
                    <?php 
                        foreach($data_pro as $rows){
                        $data_pro2 = DB::table("product_categories")->select()->where('parent_id',$rows->id)->where('status',1)->orderBy('pos','asc')->get();    
                    ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                        <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                       <?php if(count($data_pro2)>0){?>
                        <ul class="sub-menu">
                            <?php foreach($data_pro2 as $rows2){
                                $data_pro3 = DB::table("product_categories")->select()->where('parent_id',$rows2->id)->where('status',1)->orderBy('pos','asc')->get();    
                            ?>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                <a class="sf-with-ul" href="<?php if($rows2->alias != null){?><?php echo e(asset($rows2->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows2->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows2->name; ?>"><?php echo $rows2->name; ?></a>
                                 <?php if(count($data_pro3)>0){?>
                                    <ul>
                                    <?php foreach($data_pro3 as $rows3){
                                           
                                    ?>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="<?php if($rows3->alias != null){?><?php echo e(asset($rows3->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows3->name.'.htm'))); ?> <?php } ?>" title="<?php echo $rows3->name; ?>"><?php echo $rows3->name; ?></a>
                                        </li>
                                    <?php } ?>    
                
                                    </ul>
                                 <?php } ?>   
                            </li>
                           <?php } ?> 
                        </ul>
                      <?php } ?>  
                    </li>
                    <?php } ?>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">Liên hệ</a> </li>


                </ul>



            </nav>



        </div>

    </div>

    <!-- end .container  -->



</div>
<div class="clearfix"></div>
<!--End #header-->