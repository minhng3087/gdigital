

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Quản lý '.$trang); ?>

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

        	<form name="frmAdd" method="post" action="<?php echo route('backend.lienket.postAdd'); ?>" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

          		<div class="col-md-8 col-xs-12">

					<div class="clearfix"></div>

			    	<div class="form-group <?php if($errors->first('txtName')!=''): ?> has-error <?php endif; ?>">

				      	<label for="ten">Tiêu đề</label>

				      	<input type="text" id="txtName" name="txtName" value=""  class="form-control" />

				      	<?php if($errors->first('txtName')!=''): ?>

				      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo $errors->first('txtName');; ?></label>

				      	<?php endif; ?>

					</div>
                        <?php if(@$_GET['type'] == "y-kien-khach-hang"){?>
                            <div class="form-group">
        				      	<label for="alias">Chức vụ</label>
        				      	<input type="text" name="name2"  value=""  class="form-control" />
        					</div>
                        <?php }?>
                    	<div class="form-group <?php if(@$_GET['type'] != "quang-cao" && @$_GET['type'] != "doi-tac"){echo 'hidden';}?>">

    				      	<label for="alias">Link liên kết</label>

    				      	<input type="text" name="txtLink" id="txtLink" value=""  class="form-control" />

    					</div>

                  

                      <?php if($_GET['type']=='image-categorys'): ?>

						<div class="form-group">

					      	<label for="ten">Thuộc danh mục</label>

					      	<select name="parent_id" class="form-control">



					      		<option value="0">Chọn danh mục</option>

					      		<?php cate_parent($parent); ?>

					      	</select>

						</div>

				    <?php endif; ?>

					<?php if($_GET['type']=='ly-do' || $_GET['type']=='post-videos' || @$_GET['type'] == "y-kien-khach-hang" || @$_GET['type'] == "the-manh"): ?>

					<div class="form-group" >

				      	<label for="desc">Mô tả</label>

				      	<textarea name="txtDesc" rows="5" class="form-control"></textarea>

					</div>
                    <div class="form-group" >

				      	<label for="desc">Mô tả (English)</label>

				      	<textarea name="mota_eg" rows="5" class="form-control"></textarea>

					</div>
                    <div class="form-group" >

				      	<label for="desc">Mô tả (UAE)</label>

				      	<textarea name="mota_uae" rows="5" class="form-control"></textarea>

					</div>
                    	<div class="form-group" >

				      	<label for="desc">Mô tả(Tai)</label>

				      	<textarea name="mota_tai" rows="5" class="form-control"></textarea>

					</div>
					<?php endif; ?>

					<input type="hidden" name="txtCom" value="<?php echo e(@$_GET['type']); ?>"/>

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
                            <li>
                                <a><span><input type="checkbox" name="status" checked="checked"> Hiển thị</span></a>
                            </li>
                            <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="<?php echo count($data)+1; ?>" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                            <div style="clear: both;"></div>
                            <li><a href="<?php echo e(url('backend/lienket?type='.@$_GET['type'])); ?>"><i class="fa fa-trash-o"></i> Thoát</a></li>
                          </ul>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /. box -->
                      <?php if($_GET['type']!='the-manh' && $_GET['type']!='post-videos' && @$_GET['type'] != "doi-tac" && @$_GET['type'] != "recument"): ?>
                         <div class="box box-solid">
                            <div class="box-header with-border">
                              <h3 class="box-title">Xuất hiện</h3>
                
                              <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                              </div>
                            </div>
                            <div class="box-body no-padding">
                              <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a><span><input type="radio" name="display" value="1"  /> Right home</span></a>
                                    <a><span><input type="radio" name="display" value="2" /> Right detail New</span></a>
                                    <a><span><input type="radio" name="display" value="3" /> Right detail chung</span></a>
                                </li>
                                
                              </ul>
                            </div>
                            <!-- /.box-body -->
                          </div>
                       <?php endif; ?>   
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
                    </div>
			         	<div class="clearfix"></div>

		

		    </form>

        </div><!-- /.box-body -->

    </div><!-- /.box -->

    

</section><!-- /.content -->



<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>