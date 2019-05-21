<div class="panel panel-bordered panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="icon wb-search"></i> {{ __('seo.seo_content') }}</h3>
        <div class="panel-actions">
            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
        </div>
    </div>
    <div class="panel-body">
        @php($seo = $dataTypeContent->seo)
        <div class="form-group">
            <label for="meta_description">{{ __('seo.meta_description') }}</label>
            @include('voyager::multilingual.input-hidden', [
                '_field_name'  => 'meta_description',
                '_field_trans' => get_field_translations($dataTypeContent, 'meta_description')
            ])
            <textarea class="form-control" name="meta_description">{{ isset($seo) ? $seo->meta_description : '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="meta_keywords">{{ __('seo.meta_keywords') }}</label>
            @include('voyager::multilingual.input-hidden', [
                '_field_name'  => 'meta_keywords',
                '_field_trans' => get_field_translations($dataTypeContent, 'meta_keywords')
            ])
            <textarea class="form-control" name="meta_keywords">{{ isset($seo) ? $seo->meta_keywords : '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="seo_title">{{ __('seo.seo_title') }}</label>
            @include('voyager::multilingual.input-hidden', [
                '_field_name'  => 'seo_title',
                '_field_trans' => get_field_translations($dataTypeContent, 'title')
            ])
            <input type="text" class="form-control" name="seo_title" placeholder="SEO Title" value="{{ isset($seo) ? $seo->seo_title : '' }}">
        </div>
    </div>
</div>
