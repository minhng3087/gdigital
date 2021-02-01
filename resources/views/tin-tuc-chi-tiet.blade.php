@extends ('index')
@section ('content')
	<!-- //////////////////////////////////////////////////////////// -->
	<div class="art-breadcrumbs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="{{ asset('upload/hinhanh/'. $setting->banner)}}" alt="Breadcrumb">
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
									<a href="{{ url('/') }}" title="Trang chủ">{{ __('Trang chủ') }}</a>
								</li>
								<li>
									<span>{{ __('Tin tức') }}</span>
								</li>
								<li>
									<span>{{ __('Chi tiết tin tức') }}</span>
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
										<h1 class="title">{{ Session::get('lang') == 'vn' ? $news['name'] : $news['name_eg']}}</h1>
										<div class="post-date">
											<span><i class="far fa-calendar-alt icon"></i>  {{ date('d/m/Y', strtotime($news['created_at'])) }}</span>
										</div>
										<div class="post-excerpt">
											<p>{{ Session::get('lang') == 'vn' ? $news['mota'] : $news['mota_eg']}} </p>
										</div>
									</div>
									<div class="contents posts-content">
										@if (Session::get('lang') == 'vn') <?php echo $news['content'] ?> 
										@else <?php echo $news['content_eg'] ?>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				@include ('templates.fb-comments')
				<article class="art-posts art-posts-other">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="posts-box">
									<div class="title-box">
										<h3 class="title">{{ __('Tin khác') }}</h3>
									</div>
									<div class="contents posts-content">
										<div class="groups-box">
											<div class="item">
												<ul>
													@foreach($news_relation as $item)
													<li>
														<div class="post-box">
															<div class="post-image">
																<div class="image">
																	<a href="{{ route('getNewsDetail', ['alias'=>$item->alias]) }}" title="post">
																		<img src="{{ asset('upload/news/'.$item->photo)}}" alt="post">
																	</a>
																</div>
															</div>
															<div class="post-content">
																<h4 class="post-name">
																	<a href="{{ route('getNewsDetail', ['alias'=>$item->alias]) }}" title="post">{{ Session::get('lang') == 'vn' ? $item->name : $item->name_eg }}</a>
																</h4>
																<div class="post-date">
																	<span> {{ date('H:i d/m/Y', strtotime($item->created_at)) }}</span>
																</div>
																<div class="post-excerpt">
																	<p>{{ Session::get('lang') == 'vn' ? $item->mota : $item->mota_eg}}</p>
																</div>
															</div>
														</div>
													</li>
													@endforeach
												</ul>
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
@endsection