@extends('index')
@section('content')
	<!-- //////////////////////////////////////////////////////////// -->
	<div class="art-breadcrumbs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="{{ asset('upload/hinhanh/' . $setting->banner) }}" alt="Breadcrumb">
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
									<a href=" {{ url('/') }}" title="Trang chủ">Trang chủ</a>
								</li>
								<li>
									<a href="{{ url('/san-pham') }}" title="Sản phẩm">Sản phẩm</a>
								</li>
								<li>
									<span>Chi tiết sản phẩm</span>
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
												<img src="{{ asset('upload/product/' . $product['photo']) }}" alt="Product">
											</div>
											<div class="item">
												<img src="{{ asset('upload/product/' . $product['photo1']) }}" alt="Product">
											</div>
											<div class="item">
												<img src="{{ asset('upload/product/' . $product['photo2']) }}" alt="Product">
											</div>
											<div class="item">
												<img src="{{ asset('upload/product/' . $product['photo3']) }}" alt="Product">
											</div>
										</div>
										<div class="slick-slider slick-products-nav">
											<div class="item">
												<img src="{{ asset('upload/product/' . $product['photo']) }}" alt="Product">
											</div>
											<div class="item">
												<img src="{{ asset('upload/product/' . $product['photo1']) }}" alt="Product">
											</div>
											<div class="item">
												<img src="{{ asset('upload/product/' . $product['photo2']) }}" alt="Product">
											</div>
											<div class="item">
												<img src="{{ asset('upload/product/' . $product['photo3']) }}" alt="Product">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="product-detail-content">
									<h1 class="title">{{ @$product['name'] }}</h1>
									<div class="product-excerpt">
										<label>Mô tả ngắn:</label>
										<p>{{ $product['mota']}}</p>
									</div>
									<div class="button">
										<a href="{{ route('getContact') }}" title="Tư vấn - đặt lịch" class="btn ">Tư vấn - đặt lịch</a>
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
										<h3 class="title">Chi tiết sản phẩm</h3>
									</div>
									<div class="contents posts-content">
										<?php echo $product['content'] ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				@include ('templates.fb-comments')
				<article class="art-products art-products-related">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="products-box">
									<div class="title-box">
										<h3 class="title">Sản phẩm liên quan</h3>
									</div>
									<div class="contents products-content">
										<div class="slick-slider slick-products-related">
											@foreach($products_relation as $item)
											<div class="item">
												<div class="product-box">
													<div class="product-image">
														<div class="image">
															<a href="{{ route('getProductDetail', ['alias'=>$item->alias]) }}" title="Product">
																<img src="{{ asset('upload/product/' . $item->photo) }}" alt="Product">
															</a>
														</div>
													</div>
													<div class="product-content">
														<h4 class="product-name">
															<a href="{{ route('getProductDetail', ['alias'=>$item->alias]) }}" title="Product">{{ @$item->name }}</a>
														</h4>
														<div class="product-excerpt">
															<p>{{ @$item->mota }}</p>
														</div>
														<div class="product-button">
															<a href="{{ route('getProductDetail', ['alias'=>$item->alias]) }}" title="Xem thêm" class="btn">Xem thêm</a>
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