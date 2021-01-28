<?php $__env->startSection('title', $title); ?>



<?php $__env->startSection('keyword', $keyword); ?>



<?php $__env->startSection('description', $description); ?>



<?php $__env->startSection('content'); ?>

<?php
   
   if(@$_SESSION['lang'] == 'vi'){
       $duoi = '';  
       @include('lang/vi.php');
    }elseif(@$_SESSION['lang'] == 'eg'){
       $duoi = '_eg'; 
       @include('lang/eg.php');
    }elseif(@$_SESSION['lang'] == 'uae'){
       $duoi = '_uae';
       @include('lang/uae.php');
    }elseif(@$_SESSION['lang'] == 'tai'){
       $duoi = '_tai';
       @include('lang/tai.php');
    }elseif(@$_SESSION['lang'] == 'ja'){
       $duoi = '_ja';
       @include('lang/ja.php');
    }else{
       $duoi = ''; 
       @include('lang/vi.php');      
    }



?>



<section class="gallery">

            <div class="container">

                <h1 class="title-cate"><?= $thuvienanh ?></h1>

                <div class="row">

                   <?php 

                    foreach($recument as $item){

                   ?> 

                    <div class="col-md-3 mgt-20">

                        <div class="relative">

                            <a href="<?php echo e(asset('upload/hinhanh/'.$item->photo)); ?>" data-fancybox="images">

                                <img src="<?php echo e(asset('upload/hinhanh/'.$item->photo)); ?>" alt="" title="">

                            </a>

                            <div class="gallery-abs absolute flex-center-center">

                                <img src="<?php echo e(asset('public/images/icon/icon-zoom.png')); ?>" alt="" title="">

                            </div>

                        </div>

                    </div>

                  <?php } ?>

                </div>

                <?php echo $recument->links();?>

            </div>

        </section> 

    

        

        <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>



    

    

    
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>