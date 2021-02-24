<?php $__env->startSection('controller', $module['name'] ); ?>
<?php $__env->startSection('controller_route', route($module['module'].'.index')); ?>
<?php $__env->startSection('action', 'Tất cả bình luận'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo $__env->make('backend.components.messages-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-widget">
						    <div class="box-footer">
						        <form action="<?php echo e(route($module['module'].'.store')); ?>" method="POST">
						        	<?php echo csrf_field(); ?>
						        	<input type="hidden" name="parent_id" value="0">
									<?php if(Request::segment(5) == 'product'): ?>
						        	<input type="hidden" name="id_product" value="<?php echo e($data->id); ?>">
									<?php else: ?>
						        	<input type="hidden" name="id_post" value="<?php echo e($data->id); ?>">
									<?php endif; ?>
						            <div class="form-group">
						            	<label for="">Trả lời</label>
						            	<textarea class="content" name="content"><?php echo old('content'); ?></textarea>
						            </div>
						            <button class="btn btn-primary" type="submit">Trả lời</button>
						        </form>
						    </div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="ModalReply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	    <div class="modal-dialog  modal-lg" role="document">
	    	<form action="<?php echo e(route($module['module'].'.store')); ?>" method="POST">
	    		<?php echo csrf_field(); ?>
	        		<input type="hidden" name="parent_id" id="parent_id_reply" value="">
	        	<?php if(Request::segment(5) == 'product'): ?>
					<input type="hidden" name="id_product" value="<?php echo e($data->id); ?>">
				<?php else: ?>
					<input type="hidden" name="id_post" value="<?php echo e($data->id); ?>">
				<?php endif; ?>
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLongTitle">Trả lời bình luận</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                <div class="form-group">
			            	<label for="">Trả lời</label>
			            	<textarea id="content-1" name="content"><?php echo old('content'); ?></textarea>
			            </div>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-primary">Trả lời</button>
		            </div>
		        </div>
	        </form>
	    </div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
	<style>
		.row-upload .col-upload {
		    padding: 0 7px;
		}
		.row-upload {
		    display: inline-flex;
		    width: 100%;
		    flex-wrap: wrap;
		    margin-top:10px;
		    margin-left:0px;
		}
		.row-upload .col-upload img {
		    width: 70px;
		    height: 70px;
		    object-fit: cover;
		    border-radius: 3px;
		}
		p:empty{
			display: none;
		}

		.box-comments .comment-text{
			margin-left: 0px;
		}
		.box-comment-custom{
			padding-top: 10px;
    		border-bottom: 1px solid #eee;
		}
		.box-comment-custom	.btn-reply{
			display: inline-block;
    		margin-right: 3px;
		}
		.activeq label{
			cursor: pointer;
		}
	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script>
		jQuery(document).ready(function($) {
			$('.btn-reply').click(function(event) {
				var parent_id = $(this).data('id');
				$('#parent_id_reply').val(parent_id);
				$('#ModalReply').modal('toggle');
			});

			$('.activeq').click(function(event) {
				id = $(this).data('id');
                var btn = $(this);
                $.get('<?php echo e(route('comments.active')); ?>?id='+id, function(data) {
                    btn.html('');
                });
			});
		});
		var editor = CKEDITOR.replace($(this).attr('content-1'));
        CKFinder.setupCKEditor(editor);
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\m\resources\views/backend/contact/view.blade.php ENDPATH**/ ?>