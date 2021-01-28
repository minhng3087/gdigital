 <?php
    $ads_new_child = DB::table('lienket')->select()->where('status',1)->where('com','quang-cao')->where('display',3)->limit(2)->orderby('stt','asc')->get();
    foreach($ads_new_child as $ads){
?>
<p class="mgt-20 visible-desktop"><a href="<?= $ads->link?>"><img src="<?php echo e(asset('upload/hinhanh/'.$ads->photo)); ?>" alt="" title=""></p>
<?php } ?>