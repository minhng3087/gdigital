<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPORT SHOP</title>
    <!--link css-->
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo e(__BASE_URL__); ?>/css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="http://localhost/anhquyen/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/responsive.css">
    <script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/jquery.min.js"></script>
</head>
<body> 
    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/slick.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/jquery.mmenu.all.js"></script>
    <script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/private.js"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\m\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>