<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>
<?php $__env->startSection('description', $description); ?>
<?php $__env->startSection('content'); ?>
<?php
    $setting = Cache::get('setting');
?>

<!---------------------------------->

<div class="cd-main-content">

            <section class="banner-child text-center">

                <div class="container">

                    <h1 class="text-uppercase"><?php foreach($tag as $t){ $nametag=$t->name;} echo $nametag;?></h1>

                    <p><img src="<?php echo e(asset('public/images/foot.png')); ?>" /></p>

                    <p><?php echo $setting->slogan;?></p>

                </div>

            </section>

            <section class="breadcrumbs">

                <div class="container">

                    <div class="breadcrumb-page">

                         <ul class="flex-center-start">
                            <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>
                            <li><?php echo e($nametag); ?></li>
                        </ul>

                    </div>

                </div>

            </section>

            <section class="product-child pd-60">

                <div class="container">

                    <div class="row">

                     

                        <div class="col-md-12">

                            <div class="product-list">

                                <div class="flex-center-between title-list">

                                    <h2><?php echo e($nametag); ?></h2>

                                    <div class="filter">

                                        <span>Tìm sản phẩm</span>

                                         <select onchange="location = this.options[this.selectedIndex].value;">

                                            <option >- Lọc sản phẩm -</option>
                                            <option <?php if(@$_GET['new']=='desc'){ echo 'selected'; }?> value="?new=desc">Mới nhất</option>
                                            <option <?php if(@$_GET['new']=='asc'){ echo 'selected'; }?> value="?new=asc">Cũ nhất</option>
                                            <option <?php if(@$_GET['order']=='asc'){ echo 'selected'; }?> value="?order=asc">Giá cao nhất</option>
                                            <option <?php if(@$_GET['order']=='desc'){ echo 'selected'; }?> value="?order=desc">Giá thấp nhất</option>
                                        </select>

                                    </div>

                                </div>

                              
                                <div class="product-lists">
                                  
                                    <div class="row">
                                        <?php
                                       
                                         
                                       
                                        foreach($product as $pr){
                                         ?>
                                        <div class="col-md-3">

                                            <div class="product-item">

                                                <div class="product-image">

                                                    <a href="<?php if($pr->alias != null){?><?php echo e(asset($pr->alias.'.'.$pr->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($pr->name).'.'.$pr->id.'.html')); ?> <?php } ?>" title="<?php echo e($pr->name); ?>"><img src="<?php echo e(asset('upload/product/'.$pr->photo)); ?>" alt="<?php echo e($pr->name); ?>" /> </a>

                                                </div>

                                                <h5><a href="<?php if($pr->alias != null){?><?php echo e(asset($pr->alias.'.'.$pr->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($pr->name).'.'.$pr->id.'.html')); ?> <?php } ?>" title="<?php echo e($pr->name); ?>"><?php echo e($pr->name); ?></a> </h5>

                                                <p><?php for($i=0;$i<$pr->sao;$i++){?> <i style="color: #f7e976;" class="fa fa-star" aria-hidden="true"></i> <?php } ?></p>

                                            </div>

                                        </div>
                                        <?php } ?>    
                                    </div>

                                </div>
                             
                                <div class="pagination">

                                    <ul class="flex-center-start">

                                       <?php echo $product->links()?>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
   

<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>