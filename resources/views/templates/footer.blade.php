<!-- <style>#callnowbutton {display:none;} @media screen and (max-width:650px){#callnowbutton {display:block; height:80px; position:fixed; width:100%; left:0; bottom:-20px; border-top:2px solid rgba(51,187,51,1); background:url(https://callnowbutton.com/phone/callbutton01.png) center 10px no-repeat #009900; text-decoration:none; box-shadow:0 0 5px #888; -webkit-box-shadow:0 0 5px #888; -moz-box-shadow:0 0 5px #888; z-index:9999;}}</style> -->
	<footer class="footers aos-item" data-aos="fade-up">
		<div class="header-main">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="groups-box">
							<div class="megamenu megamenu-desktop">
							<!-- Nav -->
							@include ('templates.headers.nav-megamenu')

							<!-- End nav -->
							</div> <!--megamenu-->
							<div class="search-box">
								<div class="search-content">
									
								</div>
							</div>
						</div>				
					</div>
				</div>
			</div>
		</div>
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="footer-logos">
							<div class="logos-box">
								<div class="logos-content">
									<a href="{{ url('/') }}" title="Logo">
										<img src="{{ asset('upload/hinhanh/' . $setting->favico) }}" alt="Logo">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="footer-box footer-address">
							<div class="title-box">
								<h3 class="title">{{ @$setting->name}}</h3>
							</div>
							<div class="content-box">
								<ul>
									<li>
										<i class="fas fa-map-marker-alt icon"></i>
										<p>{{ @$setting->address}}</p>
									</li>
									<li>
										<i class="fas fa-phone-alt icon"></i>
										<p>{{ format_phone_number(@$setting->phone,' ') }} - {{ format_phone_number(@$setting->hotline,' ') }}</p>
									</li>
									<li>
										<i class="fas fa-envelope icon"></i>
										<p>{{ @$setting->email }}</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
						<div class="footer-box">
							<div class="title-box">
								<h3 class="title">Chính sách</h3>
							</div>
							<div class="content-box">
								<ul>
									<li>
										<a href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
									</li>
									<li>
										<a href="#" title="Chính sách vận chuyển">Chính sách vận chuyển</a>
									</li>
									<li>
										<a href="#" title="Chính sách đổi trả">Chính sách đổi trả</a>
									</li>
									<li>
										<a href="#" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
						<div class="footer-box footer-fanpage">
							<div class="title-box">
								<h3 class="title">Kết nối trên MXH</h3>
							</div>
							<div class="content-box">
								<div class="facebook-fanpage">
									<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=270&height=253&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=897190940472200" width="275" height="142" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="groups-box">
							<div class="copy-right">
								<p>{{ @$setting->copyright }}</p>
							</div>
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
										<a href="{{ @$setting->links3 }}" class="instagram" title="instagram">
											<i class="fab fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer> <!-- footers -->
</div> <!-- body-main -->

<div class="art-popups art-popups-consultation-scheduling">
	<div class="popups-box">					
	
	</div>									
</div>


<div class="back-to-top">
	<i class="far fa-chevron-up icon" aria-hidden="true"></i>
</div>
<div class="chats-bot">
	<div class="content">
		<ul>
			<li>
				<a href="#" title="Chat" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="200" data-height="200">
					<img src="{{ asset('public/assets/images/icon-zalo.png') }}" alt="Chat">
				</a>
			</li>
			<li>
			<div data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="200" data-height="200"></div>

			</li>
			<li>
				<a href="tel:01688xxxxxx" onclick="_gaq.push(['_trackEvent', 'Contact', 'Call Now Button', 'Phone']);"  id="callnowbutton">
					<img src="{{ asset('public/assets/images/icon-phone.png') }}" alt="Chat">
				</a>
			</li>
			<li>
				<a href="#" title="Chat">
					<img src="{{ asset('public/assets/images/icon-mes.png') }}" alt="Chat">
				</a>
		  
			</li>
		</ul>
	</div>
</div>



