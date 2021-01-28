<?php 
if(!empty($_GET['area_id'])){$key=$_GET['area_id'];}else{$key=null;}
?>
	<form method="post" name="frmEditProduct" action="backend/product/edit?id=<?php echo e($key); ?>" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
 <?php
    $cate_peci=DB::table('catespecifications')->select('id','name')->where('cate_id',$key)->get();
    foreach($cate_peci as $rows){
        $peci=DB::table('specifications')->select('id','name')->where('cate_id',$rows->id)->get();
       
   ?>
     <!--------------------------->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $rows->name;?></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding" style="">
          <?php  foreach($peci as $k=>$row){?>
            <div id="row-li">
                <div class="col-md-2 col-xs-12">
			      	<label for="title"><?php echo $row->name?></label>
                    <input type="hidden" name="specification_id[]" value="<?php echo $row->id?>" />
                </div> 
                <div class="col-md-10 col-xs-12">   
			      	<input type="text" name="thongso[]" class="form-control" />
                </div>  
                <div class="clearfix"></div>  
			  </div>
            <!-- /.col -->
         <?php } ?>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!---------------------------> 
      
  <?php } ?>  
	<div class="clearfix"></div>
</form>