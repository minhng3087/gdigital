@extends('backend.master')
@section('content')
@section('controller','Setting')
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
        	<form method="post" action="backend/setting/update" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Thông tin (Tiếng Việt)</a></li>
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-8 col-xs-12">
									<div class="clearfix"></div>
							    	<div class="form-group">
								      	<label for="ten">Tiêu đề</label>
								      	<input type="text" name="txtName" id="txtName" value="{!! old('txtName', isset($data) ? $data->name : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Tiêu đề(English)</label>
								      	<input type="text" name="txtNameEng" id="txtNameEng" value="{!! old('txtNameEng', isset($data) ? $data->name_eg : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Điện thoại</label>
								      	<input type="text" name="txtPhone" value="{!! old('txtPhone', isset($data) ? $data->phone : null) !!}"  class="form-control" />
									</div>
                                   <div class="form-group" >
								      	<label for="ten">Điện thoại 2</label>
								      	<input type="text" name="hotline" value="{!! old('hotline', isset($data) ? $data->hotline : null) !!}"  class="form-control" />
									</div>
								    <div class="form-group">
								      	<label for="ten">Email</label>
								      	<input type="text" name="txtEmail" value="{!! old('txtEmail', isset($data) ? $data->email : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Address</label>
								      	<input type="text" name="txtAddress" value="{!! old('txtAddress', isset($data) ? $data->address : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Address(English)</label>
								      	<input type="text" name="txtAddressEng" value="{!! old('txtAddressEng', isset($data) ? $data->address_eg : null) !!}"  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="codechat">Codechat</label>
								      	<input type="text" name="txtCodechat" value="{!! old('txtCodechat', isset($data) ? $data->codechat : null) !!}"  class="form-control" />
									</div>
                                    <div class="form-group">
								      	<label for="ten">Link(facebook)</label>
								      	<input type="text" name="links1" value="{!! old('links1', isset($data) ? $data->links1 : null) !!}"  class="form-control" />
									</div>
                                    <div class="form-group " >
								      	<label for="ten">Link(Yoube)</label>
								      	<input type="text" name="links2" value="{!! old('links2', isset($data) ? $data->links2 : null) !!}"  class="form-control" />
									</div>
                                    <div class="form-group " >
								      	<label for="ten">Link(twitter)</label>
								      	<input type="text" name="links3" value="{!! old('links3', isset($data) ? $data->links3 : null) !!}"  class="form-control" />
									</div>
                                    <div class="form-group" >
								      	<label for="ten">Link(G+)</label>
								      	<input type="text" name="links4" value="{!! old('links4', isset($data) ? $data->links4 : null) !!}"  class="form-control" />
									</div>
                                    <div class="form-group" >
								      	<label for="ten">Link(Instagram)</label>
								      	<input type="text" name="links5" value="{!! old('links5', isset($data) ? $data->links5 : null) !!}"  class="form-control" />
									</div>
                                   <div class="form-group" >
								      	<label for="ten">Copyright</label>
								      	<input type="text" name="copyright" value="{!! old('copyright', isset($data) ? $data->copyright : null) !!}"  class="form-control" />
									</div>
                                    <div class="form-group hidden">
								      	<label for="desc">Code chat</label>
								      	<textarea name="txtCodechat" rows="5" class="form-control">{{ old('txtCodechat', isset($data) ? $data->codechat : null) }}</textarea>
									</div>
									<div class="form-group hidden">
								      	<label for="desc">Analytics</label>
								      	<textarea name="txtAnalytics" rows="5" class="form-control">{{ old('txtAnalytics', isset($data) ? $data->analytics : null) }}</textarea>
									</div>
                                    <div class="clearfix"></div>
                                    <div class="box box-info">
        				                <h3 class="box-title">Maps(Liên hệ)</h3>
        				                <div class="box-body pad">
        				        			<textarea name="maps" cols="50" rows="5" style="width: 100%;">{{!! old('maps', isset($data) ? $data->maps : null) !!}}</textarea>
        				        		</div>
        				        	</div>
								</div>
                                <!-----right------->
                                 <div class="col-md-3">
                                 	<button type="submit" class="btn btn-primary btn-block margin-bottom">Lưu</button>
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
											<img id="output" src="{{ asset('upload/hinhanh/'.$data->favico) }}" />
											<input class="max-with" name="fImagesFavico" type="file"  onchange="loadFile(event)"/>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
								  <div class="box box-solid">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Banner</h3>
                                          <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body no-padding">
                                          <ul class="nav nav-pills nav-stacked">
                                            <li id="right-col-li" >
                                              		   <img style="max-width: 100%;" src="{{ asset('upload/hinhanh/'.$data->banner) }}" />
                                                       <input class="max-with" name="banner" type="file"  />
                                            </li>
                                          </ul>
                                        </div>
										<!-- upload product_categories -->
										<!-- end upload product_categories -->
                                        <!-- /.box-body -->
                                      </div>
                                </div>
                                <!------------------->
							</div>
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
                    	<div class="tab-pane" id="tab_2">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin Bottom(Tiếng việt)</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="txtContent" id="txtContent" cols="50" rows="5">{{!! old('txtContent', isset($data) ? $data->content : null) !!}}</textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
                        <!---------->
	                </div><!-- /.tab-content -->
	            </div>
			    <div class="clearfix"></div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
@endsection()



