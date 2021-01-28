<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>
<?php $__env->startSection('description', $description); ?>
<?php $__env->startSection('img_share', $img_share); ?>

<?php
    $setting = Cache::get('setting');  
?>

<?php $__env->startSection('content'); ?>
<?php if($product_detail->display == 1){?>

  <div class="cd-main-content">

            <section class="banner-child text-center">

                <div class="container">

                    <h1 class="text-uppercase"><?php echo e($catpro->name); ?></h1>

                    <p><img src="<?php echo e(asset('public/images/foot.png')); ?>" /></p>

                    <p><?php echo $setting->slogan;?></p>

                </div>

            </section>

            <section class="breadcrumbs">

                <div class="container">

                    <div class="breadcrumb-page">

                        <ul class="flex-center-start">
                            <?php @$cate_pro3=DB::table("product_categories")->select('name','id','alias','parent_id')->where('id',@$catpro->parent_id)->first();?>  
                            <?php @$cate_pro=DB::table("product_categories")->select('name','id','alias','parent_id')->where('id',@$cate_pro3->parent_id)->first();?>        
                            <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>
                            <li><a href="<?php if(@$cate_pro->alias != null){?><?php echo e(asset(@$cate_pro->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle(@$cate_pro->name.'.htm'))); ?> <?php } ?>"><?php echo e(@$cate_pro->name); ?></a></li>
                            <li><a href="<?php if(@$cate_pro3->alias != null){?><?php echo e(asset(@$cate_pro3->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle(@$cate_pro3->name.'.htm'))); ?> <?php } ?>"><?php echo e(@$cate_pro3->name); ?></a></li>
                            <li><?php echo e($catpro->name); ?></li>
                        </ul>

                    </div>

                </div>

            </section>

            <section class="product-detail">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="slider-img-product owl-carousel">

                                <div class="item">

                                    <a href="<?php echo asset('upload/product/'.$product_detail->photo); ?>" data-fancybox="images">

                                        <img src="<?php echo asset('upload/product/'.$product_detail->photo); ?>" alt="<?php $product_detail->photo?>" />

                                    </a>

                                </div>
                                <?php 
                                    $imagesrows=DB::table('product_image')->where('product_id',$product_detail->id)->select()->get();
                                    foreach($imagesrows as $rows ){
                                ?>
                                <div class="item">

                                    <a href="<?php echo asset('uploads/images/img_detail/'.$rows->image); ?>" data-fancybox="images">

                                        <img src="<?php echo asset('uploads/images/img_detail/'.$rows->image); ?>" alt="<?php $product_detail->photo?>" />

                                    </a>

                                </div>
                                <?php } ?>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="product-text">

                                <h2><?php echo e($product_detail->name); ?></h2>

                                <p><img src="images/like.png"> </p>

                                <p>Model: <?php echo e($product_detail->text1); ?></p>

                                <p>Tình trạng: <?php if($product_detail->tinhtrang == 1){ echo 'Còn hàng';}else{echo 'Hết hàng';}?></p>

                                <div class="price-pro">

                                    <?php echo number_format($product_detail->price)?> VNĐ

                                </div>

                                <ul>

                                    <?php echo $product_detail->mota?>

                                </ul>

                                <p class="tag">Tags:  
                                  <?php foreach($tag_product as $rows){
                                       $tag = DB::table('tag')->select()->where('id', $rows->tag_id)->get(); 
                                       foreach($tag as $row){
                                    ?>
                                        
                                        <a href="<?php echo e(asset($row->slug.'.tag')); ?>"><?php echo $row->name?></a> ,      
    
                                    <?php }} ?> 
                                
                                </p>

                            </div>

                        </div>

                    </div>

                    <p class="text-center"><a href="#id-1" title="" class="more">Xem thêm chi tiết <br/><img src="<?php echo e(asset('public/images/ar-down.png')); ?>" alt="Xem thêm" /> </a> </p>

                </div>

            </section>

            <section class="product-info pd-60" id="id-1">

                <div class="container">
                    <?php echo $product_detail->content?>
                   
                </div>

            </section>

            <section class="product-related">

                <div class="container">

                    <h5 class="re-title">Các sản phẩm liên quan</h5>

                </div>

                <div class="slider-product owl-carousel">
                    <?php $__currentLoopData = $product_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <div class="product-item">

                        <div class="product-image">

                            <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><img src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" alt="<?php echo e($rows->name); ?>" /> </a>

                        </div>

                        <h5><a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><?php echo e($rows->name); ?></a></h5>

                        <p><?php for($i=0;$i<$rows->sao;$i++){?> <i style="color: #f7e976;" class="fa fa-star" aria-hidden="true"></i> <?php } ?></p>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
           


                </div>

            </section>

            <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
<?php } else {?>
    <?php echo $__env->make('templates.post.postdetail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php } ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>