<?php if($item->status == 1): ?>
<div class="anser">
	<div class="avarta"><img src="<?php echo e(__BASE_URL__); ?>/images/user.png" class="img-fluid" alt="images"></div>
	<div class="info">
		<?php if($item->type == 1): ?>
			<h5>
				<?php $userAdmin = \App\User::find($item->id_customers); ?>
				<?php if(!empty($userAdmin)): ?>
					<?php echo e($userAdmin->name); ?>

				<?php else: ?>
					Administrator
				<?php endif; ?>
				<span class="badge badge-success">Quản trị viên</span>
			</h5>
		<?php else: ?>
			<h5><?php echo e(@$item->Customers->name); ?></h5>
		<?php endif; ?>
		<div class="desc">
			<?php echo $item->content; ?>

			<?php if(!empty($item->image)): ?>
				<?php $list_images = json_decode( $item->image ); ?>
				<div class="row-upload">
					<?php $__currentLoopData = $list_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-upload">
							<img src="<?php echo e(url('uploads/comments/'.$value )); ?>" class="image_comment" alt="comments">
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			<?php endif; ?>
			
		</div>
		<div class="date-btn">
			<ul class="list-inline">
				<li class="list-inline-item">
					<a title="" href="javascript:0" data-idform="<?php echo e($item->id); ?>">Trả lời</a>
				</li>
				<li class="list-inline-item"><?php echo e($item->created_at->diffForHumans()); ?></li>
			</ul>
		</div>
	</div>
</div>
<div class="action-cmt <?php echo e($item->id); ?>">
	<form action="<?php echo e(route('home.post.reply.comment', $idProduct)); ?>" method="POST" class="form_reply">
		<?php echo csrf_field(); ?>
		<input type="hidden" name="parent_id" value="<?php echo e($item->id); ?>">
		<div class="box-cmt">
			<div class="item-box">
				<div class="form-group">
					<textarea name="content" required="" maxlength="300" cols="30" rows="10" placeholder=""><?php echo e($item->type == 0 ? '@'.$item->Customers->name : '@Quản trị viên'); ?>:</textarea>
				</div>
			</div>
			<div class="item-box item-box-per">
				<div class="info-percen">
					<p>Nhập thông tin của bạn</p>
					<ul class="list-inline">
						<li class="list-inline-item">
							<div class="gt">
								<div class="gt-rd">
									<input type="radio" id="gt-<?php echo e($item->id); ?>-1" name="gioitinh" value="1" checked>
									<label for="gt-<?php echo e($item->id); ?>-1">Anh</label>
								</div>
								<div class="gt-rd">
									<input type="radio" id="gt-<?php echo e($item->id); ?>-2" name="gioitinh" value="2">
									<label for="gt-<?php echo e($item->id); ?>-2">Chị</label>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="form-group">
								<input type="text" placeholder="Họ tên" class="inp-text" name="name" min="5" max="50" required="">
							</div>
							
						</li>
						<li class="list-inline-item">
							<div class="form-group">
								<input type="email" placeholder="Email" class="inp-text email_rp" name="email" required="">
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="item-box item-box-per text-center">
				<input type="submit" value="Hoàn tất & gửi" class="btn-sent">
			</div>
		</div>
	</form>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\m\resources\views/frontend/comments/row-comment.blade.php ENDPATH**/ ?>