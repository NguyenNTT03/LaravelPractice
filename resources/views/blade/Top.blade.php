@extends('layouts.main_layout')

@section('content')
<div class="content">
    <div class="content_top">
        <div class="contentProducts_navigate">
            <div class="navigate_shopAll">
                <p class="title_navigate"><span class="home_navigate">TRANG CHỦ</span>/ALL ITEMS</p>
            </div>
            <div class="filter_shopAlll">
                <p>Hiển thị 1-12 của 60 kết quả</p>
                <div class="btn_filter_shopAll">
                    <p>Thứ tự mặc định </p><i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
        <div class="product_top">
            <div class="products_home">
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_1.jpg')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">LOGOS T-SHIRT -BLACK</h4>
                    <p class="infProducts_home">320.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_2.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">LOGOS T-SHIRT -BLUE</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_3.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">LOGOS T-SHIRT -YELLOW</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_4.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">LOGOS T-SHIRT -WHITE</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
            </div>
            <div class="products_home">
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_5.jpg')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">LOGOS T-SHIRT -BROWN</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_6.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home"> T-SHIRT THE UNIVERSE</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_7.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home"> T-SHIRT POPPY BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_8.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home"> T-SHIRT POPPY WHITE</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
            </div>
            <div class="products_home">
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_9.jpg')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">T-SHIRT BALLOON BLACK </h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_10.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">T-SHIRT BALLOON WHITE </h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_11.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home"> T-SHIRT NORTH POINTER</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/T_shirt/product_12.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home"> T-SHIRT NORTHSIDE CREW</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('css')
<link rel="stylesheet" href="{{ asset('css/top.css')}}">
@endpush