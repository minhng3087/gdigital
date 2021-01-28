<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>
<?php $__env->startSection('description', $description); ?>
<?php $__env->startSection('img_share', $img_share); ?>
<?php $__env->startSection('content'); ?>
<?php
    $setting = Cache::get('setting');
?>
<div class="cd-main-content about-page">

            <section class="banner-child text-center">

                <div class="container">

                        <h1 class="text-uppercase">Liên hệ</h1>

                        <p><img src="<?php echo e(asset('public/images/foot.png')); ?>" /></p>
    
                        <p><?php echo $setting->slogan;?></p>
                </div>

            </section>

            <section class="breadcrumbs">

                <div class="container">

                    <div class="breadcrumb-page">

                        <ul class="flex-center-start">

                            <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>

                            <li>Liên hệ</li>

                        </ul>

                    </div>

                </div>

            </section>
            <?php $lienhe = DB::table("about")->select()->where('com','lien-he')->first();?>
            <section class="contact pd-60">

                <div class="container">

                    <h2><?php echo e($lienhe->name); ?></h2>

                    <div class="row">

                       <?php echo $lienhe->content?>

                    </div>

                  
                    <form class="contact-form" action="<?php echo url('lien-he'); ?>" method="post" >
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                        <h4>Liên hệ với chúng tôi</h4>

                        <div class="row">

                            <div class="col-md-6">

                                <input type="text" name="name" placeholder="Họ tên *">

                                <input type="text" name="email" placeholder="Email *">

                                <input type="text" name="phone" placeholder="Số điện thoại *">

                            </div>

                            <div class="col-md-6">

                                <textarea cols="4" name="content" placeholder="Nội dung"></textarea>

                                <button type="submit" class="inflex-center-center">Gửi</button>

                            </div>

                        </div>

                    </form>

                </div>

            </section>

            <section class="map">

                <?php echo $setting->maps;?>

            </section>

            <section class="news-letter pd-60">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 offset-md-4">

                            <div class="form-newsletter flex-center-end">

                                <span>Đăng ký nhận tư vấn</span>

                                <form class="orm-contact" action="<?php echo url('dang-ky-ban-tin'); ?>" method="post" class="form-group modal_frm">

                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>

                                    <input type="text" name="email" placeholder="Email đăng ký nhận tin"/>

                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>