@extends('backend.layouts.master')
@section('controller', $module['name'] )
@section('controller_route', route($module['module'].'.index'))
@section('action', 'Chỉnh sửa')
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
				@include('backend.components.messages-error')
                <form action="{!! updateOrStoreRouteRender( @$module['action'], $module['module'], @$data) !!}" method="POST">
                    @csrf
                    @if(isUpdate(@$module['action']))
                        {{ method_field('put') }}
                    @endif
                	<div class="row">
                		<div class="col-sm-12">
                			<div class="form-group">
                				<label for="">Họ tên</label>
                				<input type="text" class="form-control" value="{{ @$data->Customers->name }}" readonly="">
                			</div>
                			<div class="form-group">
                				<label for="">Email</label>
                				<input type="text" class="form-control" value="{{ @$data->Customers->email }}" readonly="">
                			</div>
                			<div class="form-group">
                				<label for="">Số điên thoại</label>
                				<input type="text" class="form-control" value="{{ @$data->Customers->phone }}"  readonly="">
                			</div>
                			<div class="form-group">
								@if($module['name'] == 'Bình luận sản phẩm')
									<label for="">Tên sản phẩm</label>
									<input type="text" class="form-control" value="{{ @$data->Product->name }}"  readonly="" style="margin-bottom: 10px">
									@if (!empty(@$data->Product->name))
										<a href="{{ route('home.single.product', $data->Product->slug) }}" target="_blank">Link: {{ route('home.single.product', $data->Product->slug) }}</a>
									@endif
								@else
									<label for="">Tên bài viết</label>
									<input type="text" class="form-control" value="{{ @$data->Post->name }}"  readonly="" style="margin-bottom: 10px">
									@if (!empty(@$data->Post->name))
										<a href="{{ route('home.post.single', $data->Post->slug) }}" target="_blank">Link: {{ route('home.post.single', $data->Post->slug) }}</a>
									@endif			
								@endif
                			</div>
                			
                			<div class="form-group">
                				<label for="">Nội dung bình luận</label>
                				<textarea class="form-control" name="content" rows="6">{{ @$data->content }}</textarea>
                			</div>
                            <label class="custom-checkbox" style="margin-bottom: 10px ">
                                @if(isUpdate(@$module['action']))
                                    <input type="checkbox" name="status" value="1" {{ @$data->status == 1 ? 'checked' : null }}> Duyệt bình luận
                                @else
                                    <input type="checkbox" name="status" value="1" checked> Duyệt bình luận
                                @endif
                            </label>
                			<button type="submit" class="btn btn-primary">Lưu lại</button>
                		</div>
                	</div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('css')
	<style>
		.row-upload .col-upload {
		    padding: 0 7px;
		}
		.row-upload {
		    display: inline-flex;
		    width: 100%;
		    flex-wrap: wrap;
		    margin: 0 -7px;
		}
		.row-upload .col-upload img {
		    width: 70px;
		    height: 70px;
		    object-fit: cover;
		    border-radius: 3px;
		}
	</style>
@endsection