<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('img_share', $img_share); ?>

<?php $__env->startSection('content'); ?>

<?php
    $setting = Cache::get('setting');
?>
   <div class="cd-main-content">

            <section class="banner relative">

                <div class="banner-slider owl-carousel">
                    <?php $slide=DB::table("slider")->select()->where('com','hinh-anh')->where('status',1)->get();
                          $slogan_slide=DB::table("about")->select()->where('com','slogan')->where('status',1)->first();  
                          $product=DB::table("products")->select('id','name','sao','alias','photo')->where('noibat',1)->where('status',1)->where('display',1)->limit(12)->get();  
                          $news=DB::table("products")->select('id','name','sao','alias','photo','created_at','mota')->where('status',1)->where('noibat',1)->where('display',2)->limit(12)->get();  
                            
                        foreach($slide as $row){
                     ?>
                    <div class="item">
                        <img src="<?php echo e(asset('upload/hinhanh/'.$row->photo)); ?>" alt="<?php echo $row->name?>"/>
                    </div>
                    <?php } ?>
                   

                </div>

                <div class="absolute">

                    <div class="container height-100">

                        <div class="row height-100">

                            <div class="col-md-5 height-100">

                                <div class="banner-text flex-center-center height-100">

                                    <div class="text-center">

                                        <h1 class="text-uppercase wow fadeInDown" data-wow-delay="0.4s"><?php echo e($slogan_slide->name); ?></h1>

                                        <p class="text-center"><img src="<?php echo e(asset('upload/hinhanh/'.@$slogan_slide->photo)); ?>" alt="<?php echo e($slogan_slide->name); ?>" /> </p>

                                        <img src="images/product-1.png" alt="" title="" class="mg-25 wow fadeInUp" data-wow-delay="0.8s">

                                        <p class="banner-desc wow fadeInUp" data-wow-delay="1.2s"><?php echo e($slogan_slide->mota); ?></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <section class="product-list pd-60">

                <div class="container">

                    <h2 class="title-index text-uppercase">Dòng sản phẩm của chúng tôi</h2>

                    <div class="product-slider owl-carousel text-center">
                        <?php foreach($product as $rows){?>
                        <div class="item wow fadeInDown" data-wow-delay="0.4s">

                            <div class="product-image relative">

                                <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><img src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" alt="<?php echo e($rows->name); ?>" /> </a>

                                <img src="<?php echo e(asset('public/images/shadow.png')); ?>" alt="" title="" class="shadow-abs"/>

                            </div>

                            <h5 class="text-uppercase"><a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><?php echo e($rows->name); ?></a></h5>        
                            <p><?php for($i =0 ; $i > $rows->sao;$i++ ){?><img src="<?php echo e(asset('public/images/star.png')); ?>" alt="" title="">  <?php } ?></p>
                        </div>
                       <?php } ?>  
                    </div>

                </div>

            </section>

            <section class="news-list pd-60">

                <div class="container">

                    <h2 class="title-index text-uppercase">Tin tức - sự kiện</h2>

                    <div class="news-slider owl-carousel">
                        <?php foreach($news as $rows){?>
                        <div class="news-item wow fadeInLeft" data-wow-delay="0.4s">

                            <a class="zoom" href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><img src="<?php echo e(asset('upload/product/'.$rows->photo)); ?>" alt="<?php echo e($rows->name); ?>" />
                                 <span class="bor"></span>
                            </a>

                            <h4>
                                <a href="<?php if($rows->alias != null){?><?php echo e(asset($rows->alias.'.'.$rows->id.'.html')); ?> <?php } else { ?><?php echo e(asset(changeTitle($rows->name).'.'.$rows->id.'.html')); ?> <?php } ?>" title="<?php echo e($rows->name); ?>"><?php echo e($rows->name); ?></a>

                            </h4>
                            <p class="time">
                               <?php echo $rows->created_at; ?>
                            </p>
                            <p><?php echo $rows->mota; ?></p>
                        </div>
                       <?php } ?> 

                    </div>

                </div>

            </section>
            <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      

        </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>