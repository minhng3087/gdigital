@extends ('index')
@section ('content')
	<!-- //////////////////////////////////////////////////////////// -->
	<div class="art-breadcrumbs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="upload/hinhanh/{{ @$setting->banner }}" alt="Breadcrumb">
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
									<a href="{{ url('/') }}" title="{{ __('Trang chủ') }}">{{ __('Trang chủ') }}</a>
								</li>
								<li>
									<span>{{ __('Giới thiệu') }}</span>
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
				<article class="art-banners art-about-us art-introduce">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="banners-box">
									<div class="contents banners-content">
										<div class="banner-box">
											<div class="banner-image">
												<div class="image">
													<img src="upload/news/{{ $gioithieu->photo}}" alt="Banner">
												</div>
												<div class="video">
													<img src="upload/news/{{ $gioithieu->photo}}" alt="Banner">
													<iframe width="722" height="489" src="{{$gioithieu->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
										</div>
									</div>
									<div class="title-box">
										<h3 class="title">{{ __('Về chúng tôi') }}</h3>
										<p>{{ Session::get('lang') == 'vn' ? $gioithieu->mota : $gioithieu->mota_eg }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>		
				<article class="art-banners art-about-us art-vision">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="banners-box">
									<div class="title-box">
										<h3 class="title">{{ __('Tầm nhìn') }}</h3>
										<p>{{ Session::get('lang') == 'vn' ? $tamnhin->mota : $tamnhin->mota_eg }}</p>
									</div>
									<div class="contents banners-content">
										<div class="banner-box">
											<div class="banner-image">
												<div class="image">
													<img src="upload/news/{{ @$tamnhin->photo}}" alt="Banner">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>				
				<article class="art-banners art-about-us art-mission">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="banners-box">
									<div class="title-box">
										<div class="content">
											<h3 class="title">{{ __('Sứ mệnh') }}</h3>
											<p>{{ Session::get('lang') == 'vn' ? $sumenh->mota : $sumenh->mota_eg }}</p>
											<h3 class="title title-2">{{ __('Giá trị cốt lõi') }}</h3>
											<p>{{ Session::get('lang') == 'vn' ? $giatri->mota : $giatri->mota_eg }}</p>
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
@endsection