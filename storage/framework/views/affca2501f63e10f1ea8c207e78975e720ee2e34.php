
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
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
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

                <div class="col-md-10">

                    <div class="creat-cv">

                        <h1 class="title-cate mgb-20">Chỉnh sửa CV</h1>
                        <form name="frm_info" method="post" action="<?php echo url('sua-cv'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                            <input type="hidden" name="profile_id" value="<?php echo $profile->id; ?>" />
                            

                                    
                                    <div class="register-form">
                                        <div class="row">

                                            <div class="col-md-2 flex-center-end"><span>Thị trường lao động</span></div>

                                            <div class="col-md-10">

                                                <div class="row">

                                                    <div class="col-md-4">

                                                        <select class="style-input" name="country">
                                                            <option <?php if($profile['country']=='eg'): ?> selected <?php endif; ?> value="eg">Anh / khác</option>
                                                            <option <?php if($profile['country']=='uae'): ?> selected <?php endif; ?> value="uae">Ả rập</option>
                                                            <option <?php if($profile['country']=='tai'): ?> selected <?php endif; ?> value="tai">Đài loan</option>
                                                            <option <?php if($profile['country']=='ja'): ?> selected <?php endif; ?> value="ja">Nhật Bản</option>
                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-2 flex-end"><span>Ngành nghề ứng tuyển</span></div>

                                            <div class="col-md-10">

                                                <div class="row">

                                                    <div class="col-md-4">

                                                        <select class="style-input" name="career">
                                                            <?php $__currentLoopData = $career_cv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if($profile['career'] == $item['id']): ?> selected <?php endif; ?> value="<?php echo e($item['id']); ?>"><?php echo e($item['name'.$duoi]); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>

                                                        <p class="note">Chọn lĩnh vực mà ứng viên muốn nộp HS</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row block-1">

                                            <div class="col-md-2 flex-center-end"><span>Họ tên ứng viên</span></div>

                                            <div class="col-md-4 flex">

                                                <select class="style-input" name="gender">

                                                    <option <?php if($profile['gender']==1): ?> selected <?php endif; ?> value="1">Ông</option>

                                                    <option <?php if($profile['gender']==2): ?> selected <?php endif; ?> value="2">Bà</option>

                                                </select>

                                                <input type="text" placeholder="" value="<?php echo e($profile['name']); ?>" name="name" class="style-input">

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-2 flex-center-end"><span>Sinh nhật</span></div>

                                            <div class="col-md-10">

                                                <div class="row">

                                                    <div class="col-md-4">

                                                        <input type="date" placeholder="" value="<?php echo e($profile['birthday']); ?>" name="birthday" class="style-input">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-2 flex-center-end"><span>Điện thoại liên hệ</span></div>

                                            <div class="col-md-4 flex-center block-2">

                                                <div class="country-code">

                                                    <div class="country-select">

                                                        
                                                        <?php if($profile['code']=='(+84)'): ?>
                                                        <img src="<?php echo e(asset('public/images/plus/i-vn-sm.png')); ?>" alt="" title="">
                                                        <span class="code">(+84)</span>
                                                        <input type="hidden" name="code" class="code" value="(+84)">
                                                        <?php elseif($profile['code']=='(+44)'): ?>
                                                        <img src="<?php echo e(asset('public/images/plus/i-eng-sm.png')); ?>" alt="" title="">
                                                        <span class="code">(+44)</span>
                                                        <input type="hidden" name="code" class="code" value="(+44)">
                                                        <?php elseif($profile['code']=='(+971)'): ?>
                                                        <img src="<?php echo e(asset('public/images/plus/i-arap-sm.png')); ?>" alt="" title="">
                                                        <span class="code">(+971)</span>
                                                        <input type="hidden" name="code" class="code" value="(+971)">
                                                        <?php elseif($profile['code']=='(+886)'): ?>
                                                        <img src="<?php echo e(asset('public/images/plus/i-tai-sm.png')); ?>" alt="" title="">
                                                        <span class="code">(+886)</span>
                                                        <input type="hidden" name="code" class="code" value="(+886)">
                                                        <?php elseif($profile['code']=='(+81)'): ?>
                                                        <img src="<?php echo e(asset('public/images/plus/i-nhatban-sm.png')); ?>" alt="" title="">
                                                        <span class="code">(+81)</span>
                                                        <input type="hidden" name="code" class="code" value="(+81)">
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="country-list">

                                                        <ul>

                                                            <li>

                                                                <span class="code-span"><img src="<?php echo e(asset('public/images/plus/i-vn-sm.png')); ?>" alt="" title=""> <span class="code-txt">(+84)</span>  </span>

                                                                <span>Vietnam</span>

                                                            </li>

                                                            <li>

                                                                <span class="code-span"><img src="<?php echo e(asset('public/images/plus/i-eng-sm.png')); ?>" alt="" title=""> <span class="code-txt">(+44)</span> </span>

                                                                <span>UK</span>

                                                            </li>

                                                            <li>

                                                                <span class="code-span"><img src="<?php echo e(asset('public/images/plus/i-arap-sm.png')); ?>" alt="" title=""> <span class="code-txt">(+971)</span></span>

                                                                <span>UAE</span>

                                                            </li>

                                                            <li>

                                                                <span class="code-span"><img src="<?php echo e(asset('public/images/plus/i-dailoan-sm.png')); ?>" alt="" title=""> <span class="code-txt">(+886)</span></span>

                                                                <span>Taiwan</span>

                                                            </li>

                                                            <li>

                                                                <span class="code-span"><img src="<?php echo e(asset('public/images/plus/i-nhatban-sm.png')); ?>" alt="" title=""> <span class="code-txt">(+81)</span></span>

                                                                <span>Japan</span>

                                                            </li>

                                                        </ul>

                                                    </div>

                                                </div>

                                                <input type="text" placeholder="" value="<?php echo e($profile['phone']); ?>" name="phone" class="style-input">

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-2 flex-end"><span>Tỉnh thành/ Quận</span></div>

                                            <div class="col-md-8">

                                                <div class="row box-3">

                                                    <div class="col-md-6">

                                                        <select class="style-input" required="" id="city" name="city">
                                                            <option value="0">Chọn tỉnh thành</option>
                                                            <?php foreach($result_tinh as $item){ ?>
                                                                <option <?php if($profile['city']==$item->id): ?> selected <?php endif; ?> value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                                                            <?php }?>

                                                        </select>

                                                    </div>

                                                    <div class="col-md-6" >

                                                        <select class="style-input" required="" id="district" name="district" >

                                                            <option value="">Chọn quận huyện</option>
                                                            <?php

                                                                if(!empty($profile['city'])){
                                                                    $result_quan = DB::table('district')->select()->where('cate_id',$profile['city'])->orderby('stt','asc')->get();
                                                                foreach($result_quan as $item){ 
                                                            ?>
                                                                <option <?php if($profile['district']==$item->id): ?> selected <?php endif; ?> value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                                                            <?php } }?>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 flex-end"></div>
                                            <div class="col-md-8">
                                                <ul class="nav nav-tabs" role="tablist">

                                                    <li class="nav-item">

                                                        <a class="nav-link active" href="#country-1" role="tab" data-toggle="tab">

                                                            <img src="<?php echo e(asset('public/images/plus/i-vn-md.png')); ?>" alt="" title="">

                                                            <span class="mgl-10">VIE</span>

                                                        </a>

                                                    </li>

                                                    <li class="nav-item">

                                                        <a class="nav-link" href="#country-2" role="tab" data-toggle="tab">

                                                            <img src="<?php echo e(asset('public/images/plus/i-eng-md.png')); ?>" alt="" title="">

                                                            <span class="mgl-10">ENG</span>

                                                        </a>

                                                    </li>

                                                    <li class="nav-item">

                                                        <a class="nav-link" href="#country-3" role="tab" data-toggle="tab">

                                                            <img src="<?php echo e(asset('public/images/plus/i-arap-md.png')); ?>" alt="" title="">

                                                            <span class="mgl-10">UAE</span>

                                                        </a>

                                                    </li>

                                                    <li class="nav-item">

                                                        <a class="nav-link" href="#country-4" role="tab" data-toggle="tab">

                                                            <img src="<?php echo e(asset('public/images/plus/i-dailoan-md.png')); ?>" alt="" title="">

                                                            <span class="mgl-10">TAI</span>

                                                        </a>

                                                    </li>

                                                    <li class="nav-item">

                                                        <a class="nav-link" href="#country-5" role="tab" data-toggle="tab">

                                                            <img src="<?php echo e(asset('public/images/plus/i-nhatban-md.png')); ?>" alt="" title="">

                                                            <span class="mgl-10">JP</span>

                                                        </a>

                                                    </li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="form-group clearfix"></div>
                                                    <div role="tabpanel" class="tab-pane fade in show active" id="country-1">
                                                        <div class="form-group">
                                                            
                                                            <input type="text" placeholder="Nhập địa chỉ" value="<?php echo e($profile->address); ?>" name="address_vi" class="style-input">
                                                            <p class="note">Ghi rõ số nhà, đường, phường/xã</p>

                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="content_vi"><?php echo e($profile['content']); ?></textarea>
                                                            <script>
                                                                CKEDITOR.replace('content_vi');
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="country-2">
                                                        <div class="form-group">

                                                            <input type="text" value="<?php echo e($profile->address_eg); ?>" placeholder="Enter the address" name="address_eg" class="style-input">
                                                            <p class="note">Specify the number of houses, roads, wards / communes</p>

                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="content_eg"><?php echo e($profile['content_eg']); ?></textarea>
                                                            <script>
                                                                CKEDITOR.replace('content_eg');
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="country-3">
                                                        <div class="form-group">

                                                            <input type="text" placeholder="Nأدخل العنوان" value="<?php echo e($profile->address_uae); ?>" name="address_uae" class="style-input">
                                                            <p class="note">حدد عدد المنازل والطرق والأجنحة / البلديات</p>

                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="content_uae"><?php echo e($profile['content_uae']); ?></textarea>
                                                            <script>
                                                                CKEDITOR.replace('content_uae');
                                                            </script>
                                                        </div>
                                                    </div> 
                                                    <div role="tabpanel" class="tab-pane fade" id="country-4">
                                                        <div class="form-group">

                                                            <input type="text" value="<?php echo e($profile->address_tai); ?>" placeholder="输入地址" name="address_tai" class="style-input">
                                                            <p class="note">指定房屋，道路，病房/公社的数量</p>

                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="content_tai"><?php echo e($profile['content_tai']); ?></textarea>
                                                            <script>
                                                                CKEDITOR.replace('content_tai');
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="country-5">
                                                        <div class="form-group">

                                                            <input type="text" placeholder="住所を入力してください" value="<?php echo e($profile->address_ja); ?>" name="address_ja" class="style-input">
                                                            <p class="note">住宅、道路、区/コミューンの数を指定する</p>

                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="content_ja"><?php echo e($profile['content_ja']); ?></textarea>
                                                            <script>
                                                                CKEDITOR.replace('content_ja');
                                                            </script>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-2 flex-center-end"><span>Ảnh đại diện</span></div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <img src="<?php echo e(asset('upload/hinhanh/'.$profile['photo'])); ?>" onerror="this.src='<?php echo e(asset('public/images/cv-default.png')); ?>';"  alt="">
                                                </div>
                                                <div class="import-box">

                                                    <label>

                                                        <input type="file" name="fImages">

                                                        <div class="import-label flex-center-center">

                                                            <span><img src="<?php echo e(asset('public/images/cv-default.png')); ?>" alt=""></span>

                                                            <div class="import-txt">

                                                                <h5>Click để tải ảnh lên</h5>

                                                                <p>Chỉ chấp nhận dạng: jpg,jpeg,png</p>

                                                            </div>

                                                        </div>

                                                    </label>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-2 flex-center-end"><span>Bản mềm CV</span></div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    File hiện tại: <a href="<?php echo e(asset('upload/document/'.$profile['document'])); ?>"><b class="text-primary"><?php echo e($profile['document']); ?></b></a>
                                                    <input type="hidden" name="file_current" value="<?php echo e(asset('upload/document/'.$profile['document'])); ?>">
                                                </div>
                                                <div class="import-box">

                                                    <label>

                                                        <input type="file" name="fFile">

                                                        <div class="import-label flex-center-center">

                                                            <span><img src="<?php echo e(asset('public/images/plus/excel.png')); ?>" alt="" title=""> </span>

                                                            <div class="import-txt">

                                                                <h5>Click để tải lên CV</h5>

                                                                <p>Chỉ chấp nhận CV dạng *pdf hoặc *doc</p>

                                                            </div>

                                                        </div>

                                                    </label>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-10 offset-md-2">

                                                <p><button type="submit" class="btn-bg">Cập nhật CV</button> </p>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

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