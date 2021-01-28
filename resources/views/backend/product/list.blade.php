<style type="text/css">
#example2_paginate{
    display: none;
}
#example2_info{
    display: none;
}
</style>
@extends('backend.master')
@section('content')
@section('controller','Product')
@section('action','List')
<!-- Content Header (Page header) -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#chonhet").click(function(){
      var status=this.checked;
      $("input[name='chon']").each(function(){this.checked=status;})
    });
    $("#xoahet").click(function(){
      var listid="";
      $("input[name='chon']").each(function(){
        if (this.checked) listid = listid+","+this.value;
        })
      listid=listid.substr(1);   //alert(listid);
      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
      hoi= confirm("Bạn có chắc chắn muốn xóa?");
      if (hoi==true) document.location = homeUrl()+"/backend/product/"+listid+"/deleteList";
    });
  });
</script>
<script type="text/javascript">
    function changepos() {
        document.frm1.action = "backend/product/changepos";
        document.frm1.submit();
    }
</script>
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
<form method="post" name="frm1" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        @include('backend.messages_error')
        <!--<div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>-->
        <div class="box-body">
           <table id="example1" class="table table-bordered table-striped"> 
            <thead>
              <tr>
              <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>
                <th class="text-center with_dieuhuong">Stt</th>
                <th>Tên bài viết</th>
                <th style="text-align:center;"><a onclick="changepos()">Vị trí</a></th>
                <th style="text-align:center;">Hình ảnh</th>
                <th class="text-center with_dieuhuong">Hiển thị</th>
                <th class="text-center with_dieuhuong">Sửa</th>
                <th class="text-center with_dieuhuong">Xóa</th>
                <th class="text-center with_dieuhuong">Id</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $k=>$item)
              <tr>
                <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>
                <td class="text-center with_dieuhuong">{{$k+1}}</td>
                <td><a>{{$item->name}}</a>
                <td style="text-align:center;" >
                    <input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $item->stt?>" name="order[<?php echo $item->id; ?>]" />
                    <input type="hidden"  value="<?php echo $item->id?>" name="idsy[<?php echo $item->id; ?>]" />
                </td>
                <td>
                    <img src="{{ asset('upload/product/'.$item->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" style="max-width: 100%;max-height: 200px;"  alt="NO PHOTO" />
                </td>
                </td>
               
                  <td class="text-center with_dieuhuong">
                  <div class="form-group"> 
                    @if($item->status>0)
                      <a href="backend/product/edit?id={{$item->id}}&hienthi={{ time() }}&type={{ @$_GET['type'] }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Hiển thị</a>
                    @else
                      <a href="backend/product/edit?id={{$item->id}}&hienthi={{ time() }}&type={{ @$_GET['type'] }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Không Hiển thị</a>
                    @endif
                  </div>
                  <div class="form-group " > 
                    @if($item->hot>0)
                      <a href="backend/product/edit?id={{$item->id}}&hot={{ time() }}&type={{ @$_GET['type'] }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>Home</a>
                    @else
                      <a href="backend/product/edit?id={{$item->id}}&hot={{ time() }}&type={{ @$_GET['type'] }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt Home</a>
                    @endif
                  </div>
                  <div class="form-group " > 
                    @if($item->noibat>0)
                      <a href="backend/product/edit?id={{$item->id}}&noibat={{ time() }}&type={{ @$_GET['type'] }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>Nổi bật</a>
                    @else
                      <a href="backend/product/edit?id={{$item->id}}&noibat={{ time() }}&type={{ @$_GET['type'] }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt Nổi bật</a>
                    @endif
                  </div>
                  
                 
                </td>
                
                <td class="text-center with_dieuhuong">
                  <i class="fa fa-pencil fa-fw"></i><a href="backend/product/edit?id={{$item->id}}&type={{ @$_GET['type'] }}">Edit</a>
                </td>
                <td class="text-center">
                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/product/{{$item->id}}/delete?type={{ @$_GET['type'] }}">Delete</a>
                </td>
                <td style="text-align: center;">{{$item->id}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
            <div class="box-footer col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="button" onclick="javascript:window.location='backend/product/add?type={{@$_GET['type']}}'" value="Thêm" class="btn btn-primary" />
                      <button type="button" id="xoahet" class="btn btn-success">Xóa</button>
                      <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />
                    </div>
                  </div>
                </div>   
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
</form>
@endsection()
