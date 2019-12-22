@extends('layouts.app')

@section('content')
<div class="banner">
    <img src="{{ asset('/img/banner/applebannergray.png') }}" alt="" title="">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Sản Phẩm</a></li>
                <li style="text-transform: capitalize;"><a href="#">{{ $category }}</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="pcate-title"><span>{{ $category }}</span></h1>
            <div class="row xs-pad-5 row-ibl col-mar-0">
                <!-- start foreach -->
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product v2">
                            <a class="img hv-scale" href="{{ route('product.show', ['product' => $product->id]) }}" title="">
                                <img src="/img/products/{{ $product->img }}" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title"><a class="smooth" href="{{ route('product.show', ['product' => $product->id]) }}" title="">{{ $product->name }}</a></h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">{{ number_format($product->price, '0', '', '.') }}</div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                @endforeach
                <!-- End foreach -->
            <div class="pro-break"></div>
        </div>
        {!! $products->links() !!}
    </div>
</div>

@endsection('content')