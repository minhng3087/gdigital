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
									<a href="{{ url('/') }}" title="Trang chủ">Trang chủ</a>
								</li>
								<li>
									<span>Tin tức</span>
								</li>
								<li>
									<span>Chi tiết tin tức</span>
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
										<h1 class="title">{{ $news['name']}}</h1>
										<div class="post-date">
											<span><i class="far fa-calendar-alt icon"></i>  {{ date('d/m/Y', strtotime($news['created_at'])) }}</span>
										</div>
										<div class="post-excerpt">
											<p>{{ $news['mota']}} </p>
										</div>
									</div>
									<div class="contents posts-content">
										<?php echo $news['content'] ?>
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
										<h3 class="title">Tin khác</h3>
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
																	<a href="{{ route('getNewsDetail', ['alias'=>$item->alias]) }}" title="post">{{ $item->name}}</a>
																</h4>
																<div class="post-date">
																	<span> {{ date('H:i d/m/Y', strtotime($item->created_at)) }}</span>
																</div>
																<div class="post-excerpt">
																	<p>{{ $item->mota}}</p>
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