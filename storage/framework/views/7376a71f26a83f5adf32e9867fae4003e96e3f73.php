

<div class="body-main">		
	<header class="headers">
		<?php echo $__env->make('templates.headers.megamenu-mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="header-stick">
			
		<?php echo $__env->make('templates.headers.header-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div> <!--header-stick-->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-4 col-sm-12 col-12">
						<div class="contact-box">
							<ul>
								<li>
									<i class="far fa-envelope icon"></i>
									<span><?php echo e(@$setting->email); ?></span>
								</li>
								<li>
									<i class="fas fa-phone-alt icon"></i>
									<span><?php echo e(format_phone_number(@$setting->phone,'.')); ?></span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-2 col-md-4 col-sm-12 col-12">
						<div class="logos-box">
							<div class="logos-content">
								<a href="<?php echo e(url('/')); ?>" title="Logo">
									<img src="<?php echo e(asset('upload/hinhanh/' . $setting->favico)); ?>" alt="Logo">
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-4 col-sm-12 col-12">
						<div class="groups-box">
							<div class="socials">
								<ul class="find-us">
									<li class="item">
										<a href="<?php echo e(@$setting->links1); ?>" class="facebook" title="facebook">
											<i class="fab fa-facebook-f" aria-hidden="true"></i>
										</a>
									</li>
									<li class="item">
										<a href="<?php echo e(@$setting->links2); ?>" class="youtube" title="youtube">
											<i class="fab fa-youtube" aria-hidden="true"></i>
										</a>
									</li>
									<li class="item">
										<a href="<?php echo e(@$setting->links3); ?>" class="twitter" title="twitter">
											<i class="fab fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li class="item">
										<a href="<?php echo e(@$setting->links4); ?>" class="instagram" title="instagram">
											<i class="fab fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="languages-box">
								<div class="title-box">
									<h3 class="title">
										<?php if(Session::get('lang') == 'en'): ?> EN 
										<?php else: ?> VN
										<?php endif; ?>
										<i class="far fa-angle-down icon"></i>
									</h3>
								</div>
								<div class="contents-box">
									<div class="contents">
										<ul>
											<li>
												<a href="<?php echo route('user.change-language', ['vn']); ?>" title="VN">VN</a>
											</li>
											<li>
												<a href="<?php echo route('user.change-language', ['en']); ?>" title="EN">EN</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo $__env->make('templates.headers.header-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</header> <!--headers-->
	