<?php $__env->startSection('content'); ?>

<?php 

    if(Auth::guard('customer')->check()){

        $user = DB::table('users')->select()->where('id',Auth::guard('customer')->user()->id)->get()->first();

    }else{

        $user = DB::table('users')->select()->where('id',Auth::guard('administrator')->user()->id)->get()->first();

    }

?>

<div class="cd-main-content">



    <section class="breadcrumb">



        <div class="container">



            <ul class="flex-center-start">



                <li><a href="" title=""><i class="fa fa-home"></i> Trang chủ </a> </li>



                <li><span> Quản trị viên</span> </li>



            </ul>



        </div>



    </section>



    <section class="cv-manage">

        <form class="register-form" name="frm_info" method="post" action="<?php echo url('thong-tin-tai-khoan'); ?>" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

            <input type="hidden" name="user_id" value="<?php echo $user->id; ?>" />

            <div class="container">

                

                <div class="row">



                    <div class="col-md-2">



                        <div class="employer-left sticky-top">



                            <span class="mgb-20">

                                <div class="col-md-12">

                                    <a href="<?php echo e(asset('thong-tin-tai-khoan')); ?>" title=""><img src="<?php echo asset('upload/images/'.$user->photo); ?>" onerror="this.src='<?php echo e(asset('public/images/logo/logo.png')); ?>';" align="" height="150"></a>

                                    

                                </div>

                            </span>



                            <!-- <p>

                                <a href="" data-toggle="modal" data-target="#change-image" class="font-italic blue-txt">

                                <i class="fa fa-image"></i> Thay đổi hình ảnh</a> 

                                <label class="hidden">

                                    <input type="file" name="fImages">

                                    <input type="hidden" name="img_current" value="<?php echo $user->photo; ?>"  >

                                </label>

                                

                            </p> -->



                            <h5 class="font-weight-bold blue-txt mgt-10"><?php echo e($user->name); ?></h5>



                            <ul>

                                <li><a href="<?php echo e(asset('tel:'.$user->phone)); ?>" title=""><i class="fa fa-phone"></i> <?php echo e($user->phone); ?></a> </li>

                                <li><a href="<?php echo e(asset('quan-ly-ho-so')); ?>" title=""><i class="fa fa-user"></i> Quản lý hồ sơ</a> </li>

                                <li><a href="<?php echo e(asset('thong-ke')); ?>" title=""><i class="fa fa-user"></i> Thống kê</a> </li>

                                

                                <li>

                                    <a href="<?php echo e(asset('dang-xuat')); ?>" title="">

                                        <i class="fa fa-sign-out"></i>

                                        Thoát

                                    </a>

                                </li>



                            </ul>

                            

                        </div>



                    </div>



                    <div class="col-md-10 flex-center-center">



                        <div class="admin-index">



                            <div class="row">



                                <div class="col-md-4">



                                    <div class="admin-info text-center">



                                        <p><img src="<?php echo e(asset('public/images/plus/i-flile.png')); ?>" alt="" title=""> </p>



                                        <h4><?php echo e(count($result_profile)); ?> CV</h4>



                                        <p>Đã được tải lên hệ thống</p>



                                        <p class="mgt-20"><a class="" href="<?php echo e(asset('quan-ly-ho-so')); ?>" title="">Xem thêm</a> </p>



                                    </div>



                                </div>



                                <div class="col-md-4">



                                    <div class="admin-info text-center">



                                        <p><img src="<?php echo e(asset('public/images/plus/i-user-3.png')); ?>" alt="" title=""> </p>



                                        <h4><?php echo e(count($result_nhatuyendung)); ?> +</h4>



                                        <p>Nhà tuyển dụng hoạt động trên web</p>



                                    </div>



                                </div>



                                <div class="col-md-4">



                                    <div class="admin-info text-center">



                                        <p><img src="<?php echo e(asset('public/images/plus/i-cloud.png')); ?>" alt="" title=""> </p>



                                        <h4><?php echo e(count($cvchecked_month)); ?>+</h4>



                                        <p>CV đã được chọn trong tháng</p>



                                        <p class="mgt-20"><a class="" href="<?php echo e(asset('quan-ly-ho-so')); ?>" title="">Xem thêm</a> </p>



                                    </div>



                                </div>



                            </div>



                        </div>



                    </div>



                </div>



            </div>

        </form>



    </section>



    <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>