<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('keyword', $keyword); ?>

<?php $__env->startSection('description', $description); ?>

<?php $__env->startSection('img_share', $img_share); ?>

<?php $__env->startSection('content'); ?>
<section class="header-register relative">

        <div class="container relative">

            <div class="hotline-abs absolute">

                <!--<a href="" title="">18001218</a>-->

                <!--<p>Tổng đài tư vẫn miễn phí</p>-->

                <a href="" title="">

                    <img src="<?php echo e(asset('public/images/banner/dky-2.png')); ?>" alt="" title="">

                </a>

            </div>

            <div class="row">

                <div class="col-md-4 offset-md-5 col-lg-4 offset-lg-4">

                    <ul class="flex-center">

                        <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>

                        <li><a href="<?php echo e(url('gioi-thieu')); ?>" title="Về chúng tôi">Về chúng tôi</a> </li>

                        <li><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">LIÊN HỆ</a> </li>

                    </ul>

                </div>

            </div>

        </div>

        <a href="" title="" class="absolute-b absolute">

            <img src="<?php echo e(asset('public/images/banner/dky-1.png')); ?>" alt="" title="">

        </a>

    </section>

    <div class="cd-main-content">

        <section class="registry pd-60">

            <div class="container">

                <h2 class="text-right title-i">TƯ VẤN TẬN NHÀ</h2>

                <h1 class="text-right title-i">TRAO QUÀ TẬN TAY</h1>

                <div class="row">

                    <div class="col-lg-5 offset-lg-7">

                       <form action="<?php echo e(url('dang-ky-tu-van')); ?>" method="POST" class="form-contact">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>

                            <h6>đăng ký nhận tư vấn</h6>

                            <div class="form-g">

                                <label>Họ tên</label>

                                <input name="name" type="text">

                                <label>Số điện thoại</label>

                                <input name="phone" type="text">

                                <label>Email</label>

                                <input name="email" type="text">

                                <button type="submit">ĐĂNG KÝ NHẬN TƯ VẤN</button>

                                <p>Thông tin bạn cung cấp sẽ được bảo mật theo chính sách bảo mật của Công ty (*)</p>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </section>

        <section class="criteria">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <div class="crit-item flex-center">

                            <img src="<?php echo e(asset('public/images/banner/dky-4.png')); ?>" alt="" title="">

                            <div class="crit-txt">

                                <p>Lựa chọn giải pháp thi công </p>

                                <p class="text-uppercase font-weight-bold">SẢN PHẨM CHẤT LƯỢNG CHÍNH HÃNG<br/>

                                    CỌC BÊ TÔNG - CƯỜNG LỰC</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="crit-item flex-center">

                            <img src="<?php echo e(asset('public/images/banner/dky-5.png')); ?>" alt="" title="">

                            <div class="crit-txt">

                                <p>Lựa chọn giải pháp thi công </p>

                                <p class="text-uppercase font-weight-bold">CHUYÊN NGHIỆP &<br/>

                                    PHÙ HỢP VỚI NGÔI NHÀ</p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="text-center">

                    <a href="" title="" class="btn-res text-uppercase">ĐĂNG KÝ NHẬN TƯ VẤN MIỄN PHÍ</a>

                </div>

            </div>

        </section>

    </div>



    <nav id="cd-lateral-nav" class=" visible-mobile">

        <ul class="cd-navigation nav-dropdown">

            <li><a href="<?php echo e(url('/')); ?>" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a> </li>
            <li><a href="<?php echo e(url('gioi-thieu')); ?>" title="Về chúng tôi">Về chúng tôi</a> </li>
            <li><a href="<?php echo e(url('lien-he')); ?>" title="Liên hệ">LIÊN HỆ</a> </li>

        </ul>

    </nav>

    <!--Link js-->

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('dangkytuvan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>