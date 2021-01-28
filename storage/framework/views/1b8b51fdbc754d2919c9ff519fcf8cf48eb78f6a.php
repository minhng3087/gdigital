<?php $__env->startSection('content'); ?>

<div class="cd-main-content">

        <section class="breadcrumb">

            <div class="container">

                <h2>Về chúng tôi</h2>

                <ul class="flex-center-start">

                    <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Trang chủ </a> </li>

                    <li><span>Về chúng tôi</span> </li>

                </ul>

            </div>

        </section>

        <section class="about-us pd-60">

            <div class="container">

                <div class="row">

                    <div class="col-md-3">

                        <div class="sticky-top">

                             <?php 
                                foreach($lienket_ads as $m=>$ads1){
                                if($m==0){
                              ?>
                                <a href="<?php echo e($ads1->link); ?>" title="<?php echo e($ads1->name); ?>">
                                    <img src="<?php echo e(asset('upload/hinhanh/'.$ads1->photo)); ?>" alt="<?php echo e($ads1->name); ?>" title=""/>
                                </a>
                               <?php }}?> 

                        </div>

                    </div>

                    <div class="col-md-9">

                        <div class="about">
                            <?php echo $about->content;?>

                            <h2 class="text-uppercase mg-20 about-title">Chất lượng của chúng tôi?</h2>

                            <div class="row">
                                <?php $link=DB::table("lienket")->select()->where('com','chat-luong')->orderBy('stt','asc')->get();
                                foreach($link as $rows){
                                ?>
                                    <div class="col-md-4 col-6">
                                        <?php if(!empty($rows->photo)){?>
                                            <img src="<?php echo e(asset('upload/hinhanh/'.$rows->photo)); ?>" alt="<?php echo $rows->name;?>" />
                                        <?php } ?>    
                                        <p class="mg-20"><?php echo $rows->name;?></p>
    
                                    </div>
                                <?php } ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>