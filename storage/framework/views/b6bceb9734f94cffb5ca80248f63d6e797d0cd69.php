<?php $__env->startSection('controller', renderLinkAddPostType()['title']); ?>
<?php $__env->startSection('controller_route', renderLinkAddPostType()['linkList'] ); ?>
<?php $__env->startSection('action','Chỉnh sửa'); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<?php echo $__env->make('backend.components.messages-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="clearfix"></div>
		<form action="<?php echo e(route('posts.update', $data->id)); ?>" method="POST" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?>
			<input type="hidden" value="blog" name="type">
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Bài viết</a>
		                    </li>
		                    <li class="" style="display: none;">
		                    	<a href="#setting" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
		                    </li>
		                    <li class="" style="display: none;">
		                    	<a href="#tags" data-toggle="tab" aria-expanded="true">Tags</a>
		                    </li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
		                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo old('name', @$data->name); ?>" required="">
		                                </div>
		                                <div class="form-group" id="edit-slug-box">
		                                    <?php echo $__env->make('backend.posts.permalink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		                                </div>
		                                <div class="form-group">
		                                    <label>Mô tả ngắn</label>
		                                    <textarea class="form-control" rows="5" name="desc"><?php echo old('desc', @$data->desc); ?></textarea>
		                                </div>
		                                
		                                <div class="form-group">
		                                    <label>Nội dung</label>
		                                    <textarea class="content" name="content"><?php echo old('content', @$data->content); ?></textarea>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="tab-pane" id="setting">
		                        <div class="form-group">
		                            <label>Title SEO</label>
		                            <label style="float: right;">Số ký tự đã dùng: <span id="countTitle"><?php echo e($data->meta_title != null ? mb_strlen( $data->meta_title, 'UTF-8') : 0); ?>/70</span></label>
		                            <input type="text" class="form-control" name="meta_title"
		                                   value="<?php echo old('desc', isset($data->meta_title) ? $data->meta_title : null ); ?>"
		                                   id="meta_title">
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Description</label>
		                            <label style="float: right;">Số ký tự đã dùng: <span id="countMeta"><?php echo e($data->meta_description != null ? mb_strlen( $data->meta_description, 'UTF-8') : 0); ?>/360</span></label>
		                            <textarea name="meta_description" class="form-control" id="meta_description"
		                                      rows="5"><?php echo old('meta_description', isset($data->meta_description) ? $data->meta_description : null ); ?></textarea>
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Keyword</label>
		                            <input type="text" class="form-control" name="meta_keyword"
		                                   value="<?php echo old('meta_keyword', isset($data->meta_keyword) ? $data->meta_keyword : null ); ?>">
		                        </div>

		                        <h4 class="ui-heading">Xem trước kết quả tìm kiếm</h4>
		                        <div class="google-preview">
		                            <span class="google__title"><span><?php echo !empty($data->meta_title) ? $data->meta_title : $data->name; ?></span> </span>
		                            <div class="google__url">
		                                <?php echo e(asset( 'tin-tuc/'.$data->slug )); ?>

		                            </div>
		                            <div class="google__description"><?php echo old('meta_description', isset($data->meta_description) ? $data->meta_description : ''); ?></div>
		                        </div>
		                    </div>
		                    
		                </div>
		            </div>
				</div>
				<div class="col-sm-3">
					<div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Đăng</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group">
		                       	<div class="form-group">
			                        <label for="">Trạng thái</label>
			                        <select name="status" class="form-control">
			                        	<option value="1" <?php echo e($data->status == 1 ? 'selected' : null); ?>>Hiển thị</option>
			                        	<option value="2" <?php echo e($data->status == 2 ? 'selected' : null); ?>>Bản nháp</option>
			                        	<option value="3" <?php echo e($data->status == 3 ? 'selected' : null); ?>>Chờ duyệt</option>
			                        </select>
			                    </div>
			                    <div class="form-group">
			                        <label for="">Thời gian hiển thị: <?php echo e(@$data->published_at->format('d/m/Y')); ?></label>
			                        <label for="">Thời gian tạo bài: <?php echo e(@$data->created_at->format('d/m/Y')); ?></label>
			                        <label class="custom-checkbox" style="font-weight: initial;">
			                            <input type="radio" name="time_published" value="1" checked=""> Thời gian tạo bài
			                        </label>
			                        <label class="custom-checkbox" style="font-weight: initial;">
			                            <input type="radio" name="time_published" value="2"> Chọn thời gian
			                        </label>
			                    </div>
			                    <div class="row time_published_value" style="display: none;">
		                    		<div class="col-sm-4" style="padding-right: 0px;">
		                    			<div class="form-group">
											<label for="">Ngày</label>
											<select name="time[date]" class="form-control">
												<?php for($i = 1; $i < 32; $i++): ?>
													<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
												<?php endfor; ?>
											</select>
					                    </div>
		                    		</div>
		                    		<div class="col-sm-4" >
		                    			<div class="form-group">
											<label for="">Tháng</label>
											<select name="time[month]" class="form-control">
												<?php for($i = 1; $i < 13; $i++): ?>
													<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
												<?php endfor; ?>
											</select>
					                    </div>
		                    		</div>
		                    		<div class="col-sm-4" style="padding-left: 0px;">
		                    			<div class="form-group">
											<label for="">Năm</label>
											<input type="text" name="time[year]" min="1" value="2020" class="form-control">
					                    </div>
		                    		</div>
		                    	</div>

		                    	<label class="custom-checkbox">
	                                <input type="checkbox" name="hot" value="1" <?php echo e(@$data->hot == 1 ? 'checked' : null); ?>> Nổi bật
	                            </label>
		                    </div>

		                    <div class="form-group">
		                    	<a href="" target="_blank" class="btn btn-default btn-flat">Xem trước</a>
		                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
		                    </div>
		                </div>
		            </div>

		             <div class="box box-success category-box">
		             	<?php 
		                        $category_list = [];
		                        if(!empty(@$data->category)){
		                           $category_list = @$data->category->pluck('id')->toArray();
		                        }
		                    ?>
		                <div class="box-header with-border">
		                    <h3 class="box-title">Danh mục bài viết</h3>
		                </div>
		                <div class="box-body">
		                    <?php if(!empty($categories)): ?>
		                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                            <?php if($item->parent_id == 0): ?>
		                                <label class="custom-checkbox">
		                                    <input type="checkbox" class="category" name="category[]" value="<?php echo e($item->id); ?>" <?php echo e(in_array( $item->id, $category_list ) ? 'checked' : null); ?>> <?php echo e($item->name); ?>

		                                 </label>
		                            <?php endif; ?>
		                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                    <?php endif; ?>
		                </div>
		            </div>
		            <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Ảnh đại diện</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group" style="text-align: center;">
		                        <div class="image">
									<div class="image__thumbnail">
										<img src="<?php echo e(__IMAGE_DEFAULT__); ?>"
												data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
										<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
										<input type="hidden" value="<?php echo e(old('image')); ?>" name="image"/>
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
			</div>
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(url('public/admin_assets/plugins/taginput/bootstrap-tagsinput.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
	<script>
		jQuery(document).ready(function($) {
			$('#btn-ok').click(function(event) {
		        var slug_new = $('#new-post-slug').val();
		        var name = $('#name').val();
		        $.ajax({
		        	url: '<?php echo e(route('posts.get-slug')); ?>',
		        	type: 'GET',
		        	data: {
		        		id: $('#idPost').val(),
		        		slug : slug_new.length > 0 ? slug_new : name,
		        	},
		        })
		        .done(function(data) {
		        	$('#change_slug').show();
			        $('#btn-ok').hide();
			        $('.cancel.button-link').hide();
			        $('#current-slug').val(data);
		        	cancelInput(data);
		        })
		    });
		});	
	</script>
	
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
		});
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
	<script src="<?php echo e(url('public/backend/plugins/taginput/bootstrap-tagsinput.min.js')); ?>"></script>
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
			$('#tags-input').tagsinput({
			  	
			});
		});
	</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\m\resources\views/backend/posts/edit.blade.php ENDPATH**/ ?>