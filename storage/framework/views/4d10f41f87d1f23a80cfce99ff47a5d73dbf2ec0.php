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
    function deleteProfile(id){
        hoi= confirm("Bạn có chắc chắn muốn xóa?");
        if (hoi==true) 
            document.location = homeUrl()+"xoa/"+id;
    }
    
</script>
<div class="cd-main-content">

    <section class="breadcrumb">

        <div class="container">

            <ul class="flex-center-start">

                <li><a href="<?php echo e(asset('')); ?>" title=""><i class="fa fa-home"></i> Trang chủ </a> </li>

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

                            

                            <li><a href="tel:<?php echo e($user->phone); ?>" title=""><i class="fa fa-phone"></i> <?php echo e($user->phone); ?></a> </li>
                            <li><a href="<?php echo e(asset('quan-ly-ho-so')); ?>" title=""><i class="fa fa-user"></i> Quản lý hồ sơ</a> </li>
                            <li><a href="<?php echo e(asset('thong-ke')); ?>" title=""><i class="fa fa-user"></i> Thống kê</a> </li>
                            <!-- <li><a href="<?php echo e(asset('quan-ly-cv-chon')); ?>" title=""><i class="fa fa-address-book"></i> CV đã chọn</a> </li> -->
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

                    <div class="civils">

                        <div class="cv-filter">
                            <form name="frm_search" method="get" action="<?php echo url('tim-kiem-cv'); ?>">
                            <div class="row">
                                
                                    <div class="col-md-7 flex-center-between find-cv">
                                        
                                        
                                        <span>Tìm CV theo</span>
                                        <select class="style-input" name="career">
                                            <option value="">-- Ngành nghề --</option>

                                            <?php $__currentLoopData = $career_search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item['id']); ?>"><?php echo e($career->getNameCareer($item['id'],$duoi)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                        <div class="search">
                                                <input type="text" name="txtSearch" placeholder="Tìm tên ứng viên">

                                                <button type="submit"><i class="fa fa-search"></i> </button>

                                        </div>
                                        
                                    </div>
                                
                                <div class="col-md-5 flex-center-end">

                                    <a href="<?php echo e(asset('tao-ho-so')); ?>" title="" class="creat-cv-button inflex-center-center"><i class="fa fa-hand-o-right"></i> Tạo CV</a>

                                </div>
                                
                            </div>
                            </form>
                        </div>

                        <div class="cv-list">

                            <div class="row">
                                <?php $__currentLoopData = $result_cv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-3">

                                    <div class="cv-inner text-center">

                                        <div class="cv-image-thumb"><img src="<?php echo e(asset('upload/hinhanh/'.$item['photo'])); ?>" alt="" onerror="this.src='<?php echo e(asset('public/images/cv-default.png')); ?>';"  > </div>

                                        <p class="cv-name"><?php echo e($item['name']); ?></p>
                                        <p><?php echo e($vitri); ?>: <?php echo e($career->getNameCareer($item['career'],$duoi)); ?></p>

                                        <div class="cv-action">

                                            <a href="<?php echo e(asset('sua-cv/'.$item['id'])); ?>" title=""><i class="fa fa-edit"></i> <?php echo e($sua); ?></a>

                                           <a href="javascript:" onclick="deleteProfile(<?php echo e($item['id']); ?>)" title=""><i class="fa fa-trash"></i> <?php echo e($xoa); ?></a>

                                        </div>

                                    </div>

                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                

                            </div>
                            <?php echo e($result_cv->links()); ?>


                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>