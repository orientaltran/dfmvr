@extends('layouts.frontend')

@section('content')

	<section class="sub-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item item-menu active">
                            <a class="nav-link" href="#">Ứng dụng </a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link" href="#">Sự kiện</a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link" href="#">Công nghệ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
        <!-- Content -->
    <section class="news mt-5 mb-5">
        <div class="container">
            <div class="row">
                @foreach($news as $item)
                <div class="col-12 col-md-3 col-sm-6">
                    <div class="card mb-2">
                        <a href="#"><img class="card-img-top" src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="./detail-new.html">{{ $item->title }}</a></h4>
                            <span class="cus-time">{{ $item->created_at->format('m/d/y') }}</span>
                            <p class="service-content">{{ str_limit(strip_tags($item->content), 100) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <nav data-pagination>
                <a href=# disabled><i class="fa fa-angle-left"></i></a>
                <ul>
                    <li class=current><a href=#1>1</a>
                    <li><a href=#2>2</a>
                    <li><a href=#3>3</a>
                    <li><a href=#4>4</a>
                    <li><a href=#5>5</a>
                </ul>
                <a href=#2><i class="fa fa-angle-right"></i></a>
            </nav>
        </div>
    </section>

@endsection