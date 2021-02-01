<?php $__env->startSection('content'); ?>
	<!-- //////////////////////////////////////////////////////////// -->
	<div class="art-breadcrumbs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="upload/hinhanh/<?php echo e(@$setting->banner); ?>" alt="Breadcrumb">
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="content-box breadcrumb-content">
							<ul class="breadcrumb-box">
								<li>
									<a href="<?php echo e(url('/')); ?>" title="<?php echo e(__('Trang chủ')); ?>"><?php echo e(__('Trang chủ')); ?></a>
								</li>
								<li>
									<span><?php echo e(__('Sản phẩm')); ?></span>
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
				<article class="art-products art-products-all">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="products-box">
									<div class="title-box">
										<h3 class="title"><?php echo e(__('Sản phẩm')); ?></h3>
									</div>
									<div class="contents products-content">
										<div class="groups-box">
										<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="item">
												<div class="product-box">
													<div class="product-image">
														<div class="image">
															<a href="<?php echo e(route('getProductDetail', ['alias'=>$item->alias])); ?>" title="<?php echo e(@$item->name); ?>">
																<img src="upload/product/<?php echo e(@$item->photo); ?>" alt="<?php echo e(@$item->name); ?>">
															</a>
														</div>
													</div>
													<div class="product-content">
														<h4 class="product-name">
															<a href="san-pham-chi-tiet.php" title="Product"><?php echo e(@$item->name); ?></a>
														</h4>
														<div class="product-excerpt">
															<p><?php echo e(@$item->mota); ?></p>
														</div>
														<div class="product-button">
															<a href="<?php echo e(route('getProductDetail', ['alias'=>$item->alias])); ?>" title="<?php echo e(__('Xem thêm')); ?>" class="btn"><?php echo e(__('Xem thêm')); ?></a>
														</div>
													</div>
												</div>
											</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</div>
									</div>
									<?php echo $products->links('templates.paginations-box'); ?>

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