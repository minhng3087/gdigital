<?php $__env->startSection('content'); ?>
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

                <li><a href="" title=""><i class="fa fa-home"></i>Trang chủ </a> </li>

                <li><span>Đăng ký</span> </li>

            </ul>

        </div>

    </section>

    <section class="regis-market">

        <div class="container">

            <div class="row">
                

                    <div class="col-md-8">

                        <h1 class="title-cate mgb-20">Đăng ký</h1>

                        <p class="mgb-20">Thị trường lao động</p>
                        <?php if(count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-info"><?php echo $error; ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <?php if(session('thongbao')): ?>
                                <div class="alert alert-info"><?php echo e(session('thongbao')); ?></div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <form class="register-form" name="frm_dangky" method="post" action="<?php echo url('gui-dang-ky'); ?>">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                            <div class="choose-country">

                                <ul class="flex-center-between market-tabs">

                                    <li class="nav-item">

                                        <label>

                                            <input type="radio" name="choose-country" value="Ả Rập" checked>

                                            <div class="nav-links">

                                                <span><img src="<?php echo e(asset("public/images/plus/i-arap.png")); ?>" alt="" type=""> </span>

                                                <span>Ả Rập</span>

                                            </div>

                                        </label>

                                    </li>

                                    <li class="nav-item">

                                        <label>

                                            <input type="radio" value="Đài Loan" name="choose-country">

                                            <div class="nav-links">

                                                <span><img src="<?php echo e(asset("public/images/plus/i-dailoan.png")); ?>" alt="" type=""> </span>

                                                <span>Đài Loan</span>

                                            </div>

                                        </label>

                                    </li>

                                    <li class="nav-item">

                                        <label>

                                            <input type="radio" value="Nhật Bản" name="choose-country">

                                            <div class="nav-links">

                                                <span><img src="<?php echo e(asset("public/images/plus/i-nhatban.png")); ?>" alt="" type=""> </span>

                                                <span>Nhật Bản</span>

                                            </div>

                                        </label>

                                    </li>

                                    <li class="nav-item">

                                        <label>

                                            <input type="radio" value="Thị trường Anh / khác" name="choose-country">

                                            <div class="nav-links">

                                                <span><img src="<?php echo e(asset("public/images/plus/i-nuoc.png")); ?>") }}" alt="" type=""> </span>

                                                <span>Thị trường Anh / khác</span>

                                            </div>

                                        </label>

                                    </li>

                                </ul>

                            </div>

                            <div class="row block-1">

                                <div class="col-md-3 flex-center-end"><span>Họ tên NTD</span></div>

                                <div class="col-md-8 flex">

                                    <select class="style-input" name="gender">

                                        <option value="Ông">Ông</option>

                                        <option value="Bà">Bà</option>

                                    </select>

                                    <input type="text" name="name" placeholder="" required="" class="style-input">

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3 flex-center-end"><span>Công ty</span></div>

                                <div class="col-md-8">

                                    <input type="text" name="company" value="" placeholder="" class="style-input">

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3 flex-center-end"><span>Điện thoại liên hệ</span></div>

                                <div class="col-md-8 flex-center block-2">

                                    <div class="country-code">

                                        <div class="country-select">

                                            <img src="<?php echo e(asset("public/images/plus/i-vn-sm.png")); ?>" alt="" title="">

                                            <button class="code">(+84)</button>

                                        </div>

                                        <div class="country-list">

                                            <ul>

                                                <li>

                                                    <span class="code-span"><img src="<?php echo e(asset("public/images/plus/i-vn-sm.png")); ?>" alt="" title=""> <span class="code-txt">(+84)</span>  </span>

                                                    <span>Vietnam</span>

                                                </li>

                                                <li>

                                                    <span class="code-span"><img src="<?php echo e(asset("public/images/plus/i-eng-sm.png")); ?>" alt="" title=""> <span class="code-txt">(+44)</span> </span>

                                                    <span>UK</span>

                                                </li>

                                                <li>

                                                    <span class="code-span"><img src="<?php echo e(asset("public/images/plus/i-arap-sm.png")); ?>" alt="" title=""> <span class="code-txt">(+971) </span></span>

                                                    <span>UAE</span>

                                                </li>

                                                <li>

                                                    <span class="code-span"><img src="<?php echo e(asset("public/images/plus/i-dailoan-sm.png")); ?>" alt="" title=""> <span class="code-txt">(+886) </span></span>

                                                    <span>Taiwan</span>

                                                </li>

                                                <li>

                                                    <span class="code-span"><img src="<?php echo e(asset("public/images/plus/i-nhatban-sm.png")); ?>" alt="" title=""> <span class="code-txt">(+81) </span></span>

                                                    <span>Japan</span>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                    <input type="text" name="phone" required="" placeholder="" class="style-input">

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3 flex-center-end"><span>Email</span></div>

                                <div class="col-md-8">

                                    <input type="email" name="email" placeholder="" required="" class="style-input">

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3 flex-end"><span>Địa chỉ</span></div>

                                <div class="col-md-8">

                                    <div class="row box-3">

                                        <div class="col-md-6">

                                            <select class="style-input" required="" id="city" name="city">
                                                <option value="">Chọn tỉnh thành</option>
                                                <?php foreach($result_tinh as $item){ ?>
                                                    <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                                                <?php }?>

                                            </select>

                                        </div>

                                        <div class="col-md-6" >

                                            <select class="style-input" required="" id="district" name="district" >

                                                <option value="">Chọn quận huyện</option>

                                            </select>

                                        </div>

                                        <div class="col-md-12 mgt-20">

                                            <input type="text" name="address" placeholder="" class="style-input">

                                            <p class="note"><?php echo e($ghirosonha); ?></p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3 flex-center-end"><span><?php echo e($nganhnghekinhdoanh); ?></span></div>

                                <div class="col-md-8">

                                    <select id="multiple" multiple name="career[]">
                                        <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                    <p class="note">Chọn những lĩnh vực mà công ty đang phát triển</p>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-8 offset-md-3">

                                    <p><button type="submit" class="btn-bg"><?php echo e($dangky); ?></button> </p>

                                </div>

                            </div>

                        </form>

                    </div>

            </div>

        </div>

    </section>

   <?php echo $__env->make('templates.layout.doitac', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#city").change(function(){
            var id_cat=$(this).val();
            $("#district").load('get-district/'+id_cat);
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>