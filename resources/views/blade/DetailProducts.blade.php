@extends('layouts.main_layout')

@section('content')
<div class="content">
    <div class="content_detailProduct">
        <div class="img_product">
            <img src="{{ asset('img/Detail_product/img_product.png')}}" alt="" class="image_shirt">
            <div class="image_detail_product">
                <img src="{{ asset('img/Detail_product/detail_product1.png')}}" alt="" class="image_shirt_detail">
                <img src="{{ asset('img/Detail_product/detail_product2.png')}}" alt="" class="image_shirt_detail">
                <img src="{{ asset('img/Detail_product/detail_product3.png')}}" alt="" class="image_shirt_detail">
            </div>
        </div>
        <div class="inf_product">
            <h2 class="title_inf_products">T-SHIRT THE UNIVERSE</h2>
            <p class="price_inf_products">280,000 VNĐ</p>
            <p class="status_inf_products">Tình trạng: <span class="status_color_inf"> còn hàng</span></p>
            <p class="color_inf_products">Màu sắc:</p>
            <div class="item_box_color">

            </div>
            <p class="size_inf_products">Size:</p>
            <div class="box_option_size">
                <div class="item_box_optionSize">
                    <p class="size_item_box">S</p>
                </div>
                <div class="item_box_optionSize">
                    <p class="size_item_box">M</p>
                </div>
                <div class="item_box_optionSize">
                    <p class="size_item_box">L</p>
                </div>
                <div class="item_box_optionSize">
                    <p class="size_item_box">XL</p>
                </div>
            </div>
            <p class="quantity_inf_products">Số lượng</p>
            <div class="quantity_box">
                <div class="detail_quatity">
                    <div class="number_quantity">
                        1
                    </div>
                    <ul class="quantity ">
                        <li class="totalProducts">+</li>
                        <li class="totalProducts">-</li>
                    </ul>
                </div>
                <a href="{{ route('cart')}}" class="btn_quantity_box">
                    Thêm vào giỏ hàng
                </a>
            </div>

            <div class="inf_detailProducts">
                <p class="title_detai_products">Chi tiết sản phẩm</p>
                <ul class="box_detail_products_inf">
                    <li>- 100% Premium Cotton</li>
                    <li>
                        - Kỹ thuật in: Screen Printing + Puff Printing (In Nổi)
                    </li>
                    <li>
                        - Hình in được in với mực đạt chuẩn Eco Friendly và
                        an toàn cho người mặc.
                    </li>
                    <li>
                        - Vải được nhuộm với thuốc nhuộm thân thiện với
                        môi trường, giảm đến 70% lượng nước thải và an
                        toàn cho người mặc.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sản phẩm liên quan -->
    <div class="Related_products">
        <h2 class="title_related_products">SẢN PHẨM LIÊN QUAN</h2>
        <div class="product_related">
            <div class="item_product_related">
                <img src="{{ asset('img/Detail_product/product1.png')}}" alt="" class="image_products_related">
                <div class="boxname_product_related">
                    <p class="name_product_reletd"> LOGOS T-SHIRT -WHITE</p>
                </div>
                <p class="name_product_reletd"><strong>275.000VND</strong></p>
            </div>
            <div class="item_product_related">
                <img src="{{ asset('img/Detail_product/product2.png')}}" alt="" class="image_products_related">
                <div class="boxname_product_related">
                    <p class="name_product_reletd"> LOGOS T-SHIRT -WHITE</p>
                </div>
                <p class="name_product_reletd"><strong>275.000VND</strong></p>
            </div>
            <div class="item_product_related">
                <img src="{{ asset('img/Detail_product/product3.png')}}" alt="" class="image_products_related">
                <div class="boxname_product_related">
                    <p class="name_product_reletd"> LOGOS T-SHIRT -WHITE</p>
                </div>
                <p class="name_product_reletd"><strong>275.000VND</strong></p>
            </div>
            <div class="item_product_related">
                <img src="{{ asset('img/Detail_product/product4.png')}}" alt="" class="image_products_related">
                <div class="boxname_product_related">
                    <p class="name_product_reletd"> LOGOS T-SHIRT -WHITE</p>
                </div>
                <p class="name_product_reletd"><strong>275.000VND</strong></p>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/detailProduct.css')}}">
@endpush