<header>
    <div class="heder-top">
        <div class="container">
            <div class="content" style="position: relative;">
                <div class="row">
                    <div class="col-md-7 col-sm-8">
                        <div class="left">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="javascript:0"><i class="fa fa-phone"></i><span>Hỗ trợ 24/7: {{ @$site_info->hotline}}</span></a></li>
                                <li class="list-inline-item"><a href="javascript:0"><i class="fa fa-envelope"></i><span>Email: {{ @$site_info->email_admin }}</span></a></li>
                            </ul>
                        </div> 
                    </div>
                    <div class="col-md-5 col-sm-4">
                        <div class="social">
                            <ul class="list-inline text-right">
                                @if (!empty(@$site_info->social))
                                    @foreach (@$site_info->social as $id => $val)
                                        <li class="list-inline-item"><a title="{{ @$val->name }}" href="{{ @$val->link }}" target="_blank"><i class="{{ @$val->icon }}"></i></a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-logo">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo"><a title="{{ @$site_info->site_title }}" href="{{ url('/') }}"><img src="{{ @$site_info->logo }}" class="img-fluid" alt="{{ @$site_info->site_title }}"></a></div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('home.search') }}" method="GET">
                            <div class="search">
                                <select name="m" id="query-cate">
                                    <option value="0">Danh mục</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->slug }}" {{  !empty($_GET['m']) &&  $item->slug == $_GET['m'] ? 'selected' : ''}}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <input type="text" placeholder="Nhập từ khóa" name="q" id="query-search">
                                <button type="submit" id="icon-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                        <div class="list-search" style="display: none;">
                                
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cart text-right"><a href=""><img src="{{__BASE_URL__}}/images/cart.png" class="img-fluid" alt=""><span>0 SẢN PHẨM</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="all-cate">
                            <div class="title-all"><a href="javascript:0"><i class="fa fa-list-ul"></i><span>TẤT CẢ DANH MỤC</span></a></div>
                            <div class="submenu">
                                <ul>
                                    @foreach ($menuCategory as $item)
                                    <li><a href="{{ url($item->url) }}"><span><img src="{{ @$item->icon }}" class="img-fluid" alt=""></span>{{ @$item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="right text-uppercase">
                            <ul>
                                @foreach($menuMain as $item)
                                <li><a href="{{ url($item->url) }}">{{ @$item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu-mobile -->
    <div class="menu-mobile" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-5">
                    <div class="logo"><a href=""><img src="{{__BASE_URL__}}/images/logo.png" class="img-fluid" alt=""></a></div>
                </div>
                <div class="col-md-7 col-sm-7 col-7">
                    <div class="right">
                        <ul>
                            <li><a href=""><img src="{{__BASE_URL__}}/images/cart.png" class="img-fluid" alt=""></a></li>
                            <li>
                                <div class="header">
                                    <a title="" href="#menu"><i class="fa fa-bars"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav id="menu">
            <ul>
                @foreach($menuMainMobile as $item)
                <li><a href="{{ url($item->url) }}">{{ @$item->title }}</a></li>
                @endforeach;
            </ul>
        </nav>
    </div>
    <!-- end menu-mobile -->
</header>