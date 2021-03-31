<?php $__env->startSection('controller', @$module['name'] ); ?>
<?php $__env->startSection('controller_route', route('category.index')); ?>
<?php $__env->startSection('action', renderAction(@$module['action'])); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="clearfix"></div>
		<?php echo $__env->make('backend.components.messages-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       	<form action="<?php echo e(updateOrStoreRouteRender( @$module['action'], $module['module'], @$data)); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<?php if(isUpdate(@$module['action'])): ?>
				<?php echo method_field('PUT'); ?>
		    <?php endif; ?>
		    <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#activity" data-toggle="tab" aria-expanded="true">Danh mục sản phẩm</a>
                    </li>
                    <li class="">
                    	<a href="#banner" data-toggle="tab" aria-expanded="true">Banner đầu trang</a>
                    </li>
                    <li class="">
                    	<a href="#banner-min" data-toggle="tab" aria-expanded="true">Banner nhỏ</a>
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
						<div class="form-group">
							<label for="">Danh mục cha</label>
							<select name="parent_id" class="form-control">
								<option value="0">Danh mục cha</option>
                               	<?php echo e(menuMulti( $categories , 0 , '' ,   old( 'parent_id', @$data->parent_id ))); ?>

							</select>
						</div>
                    </div>
                    <div class="tab-pane" id="setting">
                    	<div class="row">
                    		<div class="col-sm-2">
                    			<div class="form-group">
                    				<label for="">Hình ảnh</label>
                    				 <div class="image">
			                            <div class="image__thumbnail">
			                                <img src="<?php echo e(!empty(@$data->image) ? @$data->image : __IMAGE_DEFAULT__); ?>"
			                                     data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
			                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
			                                    <i class="fa fa-times"></i></a>
			                                <input type="hidden" value="<?php echo e(old('image', @$data->image)); ?>" name="image"/>
			                                <div class="image__button" onclick="fileSelect(this)">
			                                	<i class="fa fa-upload"></i>
			                                    Upload
			                                </div>
			                            </div>
			                        </div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <div class="tab-pane" id="banner">
                    	<div class="row">
			                <div class="col-sm-12">
								<div class="repeater" id="repeater">
					                <table class="table table-bordered table-hover">
					                    <thead>
						                    <tr>
						                    	<th style="width: 30px;">STT</th>
						                    	<th style="width: 200px">Hình ảnh</th>
						                    	<th>Nội dung</th>
						                    </tr>
					                	</thead>
					                    <tbody>
					                    	<?php if(!empty($data->meta_orthers)){
					                    		$meta_orthers = json_decode( $data->meta_orthers );
					                    	}
											?>
					                    	<?php for($i = 1; $i <= 3; $i++): ?>
												<tr>
													<td class="index"><?php echo e($i); ?></td>
													<td>
							                           <div class="image">
							                               <div class="image__thumbnail">
							                                   <img src="<?php echo e(!empty($meta_orthers->{ $i }->image) ? $meta_orthers->{ $i }->image : __IMAGE_DEFAULT__); ?>"  data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
							                                   <a href="javascript:void(0)" class="image__delete" 
							                                   onclick="urlFileDelete(this)">
							                                    <i class="fa fa-times"></i></a>
							                                   <input type="hidden" value="<?php echo e(@$meta_orthers->{ $i }->image); ?>" name="meta_orthers[<?php echo e($i); ?>][image]"  />
							                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
							                               </div>
							                           </div>
													</td>
													<td>
														<div class="form-group">
															<label for="">Tiêu đề banner</label>
															<input type="text" class="form-control" name="meta_orthers[<?php echo e($i); ?>][title]" value="<?php echo e(@$meta_orthers->{ $i }->title); ?>">
														</div>
														<div class="form-group">
															<label for="">Liên kết</label>
															<input type="text" class="form-control" name="meta_orthers[<?php echo e($i); ?>][link]" value="<?php echo e(@$meta_orthers->{ $i }->link); ?>">
														</div>
													</td>
												</tr>
											<?php endfor; ?>
					                    </tbody>
					                </table>
					            </div>
					        </div>
					    </div>
                    </div>
                    <div class="tab-pane" id="banner-min">
                    	<div class="row">
			                <div class="col-sm-8">
								<div class="repeater" id="repeater">
					                <table class="table table-bordered table-hover image-banner-min">
					                    <thead>
						                    <tr>
						                    	<th style="width: 30px;">STT</th>
						                    	<th style="width: 200px">Hình ảnh</th>
						                    	<th>Nội dung</th>
						                    	<th style="width: 40px"></th>
						                    </tr>
					                	</thead>
					                    <tbody>
					                    	<?php if(!empty($data->meta_banner)){
					                    		$meta_banner = json_decode( $data->meta_banner );
					                    	} 
											?>
					                    	<?php if(!empty($meta_banner->min)): ?>
					                    		<?php $__currentLoopData = $meta_banner->min; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                    			<?php 
														$index = $loop->index + 1 
													?>
					                    			<?php echo $__env->make('backend.repeater.row-image-banner-min', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					                    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                    	<?php endif; ?>
					                    </tbody>
					                </table>
					                <div class="text-right">
					                    <button class="btn btn-primary" 
							            	onclick="repeater(event,this,'<?php echo e(route('get.layout')); ?>','.index', 'image-banner-min', '.image-banner-min')">Thêm
							            </button>
					                </div>
					            </div>
					        </div>
					        <?php
					        	if(!empty($data->content_banner_big)){
					        		$content_banner_big = json_decode( $data->content_banner_big );
					        	}
					        ?>
					        <div class="col-sm-4">
					        	<div class="form-group">
					        		<label class="custom-checkbox">
										<input type="checkbox" name="is_using_banner_big" value="1" <?php echo e(@$data->is_using_banner_big == 1 ? 'checked' : null); ?>> Sử dụng banner dài
			                        </label>
					        	</div>
					        	<div class="form-group">
					        		<label for="">Banner dài</label>
					        		<div class="image">
		                               	<div class="image__thumbnail">
		                                   <img src="<?php echo e(!empty(@$content_banner_big->image) ? @$content_banner_big->image : __IMAGE_DEFAULT__); ?>"  data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
		                                   <a href="javascript:void(0)" class="image__delete" 
		                                   onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                   <input type="hidden" value="<?php echo e(@$content_banner_big->image); ?>" name="content_banner_big[image]"  />
		                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
		                               	</div>
		                           	</div>
					        	</div>
					        	<div class="form-group">
					        		<label for="">Liên kết banner dài</label>
					        		<input type="text" name="content_banner_big[link]" class="form-control" value="<?php echo e(@$content_banner_big->link); ?>">
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gdigital\resources\views/backend/category/create-edit.blade.php ENDPATH**/ ?>