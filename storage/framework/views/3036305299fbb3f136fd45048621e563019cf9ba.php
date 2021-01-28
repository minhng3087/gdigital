<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>
<?php $__env->startSection('description', $description); ?>
<?php $__env->startSection('img_share', $img_share); ?>

<?php
    $setting = Cache::get('setting');  
?>
<?php $__env->startSection('content'); ?>

<?php if($product_detail->display == 1 ){?>
    <div class="container container_alt padding-b30">

            <div class="product-all">

                <div class="pro-sidebar">

                  <?php echo $__env->make('templates.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <div style="display: none; width: 340px; height: 243px; float: none;"></div>





                </div>

                <div class="foliohead pr-title">

                    <h1><?php echo $product_detail->name;?></h1>

                    <div class="foliobarRight">

                        <div id="foliocontent-pro">

                            <div class="entry entry_item">

                                <!--light-slide-->

                                <div class="item">

                                    <div class="clearfix">

                                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">

                                            <?php 
                                                $imagesrows=DB::table('product_image')->where('product_id',$product_detail->id)->select()->get();
                                                foreach($imagesrows as $k=>$rows ){
                                                                                                          
                                            ?>
                                            <li data-thumb="<?php echo asset('uploads/images/img_detail/'.$rows->image); ?>" >
                                                <img src="<?php echo asset('uploads/images/img_detail/'.$rows->image); ?>" alt="<?php echo e($product_detail->name); ?>" />
                                             </li>
                                            <?php } ?> 


                                        </ul>

                                    </div>

                                    <div class="product-price" id="price-preview">

                                        Giá:  
                                         <?php if($product_detail->pricesale>0){?>
                                            <span><?php echo number_format($product_detail->pricesale)?>₫</span>
                                            <del><?php echo number_format($product_detail->price)?>₫</del>
                                        <?php }else{ ?>
                                            <span><?php echo number_format($product_detail->price)?>₫</span>
                                        <?php } ?>
                                        
                                    </div>

                                </div>



                                <div class="thich-pro">

                                    <div class="fb-like" data-href="<?php echo e(asset($product_detail->alias.'.'.$product_detail->id.'.html')); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>

                                </div>

                                <div id="fb-root"></div>

                                <script>(function(d, s, id) {

                                        var js, fjs = d.getElementsByTagName(s)[0];

                                        if (d.getElementById(id)) return;

                                        js = d.createElement(s); js.id = id;

                                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";

                                        fjs.parentNode.insertBefore(js, fjs);

                                    }(document, 'script', 'facebook-jssdk'));</script>



                            </div>



                            <div class="pro-description">

                                <?php echo $product_detail->content;?>

                            </div>



                        </div>

                        <div class="clearfix"></div>

                        <div class="title-other-pro"><h2>Sản Phẩm khác</h2></div>

                        <ul class="folio mpbox col4 current pro-other products-resize" >

                         <?php
                            foreach($product_khac as $rows){
                         ?>   
                                <li>
                                    <div class="item post tranz  product-resize">
                                        <div class="imgwrap image-resize">
            
                                         
                                             <a href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo $rows->name; ?>">
                                                 <img  src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" class="tranz grayscale grayscale-fade wp-post-image"alt="">
                                            </a>
                                            <a class="rad hoverstuff hoverstuff-link" href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>"><i class="fa fa-info-circle"></i></a>
                                            <div class="gia-pro-coll">
                                                <?php if($rows->pricesale>0){?>
                                                <span><?php echo number_format($rows->pricesale)?>₫</span>
                                                <del><?php echo number_format($rows->price)?>₫</del>
                                                <?php }else{ ?>
                                                <span><?php echo number_format($rows->price)?>₫</span>
                                                <?php } ?>
                                            </div>
                                        </div>
            
                                        <div class="item_inn tranz">
            
                                            <h2><a href="<?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a></h2>
                                            <p class="teaser tranz">
                                               <?php echo $rows->mota;?>
                                            </p>
            
                                        </div><!-- end .item_inn -->
            
            
                                    </div>
            
                                </li>
                         <?php } ?>       
                            <!-- end post -->


                            <!-- end post -->

                        </ul><!-- end latest posts section-->



                    </div>



                </div>

            </div>

        </div><!-- /.container -->
   
<?php }elseif($product_detail->display == 2){?>
     <div class="single single-post postid-471 single-format-standard upper">
                <div class="wrapper classic-header">
        
                    <div class="container container_pad" style="padding-top: 50px;">
                        <div class="col-md2 ">
                            <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
        
                                <li><a href="<?php echo e(url('/')); ?>" target="_self">Trang chủ</a></li>
        
        
                                <li><a href="" target="_self"><?php echo $product_detail->name?></a></li>
        
        
                            </ol>
                        </div>
                    </div>
                    <div class="container container_alt">
        
                        <div id="core">
        
                            <div class="post-471 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-iframe tag-timelapse tag-video">
        
                                <div class="postbarRight">
        
                                    <div id="content" class="eightcol-cont first">
                                        <div class="blogger aq_row">


                                    <div class="item normal tranz p-border ghost post-471 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-iframe tag-timelapse tag-video">

                                        <div class="heading">


                                            <p class="meta date tranz ">
                                                <?php echo $product_detail->created_at;?>    </p>

                                            <div class="clearfix"></div>

                                            <h1 class="entry-title"><?php echo $product_detail->name;?></h1>


                                        </div>

                                        <div class="item_inn tranz f-border ">

                                            <div class="entry" itemprop="text">
                                                <?php echo $product_detail->content;?>
                                                
                                            </div><!-- end .entry -->
                                            <div class="clearfix"></div>

                                        </div><!-- end .item_inn -->

                                    </div><!-- end .item .ghost -->
                                </div>
                                        
        
                                        <div class="clearfix"></div>
        
                                     
        
                                    </div>
                                        
                                    <div id="sidebar" class="fourcol woocommerce">
        
        
                                        <?php echo $__env->make('templates.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div style="display: none; width: 340px; height: 243px; float: none;"></div>
                                    </div><!-- #sidebar -->
                                </div><!-- end .sidebar_opt -->
                            </div>
                        </div>
                    </div><!-- /.container -->
                </div>
            </div>
<?php } ?>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>