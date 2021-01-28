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

<!-- Main content -->

<section class="content">

  

    <div class="box">

    	<?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="box-body">

        	<form method="post" name="frmEditProduct" action="backend/video/edit?id=<?php echo e($id); ?>" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

      			<div class="nav-tabs-custom">

	                <ul class="nav nav-tabs">

	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Nội dung (English)</a></li>
                        <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Nội dung (UAE)</a></li>
                        <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Nội dung (Taiwan)</a></li>
                        <li><a href="#tab_5" data-toggle="tab" aria-expanded="false">SEO</a></li>
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
                                    <div class="form-group">
								      	<label for="ten">Tiêu đề(English)</label>
								      	<input type="text" name="name_eg" value="<?php echo $data->name_eg;?>"  class="form-control" />
									</div>
                                    <div class="form-group">
								      	<label for="ten">Tiêu đề(UAE)</label>
								      	<input type="text" name="name_uae" value="<?php echo $data->name_uae;?>"  class="form-control" />
									</div>
                                    <div class="form-group">
								      	<label for="ten">Tiêu đề(Taiwan)</label>
								      	<input type="text" name="name_tai" value="<?php echo $data->name_tai;?>"  class="form-control" />
									</div>
									<div class="form-group <?php if($errors->first('txtAlias')!=''): ?> has-error <?php endif; ?>">

								      	<label for="alias">Đường dẫn tĩnh</label>

								      	<input type="text" name="txtAlias" id="txtAlias" value="<?php echo e($data->alias); ?>"  class="form-control" />

								      	<?php if($errors->first('txtAlias')!=''): ?>

								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtAlias');; ?></label>

								      	<?php endif; ?>

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
                                            <li><a href="<?php echo e(url('backend/video')); ?>"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                      <!-- /. box -->
                                      <!-- /.box -->
                                       <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Link youtube</h3>
                            
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding" >
                                          <ul class="nav nav-pills nav-stacked">
                                            <li id="right-col-li" >
                                                   
                                              	     <input name="link" value="<?php echo e($data->link); ?>" type="text" />
                                                
                                            
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
                         <div class="tab-pane" id="tab_2">
                                 <div class="box box-info">
    				                <div class="box-header">
    				                  	<h3 class="box-title">Nội dung - English</h3>
    				                  	<div class="pull-right box-tools">
    					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    					                </div>
    				                </div>
    				                <div class="box-body pad">
    				        			<textarea name="content_eg" id="txtContent" cols="50" rows="5"><?php echo $data->content_eg;?></textarea>
    				        		</div>
    				        	</div>
                        </div>
                        <div class="tab-pane" id="tab_3">
                                <div class="box box-info">
    				                <div class="box-header">
    				                  	<h3 class="box-title">Nội dung - UAE</h3>
    				                  	<div class="pull-right box-tools">
    					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    					                </div>
    				                </div>
    				                <div class="box-body pad">
    				        			<textarea name="content_uae" id="txtContent" cols="50" rows="5"><?php echo $data->content_uae;?></textarea>
    				        		</div>
    				        	</div>
                        </div>
                        <div class="tab-pane" id="tab_4">
                            <div class="box box-info">
    				                <div class="box-header">
    				                  	<h3 class="box-title">Nội dung - TAI</h3>
    				                  	<div class="pull-right box-tools">
    					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    					                </div>
    				                </div>
    				                <div class="box-body pad">
    				        			<textarea name="content_tai" id="txtContent" cols="50" rows="5"><?php echo $data->content_tai;?></textarea>
    				        		</div>
    				        	</div>
                        </div>
                         
                         <div class="tab-pane" id="tab_5">
                            <div class="col-md-3 col-xs-12">
                               	<div class="form-group">
							      	<label for="txtTitle">Title</label>
							      	<input type="text" name="txtTitle" value="<?php echo $data->title;?>"  class="form-control" />

								</div>
                            	<div class="form-group">
							      	<label for="keyword">Keyword</label>
							      	<textarea name="txtKeyword" rows="5"  class="form-control"><?php echo $data->keyword;?></textarea>
								</div>
                                <div class="form-group">
							      	<label for="description">Description</label>
							      	<textarea name="txtDescription" rows="5" class="form-control"><?php echo $data->description;?></textarea>
								</div>
                            </div>
                            <div class="col-md-3 col-xs-12">
		                    	 <div class="form-group">
							      	<label for="title_eg">Title(English)</label>
							      	<input type="text" name="title_eg" value="<?php echo $data->title_eg;?>" maxlength="255"  class="form-control" />

								</div>
                            	<div class="form-group">
							      	<label for="keyword">Keyword(English)</label>
							      	<textarea name="keyword_eg" rows="5" maxlength="255" class="form-control"><?php echo $data->keyword_eg;?></textarea>
								</div>
                                <div class="form-group">
							      	<label for="description">Description(English)</label>
							      	<textarea name="description_eg" rows="5" class="form-control"><?php echo $data->description_eg;?></textarea>
								</div>
                            </div>        
                            <div class="col-md-3 col-xs-12">    
								 <div class="form-group">
							      	<label for="title_eg">Title(UAE)</label>
							      	<input type="text" name="title_uae" value="<?php echo $data->title_uae;?>" maxlength="255"  class="form-control" />

								</div>
                            	<div class="form-group">
							      	<label for="keyword">Keyword(UAE)</label>
							      	<textarea name="keyword_uae" rows="5" maxlength="255" class="form-control"><?php echo $data->keyword_uae;?></textarea>
								</div>
                                <div class="form-group">
							      	<label for="description">Description(UAE)</label>
							      	<textarea name="description_uae" rows="5" class="form-control"><?php echo $data->description_uae;?></textarea>
								</div>	
                            </div>  
                            <div class="col-md-3 col-xs-12">    
								<div class="form-group">
							      	<label for="title_eg">Title(Taiwan)</label>
							      	<input type="text" name="title_tai" value="<?php echo $data->title_tai;?>" maxlength="255"  class="form-control" />

								</div>
                            	<div class="form-group">
							      	<label for="keyword">Keyword(Taiwan)</label>
							      	<textarea name="keyword_tai" rows="5" maxlength="255" class="form-control"><?php echo $data->keyword_tai;?></textarea>
								</div>
                                <div class="form-group">
							      	<label for="description">Description(Taiwan)</label>
							      	<textarea name="description_tai" rows="5" class="form-control"><?php echo $data->description_tai;?></textarea>
								</div>	
                            </div>
                            <div class="clearfix"></div>      
                        </div> 


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



<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>