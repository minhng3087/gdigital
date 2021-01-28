@extends('backend.master')
@section('content')
<!----------------------------------------------------------------------------------->
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Quản lý
    <small>liên hệ</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="backend"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li><a href="javascript:">Quản lý liên hệ</a></li>
  </ol>
</section>
<!-- Main content -->
<!-- Main content -->
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
      if (hoi==true) document.location = homeUrl()+"/backend/contact/"+listid+"/deleteList";
    });
  });
</script>
<form method="post" name="frm1" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
      @include('backend.messages_error')
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th>
                <th class="text-center with_dieuhuong">Stt</th>
                <th>Email</th>
                <th class="text-center with_dieuhuong">Xóa</th>
                <th class="text-center with_dieuhuong">Hiển thị</th>
                <th class="text-center with_dieuhuong">ID</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $k=>$item)
              <tr>
                <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td>
                <td class="text-center with_dieuhuong">{{$k+1}}</td>
                <td>{{$item->email}}</td>
                <td class="text-center">
                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="backend/contact/{{$item->id}}/delete">Delete</a>
                </td>
                <td>
                    <?php if($item->display == 1) {?>
	                    <a style="color: red;" href="{!! URL::route('backend.contact.show',$item['id']) !!}?id={{$item['id']}}">Đã xử lý</a> 
                    <?php } else {?>  
                        <a href="{!! URL::route('backend.contact.show',$item['id']) !!}?id={{$item['id']}}">Xử lý</a>
                    <?php } ?> 
                </td> 
                <td>{{$item->id}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
        <div class="box-footer col-md-12">
                  <div class="row">
                    <div class="col-md-6">
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
@endsection