<?php
	use App\Products;
	$products = Products::select()->where([
		'status' => 1,
		'hot' => 1,
		'cate_id' => 0
	])->orderBy('stt','desc')->take(8)->get();

	$services = Products::select()->where([
		'status' => 1,
		'hot' => 1,
		'cate_id' => 1
	])->orderBy('stt','desc')->take(8)->get();
?>
<nav class="nav">
	<ul class="megamenu-content">
		<li class="item">
			<a href="{!! url('/') !!}" title="Trang chủ" class="active">{{ __('Trang chủ') }}</a>
		</li>	
		<li class="item">
			<a href="{!! url('/gioi-thieu') !!}" title="Giới thiệu">{{ __('Giới thiệu') }}</a>
		</li>	
		<li class="item item-sub">
			<a href="{!! url('/san-pham') !!}" title="Sản phẩm">
				{{ __('Sản phẩm') }}
				<span>
					<i class="fal fa-plus icon"></i>
					<i class="fal fa-minus icon icon-minus"></i>
				</span>
			</a>
			<div class="sub-menu sub-menu-1">
				<div class="content container">
					<ul>
						@foreach($products as $item)
						<li>
							<a href="{{ route('getProductDetail', ['alias'=>$item->alias]) }}">
								<img src="{{ asset('upload/product/' . $item->photo) }}" alt="Banner">
								<label>{{@$item->name}}</label>
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</li>
		<li class="item item-sub">
			<a href="{!! url('/dich-vu') !!}" title="Dịch vụ">
				{{ __('Dịch vụ') }}
				<span>
					<i class="fal fa-plus icon"></i>
					<i class="fal fa-minus icon icon-minus"></i>
				</span>
			</a>
			<div class="sub-menu sub-menu-1">
				<div class="content container">
					<ul>
						@foreach($services as $item)
						<li>
							<a href="{{ route('getServiceDetail', ['alias'=>$item->alias]) }}">
								<img src="{{ asset('upload/product/'.$item->photo) }}" alt="Banner">
								<label>{{ @$item->name }}</label>
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</li>	
		<li class="item">
			<a href="{!! url('/lien-he') !!}" title="Liên hệ">{{ __('Liên hệ') }}</a>
		</li>			                         
	</ul>
</nav>