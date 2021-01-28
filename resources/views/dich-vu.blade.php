@extends('index')
@section('content')
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
						<div class="content-box breadcrumb-content">
							<ul class="breadcrumb-box">
								<li>
									<a href="{{ url('/') }}" title="Trang chủ">Trang chủ</a>
								</li>
								<li>
									<span>Dịch vụ</span>
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
				<article class="art-products art-products-all">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="products-box">
									<div class="title-box">
										<h3 class="title">Dịch vụ</h3>
									</div>
									<div class="contents products-content">
										<div class="groups-box">
											@foreach ($services as $item)
											<div class="item">
												<div class="product-box">
													<div class="product-image">
														<div class="image">
															<a href="{{ route('getServiceDetail', ['alias'=>$item->alias]) }}" title="Product">
																<img src="upload/product/{{@$item->photo}}" alt="Product">
															</a>
														</div>
													</div>
													<div class="product-content">
														<h4 class="product-name">
															<a href="{{ route('getServiceDetail', ['alias'=>$item->alias]) }}" title="Product">{{ @$item->name }}</a>
														</h4>
														<div class="product-excerpt">
															<p>{{ @$item->mota}}</p>
														</div>
														<div class="product-button">
															<a href="{{ route('getServiceDetail', ['alias'=>$item->alias]) }}" title="Xem thêm" class="btn">Xem thêm</a>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
									{!! $services->links('templates.paginations-box') !!}
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