<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('img_share', $img_share); ?>

<?php $__env->startSection('content'); ?>

<?php
    $setting = Cache::get('setting');
?>

<div class="wrapper classic-header">

    <div class="container container_alt">

        <div id="aq-template-wrapper-4345" class="aq-template-wrapper aq_row">

            <div id="aq-block-4345-1" class="aq-block aq-block-aq_flexslider_block aq_span12 aq-first clearfix">

            </div>

        </div>

    </div>
    <div class="mainflex flexslider  no_margin">
        <div class="loading-inn"><i class="fa fa-cog fa-spin"></i></div>
        <ul class="slides">
            <?php echo $__env->make('templates.layout.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
        </ul>

    </div>
    <div class="clearfix"></div>
    <div class="container_alt builder woocommerce">

        <div>

            <div>

            </div>

            <div id="aq-block-4345-2" class="aq-block aq-block-aq_mp_services aq_span12 aq-first clearfix">

                <div class="widgetwrap widgetwrap-alt">

                    <div class="block_bg" style="background-color:#efefef;"></div>

                    <div class="container builder woocommerce" style="padding:60px 0;">

                        <div class="mp-wrap">

                            <ul class="mpbox col3 modern boxed">
                                <?php
                                    foreach($chatluong as $item){
                                ?>
                                <li class="mp-services tranz ">

                                    <div class="mp-inner tranz">

                                        <h3>

                                            <img width="64" height="64" src="<?php echo e(asset('upload/hinhanh/'.$item->photo)); ?>" class="attachment-service-thumb size-service-thumb wp-post-image" alt="<?php echo $item->name?>">
                                            <?php echo $item->name?>
                                        </h3>



                                        <p><?php echo $item->mota?></p>



                                    </div>



                                </li>
                                <?php } ?>
                            </ul>

                        </div>

                        <div class="clearfix"></div>



                    </div>



                </div>

            </div>

            <div id="aq-block-4345-3" class="aq-block aq-block-aq_text_block_full aq_span12 aq-first clearfix">

            </div>

        </div>

    </div>
    <div class="widgetwrap widgetwrap-alt text-full"

         style="padding:100px 0;color:#ffffff !important;background-color:#000000;background-image:url(images/steak.jpg) !important;">



        <h2 class="container block mau_chu_sl">

            <span class="maintitle banner_title">Cám ơn quý khách đã ghé thăm nhà hàng</span>
            <span class="subtitle"><?php echo $setting->slogan;?></span>
        </h2>





    </div>
    <div class="container_alt builder woocommerce">



    </div>
    <div id="aq-block-4345-4" class="aq-block aq-block-aq_folio_classic aq_span12 aq-first clearfix">





        <div class="widgetwrap widgetwrap-alt">



            <div class="block_bg" style="background-color:#fff;"></div>



            <div class="container builder woocommerce" style="padding:60px 0;">





                <div class="mp-wrap">



                    <script>

                        $(document).ready(function () {

                            $('.tabs li:first-child a').addClass('active')

                        });

                    </script>



                    <div id="portfolio-filter" class="clearfix ">



                        <ul class="tabs">




                           <?php
                            foreach($product_post as $k=>$item_cate){
                           ?>     
                            <li class="cat-item" data-tab="#tab-<?php echo $k;?>"><a class="<?php if($k == 0){ echo 'active';}?>" href="#"><?php echo $item_cate->name;?></a>

                            </li>
                            <?php } ?>




                        </ul>

                    </div>

                    <!--Nhom 1-->
                    <?php 
                        foreach($product_post as $k=>$item_cate){
                        $product_home=DB::table("products")->select('name','id','alias','photo','mota','pricesale','price')->where('cate_id',$item_cate->id)->where('status',1)->limit(8)->orderBy('id','desc')->get();    
                    ?> 
                        <ul class="folio mpbox col3  products-resize <?php if($k == 0){ echo 'current';}?>"  id="tab-<?php echo $k;?>">
                             <?php
                                foreach($product_home as $k=>$item){
                             ?> 
                             <li>
                                <div class="item post tranz  product-resize">
                                    <div class="imgwrap image-resize">
                                        <a href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo e($item->name); ?>">
                                            <img src="<?php echo e(asset('upload/product/'.$item->photo)); ?>"
    
                                                 class="tranz grayscale grayscale-fade wp-post-image"
    
                                                 alt="<?php echo $item->name;?>">
    
                                        </a>
                                        <a class="rad hoverstuff hoverstuff-link" href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo e($item->name); ?>"><i class="fa fa-info-circle"></i></a>
                                        <div class="gia-pro-tab">
                                            <span><?php echo number_format($item->price)?>₫</span>
                                            <del><?php echo number_format($item->pricesale)?>₫</del>
                                        </div>
    
                                    </div>
                                    <div class="item_inn tranz">
                                        <h2><a href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></a></h2>
                                        <p class="teaser tranz">
    
                                            <?php echo $item->mota;?>
    
                                        </p>
                                    </div><!-- end .item_inn -->
    
                                </div>
                            </li>
                            <?php } ?>    
                            <!-- end post -->
    
                        </ul><!-- end latest posts section-->
                        <?php } ?>
                    <div class="clearfix"></div>



                    <!-- end latest -->



                </div>



            </div>

        </div>

    </div>

    <!--Tab-home page-->

    <script>

        $(document).ready(function () {



            $('ul.tabs li a').click(function (e) {

                e.preventDefault();

                $('ul.tabs li a').removeClass('active');

                $(this).addClass('active');

                var tab_id = $(this).parent().attr('data-tab');





                $('ul.folio').removeClass('current');

                $('ul.folio').addClass('hidden-tab');



                //$(this).addClass('current');

                $(tab_id).addClass('current');

                $(tab_id).removeClass('hidden-tab');

                setTimeout(function () {

                    jQuery($script.attr('data-img-box')).imagesLoaded(function () {

                        fixheightimage();

                    }, 1000);



                });

            })



        })

    </script>



    <div class="widgetwrap widgetwrap-alt text-full text-action"

         style="padding:60px 0;color:#ffffff !important;background-color:#000000;background-image:url(images/steak2.jpg) !important;">



        <div class="container builder woocommerce" style="padding:60px 0;">

            <h2 class="block block-action mau_chu_sl">

                <span class="maintitle banner_title">Nhất là tươi sống!</span><br>

                <span class="subtitle">Chef chỉ sử dụng những nguyên liệu tươi ngon và mùa nhất trong cách đơn giản và sáng tạo nhất.</span>

            </h2>
            <a href="<?php echo e(url('lien-he')); ?>" class="morebutton rad actionbutton" href="">Đặt lịch <i class="fa fa-chevron-right"></i></a>

        </div>

    </div>


    <div class="container_alt builder woocommerce">

        <div>

            <div>

            </div>

            <div id="aq-block-4345-6" class="aq-block aq-block-aq_mp_testimonials aq_span12 aq-first clearfix">

                <div class="widgetwrap widgetwrap-alt">

                    <div class="block_bg" style="background-color:#ededed;"></div>
                 <?php
                    $nhandinh=DB::table('product_categories')->select('id','name')->where('display',2)->where('parent_id',0)->where('noibat',1)->where('status',1)->limit(2)->orderBy('stt','asc')->get();
                    foreach($nhandinh as $nd){
                    $list_nd=DB::table("products")->select('name','id','alias','photo','mota')->where('cate_id',$nd->id)->where('status',1)->where('display',2)->limit(3)->orderBy('id','desc')->get();
                 ?>   
                    <div class="container builder woocommerce" style="padding:60px 0;">

                        <h2 class="block">
                            <span class="maintitle title_big_color"><?php echo $nd->name;?></span>
                        </h2>
                        <div class="mp-wrap">

                            <ul class="mpbox col3  ">
                              <?php foreach($list_nd as $item_nd){?>  
                                <li class="mp-testimonials tranz ">

                                    <div class="mp-inner tranz">
                                        <a href="<?php echo e(asset($item_nd->alias.'.'.$item_nd->id.'.html')); ?>" title="<?php echo e($item_nd->name); ?>"><img width="100" height="100" src="<?php echo e(asset('upload/product/'.$item_nd->photo)); ?>" class="attachment-testi-thumb size-testi-thumb wp-post-image"/></a>
                                        <div class="testi-inner">
                                            <div class="testi-content mp-rad">
                                                <p><?php echo e($item_nd->mota); ?></p>
                                            </div>
                                            <div class="testi-meta mp-rad">
                                                <h4>
                                                    <a href="#"><?php echo e($item_nd->name); ?></a>
                                                </h4>
                                                <p></p>

                                            </div>

                                        </div>

                                    </div>

                                </li>
                              <?php } ?>  

                            </ul>

                        </div>

                        <div class="clearfix"></div>



                    </div>
                <?php } ?>
                

                </div>

            </div>

            <div id="aq-block-4345-7" class="aq-block aq-block-aq_blog_classic aq_span12 aq-first clearfix">



                <div class="widgetwrap widgetwrap-alt">



                    <div class="block_bg" style="background-color:#fff;"></div>
                <?php
                    $nhatky=DB::table('product_categories')->select('id','name')->where('display',2)->where('parent_id',0)->where('home',1)->where('status',1)->limit(2)->orderBy('stt','asc')->get();
                    foreach($nhatky as $nd){
                    $list_ky=DB::table("products")->select('name','id','alias','photo','mota','created_at')->where('cate_id',$nd->id)->where('status',1)->where('display',2)->limit(3)->orderBy('id','desc')->get();
                 ?>
                    <div class="container builder woocommerce" style="padding:60px 0;">
                        <h2 class="block">
                            <span class="maintitle title_big_color"><?php echo $nd->name?> </span>
                            <span class="subtitle">Nhật ký mà thích ăn, nhiếp ảnh và công thức nấu ăn</span>
                        </h2>
                        <div class="mp-wrap">
                            <ul class="homeblog mpbox col3 products-resize">
                              <?php foreach($list_ky as $item_y){?>    
                                <li class="product-resize">



                                    <div class="item normal tranz post-1118 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-politics tag-quote ">

                                        <div class="entryhead ">

                                            <div class="imgwrap image-resize ">
       
                                                <a class="imglink" href="<?php echo e(asset($item_y->alias.'.'.$item_y->id.'.html')); ?>" title="<?php echo e($item_y->name); ?>">

                                                    <img src="<?php echo e(asset('upload/product/'.$item_y->photo)); ?>"

                                                         class="tranz grayscale grayscale-fade wp-post-image"

                                                         alt="<?php echo e($item_y->name); ?>"/>

                                                </a>

                                            </div>

                                        </div><!-- end .entryhead -->
                                        <div class="item_inn tranz">
                                            <p class="meta date tranz ">
                                               <?php echo e($item_y->created_at); ?> </p>
                                            <div class="clearfix"></div>
                                            <h2 class="mau-blog"><a href="<?php echo e(asset($item_y->alias.'.'.$item_y->id.'.html')); ?>" title="<?php echo e($item_y->name); ?>"><?php echo e($item_y->name); ?></a></h2>
                                            <p class="teaser tranz"><?php echo $item_y->mota;?></p>
                                            <p class="meta_more">
                                                <a href="<?php echo e(asset($item_y->alias.'.'.$item_y->id.'.html')); ?>">Đọc thêm</a>
                                            </p>
                                        </div><!-- end .item_inn -->



                                    </div>

                                </li>
                              <?php } ?>  
                            </ul><!-- end latest posts section-->



                            <div class="clearfix"></div>





                        </div>



                    </div>
                  <?php } ?>  


                </div>



            </div>

        </div>





        <div class="clearfix"></div>





    </div><!-- /.container -->





 



</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>