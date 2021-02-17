<?php $__env->startSection('controller','Trang'); ?>
<?php $__env->startSection('controller_route',route('pages.list')); ?>
<?php $__env->startSection('action','Danh sách'); ?>
<?php $__env->startSection('content'); ?>
	 <?php if(!empty($data->content)){
		$content = json_decode($data->content);

	} ?>
	<div class="content">
		<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               	<?php echo $__env->make('backend.components.messages-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               	<form action="<?php echo e(route('pages.build.post')); ?>" method="POST">
					<?php echo e(csrf_field()); ?>

					<input name="type" value="<?php echo e($data->type); ?>" type="hidden">

	               	<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="">Trang</label>
								<input type="text" class="form-control" value="<?php echo e($data->name_page); ?>" disabled="">
				 				
								<?php if(\Route::has($data->route)): ?>
									<h5>
										<a href="<?php echo e(route($data->route)); ?>" target="_blank">
					                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
					                        Link: <?php echo e(route($data->route)); ?>

					                    </a>
									</h5>
				                <?php endif; ?>
							</div>
							
						</div>
					</div>
					<div class="nav-tabs-custom">
				        <ul class="nav nav-tabs">
				        	<li class="active">
				            	<a href="#setting" data-toggle="tab" aria-expanded="true">Danh mục</a>
				            </li>
				            <li class="">
				            	<a href="#seo" data-toggle="tab" aria-expanded="true">Cấu hình trang</a>
				            </li>

				        </ul>
				    </div>
				    <div class="tab-content">
				    	<div class="tab-pane active" id="setting">
				    		<div class="row">
				    			<div class="col-sm-12">
				    				<div class="repeater" id="repeater">
					    				<label for="">Chọn danh mục</label>
					    				<table class="table table-bordered table-hover category">
						                    <thead>
							                    <tr>
							                    	<th style="width: 30px;">STT</th>
							                    	<th>Danh mục</th>
							                    	<th style="width: 20px"></th>
							                    </tr>
						                	</thead>
						                    <tbody id="sortable">
												<?php if(!empty($content->category)): ?>
													<?php $__currentLoopData = $content->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php $index = $loop->index + 1;?>
														<?php echo $__env->make('backend.repeater.row-category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>
						                    </tbody>
						                </table>
						                <div class="text-right">
						                    <button class="btn btn-primary" 
								            	onclick="repeater(event,this,'<?php echo e(route('get.layout')); ?>','.index', 'category', '.category')">Thêm
								            </button>
						                </div>
						            </div>
				    			</div>
				    		</div>
				    	</div>
			            <div class="tab-pane" id="seo">
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
			                           <label>Hình ảnh</label>
			                           <div class="image">
			                               <div class="image__thumbnail">
			                                   <img src="<?php echo e($data->image ?  $data->image : __IMAGE_DEFAULT__); ?>"  
			                                   data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
			                                   <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
			                                    <i class="fa fa-times"></i></a>
			                                   <input type="hidden" value="<?php echo e(@$data->image); ?>" name="image"  />
			                                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
			                               </div>
			                           </div>
			                       </div>
								</div>
								
								<div class="col-sm-10">
									<div class="form-group">
										<label for="">Tiêu đề trang</label>
										<input type="text" name="meta_title" class="form-control" value="<?php echo e(@$data->meta_title); ?>">
									</div>
									<div class="form-group">
										<label for="">Mô tả trang</label>
										<textarea name="meta_description" 
										class="form-control" rows="5"><?php echo @$data->meta_description; ?></textarea>
									</div>
									<div class="form-group">
										<label for="">Từ khóa</label>
										<input type="text" name="meta_keyword" class="form-control" value="<?php echo @$data->meta_keyword; ?>">
									</div>
									
									<div class="form-group">
										<label for="">Tiêu đề thẻ H1 ẩn</label>
										<input type="text" name="title_h1" class="form-control" value="<?php echo @$data->title_h1; ?>">
									</div>

								</div>
							</div>
			            </div>
			           <button type="submit" class="btn btn-primary">Lưu lại</button>
			        </div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\m\resources\views/backend/pages/layout/flash_sale.blade.php ENDPATH**/ ?>