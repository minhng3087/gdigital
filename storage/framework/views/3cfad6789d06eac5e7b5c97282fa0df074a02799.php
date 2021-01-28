<?php $__env->startSection('content'); ?>
<?php $__env->startSection('controller','Quản lý ngành nghề'); ?>
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
    	<?php if(session('status')): ?>



        <div class="box-header">



            <h3 class="box-title alert_thongbao text-green"><?php echo e(session('status')); ?></h3>



        </div>



        <?php endif; ?>
        <div class="box-body">
        	<form method="post" action="backend/career/edit?id=<?php echo e($id); ?>" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
        		
      			<div class="row">
              		<div class="col-md-6 col-xs-12">
						<!-- <div class="form-group <?php if($errors->first('fImages')!=''): ?> has-error <?php endif; ?>">
							<div class="form-group">
								<img src="<?php echo e(asset('upload/hinhanh/'.$data->photo)); ?>" onerror="this.src='<?php echo e(asset('public/admin_assets/images/no-image.jpg')); ?>'" class="img-responsive"  alt="NO PHOTO" />
								<input type="hidden" name="img_current" value="<?php echo @$data->photo; ?>">
							</div>
							<label for="file">Chọn File ảnh</label>
					     	<input type="file" id="file" name="fImages" >
					    	<p class="help-block">Width:350px - Height: 250px</p>
					    	<?php if($errors->first('fImages')!=''): ?>
					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('fImages');; ?></label>
					      	<?php endif; ?>
						</div>-->
						<div class="clearfix"></div>
				    	<div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">
					      	<label for="ten">Tên</label>
					      	<input type="text" name="txtName" id="txtName" value="<?php echo e($data->name); ?>"  class="form-control" />
					      	<?php if($errors->first('txtName')!=''): ?>
					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>
					      	<?php endif; ?>
						</div>
						<div class="form-group">
					      	<label for="ten">Tên Eg</label>
					      	<input type="text" id="txtNameEn" name="txtNameEg" value="<?php echo e($data->name_eg); ?>"  class="form-control" />
						</div>
						<div class="form-group">
					      	<label for="ten">Tên Uae</label>
					      	<input type="text" id="txtNameUae" name="txtNameUae" value="<?php echo e($data->name_uae); ?>"  class="form-control" />
						</div>
						<div class="form-group">
					      	<label for="ten">Tên Taiwan</label>
					      	<input type="text" id="txtNameTai" name="txtNameTai" value="<?php echo e($data->name_tai); ?>"  class="form-control" />
						</div>
						<div class="form-group">
					      	<label for="ten">Tên Japan</label>
					      	<input type="text" id="txtNameJa" name="txtNameJa" value="<?php echo e($data->name_ja); ?>"  class="form-control" />
						</div>
						<!-- <div class="form-group">
					      	<label for="alias">Đường dẫn tĩnh</label>
					      	<input type="text" name="txtLink" id="txtLink" value="<?php echo e($data->link); ?>"  class="form-control" />
						</div> -->
						<!-- <div class="form-group">
					      	<label for="desc">Mô tả</label>
					      	<textarea name="txtDesc" rows="5" class="form-control"><?php echo e($data->mota); ?></textarea>
						</div> -->

					</div>
					<!-- <div class="col-md-6 col-xs-12">
						<div class="box box-info">
			                <div class="box-header">
			                  	<h3 class="box-title">Nội dung</h3>
			                  	<div class="pull-right box-tools">
				                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
				                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
				                </div>
			                </div>
			                <div class="box-body pad">
			        			<textarea name="txtContent" id="txtContent" cols="50" rows="5"><?php echo e($data->content); ?></textarea>
			        		</div>
			        	</div>
					</div> -->
				</div>
	            <div class="clearfix"></div>
	            <div class="row">
				    <div class="col-md-6">
				    	<div class="form-group">
						      <label for="ten">Số thứ tự</label>
						      <input type="number" min="1" name="stt" value="<?php echo isset($data->stt) ? $data->stt : (count($news)+1); ?>" class="form-control" style="width: 100px;">
					    </div>
					    
					    <div class="form-group">
						    <label>
					        	<input type="checkbox" name="status" <?php echo (!isset($data->status) || $data->status==1)?'checked="checked"':''; ?>> Hiển thị
					    	</label>
					    </div>
				    	
				    </div>
			    </div>
			    <div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Cập nhật</button>
					    	<button type="button" class="btn btn-danger" onclick="javascript:window.location='backend/career'">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>