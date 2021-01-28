<?php
    $slider = DB::table('slider')->select()->where('com','hinh-anh')->where('status',1)->orderBy('stt','asc')->get();
    foreach($slider as $rows ){
?>

    
      <li>
            <a href="<?php echo e($rows->link); ?>" title="<?php echo e($rows->name); ?>">
                <img src="<?php echo e(asset('upload/hinhanh/'.$rows->photo)); ?>" alt="<?php echo e($rows->name); ?>" class="tranz wp-post-image"
                     draggable="false">
            </a>
            <div class="flexinside tranz">
                <div class="flexinside-inn">
                    <p style="text-align: center;"><?php echo $rows->name?></p>
                </div>
            </div>
              
        </li>
<?php } ?>   
