@extends('layouts.main_layout')

@section('content')
<div class="content">
    <div class="content_accesPay">
        <h1 class="center_text_access title_accesPay">Đặt hàng thành công</h1>
        <p class="center_text_access mess_accessPay">Chúc mừng quý khách đã đặt hàng thành công đơn hàng 123456 !
        </p>
        <p class="center_text_access welecome_accessPay">Chào <strong>Nguyen Van A</strong>. Cảm ơn đã đặt hàng
            tại <span class="name_web">northsidecrew.vn</span></p>
        <p class="center_text_access check_crew"><span class="name_web ">NORTHSIDE CREW</span> xác nhận đơn hàng của
            bạn là 1258995</p>
        <p class="center_text_access detail_check_crew">
            Nhân viên chăm sóc khách hàng của Northside crew sẽ gọi xác nhận lại thông tin trong
            giờ hành chính và không quá 12h
        </p>
        <h1 class="center_text_access thank_acces">Cảm ơn bạn đã đồng hành cùng <span>NORTHSIDE CREW!</span></h1>
    </div>
</div>

@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/accespay.css')}}">
@endpush