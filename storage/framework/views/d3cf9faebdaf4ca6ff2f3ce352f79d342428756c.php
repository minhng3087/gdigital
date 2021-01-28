<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản trị website</title>
    <base href="<?php echo e(asset('backend')); ?>" >
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo e(url('public/admin_assets/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/bower_components/select2/dist/css/select2.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(url('public/admin_assets/plugins/datatables/dataTables.bootstrap.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(url('public/admin_assets/dist/css/styles.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(url('public/admin_assets/dist/css/AdminLTE.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(url('public/admin_assets/dist/css/nhan.css')); ?>"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(url('public/admin_assets/dist/css/skins/_all-skins.min.css')); ?>">
    <script type="text/javascript">
      function homeUrl(){
          return '<?php echo url('/'); ?>'
      }
    </script>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo e(url('public/admin_assets/plugins/jQuery/jQuery-2.1.4.min.js')); ?>"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script src="<?php echo e(asset('public/admin_assets/plugins/ckeditor/ckeditor.js')); ?>"></script>
    <script src="<?php echo asset('public/admin_assets/plugins/tinymce/tinymce.min.js'); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!--<script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>-->
    <script src="<?php echo e(url('public/admin_assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
    <!-- Morris.js charts -->
    <!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/morris/morris.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/knob/jquery.knob.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
    -->
    <script src="<?php echo e(url('public/admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo e(url('public/admin_assets/plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(url('public/admin_assets/plugins/fastclick/fastclick.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(url('public/admin_assets/dist/js/app.min.js')); ?>"></script>
    <link href="<?php echo e(url('public/admin_assets/plugins/multiupload/assets/css/style.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(url('public/admin_assets/plugins/multiupload/assets/js/jquery.knob.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/multiupload/assets/js/jquery.ui.widget.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/multiupload/assets/js/jquery.iframe-transport.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/multiupload/assets/js/jquery.fileupload.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/plugins/multiupload/assets/js/script.js')); ?>"></script>
    <!-- <link rel="stylesheet" href="<?php echo e(asset('public/admin_assets/dropzone/dropzone.css')); ?>">
    <script src="<?php echo e(asset('public/admin_assets/dropzone/dropzone.min.js')); ?>"></script>
    <script type="text/javascript">
       Dropzone.options.myDropzone= {
           url: '<?php echo e(url('admin/uploadImg')); ?>',
           headers: {
               'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
           },
           autoProcessQueue: true,
           uploadMultiple: true,
           parallelUploads: 5,
           maxFiles: 10,
           maxFilesize: 5,
           acceptedFiles: ".jpeg,.jpg,.png,.gif",
           dictFileTooBig: 'Image is bigger than 5MB',
           addRemoveLinks: true,
           removedfile: function(file) {
           var name = file.name;    
           name =name.replace(/\s+/g, '-').toLowerCase();    /*only spaces*/
            $.ajax({
                type: 'POST',
                url: '<?php echo e(url('admin/deleteImg')); ?>',
                headers: {
                     'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
                 },
                data: "id="+name,
                dataType: 'html',
                success: function(data) {
                    $("#msg").html(data);
                }
            });
          var _ref;
          if (file.previewElement) {
            if ((_ref = file.previewElement) != null) {
              _ref.parentNode.removeChild(file.previewElement);
            }
          }
          return this._updateMaxFilesReachedClass();
        },
        previewsContainer: null,
        hiddenInputContainer: "body",
       }
    </script>
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
    </style> -->
    <!--<script src="<?php echo e(url('public/admin_assets/dist/js/pages/dashboard.js')); ?>"></script>-->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(url('public/admin_assets/dist/js/demo.js')); ?>"></script>
    <script src="<?php echo e(url('public/admin_assets/dist/js/myscript.js')); ?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- the main fileinput plugin file -->
  <link href="<?php echo e(url('public/admin_assets/dist/js/fileinput.min.css')); ?>" media="all" rel="stylesheet" type="text/css" />
  <script src="<?php echo e(url('public/admin_assets/dist/js/fileinput.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('public/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
      <!---- thông báo------->
        <link href="<?php echo e(url('public/admin_assets/thongbao/toastr.min.css')); ?>" rel="stylesheet" />
        <script src="<?php echo e(url('public/admin_assets/thongbao/toastr.min.js')); ?>"></script>
       <script type="text/javascript">
            $(document).ready(function(){
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            });
        </script>
      <!------------ scrip o day ----------->
        <?php if(Session::has('toastr_msg')): ?>
            <script type='text/javascript'>
                toastr["<?php echo Session::get('toastr_lvl'); ?>"]("<?php echo Session::get('toastr_msg'); ?>")
            </script>
        <?php endif; ?>
    <div class="wrapper">
      <?php echo $__env->make('backend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php echo $__env->make('backend.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php echo $__env->make('backend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Control Sidebar -->
    </div><!-- ./wrapper -->
  </body>
</html>
