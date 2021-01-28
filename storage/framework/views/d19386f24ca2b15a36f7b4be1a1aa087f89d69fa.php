<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Setting'); ?>

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

        	<form method="post" action="backend/setting/update" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

        		

      			<div class="nav-tabs-custom">

	                <ul class="nav nav-tabs">

	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>

	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Thông tin (Tiếng Việt)</a></li>
                        <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Thông tin (English)</a></li>
                        <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Thông tin (UAE)</a></li>
                        <li><a href="#tab_5" data-toggle="tab" aria-expanded="false">Thông tin (Taiwan)</a></li>
                        <li><a href="#tab_7" data-toggle="tab" aria-expanded="false">Thông tin detail (Tiếng Việt)</a></li>
                        <li><a href="#tab_8" data-toggle="tab" aria-expanded="false">Thông tin detail (English)</a></li>
                        <li><a href="#tab_9" data-toggle="tab" aria-expanded="false">Thông tin detail (UAE)</a></li>
                        <li><a href="#tab_10" data-toggle="tab" aria-expanded="false">Thông tin detail (Taiwan)</a></li>
                        <li><a href="#tab_6" data-toggle="tab" aria-expanded="false">SEO</a></li>
                        

	                </ul>

	                <div class="tab-content">

	                  	<div class="tab-pane active" id="tab_1">

	                  		<div class="row">

		                  		<div class="col-md-8 col-xs-12">

									<div class="clearfix"></div>

							    	<div class="form-group">

								      	<label for="ten">Tiêu đề</label>

								      	<input type="text" name="txtName" id="txtName" value="<?php echo e($data->name); ?>"  class="form-control" />

									</div>

								    <div class="form-group">

								      	<label for="ten">Slogan header</label>

								      	<input type="text" name="address" value="<?php echo old('address', isset($data) ? $data->address : null); ?>"  class="form-control" />

									</div>

									<div class="form-group">

								      	<label for="ten">Điện thoại</label>

								      	<input type="text" name="txtPhone" value="<?php echo old('txtPhone', isset($data) ? $data->phone : null); ?>"  class="form-control" />

									</div>

                                   <div class="form-group hidden" >

								      	<label for="ten">Điện thoại 2</label>

								      	<input type="text" name="hotline" value="<?php echo old('hotline', isset($data) ? $data->hotline : null); ?>"  class="form-control" />

									</div>

								    <div class="form-group">

								      	<label for="ten">Email</label>

								      	<input type="text" name="txtEmail" value="<?php echo old('txtEmail', isset($data) ? $data->email : null); ?>"  class="form-control" />

									</div>

								

                                    <div class="form-group">
								      	<label for="ten">Link(facbook)</label>
								      	<input type="text" name="links1" value="<?php echo old('links1', isset($data) ? $data->links1 : null); ?>"  class="form-control" />
									</div>
                                    <div class="form-group " >
								      	<label for="ten">Link(twitter)</label>
								      	<input type="text" name="links2" value="<?php echo old('links2', isset($data) ? $data->links2 : null); ?>"  class="form-control" />
									</div>
                                    <div class="form-group " >
								      	<label for="ten">Link(pinterest)</label>
								      	<input type="text" name="links3" value="<?php echo old('links3', isset($data) ? $data->links3 : null); ?>"  class="form-control" />
									</div>
                                    <div class="form-group" >
								      	<label for="ten">Link(Foursquare)</label>
								      	<input type="text" name="links4" value="<?php echo old('links4', isset($data) ? $data->links4 : null); ?>"  class="form-control" />
									</div>
                                    <div class="form-group hidden" >
								      	<label for="ten">Link(G+)</label>
								      	<input type="text" name="links5" value="<?php echo old('links5', isset($data) ? $data->links5 : null); ?>"  class="form-control" />
									</div>
                                   <div class="form-group" >

								      	<label for="ten">Copyright</label>

								      	<input type="text" name="copyright" value="<?php echo old('copyright', isset($data) ? $data->copyright : null); ?>"  class="form-control" />

									</div>
                                    <div class="form-group">

								      	<label for="desc">Code chat</label>

								      	<textarea name="txtCodechat" rows="5" class="form-control"><?php echo e(old('txtCodechat', isset($data) ? $data->codechat : null)); ?></textarea>

									</div>

									<div class="form-group">

								      	<label for="desc">Analytics</label>

								      	<textarea name="txtAnalytics" rows="5" class="form-control"><?php echo e(old('txtAnalytics', isset($data) ? $data->analytics : null)); ?></textarea>

									</div>

                                    <div class="form-group" style="display: none;">

								      	<label for="ten">Tiêu đề slogan</label>

								      	<input type="text" name="txtCompany" value="<?php echo old('txtCompany', isset($data) ? $data->company : null); ?>"  class="form-control" />

									</div>

                                    <div class="clearfix"></div>

                                    <div class="box box-info">

        				                <h3 class="box-title">Maps(Liên hệ)</h3>

        				                <div class="box-body pad">

        				        			<textarea name="maps" cols="50" rows="5" style="width: 100%;"><?php echo e($data->maps); ?></textarea>

        				        		</div>

        				        	</div> 
								</div>
                                
                                <!-----right------->
                                 <div class="col-md-3">
                              
                                 	<button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
                                   
                                   <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Hình ảnh favicon</h3>
                        
                                      <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                      <ul class="nav nav-pills nav-stacked">
                                        <li id="right-col-li" >
                                               
                                          		   <img id="output" src="<?php echo e(asset('upload/hinhanh/'.$data->favico)); ?>" />
                                                   <input class="max-with" name="fImagesFavico" type="file"  onchange="loadFile(event)"/>
                                        
                                        </li>
                                     
                                      </ul>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Logo</h3>
                            
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding">
                                          <ul class="nav nav-pills nav-stacked">
                                            <li id="right-col-li" >
                                                   
                                              		   <img style="max-width: 100%;" src="<?php echo e(asset('upload/hinhanh/'.$data->photo)); ?>" />
                                                       <input class="max-with" name="fImages" type="file"  />
                                            
                                            </li>
                                         
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                      <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Logo bottom</h3>
                            
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding">
                                          <ul class="nav nav-pills nav-stacked">
                                            <li id="right-col-li" >
                                                   
                                              		   <img style="max-width: 100%;" src="<?php echo e(asset('upload/hinhanh/'.$data->photo3)); ?>" />
                                                       <input class="max-with" name="fImagesbot" type="file"  />
                                            
                                            </li>
                                         
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                       <div class="box box-solid hidden">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Banner Detail</h3>
                            
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding">
                                          <ul class="nav nav-pills nav-stacked">
                                            <li id="right-col-li" >
                                                   
                                              		   <img style="max-width: 100%;" src="<?php echo e(asset('upload/hinhanh/'.$data->images)); ?>" />
                                                       <input class="max-with" name="fImagesdetail" type="file"  />
                                            
                                            </li>
                                         
                                          </ul>
                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                </div>
                                <!------------------->
							

							</div>

							<div class="clearfix"></div>

	                  	</div><!-- /.tab-pane -->

	              
                    
                    	<div class="tab-pane" id="tab_2">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Bottom(Tiếng việt)</h3>
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
	                	</div><!-- /.tab-pane -->
                        <!---------->
                        <div class="tab-pane" id="tab_3">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Bottom(English)</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="content_eg" id="txtContent" cols="50" rows="5"><?php echo e($data->content_eg); ?></textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_4">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Bottom(UAE)</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="content_uae" id="txtContent" cols="50" rows="5"><?php echo e($data->content_uae); ?></textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_5">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Bottom(Taiwan)</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="content_tai" id="txtContent" cols="50" rows="5"><?php echo e($data->content_tai); ?></textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
                        <!--- slogan --->
                        <div class="tab-pane" id="tab_7">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Detail(Tiếng Việt)</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="slogan" id="txtContent" cols="50" rows="5"><?php echo e($data->slogan); ?></textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_8">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Detail(English)</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="slogan_eg" id="txtContent" cols="50" rows="5"><?php echo e($data->slogan_eg); ?></textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_9">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Detail(UAE)</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="slogan_uae" id="txtContent" cols="50" rows="5"><?php echo e($data->slogan_uae); ?></textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_10">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Detail(Taiwan)</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="slogan_tai" id="txtContent" cols="50" rows="5"><?php echo e($data->slogan_tai); ?></textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
                        <!---------->
	                	<div class="tab-pane" id="tab_6">
    	                  		<div class="row">
    
    		                    
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