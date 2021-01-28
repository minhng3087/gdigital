<style type="text/css">

#example2_paginate{

    display: none;

}

#example2_info{

    display: none;

}

</style>



<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Product'); ?>

<?php $__env->startSection('action','List'); ?>

<!-- Content Header (Page header) -->

<script type="text/javascript">

  $(document).ready(function() {

    $("#chonhet").click(function(){

      var status=this.checked;

      $("input[name='chon']").each(function(){this.checked=status;})

    });

    

    $("#xoahet").click(function(){

      var listid="";

      $("input[name='chon']").each(function(){

        if (this.checked) listid = listid+","+this.value;

        })

      listid=listid.substr(1);   //alert(listid);

      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}

      hoi= confirm("Bạn có chắc chắn muốn xóa?");

      if (hoi==true) document.location = homeUrl()+"/backend/product/"+listid+"/deleteList";

    });

  });

</script>
<script type="text/javascript">
    function changepos() {
        document.frm1.action = "backend/product/changepos";
        document.frm1.submit();
    }

</script>
<section class="content-header">

  <h1>

    <?php echo $__env->yieldContent('controller'); ?>

    <small><?php echo $__env->yieldContent('action'); ?></small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>

    <li><a href="javascript:"><?php echo $__env->yieldContent('controller'); ?></a></li>

    <li class="active"><?php echo $__env->yieldContent('action'); ?></li>

  </ol>

</section>




<!-- Main content -->
<form method="post" name="frm1" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
<section class="content">

  <div class="row">

    <div class="col-xs-12">

      <div class="box">

        <?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!--<div class="box-header">

          <h3 class="box-title">Data Table With Full Features</h3>

        </div>-->

        <div class="box-body">

           <table id="example1" class="table table-bordered table-striped"> 

            <thead>

              <tr>

           
                <th class="text-center with_dieuhuong">Stt</th>

                <th>Danh mục cha</th>

                <th>Tên sản phẩm</th>
                <th style="text-align:center;"><a  onclick="changepos()">Vị trí</a></th>
               
                <th class="text-center with_dieuhuong">Sửa</th>

                <th class="text-center with_dieuhuong">Id</th>

              </tr>

            </thead>

            <tbody>

              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php @$catpro = DB::table('product_categories')->select('name','id','alias')->where('id',@$item->cate_id)->first();?>

              <tr>
                <td class="text-center with_dieuhuong"><?php echo e($k+1); ?></td>
                <td>
                    <?php $cate = DB::table('product_categories')->where('id', $item['cate_id'])->first();if(!empty($cate->name)){?> <a style="color: #3c8dbc;"><?php echo $cate->name; ?></a> <?php }else{ ?><a style="color: red;"> <?php echo 'Hiện tại sản phẩm chưa thuộc danh mục nào';} ?></a>
                </td>
                <td><a ><?php echo e($item->name); ?></a>
               
                </td>
                <td style="text-align:center;" >
                    <input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $item->stt?>" name="order[<?php echo $item->id; ?>]" />
                    <input type="hidden"  value="<?php echo $item->id?>" name="idsy[<?php echo $item->id; ?>]" />
                </td>
               
              

                <td class="text-center with_dieuhuong">

                  <i class="fa fa-pencil fa-fw"></i><a href="backend/product/edit?id=<?php echo e($item->id); ?>">Edit</a>

                </td>

           

                 <td style="text-align: center;"><a><?php echo e($item->id); ?></a></td>

              </tr>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

          </table>

 
        </div><!-- /.box-body -->

            <div class="box-footer col-md-12">

                  <div class="row">
        
                    <div class="col-md-6">
        
                      <input type="button" onclick="javascript:window.location='backend/product/add'" value="Thêm" class="btn btn-primary" />
        
                      <button type="button" id="xoahet" class="btn btn-success">Xóa</button>
        
                      <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />
        
        
        
                    </div>
        
                  </div>
        
                </div>   

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->
 
 
 


</section><!-- /.content -->
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>