@extends('frontend.layouts.master')
@section('content')
	<section id="bread">
		<div class="container">
			<div class="content">
				<ul class="list-inline text-uppercase">
					<li class="list-inline-item"><a href="{{ url('/') }}">Trang chủ</a></li>
					<li class="list-inline-item"><a href="{{ route('home.new.product') }}">sản phẩm</a></li>
					<li class="list-inline-item"><a href="javascript:0">{{ $data->name }}</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section id="product"> 
		<div class="container">
			<div class="content">
				<div class="preview pb-100">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="slide-thumbs">
								<div class="slider-for">
									@if (count($data->ProductImage()->where('type', 'more_image_product')->where('image', '!=', null)->get()))
                                    	@foreach ($data->ProductImage()->where('type', 'more_image_product')->where('image', '!=', null)->get() as $item)
                                    		<div class="carousel-item">
		                                    	<a title="{{ $data->name }}" href="{{ $item->image }}" data-fancybox="group" class ="lightbox" data-fancybox="lib-1">
		                                    		<img src="{{ $item->image }}" class="img-fluid" width="100%" alt="{{ $data->name }}">
		                                    	</a>
		                                    </div>
                                    	@endforeach
                                    @endif
                                    
                                </div>
                                <!--/.Slides-->
                                <div class="slider-nav">
								
									@if (count($data->ProductImage()->where('image', '!=', null)->where('type', 'more_image_product')->get()))
										@foreach ($data->ProductImage()->where('image', '!=', null)->where('type', 'more_image_product')->get() as $item)
											<div class="clc">
												<img class="" src="{{ $item->image }}" width="100%" alt="{{ $data->name }}">
												</div>
										@endforeach
									@endif

								
                                </div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="info-prev">
								<div class="cate">
									<h1>{{ $data->name }}</h1>
									<div class="vote">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>	
										@if (!is_null($data->sale_price))
											<?php $price = $data->sale_price; ?>
											<span class="price">{{ number_format($data->sale_price,0, '.', '.') }}đ</span> 
											<del class="price" >
												{{ number_format($data->regular_price,0, '.', '.') }}đ
											</del>
										@else
											<?php $price = $data->regular_price; ?>
											@if ($data->regular_price != 0)
												<span class="price">{{ number_format($data->regular_price,0, '.', '.') }}đ</span>
											@endif
											
										@endif
									@if(count($data->ProductVersion()->get()))
									<div class="phienban">
										<ul class="list-inline">
											<li class="list-inline-item"><span class="tit">CHỌN PHIÊN BẢN</span></li>
											@foreach ($data->ProductVersion()->get() as $item)
											<li class="list-inline-item"><span>
												<input type="radio" class="version-check-box" name="fruit-1" value="{{ $item->key }}">
												<label for="version-{{ $item->key}}">{{ $item->key }}</label>
											</span>
											</li>
											@endforeach
											
										</ul>
									</div>
									@endif
									<div class="desc">
									{{ @$data->sort_desc }}
									@if (count($data->ProductGift))
										<ul>
											@foreach ($data->ProductGift as $gift)
												<?php $indexParent = $loop->index; ?>
												@if ($gift->type == 'options')
													<li>{!! $gift->desc !!}</li>
														<?php $options_gift = json_decode( $gift->value );?>
														@if (!empty($options_gift->list))
															@foreach ($options_gift->list as $key => $value)
																<li>
																	{{ $value->title }}
																</li>
															@endforeach
														@endif
													@else
													<li>{!! $gift->desc !!}</li>
												@endif
											@endforeach
										</ul>
									@endif
									</div>
									<div class="quantity-add">
										<ul class="list-inline">
											<li class="list-inline-item">
												<div class="quantity">
				                                    <span class="mont">Số lượng:</span>
				                                    <div class="number-spinner">
				                                      <input type="text" class="pl-ns-value" value="10" maxlength="5">
				                                    </div>
				                                </div>
											</li>
											<li class="list-inline-item">
												<div class="add-cart"><a href="">Thêm vào giỏ hàng</a></div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-detail">
					<ul class="nav nav-tabs" role="tablist">
						<li class="">
							<a class="active text-uppercase robo-bold" data-toggle="tab" href="#tabs-1" role="tab">Chi tiết sản phẩm</a>
						</li>
						<li class="">
							<a class="text-uppercase robo-bold" data-toggle="tab" href="#tabs-2" role="tab">Đánh giá</a>
						</li>
					</ul>
					<div class="detail pb-100">
						<div class="tab-content">
							<div class="tab-pane active" id="tabs-1" role="tabpanel">
								{!! @$data->content !!}
								<div class="box-thongso">
									{!! @$data->specifications !!}
								</div>
							</div>
							<div class="tab-pane" id="tabs-2" role="tabpanel">
								{!! @$data->evaluate !!}
							</div>
						</div>
						<div class="comment pt-50">
							<div class="title-cmt">Để lại bình luận của bạn </div>
							<div class="form-cmt">
								<div class="row">
									<div class="col-md-12">
										<div class="item">
											<textarea name="" id="" cols="30" rows="10" placeholder="Viết bình luận"></textarea>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item"><input type="text" placeholder="Họ &amp; tên *" class="inp-cmt"></div>
									</div>
									<div class="col-md-4">
										<div class="item"><input type="text" placeholder="Email *" class="inp-cmt"></div>
									</div>
									<div class="col-md-4">
										<div class="item"><input type="text" placeholder="Website" class="inp-cmt"></div>
									</div>
									<div class="col-md-12">
										<div class="item item-check">
											<input type="checkbox" id="1"><label for="1">Lưu Tên và Mail của bạn cho lần đăng nhập tiếp theo</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="item">
											<div class="btn-cmt">
												<button>Đăng bình luận</button>
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
	</section>
	<section class="box-product pb-50" >
		<div class="container"> 
			<div class="content">
				<div class="title">
					<h2 class="robo-bold text-uppercase">Sản phẩm liên quan</h2>
				</div>
				<div class="list-product slide-prod">
					<div class="row">
						@foreach($product_same_category as $item)
						<div class="col-md-2">
							@include('frontend.components.product-2', ['item' => $item])
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="popup">
		<div class="modal fade" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		    	<div class="modal-body">
			      	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        <div class="preview">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="slide-thumbs">
									<div class="avarta" style="border: 1px solid #ddd;"><img class="" src="images/thumb1.png" class="img-fluid" width="100%" alt="Third slide"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="info-prev">
									<div class="cate">
										<h1>iPhone 11 Pro Max 512GB </h1>
										<div class="vote">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>	
										<div class="price">3.567.000 đ</div>
										<div class="desc">
											Để tìm kiếm một chiếc smartphone có hiệu năng mạnh mẽ và có thể sử dụng mượt mà trong 2-3 năm tới thì không có chiếc máy nào xứng đang hơn chiếc iPhone 11 Pro Max 512GB mới ra mắt trong năm 2019 của Apple.
											<ul>
												<li>Trong hộp có: Sạc,Tai nghe,Cây lấy sim,Cáp,Sách hướng dẫn,Hộp</li>
												<li>Bảo hành chính hãng 12 tháng.</li>
												<li>Lỗi là đổi mới trong 1 tháng tại hơn 2005 siêu thị toàn quốc Xem chi tiết</li>
												<li>Phiếu mua hàng trị giá 1 triệu <span>(được quy đổi thành tiền mặt) *</span></li>
											</ul>
										</div>
										<div class="quantity-add">
											<ul class="list-inline">
												<li class="list-inline-item">
													<div class="quantity">
					                                    <span class="mont">Số lượng:</span>
					                                    <div class="number-spinner">
					                                      <input type="text" class="pl-ns-value" value="10" maxlength="5">
					                                    </div>
					                                </div>
												</li>
												<li class="list-inline-item">
													<div class="add-cart"><a href="">Thêm vào giỏ hàng</a></div>
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
		  </div>
		</div>
	</section>

@stop

@section('scripts')
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.version-check-box').click(function() {
				var key = $(this).val();
				$.ajax({
					url : '{{ route('home.version.product') }}',
					method: 'get',
					data: {
						key: key,
					},
					success: function(data) {
						console.log(data);
					}
				})
			})
		});

	</script>
@endsection