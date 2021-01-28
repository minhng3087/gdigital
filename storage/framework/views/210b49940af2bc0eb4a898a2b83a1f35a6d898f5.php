<?php $__env->startSection('content'); ?>

<?php $datauser = DB::table('users')->select()->get()->first(); ?>

 

       

       

 <!----------------------------------------------------------------------------------->

<!-- Content Header (Page header) -->

<section class="content-header">

  <h1>

  Quản lý

    <small>đăng ký nhà tuyển dụng</small>

  </h1>

  <ol class="breadcrumb">

    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>

    <li><a href="javascript:">Chi tiết đăng ký nhà tuyển dụng</a></li>

    

  </ol>

</section>

<!-- Main content -->

<!-- Main content -->

<section class="content">

  <div class="row">

    <div class="col-xs-12">

      <div class="box">

      

        <!--<div class="box-header">

          <h3 class="box-title">Data Table With Full Features</h3>

        </div>-->

        <div class="box-body">

         

            <tbody>

             <form method="post"  action="<?php echo URL::route('backend.usersendmail.show',$data['id']); ?>?id=<?php echo $data['id']; ?>" enctype="multipart/form-data">

                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />			                         

                        <div class="table-responsive">

                		  	<table class="table user_tbl">
                                <tbody id="borviewph">

                               

                                

                                <tr>

                                    <td >Name:</td>

                                    <td><?php echo $data->name; ?></td>

                                </tr>

                                <tr>

                                    <td >Phone:</td>

                                    <td><?php echo $data->phone; ?></td>

                                </tr>

                                <tr>

                                    <td >Address:</td>

                                    <td><?php echo $data->address; ?></td>

                                </tr>

                                <tr>

                                    <td >Email:</td>

                                    <td><?php echo $data->email; ?></td>

                                </tr>

                                <tr>

                                    <td >Khu vực:</td>

                                    <td><?php echo $data->country; ?></td>

                                </tr>

                                <tr>

                                    <td >Tỉnh thành:</td>

                                    <td><?php echo $data->city; ?></td>

                                </tr>
                                <tr>

                                    <td >Quận huyện:</td>

                                    <td><?php echo $data->district; ?></td>

                                </tr>
                                <tr>

                                    <td >Ngành nghề kinh doanh:</td>

                                    <td><?php echo $data->career; ?></td>

                                </tr>

                			     <tr>

                                	<td style="width: 15%;">Xử lý</td>

                                	<td>

                                		<select name="status">

                                			<option <?php if($data->status==0): ?> selected <?php endif; ?> value="0"> Chờ xử lý</option>

                                			<option <?php if($data->status==1): ?> selected <?php endif; ?> value="1"> Đã giải quyết </option>

                                       	</select>

                                	</td>

                               	</tr>

                            

                								            

                				     

                                

                            </tbody>

                            <div style="clear: both;"></div>

                                

                		  	</table>

                             <hr/>

                             <p class="text-center edit_p"><button type="submit" class="btn edit_frm-btn">Cập nhật</button></p>

                			</div>

                       </form>  

            </tbody>

       

        </div><!-- /.box-body -->

      

      </div><!-- /.box -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</section><!-- /.content -->

      

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>