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
                            <img src="{{ asset('img/Accessories/product_1.png')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">SHORT WRINKLED NYLON BLACK</h4>
                    <p class="infProducts_home">320.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_2.png')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">SHORT WRINKLED NYLON ORANGE</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_3.png')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT SIGNATURE BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_4.png')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT LAUREL WHITE</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
            </div>
            <div class="products_home">
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_5.png')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">PANT WRINKLED NYLON</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_6.png')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">SHORT STICKER TAN</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_7.png')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT FUTURE BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_8.png')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT LAUREL WHITE</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
            </div>
            <div class="products_home">
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_9.png')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">PANT FUTURE BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_10.png')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT SIGNATURE BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Accessories/product_11.png')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT WRINKLED NYLON</h4>
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