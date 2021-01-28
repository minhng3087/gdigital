<?php $__env->startSection('content'); ?>
<style type="text/css">

.page-404 {

    padding: 30px 0 60px 0;

}

.page-404 h1 {

    font-size: 270px;

    font-weight: 900;

    color: #358ccc;

    line-height: 250px;margin-top: 0px;

}

.page-404 h2 {

    font-size: 36px;

    font-weight: 500;

    margin-bottom: 10px;

}

.page-404 p {

    font-size: 24px;

}

.page-404 p {

    font-size: 24px;

}

</style>

<section class="page-404">

    <div class="container">

        <div class="text-center">

            <h1>404</h1>

            <h2>Oops !  Trang bạn tìm kiến hiện không tìm thấy</h2>

            <p>Vui lòng lựa chọn chuyên mục khác</p>

            <p>Quay về <a href="<?php echo e(url('/')); ?>" style="color: red;">trang chủ</a></p>

        </div>

    </div>

</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>