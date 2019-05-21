@if(!empty($data->count()))
<section class="row project mt-5 mb-5">
    <div class="content container">
        <h4 class="text-uppercase tt-name">Dự án tiêu biểu</h4>
        <hr class="underlined">
        <div class="row mt-5">
            @foreach ($data as $item)
            <div class="col-xs-6 col-sm-4 col-md-3 item">
                <div class="item-image">
                    <img src="{{ asset('frontend/images/banner/project1.png')}}" alt="{{ $item->title }}" />
                </div>
                <div class="item-text">
                    <div class="item-text-wrapper">
                        <p class="item-text-header">{{ $item->title }}</p>
                        <p class="item-text-content">{{ $item->description }}</p>
                        <span class="item-text-footer">3D model, VR view, App</span>
                    </div>
                </div>
                <a class="item-link" href="{{ $item->slug }}">Ligula Ridiculus Tortor</a>
            </div>    
            @endforeach
        </div>
    </div>
</section>
@endif