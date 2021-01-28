<?php 
    if(!empty($_GET['keyspec'])){
        $keywords=$_GET['keyspec'];
    }else{
        $keywords='a';
    }
    $data=DB::table("catespecifications")->select('id','name','cate_id')->where('name', 'LIKE', '%' . $keywords . '%')->orderBy('id','DESC')->get();
    
?>
<div class="catespecification">
    <ul>
        <?php  foreach($data as $item){@$product=DB::table("products")->select('id','name')->where('id',$item->cate_id)->first();  ?>
             <li>
                <label class="selectit"><input value="<?php echo e($item->id); ?>" type="checkbox" name="cate_id[]" /> <?php echo e($item->name); ?> <span class="color-product">( <?php echo @$product->name?> )</span></label>
             </li>
        <?php } ?>
    </ul>
</div>
