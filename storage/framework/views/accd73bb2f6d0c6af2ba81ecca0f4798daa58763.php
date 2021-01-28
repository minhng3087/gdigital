<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Product'); ?>

<?php $__env->startSection('action','Edit'); ?>

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
        	<form method="post" name="frmEditProduct" action="backend/product/edit?id=<?php echo e($id); ?>" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Nội dung</a></li>
	                    <li><a href="#tab_5" data-toggle="tab" aria-expanded="true">Hình ảnh</a></li>
	                </ul>

	                <div class="tab-content">

	                  	<div class="tab-pane active" id="tab_1">

	                  		<div class="row">

		                  		<div class="col-md-8 col-xs-12">
							    	<div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">
								      	<label for="ten">Tiêu đề</label>
								      	<input type="text" id="txtName" name="txtName" value="<?php echo e($data->name); ?>"  class="form-control" />
								      	<?php if($errors->first('txtName')!=''): ?>
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>
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
                                    
                                    <div class="box box-info">
        				                <div class="box-header">
        				                  	<h3 class="box-title">Mô tả</h3>
        				                  	<div class="pull-right box-tools">
        					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        					                </div>
        				                </div>
        				                <div class="box-body pad">
        				        			<textarea name="txtDesc" id="txtContent" cols="50" rows="5"><?php echo e($data->mota); ?></textarea>
        				        		</div>
        				        	</div>
                                    <div class="clearfix"></div>
                                     

            	                    <div class="clearfix"></div>

                                    <div class="form-group">
								      	<label for="title">Title Seo</label>
								      	<input type="text" name="txtTitle" value="<?php echo e($data->title); ?>"  class="form-control" />
									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Keyword Seo</label>
								      	<textarea name="txtKeyword" rows="5" class="form-control"><?php echo e($data->keyword); ?></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description Seo</label>
								      	<textarea name="txtDescription" rows="5" class="form-control"><?php echo e($data->description); ?></textarea>
									</div>
                                    <!---------------------->
								</div>
                                <!-----right------->
                                 <div class="col-md-3">
                              
                                 	<button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>

                                  <!-- /. box -->
                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Danh mục</h3>
                        
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <ul class="nav nav-pills nav-stacked">
                                          <div id="li-cate-admin">  
                                             <!----------------------------------------->
                                              <?php 
                                              $str_cate=explode(',',$data->cate_id);
                                              $cat_post= DB::table("product_categories")->select('id','name','display')->where('display',1)->where('parent_id',0)->get();
                                              foreach($cat_post as $row){
                                              $cat_post2= DB::table("product_categories")->select('id','name')->where('parent_id',$row->id)->where('display',1)->get();  
                                              ?>  
                                                 <li id="nhan-menu" >
                                                    <label class="selectit"><input <?php foreach($str_cate as $item){if($item == $row->id){echo 'checked';} }?> value="<?php echo e($row->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($row->name); ?></label>
                                                    <ul class="children">
                                                        <?php
                                                            foreach($cat_post2 as $rows){
                                                            $cat_post3= DB::table("product_categories")->select('id','name')->where('parent_id',$rows->id)->where('display',1)->get();     
                                                           
                                                        ?>    
                                                        <li id="nhan-menu" ><label class="selectit"><input <?php foreach($str_cate as $item){if($item == $rows->id){echo 'checked';} }?> value="<?php echo e($rows->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($rows->name); ?></label>
                                                            <ul class="children">
                                                            <?php  foreach($cat_post3 as $item){ ?>
                                                                <li id="nhan-menu" ><label class="selectit"><input <?php foreach($str_cate as $str_item){if($str_item == $item->id){echo 'checked';} }?> value="<?php echo e($item->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($item->name); ?></label></li>
                                                            <?php } ?>
                                                            </ul>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                 </li>
                                              <?php } ?>      
                                              <!----------------------------------------->
                                             </div>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  
                                  
                                  
                                  <!-- /.Giải pháp -->
                                 <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Giải pháp</h3>
                        
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <ul class="nav nav-pills nav-stacked">
                                          <li style="padding: 10px;">  
                                             <!----------------------------------------->
                                               <div class="form-group">
        								      	<label for="ten">Thông số 1</label>
        								      	<input type="text" name="text1" value="<?php echo e($data->text1); ?>" class="form-control" />
        									</div>
        
                                            <div class="form-group">
        
        								      	<label for="ten">Thông số 2</label>
        
        								      	<input type="text" name="text2" value="<?php echo e($data->text2); ?>" class="form-control" />
        
        									</div>
                                            <div class="form-group">
        
        								      	<label for="ten">Thông số 3</label>
        
        								      	<input type="text" name="text3" value="<?php echo e($data->text3); ?>" class="form-control" />
        
        									</div>    
                                              <!----------------------------------------->
                                             </li>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                
                                  <!-- /.Links -->
                                 <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Link hỗ trợ kỹ thuật</h3>
                        
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <ul class="nav nav-pills nav-stacked">
                                          <li style="padding: 10px;">  
                                             <!----------------------------------------->
                                               <div class="form-group">
        								      	<label for="ten">Links</label>
        								      	<input type="text" name="link" value="<?php echo e($data->link); ?>" class="form-control" />
        									</div>
        
                                             
                                              <!----------------------------------------->
                                             </li>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                 
                                </div>
                                
                                <!----- ENd right --->    
                              
							</div>
							<div class="clearfix"></div>

	                  	</div><!-- /.tab-pane -->
                        <div  class="tab-pane" id="tab_2">
                               <div class="box box-info">
    				                <div class="box-header">
    				                  	<h3 class="box-title">Nội dung</h3>
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
	                	<div  class="tab-pane" id="tab_5">
	                	    <div class="form-group">
                                <div class="row">
                                      <?php if(isset($product_img)): ?>
                                        <?php $__currentLoopData = $product_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <div style="position: relative;" class="file-preview-frame krajee-default  kv-preview-thumb" id="<?php echo $key; ?>">
                                              <img style="max-width: 200px;" src="<?php echo asset('uploads/images/img_detail/' . $item['image']); ?>" class="prodetail_img" idImg="<?php echo $item['id']; ?>" id="<?php echo $key; ?>">
                                              <a style="position: absolute;right: 0px;top: 0px;z-index: 999;" href="javascript:" type="button" id="del_img" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
                                          </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      <?php endif; ?>

                                       <div style="clear: both;"></div> 
                              </div>
                              <label class="control-label">Chọn ảnh</label>
                              <input id="input-2" name="detailImg[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif"]'>
                            </div>
	                    	<div class="clearfix"></div>
	                  	</div>
	                </div><!-- /.tab-content -->
	            </div>
	            </div>
	            <div class="clearfix"></div>
			  
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>