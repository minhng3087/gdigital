@extends('index')

@section('content')
<div class="art-breadcrumbs" style="display: none;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="#" alt="Breadcrumb">
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="title-box breadcrumb-title">
							<h1 class="title">{{ __('Trang chủ') }}</h1>
						</div>
						<div class="content-box breadcrumb-content">
							<ul class="breadcrumb-box">
								<li>
									<a href="{{ url('/') }}" title="Trang chủ">{{ __('Trang chủ') }}</a>
								</li>
								<li>
									<span>{{ __('Trang chủ') }}</span>
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
				<article class="art-slidershow aos-item" data-aos="zoom-in">
					<div class="container-fluid">
						<div class="row">						 	
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="slidershow-box">
									<div class="contents slidershow-content">
										<div class="slick-slider slick-slidershow">
										<!-- Slider -->
											@foreach (@$slider as $item)
											<div class="item">
												<div class="slider-box">
													<div class="slider-image">
														<div class="image">
															<img src="upload/hinhanh/{{ $item->photo }}" alt="Banner">
														</div>
													</div>
													<div class="slider-content">
														<div class="container">
															<div class="content">
																<h4>{{ $item->name}}<span>implant</span></h4>
																<!-- <p>Giải pháp trồng răng được các nha sĩ tin dùng nhất!</p> -->
																<p>{{ $item->mota }}</p>
																<div class="button">
																	<a href="{{ $item->link}}" title="{{ __('Xem thêm') }}" class="btn">{{ __('Xem thêm') }}</a>
																</div>			
															</div>											
														</div>
													</div>
												</div>
											</div>
											@endforeach
										<!-- End slider -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="art-banners art-about-us aos-item" data-aos="fade-up">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="banners-box">
									<div class="title-box">
										<h3 class="title">{{ @$about->name }}</h3>
										<p>{{ @$about->mota }}<a href="#" title="{{ __('Xem thêm') }}">{{ __('Xem thêm') }} >></a> </p>
									</div>
									<div class="contents banners-content">
										<div class="banner-box">
											<div class="banner-image">
												<div class="image">
													<img src="upload/news/{{ @$about->photo }}" alt="Banner">
												</div>
												<div class="video">
													<img src="upload/news/{{ @$about->photo }}" alt="Banner">
													<iframe width="722" height="489" src="{{ @$about->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="art-products art-products-highlights aos-item" data-aos="fade-up">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="products-box">
									<div class="title-box">
										<h3 class="title">{{ __('Sản phẩm nổi bật') }}</h3>
									</div>
									<div class="contents products-content">
										<div class="slick-slider slick-products">
											@foreach(@$products as $item)
											<div class="item">
												<div class="product-box">
													<div class="product-image">
														<div class="image">
															<a href="{{ route('getProductDetail', ['alias'=>$item->alias]) }}" title="Product">
																<img src="upload/product/{{$item->photo}}" alt="Product">
															</a>
														</div>
													</div>
													<div class="product-content">
														<h4 class="product-name">
															<a href="{{ route('getProductDetail', ['alias'=>$item->alias]) }}" title="Product">{{ $item->name}}</a>
														</h4>
														<div class="product-excerpt">
															<p>{{ $item->mota }}</p>
														</div>
														<div class="product-button">
															<a href="{{ route('getProductDetail', ['alias'=>$item->alias]) }}" title="{{ __('Xem thêm') }}" class="btn">{{ __('Xem thêm') }}</a>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="art-services aos-item" data-aos="fade-up">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="services-box">
									<div class="title-box">
										<h3 class="title">{{ __('Dịch vụ')}}</h3>
									</div>
									<div class="contents services-content">
										<div class="groups-box">
											<div class="item">
												<div class="service-box">
													<div class="service-image">
														<div class="image">
															<a href="{{ route('getServiceDetail', ['alias'=>$services[0]['alias']]) }}" title="Service">
																<img src="{{ asset('upload/product/'.$services[0]['photo'])}}" alt="Service">
															</a>
														</div>
														<h4 class="service-name">
															<a href="{{ route('getServiceDetail', ['alias'=>$services[0]['alias']]) }}" title="service">{{ $services[0]['name']}}</a>
														</h4>
													</div>
													<div class="service-content">
														<h4 class="service-name">
															<a href="{{ route('getServiceDetail', ['alias'=>$services[0]['alias']]) }}" title="service">{{ $services[0]['name']}}</a>
														</h4>
														<div class="service-excerpt">
															<p>{{ $services[0]['mota']}}</p>
														</div>
														<div class="service-button">
															<a href="{{ route('getServiceDetail', ['alias'=>$services[0]['alias']]) }}" title="{{ __('Xem thêm') }}" class="btn">{{ __('Xem thêm') }}</a>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<ul>
													@for($i=1;$i<count($services);$i++)
													<li>
														<div class="service-box">
															<div class="service-image">
																<div class="image">
																	<a href="{{ route('getServiceDetail', ['alias'=>$services[$i]['alias']]) }}" title="Service">
																		<img src="{{ asset('upload/product/'.$services[$i]['photo'])}}" alt="Service">
																	</a>
																</div>
																<h4 class="service-name">
																	<a href="{{ route('getServiceDetail', ['alias'=>$services[$i]['alias']]) }}" title="service">{{ @$services[$i]['name'] }}</a>
																</h4>
															</div>
															<div class="service-content">
																<h4 class="service-name">
																	<a href="{{ route('getServiceDetail', ['alias'=>$services[$i]['alias']]) }}" title="service">{{ @$services[$i]['name'] }}</a>
																</h4>
																<div class="service-excerpt">
																	<p>{{ @$services[$i]['mota']}}</p>
																</div>
																<div class="service-button">
																	<a href="{{ route('getServiceDetail', ['alias'=>$services[$i]['alias']]) }}" title="{{ __('Xem thêm') }}" class="btn">{{ __('Xem thêm') }}</a>
																</div>
															</div>
														</div>
													</li>
													@endfor
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="art-posts aos-item" data-aos="fade-up">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="posts-box">
									<div class="title-box">
										<h3 class="title">{{ __('Tin tức') }}</h3>
									</div>
									<div class="contents posts-content">
										<div class="groups-box">
											<div class="item">
												<div class="post-box">
													<div class="post-image">
														<div class="image">
															<a href="{{ route('getNewsDetail', ['alias'=>$news[0]['alias']]) }}" title="post">
																<img src="{{ asset('upload/news/'.$news[0]['photo'])}}" alt="post">
															</a>
														</div>
													</div>
													<div class="post-content">
														<h4 class="post-name">
															<a href="{{ route('getNewsDetail', ['alias'=>$news[0]['alias']]) }}" title="post">{{ @$news[0]['name'] }}</a>
														</h4>
														<div class="post-excerpt">
															<p>{{ @$news[0]['mota'] }}</p>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<ul>
													@for($i = 1; $i < count($news); $i++)
													<li>
														<div class="post-box">
															<div class="post-image">
																<div class="image">
																	<a href="{{ route('getNewsDetail', ['alias'=>$news[$i]['alias']]) }}" title="post">
																		<img src="{{ asset('upload/news/'.$news[$i]['photo'])}}" alt="post">
																	</a>
																</div>
															</div>
															<div class="post-content">
																<h4 class="post-name">
																	<a href="{{ route('getNewsDetail', ['alias'=>$news[$i]['alias']]) }}" title="post">{{ $news[$i]['mota'] }}</a>
																</h4>
																<div class="post-date">
																	<span>{{ date('H:i d/m/Y', strtotime($news[$i]['updated_at'])) }}</span>
																</div>
																<div class="post-excerpt">
																	<p>{{ @$news[$i]['mota']}}</p>
																</div>
															</div>
														</div>
													</li>
													@endfor
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<article class="art-testimonials aos-item" data-aos="fade-up">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="testimonials-box">
									<div class="title-box">
										<h3 class="title">{{ __('Ý kiến khách hàng') }}</h3>
									</div>
									<div class="contents testimonials-content">
										<div class="slick-slider slick-testimonials">
											<div class="item">
												<div class="testimonial-box">
													<div class="testimonial-content">
														<div class="testimonial-excerpt">
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
														</div>
													</div>
													<div class="testimonial-image">
														<div class="image">
															<img src="public/assets/images/tes-01.jpg" alt="testimonial">
														</div>
														<h4 class="testimonial-name">Mrs. Pham Minh Anh</h4>
														<div class="testimonial-office">
															<p>Marketing department, ABC Company</p>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="testimonial-box">
													<div class="testimonial-content">
														<div class="testimonial-excerpt">
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
														</div>
													</div>
													<div class="testimonial-image">
														<div class="image">
															<img src="public/assets/images/tes-01.jpg" alt="testimonial">
														</div>
														<h4 class="testimonial-name">Mrs. Pham Minh Anh</h4>
														<div class="testimonial-office">
															<p>Marketing department, ABC Company</p>
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
				<article class="art-brands aos-item" data-aos="fade-up">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="brands-box">
									<div class="title-box">
										<h3 class="title">{{ __('Đối tác') }}</h3>
									</div>
									<div class="contents brands-contents">
										<div class="slick-slider slick-brands">
											@foreach (@$lienket as $item)
											<div class="item">
												<div class="brand-box">
													<div class="brand-image">
														<div class="image">
															<a href="{{$item->link}}" title="{{ $item->name }}">
																<img src="upload/hinhanh/{{ $item->photo }}" alt="{{ $item->name }}">
															</a>
														</div>
													</div>
												</div>
											</div>
											@endforeach
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

@endsection

