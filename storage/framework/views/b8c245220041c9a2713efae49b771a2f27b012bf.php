<div class="header-main">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="groups-box">
					<div class="logos-box">
						<div class="logos-content">
							<a href="<?php echo url('/'); ?>" title="Logo">
								<img src="public/assets/images/logo.png" alt="Logo">
							</a>
						</div>
					</div>
					<div class="groups-box">
						<div class="megamenu megamenu-desktop d-none d-lg-block">
							<!-- Nav -->
							<?php echo $__env->make('templates.headers.nav-megamenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							<!-- End nav -->
						</div> <!--megamenu-->
						<div class="search-box">
							<div class="search-content">
									<div class="form-content">
										<div class="form-group">
											<input class="form-control mskh" type="text" name="mskh" placeholder="<?php echo e(__('Mã số khách hàng')); ?>">
										</div>
										<div class="form-group">
											<div class="button">
												<a title="Gửi" id="view-info-customer" class="btn btn-popup btn-popup-consultation-scheduling">
													<i class="far fa-angle-right icon"></i>
												</a>
											</div>
										</div>
									</div>
							</div>
						</div>
						<div class="megamenu megamenu-mobile-title d-lg-none">
							<div class="mobile-content">
								<button class="menu-open">
									<i class="far fa-bars icon"></i> 
								</button>					    
							</div>	
						</div> <!-- megamenu-mobile -->
					</div>
				</div>						
			</div>
		</div>
	</div>
</div>

