<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Product'); ?>

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

        	

        	<form name="frmAdd" method="post" action="<?php echo route('backend.product.postAdd'); ?>" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

	      		

      			<div class="nav-tabs-custom">

	                <ul class="nav nav-tabs">

	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Thông số kỹ thuật</a></li>
	                  	<li ><a href="#tab_5" data-toggle="tab" aria-expanded="true">Hình ảnh</a></li>
                                   
	                  	

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
									<div class="form-group <?php if($errors->first('txtAlias')!=''): ?> has-error <?php endif; ?>">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias" id="txtAlias" value=""  class="form-control" />
								      	<?php if($errors->first('txtAlias')!=''): ?>
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtAlias');; ?></label>
								      	<?php endif; ?>
									</div>
									<div class="form-group">
								      	<label for="ten">Giá</label>
								      	<input type="text" name="txtPrice"  onkeyup="FormatNumber(this);"  onKeyPress="return isNumberKey(event)" value=""  class="form-control" />
									</div>

									<div class="form-group hidden">

								      	<label for="ten">Giá mới</label>

								      	<input type="text" name="pricesale"  onkeyup="FormatNumber(this);"  onKeyPress="return isNumberKey(event)" value=""  class="form-control" />

									</div>
                            
								  

                                    <div class="form-group">

								      	<label for="ten">text(chưa biết)</label>

								      	<input type="text" name="text1" class="form-control" />

									</div>

                                    <div class="form-group">

								      	<label for="ten">text2(chưa biết)</label>

								      	<input type="text" name="text2" class="form-control" />

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
            				        			<textarea name="txtDesc" id="txtContent" cols="50" rows="5"></textarea>
            				        		</div>
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
                              

            	                    <div class="clearfix"></div>

                                    <div class="form-group">

								      	<label for="title">Title Seo</label>

								      	<input type="text" name="txtTitle" class="form-control" />

									</div>
		                    		<div class="form-group">
								      	<label for="keyword">Meta Keyword</label>
								      	<textarea name="txtKeyword" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Meta Description</label>
								      	<textarea name="txtDescription" rows="5" class="form-control"></textarea>
									</div>
                                    <!---------------------->
								</div>
                                <!-----right------->
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
                                        
                                        <li >
                                            <a style="font-weight: 400px;"><label><input type="checkbox" name="tinhtrang" checked="checked"/> Còn hàng</label></a>
                                        </li>
                                        <li >
                                            <a style="font-weight: 400px;"><label><input type="checkbox" name="status" checked="checked"/> Hiển thị</label></a>
                                        </li>
                                        <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="<?php echo count($data)+1; ?>" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                                        <li><a style="line-height: 35px;"><input type="text" placeholder="Tag (Từ khóa tách nhau bằng dấu ',')" name="txtTag" class="form-control" style="width: 100%;margin-right: 10px;float: left;margin-bottom: 10px;"/> Tag(Từ khóa tách nhau bằng dấu ",")</a><div style="clear: both;"></div></li> 
                                        <li><a><select name="txtSao" class="form-control">
        								      		<option value="0">Chọn sao</option>
        								      		<?php for($i=0;$i<=5;$i++){   ?>      
                                                     <option value="<?php echo e($i); ?>"><?php echo e($i); ?> sao</option>
                                                    <?php } ?>   
        								      	</select>
                                            </a>
                                        </li>
                                        <div style="clear: both;"></div>
                                        <li><a href="<?php echo e(url('backend/post')); ?>"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
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
                                              <?php $cat_post= DB::table("product_categories")->select('id','name','display')->where('display',1)->where('parent_id',0)->get();foreach($cat_post as $row){
                                              $cat_post2= DB::table("product_categories")->select('id','name')->where('parent_id',$row->id)->where('display',1)->get();  
                                              ?>  
                                                 <li id="nhan-menu" >
                                                    <label class="selectit"><input value="<?php echo e($row->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($row->name); ?></label>
                                                    <ul class="children">
                                                        <?php
                                                            foreach($cat_post2 as $rows){
                                                            $cat_post3= DB::table("product_categories")->select('id','name')->where('parent_id',$rows->id)->where('display',1)->get();     
                                                           
                                                        ?>    
                                                        <li id="nhan-menu" ><label class="selectit"><input value="<?php echo e($rows->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($rows->name); ?></label>
                                                            <ul class="children">
                                                            <?php  foreach($cat_post3 as $item){ ?>
                                                                <li id="nhan-menu" ><label class="selectit"><input value="<?php echo e($item->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($item->name); ?></label></li>
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
                                  <!-- /.box -->
                                  <!-- /. bộ lọc -->
                                   <?php
                                         $refines= DB::table("refines")->select('id','name')->where('status',1)->orderBy('stt','asc')->get();
                                         foreach($refines as $row){
                                         $refine_param= DB::table("refineparameters")->select('id','name')->where('cate_id',$row->id)->where('status',1)->orderBy('stt','asc')->get();   
                                   ?> 
                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title"><?php echo $row->name; ?></h3>
                        
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
                                                    foreach($refine_param as $item){
                                               ?>  
                                                 <li id="nhan-menu" >
                                                    <label class="selectit"><input value="<?php echo e($item->id); ?>" type="checkbox" name="refine_id[]" /> <?php echo e($item->name); ?></label>
                                                 </li>
                                              <?php } ?>      
                                              <!----------------------------------------->
                                             </div>
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <?php } ?>
                                  <!-- /.End bộ lọc -->
                                  
                                  
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
                                   <li id="right-col-li" class="hidden" >
                                        	<label for="file">Ảnh chi tiết</label>
    								     	<input type="file" id="file" name="fImages2" >
    							  </li>    
                                        <!-------------------->
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

                                 <!--------------------------->
                                  <div class="box box-success">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Danh mục thông số</h3>
                        
                                      <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding" style="">
                                    
                                        <!--------------->
                                        <div id="row-li">
                                            
                                         <div id="a">
                                            <div class="con">
                                                <div class="col-md-10 col-xs-12"><input  id="Text1" name="cate_refi[]" class="form-control images-add"  type="text" /></div>
                                                <div class="col-md-1 col-xs-12"><input  id="btnAdd"  class="form-control add-properties" type="button" value=" Thêm " /></div>
                                                <div style="clear: both;"></div>
                                             </div>
                                          </div>
                                       
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!---------------------------> 
	                       </div>

	                  	</div>
	                	<div  class="tab-pane" id="tab_5">
	                		<div class="form-group">
                              <label class="control-label">Chọn ảnh</label>
                              <input id="input-2" name="detailImg[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif"]'>
                            </div>
	                  	</div>
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
		    </form>

        </div><!-- /.box-body -->

    </div><!-- /.box -->

    

</section><!-- /.content -->

<script type="text/javascript">
 $(document).ready(function() {
      $("#btnAdd").click(function() {
        $("#a").append('<div class="con"><div class="col-md-10 col-xs-12"><input id="Text1" name="cate_refi[]" class="form-control images-add" type="text" /></div>' + '<input id="bnt-images-add" type="button" class="form-control btnRemove" value="Xóa"/><div class="clearfix"></div></div>');
      });
      $('body').on('click','.btnRemove',function() {
        $(this).parent('div.con').remove()
      });
    });
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>