<?php $__env->startSection('content'); ?>
	<!-- //////////////////////////////////////////////////////////// -->
	<div class="art-breadcrumbs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="<?php echo e(asset('upload/hinhanh/' . $setting->banner)); ?>" alt="Breadcrumb">
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
									<a href=" <?php echo e(url('/')); ?>" title="Trang chủ"><?php echo e(__('Trang chủ')); ?></a>
								</li>
								<li>
									<a href="<?php echo e(url('/san-pham')); ?>" title="Sản phẩm"><?php echo e(__('Sản phẩm')); ?></a>
								</li>
								<li>
									<span><?php echo e(__('Chi tiết sản phẩm')); ?></span>
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
				<article class="art-products art-product-detail">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="product-detail-images">
									<div class="images">
										<div class="slick-slider slick-products-for">
											<div class="item">
												<img src="<?php echo e(asset('upload/product/' . $product['photo'])); ?>" alt="Product">
											</div>
											<div class="item">
												<img src="<?php echo e(asset('upload/product/' . $product['photo1'])); ?>" alt="Product">
											</div>
											<div class="item">
												<img src="<?php echo e(asset('upload/product/' . $product['photo2'])); ?>" alt="Product">
											</div>
											<div class="item">
												<img src="<?php echo e(asset('upload/product/' . $product['photo3'])); ?>" alt="Product">
											</div>
										</div>
										<div class="slick-slider slick-products-nav">
											<div class="item">
												<img src="<?php echo e(asset('upload/product/' . $product['photo'])); ?>" alt="Product">
											</div>
											<div class="item">
												<img src="<?php echo e(asset('upload/product/' . $product['photo1'])); ?>" alt="Product">
											</div>
											<div class="item">
												<img src="<?php echo e(asset('upload/product/' . $product['photo2'])); ?>" alt="Product">
											</div>
											<div class="item">
												<img src="<?php echo e(asset('upload/product/' . $product['photo3'])); ?>" alt="Product">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="product-detail-content">
									<h1 class="title"><?php echo e(Session::get('lang') == 'vn' ? $product['name'] : $product['name_eg']); ?></h1>
									<div class="product-excerpt">
										<label><?php echo e(__('Mô tả ngắn')); ?>:</label>
										<p><?php echo e(Session::get('lang') == 'vn' ? $product['mota'] : $product['mota_eg']); ?></p>
									</div>
									<div class="button">
										<a href="<?php echo e(route('getContact')); ?>" title="<?php echo e(__('Tư vấn - đặt lịch')); ?>" class="btn "><?php echo e(__('Tư vấn - đặt lịch')); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="art-posts art-product-detail">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="posts-box">
									<div class="title-box">
										<h3 class="title"><?php echo e(__('Chi tiết sản phẩm')); ?></h3>
									</div>
									<div class="contents posts-content">
										<?php if(Session::get('lang') == 'vn'): ?>
										<?php echo $product['content'] ?>
										<?php else: ?>
										<?php echo $product['content_eg'] ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<?php echo $__env->make('templates.fb-comments', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<article class="art-products art-products-related">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="products-box">
									<div class="title-box">
										<h3 class="title"><?php echo e(__('Sản phẩm liên quan')); ?></h3>
									</div>
									<div class="contents products-content">
										<div class="slick-slider slick-products-related">
											<?php $__currentLoopData = $products_relation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="item">
												<div class="product-box">
													<div class="product-image">
														<div class="image">
															<a href="<?php echo e(route('getProductDetail', ['alias'=>$item->alias])); ?>" title="Product">
																<img src="<?php echo e(asset('upload/product/' . $item->photo)); ?>" alt="Product">
															</a>
														</div>
													</div>
													<div class="product-content">
														<h4 class="product-name">
															<a href="<?php echo e(route('getProductDetail', ['alias'=>$item->alias])); ?>" title="Product"><?php echo e(Session::get('lang') == 'vn' ? $item->name : $item->name_eg); ?></a>
														</h4>
														<div class="product-excerpt">
															<p><?php echo e(Session::get('lang') == 'vn' ? $item->mota : $item->mota_eg); ?></p>
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