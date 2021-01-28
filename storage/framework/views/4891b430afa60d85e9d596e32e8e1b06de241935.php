
<?php if($paginator->lastPage() > 1): ?>
<div class="paginations-box">
	<ul>
		<li class="pagi-icon pagi-prev <?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
			<a href="<?php echo e($paginator->url(1)); ?>">
				<i class="far fa-angle-left icon"></i>
				<!-- <span>Prev</span> -->
			</a>
		</li>
		<?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
        <li class="<?php echo e(($paginator->currentPage() == $i) ? ' active' : ''); ?>">
            <a href="<?php echo e($paginator->url($i)); ?>"><?php echo e($i); ?></a>
        </li>
    	<?php endfor; ?>
		<!-- <li class="pagi-icon pagi-elip">
			<a href="#">
				<span>...</span>
			</a>
		</li>
		<li class="active">
			<a href="#">
				<span>1</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span>2</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span>3</span>
			</a>
		</li> -->
		<li class="pagi-icon pagi-next <?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
			<a href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>">
				<!-- <span>Next</span> -->
				<i class="far fa-angle-right icon"></i>
			</a>
		</li>
	</ul>								
</div>
<?php endif; ?>
