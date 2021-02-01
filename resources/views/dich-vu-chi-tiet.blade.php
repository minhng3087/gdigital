@extends ('index')

@section ('content')
	<!-- //////////////////////////////////////////////////////////// -->
	<div class="art-breadcrumbs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="{{ asset('upload/hinhanh/'.$setting->banner)}}" alt="Breadcrumb">
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
									<a href="{{ url('/')}}" title="{{ __('Trang chủ') }}">{{ __('Trang chủ') }}</a>
								</li>
								<li>
									<a href="{{ url('/dich-vu')}}" title="{{ __('Dịch vụ') }}">{{ __('Dịch vụ') }}</a>
								</li>
								<li>
									<span>{{ __('Chi tiết dịch vụ') }}</span>
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
										<h1 class="title">{{ Session::get('lang') == 'vn' ? $service['name'] : $service['name_eg']  }}</h1>
										<div class="post-date">
											<span><i class="far fa-calendar-alt icon"></i> {{ date('d/m/Y', strtotime($service['created_at'])) }}</span>
										</div>
										<div class="post-excerpt">
											<p>{{ Session::get('lang') == 'vn' ? $service['mota'] : $service['mota_eg'] }} </p>
										</div>
									</div>
									<div class="contents posts-content">
										@if (Session::get('lang') == 'vn')
										<?php echo $service['content']?>
										@else
										<?php echo $service['content_eg'] ?>
										@endif
										<div class="button">
											<a href="{{ route('getContact') }}" title="{{ __('Tư vấn - đặt lịch') }}" class="btn">{{ __('Tư vấn - đặt lịch') }}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				@include ('templates.fb-comments')
				<article class="art-products art-services-related">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="products-box">
									<div class="title-box">
										<h3 class="title">{{ __('Dịch vụ liên quan') }}</h3>
									</div>
									<div class="contents products-content">
										<div class="slick-slider slick-services-related">
											@foreach($services_relation as $item)
											<div class="item">
												<div class="product-box">
													<div class="product-image">
														<div class="image">
															<a href="{{ route('getServiceDetail', ['alias'=>$item->alias]) }}" title="Product">
																<img src="{{ asset('upload/product/'.$item->photo) }}" alt="Product">
															</a>
														</div>
													</div>
													<div class="product-content">
														<h4 class="product-name">
															<a href="{{ route('getServiceDetail', ['alias'=>$item->alias]) }}" title="Product">{{ Session::get('lang') == 'vn' ? $item->name : $item->name_eg }}</a>
														</h4>
														<div class="product-excerpt">
															<p>{{ Session::get('lang') =='vn' ? $item->mota : $item->mota_eg }}</p>
														</div>
														<div class="product-button">
															<a href="{{ route('getServiceDetail', ['alias'=>$item->alias]) }}" title="{{ __('Xem thêm') }}" class="btn">{{ __('Xem thêm') }}</a>
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
	<!-- //////////////////////////////////////////////////////////// -->
@endsection