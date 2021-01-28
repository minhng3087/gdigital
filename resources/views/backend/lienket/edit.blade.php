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
       	<form method="post" action="backend/lienket/edit?id={{$id}}" enctype="multipart/form-data">
       		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
     			<div class="row">
            <div class="col-md-8 col-xs-12">
				    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
					      	<label for="ten">Tiêu đề</label>
					      	<input type="text" name="txtName" id="txtName" value="{{ $data->name }}"  class="form-control" />
					      	@if ($errors->first('txtName')!='')
					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
                  @endif
              
              </div>
              <div class="form-group @if ($errors->first('txtLink')!='') has-error @endif">
					      	<label for="ten">Link</label>
					      	<input type="text" name="txtLink" id="txtLink" value="{{ $data->link }}"  class="form-control" />
					      	@if ($errors->first('txtLink')!='')
					      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtLink'); !!}</label>
                  @endif
              
              </div>
            
          </div>

					<input type="hidden" name="txtCom"/>
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
                               <a><span><input type="checkbox" name="status" {!! (!isset($data->status) || $data->status==1)?'checked="checked"':'' !!}> Hiển thị</span></a>
                           </li>
                           <li><a style="line-height: 35px;"><input type="number" min="1" name="stt" value="{!! isset($data->status) ? $data->stt : (count($news)+1) !!}"  class="form-control" style="width: 100px;margin-right: 10px;float: left;margin-bottom: 10px;"/> Số thứ tự</a><div style="clear: both;"></div></li>
                           <div style="clear: both;"></div>
                           <li><a href="{{ url('backend/lienket') }}"><i class="fa fa-trash-o"></i> Thoát</a></li>
                         </ul>
                       </div>
                       <!-- /.box-body -->
                     </div>
                     <!-- /. box -->
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
                             		   <img src="{{ asset('upload/hinhanh/'.$data->photo) }}" id="output" />
                                      <input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
                           </li>
                         </ul>
                       </div>
                       <!-- /.box-body -->
                     </div>
                   </div>
			    <div class="clearfix"></div>
           </div>
		    </form>
       </div><!-- /.box-body -->
   </div><!-- /.box -->
</section><!-- /.content -->
@endsection()
