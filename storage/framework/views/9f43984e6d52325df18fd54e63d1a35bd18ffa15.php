<?php if(session('status')): ?>
<div class="box-header">
    <h3 class="box-title text-green alert_thongbao"><?php echo e(session('status')); ?></h3>
</div>
<?php endif; ?>