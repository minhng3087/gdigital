



<?php $__env->startSection('content'); ?>



<?php $__env->startSection('controller','Thêm mới danh mục bài viết'); ?>



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



    

        <div class="box-body">



        	



        	<form name="frmAdd" method="post" action="<?php echo route('backend.catenew.postAdd'); ?>" enctype="multipart/form-data">



        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />



	      		



      			<div class="nav-tabs-custom">



	                <ul class="nav nav-tabs">

	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>

                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">SEO</a></li>
                        <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Japan</a></li>
                        

	                </ul>



	                 <div class="tab-content">



	                  	<div class="tab-pane active" id="tab_1">



	                  		<div class="row">



		                  		<div class="col-md-8 col-xs-12">



			                    



									<div class="clearfix"></div>



							    	<div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">



								      	<label for="ten">Tiêu đề</label>



								      	<input type="text" name="txtName" id="txtName" value=""  class="form-control" />



								      	<?php if($errors->first('txtName')!=''): ?>



								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>



								      	<?php endif; ?>



									</div>

                                    <div class="form-group">

								      	<label for="ten">Tiêu đề(English)</label>

								      	<input type="text" name="name_eg" value=""  class="form-control" />

									</div>

                                    <div class="form-group ">

								      	<label for="ten">Tiêu đề(UAE)</label>

								      	<input type="text" name="name_uae" value=""  class="form-control" />

									</div>

                                    <div class="form-group ">

								      	<label for="ten">Tiêu đề(Taiwan)</label>

								      	<input type="text" name="name_tai" value=""  class="form-control" />

									</div>

                                    <div class="form-group ">

								      	<label for="ten">Mô tả</label>

								      	<textarea  name="mota"  class="form-control" ></textarea>

									</div>

                                    <div class="form-group ">

								      	<label for="ten">Mô tả(English)</label>

								      	<textarea  name="mota_eg"  class="form-control" ></textarea>

									</div>

                                    <div class="form-group ">

								      	<label for="ten">Mô tả(UAE)</label>

								      	<textarea  name="mota_uae"  class="form-control" ></textarea>

									</div>

                                    <div class="form-group ">

								      	<label for="ten">Mô tả(Taiwan)</label>

								      	<textarea  name="mota_tai"  class="form-control" ></textarea>

									</div>

									<div class="form-group ">



								      	<label for="alias">Đường dẫn tĩnh</label>



								      	<input type="text" name="txtAlias" id="txtAlias" value=""  class="form-control" />



								      	<?php if($errors->first('txtAlias')!=''): ?>



								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtAlias');; ?></label>



								      	<?php endif; ?>



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

                                            <li><a style="font-weight: 400px;">

                                              <select class="form-control select2" style="width: 100%;" name="home">



                                                <option value="0">--- None ---</option>

                

                                                <option value="1">Trang chủ</option>

                

                                            </select>

                                            </a></li>

                                        

                                            

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

                                          <h3 class="box-title">Lựa chọn giao diện</h3>

                            

                                          <div class="box-tools">

                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                                            </button>

                                          </div>

                                        </div>

                                        <div class="box-body no-padding">

                                          <ul class="nav nav-pills nav-stacked">

                                            <li><a style="font-weight: 400px;">

                                              <select class="form-control select2" style="width: 100%;" name="views">



                                                <option value="0">--- Giao diện ---</option>

                                                <option value="1">Thị trường lao động</option>

                                                <option value="2">Tin tức</option>

                                                <option value="3">Tuyển dụng</option>

                                            </select>

                                            </a></li>

                                            

                                          </ul>

                                        </div>

                                        

                                        <!-- /.box-body -->

                                      </div>  

                                      <!-- /. box -->

                                       <div class="box box-solid" >

                                            <div class="box-header with-border">

                                              <h3 class="box-title">Banner</h3>

                                

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

                                            

                                              </ul>

                                            </div>

                                            <!-- /.box-body -->

                                          </div> 

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

                                             $cat_post= DB::table("product_categories")->select('id','name','display')->where('display',2)->where('parent_id',0)->get();

                                              foreach($cat_post as $row){

                                              $cat_post2= DB::table("product_categories")->select('id','name')->where('parent_id',$row->id)->where('display',2)->get();  

                                              ?>  

                                                 <li id="nhan-menu" >

                                                    <label class="selectit"><input value="<?php echo e($row->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($row->name); ?></label>

                                                    <ul class="children">

                                                        <?php

                                                            foreach($cat_post2 as $rows){

                                                            $cat_post3= DB::table("product_categories")->select('id','name')->where('parent_id',$rows->id)->where('display',2)->get();     

                                                           

                                                        ?>    

                                                        <li id="nhan-menu" ><label class="selectit"><input  value="<?php echo e($rows->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($rows->name); ?></label>

                                                            <ul class="children">

                                                            <?php  foreach($cat_post3 as $item){ ?>

                                                                <li id="nhan-menu" ><label class="selectit"><input  value="<?php echo e($item->id); ?>" type="radio" name="txtProductCate[]" /> <?php echo e($item->name); ?></label></li>

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

                                   </div>

							</div>



							<div class="clearfix"></div>



	                  	</div><!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_2">

                            <div class="col-md-3 col-xs-12">

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

                            <div class="col-md-3 col-xs-12">

		                    	 <div class="form-group">

							      	<label for="title_eg">Title(English)</label>

							      	<input type="text" name="title_eg" value="" maxlength="255"  class="form-control" />



								</div>

                            	<div class="form-group">

							      	<label for="keyword">Keyword(English)</label>

							      	<textarea name="keyword_eg" rows="5" maxlength="255" class="form-control"></textarea>

								</div>

                                <div class="form-group">

							      	<label for="description">Description(English)</label>

							      	<textarea name="description_eg" rows="5" class="form-control"></textarea>

								</div>

                            </div>        

                            <div class="col-md-3 col-xs-12">    

								 <div class="form-group">

							      	<label for="title_eg">Title(UAE)</label>

							      	<input type="text" name="title_uae" value="" maxlength="255"  class="form-control" />



								</div>

                            	<div class="form-group">

							      	<label for="keyword">Keyword(UAE)</label>

							      	<textarea name="keyword_uae" rows="5" maxlength="255" class="form-control"></textarea>

								</div>

                                <div class="form-group">

							      	<label for="description">Description(UAE)</label>

							      	<textarea name="description_uae" rows="5" class="form-control"></textarea>

								</div>	

                            </div>  

                            <div class="col-md-3 col-xs-12">    

								<div class="form-group">

							      	<label for="title_eg">Title(Taiwan)</label>

							      	<input type="text" name="title_tai" value="" maxlength="255"  class="form-control" />



								</div>

                            	<div class="form-group">

							      	<label for="keyword">Keyword(Taiwan)</label>

							      	<textarea name="keyword_tai" rows="5" maxlength="255" class="form-control"></textarea>

								</div>

                                <div class="form-group">

							      	<label for="description">Description(Taiwan)</label>

							      	<textarea name="description_tai" rows="5" class="form-control"></textarea>

								</div>	

                            </div>      

                        </div>
                        <div class="tab-pane" id="tab_3">
                             <div class="form-group">

						      	<label for="ten">Tiêu đề(Japan)</label>

						      	<input type="text" name="name_ja" value=""  class="form-control" />

							</div>
                            <div class="form-group ">

						      	<label for="ten">Mô tả(Japan)</label>

						      	<textarea  name="mota_ja"  class="form-control" ></textarea>

							</div>
                            <div class="col-md-12 col-xs-12">    

								<div class="form-group">

							      	<label for="title_eg">Title(Japan)</label>

							      	<input type="text" name="title_ja" value="" maxlength="255"  class="form-control" />



								</div>

                            	<div class="form-group">

							      	<label for="keyword">Keyword(Japan)</label>

							      	<textarea name="keyword_ja" rows="5" maxlength="255" class="form-control"></textarea>

								</div>

                                <div class="form-group">

							      	<label for="description">Description(Japan)</label>

							      	<textarea name="description_ja" rows="5" class="form-control"></textarea>

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