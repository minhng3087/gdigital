<?php $__env->startSection('controller', @$module['name'] ); ?>
<?php $__env->startSection('controller_route', route(@$module['module'].'.index')); ?>
<?php $__env->startSection('action', 'Cập nhật'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo $__env->make('backend.components.messages-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <form action="<?php echo e(route('product-attributes.update',@$data)); ?>" method="POST">
                	<?php echo csrf_field(); ?>
					<?php echo e(method_field('put')); ?>

                	<div class="row">
                		<div class="col-sm-12">
                			<div class="form-group">
			               		<label for="">Tên loại thuộc tính</label>
			               		<input type="text" name="name" class="form-control" required value="<?php echo e(@$data->name); ?>">
			               	</div>
			               	<div class="form-group">
			               		<label for="">Loại thuộc tính</label>
								<select name="type" class="form-control">
									<option value="color" <?php echo e(@$data->type == 'color' ? 'selected' : null); ?> >Color</option>
									<option value="input" <?php echo e(@$data->type == 'input' ? 'selected' : null); ?>>Options</option>
								</select>
			               	</div>
			               	<div class="form-group" style="display: none;">
			               		<label for="">Template (DEV)</label>
			               		<select name="template" class="form-control">
									<option value="color">input.color</option>
								</select>
			               	</div>
							<button  type="submit" class="btn-primary btn">Lưu lại</button>
                		</div>
                	</div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\m\resources\views/backend/product-attributes/edit.blade.php ENDPATH**/ ?>