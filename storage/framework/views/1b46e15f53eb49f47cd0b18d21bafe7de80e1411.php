<?php $content = json_decode($data); ?>
<?php if(count($data)): ?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="<?php echo e(!empty($class) ? $class : 'col-md-4'); ?>">
			<?php $__env->startComponent('frontend.components.product', ['item'=> $item]); ?>
			<?php echo $__env->renderComponent(); ?>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\m\resources\views/frontend/pages/products/loop-products.blade.php ENDPATH**/ ?>