@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="clearfix">
                <div class="col-md-6">
                    <div class="pro-gallery">
                        <div class="pro-img">
                            <div class="slick-slide">
                                <a class="img fancybox" href="https://ducanhstore.com/img/may-cu/dhe-haivan-kg0kxsdkk0q-unsplash.jpg" data-fancybox="image">
                                    <img src="https://ducanhstore.com/storage/may-cu/dhe-haivan-kg0kxsdkk0q-unsplash.jpg" alt="" title="" />
                                </a>
                            </div>
                        </div>
                        <div class="pro-thumb">
                            <div class="slick-slide img">
                                <img src="https://ducanhstore.com/storage/may-cu/dhe-haivan-kg0kxsdkk0q-unsplash.jpg" alt="" title="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pro-detail">
                        <h1 class="title">{{ $category }}</h1>
                        <div class="des">
                            {!! $product->title !!}
                        </div>
                        <span class="detail-sku">Mã: iphone cu</span>
                        <div class="price">
                            <strong><span class="main-price">{{ number_format($product->price, 0, '', '.') }} ₫</span></strong>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-12" style="margin: 5px 0;padding:0">
                            <label style="float:left; margin-top: 5px; margin-right: 10px;font-weight: 700;">Số lượng:</label>
                            <input style="width: 150px; float: left; margin-left:10px;" class="form-control" type="number" name="quantity" min="1" data-id="67" value="1">
                            <div class="clearfix"></div>
                            <a href="javascript:void(0);" onclick="Cart.addToCart(67);" class="btn-muahang">Mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="pro-info-tab">
                <li class="active"><a class="smooth" href="#thong-tin" data-toggle="tab" title="">Thông tin sản phẩm</a></li>
            </ul>
            <div class="tab-content pro-info-ct">
                <div id="thong-tin" class="tab-pane fade in active">
                    <div class="fv-content s-content">
                        <h1 style="text-align: center;"><span style="color: #ff0000; font-size: 14pt;"><strong></strong></span></h1>
                        <h1 style="text-align: center;"><span style="color: #ff0000; font-size: 14pt;"><strong><img src="/img/may-cu/iphone-xs-max-256gb-gold-4.jpg" alt="" width="auto" height="auto" />Bảng báo giá iPhone Cũ - Đã Qua Sử Dụng. Còn đẹp 99% - Zin All - Đã test kỹ....</strong></span></h1>
                        <p style="text-align: justify;">Tất cả máy iPhone bên Tiệm mình bán ra đều được kiểm tra kỹ lưỡng chất lượng sản phẩm trước khi đến tay Khách Hàng. </p>
                        <p style="text-align: justify;"></p>
                        <p style="text-align: justify;">Máy đã qua sử dụng bên Tiệm mình cam kết zin nguyên bản, không qua sửa chữa. Đặc biệt, với chế độ bảo hành 1 đổi 1 - Tiệm mình cam kết mang đến cho Khách Hàng dịch vụ tốt và chu đáo.</p>
                        <p style="text-align: justify;"></p>
                        <p style="text-align: justify;">Sau đây là Báo Báo Giá 1 số dòng iPhone mà Tiệm mình đang Kinh Doanh, 1 số sản phẩm nếu không có trong list dưới đây. Các bạn có thể liên hệ trực tiếp để bên mình báo giá cụ thể cho các bạn.</p>
                        <p></p>
                        <table height="2696" border="1pt" style="border-color: #000000; height: auto; width: 784px; background-color: #ffde59;">
                            <tbody>
                                <tr>
                                    <td style="text-align: center; width: 286.53125px;"><span style="color: #ff0000;"><strong>TÊN SẢN PHẨM</strong></span></td>
                                    <td style="text-align: center; width: 179.46875px;"><span style="color: #ff0000;"><strong>XUẤT XỨ</strong></span></td>
                                    <td style="text-align: center; width: 130px;"><span style="color: #ff0000;"><strong>ĐƠN GIÁ</strong></span></td>
                                    <td style="text-align: center; width: 160px;"><span style="color: #ff0000;"><strong>TÌNH TRẠNG</strong></span></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; width: 286.53125px;">iPhone Xs 64gb Gray</td>
                                    <td style="text-align: center; width: 179.46875px;">LL,ZP,B,X...</td>
                                    <td style="text-align: center; width: 130px;">17,500,000</td>
                                    <td style="text-align: center; width: 160px;">đẹp 99%</td>
                                </tr>
                            </tbody>
                        </table>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="comments">
                <div class="fb-comments" data-href="https://ducanhstore.com/iphonecu" data-width="100%" data-numposts="5"></div>
            </div>
            <div class="pro-related">
                <div class="slick-slide">
                    <div class="product v2" style="margin-bottom: 0;">
                        <a class="img hv-scale" href="https://ducanhstore.com/iphone-11-moi-100" title="">
                            <img src="/img/iphone/11-pro/iphone1.png" alt="" title="" />
                        </a>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="https://ducanhstore.com/iphone-11-moi-100" title="">iPhone 11 mới 100%</a></h3>
                            <!-- <div class="old-price">7.000.000 vnđ </div> -->
                            <div class="price">18.900.000 ₫ </div>
                        </div>
                        <!-- <div class="sale">-15%</div> -->
                    </div>
                </div>
                <div class="slick-slide">
                    <div class="product v2" style="margin-bottom: 0;">
                        <a class="img hv-scale" href="https://ducanhstore.com/iphone-11-pro-max-moi-100" title="">
                            <img src="/img/iphone/11-pro/69957979-2672636159414126-7845837542397050880-n.jpg" alt="" title="" />
                        </a>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="https://ducanhstore.com/iphone-11-pro-max-moi-100" title="">iPhone 11 Pro Max mới 100%</a></h3>
                            <!-- <div class="old-price">7.000.000 vnđ </div> -->
                            <div class="price">28.900.000 ₫ </div>
                        </div>
                        <!-- <div class="sale">-15%</div> -->
                    </div>
                </div>
                <div class="slick-slide">
                    <div class="product v2" style="margin-bottom: 0;">
                        <a class="img hv-scale" href="https://ducanhstore.com/iphone-11-pro-moi-100" title="">
                            <img src="/img/iphone/11-pro/69957979-2672636159414126-7845837542397050880-n.jpg" alt="" title="" />
                        </a>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="https://ducanhstore.com/iphone-11-pro-moi-100" title="">iPhone 11 Pro mới 100%</a></h3>
                            <!-- <div class="old-price">7.000.000 vnđ </div> -->
                            <div class="price">27.000.000 ₫ </div>
                        </div>
                        <!-- <div class="sale">-15%</div> -->
                    </div>
                </div>
                <div class="slick-slide">
                    <div class="product v2" style="margin-bottom: 0;">
                        <a class="img hv-scale" href="https://ducanhstore.com/iphone-x-256gb-new" title="">
                            <img src="/img/iphone/iphone-x-1080x1080.png" alt="" title="" />
                        </a>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="https://ducanhstore.com/iphone-x-256gb-new" title="">iPhone X 256Gb New</a></h3>
                            <!-- <div class="old-price">7.000.000 vnđ </div> -->
                            <div class="price">22.500.000 ₫ </div>
                        </div>
                        <!-- <div class="sale">-15%</div> -->
                    </div>
                </div>
                <div class="slick-slide">
                    <div class="product v2" style="margin-bottom: 0;">
                        <a class="img hv-scale" href="https://ducanhstore.com/iphone-x-64gb-new" title="">
                            <img src="/img/iphone/iphone-x-1080x1080.png" alt="" title="" />
                        </a>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="https://ducanhstore.com/iphone-x-64gb-new" title="">iPhone X 64Gb New</a></h3>
                            <!-- <div class="old-price">7.000.000 vnđ </div> -->
                            <div class="price">19.500.000 ₫ </div>
                        </div>
                        <!-- <div class="sale">-15%</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
