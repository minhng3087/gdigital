<div class="row" >               
<?php
    $da_dalam=DB::table('products')->select('name','id','alias','photo','mota')->where('hot',1)->where('project',1)->orderBy('stt','asc')->get();
    foreach($da_dalam as $item_hot){
?>
    <div class="col-md-4">
        <div class="item-prj">
            <figure>
                <a class="center-block zoom" href="<?php echo e(asset($item_hot->alias.'.'.$item_hot->id.'.html')); ?>" title="<?php echo $item_hot->name; ?>" target="_self">
                    <img src="<?php echo e(asset('upload/product/'.$item_hot->photo)); ?>" alt="<?php echo $item_hot->name; ?>" />
                </a>
                <figcaption>
                    <h5>
                        <a href="<?php echo e(asset($item_hot->alias.'.'.$item_hot->id.'.html')); ?>" title="<?php echo $item_hot->name; ?>" target="_self" ><?php echo $item_hot->name; ?></a></h5>
                    <div class="desc">
                        <div class="autoCutStr_120"><?php echo _substr($item_hot->mota,130)?></div>
                    </div>
                    <a class="viewMore" href="<?php echo e(asset($item_hot->alias.'.'.$item_hot->id.'.html')); ?>" title="<?php echo $item_hot->name; ?>" target="_self" >Xem dự án <i class="fa fa-angle-right"></i></a>
                </figcaption>
            </figure>
        </div>
    </div>
<?php } ?>    

</div>