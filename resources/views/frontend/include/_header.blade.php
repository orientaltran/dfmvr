<header class="menu-hr">
    <nav id='cssmenu' class="container nav-fill w-100 menu">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img class="" src="{{asset('frontend/images/icon/logoVR.png')}}" alt="logo">
            </a>
        </div>
        <div id="head-mobile"></div>
        <div class="button"></div>
        <ul>
            <li class='item-menu'>
                <a class="home" href='{{ route('index') }}'>Trang chủ</a>
            </li>
            <li class="item-menu ">
                <a href='{{route('page.index',['slug'=>'introduce'])}}'>Giới thiệu</a>
            </li>
            <li class="item-menu">
                <a href='#'>Dịch vụ</a>
            </li>
            <li class="item-menu">
                <a href='#'>Dự án</a>
            </li>
            <li class="item-menu">
                <a href='#'>Tin tức</a>
            </li>
            <li class="item-menu">
                <a href='#'>Liên hệ</a>
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