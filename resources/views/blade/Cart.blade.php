@extends('layouts.main_layout')

@section('content')
<div class="content">
    <div class="content_Cart">
        <ul class="item_content_cart">
            <li>
                <p class="lable_products_cart">Sản phẩm</p>
                <div class="products_cart">
                    <img src="{{ asset('img/Cart/tee-electric-white_1.jpg')}}" alt="" class="image_products_cart">
                    <p class="name_products_cart">T-Shirt The Universe - M</p>
                </div>
            </li>
            <li>
                <p class="lable_products_cart">Giá</p>
                <div class="products_cart">
                    <p class="price_cart">320.000VND</p>
                </div>
            </li>
            <img src="" alt="">
            <li>
                <p class="lable_products_cart">Số lượng</p>

                <div class="products_cart">
                    <ul class="quantity_cart">
                        <li class="quantity_detail_Cart">-</li>
                        <li class="quantity_detail_Cart">1</li>
                        <li class="quantity_detail_Cart">+</li>
                    </ul>
                </div>

            </li>
            <li>
                <p class="lable_products_cart">Tạm tính</p>
                <div class="products_cart">
                    <p class="price_cart">320,000VND</p>
                </div>
            </li>
            <li>
                <p class="lable_products_cart">Tổng giỏ hàng</p>
                <div class="products_cart_total">
                    <div class="item_total_cart">
                        <p class="title_total_cart">Tạm tính</p>
                        <p class="title_total_cart">320.000VND</p>
                    </div>
                    <div class="item_total_cart">
                        <p class="title_total_cart">Giao hàng</p>
                        <p class="title_total_cart">32.000VND</p>
                    </div>
                    <div class="item_total_cart">
                        <p class="title_total_cart">Tổng cộng</p>
                        <p class="title_total_cart">350.000VND</p>
                    </div>
                    <button class="btn_itemPay">
                        <a href="{{ route('payCart')}}" class="text_btn_itemPay"> Tiến hành thanh toán</a>
                    </button>

                </div>
            </li>
        </ul>
        <button class="btn_continue">

            <a href="{{ route('index')}}" class="text_btn_continue">Tiếp tục xem sản phẩm</a>
        </button>
    </div>
</div>

@endsection


@push('css')
<link rel="stylesheet" href="{{ asset('css/cart.css')}}">
@endpush