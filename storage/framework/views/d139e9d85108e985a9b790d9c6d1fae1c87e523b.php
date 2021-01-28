<?php
    use App\ProductCate;
   
?>

 <header>

        <section class="header">

            <div class="container">

                <div class="row">

                    <div class="col-md-2">

                        <div class="logo">

                            <a href="<?php echo url('/'); ?>">
                                <img  src="<?php echo e(asset('upload/hinhanh/'.$setting->photo)); ?>"/>
                            </a>

                            <div class="select" id="select-langue">

                                <ul>
                                            <?php if(@$_SESSION['lang'] == 'vi'){ ?>
                                                 <li class="option active" style="display: list-item;">
                                                    <a href="?lang=vi" class="vn"><span>Vie</span></a>
                                                </li>
                                            <?php }elseif(empty($_SESSION['lang'])){ ?>
                                                <li class="option active" style="display: list-item;">
                                                    <a href="?lang=vi" class="vn"><span>Vie</span></a>
                                                </li>
                                            <?php }elseif(@$_SESSION['lang'] == 'eg'){?>
                                                <li class="option active" style="display: list-item;">
                                                    <a href="?lang=eg" class="eng"><span>Eng</span></a>
                                                </li>
                                            <?php }elseif(@$_SESSION['lang'] == 'uae'){ ?>   
                                                <li class="option active" style="display: list-item;">
                                                    <a href="?lang=uae" class="uae"><span>Uae</span></a>
                                                </li>
                                            <?php }elseif(@$_SESSION['lang'] == 'tai'){?>
                                                <li class="option active" style="display: list-item;">
                                                   <a href="?lang=tai" class="tai"><span>Tai</span></a>
                                                </li>
                                            <?php } ?>
                                        
                                            <li class="option <?php if(@$_SESSION['lang'] == 'vi'){echo 'active';}elseif(empty($_SESSION['lang'])){echo 'active';}?>" style="display: none;">
                                                <a href="?lang=vi" class="vn"><span>Vie</span></a>
                                            </li>

                                            <li class="option <?php if(@$_SESSION['lang'] == 'eg'){echo 'active';}?>" style="display: none;">

                                                <a href="?lang=eg" class="eng"><span>Eng</span></a>

                                            </li>

                                            <li class="option <?php if(@$_SESSION['lang'] == 'uae'){echo 'active';}?>" style="display: none;">

                                                <a href="?lang=uae" class="uae"><span>Uae</span></a>

                                            </li>

                                            <li class="option <?php if(@$_SESSION['lang'] == 'tai'){echo 'active';}?>" style="display: none;">

                                                <a href="?lang=tai" class="tai"><span>Tai</span></a>

                                            </li>

                                        </ul>

                            </div>

                            <a id="cd-menu-trigger" href="#0" class=""><span class="cd-menu-icon"></span></a>

                        </div>

                    </div>

                    <div class="col-md-10 no-mobile">

                        <div class="header-nav">

                            <div class="row">

                                <div class="col-md-10">

                                    <ul class="flex-center-between nav-main">

                                        <li><a href="<?php echo e(url('/')); ?>" title="<?= $home ?>"><i class="fa fa-home"></i> </a> </li>

                                        <li class="has-submenu">

                                            <a href="<?php echo e(url('gioi-thieu')); ?>" title="<?= $about ?>"><?= $about ?></a>

                                            <ul class="nav-sub">

                                                <li><a href="<?php echo e(url('thu-vien-anh')); ?>" title=""><?= $thuvienanh ?></a> </li>

                                            </ul>

                                        </li>
                                       <?php 
                                            $data_pro = ProductCate::select()->where('menu',1)->where('status',1)->get()->toArray();
                                           
                                            foreach($data_pro as $rows){
                                                @$data_pro2 = ProductCate::select()->where('parent_id',$rows['id'])->where('status',1)->orderBy('pos','asc')->get()->toArray();
                                           
                                       ?>
                                        <li class="has-submenu">

                                            <a href="<?php echo e(asset($rows['alias'].'.htm')); ?>" title="<?php echo $rows['name'.$duoi]; ?>"><?php echo $rows['name'.$duoi]?></a>
                                            <?php if(count($data_pro2)>0){?>
                                            <ul class="nav-sub">
                                                <?php foreach($data_pro2 as $rows2){  ?>
                                                     <li><a href="<?php echo e(asset($rows2['alias'].'.htm')); ?>" title="<?php echo $rows2['name'.$duoi]?>"><?= $rows2['name'.$duoi]?></a></li>
                                                <?php } ?> 
                                            </ul>
                                            <?php } ?>     
                                        </li>
                                       <?php } ?> 
                                        <li><a href="<?php echo e(url('video')); ?>" title="<?php echo $video;?>"><?php echo $video;?></a> </li>

                                        <li><a href="<?php echo e(url('lien-he')); ?>" title="<?php echo $lienhe?>"><?php echo $lienhe?></a> </li>

                                    </ul>

                                </div>

                                <div class="col-md-2 flex-center">

                                    <div class="select" id="select-langue">

                                        <ul>
                                            <?php if(@$_SESSION['lang'] == 'vi'){ ?>
                                                 <li class="option active" style="display: list-item;">
                                                    <a href="?lang=vi" class="vn"><span>Vie</span></a>
                                                </li>
                                            <?php }elseif(empty($_SESSION['lang'])){ ?>
                                                <li class="option active" style="display: list-item;">
                                                    <a href="?lang=vi" class="vn"><span>Vie</span></a>
                                                </li>
                                            <?php }elseif(@$_SESSION['lang'] == 'eg'){?>
                                                <li class="option active" style="display: list-item;">
                                                    <a href="?lang=eg" class="eng"><span>Eng</span></a>
                                                </li>
                                            <?php }elseif(@$_SESSION['lang'] == 'uae'){ ?>   
                                                <li class="option active" style="display: list-item;">
                                                    <a href="?lang=uae" class="uae"><span>Uae</span></a>
                                                </li>
                                            <?php }elseif(@$_SESSION['lang'] == 'tai'){?>
                                                <li class="option active" style="display: list-item;">
                                                   <a href="?lang=tai" class="tai"><span>Tai</span></a>
                                                </li>
                                            <?php } ?>
                                        
                                            <li class="option <?php if(@$_SESSION['lang'] == 'vi'){echo 'active';}elseif(empty($_SESSION['lang'])){echo 'active';}?>" style="display: none;">
                                                <a href="?lang=vi" class="vn"><span>Vie</span></a>
                                            </li>

                                            <li class="option <?php if(@$_SESSION['lang'] == 'eg'){echo 'active';}?>" style="display: none;">

                                                <a href="?lang=eg" class="eng"><span>Eng</span></a>

                                            </li>

                                            <li class="option <?php if(@$_SESSION['lang'] == 'uae'){echo 'active';}?>" style="display: none;">

                                                <a href="?lang=uae" class="uae"><span>Uae</span></a>

                                            </li>

                                            <li class="option <?php if(@$_SESSION['lang'] == 'tai'){echo 'active';}?>" style="display: none;">

                                                <a href="?lang=tai" class="tai"><span>Tai</span></a>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="header-form no-mobile">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="search">
                                        <form class="flex-center-center" method="get" action="<?php echo url('tim-kiem'); ?>">    
                                          <input type="text" name="txtSearch" placeholder="<?php echo $tukhoa;?>">
                                          <button type="submit"><i class="fa fa-search"></i> </button>
                                        </form>

                                    </div>

                                </div>

                                <div class="col-md-6 flex-center-end">

                                    <p class="hotline">

                                        Hotline:

                                        <span><?php echo $setting->phone;?></span>

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <?php if(@$banner == 1){?>
        <section class="banner">

            <div class="container">

                <div class="banner-slider owl-carousel slider-general">
                    <?php echo $__env->make('templates.layout.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
                </div>

            </div>

        </section>
      <?php } ?>  
    </header>
<!--------------------------------------->
<!--End #header-->