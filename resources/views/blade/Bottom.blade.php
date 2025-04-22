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
                            <img src="{{ asset('img/Bottom/product_1.jpg')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">SHORT WRINKLED NYLON BLACK</h4>
                    <p class="infProducts_home">320.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_2.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">SHORT WRINKLED NYLON ORANGE</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_3.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT SIGNATURE BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_4.jpg')}}" alt="" class="image_products_home">
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
                            <img src="{{ asset('img/Bottom/product_5.jpg')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">PANT WRINKLED NYLON</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_6.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">SHORT STICKER TAN</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_7.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT FUTURE BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_9.jpg')}}" alt="" class="image_products_home">
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
                            <img src="{{ asset('img/Bottom/product_10.jpg')}}" alt="" class="image_products_home">
                        </a>

                    </div>
                    <h4 class="infProducts_home">PANT FUTURE BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_11.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT SIGNATURE BLACK</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_12.jpg')}}" alt="" class="image_products_home">
                        </a>
                    </div>
                    <h4 class="infProducts_home">PANT WRINKLED NYLON</h4>
                    <p class="infProducts_home">500.000VND</p>
                </div>
                <div class="item_products_home">
                    <div class="image_home_item">
                        <a href="{{ route('detail-product')}}">
                            <img src="{{ asset('img/Bottom/product_8.jpg')}}" alt="" class="image_products_home">
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