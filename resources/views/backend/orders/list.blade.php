@extends('backend.layouts.master')
@section('controller', $module['name'] )
@section('controller_route', route($module['module'].'.index'))
@section('action', 'Danh sách')
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('backend.components.messages-error')
                <form action="{!! route($module['module'].'.postMultiDel') !!}" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="btnAdd">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không ?')">
                            <i class="fa fa-trash-o"></i> Xóa
                        </button>
                    </div>
                    @include('backend.components.table')
                </form>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <?php $url = route($module['module'].'.index') ?>
    @include('backend.components.table-js-config', ['route'=> $url ])
@endsection