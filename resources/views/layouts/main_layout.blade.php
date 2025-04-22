<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NORTHSIDE CREW')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('img/LOGI NORTHSIDE CREW.png') }}">
    @stack('css')

</head>

<body>
    @include('layouts.header', ['activePage' => $activePage ?? ''])

    <div class="content">
        @yield('content')
    </div>
    @include('layouts.footer')

</body>

</html>