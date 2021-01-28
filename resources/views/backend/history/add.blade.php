@extends('backend.master')
@section('content')
@section('controller','Quản lý '.$trang)
@section('action','Add')<!-- Content Header (Page header) -->
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
        <h2>Khách hàng {{ @$customer->name}}</h2>
        	<form name="frmAdd" method="post" action="{!! route('backend.customers.postAddHistory', @$customer->mskh) !!}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
          		<div class="col-md-6 col-xs-12">
	            	<div class="clearfix"></div>
			    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
				      	<label for="ten">Tên dịch vụ</label>
				      	<input type="text" id="txtName" name="txtName" value=""  class="form-control" />
				      	@if ($errors->first('txtName')!='')
				      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
				      	@endif
					</div>
					<div class="form-group">
				      	<label for="txtPosition">Vị trí răng</label>
				      	<input type="text" name="txtPosition" id="txtPosition"   class="form-control" />
					</div> 
					<div class="form-group">
				      	<label for="txtAmount">Số lượng</label>
				      	<input type="text" name="txtAmount" id="txtAmount"   class="form-control" />
					</div>
                    <div class="form-group">
				      	<label for="txtDate">Ngày thực hiện</label>
				      	<input type="date" name="txtDate" id="txtDate"   class="form-control" />
					</div>
                    <div class="form-group">
				      	<label for="txtPeriod">Thời gian bảo hành</label>
				      	<input type="text" name="txtPeriod" id="txtPeriod"   class="form-control" />
					</div>
				</div>
				<div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Lưu</button>
					    	<button type="button" onclick="javascript:window.location='backend/customers/show/{{@$customer->mskh}}'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
@endsection()
