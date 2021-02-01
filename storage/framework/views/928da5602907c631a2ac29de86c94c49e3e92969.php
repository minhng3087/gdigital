<?php $__env->startSection('content'); ?>

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
									<span><?php echo e(__('Liên hệ')); ?></span>
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
				<article class="art-address">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="address-box">
									<div class="title-box title-contacts">
										<h3 class="title"><?php echo e(__('Liên hệ với chúng tôi')); ?></h3>
									</div>
									<div class="content-box address-content">
										<div class="groups-box">
											<div class="item">
												<div class="addres-box">
													<div class="title-box">
														<h3 class="title"><?php echo e(@$setting->name); ?></h3>
													</div>
													<div class="content-box">
														<ul>
															<li>
																<i class="fas fa-map-marker-alt icon"></i>
																<p><?php echo e(@$setting->address); ?></p>
															</li>
															<li>
																<i class="fas fa-phone-alt icon"></i>
																<p><?php echo e(@$setting->phone); ?> - <?php echo e(@$setting->hotline); ?></p>
															</li>
															<li>
																<i class="fas fa-envelope icon"></i>
																<p><?php echo e(@$setting->email); ?></p>
															</li>
														</ul>
														<div class="button">
															<label>Hotline</label>
															<a href="#" title="hotline" class="btn">
																<span><?php echo e(__('Tư vấn đặt hàng')); ?> (8h00 - 20h00)</span> <?php echo e(@$setting->hotline); ?>

															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="item item-maps">
												<div class="maps-box">
													<div class="content-box maps-content">
														<div class="contents">
															<div class="map-box">
																<div class="map-content">
																	<?php echo @$setting->maps ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="art-contacts">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="contacts-box">
									<div class="title-box title-contacts">
										<h3 class="title"><?php echo e(__('Liên hệ với chúng tôi')); ?></h3>
										<p><?php echo @$setting->content ?></p>
									</div>
									<div class="content-box contacts-content">
										<div class="contact-box">
											<div class="contact-content">
												<form action="" method="POST" class="form-contact">
													<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
													<div class="form-content">
														<div class="form-group <?php if($errors->first('name')!=''): ?> has-error <?php endif; ?>">
															<input class="form-control" required="" type="text" name="name" placeholder="<?php echo e(__('Họ và tên')); ?>">
															<?php if($errors->first('name')!=''): ?>
															<span class="fr-error"><?php echo $errors->first('name');; ?></span>
															<?php endif; ?>
														</div>
														<div class="groups-box">
															<div class="form-group  <?php if($errors->first('phone')!=''): ?> has-error <?php endif; ?>">
																<input class="form-control" required="" type="text" name="phone" placeholder="<?php echo e(__('Số điện thoại')); ?>">
																<?php if($errors->first('phone')!=''): ?>
																	<span class="fr-error"><?php echo $errors->first('phone');; ?></span>
																<?php endif; ?>
															</div>
															<div class="form-group  <?php if($errors->first('email')!=''): ?> has-error <?php endif; ?>">
																<input class="form-control" required="" type="text" name="email" placeholder="Email">
																<?php if($errors->first('email')!=''): ?>
																	<span class="fr-error"><?php echo $errors->first('email');; ?></span>
																<?php endif; ?>
															</div>
														</div>	
														<div class="form-group  <?php if($errors->first('content')!=''): ?> has-error <?php endif; ?>">
															<textarea class="form-control" required="" type="text" name="content" placeholder="<?php echo e(__('Nội dung')); ?>"></textarea>
															<?php if($errors->first('content')!=''): ?>
																<span class="fr-error"><?php echo $errors->first('content');; ?></span>
															<?php endif; ?>
														</div>
														<div class="form-group">
															<div class="button"> 
																<button title="Gửi" type="submit" class="btn">Gửi</button>
															</div>
														</div>
													</div>
												</form>
											</div>
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