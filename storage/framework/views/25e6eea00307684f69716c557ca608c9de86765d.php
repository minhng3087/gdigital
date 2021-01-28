<option value="">Chọn quận huyện</option>
<?php $__currentLoopData = $result_huyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>