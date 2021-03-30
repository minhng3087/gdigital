@extends('backend.layouts.master')
@section('controller', renderLinkAddPostType()['title'])
@section('controller_route', renderLinkAddPostType()['linkList'] )
@section('action','Chỉnh sửa')
@section('content')
	<div class="content">
		@include('backend.components.messages-error')
		<div class="clearfix"></div>
		<form action="{{ route('posts.update', $data->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<input type="hidden" value="blog" name="type">
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Bài viết</a>
		                    </li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
		                                    <input type="text" class="form-control" name="name" id="name" value="{!! old('name', @$data->name) !!}" required="">
		                                </div>
		                                <div class="form-group" id="edit-slug-box">
		                                    @include('backend.posts.permalink')
		                                </div>
		                                <div class="form-group">
		                                    <label>Mô tả ngắn</label>
		                                    <textarea class="form-control" rows="5" name="desc">{!! old('desc', @$data->desc) !!}</textarea>
		                                </div>
		                                
		                                <div class="form-group">
		                                    <label>Nội dung</label>
		                                    <textarea class="content" name="content">{!! old('content', @$data->content) !!}</textarea>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                   
		                    
		                </div>
		            </div>
				</div>
				<div class="col-sm-3">
					<div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Đăng</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group">
		                       	<div class="form-group">
			                        <label for="">Trạng thái</label>
			                        <select name="status" class="form-control">
			                        	<option value="1" {{ $data->status == 1 ? 'selected' : null }}>Hiển thị</option>
			                        	<option value="2" {{ $data->status == 2 ? 'selected' : null }}>Bản nháp</option>
			                        	<option value="3" {{ $data->status == 3 ? 'selected' : null }}>Chờ duyệt</option>
			                        </select>
			                    </div>
			                    <div class="form-group">
			                        <label for="">Thời gian hiển thị: {{ @$data->published_at->format('d/m/Y') }}</label>
			                        <label for="">Thời gian tạo bài: {{ @$data->created_at->format('d/m/Y') }}</label>
			                        <label class="custom-checkbox" style="font-weight: initial;">
			                            <input type="radio" name="time_published" value="1" checked=""> Thời gian tạo bài
			                        </label>
			                        <label class="custom-checkbox" style="font-weight: initial;">
			                            <input type="radio" name="time_published" value="2"> Chọn thời gian
			                        </label>
			                    </div>
			                    <div class="row time_published_value" style="display: none;">
		                    		<div class="col-sm-4" style="padding-right: 0px;">
		                    			<div class="form-group">
											<label for="">Ngày</label>
											<select name="time[date]" class="form-control">
												@for ($i = 1; $i < 32; $i++)
													<option value="{{ $i }}">{{ $i }}</option>
												@endfor
											</select>
					                    </div>
		                    		</div>
		                    		<div class="col-sm-4" >
		                    			<div class="form-group">
											<label for="">Tháng</label>
											<select name="time[month]" class="form-control">
												@for ($i = 1; $i < 13; $i++)
													<option value="{{ $i }}">{{ $i }}</option>
												@endfor
											</select>
					                    </div>
		                    		</div>
		                    		<div class="col-sm-4" style="padding-left: 0px;">
		                    			<div class="form-group">
											<label for="">Năm</label>
											<input type="text" name="time[year]" min="1" value="2020" class="form-control">
					                    </div>
		                    		</div>
		                    	</div>

		                    	<label class="custom-checkbox">
	                                <input type="checkbox" name="hot" value="1" {{ @$data->hot == 1 ? 'checked' : null }}> Nổi bật
	                            </label>
		                    </div>

		                    <div class="form-group">
		                    	<a href="" target="_blank" class="btn btn-default btn-flat">Xem trước</a>
		                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
		                    </div>
		                </div>
		            </div>

		             <div class="box box-success category-box">
		             	<?php 
		                        $category_list = [];
		                        if(!empty(@$data->category)){
		                           $category_list = @$data->category->pluck('id')->toArray();
		                        }
		                    ?>
		                <div class="box-header with-border">
		                    <h3 class="box-title">Danh mục bài viết</h3>
		                </div>
		                <div class="box-body">
		                    @if (!empty($categories))
		                        @foreach ($categories as $item)
		                            @if ($item->parent_id == 0)
		                                <label class="custom-checkbox">
		                                    <input type="checkbox" class="category" name="category[]" value="{{ $item->id }}" {{ in_array( $item->id, $category_list ) ? 'checked' : null }}> {{ $item->name }}
		                                 </label>
		                            @endif
		                        @endforeach
		                    @endif
		                </div>
		            </div>
		            <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Ảnh đại diện</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group" style="text-align: center;">
		                        <div class="image">
									<div class="image__thumbnail">
										<img src="{{ !empty(@$data->image) ? @$data->image : __IMAGE_DEFAULT__ }}">
										<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
										<input type="hidden" value="{{ old('image') }}" name="image"/>
										<div class="image__button" onclick="fileSelect(this)">
											<i class="fa fa-upload"></i>
											Upload
										</div>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
				</div>
			</div>
		</form>
	</div>
@stop
@section('css')
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ url('public/admin_assets/plugins/taginput/bootstrap-tagsinput.css') }}">
@endsection
@section('scripts')
	<script>
		jQuery(document).ready(function($) {
			$('#btn-ok').click(function(event) {
		        var slug_new = $('#new-post-slug').val();
		        var name = $('#name').val();
		        $.ajax({
		        	url: '{{ route('posts.get-slug') }}',
		        	type: 'GET',
		        	data: {
		        		id: $('#idPost').val(),
		        		slug : slug_new.length > 0 ? slug_new : name,
		        	},
		        })
		        .done(function(data) {
		        	$('#change_slug').show();
			        $('#btn-ok').hide();
			        $('.cancel.button-link').hide();
			        $('#current-slug').val(data);
		        	cancelInput(data);
		        })
		    });
		});	
	</script>
	
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
		});
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
	<script src="{{ url('public/backend/plugins/taginput/bootstrap-tagsinput.min.js') }}"></script>
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
		
		});
	</script>
@endsection

