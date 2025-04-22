<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NORTHSIDE CREW</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="shortcut icon" href="./LOGI NORTHSIDE CREW.png')}}">

</head>

<body>
    @include('layouts.header')
    <div class="content">
        <div class="slider">
            <img src="{{ asset('img/Home/baner_web.jpg')}}" alt="" class="image_slider">
        </div>
        <div class="review_home">
            <div class="item_review item_review1">
                <p class="text_itemReview">TOP</p>
            </div>
            <div class="item_review item_review2">
                <p class="text_itemReview">BOTTOM</p>
            </div>
            <div class="item_review item_review3">
                <p class="text_itemReview">ACCESSORIES</p>
            </div>
        </div>
        <h1 class="title_home_product">NEW ARRIVAL</h1>
        <div class="products_home">
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_1.jpg')}}" alt="" class="image_products_home">
                    </a>

                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_2.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_3.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_4.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
        </div>
        <div class="products_home">
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_5.jpg')}}" alt="" class="image_products_home">
                    </a>

                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_6.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_7.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_8.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
        </div>
        <div class="products_home">
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_9.jpg')}}" alt="" class="image_products_home">
                    </a>

                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_10.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_11.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
            <div class="item_products_home">
                <div class="image_home_item">
                    <a href="{{ route('detail-product')}}">
                        <img src="{{ asset('img/products/products_12.jpg')}}" alt="" class="image_products_home">
                    </a>
                </div>
                <h4 class="infProducts_home">SWEATER MULTI COLOR LOGO</h4>
                <p class="infProducts_home">500.000VND</p>
            </div>
        </div>
        <h1 class="title_home_poster">Poster</h1>
        <div class="slick-carousel">
            <img src="{{ asset('img/poster/ảnh 1.jpg')}}" alt="Image 1" class="image_poster">
            <img src="{{ asset('img/poster/ảnh 2.jpg')}}" alt="Image 2" class="image_poster">
            <img src="{{ asset('img/poster/ảnh 3.jpg')}}" alt="Image 3" class="image_poster">
            <img src="{{ asset('img/poster/ảnh4.jpg')}}" alt="Image 3" class="image_poster">
            <img src="{{ asset('img/poster/ảnh 5.jpg')}}" alt="Image 3" class="image_poster">
            <img src="{{ asset('img/poster/ảnh 6.jpg')}}" alt="Image 3" class="image_poster">
            <img src="{{ asset('img/poster/ảnh 7.jpg')}}" alt="Image 3" class="image_poster">
            <img src="{{ asset('img/poster/ảnh 8.jpg')}}" alt="Image 3" class="image_poster">

        </div>

    </div>
    @include('layouts.footer')
    <script>
    $(document).ready(function() {
        $('.slick-carousel').slick({
            slidesToShow: 5,
            slidesToScroll: 4,
            autoplay: true,
            autoplaySpeed: 900,


        });
    });
    </script>
</body>

</html>