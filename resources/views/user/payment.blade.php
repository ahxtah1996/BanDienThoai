<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Thông tin khách hàng</title>
    <meta name="description" content="Shop của Bi">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/backend/css/plugins.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('themes/payment/style.css') }}">
    <link rel="icon" href="{{ asset('/img/logo/logo-bi.png') }}">

    <!-- End Facebook Pixel Code -->
</head>

<body cz-shortcut-listen="true">
    <div class="container">
        <!-- Giao hàng -->
        <div class="checkout clearfix">
            <div class="right">
                <table class="cko-table">
                    <tbody>
                        @foreach($carts as $row)
                            <tr>
                                <td width="20%">
                                    <div class="img">
                                        <img src="{{ asset('img/products/'.$row->img) }}" alt="">
                                        <span>{{ $row->qty }}</span>
                                    </div>
                                </td>
                                <td style="font-weight: 500;">
                                    <strong>{{ $row->name }}</strong> <br>
                                    <div style="margin-top: 10px; clear: both;"></div>
                                </td>
                                <td width="30%" class="text-right">{{ number_format($row->price * $row->qty, 0, '', '.') }} ₫</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr>
                <table class="tol-table">
                    <tbody>
                        <tr>
                            <td>Tạm tính</td>
                            <td class="text-right">
                                <span>{{ Cart::total(0, '', '.') }} ₫</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Tổng giá tiền thanh toán</td>
                            <td class="text-right">
                                <span class="payment-due-currency">VND</span>
                                <span class="payment-due-price">{{ Cart::total(0, '', '.') }} ₫</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="left">

                <div class="header hidden-sm hidden-xs">
                    <h1 class="logo">
                        <a href="/">
                            <img style="max-width: 100%" src="{{ asset('/img/logo/logo.png') }}" alt="">
                        </a>
                    </h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Trang chủ</a></li>
                        <li>
                            <a href="{{ route('cart.index') }}">Giỏ hàng</a>
                        </li>
                        <li>
                            <a href="{{ route('payment.index') }}">Thông tin khách hàng</a>
                        </li>
                    </ul>
                </div>

                <h2>Thông tin khách hàng</h2>

                <div>
                    <form action="{{ route('payment.store') }}" method="POST">
                        @csrf

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
                                        </select>
                                    </div>
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
                                <i class="fa fa-check"></i> Hoàn tất thanh toán </b>
                            </button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/vendor/plugins.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script src="{{ asset('assets/js/language/vi.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

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
