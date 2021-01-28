<?php
    $slider = DB::table('slider')->select()->where('com','hinh-anh')->where('status',1)->orderBy('stt','asc')->get();
    foreach($slider as $rows ){
?>

      <a href="<?php echo e($rows->link); ?>" title="<?php echo e($rows->name); ?>">
        <img class="vk-img__img" src="<?php echo e(asset('upload/hinhanh/'.$rows->photo)); ?>" alt="<?php echo e($rows->name); ?>"/>
      </a>
<?php } ?>   
