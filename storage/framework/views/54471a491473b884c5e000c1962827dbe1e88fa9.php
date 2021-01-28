<?php 
if(!empty($_GET['area_id'])){$key=$_GET['area_id'];}else{$key=null;}
$cate=DB::table("product_categories")->select('name','id')->where('display',2)->where('id',$key)->first();
@$catechild=DB::table("product_categories")->select('name','id')->where('display',2)->where('parent_id',$cate->id)->get();
?>

 <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span></button>
    <h4 class="modal-title"> Danh mục cha: <span style="color: red;"><?php echo e(@$cate->name); ?></span></h4>
  </div>
  <div class="modal-body">
                
    	<form method="post" action="backend/catenew/postAddchild"  enctype="multipart/form-data">
    	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
        <input type="hidden" name="parent_id" value="<?php echo $key;?>" />
          <?php if(count($catechild)> 0){?> 
           <div class="danhmuccon">
           <h4 class="modal-title"> Danh mục con</h4>
            <div style="width: 50%;margin: 0 auto;">
            <?php foreach(@$catechild as $rows){?> 
                <div class="row" style="margin-bottom: 10px;padding: 10px 0px;border: solid 1px #ddd;">
                  <div class="col-xs-8">
                    <a><?php echo e($rows->name); ?></a>
                  </div> 
                  <div class="col-xs-4"> <a  href="backend/productcate/<?php echo e($rows->id); ?>/delete">Xóa</a> </div>
               </div>   
            <?php } ?>
            </div>
           </div> 
         <?php } ?>  
                  <div id="a">
                    <div class="con">
                        <div class="col-md-10 col-xs-12"><input  id="Text1" name="txtName[]" class="form-control images-add"  type="text" /></div>
                        <div class="col-md-1 col-xs-12"><input  id="btnAdd"  class="form-control add-properties" type="button" value=" Thêm " /></div>
                        <div style="clear: both;"></div>
                     </div>
                  </div>
    	<div class="clearfix"></div>
        <script type="text/javascript">
         $(document).ready(function() {
              $("#btnAdd").click(function() {
                $("#a").append('<div class="con"><div class="col-md-10 col-xs-12"><input id="Text1" name="txtName[]" class="form-control images-add" type="text" /></div>' + '<input id="bnt-images-add" type="button" class="form-control btnRemove" value="Xóa"/><div class="clearfix"></div></div>');
              });
              $('body').on('click','.btnRemove',function() {
                $(this).parent('div.con').remove()
              });
            });
        </script>
         
         <div class="modal-footer" style="margin-top: 20px;">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>
    </form>
   </div>
   