@extends('layouts.app')

@section('content')
<div class="banner">
    <img src="{{ asset('/img/banner/applebannergray.png') }}" alt="" title="">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-8">

                <!-- block  contact-->
                <div class="block-contact-us">
                    <form action="contact.html" method="post" class="form-validate">
                        <div class="block-content row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" placeholder="Họ tên *" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="E-Mail *" name="email" class="form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Số điện thoại *" name="phone" class="form-control" id="phone" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Tiêu đề" name="subject" id="subject" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <textarea placeholder="Nội dung *" name="message" rows="5" class="form-control" id="message" required></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LeudKYUAAAAAFRQ4IwfGlfDPBoxNgjqFok6p6m_"></div>
                                <div class="text-left">
                                    <button class="btn btn-inline" type="submit">Gửi cho chúng tôi</button>
                                </div>
                            </div>
                        </div><!-- block  contact-->
                    </form>
                </div>
            </div>

            <div class="col-md-4">

                <!-- block  contact-->
                <div class="block-address">
                    <div><i class="fa fa-map-marker"></i> <span style="font-size: 14pt;">7 Cửu Long, Phường 15, Quận 10, Tp. Hồ Chí Minh</span></div>
                    <div><span style="font-size: 14pt;"><i class="fa fa-phone"></i> Hotline: <span class="number">0833.234567</span></span></div>
                    <div><span style="font-size: 14pt;"><i class="fa fa-envelope"></i> ducanhretail@gmail.com</span></div>
                </div><!-- block  contact-->
            </div>
        </div>
    </div>

@endsection('content')