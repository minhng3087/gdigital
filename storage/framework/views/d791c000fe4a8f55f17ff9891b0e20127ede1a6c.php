<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('img_share', $img_share); ?>

<?php $__env->startSection('content'); ?>

<?php

    use App\ProductCate;

    use App\Products;

     if(@$_SESSION['lang'] == 'vi'){
       $duoi = '';  
       @include('lang/vi.php');
       $lang_face='vi_VN';
    }elseif(@$_SESSION['lang'] == 'eg'){
       $duoi = '_eg'; 
       @include('lang/eg.php');
        $lang_face='en_US';
    }elseif(@$_SESSION['lang'] == 'uae'){
       $duoi = '_uae';
       @include('lang/uae.php');
       $lang_face='ar_AR';
    }elseif(@$_SESSION['lang'] == 'tai'){
       $duoi = '_tai';
       @include('lang/tai.php');
       $lang_face='zh_TW';
    }elseif(@$_SESSION['lang'] == 'ja'){
       $duoi = '_ja';
       @include('lang/ja.php');
       $lang_face='ja_JP';
    }else{
       $duoi = ''; 
       @include('lang/vi.php');  
       $lang_face='vi_VN';     
    }

    @$cate_detail = ProductCate::select()->where('id',$product_detail['cate_id'])->first(); 

  

    @$get_view = ProductCate::select()->where('id',$cate_detail['parent_id'])->first();  

?>

      <section class="breadcrumb">

            <div class="container">

                <ul class="flex-center-start">

                     <li><a href="<?php echo e(url('/')); ?>" title="<?php echo $home;?>"><i class="fa fa-home"></i> <?php echo $home;?> </a> </li>

                    <?php if(!empty($get_view)){ ?>

                    <li><a href="<?php echo e(asset(@$get_view['alias']).'.htm'); ?>" title="<?php echo $get_view['name'.$duoi]; ?>"><?php echo e($get_view['name'.$duoi]); ?></a></li>

                    <?php } ?>

                    <?php if(!empty($cate_detail)){ ?>

                    <li><a href="<?php echo e(asset(@$cate_detail['alias']).'.htm'); ?>" title="<?php echo $cate_detail['name'.$duoi]; ?>"><?php echo e($cate_detail['name'.$duoi]); ?></a></li>

                    <?php } ?>

                    <li><span> <?php echo $product_detail['name'.$duoi]?></span> </li>

                </ul>

            </div>

        </section>

        <section class="news-page">

            <div class="container">

                <?php if($product_detail['display']==3){ ?>

                <div class="video-i mg-20">

                       <?= $product_detail['link']?> 

                </div>

                <?php } ?>

                <div class="row">

                    <div class="col-md-9">

                        <div class="news-detail">

                             <h1 class="title-cate"><?php echo e($product_detail['name'.$duoi]); ?></h1>

                             <p class="upload mg-20"><?= $upload;?>: <?php echo e($product_detail['created_at']); ?></p>

                             <p class="desc">   

                             <?php echo $product_detail['content'.$duoi]?>

                             </p> 

                            <div class="box-contact relative">

                                <span class="title-content text-uppercase title-abs"><?php echo $thongtinlienhe;?></span>

                                    <?= $setting['slogan'.$duoi]?>

                            </div>

                            <p>
                            
                            <div id="fb-root"></div>
            
                            <script>(function(d, s, id) {

                              var js, fjs = d.getElementsByTagName(s)[0];

                              if (d.getElementById(id)) return;

                              js = d.createElement(s); js.id = id;

                              js.src = 'https://connect.facebook.net/<?php echo $lang_face?>/sdk.js#xfbml=1&version=v2.12&appId=465991187129638&autoLogAppEvents=1';

                              fjs.parentNode.insertBefore(js, fjs);

                            }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-comments" data-href="<?php echo e(asset($product_detail['alias'].'.'.$product_detail['id'].'.html')); ?>" data-width="100%" data-numposts="3"></div>

                            

                             </p>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="sticky-top">

                        <?php if($product_detail['display']!=3){ ?>

                            <div class="child-defe">

                                <h2 class="title-cate-child"><a href="" title="" class="blue-txt"><?php echo $baivietlienquan;?></a></h2>

                                <div class="news-item mgt-20">

                                 <?php

                                    foreach($product_khac as $k=>$item){

                                        if($k==0){

                                 ?>  

                                    <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">

                                        <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />

                                    </a>

                                    <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>

                                    <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>

                                    <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>

                                 <?php }} ?>  

                                    <ul class="mgt-20">

                                    <?php

                                        foreach($product_khac as $k=>$item){

                                            if($k>0){

                                     ?> 

                                        <li>

                                            <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>">

                                                <i class="fa fa-caret-right"></i>

                                                <?php echo e($item['name'.$duoi]); ?>


                                            </a>

                                        </li>

                                     <?php }} ?> 

                                    </ul>

                                </div>

                            </div>

                         <?php } ?>   

                            <?php echo $__env->make('templates.layout.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>