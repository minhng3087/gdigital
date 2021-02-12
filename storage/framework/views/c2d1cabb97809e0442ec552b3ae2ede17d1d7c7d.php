<?php $__env->startSection('controller', 'Quà tặng sản phẩm' ); ?>
<?php $__env->startSection('controller_route', route('products.edit', request('id'))); ?>
<?php $__env->startSection('action', renderAction(@$module['action'])); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="clearfix"></div>
       	<?php echo $__env->make('backend.components.messages-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       	<form action="<?php echo updateOrStoreRouteRender( @$module['action'], $module['module'], @$data); ?>" method="POST">
       		<input type="hidden" name="id_product" value="<?php echo e(request('id')); ?>">
			<?php echo csrf_field(); ?>
			<?php if(isUpdate(@$module['action'])): ?>
		        <?php echo e(method_field('put')); ?>

		    <?php endif; ?>
		    <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#activity" data-toggle="tab" aria-expanded="true">Nội dung</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                    	<div class="row">
                    		<div class="col-sm-12">
                    			<div class="form-group">
                    				<label for="">Mô tả</label>
                    				<textarea class="content" name="desc"><?php echo old('desc', @$data->desc); ?></textarea>
                    			</div>
                    		</div>
                    	</div>
                    	<div class="form-group">
                    		<label for="">Loại</label>
                    		<select name="type" class="form-control" id="type">
                    			<option value="default" <?php echo e(@$data->type == 'default' ? 'selected' : null); ?>>Mặc định</option>
                    			<option value="options" <?php echo e(@$data->type == 'options' ? 'selected' : null); ?>>Lựa chọn</option>
                    		</select>
                    	</div>
                    	<div class="form-group" id="options-layout">
                    		<label for="">Lựa chọn</label>
                    		<div class="repeater" id="repeater">
				                <table class="table table-bordered table-hover product-gift">
				                    <thead>
					                    <tr>
					                    	<th style="width: 30px;">STT</th>
					                    	<th>Tiêu đề</th>
					                    	<th>Giá giảm ( Nếu có )</th>
					                    	<th style="width: 30px;"></th>
					                    </tr>
				                	</thead>
				                	<?php if(!empty($data->value)){
				                		$list_value = json_decode($data->value);
				                	} ?>
				                    <tbody id="sortable">
				                    	<?php if(!empty($list_value->list)): ?>
				                    		<?php $__currentLoopData = $list_value->list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                    			<?php echo $__env->make('backend.repeater.row-product-gift', ['index' => $loop->index + 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				                    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				                    	<?php endif; ?>
									</tbody>
				                </table>
				               	<div class="text-right">
				                    <button class="btn btn-primary" onclick="repeater(event,this,'<?php echo e(route('get.layout')); ?>','.index', 'product-gift', '.product-gift')">Thêm</button>
			                	</div>
				            </div>
                    	</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu lại</button>
                </div>
            </div>
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\m\resources\views/backend/product-gift/create-edit.blade.php ENDPATH**/ ?>