<?php $__env->startSection('content'); ?>
<?php $__env->startSection('controller','Quản lý '.$trang); ?>
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
        	<form method="post" action="backend/customers/edit?mskh=<?php echo e($mskh); ?>" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
      			<div class="row">
				  <div class="col-md-6 col-xs-12">
					<div class="clearfix"></div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="ten">Mã số khách hàng</label>
							<input type="number" min="1000" name="mskh" value="<?php echo e(@$data->mskh); ?>" class="form-control" style="width: 100px;">
						</div>
						<div class="form-group">
							<label>
								<input type="checkbox" name="status" checked="checked"> Hiển thị
							</label>
						</div>
					</div>			    
	            	<div class="clearfix"></div>
			    	<div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">
				      	<label for="ten">Tên khách hàng</label>
				      	<input type="text" id="txtName" name="txtName" value="<?php echo e(@$data->name); ?>"  class="form-control" />
				      	<?php if($errors->first('txtName')!=''): ?>
				      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>
				      	<?php endif; ?>
					</div>
					<div class="form-group">
				      	<label for="email">Email</label>
				      	<input type="text" name="txtEmail" id="txtEmail" value="<?php echo e(@$data->email); ?>" class="form-control" />
					</div> 
					<div class="form-group">
				      	<label for="phone">Phone</label>
				      	<input type="text" name="txtPhone" id="txtPhone" value="<?php echo e(@$data->phone); ?>"  class="form-control" />
					</div>
				</div>
				</div>
	            <div class="clearfix"></div>
	            
			    <div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Cập nhật</button>
					    	<button type="button" class="btn btn-danger" onclick="javascript:window.location='backend/customers'">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>