<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Product Categories'); ?>

<?php $__env->startSection('action','Add'); ?>



<!-- Content Header (Page header) -->

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

        	

        	<form name="frmAdd" method="post" action="<?php echo route('backend.productcate.postAdd'); ?>" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	                </ul>

	                <div class="tab-content">

	                  	<div class="tab-pane active" id="tab_1">

	                  		<div class="row">

		                  		<div class="col-md-8 col-xs-12">

			                    	<div class="form-group">

								      	<label for="ten">Danh mục cha</label>

								      	<select name="txtProductCate" class="form-control">

								      		<option value="0">Chọn danh mục</option>

								      		<?php cate_parent($parent); ?>

								      	</select>

									</div>

									<div class="clearfix"></div>

							    	<div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">

								      	<label for="ten">Tên</label>

								      	<input type="text" name="txtName" id="txtName" value=""  class="form-control" />

								      	<?php if($errors->first('txtName')!=''): ?>

								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>

								      	<?php endif; ?>

									</div>

									<div class="form-group <?php if($errors->first('txtAlias')!=''): ?> has-error <?php endif; ?>">

								      	<label for="alias">Đường dẫn tĩnh</label>

								      	<input type="text" name="txtAlias" id="txtAlias" value=""  class="form-control" />

								      	<?php if($errors->first('txtAlias')!=''): ?>

								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtAlias');; ?></label>

								      	<?php endif; ?>

									</div>
                                    	<div class="form-group">

								      	<label for="txtTitle">Title</label>

								      	<input type="text" name="txtTitle" value=""  class="form-control" />

									</div>

		                    		<div class="form-group">

								      	<label for="keyword">Keyword</label>

								      	<textarea name="txtKeyword" rows="5" class="form-control"></textarea>

									</div>

									<div class="form-group">

								      	<label for="description">Description</label>

								      	<textarea name="txtDescription" rows="5" class="form-control"></textarea>

									</div>

								</div>
                                 <div class="col-md-3">
                                      <button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
                                      <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Tác vụ</h3>
                            
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="box-body no-padding">
                                          <ul class="nav nav-pills nav-stacked">
                                            <li><a style="font-weight: 400px;"><label><input type="checkbox" name="home" /> Hiển thị</label></a></li>
                                            <li><a style="font-weight: 400px;"><label><input type="checkbox" name="status" checked="checked"/> Hiển thị</label></a></li>
                                            <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="<?php echo count($parent)+1; ?>" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                                            <div style="clear: both;"></div>
                                            <li><a href="<?php echo e(url('backend/productcate')); ?>"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                          </ul>
                                        </div>
                                        
                                        <!-- /.box-body -->
                                      </div>
                                       <!-- /. box -->
                                         <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Hình ảnh</h3>
                        
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <ul class="nav nav-pills nav-stacked">
                                        <li id="right-col-li" >
                                               
                                          		   <img id="output" />
                                                   <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
                                            
                                        
                                        </li>
                                        <!-------------------->
                                       <li id="right-col-li" >
                                            	<label for="file">Quảng cáo</label>
        								     	<input type="file" id="file" name="fImages2" >
        							  </li>    
                                        <!-------------------->
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div> 
                                      <!-- /. box -->
                                   </div>
							</div>

							<div class="clearfix"></div>

	                  	</div><!-- /.tab-pane -->

	              

	                </div><!-- /.tab-content -->

	            </div>

	            <div class="clearfix"></div>

		    </form>

        </div><!-- /.box-body -->

    </div><!-- /.box -->

    

</section><!-- /.content -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>