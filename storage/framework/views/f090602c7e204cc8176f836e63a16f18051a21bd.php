<?php $__env->startSection('content'); ?>
<!-- <?php $__env->startSection('controller','Danh mục bài viết'); ?> -->
<?php $__env->startSection('controller','Quản lý '.$trang); ?>
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
      if (hoi==true) document.location = homeUrl()+"/backend/news/"+listid+"/delete_list?type=<?php echo e(@$_GET[type]); ?>";
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
                <th>Tên bài viết</th>
                <th style="text-align:center;"><a onclick="changepos()">Vị trí</a></th>
                <th style="text-align:center;">Hình ảnh</th>
                <?php if(@$_GET['type']=='gioi-thieu'): ?>
                <th style="text-align:center;">Loại</th>
                <?php endif; ?>
                <th class="text-center with_dieuhuong">Hiển thị</th>
                <!-- <th class="text-center with_dieuhuong">Trang chủ</th> -->
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
                <td><a><?php echo e($item->name); ?></a>
                <td style="text-align:center;" >
                    <input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $item->stt?>" name="order[<?php echo $item->id; ?>]" />
                    <input type="hidden"  value="<?php echo $item->id?>" name="idsy[<?php echo $item->id; ?>]" />
                </td>
                <td>
                    <img src="<?php echo e(asset('upload/news/'.$item->photo)); ?>" onerror="this.src='<?php echo e(asset('public/admin_assets/images/no-image.jpg')); ?>'" style="max-width: 100%;max-height: 200px;"  alt="NO PHOTO" />
                </td>
                <?php if(@$_GET['type'] == 'gioi-thieu'): ?>
                <td>
                    <?php if($item->types === 0): ?> Giới thiệu
                    <?php elseif($item->types === 1): ?>Tầm nhìn
                    <?php else: ?> Sứ mệnh
                    <?php endif; ?>
                </td>
                <?php endif; ?>
                
                <td class="text-center with_dieuhuong">
                  <?php if($item->status>0): ?>
                    <a href="backend/news/edit?id=<?php echo e($item->id); ?>&hienthi=<?php echo e(time()); ?>&type=<?php echo e(@$_GET['type']); ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Bật</a>
                  <?php else: ?>
                    <a href="backend/news/edit?id=<?php echo e($item->id); ?>&hienthi=<?php echo e(time()); ?>&type=<?php echo e(@$_GET['type']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt</a>
                  <?php endif; ?>
                </td>
                
                <td class="text-center with_dieuhuong">
                  <i class="fa fa-pencil fa-fw"></i><a href="backend/news/edit?id=<?php echo e($item->id); ?>&type=<?php echo e(@$_GET['type']); ?>">Edit</a>
                </td>
                <td class="text-center">
                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/news/<?php echo e($item->id); ?>/delete?type=<?php echo e(@$_GET['type']); ?>"">Delete</a>
                </td>
                <td style="text-align: center;"><?php echo e($item->id); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
        <div class="box-footer col-md-12">
          <div class="col-md-6">
            <input type="button" onclick="javascript:window.location='backend/news/add?type=<?php echo e(@$_GET[type]); ?>'" value="Thêm" class="btn btn-primary" />
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
                    url: 'backend/news/modal',
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