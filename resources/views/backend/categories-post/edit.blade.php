@extends('backend.master')
@section('controller', 'Danh mục tin tức' )
@section('controller_route', route('categories-post.index'))
@section('action', 'Danh sách')
@section('content')
    <div class="content">
        <div class="clearfix"></div>
		@include('backend.messages_error')

        <div class="row">
        	<div class="col-sm-5">
	        	<form action="{!! updateOrStoreRouteRender( @$module['action'], $module['module'], @$data) !!}" enctype="multipart/form-data" method="POST">
	        		@csrf
					@if(isUpdate(@$module['action']))
				        {{ method_field('put') }}
				    @endif
	        		<div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Danh mục</a>
		                    </li>
		                    <li class="">
		                    	<a href="#setting" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
		                    </li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
								<div class="form-group">
									<label for="">Tên danh mục</label>
									<input type="text" class="form-control" name="name" id="name" value="{{ old('name', @$data->name) }}">
								</div>
								<div class="form-group">
									<label for="">Đường dẫn tĩnh</label>
									<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', @$data->slug) }}">
								</div>
		                    </div>
		                    <div class="tab-pane" id="setting">
		                    	<div class="row">
		                    		<div class="col-sm-12">
		                    			<div class="form-group">
		                    				<label for="">Hình ảnh</label>
											<div class="image">
												<div class="image__thumbnail">
													@if ($data['image'])
													<img src="{{ asset('upload/post_category/'.$data['image']) }}" id="output" />
													@else
													<img src="{{ __IMAGE_DEFAULT__ }}" id="output" />
													@endif
													<input class="max-with" name="fImages" type="file"  onchange="loadFile(event)"/>
												</div>
											</div>
										</div>
		                    		</div>
		                    		<div class="col-sm-12">
		                    			 <div class="form-group">
				                            <label>Title SEO</label>
				                            <input type="text" class="form-control" name="meta_title" value="{!! old('meta_title',  @$data->meta_title) !!}">
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Description</label>
				                            <textarea name="meta_description" id="" class="form-control" rows="5">{!! old('meta_description', @$data->meta_description) !!}</textarea>
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Keyword</label>
				                            <input type="text" class="form-control" name="meta_keyword" value="{!! old('meta_keyword',@$data->meta_keyword) !!}">
				                        </div>
		                    		</div>
		                    	</div>
		                    </div>
		                    <button type="submit" class="btn btn-primary">Lưu lại</button>
		                </div>
		            </div>
	        	</form>
	        </div>
	    </div>
	</div>
@stop