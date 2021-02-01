<?php $__env->startSection('content'); ?>
	<!-- //////////////////////////////////////////////////////////// -->
	<div class="art-breadcrumbs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="<?php echo e(asset('upload/hinhanh/'.$setting->banner)); ?>" alt="Breadcrumb">
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<!-- <div class="title-box breadcrumb-title">
							<h1 class="title">Trang chủ</h1>
						</div> -->
						<div class="content-box breadcrumb-content">
							<ul class="breadcrumb-box">
								<li>
									<a href="<?php echo e(url('/')); ?>" title="<?php echo e(__('Trang chủ')); ?>"><?php echo e(__('Trang chủ')); ?></a>
								</li>
								<li>
									<a href="<?php echo e(url('/dich-vu')); ?>" title="<?php echo e(__('Dịch vụ')); ?>"><?php echo e(__('Dịch vụ')); ?></a>
								</li>
								<li>
									<span><?php echo e(__('Chi tiết dịch vụ')); ?></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!--breadcrumbs-->
	<!-- //////////////////////////////////////////////////////////// -->
	<main class="main-page">
		<div class="main-container">
			<div class="main-content">
				<article class="art-posts art-post-detail">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="posts-box">
									<div class="title-box">
										<h1 class="title"><?php echo e(Session::get('lang') == 'vn' ? $service['name'] : $service['name_eg']); ?></h1>
										<div class="post-date">
											<span><i class="far fa-calendar-alt icon"></i> <?php echo e(date('d/m/Y', strtotime($service['created_at']))); ?></span>
										</div>
										<div class="post-excerpt">
											<p><?php echo e(Session::get('lang') == 'vn' ? $service['mota'] : $service['mota_eg']); ?> </p>
										</div>
									</div>
									<div class="contents posts-content">
										<?php if(Session::get('lang') == 'vn'): ?>
										<?php echo $service['content']?>
										<?php else: ?>
										<?php echo $service['content_eg'] ?>
										<?php endif; ?>
										<div class="button">
											<a href="<?php echo e(route('getContact')); ?>" title="<?php echo e(__('Tư vấn - đặt lịch')); ?>" class="btn"><?php echo e(__('Tư vấn - đặt lịch')); ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<?php echo $__env->make('templates.fb-comments', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<article class="art-products art-services-related">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="products-box">
									<div class="title-box">
										<h3 class="title"><?php echo e(__('Dịch vụ liên quan')); ?></h3>
									</div>
									<div class="contents products-content">
										<div class="slick-slider slick-services-related">
											<?php $__currentLoopData = $services_relation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="item">
												<div class="product-box">
													<div class="product-image">
														<div class="image">
															<a href="<?php echo e(route('getServiceDetail', ['alias'=>$item->alias])); ?>" title="Product">
																<img src="<?php echo e(asset('upload/product/'.$item->photo)); ?>" alt="Product">
															</a>
														</div>
													</div>
													<div class="product-content">
														<h4 class="product-name">
															<a href="<?php echo e(route('getServiceDetail', ['alias'=>$item->alias])); ?>" title="Product"><?php echo e(Session::get('lang') == 'vn' ? $item->name : $item->name_eg); ?></a>
														</h4>
														<div class="product-excerpt">
															<p><?php echo e(Session::get('lang') =='vn' ? $item->mota : $item->mota_eg); ?></p>
														</div>
														<div class="product-button">
															<a href="<?php echo e(route('getServiceDetail', ['alias'=>$item->alias])); ?>" title="<?php echo e(__('Xem thêm')); ?>" class="btn"><?php echo e(__('Xem thêm')); ?></a>
														</div>
													</div>
												</div>
											</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</main> <!-- main-site -->
	<!-- //////////////////////////////////////////////////////////// -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>