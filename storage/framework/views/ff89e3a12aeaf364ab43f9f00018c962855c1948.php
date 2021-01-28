<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('img_share', $img_share); ?>

<?php $__env->startSection('content'); ?>

<?php

    $setting = Cache::get('setting');

?>
   <!-------------- danh muc pro duct cap 2 -------------------->
      <div class="container builder woocommerce padding-b30">


        <div class="mp-wrap">


            <div class="container container_pad">
                <div class="col-md2 ">
                    <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">

                        <li><a href="" target="_self">Trang chủ</a></li>


                        <li><a href="" target="_self">Tìm kiếm</a></li>


                    </ol>
                </div>
            </div>

            <div class="main-collection">

                <div class="sidebar-colletion">
                    <?php echo $__env->make('templates.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   
                    <div style="display: none; width: 340px; height: 243px; float: none;"></div>


                </div>

                <ul class="folio mpbox col3 current products-resize core-collection">

                  <?php foreach($product as $rows){?>  
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
                    <!-- end post -->
                 <?php } ?>   
                    <!-- end post -->

                </ul><!-- end latest posts section-->

              
                    <?php echo $product->links();?>


            </div>
            <div class="clearfix"></div>

            <!-- end latest -->

        </div>

    </div>
        
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>