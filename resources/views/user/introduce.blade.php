@extends('layouts.app')

@section('content')
<div class="banner">
    <img src="{{ asset('/img/banner/applebannergray.png') }}" alt="" title="">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single">
                    <h1 class="s-title">Giới thiệu</h1>
                    {{-- <time><i class="fa fa-calendar"></i>Thứ năm, 13/06/2019</time>
                    <div class="fv-content">
                        <p>Cửa hàng Duc Anh Store được thành lập từ năm 2013. <span>Đức Anh Store là cửa hàng chuyên mua bán, sửa chữa, cài đặt và cung cấp các thiết bị điện tử và linh kiện - phụ kiện các dòng iPhone/iPad trên thị trường. Với kinh nghiệm lâu năm, chúng tôi tự tin đem đến cho Quý Khách Hàng những dịch vụ tốt cũng như các sản phẩm tốt nhất.</span></p>
                        <p><span></span></p>
                    </div>
                    <div class="s-social">
                        <span class="text">Chia sẻ</span>
                        <div class="ctrl">
                            <ul class="cnv-social-icons list-inline">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://ducanhstore.com/pages/gioi-thieu" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text=https%3A%2F%2Fducanhstore.com%2Fpages%2Fgioi-thieu&amp;url=https://ducanhstore.com/pages/gioi-thieu" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/share?url=https://ducanhstore.com/pages/gioi-thieu" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;" class="instagram"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>

@endsection('content')
