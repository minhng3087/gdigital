<?php $__env->startSection('content'); ?>

<?php $__env->startSection('controller','Tag'); ?>

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

        	<form method="post" name="frmEditProduct" action="backend/tag/edit?id=<?php echo e($id); ?>" enctype="multipart/form-data">

        		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

      			<div class="nav-tabs-custom">

	                <ul class="nav nav-tabs">

	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>


	                </ul>

	                <div class="tab-content">

	                  	<div class="tab-pane active" id="tab_1">

	                  		<div class="row">

		                  		<div class="col-md-6 col-xs-12">

                                    <div class="clearfix"></div>

							    	<div class="form-group">
								      	<label for="ten">Tiêu đề</label>
								      	<input type="text" name="txtName" id="txtName" value="<?php echo e($data->name); ?>"  class="form-control" />
									</div>
                                   
                				    

                		

								</div>

								<div class="col-md-6 col-xs-12">


                                    <div class="form-group">

								      	<label for="title">Title</label>

								      	<input type="text" name="txtTitle" value="<?php echo e($data->title); ?>"  class="form-control" />

									</div>

		                    		<div class="form-group">

								      	<label for="keyword">Keyword</label>

								      	<textarea name="txtKeyword" rows="5" class="form-control"><?php echo e($data->keyword); ?></textarea>

									</div>

									<div class="form-group">

								      	<label for="description">Description</label>

								      	<textarea name="txtDescription" rows="5" class="form-control"><?php echo e($data->description); ?></textarea>

									</div>

								</div>

							</div>

							<div class="clearfix"></div>

	                  	</div><!-- /.tab-pane -->


	                </div><!-- /.tab-content -->

	            </div>

	            <div class="clearfix"></div>

			    <div class="col-md-6">

			    	

				   

			    </div>

			    <div class="clearfix"></div>

			    <div class="box-footer">

			    	<div class="row">

						<div class="col-md-6">

					    	<button type="submit" class="btn btn-primary">Cập nhật</button>

					    	<button type="button" class="btn btn-danger" onclick="javascript:window.location='backend/tag'">Thoát</button>

				    	</div>

			    	</div>

			  	</div>

		    </form>

        </div><!-- /.box-body -->

    </div><!-- /.box -->

    

</section><!-- /.content -->

<!-- Modal -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>