<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('content'); ?>

<?php

    $setting = Cache::get('setting');

    //$cate_product = Cache::get('cate_product'); 

?>

<!---------------------------------->

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
                            <?php @$cate_pro3=DB::table("product_categories")->select()->where('id',@$catpro->parent_id)->first();?>  
                            <?php @$cate_pro=DB::table("product_categories")->select()->where('id',@$cate_pro3->parent_id)->first();?>        
                            <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>
                            <li><a href="<?php if(@$cate_pro->alias != null){?><?php echo e(asset(@$cate_pro->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle(@$cate_pro->name.'.htm'))); ?> <?php } ?>"><?php echo e(@$cate_pro->name); ?></a></li>
                            <li><a href="<?php if(@$cate_pro3->alias != null){?><?php echo e(asset(@$cate_pro3->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle(@$cate_pro3->name.'.htm'))); ?> <?php } ?>"><?php echo e(@$cate_pro3->name); ?></a></li>
                            <li><?php echo e($catpro->name); ?></li>
                        </ul>

                    </div>

                </div>

            </section>

            <section class="product-child pd-60">

                <div class="container">

                    <div class="row">

                        <div class="col-md-3">

                            <div class="product-nav  sticky-top">

                                <ul>
                                    <?php 
                                        $cat_product = DB::table('product_categories')->select()->where('parent_id',$cate_pro->id)->get(); 
                                        foreach($cat_product as $rows){
                                        $cat_product_min = DB::table('product_categories')->select()->where('parent_id',$rows->id)->get(); 
                                    ?>
                                    <li class="item-has-children">

                                        <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name.'.htm'))); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><?php echo e($rows->name); ?></a>

                                        <span class="arrow"><img src="<?php echo e(asset('public/images/cd-arrow.svg')); ?>" /></span>

                                        <ul class="sub-menu" style="display: none;">
                                            <?php
                                                foreach($cat_product_min as $row){
                                            ?>
                                                    <li class="active"><a href="<?php if($row->alias != null){?><?php echo e(asset($row->alias.'.'.$row->id.'.htm')); ?> <?php } else { ?><?php echo e(asset(changeTitle($row->name.'.'.$row->id.'.htm'))); ?> <?php } ?>"><?php echo e($row->name); ?></a> </li>
                                            <?php } ?>

                                        </ul>

                                    </li>
                                    <?php } ?>
                                   

                                </ul>

                            </div>

                        </div>

                        <div class="col-md-9">

                            <div class="product-list">

                                <div class="flex-center-between title-list">

                                    <h2><?php echo e($catpro->name); ?></h2>

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

                                <p><?php $cate_pro3->content?></p>
                                
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