
<?php $__env->startSection('content'); ?>
<?php
    use App\Career;
    $career = new Career;

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
<?php 
    if(Auth::guard('customer')->check()){
        $user = DB::table('users')->select()->where('id',Auth::guard('customer')->user()->id)->get()->first();
    }else{
        $user = DB::table('users')->select()->where('id',Auth::guard('administrator')->user()->id)->get()->first();
    }
?>
<script type="text/javascript">
    function checkedProfile(id){
        hoi= confirm("Bạn có chắc chắn muốn chọn CV này?");
        if (hoi==true) 
            document.location = homeUrl()+"/chon-cv/"+id;
    }
    function RemoveCheckedProfile(id){
        hoi= confirm("Bạn có chắc chắn muốn hủy chọn CV này?");
        if (hoi==true) 
            document.location = homeUrl()+"/huy-chon-cv/"+id;
    }
</script>
<div class="cd-main-content">

    <section class="breadcrumb">

        <div class="container">

            <ul class="flex-center-start">

                <li><a href="<?php echo e(asset('')); ?>" title=""><i class="fa fa-home"></i> Trang chủ </a> </li>

                <li><span> Nhà tuyển dụng</span> </li>

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

                                <li><i class="fa fa-map-marker"></i><?php echo e($user->address); ?></li>

                                <li><a href="tel:<?php echo e($user->phone); ?>" title=""><i class="fa fa-phone"></i> <?php echo e($user->phone); ?></a> </li>
                                <li><a href="<?php echo e(asset('danh-sach-cv')); ?>" title=""><i class="fa fa-address-book"></i> Danh sách CV</a> </li>
                                <li><a href="<?php echo e(asset('quan-ly-cv-chon')); ?>" title=""><i class="fa fa-address-book"></i> CV đã chọn</a> </li>
                                
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

                        <div class="cv-detail">

                            <h5 class="title-border">Thông tin cá nhân</h5>
                            <?php if(session('status')): ?>
                                <div class="alert alert-info"><?php echo e(session('status')); ?></div>
                            <?php endif; ?>
                            <div class="row">

                                <div class="col-md-2">

                                    <div class="cv-image">

                                        <img src="<?php echo asset('upload/hinhanh/'.$profile['photo']); ?>" onerror="this.src='<?php echo e(asset('public/images/logo/logo.png')); ?>';" alt="" title="">

                                    </div>

                                </div>

                                <div class="col-md-10">

                                    <h4><?php echo e($profile['name']); ?></h4>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="cv-info">

                                                <ul>

                                                    <li>Giới tính: <?php if($profile['gender']==1): ?> Nam <?php else: ?> Nữ <?php endif; ?>    |    Ngày sinh: <?=date('d/m/Y',strtotime($profile['birthday']))?></li>

                                                    <li>Địa chỉ hiện tại: <?php echo $profile['address'.$duoi]; ?></li>

                                                    <li>Số điện thoại: <span class="font-weight-bold"><?php echo $profile['phone']; ?></span> </li>
                                                </ul>

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="cv-info">

                                                <ul>

                                                    <li>Ngành nghề: <?php echo e($career->getNameCareer($profile['career'],$duoi)); ?></li>

                                                    <li>Thị trường:
                                                        <?php if($profile['country']=='eg'): ?> Anh / khác  <?php elseif($profile['country']=='uae'): ?> Ả rập <?php elseif($profile['country']=='tai'): ?>  Đài loan
                                                        <?php elseif($profile['country']=='ja'): ?> Nhật Bản
                                                        <?php endif; ?>

                                                    <li>Email: <?php echo $profile['email']; ?></li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="cvDetail-action">

                                <ul class="flex-center">
                                    <?php if(!empty($user_profile)): ?>
                                        <li><a href="javascript:" onclick="RemoveCheckedProfile(<?php echo e($profile['id']); ?>)" title="" class="choose-link text-danger"><i class="fa fa-star"></i> Hủy chọn CV</a> </li>
                                    <?php else: ?>
                                        <li><a href="javascript:" onclick="checkedProfile(<?php echo e($profile['id']); ?>)" title="" class="choose-link text-primary"><i class="fa fa-star"></i> Chọn CV</a> </li>
                                    <?php endif; ?>
                                    

                                    <li>Lượt xem: <?php echo e($profile['view']); ?></li>

                                    <li>Mã: <?php echo $profile['id']; ?></li>

                                    <li>Ngày làm mới: <?=date('d/m/Y',strtotime($profile['created_at']))?></li>

                                </ul>

                            </div>

                            <h5 class="title-border mg-20">Thông tin hồ sơ</h5>

                            <?php echo $profile['content'.$duoi]; ?>

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