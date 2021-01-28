
<?php $__env->startSection('content'); ?>
<?php 
    if(Auth::guard('customer')->check()){
        $user = DB::table('users')->select()->where('id',Auth::guard('customer')->user()->id)->get()->first();
    }else{
        $user = DB::table('users')->select()->where('id',Auth::guard('administrator')->user()->id)->get()->first();
    }
?>
<?php

    if(@$_SESSION['lang'] == 'vi'){
       $duoi = '';  
       @include('lang/vi.php');
    }elseif(@$_SESSION['lang'] == 'eg'){
       $duoi = '_eg'; 
       @include('lang/eg.php');
    }elseif(@$_SESSION['lang'] == 'uae'){
       $duoi = '_uae';
       @include('lang/uae.php');
    }elseif(@$_SESSION['lang'] == 'tai'){
       $duoi = '_tai';
       @include('lang/tai.php');
    }elseif(@$_SESSION['lang'] == 'ja'){
       $duoi = '_ja';
       @include('lang/ja.php');
    }else{
       $duoi = ''; 
       @include('lang/vi.php');      
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
            <div class="container">
                
                <div class="row">

                    <div class="col-md-2">

                        <div class="employer-left sticky-top">

                            <span class="mgb-20">
                                <div class="col-md-12">
                                    <a href="<?php echo e(asset('thong-tin-tai-khoan')); ?>" title=""><img src="<?php echo asset('upload/images/'.$user->photo); ?>" onerror="this.src='<?php echo e(asset('public/images/logo/logo.png')); ?>';" align="" height="150"></a>
                                    
                                </div>
                            </span>

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

                    <div class="col-md-10">

                        <div class="creat-cv">

                            <h1 class="title-cate mgb-20">Thống kê</h1>

                            <!-- Tab panes -->

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in show active" id="time-1">

                                    <div class="tk-content">

                                        <!-- <div class="tk-title mg-20 flex-center">

                                            <span>Thống kê số lượng CV được chọn ngày hôm nay</span>

                                            <div class="input-group date">

                                                <span class="inflex-center-center">(<input type="text" class="form-control" value="11 - 4 - 2018" placeholder="" readonly>)</span>

                                                <span class="input-group-addon">__<i class="fa fa-refresh"></i> <span>Đổi ngày khác</span></span>

                                            </div>

                                        </div> -->

                                        <p class="cv-total flex-center"><img src="<?php echo e(asset('public/images/plus/i-yes.png')); ?>" alt="" title=""> Số CV được chọn trong ngày: <span><?php echo e(count($cvchecked_day)); ?> CV</span></p>

                                        <div class="row">

                                            <div class="col-md-12">

                                                <div class="tk-time">

                                                    <h5 class="font-weight-bold mgb-20">CV được chọn theo ngành nghề</h5>

                                                    <ul class="row">
                                                        <?php $__currentLoopData = $career_cv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                            $users_count = DB::table('profile')
                                                            ->join('user_profile', 'user_profile.profile_id', '=', 'profile.id')
                                                            //->join('career', 'profile.career', '=', 'career.id')
                                                            ->select()
                                                            ->where('user_profile.status',1)
                                                            ->where('profile.career',$item['id'])
                                                            ->get();

                                                        ?>
                                                        <li class="flex-center-between col-md-6">

                                                           <span>

                                                                <span><?php echo e($item["name".$duoi]); ?></span>

                                                                <a href="<?php echo e(asset('thong-ke-nganh-nghe/'.$item['id'])); ?>" title="">Xem</a>

                                                           </span>

                                                            <span><?php echo e(count($users_count)); ?> CV</span>

                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        

                                                    </ul>

                                                </div>

                                            </div>


                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="tk-time">

                                                    <h5 class="font-weight-bold mgb-20">CV được chọn theo giới tính</h5>

                                                    <ul>

                                                        <li class="flex-center-between">

                                                           <span>

                                                                <span>Nam</span>

                                                                <a href="<?php echo e(asset('thong-ke-gioi-tinh/nam')); ?>" title="">Xem</a>

                                                           </span>

                                                            <span><?php echo e(count($users_count_gender_nam)); ?> CV</span>

                                                        </li>

                                                        <li class="flex-center-between">

                                                           <span>

                                                                <span>Nữ</span>

                                                                <a href="<?php echo e(asset('thong-ke-gioi-tinh/nu')); ?>" title="">Xem</a>

                                                           </span>

                                                            <span><?php echo e(count($users_count_gender_nu)); ?> CV</span>

                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="tk-time tk-time-country">

                                                    <h5 class="font-weight-bold mgb-20">CV được chọn theo thị trường lao động</h5>

                                                    <ul>

                                                        <li class="flex-center-between">

                                                           <span>

                                                                <span><img src="<?php echo e(asset('public/images/plus/i-arap-md.png')); ?>" alt="" title=""> Ả Rập</span>

                                                                <a href="<?php echo e(asset('thong-ke-thi-truong/uae')); ?>" title="">Xem</a>

                                                           </span>

                                                            <span><?php echo e(count($users_count_country_uae)); ?> CV</span>

                                                        </li>

                                                        <li class="flex-center-between">

                                                           <span>

                                                                <span><img src="<?php echo e(asset('public/images/plus/i-nhatban-md.png')); ?>" alt="" title=""> Nhật Bản</span>

                                                                <a href="<?php echo e(asset('thong-ke-thi-truong/js')); ?>" title="">Xem</a>

                                                           </span>

                                                            <span><?php echo e(count($users_count_country_ja)); ?> CV</span>

                                                        </li>

                                                        <li class="flex-center-between">

                                                           <span>

                                                                <span><img src="<?php echo e(asset('public/images/plus/i-dailoan-md.png')); ?>" alt="" title=""> Đài Loan</span>

                                                                <a href="<?php echo e(asset('thong-ke-thi-truong/tai')); ?>" title="">Xem</a>

                                                           </span>

                                                            <span><?php echo e(count($users_count_country_tai)); ?> CV</span>

                                                        </li>

                                                        <li class="flex-center-between">

                                                           <span>

                                                                <span><img src="<?php echo e(asset('public/images/plus/i-nuoc.png')); ?>" alt="" title=""> Thị trường khác</span>

                                                                <a href="<?php echo e(asset('thong-ke-thi-truong/eg')); ?>" title="">Xem</a>

                                                           </span>

                                                            <span><?php echo e(count($users_count_country_eg)); ?> CV</span>

                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="cv-delete">

                                            <p class="cv-total flex-center"><img src="<?php echo e(asset('public/images/plus/i-no.png')); ?>" alt="" title=""> Số CV bị hủy trong ngày: <span class="txt-red"><?php echo e(count($cvchecked_month_remove)); ?> CV</span></p>

                                            <!-- <table class="table table-responsive">

                                                <thead>

                                                    <tr>

                                                        <th><span class="flex-center-between">STT<i class="fa fa-unsorted"></i> </span></th>

                                                        <th><span class="flex-center-between">ỨNG VIÊN<i class="fa fa-unsorted"></i></span> </th>

                                                        <th><span class="flex-center-between">NGÀNH NGHỀ<i class="fa fa-unsorted"></i></span> </th>

                                                        <th><span class="flex-center-between">THỊ TRƯỜNG<i class="fa fa-unsorted"></i></span> </th>

                                                        <th><span class="flex-center-between">NGÀY UP CV<i class="fa fa-unsorted"></i></span> </th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr class="click-tr">

                                                        <td>1</td>

                                                        <td>Phạm Huỳnh Anh Thư</td>

                                                        <td>Giúp việc</td>

                                                        <td>Nhật Bản</td>

                                                        <td>12 - 3 - 2018</td>

                                                    </tr>

                                                    <tr class="show-tr">

                                                        <td colspan="5">

                                                            <div class="cv-desc">

                                                                <div class="flex-center">

                                                                    <div class="c-image"><img src="images/plus/cv-default-lg.png" alt="" title=""> </div>

                                                                    <div class="c-text">

                                                                        <h4>Phạm Huỳnh Anh Thư</h4>

                                                                        <ul>

                                                                            <li><span>Giới tính: Nữ</span> <span>Ngày sinh: 10-05-1977</span> <span>Số điện thoại: 0924 124 563</span></li>

                                                                            <li>Địa chỉ hiện tại:  Số 4 - Nguyễn Đức Thọ - Mỹ Đình - Từ Liêm - Hà Nội - Việt Nam</li>

                                                                            <li>Ngày hủy:  31 - 3 - 2018</li>

                                                                            <li>Lí do hủy: Tuổi tác của bạn này hơi lớn, vì thế nên chúng tôi quyết định không chọn</li>

                                                                        </ul>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </td>

                                                    </tr>

                                                    <tr class="click-tr">

                                                        <td>2</td>

                                                        <td>Phạm Kim Long</td>

                                                        <td>Giúp việc</td>

                                                        <td>Nhật Bản</td>

                                                        <td>12 - 3 - 2018</td>

                                                    </tr>

                                                    <tr class="show-tr">

                                                        <td colspan="5">

                                                            <div class="cv-desc">

                                                                <div class="flex-center">

                                                                    <div class="c-image"><img src="images/plus/cv-default-lg.png" alt="" title=""> </div>

                                                                    <div class="c-text">

                                                                        <h4>Phạm Kim Long</h4>

                                                                        <ul>

                                                                            <li><span>Giới tính: Nữ</span> <span>Ngày sinh: 10-05-1977</span> <span>Số điện thoại: 0924 124 563</span></li>

                                                                            <li>Địa chỉ hiện tại:  Số 4 - Nguyễn Đức Thọ - Mỹ Đình - Từ Liêm - Hà Nội - Việt Nam</li>

                                                                            <li>Ngày hủy:  31 - 3 - 2018</li>

                                                                            <li>Lí do hủy: Tuổi tác của bạn này hơi lớn, vì thế nên chúng tôi quyết định không chọn</li>

                                                                        </ul>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </td>

                                                    </tr>

                                                    <tr class="click-tr">

                                                        <td>3</td>

                                                        <td>Trần Hà Đông</td>

                                                        <td>Giúp việc</td>

                                                        <td>Nhật Bản</td>

                                                        <td>12 - 3 - 2018</td>

                                                    </tr>

                                                    <tr class="show-tr">

                                                        <td colspan="5">

                                                            <div class="cv-desc">

                                                                <div class="flex-center">

                                                                    <div class="c-image"><img src="images/plus/cv-default-lg.png" alt="" title=""> </div>

                                                                    <div class="c-text">

                                                                        <h4>Trần Hà Đông</h4>

                                                                        <ul>

                                                                            <li><span>Giới tính: Nữ</span> <span>Ngày sinh: 10-05-1977</span> <span>Số điện thoại: 0924 124 563</span></li>

                                                                            <li>Địa chỉ hiện tại:  Số 4 - Nguyễn Đức Thọ - Mỹ Đình - Từ Liêm - Hà Nội - Việt Nam</li>

                                                                            <li>Ngày hủy:  31 - 3 - 2018</li>

                                                                            <li>Lí do hủy: Tuổi tác của bạn này hơi lớn, vì thế nên chúng tôi quyết định không chọn</li>

                                                                        </ul>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </td>

                                                    </tr>

                                                </tbody>

                                            </table> -->

                                            <!-- <div class="get-page">

                                                <div class="row">

                                                    <div class="col-md-6 flex-center">

                                                        <div class="number-page">

                                                            <span>Hiển thị</span>

                                                            <select class="box-radius">

                                                                <option>10</option>

                                                                <option>20</option>

                                                            </select>

                                                            <span>sản phẩm</span>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="paginations">

                                                            <ul class="flex-center-end">

                                                                <li>Trang</li>

                                                                <li><span>1</span></li>

                                                                <li><a href="" title="">2</a> </li>

                                                                <li><a href="" title="">3</a> </li>

                                                                <li><a href="" title="">4</a> </li>

                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div> -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class="text-center with_dieuhuong">Stt</th>

                                <th>Ứng viên</th>

                                <th>Ngành nghề</th>
                                <th>Thi trường</th>
                                <th>Ngày upload CV</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cvchecked_month_remove; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item_chon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $user_profile = DB::table('user_profile')->select()->where('user_id',Auth::guard('administrator')->user()->id)->where('profile_id',$item_chon['profile_id'])->first();
                                    $item = App\Profile::select()->where('id',$item_chon['profile_id'])->first();
                                ?>
                                <tr class="action-number">
                                    <td class="text-center"><?php echo e($k); ?></td>
                                    <td class="text-center"><?php echo e($item['name']); ?></td>
                                    <td class="text-center"><?php echo e($career->getNameCareer($item['career'],$duoi)); ?></td>
                                    <td class="text-center">
                                        <?php echo e($item['name']); ?>

                                    </td>
                                    <td class="text-center">11/12/2016</td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
    </section>

    <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<link rel="stylesheet" href="<?php echo e(url('public/admin_assets/plugins/datatables/dataTables.bootstrap.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('public/admin_assets/bootstrap/css/bootstrap.min.css')); ?>">
<script src="<?php echo e(url('public/admin_assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('public/admin_assets/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
<script type="text/javascript">
    $("#example1").DataTable();
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>