 <?php 
    if(!empty($_GET['area_pr'])){
         $id= $_GET['area_pr'];
        //Tìm article thông qua mã id tuong ?ng
        $data01=DB::table('products')->select('id','relationship')->where('id',$id)->first();
        $relat=explode(',',$data01->relationship);
    }
 
    foreach($data as $row){
?> 
    <li id="nhan-menu" >
    <label class="selectit"><input <?php if(!empty($_GET['area_pr'])){ foreach(@$relat as $rel){if($rel == $row->id){echo 'checked';}} }?> value="<?php echo e($row->id); ?>" type="checkbox" name="relationship[]" /> <?php echo e($row->name); ?></label>
    </li>
<?php } ?>   