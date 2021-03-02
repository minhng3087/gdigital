@foreach (Cart::content() as $item)
    <div class="item">
        <div class="avarta">
            <a title="{{ $item->name }}" href="{{ route('home.single.product', $item->options->slug) }}">
                <img src="{{ $item->options->image }}" class="img-fluid" alt="{{ $item->name }}">
            </a>
        </div>
        <div class="info">
            <h3>
                <a title="{{ $item->name }}" href="{{ route('home.single.product', $item->options->slug) }}" class="text-left">
                    {{ $item->name }}
                </a>
            </h3>
            <div class="quantt">{{ $item->qty }} x {{ number_format($item->price, 0, '.', '.') }}đ</div>
        </div>
        <div class="btn-remove"><a class="remove-cart" data-id="{{ $item->id }}"><i class="fa fa-times"></i></a></div>
   </div>
@endforeach
<div class="total-cart">
    <span>TỔNG GIÁ</span>
    <div class="price">{{ Cart::total() }}đ</div>
</div>
<div class="view-cart text-center pt-20"><a href="{{ route('home.cart') }}">XEM GIỎ HÀNG</a></div>