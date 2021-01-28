

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Thêm mới tài khoản '); ?>

<?php $__env->startSection('action','List'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#city").change(function(){
            var id_cat=$(this).val();
            $("#district").load('get-district/'+id_cat);
        });
        $(".select2").select2();
    });
</script>

<!-- Content Header (Page header) -->

<style type="text/css">

    #mginb input{

        margin-bottom: 10px;

    }

</style>

<section class="content-header">



  <h1>



   <small>Thêm mới tài khoản</small>



  </h1>



  <ol class="breadcrumb">



    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>



    <li><a href="javascript:">Thêm mới tài khoản</a></li>



  </ol>



</section>



<!-- Main content -->



<section class="content">



  



    <div class="box">



    	<?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



        <div class="box-body">


              <form  action="<?php echo url('backend/userscustomer/posuse'); ?>" name="frmRegister" method="post" class="form-group modal_frm">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                <div class="col-md-12">
                    <div class="choose-country">

                          <ul class="flex-center-between market-tabs">

                              <li class="nav-item">

                                  <label>

                                      <input type="radio" name="choose_country" value="uae" checked>

                                      <div class="nav-links">

                                          <span><img src="<?php echo e(asset("public/images/plus/i-arap.png")); ?>" alt="" type=""> </span>

                                          <span>Ả Rập</span>

                                      </div>

                                  </label>

                              </li>

                              <li class="nav-item">

                                  <label>

                                      <input type="radio" value="tai" name="choose_country">

                                      <div class="nav-links">

                                          <span><img src="<?php echo e(asset("public/images/plus/i-dailoan.png")); ?>" alt="" type=""> </span>

                                          <span>Đài Loan</span>

                                      </div>

                                  </label>

                              </li>

                              <li class="nav-item">

                                  <label>

                                      <input type="radio" value="ja" name="choose_country">

                                      <div class="nav-links">

                                          <span><img src="<?php echo e(asset("public/images/plus/i-nhatban.png")); ?>" alt="" type=""> </span>

                                          <span>Nhật Bản</span>

                                      </div>

                                  </label>

                              </li>

                              <li class="nav-item">

                                  <label>

                                      <input type="radio" value="eg" name="choose_country">

                                      <div class="nav-links">

                                          <span><img src="<?php echo e(asset("public/images/plus/i-nuoc.png")); ?>") }}" alt="" type=""> </span>

                                          <span>Thị trường Anh / khác</span>

                                      </div>

                                  </label>

                              </li>

                          </ul>

                      </div>
                </div>
                 <div class="col-md-6 col-xs-12" id="mginb">
                        <div class="row block-1">

                            <div class="col-md-3 flex-center-end"><span>Họ tên NTD</span></div>

                            <div class="col-md-8 flex">
                                <input type="text" name="name" placeholder="Họ tên" required="" class="form-control">

                            </div>

                        </div>
                        <div class="row block-1">

                            <div class="col-md-3 flex-center-end"><span>Giới tính</span></div>

                            <div class="col-md-8 flex">

                                <select class="form-control" name="gender">

                                    <option value="1">Ông</option>

                                    <option value="2">Bà</option>

                                </select>

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Công ty</span></div>

                            <div class="col-md-8">

                                <input type="text" name="company" placeholder="Tên công ty" class="form-control">

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Đầu số</span></div>

                            <div class="col-md-8 flex-center block-2">

                                <select name="code" class="form-control">
                                  <option value="+84">Vietnam (+84)</option>
                                  <option value="+44">UK (+44)</option>
                                  <option value="+971">UAE (+971)</option>
                                  <option value="+886">Taiwan (+886)</option>
                                  <option value="+81">Japan (+81)</option>
                                </select>

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Điện thoại liên hệ</span></div>

                            <div class="col-md-8 flex-center block-2">

                                <input type="text" name="phone" required="" placeholder="Số điện thoại" class="form-control">

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Email</span></div>

                            <div class="col-md-8">

                                <input type="email" name="email" placeholder="Email" required="" class="form-control">

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-3 flex-end"><span>Địa chỉ</span></div>

                            <div class="col-md-8">

                                <div class="row box-3">

                                    <div class="col-md-6">

                                        <select class="form-control" required="" id="city" name="city">
                                            <option value="">Chọn tỉnh thành</option>
                                            <?php foreach($result_tinh as $item){ ?>
                                                <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                                            <?php }?>

                                        </select>

                                    </div>

                                    <div class="col-md-6" >

                                        <select class="form-control" required="" id="district" name="district" >

                                            <option value="">Chọn quận huyện</option>

                                        </select>

                                    </div>

                                    <div class="col-md-12 mgt-20">

                                        <input type="text" name="address" placeholder="Địa chỉ" class="form-control">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Ngành nghề kinh doanh</span></div>

                            <div class="col-md-8">

                                <select id="multiple" class="form-control select2" placeholder="Chọn ngành nghề" multiple name="career[]">
                                    <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>

                                <p class="note">Chọn những lĩnh vực mà công ty đang phát triển</p>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3 flex-center-end"><span>Tài khoản đăng nhập</span></div>

                            <div class="col-md-8">
                                <input type="text" placeholder="Tài khoản đăng nhập" name="username" required="required" class="form-control frm_user">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 flex-center-end"><span>Mật khẩu</span></div>

                            <div class="col-md-8">
                                <input type="password" placeholder="Mật khẩu" name="password"  required="required" class="form-control frm_pw">
                            </div>
                        </div>
                        <p style="margin-top: 30px;"><button type="submit" class="btn text-uppercase frm_btn btn-primary">Đăng ký</button></p>
                </div>
              </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->



    



</section><!-- /.content -->



<!-- Modal -->





<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>