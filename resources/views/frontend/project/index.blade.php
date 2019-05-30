@extends('layouts.frontend')

@section('content')

<section class="project-content">
    <div class="container">
        <div class="text-center title">
            <h2 class="font-weight-bold">Dự án
                <span class="text-color-prink">DFM-VR</span>
            </h2>
            <h4 class="title-sub">Công nghệ tương tác chuyên biệt hóa</h4>
        </div>
        <div class="sub-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            @foreach($categories as $item)
                            <li class="nav-item item-menu {{ url()->current() == route('project.category', $item->slug) ? 'active' : ''}}">
                                <a class="nav-link" href="{{ route('project.category', $item->slug) }}">{{ $item->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="project mt-5 mb-5">
            <div class="content container">
                <div class="row mt-5">
                    @foreach($projects as $item)
                    <div class="col-sm-6 col-md-3 col-6 item">
                        <div class="item-image">
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}" />
                        </div>
                        <div class="item-text">
                            <div class="item-text-wrapper">
                                <p class="item-text-header">{{ $item->title }}</p>
                                <p class="item-text-content">{{ $item->categoryId->name}}</p>
                                <span class="item-text-footer">3D model, VR view, App</span>
                            </div>
                        </div>
                        <a class="item-link" href="{{ route('project.detail', $item->slug) }}">{{ $item->title }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="pagination justify-content-center">
        {{ $projects->links() }}
        </div>
    </div>
</section>

@endsection