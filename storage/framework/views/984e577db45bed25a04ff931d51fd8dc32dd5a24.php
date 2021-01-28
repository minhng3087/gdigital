<?php
    $slider = DB::table('lienket')->select()->where('com','slider')->where('status',1)->orderBy('stt','asc')->first();
?>
      
            <?php if(!empty($slider)): ?>
       
		      <a href="<?php echo e($slider->link); ?>" title="<?php echo e($slider->name); ?>">
                <img class="vk-img__img" src="<?php echo e(asset('upload/hinhanh/'.$slider->photo)); ?>" alt="<?php echo e($slider->name); ?>"/>
              </a>
	     
           <?php endif; ?>
  
    