<?php $__env->startSection('content'); ?>





<style type="text/css">

#signup-box {

    width: 320px;

    margin: 0 auto;

    background: #fcfcfc;

    border-radius: 3px;

    margin-top: 40px;

    border: 1px solid #e1e1e1;

    padding: 0 15px;

}

@media  only screen and (min-width: 768px)

{

#signup-box {

    width: 480px;

    padding: 0 30px;

    padding-bottom: 30px;

}

}

@media  only screen and (min-width: 480px)

{

#signup-box {

    width: 400px;

    padding: 0 30px;

    padding-bottom: 30px;

}

}

#signup-box .gate-id-form {

    margin-top: 10px;

}

.signup-text-form {

    font-size: 18px;

    color: #444;

    text-align: left;

    margin-top: 25px;

    padding-bottom: 10px;

}

#frm-error-2 {

    margin-bottom: 20px;

    color: #ca2a2a;

}

#signup-box .gate-id-form .text-field {

    width: 100%;

    border: 1px solid #e1e1e1;

    border-radius: 3px;

    margin-bottom: 10px;

    height: 35px;

    padding: 0px 20px;

}

.submit-bt-gate-id {

    outline: none;

    border: none;

    background: #e5a200;

    color: #fff;

    padding: 10px 20px;

}

@media  only screen and (min-width: 480px)

{

.submit-bt-gate-id {

    margin-top: 20px;

    margin-bottom: 10px;

    display: inline-block;

    width: auto;

    width: auto;

    margin-left: 0;

    margin-top: 15px;

}}

.pupn{

    padding: 50px 0px 0px 0px;text-align: center;

}









</style>





<div class="container">

    <div class="pupn">

        <?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>

        <div id="signup-box">

             

            <form class="gate-id-form" id="frm-getpass-step1" action="<?php echo route('postguimatkhau'); ?>" method="POST">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

            <h3 class="signup-text-form">Quên mật khẩu</h3>

            <p style="text-align:left; color:#666;">Nhập thông tin của bạn để tìm lại mật khẩu</p>

            <div id="frm-error-2"></div>

               <input class="text-field" placeholder="Tài khoản đăng nhập"  name="username" required="" type="text"  autocomplete="off">

                <input class="text-field" placeholder="Email"  name="email" required="email" autocomplete="off">

               

                 <input type="submit" name="submit" id="submit" value="Tiếp tục" class="button-3d submit-bt-gate-id"/>

            </form>

        </div><!--  end sign-up-box -->

    

</div>









<?php $__env->stopSection(); ?>




<?php echo $__env->make('layerpass', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>