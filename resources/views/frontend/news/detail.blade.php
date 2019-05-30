@extends('layouts.frontend')

@section('content')

<section>
    <div class="container">
        <div class="detail-new-content">
            <h1 class="mt-5">{{ $news->title }}</h1>
            <div class="time">
                <span class="pr-4">{{ $news->created_at->format('m-d-y') }}</span>
                <span class="time">|</span>
                <a href="{{ route('news.category', $news->categoryId->slug) }}"><span class="pl-4">{{ $news->categoryId->name }}</span></a>
            </div>
            <div class="mt-5">
                {!! $news->content !!}
            </div>
        </div>
        
        @if(!empty($relations->count()))
        <div class="new-related mt-5 mb-5">
            <div class="row news">
                @foreach($relations as $item)
                <div class="col-12 col-md-3 col-sm-6">
                    <div class="card mb-2">
                        <a href="#"><img class="card-img-top" src="{{ Storage::url($item->image) }}" alt="Card image cap"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('news.detail', $item->slug) }}">{{ $item->title }}</a>
                            </h4>
                            <span class="cus-time">{{ $item->created_at->format('m/d/y') }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

@endsection