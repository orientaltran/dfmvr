<header class="header {{ Request::is('/') === route('index') ? 'dfm-banner' : 'menu-hr' }}">
    <nav id='cssmenu' class="container nav-fill w-100 menu">
        <div class="logo">
             <a href="{{ route('index') }}">
                <img class="" src="{{asset('frontend/images/icon/logoVR.png')}}" alt="logo">
            </a>
        </div>
        <div id="head-mobile"></div>
        <div class="button"></div>
        <ul class="menu-wrapper">
            <li class='active item-menu'>
                <a class="home" href='{{ route('index') }}'>Trang chủ</a>
            </li>
            <li class="item-menu">
                <a href='#'>Giới thiệu</a>
            </li>
            <li class="item-menu">
                <a href='#'>Dịch vụ</a>
            </li>
            <li class="item-menu">
                <a href='{{route('news.index')}}'>Tin tức</a>
            </li>
            <li class="item-menu">
                <a href='{{route('contact')}}'>Liên hệ</a>
            </li>
            <li class="item-menu">
                <a class="lag" href='#'>VIE</a>
                <ul>
                    <li>
                        <a href='# '>EN</a>
                    </li>
                    <li>
                        <a href='#'>FR</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
