

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Cập nhật tài khoản'); ?>

<?php $__env->startSection('action','Edit'); ?>

<!-- Content Header (Page header) -->

<section class="content-header">

  <h1>

   	<?php echo $__env->yieldContent('controller'); ?>

    <small><?php echo $__env->yieldContent('action'); ?></small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>

    <li><a href="javascript:"><?php echo $__env->yieldContent('controller'); ?></a></li>

    <li class="active"><?php echo $__env->yieldContent('action'); ?></li>

  </ol>

</section>

<!-- Main content -->

<section class="content">

  

    <div class="box">

    	<?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="box-body">

        	<form method="post" action="backend/users/updateinfo" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

          		<div class="row">

              		<div class="col-md-6 col-xs-12">

						<div class="form-group <?php if($errors->first('fImages')!=''): ?> has-error <?php endif; ?>">

							<div class="form-group">

								<img src="<?php echo e(asset('upload/users/'.$data->photo)); ?>" onerror="this.src='<?php echo e(asset('public/admin_assets/images/no-image.jpg')); ?>'" width="200"  alt="NO PHOTO" />

								<input type="hidden" name="img_current" value="<?php echo @$data->photo; ?>">

							</div>

							<label for="file">Chọn File ảnh</label>

					     	<input type="file" id="file" name="fImages" >

					    	<p class="help-block">Width:225px - Height: 162px</p>

					    	<?php if($errors->first('fImages')!=''): ?>

					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('fImages');; ?></label>

					      	<?php endif; ?>

						</div>

						

						<div class="clearfix"></div>

						<div class="form-group">

					      	<label for="ten">Username</label>

					      	<input type="text" disabled value="<?php echo e($data->username); ?>"  class="form-control" />

						</div>

						<div class="form-group <?php if($errors->first('txtPassword')!=''): ?> has-error <?php endif; ?>">

					      	<label for="ten">Password</label>

					      	<input type="password" name="txtPassword" value=""  class="form-control" />

					      	<?php if($errors->first('txtPassword')!=''): ?>

					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtPassword');; ?></label>

					      	<?php endif; ?>

						</div>

						<div class="form-group <?php if($errors->first('txtPasswordNew')!=''): ?> has-error <?php endif; ?>">

					      	<label for="ten">Password mới</label>

					      	<input type="password" name="txtPasswordNew" value=""  class="form-control" />

					      	<?php if($errors->first('txtPasswordNew')!=''): ?>

					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtPasswordNew');; ?></label>

					      	<?php endif; ?>

						</div>

						<!-- <div class="form-group <?php if($errors->first('txtRePassword')!=''): ?> has-error <?php endif; ?>">

					      	<label for="ten">Nhập lại password mới</label>

					      	<input type="password" name="txtRePassword" value=""  class="form-control" />

					      	<?php if($errors->first('txtRePassword')!=''): ?>

					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtRePassword');; ?></label>

					      	<?php endif; ?>

						</div> -->

				    	<div class="form-group  <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">

					      	<label for="ten">Họ tên</label>

					      	<input type="text" name="txtName" value="<?php echo e($data->name); ?>"  class="form-control" />

					      	<?php if($errors->first('txtName')!=''): ?>

					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>

					      	<?php endif; ?>

						</div>

						<div class="form-group">

					      	<label for="alias">Email</label>

					      	<input type="email" name="txtEmail" id="txtEmail" value="<?php echo e($data->email); ?>"  class="form-control" />

						</div>

						<div class="form-group">

					      	<label for="alias">Điện thoại</label>

					      	<input type="text" name="txtPhone" id="txtPhone" value="<?php echo e($data->phone); ?>"  class="form-control" />

						</div>

						<div class="form-group">

					      	<label for="alias">Địa chỉ</label>

					      	<input type="text" name="txtAddress" id="txtAddress" value="<?php echo e($data->address); ?>"  class="form-control" />

						</div>



					</div>

					<div class="col-md-6 col-xs-12"></div>

				</div>

			    <div class="clearfix"></div>

			    <div class="box-footer">

			    	<div class="row">

						<div class="col-md-6">

					    	<button type="submit" class="btn btn-primary">Cập nhật</button>

					    	<button type="button" class="btn btn-danger" onclick="javascript:window.location='backend'">Thoát</button>

				    	</div>

			    	</div>

			  	</div>

		    </form>

        </div><!-- /.box-body -->

    </div><!-- /.box -->

    

</section><!-- /.content -->

<?php $__env->stopSection(); ?>





<!-- <script language="javascript" src="media/scripts/my_script.js"></script>

<script language="javascript">

function js_submit(){

	if(isEmpty(document.frm.username, "Chưa nhập tên đăng nhập.")){

		return false;

	}

	

	if(isEmpty(document.frm.oldpassword, "Chưa nhập mật khẩu cũ.")){

		return false;

	}

	

	if(!isEmpty(document.frm.new_pass) && document.frm.new_pass.value.length<5){

		alert("Mật khẩu phải nhiều hơn 4 ký tự.");

		document.frm.new_pass.focus();

		return false;

	}

	

	if(!isEmpty(document.frm.new_pass) && document.frm.new_pass.value!=document.frm.renew_pass.value){

		alert("Nhập lại mật khẩu mới không chính xác.");

		document.frm.renew_pass.focus();

		return false;

	}

	

	if(!isEmpty(document.frm.email) && !check_email(document.frm.email.value)){

		alert('Email không hợp lệ.');

		document.frm.email.focus();

		return false;

	}

}

</script> -->


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>