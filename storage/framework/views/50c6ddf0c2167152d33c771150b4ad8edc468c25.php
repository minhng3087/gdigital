<?php $__env->startSection('content'); ?>
<?php $__env->startSection('controller','Catespecification'); ?>
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

<script type="text/javascript">




</script>
           
<!-------------------->
<!-- Main content -->
<section class="content">
    <div class="box">
    	<?php echo $__env->make('backend.messages_error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box-body">
        	<form name="frmAdd" method="post" action="<?php echo route('backend.catespecification.postAdd'); ?>" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	               </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-8 col-xs-12">
							    	<div class="form-group">
								      	<label for="ten">Tiêu đề</label>
								      	<input type="text" name="txtName" id="txtName" value=""  class="form-control" />
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
                                            <li><a style="font-weight: 400px;"><label><input type="checkbox" name="status" checked="checked"/> Hiển thị</label></a></li>
                                            <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="<?php echo count($data)+1; ?>" class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                                            <div style="clear: both;"></div>
                                            <li><a href="<?php echo e(url('backend/catespecification')); ?>"><i class="fa fa-trash-o"></i> Thoát</a></li>
                                          </ul>
                                        </div>
                                        
                                        <!-- /.box-body -->
                                      </div>
                                      <!-- /. box -->
                                      <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Thuộc sản phẩm</h3>
                            
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="box-body no-padding">
                                          <ul class="nav nav-pills nav-stacked">
                                            <li style="padding: 10px;">
                                                 <div id="view">
                                                  <input placeholder="Chọn sản phẩm" type="text" id="key" name="keyword2"  style="width: 100%;"/>
                                                  <div class="autocomplete"></div>  
                                                 </div>
                                                  
                                                
                                            </li>
                                         </ul>
                                        </div>
                                        
                                        <!-- /.box-body -->
                                      </div>
                                      <!-- /. box -->
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