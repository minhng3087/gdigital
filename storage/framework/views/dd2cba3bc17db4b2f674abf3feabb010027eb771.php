<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('img_share', $img_share); ?>

<?php $__env->startSection('content'); ?>
 <?php
    use App\ProductCate;
    use App\Products;
    
?>

<?php
     if(@$_SESSION['lang'] == 'vi'){
       $duoi = '';  
       @include('lang/vi.php');
    } elseif(@$_SESSION['lang'] == 'eg'){
       $duoi = '_eg'; 
       @include('lang/eg.php');
    } elseif(@$_SESSION['lang'] == 'uae'){
       $duoi = '_uae';
       @include('lang/uae.php');
    } elseif(@$_SESSION['lang'] == 'tai'){
       $duoi = '_tai';
       @include('lang/tai.php');
    }else{
       $duoi = ''; 
       @include('lang/vi.php');      
    }
    
?>
<!---------------->
 <section class="breadcrumb">
            <div class="container">
                <ul class="flex-center-start">
                    <li><a href="<?php echo e(url('/')); ?>" title="<?php echo $home;?>"><i class="fa fa-home"></i> <?php echo $home;?> </a> </li>
                  
                    <li><span> <?php echo $seach;?> </span> </li>
                </ul>
            </div>
        </section>
<section class="news-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <section class="news-cate-child">
                            <h1 class="title-cate-child"><a class="blue-txt"><?php echo $seach;?></a></h1>
                            <div class="news-gr">
                              <?php
                                
                                foreach($product as $k=>$item){
                                if($k == 0){
                              ?>  
                                <div class="news-item mgt-20">
                                    <div class="row">
                                        <div class="col-md-4">
                                             <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">
                                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a> </h5>
                                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>
                                            <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>
                                            <p class="mgt-20"><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-italic blue-txt">Xem thêm &gt;&gt;</a> </p>
                                        </div>
                                    </div>
                                </div>
                              <?php } else { ?>  
                                <div class="news-item mgt-20">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="zoom">
                                                <img src="<?php echo e(asset('upload/product/'.$item['photo'])); ?>" alt="<?php echo e($item['name'.$duoi]); ?>" />
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <h5><a href="<?php echo e(asset($item['alias'].'.'.$item['id'].'.html')); ?>" title="<?php echo e($item['name'.$duoi]); ?>" class="font-weight-bold"><?php echo e($item['name'.$duoi]); ?></a></h5>
                                            <p class="upload">Upload: <?php echo e($item['created_at']); ?></p>
                                            <p class="desc"><?php echo e($item['mota'.$duoi]); ?></p>
                                        </div>
                                    </div>
                                </div>
                             <?php }} ?> 
                               
                            </div>
                        </section>
                        <section class="pagi">
                            <?php echo $product->links();?>
                        </section>
                    </div>
                    <div class="col-md-3">
                        <div class="sticky-top">
                            <div class="child-defe">
                                <h2 class="title-cate-child"><a class="blue-txt"><?php echo $tinmoi;?></a></h2>
                                <div class="news-item mgt-20">
                                   <?php
                                   
                                    
                                   
                                    @$post_new_right=Products::select('name','name_eg','name_uae','name_tai','alias','id','mota','mota_eg','mota_uae','mota_tai','photo','created_at')->where('display',2)->where('status',1)->orderBy('id','desc')->limit(4)->get();
                                    foreach($post_new_right as $k=>$item){
                                    if($k == 0){
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
                                            foreach($post_new_right as $k=>$item){
                                            if($k > 0){
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
                            <?php echo $__env->make('templates.layout.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>