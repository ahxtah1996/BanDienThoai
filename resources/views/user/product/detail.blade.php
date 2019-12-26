@extends('layouts.app')

@section('content')
<div class="banner">
    <img src="{{ asset('/img/banner/applebannergray.png') }}" alt="" title="">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Sản Phẩm</a></li>
                <li style="text-transform: capitalize;"><a href="#">{{ $product->name }}</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix">
                    <div class="col-md-6">
                        <div class="pro-gallery">
                            <div class="pro-img">
                                <div class="item">
                                    <a class="img" title="" rel="gal">
                                        <img src="{{ asset('img/products/'.$product->img) }}" alt="">
                                    </a>
                                </div>
                                @foreach ($product->color as $color)
                                    <div class="item">
                                        <a class="img" title="" rel="gal">
                                            <img src="{{ asset('img/products/'.$color->image) }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @if (count($product->color) > 0)
                            <div class="pro-thumb">
                                <div class="slick-slide img">
                                    <img src="{{ asset('img/products/'.$product->img) }}" alt="">
                                </div>
                                @foreach ($product->color as $color)
                                    <div class="slick-slide img">
                                        <img src="{{ asset('img/products/'.$color->image) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="pro-detail">
                            <h1 class="title">{{ $product->name }}</h1>
                            <div class="des">
                                {!! $product->des !!}
                            </div>
                            @if ($product->sku)
                                <span class="detail-sku">Mã: {{ $product->sku }}</span>
                            @endif
                            <div class="price">
                                <strong>
                                    <span class="main-price">{{ number_format($product->price) }} ₫ </span>
                                </strong>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12" style="margin: 5px 0;padding:0">
                                <label style="float:left; margin-top: 5px; margin-right: 10px;font-weight: 700;">Số lượng:</label>
                                <input style="width: 150px; float: left; margin-left:10px;" class="form-control" type="number" name="quantity" min="1" data-id="{{ $product->id }}" value="1">
                                <div class="clearfix"></div>
                                <a href="javascript:void(0);" onclick="Cart.addToCart({{ $product->id }});" class="btn-muahang">Mua hàng</a>
                            </div>
                            <h1 class="title">Kho: <span class="count-storage">{{ $count }}</span></h1>
                            <div class="fs-dticolor fs-dticolor-img">
                                <ul>
                                    @foreach ($product->color as $color)
                                        <li>
                                            <span class="choose-color" data-id="{{ $color->id }}" title="{{ $color->color }}">
                                                <b>
                                                    <img class="lazy" src="{{ asset('img/products/'.$color->image) }}" style="display: inline-block;">
                                                </b>
                                                <i>{{ $color->color }}</i>
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <ul class="fs-tspris">
                                {{--  --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="pro-info-tab">
                    <li class="active">
                        <a class="smooth" href="index.html#thong-tin" data-toggle="tab" title="">Thông tin sản phẩm</a>
                    </li>
                </ul>
                <div class="tab-content pro-info-ct">
                    <div id="thong-tin" class="tab-pane fade in active">
                        <div class="fv-content s-content">
                            <p>
                                {!! $product->info !!}
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="comments">
                    <div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
                </div> --}}
                <div class="pro-related">
                    @foreach ($productLike as $row)
                        <div class="slick-slide">
                            <div class="product v2" style="margin-bottom: 0;">
                                <a class="img hv-scale" href="" title="">
                                    <img src="{{ asset('img/products/' . $row->img) }}" alt="" title="" />
                                </a>
                                <div class="ct">
                                    <h3 class="title">
                                        <a class="smooth" href="" title="">{{ $row->name }}</a>
                                    </h3>
                                    <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                    <div class="price">{{ number_format($row->price, 0, '', '.') }} ₫</div>
                                </div>
                                <!-- <div class="sale">-15%</div> -->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
