@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="cart-table">
            <div class="products-cart">
                <table class="table table-bordered table-customize table-responsive">
                    <thead>
                        <tr>
                            <th>Thông tin sản phẩm</th>
                            <th></th>
                            <th>Giá sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Tổng giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (Cart::count() === 0)
                            <tr>
                                <td colspan="5" class="text-center no_result">Không có sản phẩm trong giỏ hàng</td>
                            </tr>
                        @else 
                            @foreach($carts as $row)
                                <tr>
                                    <td class="image">
                                        <div class="white-bg">
                                            <a class="media-link" href="{{ route('product.show', ['product' => $row->id]) }}"><img width="100px" src="{{ asset('img/products/'.$row->img) }}" alt=""></a>
                                        </div>
                                    </td>
                                    <td class="description">
                                        <h3 class="product-title no-margin">
                                            <a href="{{ route('product.show', ['product' => $row->id]) }}">{{ $row->name }}</a>
                                        </h3>
                                    </td>
                                    <td>
                                        <div class="price fontbold-2">
                                            <strong class="fsz-20 single-price" data-id="{{ $row->rowId }}" data-value="{{ $row->price }}">{{ number_format($row->price, '0', '', '.') }} ₫ </strong>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="prod-btns fontbold-2">
                                            <div class="quantity">
                                                <input class="form-control qty" min="1" data-id="{{ $row->rowId }}" type="number" value="{{ $row->qty }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <strong class="clr-txt fsz-20 fontbold-2 total_price" data-id="{{ $row->rowId }}" data-value="{{ $row->price * $row->qty }}">{{ number_format($row->price * $row->qty, '0', '', '.') }} ₫ </strong> <a href="javascript:void(0);" onclick="Cart.removeFromCart('{{ $row->rowId }}');" class="remove fa fa-close clr-txt"></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            @if (Cart::count() > 0)
                <div class="continue-shopping">
                    <strong class="fsz-20 fontbold-2">Tổng giá tiền thanh toán: <span class="clr-txt subtotal_all">{{ Cart::total(0, '', '.') }} ₫ </span>
                    </strong>
                </div>
            @endif
            <div class="shp-btn col-sm-12 text-center">
                <a href=".." class="theme-btn-2 btn"> <b> Tiếp tục mua hàng </b> </a>
                <a href="{{ route('payment.index') }}" class="theme-btn-3 btn payment-btn"> <b> Thanh toán </b> </a>
            </div>
        </div>
    </div>
</div>
@endsection
