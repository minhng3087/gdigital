<?php $__env->startSection('content'); ?>
<?php $__env->startSection('controller','Quản lý '.$trang); ?>
<?php $__env->startSection('action','Thêm mới'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   	<?php echo $__env->yieldContent('controller'); ?>
    <small><?php echo $__env->yieldContent('action'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li><a href="javascript:"><?php echo $__env->yieldContent('controller'); ?></a></li>
    <li class="active"><?php echo $__env->yieldContent('action'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box">
    	<?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box-body">
        	<form name="frmAdd" method="post" action="<?php echo route('backend.product.postAdd'); ?>" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-8 col-xs-12">
							    	<div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">
								      	<label for="ten">Tiêu đề</label>
								      	<input type="text" id="txtName" name="txtName" value=""  class="form-control" />
								      	<?php if($errors->first('txtName')!=''): ?>
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>
								      	<?php endif; ?>
									</div>
                   <div class="form-group">
								      	<label for="ten">Tiêu đề(English)</label>
								      	<input type="text" name="txtNameEng" value=""  class="form-control" />
									</div>
									<div class="form-group <?php if($errors->first('txtAlias')!=''): ?> has-error <?php endif; ?>">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias" id="txtAlias" value=""  class="form-control" />
								      	<?php if($errors->first('txtAlias')!=''): ?>
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtAlias');; ?></label>
								      	<?php endif; ?>
									</div>
                  <div class="form-group">
							      	  <label for="desc">Mô tả</label>
							      	  <textarea  name="txtDesc" rows="5" class="form-control"></textarea>
									</div>

                  <div class="form-group">
							      	  <label for="desc">Mô tả(English)</label>
							      	  <textarea  name="txtDescEng" rows="5" class="form-control"></textarea>
									</div>
                                    <div class="clearfix"></div>
                                        <div class="box box-info">
            				                <div class="box-header">
            				                  	<h3 class="box-title">Nội dung</h3>
            				                  	<div class="pull-right box-tools">
            					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            					                </div>
            				                </div>
            				                <div class="box-body pad">
            				        			<textarea name="txtContent" id="txtContent" cols="50" rows="5"></textarea>
            				        		</div>
            				        	</div>
                              <div class="box box-info">
            				                <div class="box-header">
            				                  	<h3 class="box-title">Nội dung(English)</h3>
            				                  	<div class="pull-right box-tools">
            					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            					                </div>
            				                </div>
            				                <div class="box-body pad">
            				        			<textarea name="txtContentEng" id="txtContent" cols="50" rows="5"></textarea>
            				        		</div>
            				        	</div>
            	                    <div class="clearfix"></div>
								</div>
                               <div class="col-md-3">
					                <input type="hidden" name="txtCom" value="<?php echo e(@$_GET['type']); ?>"/>
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
                                        <li>
                                            <a><span><input type="checkbox" name="status" checked="checked"> Hiển thị</span></a>
                                        </li>
                                        <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="<?php echo @count($data)+1; ?>" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                                        <div style="clear: both;"></div>
                                        <li><a href="backend/product?type=<?php echo e(@$_GET[type]); ?>"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /. box -->
                                  <div class="box box-solid">
                                    <!-- <div class="box-header with-border">
                                      <h3 class="box-title">Danh mục</h3>                      
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                                      </div>
                                    </div> -->
                                    <!-- /.box-header -->
                                  
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->
                                   <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Bài viết liên quan</h3>                      
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                       <div class="box-body no-padding">
                                          <ul class="nav nav-pills nav-stacked">
                                              <div id="li-cate-admin">  
                                             <!----------------------------------------->
                                                  <div id="load_view"></div>    
                                             <!----------------------------------------->
                                            </div>
                                          </ul>
                                        </div>
                                            <!-- /.box-body -->
                                   </div>  
                                  <!-- -->  
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
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                   <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Hình ảnh 1</h3>
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <ul class="nav nav-pills nav-stacked">
                                        <li id="right-col-li" >
                             

                                          		  <input class="max-with" name="fImages1" type="file"  />
                                        </li>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>

                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Hình ảnh 2</h3>
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <ul class="nav nav-pills nav-stacked">
                                        <li id="right-col-li" >
                                   
                                        
                                          		  <input class="max-with" name="fImages2" type="file"  />
                                        </li>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>

                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Hình ảnh 3</h3>
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <ul class="nav nav-pills nav-stacked">
                                        <li id="right-col-li" >
                                        
                                          		  <input class="max-with" name="fImages3" type="file"/>
                                        </li>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                </div>
							</div>
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
                         <div class="tab-pane" id="tab_2">
                                <div class="form-group">
						      	   <label for="desc">Mô tả</label>
						      	   <textarea  name="mota_eg" rows="5" class="form-control"></textarea>
								</div>
                                 <div class="box box-info">
    				                <div class="box-header">
    				                  	<h3 class="box-title">Nội dung - English</h3>
    				                  	<div class="pull-right box-tools">
    					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    					                </div>
    				                </div>
    				                <div class="box-body pad">
    				        			<textarea name="content_eg" id="txtContent" cols="50" rows="5"></textarea>
    				        		</div>
    				        	</div>
                        </div>
                        <div class="clearfix"></div>  
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>