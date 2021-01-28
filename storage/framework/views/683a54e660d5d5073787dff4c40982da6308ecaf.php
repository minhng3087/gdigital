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

                            <p>
                                <!-- <a href="" data-toggle="modal" data-target="#change-image" class="font-italic blue-txt">
                                <i class="fa fa-image"></i> Thay đổi hình ảnh</a>  -->
                                <label class="hidden">
                                    <input type="file" name="fImages">
                                    <input type="hidden" name="img_current" value="<?php echo $user->photo; ?>"  >
                                </label>
                                
                            </p>

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
                            <!-- <ul>
                                <li class="active">
                                    <div class="account-image">
                                        <div class="acc-name">
                                            <span><?php echo $user->name; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?php echo e(asset('user/thong-tin-tai-khoan')); ?>" title="">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Sửa thông tin
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(asset('user/lich-su-don-hang')); ?>" title="">
                                        <i class="fa fa-calendar-plus-o"></i>
                                        Lịch sử đơn hàng
                                    </a>
                                </li>
                                <?php if(Auth::guard('customer')->check()): ?>
                                <li>
                                    <a href="<?php echo e(asset('user/doi-mat-khau')); ?>" title="">
                                        <i class="fa fa-refresh"></i>
                                        Đổi mật khẩu
                                    </a>
                                </li>
                                <?php endif; ?>
                                <li>
                                    <a href="<?php echo e(asset('dang-xuat')); ?>" title="">
                                        <i class="fa fa-sign-out"></i>
                                        Thoát
                                    </a>
                                </li>
                            </ul> -->

                        </div>

                    </div>

                    <div class="col-md-10">

                        <div class="employer-edit">
                            
                            

                                <h5>Thông tin công ty</h5>
                                <?php if(session('status')): ?>
                                    <div class="alert alert-info"><?php echo e(session('status')); ?></div>
                                <?php endif; ?>
                                <div class="row">

                                    <div class="col-md-2 flex-center"><span>Tên công ty</span></div>

                                    <div class="col-md-6">

                                        <input type="text" placeholder="" name="company" value="<?php echo e($user->company); ?>" class="style-input">

                                    </div>

                                </div>

                                <div class="row mgt-20">

                                    <div class="col-md-2 flex-center"><span>Điện thoại liên hệ</span></div>
                                    <div class="col-md-6 flex-center block-2">
                                        <div class="country-code">
                                            <div class="country-select">
                                                <?php if($user->code=='+84'): ?>
                                                <img src="<?php echo e(asset('public/images/plus/i-vn-sm.png')); ?>" alt="" title="">
                                                <button onclick="return false;" name="code" value="+84" class="code">(+84)</button>
                                                <?php elseif($user->code=='+44'): ?>
                                                <img src="<?php echo e(asset('public/images/plus/i-eng-sm.png')); ?>" alt="" title="">
                                                <button onclick="return false;" name="code" value="+44" class="code">(+44)</button>
                                                <?php elseif($user->code=='+971'): ?>
                                                <img src="<?php echo e(asset('public/images/plus/i-arap-sm.png')); ?>" alt="" title="">
                                                <button onclick="return false;" name="code" value="+971" class="code">(+971)</button>
                                                <?php elseif($user->code=='+886'): ?>
                                                <img src="<?php echo e(asset('public/images/plus/i-dailoan-sm.png')); ?>" alt="" title="">
                                                <button onclick="return false;" name="code" value="+886" class="code">(+886)</button>
                                                <?php else: ?>
                                                <img src="<?php echo e(asset('public/images/plus/i-nhatban-sm.png')); ?>" alt="" title="">
                                                <button onclick="return false;" name="code" value="+81" class="code">(+81)</button>
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

                                                        <span class="code-span"><img src="<?php echo e(asset('public/images/plus/i-arap-sm.png')); ?>" alt="" title=""> <span class="code-txt">(+971) </span></span>

                                                        <span>UAE</span>

                                                    </li>

                                                    <li>

                                                        <span class="code-span"><img src="<?php echo e(asset('public/images/plus/i-dailoan-sm.png')); ?>" alt="" title=""> <span class="code-txt">(+886) </span></span>

                                                        <span>Taiwan</span>

                                                    </li>

                                                    <li>

                                                        <span class="code-span"><img src="<?php echo e(asset('public/images/plus/i-nhatban-sm.png')); ?>" alt="" title=""> <span class="code-txt">(+81) </span></span>

                                                        <span>Japan</span>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                        <input type="text" placeholder="Số điện thoại" required="" value="<?php echo e($user->phone); ?>" name="phone" class="style-input">

                                    </div>

                                </div>

                                <div class="row mgt-20">

                                    <div class="col-md-2 flex-center"><span>Email</span></div>

                                    <div class="col-md-6">

                                        <input type="email" placeholder="Nhập email" name="email" required="" value="<?php echo e($user->email); ?>" class="style-input">

                                    </div>

                                </div>

                                <div class="row mgt-20">

                                    <div class="col-md-2 flex-center"><span>Địa chỉ</span></div>

                                    <div class="col-md-6">

                                        <div class="row box-3">

                                            <div class="col-md-6">

                                                <select class="form-control" required="" id="city" name="city">
                                                    <option value="">Chọn tỉnh thành</option>
                                                    <?php foreach($result_tinh as $item){ ?>
                                                        <option <?php if($user->city == $item->id): ?> selected <?php endif; ?> value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                                                    <?php }?>

                                                </select>

                                            </div>

                                            <div class="col-md-6" >

                                                <select class="form-control" required="" id="district" name="district" >

                                                    <option value="">Chọn quận huyện</option>
                                                    <?php 
                                                        if($user->city>0){
                                                            $result_quanhuyen = DB::table('district')->select()->where('cate_id',$user->city)->get();
                                                        foreach($result_quanhuyen as $item){ 
                                                    ?>
                                                        <option <?php if($user->district == $item->id): ?> selected <?php endif; ?> value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                                                    <?php 
                                                            }
                                                        }
                                                    ?>
                                                </select>

                                            </div>

                                            <div class="col-md-12 mgt-20">

                                                <input type="text" name="address" value="<?php echo e($user->address); ?>" placeholder="Địa chỉ" class="form-control">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="cache"></div>

                                <h5>Thông tin bổ sung</h5>

                                <div class="row">

                                    <div class="col-md-2"><span>Giới thiệu </span></div>

                                    <div class="col-md-6">

                                        <textarea class="style-input" name="note"><?php echo e($user->note); ?></textarea>

                                        <p class="note">Ghi tóm tắt về công ty. Tối đa 1000 ký tự</p>

                                    </div>

                                </div>

                                <div class="row block-1">

                                    <div class="col-md-2 flex-center"><span>Người đại diện</span></div>

                                    <div class="col-md-5 flex">

                                        <select class="style-input" name="gender">

                                            <option value="1" <?php if($user->gender == 1): ?> selected <?php endif; ?>>Ông</option>

                                            <option value="2" <?php if($user->gender == 2): ?> selected <?php endif; ?>>Bà</option>

                                        </select>

                                        <input type="text" placeholder="" class="style-input" name="name" value="<?php echo e($user->name); ?>">

                                    </div>

                                </div>

                                <div class="row mgt-20">

                                    <div class="col-md-2 flex-center"><span>Chức vụ</span></div>

                                    <div class="col-md-5">

                                        <input type="text" placeholder="Chức vụ" name="chucvu" value="<?php echo e($user->chucvu); ?>" class="style-input">

                                    </div>

                                </div>

                                <div class="row mgt-20">

                                    <div class="col-md-2 flex-center"><span>Quy mô công ty</span></div>

                                    <div class="col-md-5">

                                        <input type="text" placeholder="Quy mô" name="quymo" value="<?php echo e($user->quymo); ?>" class="style-input">

                                    </div>

                                </div>

                                <div class="row mgt-20">

                                    <div class="col-md-2 flex-center"><span>Thời gian làm việc</span></div>

                                    <div class="col-md-5">

                                        <input type="text" placeholder="Thời gian làm việc" value="<?php echo e($user->timework); ?>" name="timework" class="style-input">

                                        <p class="note">Ghi thời gian theo khu vực mà bạn đã chọn. Ví dụ: Việt Nam (8h - 17h30)</p>

                                    </div>

                                </div>

                                <div class="row mgt-20">

                                    <div class="col-md-2 col-6 flex-center"><span>Thị trường lao động</span></div>

                                    <div class="col-md-5 col-6">

                                        <div class="country-chosen">
                                            <?php if($user->country=='uae'): ?>
                                            <img src="<?php echo e(asset("public/images/plus/i-arap.png")); ?>" alt="" type="">
                                            <span class="font-weight-bold mgl-10">Ả Rập</span>
                                            <?php elseif($user->country=='tai'): ?>
                                            <img src="<?php echo e(asset("public/images/plus/i-dailoan.png")); ?>" alt="" type="">
                                            <span class="font-weight-bold mgl-10">Đài Loan</span>
                                            <?php elseif($user->country=='ja'): ?>
                                            <img src="<?php echo e(asset("public/images/plus/i-nhatban.png")); ?>" alt="" type="">
                                            <span class="font-weight-bold mgl-10">Nhật bản</span>
                                            <?php elseif($user->country=='eg'): ?>
                                            <img src="<?php echo e(asset("public/images/plus/i-nuoc.png")); ?>") }}" alt="" type="">
                                            <span class="font-weight-bold mgl-10">Thị trường khác</span>
                                            <?php endif; ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="row mgt-20">

                                    <div class="col-md-2"><span>Ngành nghề</span></div>

                                    <div class="col-md-6">

                                        <?php 
                                            $career_list = explode(',', $user->career);
                                        ?>
                                        <select id="multiple" class="form-control select2" placeholder="Chọn ngành nghề" multiple name="career[]">
                                            <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if(in_array($item->id,$career_list)==1): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>

                                        <p class="note">Chọn những lĩnh vực mà công ty đang phát triển</p>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6 offset-md-2">

                                        <button type="submit" class="btn-bg">CẬP NHẬT</button>

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