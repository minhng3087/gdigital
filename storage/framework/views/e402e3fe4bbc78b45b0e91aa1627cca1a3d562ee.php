<?php $__env->startSection('content'); ?>
<?php $__env->startSection('controller','Quản lý '.$trang); ?>
<?php $__env->startSection('action','Add'); ?><!-- Content Header (Page header) -->
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
        <h2>Khách hàng <?php echo e(@$customer->name); ?></h2>
        	<form name="frmAdd" method="post" action="<?php echo route('backend.customers.postAddHistory', @$customer->mskh); ?>" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
          		<div class="col-md-6 col-xs-12">
	            	<div class="clearfix"></div>
			    	<div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">
				      	<label for="ten">Tên dịch vụ</label>
				      	<input type="text" id="txtName" name="txtName" value=""  class="form-control" />
				      	<?php if($errors->first('txtName')!=''): ?>
				      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>
				      	<?php endif; ?>
					</div>
					<div class="form-group">
				      	<label for="txtPosition">Vị trí răng</label>
				      	<input type="text" name="txtPosition" id="txtPosition"   class="form-control" />
					</div> 
					<div class="form-group">
				      	<label for="txtAmount">Số lượng</label>
				      	<input type="text" name="txtAmount" id="txtAmount"   class="form-control" />
					</div>
                    <div class="form-group">
				      	<label for="txtDate">Ngày thực hiện</label>
				      	<input type="date" name="txtDate" id="txtDate"   class="form-control" />
					</div>
                    <div class="form-group">
				      	<label for="txtPeriod">Thời gian bảo hành</label>
				      	<input type="text" name="txtPeriod" id="txtPeriod"   class="form-control" />
					</div>
				</div>
				<div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Lưu</button>
					    	<button type="button" onclick="javascript:window.location='backend/customers/show/<?php echo e(@$customer->mskh); ?>'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>