

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Cập nhật tài khoản'); ?>

<?php $__env->startSection('action','Edit'); ?>

<!-- Content Header (Page header) -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#city").change(function(){
            var id_cat=$(this).val();
            $("#district").load('get-district/'+id_cat);
        });
        $(".select2").select2();
    });
</script>
<section class="content-header">

  <h1>

   	<?php echo $__env->yieldContent('controller'); ?>

    <small><?php echo $__env->yieldContent('action'); ?></small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>

    <li><a href="javascript:"><?php echo $__env->yieldContent('controller'); ?></a></li>

    <li class="active"><?php echo $__env->yieldContent('action'); ?></li>

  </ol>

</section>

<!-- Main content -->

<section class="content">

  

    <div class="box">

    	<?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="box-body">

        	<form method="post" action="backend/userscustomer/postedituse?id=<?php echo e($data->id); ?>" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
        		<div class="col-md-12">
                    <div class="choose-country">

                          <ul class="flex-center-between market-tabs">

                              <li class="nav-item">

                                  <label>

                                      <input type="radio" name="choose_country" value="uae" <?php if($data->country=='uae'): ?> checked <?php endif; ?>>

                                      <div class="nav-links">

                                          <span><img src="<?php echo e(asset("public/images/plus/i-arap.png")); ?>" alt="" type=""> </span>

                                          <span>Ả Rập</span>

                                      </div>

                                  </label>

                              </li>

                              <li class="nav-item">

                                  <label>

                                      <input type="radio" value="tai" name="choose_country" <?php if($data->country=='tai'): ?> checked <?php endif; ?>>

                                      <div class="nav-links">

                                          <span><img src="<?php echo e(asset("public/images/plus/i-dailoan.png")); ?>" alt="" type=""> </span>

                                          <span>Đài Loan</span>

                                      </div>

                                  </label>

                              </li>

                              <li class="nav-item">

                                  <label>

                                      <input type="radio" value="ja" name="choose_country" <?php if($data->country=='ja'): ?> checked <?php endif; ?>>

                                      <div class="nav-links">

                                          <span><img src="<?php echo e(asset("public/images/plus/i-nhatban.png")); ?>" alt="" type=""> </span>

                                          <span>Nhật Bản</span>

                                      </div>

                                  </label>

                              </li>

                              <li class="nav-item">

                                  <label>

                                      <input type="radio" value="eg" name="choose_country" <?php if($data->country=='eg'): ?> checked <?php endif; ?>>

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

                        <div class="row block-1 <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">

                            <div class="col-md-3 flex-center-end"><span>Họ tên NTD</span></div>

                            <div class="col-md-8 flex">
                                <input type="text" name="name" placeholder="Họ tên" value="<?php echo e($data->name); ?>" class="form-control">
								<?php if($errors->first('name')!=''): ?>

						      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('name');; ?></label>

						      	<?php endif; ?>
                            </div>

                        </div>
                        <div class="row block-1">

                            <div class="col-md-3 flex-center-end"><span>Giới tính</span></div>

                            <div class="col-md-8 flex">

                                <select class="form-control" name="gender">

                                    <option value="1" <?php if($data->gender == 1): ?> selected <?php endif; ?>>Ông</option>

                                    <option value="2" <?php if($data->gender == 2): ?> selected <?php endif; ?>>Bà</option>

                                </select>

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Công ty</span></div>

                            <div class="col-md-8">

                                <input type="text" name="company" placeholder="Tên công ty" value="<?php echo e($data->company); ?>" class="form-control">

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Đầu số</span></div>

                            <div class="col-md-8 flex-center block-2">

                                <select name="code" class="form-control">
                                  <option value="+84" <?php if($data->gender == '+84'): ?> selected <?php endif; ?> >Vietnam (+84)</option>
                                  <option value="+44" <?php if($data->gender == '+44'): ?> selected <?php endif; ?> >UK (+44)</option>
                                  <option value="+971" <?php if($data->gender == '+971'): ?> selected <?php endif; ?> >UAE (+971)</option>
                                  <option value="+886" <?php if($data->gender == '+886'): ?> selected <?php endif; ?> >Taiwan (+886)</option>
                                  <option value="+81" <?php if($data->gender == '+81'): ?> selected <?php endif; ?> >Japan (+81)</option>
                                </select>

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Điện thoại liên hệ</span></div>

                            <div class="col-md-8 flex-center block-2">

                                <input type="text" name="phone" value="<?php echo e($data->phone); ?>" placeholder="Số điện thoại" class="form-control">

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Email</span></div>

                            <div class="col-md-8">

                                <input type="email" name="email" placeholder="Email" required="" value="<?php echo e($data->email); ?>" class="form-control">

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
                                                <option <?php if($data->city == $item->id): ?> selected <?php endif; ?> value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                                            <?php }?>

                                        </select>

                                    </div>

                                    <div class="col-md-6" >

                                        <select class="form-control" required="" id="district" name="district" >

                                            <option value="">Chọn quận huyện</option>
											<?php 
												if($data->city>0){
													$result_quanhuyen = DB::table('district')->select()->where('cate_id',$data->city)->get();
												foreach($result_quanhuyen as $item){ 
											?>
                                                <option <?php if($data->district == $item->id): ?> selected <?php endif; ?> value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                                            <?php 
	                                        		}
	                                        	}
                                        	?>
                                        </select>

                                    </div>

                                    <div class="col-md-12 mgt-20">

                                        <input type="text" name="address" value="<?php echo e($data->address); ?>" placeholder="Địa chỉ" class="form-control">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-3 flex-center-end"><span>Ngành nghề kinh doanh</span></div>

                            <div class="col-md-8">
								<?php 
									$career_list = explode(',', $data->career);
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
                            <div class="col-md-3 flex-center-end"><span>Tài khoản đăng nhập</span></div>

                            <div class="col-md-8">
                                <input type="text" placeholder="Tài khoản đăng nhập" disabled value="<?php echo e($data->username); ?>" class="form-control frm_user">
                            </div>
                        </div>

                        <div class="row <?php if($errors->first('txtPasswordNew')!=''): ?> has-error <?php endif; ?>">
                            <div class="col-md-3 flex-center-end"><span>Mật khẩu mới</span></div>

                            <div class="col-md-8">
                                <input type="password" placeholder="Mật khẩu mới" name="passwordnew" class="form-control frm_pw">
                                <?php if($errors->first('passwordnew')!=''): ?>

						      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('passwordnew');; ?></label>

						      	<?php endif; ?>
                            </div>
                        </div>
                        <div class="box-footer">

					    	<div class="row">

								<div class="col-md-6">

							    	<button type="submit" class="btn btn-primary">Cập nhật</button>

							    	<button type="button" class="btn btn-danger" onclick="javascript:window.location='backend'">Thoát</button>

						    	</div>

					    	</div>

					  	</div>
                </div>
				<!-- End file code -->
			    <div class="clearfix"></div>
		    </form>

        </div><!-- /.box-body -->

    </div><!-- /.box -->

    

</section><!-- /.content -->

<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>