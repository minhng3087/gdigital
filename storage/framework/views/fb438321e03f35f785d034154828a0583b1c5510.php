<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>
<?php $__env->startSection('description', $description); ?>
<?php $__env->startSection('img_share', $img_share); ?>
<?php $__env->startSection('content'); ?>
<?php
    $setting = Cache::get('setting');
?>
<div class="cd-main-content">
     
        <section class="breadcrumb">
            <div class="container">
                <h2>Liên hệ</h2>
                <ul class="flex-center-start">
                    <li><a href="" title=""><i class="fa fa-home"></i> Trang chủ </a> </li>
                    <li><span>Liên hệ</span> </li>
                </ul>
            </div>
        </section>
        <section class="contact pd-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="title-cate">Liên hệ</h1>
                        <p class="border mg-20"></p>
                        <div class="company">
                            <?php echo $setting->content;?>
                        </div>
                        <form action="<?php echo e(url('lien-he')); ?>" method="POST" class="form-contact">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Họ tên <span>(*)</span></label>
                                    <input name="name" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label>Điện thoại</label>
                                    <input name="phone" type="number"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Email <span>(*)</span></label>
                                    <input name="email" type="email"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Địa chỉ</label>
                                    <input name="address" type="text"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Tiêu đề:</label>
                                    <input name="title" type="text"/>
                                </div>
                                <div class="col-md-12">
                                    <label>Nội dung</label>
                                    <textarea name="content"></textarea>
                                </div>
                            </div>
                            <button type="submit">Gửi liên hệ</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="map">
                            <?php echo $setting->maps?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>