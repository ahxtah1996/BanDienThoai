@extends('layouts.app')

@section('content')
<div class="banner">
    <img src="{{ asset('/img/banner/applebannergray.png') }}" alt="" title="">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Kết quả tìm kiếm</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="pcate-title"><span>Kết quả tìm kiếm</span></h1>
            @if (count($products) == 0)
                <div class="col-md-12">
                    Không tìm thấy kết quả.
                </div>
            @else
                <div class="row xs-pad-5 row-ibl col-mar-0">
                    @foreach ($products as $row)
                        <div class="col-lg-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="product v2">
                                <a class="img hv-scale" href="{{ route('product.show', ['product' => $row->id]) }}" title="">
                                    <img src="{{ asset('/img/products/'.$row->img) }}" alt="" title="">
                                </a>
                                <div class="ct">
                                    <h3 class="title"><a class="smooth" href="" title="">{{ $row->name }}</a></h3>
                                    <div class="price">{{ number_format($row->price) }} ₫ </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="pro-break"></div>
        </div>
    </div>
</div>
@endsection