@extends('layouts._frontend')

@section('content')


<section class="introduce mt-5 mb-5">
  <div class="container">
    <h2 class="title">
      Đây là tôi
      <span>DFM-VR</span>
    </h2>
    <div class="row">
      <div class="col-lg-6">
        <p class="content">
          @if(!empty($page->count()))
          @foreach($page as $item)
          {{$item->body}}
          @endforeach
          @endif
        </p>
      </div>
      <div class="col-lg-6 text-center introduce-img">

        <img src="{{asset('frontend/images/banner/banner-introduce1.png')}}" alt="" width="100%" height="100%">
      </div>
    </div>
  </div>
</section>

<section class="introduce mt-5 mb-5">
  <div class="container">
    <h2 class="title">
      Những điểm sáng khác của
      <span>DFM Engineering</span>
    </h2>
    <div class="row">
      @if(!empty($partner->count()))
      @foreach($partner as $item)
      <div class="col-md-4 col-12">
        <div class="introduce-item">
          <div class="mt-4 mb-4 ml-3 mr-3">
            <div class="introduct-logo mb-5">
              <a href="#"><img src="{{ Storage::url($item->image) }}" alt=""></a>
            </div>
            <div class="introduct-content">
              <a href="#">
                <p class="hover">{{$item -> name}}</p>
              </a>
              <span>{{$item ->description}}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</section>


@endsection