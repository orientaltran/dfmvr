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
                        @foreach($categories as $category)
                        <li class="nav-item item-menu {{ url()->current() == route('news.category', $category->slug) ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('news.category', $category->slug) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
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
                        <a href="{{ route('news.detail', ['slug' => $item->slug] )}}"><img class="card-img-top" src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ route('news.detail', ['slug' => $item->slug] )}}">{{ $item->title }}</a></h4>
                            <span class="cus-time">{{ $item->created_at->format('m/d/y') }}</span>
                            <p class="service-content">{{ str_limit(strip_tags($item->content), 100) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination justify-content-center">
            {{ $news->links() }}
            </div>
        </div>
    </section>

@endsection