<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <?php $setting = Cache::get('setting'); ?>

    <meta http-equiv="content-language" content="vi" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <meta name="robots" content="noindex, nofollow, noall" />

    <meta name='revisit-after' content='1 days' />

    

    <title><?php echo $__env->yieldContent('title'); ?></title>

    

    <meta name="author" content="<?php echo $setting->website; ?>" />

    <meta name="copyright" content="Nguyễn Hữu Nhân [nguyennhan091@gmail.com]" />

    <meta name="keywords" content="<?php echo $__env->yieldContent('keyword'); ?>" />

    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>" />

    <meta http-equiv="content-language" content="vi" />

    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />

    <meta property="og:locale" content="vi_VN"/>

    <meta property="og:url" content="<?php echo $setting->website; ?>" />

    <meta property="og:site_name" content="<?php echo $__env->yieldContent('title'); ?>" />

    <meta property="og:type" content="website" />

    <meta property="og:image" content="<?php echo $__env->yieldContent('img_share'); ?>" />

    <meta property="og:description" content="<?php echo $__env->yieldContent('description'); ?>" />



    <meta name="googlebot" content="noall, noindex, nofollow" />

    <meta name="geo.region" content="VN" />

    <meta name="geo.position" content="10.764338, 106.69208" />

    <meta name="geo.placename" content="Hà Nội" />

    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />

    

    <link rel="shortcut icon" href="<?php echo asset('upload/hinhanh/'.$setting->favico); ?>" type="image/png" />



    <!---------------------------------------------->

    <!-- Font Awesome CSS -->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--link css-->
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>

     <!--------------CSS----------->

    <link href="<?php echo e(asset('public/css/page-contact-form.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/roboto.css')); ?>">



    <!-- Latest compiled and minified JavaScript -->

    <link href='//hstatic.net/0/global/design/css/font-awesome.min.css' rel='stylesheet' type='text/css' media='all'/>

    <link href="<?php echo e(asset('public/css/mobile-reponsive.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <link href="<?php echo e(asset('public/css/lightslider.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <link href="<?php echo e(asset('public/css/master-posts-custom.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <link href="<?php echo e(asset('public/css/mystyle.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <link href="<?php echo e(asset('public/css/mystyle-mobile.css')); ?>" rel='stylesheet' type='text/css' media='all'/>



    <link href="<?php echo e(asset('public/css/reset.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <link href="<?php echo e(asset('public/css/mystyle-mobile-v2.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <link href="<?php echo e(asset('public/css/prettyPhoto.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <link href="<?php echo e(asset('public/css/sidebar.css')); ?>" rel='stylesheet' type='text/css' media='all'/>



    <!--------------Js----------->

    <script src="<?php echo e(asset('public/js/jquery.min.1.11.0.js')); ?>"></script>

    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>

    <script src="<?php echo e(asset('public/js/lightslider.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/jquery.lazyload.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/jquery.prettyPhoto.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/jquery-scrolltofixed-min.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/superfish.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/menumaker.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/scripts.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/modernizr.custom.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/html5shiv.js')); ?>"></script>

    <script src="<?php echo e(asset('public/js/jquery-migrate-1.2.0.min.js')); ?>"></script>

    <script src="<?php echo e(asset('public/js/jquery.touchSwipe.min.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/plugin.1.0.js')); ?>"></script>



    <script src="<?php echo e(asset('public/js/jquery.flexslider.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/owl.carousel.js')); ?>" type='text/javascript'></script>

    <link href="<?php echo e(asset('public/css/owl.carousel.css')); ?>" rel='stylesheet' type='text/css' media='all'/>

    <script src="<?php echo e(asset('public/js/classie.js')); ?>" type='text/javascript'></script>

    <script src="<?php echo e(asset('public/js/mlpushmenu.js')); ?>" type='text/javascript'></script>

</head>

<body>
    <?php echo $__env->make('templates.layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrapper classic-header">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('templates.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</body>

</html>