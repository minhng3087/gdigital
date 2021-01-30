

<div class="body-main">		
	<header class="headers">
		@include ('templates.headers.megamenu-mobile')
		<div class="header-stick">
			
		@include ('templates.headers.header-main')
		</div> <!--header-stick-->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-4 col-sm-12 col-12">
						<div class="contact-box">
							<ul>
								<li>
									<i class="far fa-envelope icon"></i>
									<span>{{ @$setting->email }}</span>
								</li>
								<li>
									<i class="fas fa-phone-alt icon"></i>
									<span>{{ format_phone_number(@$setting->phone,'.') }}</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-2 col-md-4 col-sm-12 col-12">
						<div class="logos-box">
							<div class="logos-content">
								<a href="{{url('/')}}" title="Logo">
									<img src="{{ asset('upload/hinhanh/' . $setting->favico) }}" alt="Logo">
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-4 col-sm-12 col-12">
						<div class="groups-box">
							<div class="socials">
								<ul class="find-us">
									<li class="item">
										<a href="{{ @$setting->links1 }}" class="facebook" title="facebook">
											<i class="fab fa-facebook-f" aria-hidden="true"></i>
										</a>
									</li>
									<li class="item">
										<a href="{{ @$setting->links2 }}" class="youtube" title="youtube">
											<i class="fab fa-youtube" aria-hidden="true"></i>
										</a>
									</li>
									<li class="item">
										<a href="{{ @$setting->links3 }}" class="twitter" title="twitter">
											<i class="fab fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li class="item">
										<a href="{{ @$setting->links4 }}" class="instagram" title="instagram">
											<i class="fab fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="languages-box">
								<div class="title-box">
									<h3 class="title">
										Language
										<i class="far fa-angle-down icon"></i>
									</h3>
								</div>
								<div class="contents-box">
									<div class="contents">
										<ul>
											<li>
												<a href="#" title="EN">EN</a>
											</li>
											<li>
												<a href="#" title="VN">VN</a>
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
		@include ('templates.headers.header-main')
	</header> <!--headers-->
	