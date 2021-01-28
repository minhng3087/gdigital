<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Thêm mới tài khoản '); ?>

<?php $__env->startSection('action','List'); ?>



<!-- Content Header (Page header) -->

<style type="text/css">

    #mginb input{

        margin-bottom: 10px;

    }

</style>

<section class="content-header">



  <h1>



   <small>Thêm mới tài khoản</small>



  </h1>



  <ol class="breadcrumb">



    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>



    <li><a href="javascript:">Thêm mới tài khoản</a></li>



  </ol>



</section>



<!-- Main content -->



<section class="content">



  



    <div class="box">



    	<?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



        <div class="box-body">



               <div class="col-md-6 col-xs-12" id="mginb">

                	<form  action="<?php echo url('backend/users/posuse'); ?>" name="frmRegister" method="post" class="form-group modal_frm">

                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                    <select name="level" class="form-control">
                      <option value="1">Quản trị admin</option>
                      <option value="3">Quản trị viên</option>
                    </select>
                		<input type="text" placeholder="Họ và tên"  name="name" required="required" class="form-control frm_user">

                		<input type="tel" placeholder="Điện thoại" name="phone" required="required" class="form-control frm_tel">

                		<input type="email" placeholder="Thư điện tử" name="email" required="required" class="form-control frm_email">

                       

                    <input type="text" placeholder="Tài khoản đăng nhập" name="username" required="required" class="form-control frm_user">

                		<input type="password" placeholder="Mật khẩu" name="password"  required="required" class="form-control frm_pw">

                        

                        <!------------------------>

                    

                        <!------------------------>

                        <p class="text-center" style="margin-top: 30px;"><button type="submit" class="btn text-uppercase frm_btn">Đăng ký</button></p>

                

                

                	</form>

                    </div>



        </div><!-- /.box-body -->



    </div><!-- /.box -->



    



</section><!-- /.content -->



<!-- Modal -->





<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>