<?php 
    $ids=array();
    $exp=explode('%2C',$_GET['page_id']);
    $im=implode(',',$exp);
    $exptip=explode(',',$im);
    foreach($exptip as $id){
       $ids[]=$id; 
    }
    $list_post=DB::table("products")->select('name','alias','id','mota','photo','created_at')->whereIn('cate_id',$ids)->where('status',1)->where('display',2)->orderBy('id','desc')->get();
    print_r($ids);
?>
<div class="row">
    <?php foreach($list_post as $k=>$item){if($k>4){?>
        <div class="col-md-3">
            <div class="item-prj">
                <figure>
                    <a class="center-block zoom" href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" title="">
                        <img src="<?php echo e(asset('upload/product/'.@$item->photo)); ?>" alt="<?php echo $item->name; ?>"/>
                    </a>
                    <figcaption>
                        <h5><a href="<?php echo e(asset($item->alias.'.'.$item->id.'.html')); ?>" title="<?php echo $item->name; ?>" target="_self" title=""><?php echo _substr($item->name,200); ?></a></h5>
                        <p>Upload: <?php echo date('d/m/Y',strtotime($item->created_at))?></p>
                    </figcaption>
                </figure>
            </div>
        </div>
   <?php }} ?>  
</div>