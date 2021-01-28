<?php if(!empty($_GET['catearea_id'])){ $str_get=$_GET['catearea_id'];}else{$str_get=null;}?>
<?php 
    $data=DB::table("catespecifications")->select('id','name','cate_id')->where('id',$str_get)->first(); 
    @$product=DB::table("products")->select('id','name')->where('id',$data->cate_id)->first();
?>
<input type="hidden" name="cate_id" value="<?php if(!empty($_GET['catearea_id'])){ echo $_GET['catearea_id'];}?>" />
<input placeholder="Chọn danh mục thông số" type="text" value="<?php echo $data->name;?> (<?php echo $product->name;?>)" id="keyspec" class="backgroundcolor"/>
<div class="autocomplete_specification" ></div>
 <script type="text/javascript">
     $(document).ready(function(){
      $("#keyspec").keyup(function(b){
          inputString = $(this).val();
          if(inputString.trim() !=''){
            $(".autocomplete_specification").show();
            $(".autocomplete_specification").load("backend/specification/type-specification?keyspec="+encodeURIComponent(inputString));
          }else  {
            $(".autocomplete_specification").hide();
            count_select=0;
          }
      
      });
   
    });
   /****/ 
    $(document).ready(function(){    
        $(".click_fspec").click(function(){
            var id_cat=$(this).attr('data-id');
            $.ajax({
                url: 'backend/specification/check_ajax',
                type: 'get',
                dataType:"html",
                data: {catearea_id: id_cat},                  
                success: function (data){
                    $("#views").html(data);
                }
            });              
        });
    }); 
</script>