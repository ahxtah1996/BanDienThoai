@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix">
                    <div class="col-md-6">
                        <div class="pro-gallery">
                            <div class="pro-img">
                                <div class="item">
                                    <a class="img" title="" rel="gal">
                                        <img src="storage/iphone/11-pro/iphone1.png" alt="">
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
                                <p>
                                    ✅128GB:19.500</p>
                                <p>
                                    ✅256GB:22.000</p>
                                <p>
                                    🎁1 đổi 1 - 12 tháng - Không phát sinh chi phí nào khác</p>
                                <p>
                                    🎁Quà tặng: Sạc dự phòng, cường lực, ốp lưng</p>
                            </div>
                            <span class="detail-sku">Mã: LL/, ZP/A</span>
                            <div class="price">
                                <strong>
                                    <span class="main-price">{{ $product->price }} ₫</span>
                                </strong>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12" style="margin: 5px 0;padding:0">
                                <label style="float:left; margin-top: 5px; margin-right: 10px;font-weight: 700;">Số lượng:</label>
                                <input style="width: 150px; float: left; margin-left:10px;" class="form-control" type="number" name="quantity" min="1" data-id="104" value="1">
                                <div class="clearfix"></div>
                                <a href="javascript:void(0);" onclick="Cart.addToCart(104);" class="btn-muahang">Mua hàng</a>
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
                    <div class="fb-comments" data-href="https://ducanhstore.com/iphone-11-moi-100" data-width="100%" data-numposts="5"></div>
                </div>
                <div class="pro-related">
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-11-moi-100.html" title="">
                                <img src="storage/iphone/11-pro/iphone1.png" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-11-moi-100.html" title="">iPhone 11 mới 100%</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">18.900.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-11-pro-max-moi-100.html" title="">
                                <img src="storage/iphone/11-pro/69957979-2672636159414126-7845837542397050880-n.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-11-pro-max-moi-100.html" title="">iPhone 11 Pro Max mới 100%</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">28.900.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-11-pro-moi-100.html" title="">
                                <img src="storage/iphone/11-pro/69957979-2672636159414126-7845837542397050880-n.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-11-pro-moi-100.html" title="">iPhone 11 Pro mới 100%</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">27.000.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-x-256gb-new.html" title="">
                                <img src="storage/iphone/iphone-x-1080x1080.png" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-x-256gb-new.html" title="">iPhone X 256Gb New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">22.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-x-64gb-new.html" title="">
                                <img src="storage/iphone/iphone-x-1080x1080.png" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-x-64gb-new.html" title="">iPhone X 64Gb New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">19.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xs-max-64gb-new.html" title="">
                                <img src="storage/iphone/xsmax3mauvuong.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xs-max-64gb-new.html" title="">iPhone Xs Max 64GB New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">24.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xs-max-256gb-new.html" title="">
                                <img src="storage/iphone/xsmax3mauvuong.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xs-max-256gb-new.html" title="">iPhone Xs Max 256GB New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">27.000.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xs-max-512gb-new.html" title="">
                                <img src="storage/iphone/xsmax3mauvuong.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xs-max-512gb-new.html" title="">iPhone Xs Max 512GB New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">29.000.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xs-256g-new.html" title="">
                                <img src="storage/iphone/xsmax3mauvuong.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xs-256g-new.html" title="">iPhone Xs 256G New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">26.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xs-64g-new.html" title="">
                                <img src="storage/iphone/xsmax3mauvuong.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xs-64g-new.html" title="">iPhone Xs 64G New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">22.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xs-max-lock-new.html" title="">
                                <img src="storage/iphone/xsmax3mauvuong.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xs-max-lock-new.html" title="">iPhone Xs Max Lock New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">17.500.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xr-256gb-new.html" title="">
                                <img src="storage/iphone/iphone-xr-vuongg.png" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xr-256gb-new.html" title="">iPhone Xr 256GB New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">20.200.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xr-128gb-new.html" title="">
                                <img src="storage/iphone/iphone-xr-vuongg.png" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xr-128gb-new.html" title="">iPhone Xr 128GB New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">18.900.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="iphone-xr-64gb-new.html" title="">
                                <img src="storage/iphone/iphone-xr-vuongg.png" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="iphone-xr-64gb-new.html" title="">iPhone Xr 64GB New</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">16.700.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="product v2" style="margin-bottom: 0;">
                            <a class="img hv-scale" href="products%3Fid=67.html" title="">
                                <img src="storage/may-cu/daniel-korpai-1499630-unsplash.jpg" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h3 class="title">
                                    <a class="smooth" href="products%3Fid=67.html" title="">iPhone Cũ 99% - USED</a>
                                </h3>
                                <!-- <div class="old-price">7.000.000 vnđ </div> -->
                                <div class="price">5.990.000 ₫ </div>
                            </div>
                            <!-- <div class="sale">-15%</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
