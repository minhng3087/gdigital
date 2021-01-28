
<?php $__env->startSection('content'); ?>
<div class="cd-main-content">

    <section class="login-form">

        <div class="container">

            <div class="row">

                <div class="col-md-4 offset-md-4">

                    <h1 class="text-center">Đăng nhập</h1>

                    <form class="login-form" name="frm_contact" method="post" action="<?php echo url('dang-nhap'); ?>">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

                        <input type="text" name="username" placeholder="Mã NTD">

                        <input type="password" name="password" placeholder="Mật khẩu">

                        <div class="group-checkbox">

                            <label>

                                <input type="checkbox">

                                <span>Ghi nhớ tài khoản</span>

                            </label>

                        </div>

                        <p><a href="<?php echo e(asset('dang-ky')); ?>" title="">Đăng ký tài khoản mới</a> </p>

                        <p class="text-center"><button type="submit" class="btn-bg">Đăng nhập</button> </p>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>