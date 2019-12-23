@extends('layouts.app')

@section('content')
<div class="slideshow-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 menu-left">
                <div class="main-nav">
                    <ul>
                        @foreach ($categoriesBar as $category)
                            <li>
                                <a class="smooth" href="/collections/{{ $category['id'] }}" title="">
                                    <div class="t-icon">
                                        <img src="{{ asset('img/icon/'.$category['icon']) }}" alt="">
                                        <img src="{{ asset('img/icon/'.$category['icon']) }}" alt="">
                                    </div>
                                    <span>{{ $category['name'] }}</span>
                                </a>
                                <div class="submenu">
                                    <div class="row item">
                                        @if (!empty($category['chil']))
                                            @if (!empty($category['chil']))
                                                @foreach ($category['chil'] as $data)
                                                    <div class="col-lg-3">
                                                        <p class="groupdrop-title">{{ $data['name'] }}</p>
                                                        @if (!empty($data['value']))
                                                            <ul>
                                                                @foreach ($data['value'] as $categoryDetail)
                                                                    <li><a href="{{ route('product.index', ['id' => $categoryDetail->id]) }}" class="smooth" title="">{{ $categoryDetail->name }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endif
                                        <img class="groupdrop-banner-pos" src="/img/banner/{{ $category['banner'] }}" alt="">
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 slide-show">
                <div class="slider-cas">
                    <div class="item slick-slide">
                        <div class="img">
                            <a>
                                <img src="/img/macbook/macbookedit.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item slick-slide">
                        <div class="img">
                            <a>
                                <img src="/img/banner/banner-iphone-used.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item slick-slide">
                        <div class="img">
                            <a>
                                <img src="/img/banner/ipad2019.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item slick-slide">
                        <div class="img">
                            <a>
                                <img src="/img/banner/phukienchinhang.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item slick-slide">
                        <div class="img">
                            <a>
                                <img src="/img/banner/applewwatchbanner.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-4 hidden-xs">
            <div class="t-why-post"><a class="smooth t-icon" href="#" title=""> <i class="fa fa-paper-plane" aria-hidden="true"></i> </a>
                <h3 class="t-why-title"><a class="smooth" href="#" title="">Thanh toán linh hoạt</a></h3>
                <p>Hỗ trợ thanh toán trả góp 0% lãi xuất</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hidden-xs">
            <div class="t-why-post"><a class="smooth t-icon" href="#" title=""> <i class="fa fa-clock-o" aria-hidden="true"></i> </a>
                <h3 class="t-why-title"><a class="smooth" href="#" title="">Giao hàng nhanh</a></h3>
                <p>Giao hàng ngay 24/7 sau khi đặt hàng</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 hidden-xs">
            <div class="t-why-post"><a class="smooth t-icon" href="#" title=""> <i class="fa fa-check" aria-hidden="true"></i> </a>
                <h3 class="t-why-title"><a class="smooth" href="#" title="">100% chính hãng</a></h3>
                <p>Uy tín - chất lượng luôn là hàng đầu</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @foreach ($categories as $category)
        @if ($category['category'] !== null)
            <div class="h-head">
                <div class="table bot">
                    <div class="cell">
                        <h2 class="title">{{ $category['name'] }}</h2>
                    </div>
                    <div class="cell text-right">
                        <a class="smooth more" href="{{ route('product.index', ['id' => $category['id']]) }}" title="">Xem tất cả  >></a>
                    </div>
                </div>
            </div>
            <div class="row col-mar-0">
                <div class="col-lg-4 hidden-xs hidden-sm hidden-md">
                    <div class="img-banner hv-over wow fadeInUp">
                        <img src="/img/banner/{{ $category['img_home'] }}" alt="" title="" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="h-pro-box">
                        <div class="row col-mar-0">
                            @foreach ($category['category'] as $element)
                                @foreach ($element->categoryDetail as $products)
                                    @foreach ($products->products as $key => $product)
                                        <div class="col-lg-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="product v2">
                                                <a class="img hv-scale" href="{{ route('product.show', ['product' => $product->id]) }}" title="">
                                                    <img src="{{ asset('/img/products/'.$product->img) }}" alt="" title="" />
                                                </a>
                                                <div class="ct">
                                                    <h3 class="title"><a class="smooth" href="" title="">{{ $product->name }}</a></h3>
                                                    <div class="price">{{ number_format($product->price, '0', '', '.') }} ₫ </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
@endsection
