@if(!empty($data->count()))
<section class="row news mt-5">
    <div class="content container">
        <h4 class="text-uppercase tt-name">Tin tức</h4>
        <hr class="underlined">
        <div class="row mt-5">
            @foreach($data as $item)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}">
                    <div class="caption mt-3">

                        <h4>{{ $item->title }}</h4>
                        
                        <p class="cus-time">{{ $item->created_at->format('m/d/y') }}</p>
                        
                        <p>{!! str_limit(strip_tags($item->content)) !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endif