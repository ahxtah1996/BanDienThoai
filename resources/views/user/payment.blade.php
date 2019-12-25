<!DOCTYPE html>
<!-- saved from url=(0049)https://ducanhstore.com/cart/checkout/information -->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Thông tin khách hàng</title>
    <meta name="description" content="Shop của Bi">

    <link rel="stylesheet" href="{{ asset('themes/payment/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/payment/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/payment/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/payment/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/payment/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/payment/style.css') }}">
    <link rel="icon" href="https://ducanhstore.com/storage/logo/logo-duc-anh.png">

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '466501683916970');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=466501683916970&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Your customer chat code -->
    <style type="text/css">
        .jqstooltip {
            width: auto !important;
            height: auto !important;
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: #000000;
            color: white;
            font-size: 11px;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body cz-shortcut-listen="true">
    <div class="fb-customerchat" attribution="setup_tool" page_id="1138394829527912" logged_in_greeting="Hi !, Tiệm mình đang SALE Airpods 2 chỉ 3550k!" logged_out_greeting="Hi !, Tiệm mình đang SALE Airpods 2 chỉ 3550k!">
    </div>


    <div class="container">
        <!-- Giao hàng -->
        <div class="checkout clearfix">
            <div class="right">
                <table class="cko-table">
                    <tbody>
                        <tr>
                            <td width="20%">
                                <div class="img">
                                    <img src="./Thông tin khách hàng - Đức Anh Store_files/iphone1.png" alt="">
                                    <span>1</span>
                                </div>
                            </td>
                            <td style="font-weight: 500;">
                                <strong>iPhone 11 mới 100%</strong> <br>
                                <div style="margin-top: 10px; clear: both;"></div>

                            </td>

                            <td width="30%" class="text-right">18.900.000 ₫</td>
                        </tr>
                    </tbody>
                </table>



                <hr>
                <table class="tol-table">
                    <tbody>
                        <tr>
                            <td>Tạm tính</td>
                            <td class="text-right">
                                <span>18.900.000 ₫</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Tổng giá tiền thanh toán</td>
                            <td class="text-right">
                                <!-- <span class="payment-due-currency">VND</span> -->
                                <span class="payment-due-price">18.900.000 ₫</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="left">

                <div class="header hidden-sm hidden-xs">
                    <h1 class="logo">
                        <a href="https://ducanhstore.com/">
                            <img style="max-width: 100%" src="./Thông tin khách hàng - Đức Anh Store_files/logo2_2.jpg" alt="">
                        </a>
                    </h1>
                    <ul class="breadcrumb">
                        <li><a href="https://ducanhstore.com/">Trang chủ</a></li>
                        <li>
                            <a href="https://ducanhstore.com/cart/checkout/products">Giỏ hàng</a>
                        </li>
                        <li>
                            <a href="https://ducanhstore.com/cart/checkout/information">Thông tin khách hàng</a>
                        </li>
                    </ul>
                </div>

                <h2>
                    Thông tin khách hàng
                </h2>


                <div>
                    <form action="https://ducanhstore.com/cart/checkout/information" method="POST">
                        <input type="hidden" name="_token" value="dzwq6Qm25g2wXyKDUQ53VRKfniwlRHjfCAxADfYN">

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="last_name" class="control-label sr-only">Họ</label>
                                <input class="form-control" required="" placeholder="Họ" name="last_name" type="text" id="last_name">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="first_name" class="control-label sr-only">Tên</label>

                                <input class="form-control" required="" placeholder="Tên" name="first_name" type="text" id="first_name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="email" class="control-label sr-only">Email</label>

                                <input class="form-control" required="" data-rule-email="" placeholder="Email" name="email" type="text" id="email">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone" class="control-label sr-only">Số điện thoại</label>
                                <input class="form-control" required="" placeholder="Số điện thoại" name="phone" type="text" id="phone">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="address" class="control-label sr-only">Địa chỉ</label>
                                <input class="form-control" required="" placeholder="Địa chỉ" name="address" type="text" id="address">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="form_group" data-target="province" data-name="province" data-district="#payment_district" data-value="">
                                    	<select class="form-control" name="province">
                                    		@foreach ($maps as $key => $value)
                                            	<option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group district-select" id="payment_district" data-value="">
                                    	<select class="form-control" name="district">
                                            <option value="Huyện Ba Vì">Huyện Ba Vì</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>

                        <h2>Phương thức thanh toán</h2>

                        <div class="select-item clearfix choose">
                            <input type="radio" name="payment_id" value="1" checked="">
                            <span class="circle">Thanh toán tại nhà</span>
                            <div class="information" style="display: block;">
                                <p>Thanh toán tại nhà</p>
                                <p>Dịch vụ Ship hàng tận nhà phạm vi nội thành TP.Hà Nội.</p>
                            </div>
                        </div>

                        <div class="form-group text-right btn-checkout-block">
                            <button type="submit" class="btn-success btn btn-checkout"> <b>
                                    <i class="fa fa-check"></i> Hoàn tất thanh toán </b> </button>
                        </div>
                    </form>
                </div>


                <div class="back">
                    <a href="{{ route('cart.index') }}">
                        <i class="fa fa-arrow-circle-o-left"></i> Quay lại giỏ hàng
                    </a>
                </div>
            </div>

        </div>
        <!-- End -->

    </div>

    <script src="{{ asset('assets/js/const.js') }}"></script>
    <script src="{{ asset('themes/payment/jquery.min.js') }}"></script>
    <script src="{{ asset('themes/payment/bootstrap.min.js') }}"></script>
    <script src="{{ asset('themes/payment/plugins.js') }}"></script>
    <script src="{{ asset('themes/payment/toastr.min.js') }}"></script>
    <script src="{{ asset('themes/payment/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('themes/payment/jquery.form.min.js') }}"></script>
    <script src="{{ asset('themes/payment/vi.js') }}"></script>
    <script src="{{ asset('themes/payment/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.information').first().slideDown('fast');

            $('.choose').click(function() {
                $('.information').slideUp('fast');
                $(this).find('.information').slideDown('fast');
                $(this).find('input[type=radio]').prop('checked', true);
            });
        });
    </script>

</body>

</html>
