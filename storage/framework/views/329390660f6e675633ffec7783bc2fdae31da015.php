<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



    <?php $setting = DB::table('setting')->select()->first(); ?>



    <meta http-equiv="content-language" content="vi" />



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />



    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />



    <meta name="robots" content="index, follow, all" />



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







    <meta name="googlebot" content="all, index, follow" />



    <meta name="geo.region" content="VN" />



    <meta name="geo.position" content="10.764338, 106.69208" />



    <meta name="geo.placename" content="Hà Nội" />



    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />



    



    <link rel="shortcut icon" href="<?php echo asset('upload/hinhanh/'.$setting->favico); ?>" type="image/png" />







    <!---------------------------------------------->



    <!-- Font Awesome CSS -->



   

    <!-- Plugin CSS -->



    <link href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" rel='stylesheet' type='text/css' />



    <!-- Main CSS -->



  



   



    



</head>



<body>



  







<div class="animsition main-wrapper">



    <?php echo $__env->yieldContent('content'); ?>



</div>



<!--./main-wrapper-->









</body>



</html>