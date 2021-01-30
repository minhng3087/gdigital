<!DOCTYPE html>
<html lang="VI">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nha khoa Otis</title>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="<?php echo e(asset('public/assets/css/fonts-UTMCentur.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/fonts-hlt_bauserif.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/fonts-astronova.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/aos.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/mobilemenu.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/slick.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/all.fontawesome.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/styles.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/customs.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('public/assets/css/responsive.css')); ?>" rel="stylesheet" />
	<style type="text/css">
	</style>
</head>
<body class="body-site body-home">
    <?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- //////////////////////////////////////////////////////////// -->
	<?php echo $__env->yieldContent('content'); ?>
	<!-- //////////////////////////////////////////////////////////// -->
    <?php echo $__env->make('templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Load Facebook SDK for JavaScript -->
</body>
<script type="text/javascript" src="<?php echo e(asset('public/assets/js/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/assets/js/aos.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/assets/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/assets/js/slick.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/assets/js/mobilemenu.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/assets/js/main.js')); ?>"></script>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.btn-popup-consultation-scheduling').click(function() {
		event.preventDefault();
		//console.log('213');
		var mskh = $(this).parents('.search-box').find('.mskh').val();
        $.ajax({
            url: '<?php echo e(route('getCustomer')); ?>',
            method: 'GET',
            data: {
                mskh: mskh
            },
            success: function (data) {
				 console.log(data);
				 $('.popups-box').html(data);
			},
			error: function (jqXHR, exception) {
				$('.popups-box').html('<div class="popups-content"><div class="container"><div class="popup-content"><div class="art-scheduling"><p>Not found</p></div></div></div></div>');
			}
        });
    });
	});
</script>
</html>