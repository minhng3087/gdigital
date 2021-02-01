<?php $__env->startSection('content'); ?>
<?php $__env->startSection('controller','Bài viết'); ?>
<?php $__env->startSection('action','Sửa'); ?>
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
<section class="content">
    <div class="box">
    	<?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box-body">
      	<form method="post" name="frmEditProduct" action="backend/news/edit?id=<?php echo e($id); ?>&type=<?php echo e(@$_GET['type']); ?>" enctype="multipart/form-data">
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
								      	<input type="text" name="txtName" id="txtName" value="<?php echo e($data->name); ?>"  class="form-control" />
								      	<?php if($errors->first('txtName')!=''): ?>
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>
                        		      	<?php endif; ?>
									</div>

                  <div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">
								      	<label for="ten">Tiêu đề(English)</label>
								      	<input type="text" name="txtNameEng" id="txtName" value="<?php echo e($data->name_eg); ?>"  class="form-control" />
								      	<?php if($errors->first('txtNameEng')!=''): ?>
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtNameEng');; ?></label>
                        		      	<?php endif; ?>
									</div>
									<div class="form-group <?php if($errors->first('txtAlias')!=''): ?> has-error <?php endif; ?>">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias" id="txtAlias" value="<?php echo e($data->alias); ?>"  class="form-control" />
								      	<?php if($errors->first('txtAlias')!=''): ?>
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtAlias');; ?></label>
								      	<?php endif; ?>
									</div>
                                    <!---------------------->
                                      <div class="form-group">
								      	<label for="desc">Mô tả</label>
								      	<textarea name="txtDesc" rows="5" class="form-control"><?php echo e($data->mota); ?></textarea>
									</div>

                  <div class="form-group">
								      	<label for="desc">Mô tả (English)</label>
								      	<textarea name="txtDescEng" rows="5" class="form-control"><?php echo e($data->mota_eg); ?></textarea>
									</div>
                                    <div class="box box-info">
        				                <div class="box-header">
        				                  	<h3 class="box-title">Thông tin chi tiết</h3>
        				                  	<div class="pull-right box-tools">
        					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        					                </div>
        				                </div>
        				                <div class="box-body pad">
        				        			<textarea name="txtContent" id="txtContent" cols="50" rows="5"><?php echo e($data->content); ?></textarea>
        				        		</div>
        				        	</div>

                          <div class="box box-info">
        				                <div class="box-header">
        				                  	<h3 class="box-title">Thông tin chi tiết(English)</h3>
        				                  	<div class="pull-right box-tools">
        					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        					                </div>
        				                </div>
        				                <div class="box-body pad">
        				        			<textarea name="txtContentEng" id="txtContent" cols="50" rows="5"><?php echo e($data->content_eg); ?></textarea>
        				        		</div>
        				        	</div>
                                    <div class="clearfix"></div>
								</div>
                                 <!---------------- right ------------>
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
                                            <li>
                                                <a><span><input type="checkbox" name="status" <?php echo (!isset($data->status) || $data->status==1)?'checked="checked"':''; ?> /> Hiển thị</span></a>
                                            </li>
                                            <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="<?php echo isset($data->status) ? $data->stt : (count($product)+1); ?>" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                                            <div style="clear: both;"></div>
                                            <li><a href="<?php echo e(url('backend/news?type='.@$_GET['type'])); ?>"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                      <!-- /. box -->
                                        <!-- /.box -->
                                   <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Bài viết liên quan</h3>                      
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                      
                                            <!-- /.box-body -->
                                   </div>  
                                  <!-- -->    
                                      <!-- /.box -->
                                       <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Hình ảnh</h3>
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding" >
                                          <ul class="nav nav-pills nav-stacked">
                                            <li id="right-col-li" >
                                              		   <img src="<?php echo e(asset('upload/news/'.$data->photo)); ?>" id="output" />
                                                       <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
                                            </li>
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                      <div class="box box-solid" style="display: none;">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">icon</h3>
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding">
                                          <ul class="nav nav-pills nav-stacked">
                                            <li id="right-col-li" >
                                              		   <img src="<?php echo e(asset('upload/news/'.$data->photo2)); ?>" id="output" />
                                                       <input class="max-with" name="fImages2" type="file"  />
                                            </li>
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                    </div>
                                     <!---------------- end right -------->
							</div>
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
			    <div class="col-md-6">
			    </div>
			    <div class="clearfix"></div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
<script type="text/javascript">
     function loadview(id_cat,id_pr){
        $.ajax({
                url: 'backend/post/relationship',
                type: 'get',
                dataType:"html",
                data: {area_id: id_cat,area_pr: id_pr},
                success: function (data){
                    $("#load_view").html(data);
                }
            });
    }
    $(document).ready(function(){    
        $(".click_view").click(function(){
            var id_cat=$(this).attr('data-id');  
            var id_pr=$(this).attr('pr-id');  
            loadview(id_cat,id_pr);
        });
    }); 
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>