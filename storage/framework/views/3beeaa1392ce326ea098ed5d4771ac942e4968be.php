<?php $__env->startSection('content'); ?>



<?php $__env->startSection('controller', $trang); ?>



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



        	<form method="post" action="backend/about/edit?type=<?php echo e(@$_GET['type']); ?>" enctype="multipart/form-data">



        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />



        		



      			<div class="nav-tabs-custom">



	                <ul class="nav nav-tabs">



	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>

                        <?php

                            if(@$_GET['type'] == 'about'){

                        ?>

                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Thông tin chung(English)</a></li>

                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Thông tin chung(UAE)</a></li>

                        <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Thông tin chung(TAI)</a></li>
                        <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Thông tin chung(Japan)</a></li>
                        <?php } ?>



	                </ul>



	                <div class="tab-content">



	                  	<div class="tab-pane active" id="tab_1">



	                  		<div class="row">



		                  		<div class="col-md-8 col-xs-12">



                                <?php if(@$_GET['type'] == 'lien-he'){?>

									<div class="form-group" >



										<div class="form-group">



											<img src="<?php echo e(asset('upload/hinhanh/'.@$data->photo)); ?>" onerror="this.src='<?php echo e(asset('public/admin_assets/images/no-image.jpg')); ?>'" width="200"  alt="NO PHOTO" />



											<input type="hidden" name="img_current" value="<?php echo @$data->photo; ?>">



										</div>



										<label for="file">Chọn File ảnh</label>



								     	<input type="file" id="file" name="fImages" >



								    	<p class="help-block">Width:225px - Height: 162px</p>



									</div>

                                <?php } ?>

									



									<div class="clearfix"></div>

                                <?php if(@$_GET['type'] != 'videos'){ ?>

							    	<div class="form-group ">



								      	<label for="ten">Tên</label>



								      	<input type="text" name="txtName" id="txtName" value="<?php echo e(@$data->name); ?>"  class="form-control" />



									</div>

                                <?php }else{ ?>

							         	<input type="hidden" name="txtName" id="txtName" value="videos"  class="form-control" />

                                <?php } ?>    



                                <?php if(@$_GET['type'] == 'about'){?>

                                    <div class="box box-info">



						                <h3 class="box-title">Nội dung</h3>  



						                <div class="box-body pad">



						        			<textarea name="txtContent" id="txtContent" cols="50" rows="5" style="width: 100%;"><?php echo e(@$data->content); ?></textarea>



						        		</div>



						        	</div>

                                <?php }elseif(@$_GET['type'] == 'videos'){ ?>

                                    <div class="form-group ">



						                <label for="ten">Mã nhúng videos</label>



						              

						        			<textarea name="txtContent"  cols="50" rows="5" style="width: 100%;"><?php echo e(@$data->content); ?></textarea>



						        		



						        	</div>

                                <?php } ?>

									<input type="hidden" name="txtCom" value="<?php echo e(old('txtCom', isset($data) ? @$data->com : null)); ?>">



								</div>



								<div class="col-md-3">

                                    	<button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>

                                      
                                          <div class="box box-solid ">

                                            <div class="box-header with-border">

                                              <h3 class="box-title">Tác vụ</h3>

                                

                                              <div class="box-tools">

                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>

                                                </button>

                                              </div>

                                            </div>

                                            <div class="box-body no-padding ">

                                              <ul class="nav nav-pills nav-stacked">

                                             
                                          <?php if(@$_GET['type'] == 've-chung-toi'){?>

                                                <li>

                                                    <a>

                                                         <div class="form-group">



                    						                <label for="ten">Thông tin</label>

                                                            <div></div>

                    						              

                    						        			<textarea style="padding-top: 10px;width: 100%;" name="txtMota" cols="50" rows="5" style="width: 100%;"><?php echo e(@$data->mota); ?></textarea>

                    

                    						        	</div>

                                                    </a>

                                                </li>
                                            <?php } ?>
                                            

                                              

                                                <li>

                                                    <a>

                                                      	<div class="form-group">

        

                    								      	<label for="title">Title</label>

                    

                    								      	<input type="text" name="txtTitle" value="<?php echo old('txtTitle', isset($data) ? @$data->title : null); ?>"  class="form-control" />

                    

                    									</div>

                    

                    		                    		<div class="form-group">

                    

                    								      	<label for="keyword">Keyword</label>

                    

                    								      	<textarea name="txtKeyword" rows="5" class="form-control"><?php echo old('txtKeyword', isset($data) ? @$data->keyword : null); ?></textarea>

                    

                    									</div>

                    

                    									<div class="form-group">

                    

                    								      	<label for="description">Description</label>

                    

                    								      	<textarea name="txtDescription" rows="5" class="form-control"><?php echo old('txtDescription', isset($data) ? @$data->description : null); ?></textarea>

                    

                    									</div>

                                                    </a>

                                                </li>

                                                  

                                                <div style="clear: both;"></div>

                                                

                                              </ul>

                                            </div>

                                            <!-- /.box-body -->

                                          </div>

                                    



								</div>



							 



							</div>



							<div class="clearfix"></div>



	                  	</div><!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_2">

                               <div class="box box-info">



					                <h3 class="box-title">Nội dung(English)</h3>  



					                <div class="box-body pad">



					        			<textarea name="txtContent_eg" id="txtContent" cols="50" rows="5" style="width: 100%;"><?php echo e(@$data->content_eg); ?></textarea>



					        		</div>



					        	</div>  
                                <div class="form-group">
							      	<label for="title_eg">Title SEO(English)</label>
							      	<input type="text" name="title_eg" value="<?php echo $data->title_eg;?>" maxlength="255"  class="form-control" />
								</div>

                            	<div class="form-group">
							      	<label for="keyword">Keyword SEO(English)</label>
							      	<textarea name="keyword_eg" rows="5" maxlength="255" class="form-control"><?php echo $data->keyword_eg;?></textarea>
								</div>

                                <div class="form-group">
							      	<label for="description">Description SEO(English)</label>
							      	<textarea name="description_eg" rows="5" class="form-control"><?php echo $data->description_eg;?></textarea>
								</div>
                        </div>

	                  	<div class="tab-pane" id="tab_3">

                                <div class="box box-info">
					                <h3 class="box-title">Nội dung(UAE)</h3>  
					                <div class="box-body pad">
					        			<textarea name="txtContent_uae" id="txtContent" cols="50" rows="5" style="width: 100%;"><?php echo e(@$data->content_uae); ?></textarea>

					        		</div>
					        	</div>
                                <div class="form-group">
							      	<label for="title_eg">Title SEO(UAE)</label>
							      	<input type="text" name="title_uae" value="<?php echo $data->title_uae;?>" maxlength="255"  class="form-control" />
								</div>

                            	<div class="form-group">
							      	<label for="keyword">Keyword SEO(UAE)</label>
							      	<textarea name="keyword_uae" rows="5" maxlength="255" class="form-control"><?php echo $data->keyword_uae;?></textarea>
								</div>

                                <div class="form-group">
							      	<label for="description">Description SEO(UAE)</label>
							      	<textarea name="description_uae" rows="5" class="form-control"><?php echo $data->description_uae;?></textarea>
								</div>
                        </div>

                        <div class="tab-pane" id="tab_4">

                                 <div class="box box-info">
						                <h3 class="box-title">Nội dung(TAI)</h3>  
						                <div class="box-body pad">
						        			<textarea name="txtContent_tai" id="txtContent" cols="50" rows="5" style="width: 100%;"><?php echo e(@$data->content_tai); ?></textarea>
						        		</div>
						        	</div>
                                    <div class="form-group">
    							      	<label for="title_eg">Title SEO(TAI)</label>
    							      	<input type="text" name="title_tai" value="<?php echo $data->title_tai;?>" maxlength="255"  class="form-control" />
    								</div>
    
                                	<div class="form-group">
    							      	<label for="keyword">Keyword SEO(TAI)</label>
    							      	<textarea name="keyword_tai" rows="5" maxlength="255" class="form-control"><?php echo $data->keyword_tai;?></textarea>
    								</div>
    
                                    <div class="form-group">
    							      	<label for="description">Description SEO(TAI)</label>
    							      	<textarea name="description_tai" rows="5" class="form-control"><?php echo $data->description_tai;?></textarea>
    								</div>
                        </div>
                        	<div class="tab-pane" id="tab_5">

                                <div class="box box-info">
					                <h3 class="box-title">Nội dung(Japan)</h3>  
					                <div class="box-body pad">
					        			<textarea name="txtContent_ja" id="txtContent" cols="50" rows="5" style="width: 100%;"><?php echo e(@$data->content_ja); ?></textarea>

					        		</div>
					        	</div>
                                <div class="form-group">

							      	<label for="title_eg">Title(Japan)</label>

							      	<input type="text" name="title_ja" value="<?php echo $data->title_ja;?>" maxlength="255"  class="form-control" />



								</div>

                            	<div class="form-group">

							      	<label for="keyword">Keyword(Japan)</label>

							      	<textarea name="keyword_ja" rows="5" maxlength="255" class="form-control"><?php echo $data->keyword_ja;?></textarea>

								</div>

                                <div class="form-group">

							      	<label for="description">Description(Japan)</label>

							      	<textarea name="description_ja" rows="5" class="form-control"><?php echo $data->description_ja;?></textarea>

								</div>
                        </div>




	                </div><!-- /.tab-content -->



	            </div>



			    <div class="clearfix"></div>





		    </form>



        </div><!-- /.box-body -->



    </div><!-- /.box -->



    



</section><!-- /.content -->



<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>