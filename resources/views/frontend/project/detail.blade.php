@extends('layouts.frontend')

@section('content')

<section>
    <div class="container">
        <div class="detail-project-content">
            <h1 class="text-uppercase mt-5">{{ $project->title }}</h1>
            <span class="time">{{ $project->created_at->format('m/d/y') }}</span>
            <div class="mt-5">
                {!! $project->content !!}
            </div>
        {{--     <video class="mt-5" width="100%" height="100%" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video> --}}
        </div>
        <div class="sub-menu mt-5">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            @foreach($categories as $item)
                            <li class="nav-item item-menu">
                                <a class="nav-link" href="{{ route('project.category', $item->slug) }}">{{ $item->name }}</a>
                            </li>
                            @endforeach()
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection