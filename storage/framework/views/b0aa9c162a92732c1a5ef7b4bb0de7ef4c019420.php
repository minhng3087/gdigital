<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>
<?php $__env->startSection('description', $description); ?>
<?php $__env->startSection('img_share', $img_share); ?>

<?php
    $setting = Cache::get('setting');  
?>
<?php $__env->startSection('content'); ?>
<div class="cd-main-content">
    <section class="breadcrumb">
            <div class="container">
                <h2><?php echo e(@$product_detail->name); ?></h2>
                <ul class="flex-center-start">
                    <li><a href="<?php echo e(url('/')); ?>" ><i class="fa fa-home"></i> Trang chủ </a> </li>
                    <?php if(!empty($catpro)){?>
                    <li><a title="<?php echo e(@$catpro->name); ?>"><?php echo e(@$catpro->name); ?></a> </li>
                    <?php } ?>
                    <li><span><?php echo e(@$product_detail->name); ?></span> </li>
                </ul>
            </div>
        </section>

<?php if($product_detail->display == 3 ){?>
        <section class="product-detail pd-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 visible-desktop">
                        <div class="sticky-top">
                                <div class="product-cate">
                                    <ul>
                                        <?php 
                                            $relate=DB::table("products")->select('name','id','alias','photo')->where('display',3)->where('hot',1)->where('status',1)->orderBy('stt','asc')->get();
                                            $quan_tam=DB::table("products")->select('name','id','alias','photo')->where('display',3)->inRandomOrder()->where('status',1)->limit(5)->orderBy('stt','asc')->get();
                                            foreach($relate as $k=>$item_rl){
                                        ?>
                                        <li class="<?php if($k == 0){echo 'active';}?>"><a href="<?php echo e(url($item_rl->alias.'.'.$item_rl->id.'.html')); ?>" title="">
                                        <?php if(!empty($item_rl->photo)){?>
                                            <img src="<?php echo e(asset('upload/product/'.$item_rl->photo)); ?>" alt="<?php echo e($item_rl->name); ?>" title="<?php echo e($item_rl->name); ?>">
                                        <?php } ?> 
                                        <?php echo e($item_rl->name); ?></a> </li>
                                        <?php } ?> 
                                    </ul>
                                    <h5 class="mg-20">Bài viết tiêu biểu</h5>
                                    <?php
                                        
                                        foreach($lienket_ads as $m=>$ads1){
                                         if($m==0){   
                                    ?>
                                    <p>
                                        <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                    </a>
                                     </p>
                                    <?php }} ?>
                                </div>
                                <div class="mgt-20 visible-desktop">
                                <?php
                                    
                                    foreach($lienket_ads as $m=>$ads1){
                                        if($m>0){
                                ?>
                                    <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                    </a>
                                   <?php }}?> 
                                </div>
                            </div>
                    </div>
                    <div class="col-md-9">
                        <div class="pro-detail">
                            <h1 class="title-cate"><?php echo $product_detail->name;?> </h1>
                            <p class="border mg-20"></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-txt">
                                        <div class="product-index">
                                            <?php echo $product_detail->content;?>
                                        </div>
                                        <p class="mgt-20">
                                            <div class="fb-like" data-href="<?php echo e(asset($product_detail->alias.'.'.$product_detail->id.'.html')); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                         </p>
                                         <?php
                                
                                            foreach($lienket_ads_bot as $ads2){
                                               
                                        ?>
                                            <p class="mg-20">
                                                <a href="<?php echo e($ads2->link); ?>" title="<?php echo e($ads2->name); ?>">
                                                    <img src="<?php echo e(asset('upload/hinhanh/'.$ads2->photo)); ?>" alt="<?php echo e($ads2->name); ?>" title=""/>
                                                </a>
                                            </p>
                                           <?php }?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="pro-related">
            <div class="container">
                <div class="row">
                    <div class="col-lg offset-lg-3">
                        <h4 class="mgb-20">Có thể bạn quan tâm</h4>
                        <ul>
                            <?php
                                $relate_2=DB::table('products')->select('name','alias','id')->where('display',3)->inRandomOrder()->limit(8)->get();
                                foreach($relate_2 as $item_re){
                            ?>
                                <li><a href="<?php echo e(asset($item_re->alias.'.'.$item_re->id.'.html')); ?>" title="<?php echo $item_re->name;?>"><i class="fa fa-youtube-play"></i> <?php echo $item_re->name;?></a> </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 visible-mobile mg-20">
            <div class="sticky-top">
                <div class="product-cate">
                     <ul>
                        <?php 
                            foreach($relate as $k=>$item_rl){
                        ?>
                        <li class="<?php if($k == 0){echo 'active';}?>"><a href="<?php echo e(url($item_rl->alias.'.'.$item_rl->id.'.html')); ?>" title=""><img src="<?php echo e(asset('upload/product/'.$item_rl->photo)); ?>" alt="<?php echo e($item_rl->name); ?>" title="<?php echo e($item_rl->name); ?>"> <?php echo e($item_rl->name); ?></a> </li>
                        <?php } ?> 
                    </ul>
                    <h5 class="mg-20">Bài viết tiêu biểu</h5>
                    <?php
                        
                        foreach($lienket_ads as $m=>$ads1){
                         if($m==0){   
                    ?>
                    <p>
                        <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                        <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                    </a>
                     </p>
                    <?php }} ?>
                </div>
                <div class="mgt-20 visible-desktop">
                     <?php
                       foreach($lienket_ads as $m=>$ads1){
                       if($m>0){
                    ?>
                        <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                            <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                        </a>
                    <?php }}?> 
                </div>
            </div>
        </div>
<?php }elseif($product_detail->display == 2 && $catpro->views != 2){?>
    <?php echo $__env->make('templates.post.postdetail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php } else {?>
    <?php echo $__env->make('templates.post.post_project', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php } ?>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>