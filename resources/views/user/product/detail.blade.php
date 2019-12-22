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
                                        <img src="{{ asset('img/iphone/11-pro/iphone1.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pro-detail">
                            <h1 class="title">{{ $product->name }}</h1>
                            <div class="des">
                                <p>✅64GB: 18.900</p>
                                <p>✅128GB:19.500</p>
                                <p>✅256GB:22.000</p>
                                <p>🎁1 đổi 1 - 12 tháng - Không phát sinh chi phí nào khác</p>
                                <p>🎁Quà tặng: Sạc dự phòng, cường lực, ốp lưng</p>
                            </div>
                            <span class="detail-sku">Mã: LL/, ZP/A</span>
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
                                {{ $product->detail }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="comments">
                    <div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
                </div>
                <div class="pro-related">
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="" title="">
                                <img src="{{ asset('img/iphone/11-pro/iphone1.png') }}" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="" title="">iPhone 11 mới 100%</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">18.900.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="" title="">
                                <img src="{{ asset('img/iphone/11-pro/69957979-2672636159414126-7845837542397050880-n.jpg') }}" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="" title="">iPhone 11 Pro Max mới 100%</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">28.900.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="" title="">
                                <img src="{{ asset('img/iphone/11-pro/699579') }}79-2672636159414126-7845837542397050880-n.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="" title="">iPhone 11 Pro mới 100%</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">27.000.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="" title="">
                                <img src="{{ asset('img/iphone/iphone-x-1080x1080.png') }}" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="" title="">iPhone X 256Gb New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">22.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="" title="">
                                <img src="{{ asset('img/iphone/iphone-x-1080x1080.png') }}" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="" title="">iPhone X 64Gb New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">19.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="" title="">
                                <img src="{{ asset('img/iphone/xsmax3mauvuong.jpg') }}" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="" title="">iPhone Xs Max 64GB New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">24.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="" title="">
                                <img src="{{ asset('img/iphone/xsmax3mauvuong.jpg') }}" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="" title="">iPhone Xs Max 256GB New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">27.000.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
