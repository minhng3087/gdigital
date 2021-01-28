<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>
<?php $__env->startSection('description', $description); ?>
<?php $__env->startSection('content'); ?>
<?php
    $setting = Cache::get('setting');
?>
<div class="main-content cd-main-content">
 
    <section class="banner-ser slider">

        <div class="container">

           <?php echo $__env->make('templates.layout.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>

    </section>

    <h2 class="title-index text-center">

         <?php echo e($catpro->name); ?>

    </h2>

    <section class="bar-block">

            <div class="owl-carousel owl-theme bar-slider">

            <?php foreach($slidelk as $row) {?>

                <div class="bar-item">

                    <img src="<?php echo e(asset('upload/hinhanh/'.$row->photo)); ?>" alt="<?php echo $row->name; ?>" />

                    <div class="bar-abs">

                        <div class="container">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="room-vip">

                                        <?php echo $row->mota?>

                                    </div>

                                </div>

                                <div class="col-md-6 col-flex">

                                    <a href="#" title="Đặt phòng">

                                        Đặt phòng

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
              <?php } ?>  

            </div>

        </section>

<?php foreach($catproc2 as $rows){?>
    <section class="room-list room-double">

                <h2 class="title-index text-center">

                    <?php echo e($rows->name); ?>

                </h2>

                <div class="container">

                    <div class="row">
                
                      <?php
                        $product = DB::table('products')->select()->where('cate_id','=',$rows->id)->paginate(6);
                       foreach($product as $row){?>

                        <div class="col-md-4 custom-col-md">

                             <div class="room-details">

                                <a class="product-photo" href="<?php echo asset($row->alias.'.html'); ?>">

                                    <img src="<?php echo e(asset('upload/product/'.$row->photo)); ?>" alt="<?php echo e($row->name); ?>" />

                                </a>

                                <div class="detail-content">

                                    <div class="product-item-info">

                                        <h4 class="product-name">

                                            <a href="<?php echo asset($row->alias.'.html'); ?>"><?php echo e($row->name); ?></a>

                                        </h4>

                                        <p class="price-wrap">Giá : <?php echo e($row->price); ?></p>

                                        <p class="acreage">Diện tích phòng : <?php echo e($row->dientich); ?></p>

                                    </div>

                                    <div class="details">

                                        <a href="<?php echo asset($row->alias.'.html'); ?>" title="Chi tiết">Chi tiết</a>

                                    </div>

                                </div>

                            </div>

                        </div>
                     <?php } ?>   
                    </div>

                

                </div>

            </section>
    <?php } ?>
    

</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>