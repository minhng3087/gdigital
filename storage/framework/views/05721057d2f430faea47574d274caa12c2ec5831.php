<?php $__env->startSection('content'); ?>
<?php $__env->startSection('controller','Danh mục bài viết'); ?>
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
      if (hoi==true) document.location = homeUrl()+"/backend/productcate/"+listid+"/delete_list";
    });
  });
</script>
<script type="text/javascript">
    function changepos() {
        document.frm1.action = "backend/productcate/changepos";
        document.frm1.submit();
    }
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
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
        <?php if(session('status')): ?>
        <div class="box-header">
            <h3 class="box-title alert_thongbao text-green"><?php echo e(session('status')); ?></h3>
        </div>
        <?php endif; ?>
        <!--<div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>-->
        <div class="box-body">
           <table id="example1" class="table table-bordered table-striped"> 
            <thead>
              <tr>
                <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>
                <th class="text-center with_dieuhuong">Stt</th>
                <th >Danh mục cha</th>
                <th>Tên danh mục</th>
                <th style="text-align:center;"><a onclick="changepos()">Vị trí</a></th>
                <th class="text-center with_dieuhuong">Hiển thị</th>
                <th class="text-center with_dieuhuong">Trang chủ</th>
                <th class="text-center with_dieuhuong">Sửa</th>
                <th class="text-center with_dieuhuong">Xóa</th>
                <th class="text-center with_dieuhuong">Id</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><input type="checkbox" name="chon" id="chon" value="<?php echo e($item->id); ?>" class="chon" /></td>
                <td class="text-center with_dieuhuong"><?php echo e($k+1); ?></td>
                <td>
                <?php  $parent = DB::table('product_categories')->where('id', $item->parent_id)->first();?>
                <?php if(!empty($parent)): ?>
                  <?php echo e($parent->name); ?>

                <?php else: ?>
                  <a style="color: red;"> Danh mục cấp cao</a> 
                <?php endif; ?>
                <div>
                <a class="click_f btn btn-default" style="background: none;width: auto;margin-top: 5px" data-toggle="modal" data-id="<?php echo e($item->id); ?>" data-target="#modal-default">Thêm danh mục con</a>
                </div>
                </td>
                <td><a><?php echo e($item->name); ?></a>
                <span style="text-align: right;float: right;">
                    <?php if($item->menu>0): ?>
                      <a href="backend/catenew/edit?id=<?php echo e($item->id); ?>&menu=<?php echo e(time()); ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Menu Top</a>
                    <?php else: ?>
                      <a href="backend/catenew/edit?id=<?php echo e($item->id); ?>&menu=<?php echo e(time()); ?>" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Menu Top</a>
                    <?php endif; ?>
                </span>
                </td>
                <td style="text-align:center;" >
                    <input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $item->stt?>" name="order[<?php echo $item->id; ?>]" />
                    <input type="hidden"  value="<?php echo $item->id?>" name="idsy[<?php echo $item->id; ?>]" />
                </td>
                <td class="text-center with_dieuhuong">
                  <?php if($item->status>0): ?>
                    <a href="backend/catenew/edit?id=<?php echo e($item->id); ?>&hienthi=<?php echo e(time()); ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Bật</a>
                  <?php else: ?>
                    <a href="backend/catenew/edit?id=<?php echo e($item->id); ?>&hienthi=<?php echo e(time()); ?>" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt</a>
                  <?php endif; ?>
                  <div style="height: 5px;"></div>
            <div style="display: none;">
                  <?php if($item->noibat>0): ?>
                    <a href="backend/catenew/edit?id=<?php echo e($item->id); ?>&noibat=<?php echo e(time()); ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Ý kiến KH (Home)</a>
                  <?php else: ?>
                    <a href="backend/catenew/edit?id=<?php echo e($item->id); ?>&noibat=<?php echo e(time()); ?>" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Ý kiến KH (Home)</a>
                  <?php endif; ?>  
            </div>
                  <div style="height: 5px;"></div>
                  <div style="display: none;">
                  <?php if($item->bot>0): ?>
                    <a href="backend/catenew/edit?id=<?php echo e($item->id); ?>&bot=<?php echo e(time()); ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Menu (bottom)</a>
                  <?php else: ?>
                    <a href="backend/catenew/edit?id=<?php echo e($item->id); ?>&bot=<?php echo e(time()); ?>" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Menu (bottom)</a>
                  <?php endif; ?> 
                  </div>
                </td>
                <td class="text-center with_dieuhuong" >
                  <?php if($item->home >0 ): ?>
                       <a style="color: red;"> Hiển thị trang chủ</a>
                  <?php else: ?>
                        <a style="color: #333;">Không hiển thị trang chủ</a>
                  <?php endif; ?>
                </td>
                <td class="text-center with_dieuhuong">
                  <i class="fa fa-pencil fa-fw"></i><a href="backend/catenew/edit?id=<?php echo e($item->id); ?>">Edit</a>
                </td>
                <td class="text-center">
                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/catenew/<?php echo e($item->id); ?>/delete">Delete</a>
                </td>
                <td style="text-align: center;"><?php echo e($item->id); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
        <div class="box-footer col-md-12">
          <div class="col-md-6">
            <input type="button" onclick="javascript:window.location='backend/catenew/add'" value="Thêm" class="btn btn-primary" />
            <button type="button" id="xoahet" class="btn btn-success">Xóa</button>
            <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />
          </div>
        </div>
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
</form>
  <div class="modal fade" id="modal-default" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
            <p><div id="view"></div></p>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <script type="text/javascript">
        $(document).ready(function(){    
            $(".click_f").click(function(){
                var id_cat=$(this).attr('data-id');
                $.ajax({
                    url: 'backend/catenew/modal',
                    type: 'get',
                    dataType:"html",
                    data: {area_id: id_cat},                  
                    success: function (data){
                        $("#view").html(data);
                    }
                });              
            });
        }); 
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>