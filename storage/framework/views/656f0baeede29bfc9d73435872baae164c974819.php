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

	                  	<li><a href="#tab_3" data-toggle="tab" aria-expanded="true">Thông tin</a></li>
                        <li><a href="#tab_4" data-toggle="tab" aria-expanded="true">Slogan</a></li>
                       	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">SEO</a></li>

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
                                    <div class="form-group hidden" >
								      	<label for="ten">Link(twitter)</label>
								      	<input type="text" name="links2" value="<?php echo old('links2', isset($data) ? $data->links2 : null); ?>"  class="form-control" />
									</div>
                                    <div class="form-group hidden" >
								      	<label for="ten">Link(pinterest)</label>
								      	<input type="text" name="links3" value="<?php echo old('links3', isset($data) ? $data->links3 : null); ?>"  class="form-control" />
									</div>
                                    <div class="form-group" >
								      	<label for="ten">Link(Youtube)</label>
								      	<input type="text" name="links4" value="<?php echo old('links4', isset($data) ? $data->links4 : null); ?>"  class="form-control" />
									</div>
                                    <div class="form-group" >
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

	                  	<div class="tab-pane" id="tab_4">

	                  		<div class="box box-info">

				                <div class="box-header">

				                  	<h3 class="box-title">Slogan</h3>

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

                        	<div class="tab-pane" id="tab_3">

	                  		<div class="box box-info">

				                <div class="box-header">

				                  	<h3 class="box-title">Thông tin Bottom</h3>

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

	                	<div class="tab-pane" id="tab_2">

	                  		<div class="row">

		                    	<div class="col-md-6 col-xs-12">

		                    		<div class="form-group">

								      	<label for="title">Title</label>

								      	<input type="text" name="txtTitle" value="<?php echo old('txtTitle', isset($data) ? $data->title : null); ?>"  class="form-control" />

									</div>

		                    		<div class="form-group">

								      	<label for="keyword">Keyword</label>

								      	<textarea name="txtKeyword" rows="5" class="form-control"><?php echo old('txtKeyword', isset($data) ? $data->keyword : null); ?></textarea>

									</div>

									<div class="form-group">

								      	<label for="description">Description</label>

								      	<textarea name="txtDescription" rows="5" class="form-control"><?php echo old('txtDescription', isset($data) ? $data->description : null); ?></textarea>

									</div>

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