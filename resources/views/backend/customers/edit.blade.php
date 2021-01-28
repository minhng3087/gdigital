@extends('backend.master')
@section('content')
@section('controller','Quản lý '.$trang)
@section('action','Edit')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   	@yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box">
    	@include('backend.messages_error')
        <div class="box-body">
        	<form method="post" action="backend/customers/edit?mskh={{$mskh}}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
      			<div class="row">
				  <div class="col-md-6 col-xs-12">
					<div class="clearfix"></div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="ten">Mã số khách hàng</label>
							<input type="number" min="1000" name="mskh" value="{{ @$data->mskh }}" class="form-control" style="width: 100px;">
						</div>
						<div class="form-group">
							<label>
								<input type="checkbox" name="status" checked="checked"> Hiển thị
							</label>
						</div>
					</div>			    
	            	<div class="clearfix"></div>
			    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
				      	<label for="ten">Tên khách hàng</label>
				      	<input type="text" id="txtName" name="txtName" value="{{ @$data->name}}"  class="form-control" />
				      	@if ($errors->first('txtName')!='')
				      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
				      	@endif
					</div>
					<div class="form-group">
				      	<label for="email">Email</label>
				      	<input type="text" name="txtEmail" id="txtEmail" value="{{ @$data->email}}" class="form-control" />
					</div> 
					<div class="form-group">
				      	<label for="phone">Phone</label>
				      	<input type="text" name="txtPhone" id="txtPhone" value="{{ @$data->phone}}"  class="form-control" />
					</div>
				</div>
				</div>
	            <div class="clearfix"></div>
	            
			    <div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Cập nhật</button>
					    	<button type="button" class="btn btn-danger" onclick="javascript:window.location='backend/customers'">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
@endsection()
