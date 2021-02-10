<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
	<td class="index"><?php echo e($index); ?></td>
	<td>
		<input type="text" name="link_footer[tags][<?php echo e($id); ?>][title]" class="form-control" required="" value="<?php echo e(@$value->title); ?>">
	</td>
	<td>
		<input type="text" name="link_footer[tags][<?php echo e($id); ?>][link]" class="form-control" required="" value="<?php echo e(@$value->link); ?>">
	</td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
<?php /**PATH C:\xampp\htdocs\m\resources\views/backend/repeater/row-link-footer-category.blade.php ENDPATH**/ ?>