

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->

<section class="content-header">

  <h1>

    Quản trị website 

    

  </h1>

  <!-- <?php if(Session::has('flash_notice')): ?>

    <span class="box-title text-green alert_thongbao"><?php echo e(Session::get('flash_notice')); ?></span>

  <?php endif; ?> -->

  <ol class="breadcrumb">

    <li><a href="<?php echo e(asset('backend')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>

    <li><a href="#">Tables</a></li>

    <li class="active">Data tables</li>

  </ol>

</section>

<!-- Main content -->

<section class="content">

  <div class="row">

    <div class="col-lg-3 col-xs-6">

      <!-- small box -->

      <div class="small-box bg-aqua">

        <div class="inner">

          <h3><?php echo $countproduct; ?></h3>

          <p>Tổng sản phẩm</p>

        </div>

        <div class="icon">

          <i class="ion ion-bag"></i>

        </div>

        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

      </div>

    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">

      <!-- small box -->

      <div class="small-box bg-green">

        <div class="inner">

          <h3></h3>

          <p>Bài viết</p>

        </div>

        <div class="icon">

          <i class="ion ion-stats-bars"></i>

        </div>

        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

      </div>

    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">

      <!-- small box -->

      <div class="small-box bg-yellow">

        <div class="inner">

          <h3>1</h3>

          <p>User Registrations</p>

        </div>

        <div class="icon">

          <i class="ion ion-person-add"></i>

        </div>

        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

      </div>

    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">

      <!-- small box -->

      <div class="small-box bg-red">

        <div class="inner">

          <h3>1</h3>

          <p>Unique Visitors</p>

        </div>

        <div class="icon">

          <i class="ion ion-pie-graph"></i>

        </div>

        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

      </div>

    </div><!-- ./col -->

  </div>

  <div class="box box-info">

    <div class="box-header with-border">

      <h3 class="box-title">Sản phẩm mới nhất</h3>



      <div class="box-tools pull-right">

        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

        </button>

        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

      </div>

    </div>

    <!-- /.box-header -->

    <div class="box-body">

      <div class="table-responsive">

        <table class="table no-margin">

          <thead>

          <tr>

              <th class="text-center with_dieuhuong">Stt</th>

              <th>Tên sản phẩm</th>

              <th class="text-center with_dieuhuong">Hoạt động</th>

              <th class="text-center with_dieuhuong">Sửa</th>

              <th class="text-center with_dieuhuong">Xóa</th>

            </tr>

          </thead>

          <tbody>

          <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <?php @$catpro = DB::table('product_categories')->select('name','id','alias')->where('id',@$item->cate_id)->first();?>

            <tr>

              <td class="text-center with_dieuhuong"><?php echo e($k+1); ?></td>

              <td><a  href="<?php if($item->alias != null){?><?php echo e(asset(@$catpro->alias.'/'.$item->alias.'.'.$item->id.'.html')); ?> <?php } else { ?><?php echo e(asset(@$catpro->alias.'/'.changeTitle($item->name).'.'.$item->id.'.html')); ?> <?php } ?>" title="<?php echo e($item->name); ?>" ><?php echo e($item->name); ?></a></td>

              <td class="text-center with_dieuhuong">

                <div class="form-group"> 

                  <?php if($item->status>0): ?>

                    <a href="backend/product/edit?id=<?php echo e($item->id); ?>&hienthi=<?php echo e(time()); ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Hiển thị</a>

                  <?php else: ?>

                    <a href="backend/product/edit?id=<?php echo e($item->id); ?>&hienthi=<?php echo e(time()); ?>" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Hiển thị</a>

                  <?php endif; ?>

                </div>

              </td>

              <td class="text-center with_dieuhuong">

                <i class="fa fa-pencil fa-fw"></i><a href="backend/product/edit?id=<?php echo e($item->id); ?>">Edit</a>

              </td>

              <td class="text-center">

                <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/product/<?php echo e($item->id); ?>/delete">Delete</a>

              </td>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          

          </tbody>

        </table>

      </div>

      <!-- /.table-responsive -->

    </div>

    <!-- /.box-body -->

    <div class="box-footer clearfix">

      <a href="<?php echo asset('backend/product'); ?>" class="btn btn-sm btn-info btn-flat pull-left">Product list</a>

      <a href="<?php echo asset('backend/product'); ?>" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>

    </div>

    <!-- /.box-footer -->

  </div>



</section><!-- /.content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>