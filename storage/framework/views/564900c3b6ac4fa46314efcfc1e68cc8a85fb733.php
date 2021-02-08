<?php
	use App\Products;
	$products = Products::select()->where([
		'status' => 1,
		'hot' => 1,
		'cate_id' => 0
	])->orderBy('stt','desc')->take(8)->get();

	$services = Products::select()->where([
		'status' => 1,
		'hot' => 1,
		'cate_id' => 1
	])->orderBy('stt','desc')->take(8)->get();
?>
<nav class="nav">
	<ul class="megamenu-content">
		<li class="item">
			<a href="<?php echo url('/'); ?>" title="Trang chủ" class="active"><?php echo e(__('Trang chủ')); ?></a>
		</li>	
		<li class="item">
			<a href="<?php echo url('/gioi-thieu'); ?>" title="Giới thiệu"><?php echo e(__('Giới thiệu')); ?></a>
		</li>	
		<li class="item item-sub">
			<a href="<?php echo url('/san-pham'); ?>" title="Sản phẩm">
				<?php echo e(__('Sản phẩm')); ?>

				<span>
					<i class="fal fa-plus icon"></i>
					<i class="fal fa-minus icon icon-minus"></i>
				</span>
			</a>
			<div class="sub-menu sub-menu-1">
				<div class="content container">
					<ul>
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<a href="<?php echo e(route('getProductDetail', ['alias'=>$item->alias])); ?>">
								<img src="<?php echo e(asset('upload/product/' . $item->photo)); ?>" alt="Banner">
								<label><?php echo e(@$item->name); ?></label>
							</a>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
		</li>
		<li class="item item-sub">
			<a href="<?php echo url('/dich-vu'); ?>" title="Dịch vụ">
				<?php echo e(__('Dịch vụ')); ?>

				<span>
					<i class="fal fa-plus icon"></i>
					<i class="fal fa-minus icon icon-minus"></i>
				</span>
			</a>
			<div class="sub-menu sub-menu-1">
				<div class="content container">
					<ul>
						<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<a href="<?php echo e(route('getServiceDetail', ['alias'=>$item->alias])); ?>">
								<img src="<?php echo e(asset('upload/product/'.$item->photo)); ?>" alt="Banner">
								<label><?php echo e(@$item->name); ?></label>
							</a>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
		</li>	
		<li class="item">
			<a href="<?php echo url('/lien-he'); ?>" title="Liên hệ"><?php echo e(__('Liên hệ')); ?></a>
		</li>			                         
	</ul>
</nav>