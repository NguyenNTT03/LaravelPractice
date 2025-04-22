<header>
    <div class="logo_header">
        <a href="{{ route('index')}}" class="logo_Northside">NORTHSIDE CREW</a>
    </div>
    <ul class="navigate_header">
        <li>
            <a href="{{ route('index')}}" class="title_header {{ Request::is('/index') ? 'active' : '' }}">HOME</a>
        </li>
        <li>
            <a href="{{ route('top')}}" class="title_header {{ Request::is('/top') ? 'active' : '' }}">TOP</a>
        </li>
        <li>
            <a href="{{ route('bottom')}}" class="title_header {{ Request::is('/bototm') ? 'active' : '' }}">BOTTOM</a>
        </li>
        <li>
            <a href="{{ route('accessories')}}"
                class="title_header {{ Request::is('/accessories') ? 'active' : '' }}">ACCESSORIES</a>
        </li>
        <li>
            <a href="{{ route('sale')}}" class="title_header {{ Request::is('/sale') ? 'active' : '' }}">SALE</a>
        </li>
    </ul>

    <ul class="tools_header">
        <li><a href="{{ route('register-1')}}"><i class="fa-solid fa-user icon_while"></i></a></li>
        <li><a href="{{ route('cart')}}"><i class="fa-solid fa-briefcase icon_while"></i></a></li>
        <li><i class="fa-solid fa-magnifying-glass icon_while"></i></li>
    </ul>
</header>