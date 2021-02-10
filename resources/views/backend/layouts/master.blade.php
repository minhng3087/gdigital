<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản trị website</title>
    <base href="{{ asset('backend') }}" >
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ url('public/admin_assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('public/admin_assets/plugins/datatables/dataTables.bootstrap.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/styles.css') }}"/>
    <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/AdminLTE.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/nhan.css') }}"/>
    <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/mycss.css') }}"/>

    @toastr_css
    @yield('css')
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url('public/admin_assets/dist/css/skins/_all-skins.min.css') }}">
    <link href="{{ url('public/admin_assets/dist/js/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
      @include('backend.layouts.header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('backend.layouts.menu')

      <div class="content-wrapper">
            @if(URL::current() != url('backend/home'))
                <section class="content-header">
                    <h1>
                        <a href="@yield('controller_route')">@yield('controller')</a>
                        <small>@yield('action')</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{!! url('backend') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="@yield('controller_route')">@yield('controller')</a></li>
                        <li class="active">@yield('action')</li>
                    </ol>
                </section>
            @endif
            @yield('content')
        </div>
     
        <!-- Main content -->
      @include('backend.layouts.footer')

      @include('backend.components.modal-confim-delete')

      

      <!-- Control Sidebar -->
    </div><!-- ./wrapper -->
  </body>
    <script type="text/javascript">
        function homeUrl(){
            return '{!! url('/') !!}'
      }
    </script>
       
      <!-- jQuery 2.1.4 -->
      <script src="{{ url('public/admin_assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
      <!-- CK Editor -->
      <script src="{{ asset('public/admin_assets/plugins/ckeditor/ckeditor.js') }}"></script>
      <script src="{!! asset('public/admin_assets/plugins/tinymce/tinymce.min.js') !!}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      
      <script src="{{ url('public/admin_assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
  
  
      <script src="{{ url('public/admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
      <!-- SlimScroll -->
      <script src="{{ url('public/admin_assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
      <!-- FastClick -->
      <script src="{{ url('public/admin_assets/plugins/fastclick/fastclick.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ url('public/admin_assets/dist/js/app.min.js') }}"></script>
      <link href="{{ url('public/admin_assets/plugins/multiupload/assets/css/style.css') }}" rel="stylesheet" />
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/jquery.knob.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/jquery.ui.widget.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/jquery.iframe-transport.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/jquery.fileupload.js') }}"></script>
      <script src="{{ url('public/admin_assets/plugins/multiupload/assets/js/script.js') }}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ url('public/admin_assets/dist/js/demo.js') }}"></script>
      <script src="{{ url('public/admin_assets/dist/js/myscript.js') }}"></script>
      <script src="{{ url('public/admin_assets/dist/js/fileinput.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('public/admin_assets/plugins/ckfinder/ckfinder.js') }}"></script>

      @toastr_js
      @toastr_render
      @yield('scripts')
</html>
