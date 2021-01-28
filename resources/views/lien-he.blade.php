@extends ('index')
@section ('content')

	<div class="art-breadcrumbs">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="breadcrumbs-content">
						<div class="image-box breadcrumb-image">
							<img src="upload/hinhanh/{{@$setting->banner}}" alt="Breadcrumb">
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
									<span>Liên hệ</span>
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
				<article class="art-address">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="address-box">
									<div class="title-box title-contacts">
										<h3 class="title">Liên hệ với chúng tôi</h3>
									</div>
									<div class="content-box address-content">
										<div class="groups-box">
											<div class="item">
												<div class="addres-box">
													<div class="title-box">
														<h3 class="title">{{ @$setting->name }}</h3>
													</div>
													<div class="content-box">
														<ul>
															<li>
																<i class="fas fa-map-marker-alt icon"></i>
																<p>Địa chỉ: {{ @$setting->address}}</p>
															</li>
															<li>
																<i class="fas fa-phone-alt icon"></i>
																<p>{{ @$setting->phone }} - {{ @$setting->hotline }}</p>
															</li>
															<li>
																<i class="fas fa-envelope icon"></i>
																<p>{{ @$setting->email }}</p>
															</li>
														</ul>
														<div class="button">
															<label>Hotline</label>
															<a href="#" title="hotline" class="btn">
																<span>Tư vấn đặt hàng (8h00 - 20h00)</span> {{@$setting->hotline}}
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="item item-maps">
												<div class="maps-box">
													<div class="content-box maps-content">
														<div class="contents">
															<div class="map-box">
																<div class="map-content">
																	<?php echo @$setting->maps ?>
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
						</div>
					</div>
				</article>
				<article class="art-contacts">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="contacts-box">
									<div class="title-box title-contacts">
										<h3 class="title">Liên hệ với chúng tôi</h3>
										<p>{{ @$setting->content}}</p>
									</div>
									<div class="content-box contacts-content">
										<div class="contact-box">
											<div class="contact-content">
												<form action="" method="POST" class="form-contact">
													<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
													<div class="form-content">
														<div class="form-group @if ($errors->first('name')!='') has-error @endif">
															<input class="form-control" required="" type="text" name="name" placeholder="Họ và tên">
															@if ($errors->first('name')!='')
															<span class="fr-error">{!! $errors->first('name'); !!}</span>
															@endif
														</div>
														<div class="groups-box">
															<div class="form-group  @if ($errors->first('phone')!='') has-error @endif">
																<input class="form-control" required="" type="text" name="phone" placeholder="Số điện thoại">
																@if ($errors->first('phone')!='')
																	<span class="fr-error">{!! $errors->first('phone'); !!}</span>
																@endif
															</div>
															<div class="form-group  @if ($errors->first('email')!='') has-error @endif">
																<input class="form-control" required="" type="text" name="email" placeholder="Email">
																@if ($errors->first('email')!='')
																	<span class="fr-error">{!! $errors->first('email'); !!}</span>
																@endif
															</div>
														</div>	
														<div class="form-group  @if ($errors->first('content')!='') has-error @endif">
															<textarea class="form-control" required="" type="text" name="content" placeholder="Nội dung"></textarea>
															@if ($errors->first('content')!='')
																<span class="fr-error">{!! $errors->first('content'); !!}</span>
															@endif
														</div>
														<div class="form-group">
															<div class="button"> 
																<button title="Gửi" type="submit" class="btn">Gửi</button>
															</div>
														</div>
													</div>
												</form>
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