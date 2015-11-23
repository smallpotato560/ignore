@section('preview')
<div class="thumbnail">
    <div class="caption">
        <h3 style="max-height: 40px;overflow: hidden">{!! $article->title or "default" !!}</h3>
        <p>{!! $article->intro or "" !!}</p>
        <p><a href="#" class="btn btn-primary" role="button">修改</a>
            <a href="{!! '/article/'.$article->id or '#' !!}}" class="btn btn-default" role="button">详情</a></p>
    </div>
</div>
@endsection