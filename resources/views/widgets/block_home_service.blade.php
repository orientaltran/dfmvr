@if(!empty($data->count()))
<section class="row service mt-5 mb-5">
    <div class="content container">
        <h4 class="text-uppercase tt-name">Dịch vụ</h4>
        <hr class="underlined">
        <div class="title">
            <p> Công nghệ linh hoạt
                <span>giàu sức tưởng tượng</span>
            </p>
            <p>Truyền cảm hứng sáng tạo đậm nét bao trùm các giác quan</p>
        </div>
        <div class="row">
            @foreach($data as $index => $item)
            <div class="col-md-4">
                <div class="service-tittle mb-5">
                    <div class="service-photo mr-4">
                        <img src="{{ asset('frontend/images/icon/icon-sv1.png')}}" alt="image service">
                    </div>
                    <div class="service-name">
                         <span>{{$index + 1 }}</span>
                         <p class="mt-3">{{$item->title}}</p>
                    </div>
                </div>
                <div class="service-content">
                    <p>
                        {!! str_limit(strip_tags($item->content), 100) !!}
                    </p>
                </div>
                <div class="text-center">
                     <a href="{{$item->slug}}" class="btn btn-seen">Xem thêm</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif