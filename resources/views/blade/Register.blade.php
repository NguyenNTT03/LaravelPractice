<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Register.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/LOGI NORTHSIDE CREW.png')}}">
    <title>NORTHSIDE CREW</title>
</head>

<body>
    @include('layouts.header')
    <div class="content">
        <div class="content_register">
            <div class="login_register register_content">
                <h1 class="title_regiter">ĐĂNG NHẬP</h1>
                <div class="contentResgirer_item">
                    <input type="email" name="" id="" class="input_login" placeholder="Email">
                    <input type="email" name="" id="" class="input_login" placeholder="Mật khẩu">
                </div>
                <button class="btn_login_register">Đăng nhập</button>
            </div>
            <div class="box_register register_content">
                <h1 class="title_regiter">ĐĂNG KÝ</h1>
                <div class="contentResgirer_item">
                    <div class="name_resgiter">
                        <input type="email" name="" id="" class="input_regiter_name" placeholder="Họ">
                        <input type="email" name="" id="" class="input_regiter_name" placeholder="Tên">
                    </div>
                    <input type="email" name="" id="" class="input_login" placeholder="Email">
                    <input type="email" name="" id="" class="input_login" placeholder="Mật khẩu">
                </div>
                <button class="btn_login_register">Đăng ký</button>
            </div>
        </div>
    </div>

</body>

</html>