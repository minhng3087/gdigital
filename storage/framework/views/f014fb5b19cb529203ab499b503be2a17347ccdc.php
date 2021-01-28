<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->



<section class="content-header">



  <h1>



  

    <small>Tài khoản</small>



  </h1>



  <ol class="breadcrumb">



    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>



    <li><a href="javascript:">Tài khoản</a></li>



   

  </ol>



</section>









<!-- Main content -->



<section class="content">



  <div class="row">



    <div class="col-xs-12">



      <div class="box">



        <?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



        <!--<div class="box-header">



          <h3 class="box-title">Data Table With Full Features</h3>



        </div>-->



        <div class="box-body">



          <table id="example2" class="table table-bordered table-hover">



            <thead>



              <tr>



                <th class="text-center with_dieuhuong">Stt</th>

                <th>Loại tài khoản</th>

                <th>Tài khoản</th>



                <th>Tên</th>



                <th>Trạng tháng</th>

                <th>Hành động</th>



              </tr>



            </thead>



            <tbody>

                     <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      

    		      	<tr class="action-number">

    		      		<td class=""><?php echo e($k+1); ?></td>
                  <td class="text-center"><?php if($item->level==1): ?> Quản trị admin <?php elseif($item->level==3): ?> Quản trị viên <?php endif; ?></td>
    		      	    <td class="text-center"><?php echo $item->name; ?></td>

    		      		<td class="text-center"><?php echo $item->email; ?></td>

    		      	    <td class="text-center">

                           <?php if($item->status>0): ?>

                               <a href="backend/users/edituse?id=<?php echo e($item->id); ?>&hienthi=<?php echo e(time()); ?>" class="btn admin_status"><i class="fa fa-eye"></i> Tài khoản đang hoạt động</a>

                            <?php else: ?>

                              <a href="backend/users/edituse?id=<?php echo e($item->id); ?>&hienthi=<?php echo e(time()); ?>" style="background: red;" class="btn admin_status"><i class="fa fa-eye"></i> Đã Khóa tài khoản</a>

                            <?php endif; ?>

                         </td>

    		      		<td class="text-center"><a href="backend/users/edituse?id=<?php echo e($item->id); ?>" class="btn btn_edit">Chi tiết</a>

                           <a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/users/<?php echo e($item->id); ?>/deleteuse" class="btn btn_del">Xóa</button></td>

    		      	</tr>

                   

    		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </tbody>



          </table>



         <?php echo e($data->links()); ?>




        </div><!-- /.box-body -->



        <div class="box-footer col-md-12">



          <div class="row">



            <div class="col-md-6">



              <input type="button" onclick="javascript:window.location='backend/users/adduse'" value="Thêm" class="btn btn-primary" />



            

              <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />







            </div>



          </div>



        </div>



      </div><!-- /.box -->



    </div><!-- /.col -->



  </div><!-- /.row -->



</section><!-- /.content -->



<!------------------------------------------------------------------------->  

     

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>