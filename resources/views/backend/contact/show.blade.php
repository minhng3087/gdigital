@extends('backend.master')
@section('content')
<?php $datauser = DB::table('users')->select()->get()->first(); ?>
 <!----------------------------------------------------------------------------------->
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Quản lý
    <small>liên hệ</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li><a href="javascript:">Chi tiết liên hệ</a></li>
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
             <form method="post"  action="{!! URL::route('backend.contact.show',$data['id']) !!}?id={!! $data['id'] !!}" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{!! csrf_token() !!}" />			                         
                        <div class="table-responsive">
                		  	<table class="table user_tbl">
                                <!------------------------------------------------------->
                                <tbody id="borviewph">
                                <tr>
                                    <td >Name:</td>
                                    <td>{!! $data->name !!}</td>
                                </tr>
                                <tr>
                                    <td >Phone:</td>
                                    <td>{!! $data->phone !!}</td>
                                </tr>
                                <tr>
                                    <td >Address:</td>
                                    <td>{!! $data->address !!}</td>
                                </tr>
                                <tr>
                                    <td >Email:</td>
                                    <td>{!! $data->email !!}</td>
                                </tr>
                                <tr>
                                    <td >Title:</td>
                                    <td>{!! $data->title !!}</td>
                                </tr>
                                <tr>
                                    <td >Content:</td>
                                    <td>{!! $data->content !!}</td>
                                </tr>
                			     <tr>
                                	<td style="width: 15%;">Xử lý</td>
                                	<td>
                                		<select name="display">
                                			<option value="0"> None</option>
                                			<option value="1"> Đã giải quyết </option>
                                       	</select>
                                	</td>
                               	</tr>
                            </tbody>
                            <div style="clear: both;"></div>
                                <!---------------------------------------------------------->
                		  	</table>
                             <hr/>
                             <p class="text-center edit_p"><button type="submit" class="btn edit_frm-btn">Xử lý</button></p>
                			</div>
                       </form>  
            </tbody>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
@endsection