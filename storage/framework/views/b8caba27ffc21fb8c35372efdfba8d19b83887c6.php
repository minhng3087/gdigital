<?php $__env->startSection('controller', 'Danh mục tin tức' ); ?>
<?php $__env->startSection('controller_route', route('categories-post.index')); ?>
<?php $__env->startSection('action', 'Danh sách'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="clearfix"></div>
		<?php echo $__env->make('backend.messages_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
        	<div class="col-sm-5">
	        	<form action="<?php echo updateOrStoreRouteRender( @$module['action'], $module['module'], @$data); ?>" enctype="multipart/form-data" method="POST">
	        		<?php echo csrf_field(); ?>
					<?php if(isUpdate(@$module['action'])): ?>
				        <?php echo e(method_field('put')); ?>

				    <?php endif; ?>
	        		<div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Danh mục</a>
		                    </li>
		                    <li class="">
		                    	<a href="#setting" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
		                    </li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
								<div class="form-group">
									<label for="">Tên danh mục</label>
									<input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name', @$data->name)); ?>">
								</div>
								<div class="form-group">
									<label for="">Đường dẫn tĩnh</label>
									<input type="text" class="form-control" name="slug" id="slug" value="<?php echo e(old('slug', @$data->slug)); ?>">
								</div>
		                    </div>
		                    <div class="tab-pane" id="setting">
		                    	<div class="row">
		                    		<div class="col-sm-12">
		                    			<div class="form-group">
		                    				<label for="">Hình ảnh</label>
											<div class="image">
												<div class="image__thumbnail">
													<?php if($data['image']): ?>
													<img src="<?php echo e(asset('upload/post_category/'.$data['image'])); ?>" id="output" />
													<?php else: ?>
													<img src="<?php echo e(__IMAGE_DEFAULT__); ?>" id="output" />
													<?php endif; ?>
													<input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
												</div>
											</div>
										</div>
		                    		</div>
		                    		<div class="col-sm-12">
		                    			 <div class="form-group">
				                            <label>Title SEO</label>
				                            <input type="text" class="form-control" name="meta_title" value="<?php echo old('meta_title',  @$data->meta_title); ?>">
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Description</label>
				                            <textarea name="meta_description" id="" class="form-control" rows="5"><?php echo old('meta_description', @$data->meta_description); ?></textarea>
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Keyword</label>
				                            <input type="text" class="form-control" name="meta_keyword" value="<?php echo old('meta_keyword',@$data->meta_keyword); ?>">
				                        </div>
		                    		</div>
		                    	</div>
		                    </div>
		                    <button type="submit" class="btn btn-primary">Lưu lại</button>
		                </div>
		            </div>
	        	</form>
	        </div>
	    </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\m\resources\views/backend/categories-post/edit.blade.php ENDPATH**/ ?>