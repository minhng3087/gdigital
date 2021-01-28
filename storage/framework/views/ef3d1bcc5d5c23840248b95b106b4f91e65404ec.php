<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('img_share', $img_share); ?>

<?php $__env->startSection('content'); ?>

<?php
    $setting = Cache::get('setting');
?>
<div class="cd-main-content">

        <section class="banner visible-desktop">

            <div class="container">

                <div class="relative">

                    <div class="banner-slider owl-carousel">

                         <?php echo $__env->make('templates.layout.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
                      
                    </div>

                </div>

            </div>

        </section>

        <section class="banner-mobile visible-mobile">

            <div class="container">

                <div class="relative">

                    <div class="banner-slider owl-carousel">

                        <?php echo $__env->make('templates.layout.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div>

                </div>

            </div>

        </section>

        <section class="about-index">

            <div class="container">

                <div class="about-inner">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="about-txt">
                                  <?php echo $setting->slogan; ?>      
                            </div>

                        </div>

                        <div class="col-md-4">

                            <p class="text-center flex-center-between">

                                <img src="<?php echo e(asset('public/images/banner/cl-1.png')); ?>" alt="bao-hanh-10-nam" /> 

                                <img src="<?php echo e(asset('public/images/banner/cl-2.png')); ?>" alt="SGS" title=""/> 

                                <img src="<?php echo e(asset('public/images/banner/cl-3.png')); ?>" alt="STEEL" title=""/>

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <?php
            foreach($product_post as $row){
            $post_pro=DB::table("products")->select('name','id','alias','photo','mota')->where('cate_id',$row->id)->where('status',1)->limit(2)->orderBy('stt','asc')->get();    
        ?>
        <section class="pro-ser pdb-60">

            <div class="container">

                <h2 class="title-page"><?= $row->name ?></h2>

                <div class="row">
                    <?php foreach($post_pro as $rows){?>
                    <div class="col-md-6">

                        <div class="item-ser">

                            <a class="zoom" href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo e($rows->name); ?>"><img src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" alt="<?php echo e($rows->name); ?>" /> </a>

                            <div class="text-ser">

                                <h6><a href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo e($rows->name); ?>"><?= _substr($rows->name,500)?></a> </h6>

                                <p class="border mgb-20"></p>

                                <p><?= _substr($rows->mota,200)?></p>

                            </div>

                        </div>

                    </div>
                    <?php } ?>
              
                </div>

            </div>

        </section>
        <?php } ?>


        <section class="why-choose pdb-60">

            <div class="container">

                <h2 class="title-page">LÝ DO CHỌN CỌC BÊ TÔNG CƯỜNG LỰC</h2>

                <div class="row">

                 <?php
                    foreach($lienket_lydo as $m=>$item){
                 ?>   
                    <div class="col-md-3">

                        <div class="why-item text-center">
                            <?php if(!empty($item->photo)){?>    
                            <p><img src="<?php echo e(asset('upload/hinhanh/'.$item->photo)); ?>" alt="<?php echo e($item->name); ?>" /> </p>
                            <?php } ?>
                            <h4 class="<?php if($m > 0){?>counter<?php } ?>"><?php echo e($item->name); ?></h4>

                            <p class="text-left"><?php echo e($item->mota); ?></p>

                        </div>

                    </div>
                <?php } ?>

                </div>

                <div class="banner-ads">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-4 no-pdr">

                                <div class="bannerAds-slider owl-carousel">
                                     <?php
                                        foreach($lienket_videos as $item_videos){
                                     ?>   
                                    <div class="item">

                                        <div class="ad-img">
                                          <?php if(!empty($item_videos->photo)){?>    
                                                <img src="<?php echo e(asset('upload/hinhanh/'.$item_videos->photo)); ?>" alt="<?php echo e($item_videos->name); ?>" /> 
                                            <?php } ?>
                                        </div>

                                        <div class="caption">

                                            <h3><?php echo e($item_videos->name); ?> </h3>

                                            <p class="desc"><?= _substr($item_videos->mota,500) ?></p>

                                        </div>

                                    </div>
                                    <?php } ?>
                                </div>

                            </div>

                            <div class="col-md-8 no-pdl">

                                <?php echo $videos->content; ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="project-top">

            <div class="container">

                <div class="pj-inner">

                    <h2 class="title-page">CÁC DỰ ÁN TIÊU BIỂU</h2>

                    <div class="pj-slider owl-carousel">

                    <?php
                        foreach($post_tieubieu as $item_tb){
                    ?>
                        <div class="item pj-item">

                            <a class="zoom" href="<?php echo e(asset($item_tb->alias.'.'.$item_tb->id.'.html')); ?>" title="<?php echo e($item_tb->name); ?>"><img src="<?php echo e(asset('upload/product/'.$item_tb->photo)); ?>" alt="<?php echo e($item_tb->name); ?>" /> </a>

                            <h5><a href="<?php echo e(asset($item_tb->alias.'.'.$item_tb->id.'.html')); ?>" title="<?php echo e($item_tb->name); ?>"><?php echo e($item_tb->name); ?></a> </h5>

                            <p><?php echo e($item_tb->mota); ?></p>

                            <p><a href="<?php echo e(asset($item_tb->alias.'.'.$item_tb->id.'.html')); ?>" title="Xem dự án">Xem dự án ></a> </p>

                        </div>
                    <?php } ?>        

                    </div>

                </div>

            </div>

        </section>

        <section class="custommer pd-60 ">

            <div class="container">

                <h2 class="title-page">KHÁCH HÀNG SỬ DỤNG ?</h2>

                <div class="cus-inner cus-slider owl-carousel">
                    <?php
                        foreach($lienket_user as $item_kh){
                    ?>
                    <div class="cus-item">

                        <div class="cus-content">

                            <?php if(!empty($item_kh->photo)){?>    
                                <img src="<?php echo e(asset('upload/hinhanh/'.$item_kh->photo)); ?>" alt="<?php echo e($item_kh->name); ?>" /> 
                            <?php } ?>

                            <p><?php echo $item_kh->mota ?></p>

                        </div>

                        <p class="cus-name"><span><?php echo $item_kh->name ?>,</span> <?php echo $item_kh->name2 ?></p>

                    </div>
                   <?php } ?> 
                </div>

            </div>

        </section>

        <section class="news-index">

            <div class="container">

                <div class="news-inner">

                    <div class="row">

                        <div class="col-md-8">
                          <?php
                            foreach($cate_exp as $item_exp){
                            $post_pro=DB::table("products")->select('name','id','alias','photo','mota')->where('cate_id',$item_exp->id)->where('display',2)->where('status',1)->limit(7)->orderBy('stt','asc')->get();   
                          ?>  
                            <div class="news-content">

                                <h2 class="title-page"><?php echo $item_exp->name; ?></h2>

                                <div class="row">

                                    <div class="col-md-7">
                                      <?php foreach($post_pro as $k=>$item_post_exp){
                                        if($k==0){  
                                      ?>  
                                        
                                        <div class="news-main">

                                            <a class="zoom" href="<?php echo e(asset($item_post_exp->alias.'.'.$item_post_exp->id.'.html')); ?>" title="<?php echo e($item_post_exp->name); ?>"><img src="<?php echo e(asset('upload/product/'.$item_post_exp->photo)); ?>" alt="<?php echo e($item_post_exp->name); ?>" /> </a>

                                            <h6><a href="<?php echo e(asset($item_post_exp->alias.'.'.$item_post_exp->id.'.html')); ?>" class="font-weight-bold"><?php echo e($item_post_exp->name); ?></a> </h6>

                                            <p><?php _substr($item_post_exp->mota,500)?></p>

                                        </div>
                                      <?php }} ?>  
                                    </div>

                                    <div class="col-md-5">

                                        <div class="news-plus">

                                            <ul>
                                                 <?php foreach($post_pro as $k=>$item_post_exp){
                                                    if($k > 0){  
                                                  ?>  
                                                        <li><a href="<?php echo e(asset($item_post_exp->alias.'.'.$item_post_exp->id.'.html')); ?>" title="<?php echo e($item_post_exp->name); ?>"><?php echo e($item_post_exp->name); ?></a> </li>
                                                 <?php }} ?>   
              
                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>
                           <?php } ?> 
                        </div>

                        <div class="col-md-4">

                            <div class="fanpage text-right">
                                <!---------->
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=465991187129638&autoLogAppEvents=1';
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                                
                                <div class="fb-page" data-href="<?php echo $setting->links1?>" data-tabs="timeline" data-width="342" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo $setting->links1?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $setting->links1?>">Vĩnh Tường - Trần nhà đẹp</a></blockquote></div>
                                <!---------->
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>  

<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>