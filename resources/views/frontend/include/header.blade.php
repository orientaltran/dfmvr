@inject('homeservice', App\Services\HomeService)

<header class="header {{ Request::is('/') == route('index') ? 'dfm-banner' : 'menu-hr' }}">
    <nav id='cssmenu' class="container nav-fill w-100 menu">
        <div class="logo">
             <a href="{{ route('index') }}">
                <img class="" src="{{asset('frontend/images/icon/logoVR.png')}}" alt="logo">
            </a>
        </div>
        <div id="head-mobile"></div>
        <div class="button"></div>
        <ul class="menu-wrapper">
            <li class='item-menu {{ Request::is('/') == route('index') ? 'active' : '' }}'>
                <a class="home" href='{{ route('index') }}'>Trang chủ</a>
            </li>
            <li class="item-menu ">
                <a href='{{route('page.index',['slug'=>'introduce'])}}'>Giới thiệu</a>
            </li>
            <li class="item-menu">
                <a href='#'>Dịch vụ</a>
            </li>
            <li class="item-menu {{ $homeservice->activeMenu('project') }}">
                <a href='{{route('project.index')}}'>Projects</a>
            </li>
            <li class="item-menu {{ $homeservice->activeMenu('news') }}">
                <a href='{{route('news.index')}}'>Tin tức</a>
            </li>
            <li class="item-menu {{ $homeservice->activeMenu('contact') }}">
                <a href='{{route('contact')}}'>Liên hệ</a>
            </li>
            @php($locales = config('voyager.multilingual.locales'))
            <li class="item-menu">
                <a class="lag" href='javascript:void(0)'>{{ app()->getLocale() }}</a>
                <ul>
                    @foreach($locales as $locale)
                        @if($locale !== app()->getLocale())
                            <li>
                                <a href='{{ route('locale.change', $locale) }}'>{{ $locale }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
        </ul>
    </nav>
</header>
