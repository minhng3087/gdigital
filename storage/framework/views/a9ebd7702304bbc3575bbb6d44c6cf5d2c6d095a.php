<?php $__env->startSection('content'); ?>



<!----------------------------------------------------------------------------------->

<!-- Content Header (Page header) -->

<section class="content-header">


  <h1>

  Quản lý

    <small>liên hệ</small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>

    <li><a href="javascript:">Quản lý liên hệ</a></li>

    

  </ol>

</section>

<!-- Main content -->

<!-- Main content -->

<section class="content">

  <div class="row">

    <div class="col-xs-12">

      <div class="box">

      

        <!--<div class="box-header">

          <h3 class="box-title">Data Table With Full Features</h3>

        </div>-->

        <div class="box-body">

          <table id="example1" class="table table-bordered table-hover">

            <thead>

              <tr>

                <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>

                <th class="text-center with_dieuhuong">Stt</th>
                <th>Họ tên</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Khu vực</th>
                <th>Tỉnh thành</th>
                <th>Quận huyện</th>

                <th class="text-center with_dieuhuong">Trạng thái</th>
                <th class="text-center with_dieuhuong">Thao tác</th>
              

              </tr>

            </thead>

            <tbody>

              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <tr>

                <td><input type="checkbox" name="chon" id="chon" value="<?php echo e($item->id); ?>" class="chon" /></td>

                <td class="text-center with_dieuhuong"><?php echo e($k+1); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->phone); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->country); ?></td>
                <td><?php echo e($item->city); ?></td>
                <td><?php echo e($item->district); ?></td>
              

                <td>

                    <?php if($item->status == 1) {?>

	                    <a style="color: red;" href="<?php echo URL::route('backend.usersendmail.show',$item['id']); ?>?id=<?php echo e($item['id']); ?>">Đã xử lý</a> 

                    <?php } else {?>  

                        <a href="<?php echo URL::route('backend.usersendmail.show',$item['id']); ?>?id=<?php echo e($item['id']); ?>">Chờ xử lý</a>

                    <?php } ?> 

                      

                </td> 
                <td class="text-center">

                    <a href="<?php echo URL::route('backend.usersendmail.show',$item['id']); ?>?id=<?php echo e($item['id']); ?>">Edit</a>

                </td> 

                

              </tr>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

          </table>

        </div><!-- /.box-body -->

      

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->



       

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>