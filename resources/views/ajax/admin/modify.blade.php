@section("modify")
<div class="container">
    {{--一行文集--}}
    @foreach($all as $article)
    <div class="row">
        <div class="col-sm-9 col-md-9">
            <div class="thumbnail">
                <div class="caption">
                    <h3>{!! $article->title or "default" !!}</h3>
                    <p>{!! $article->intro or "" !!}</p>
                    <p><a href="#" class="btn btn-primary" role="button">修改</a>
                        <a href="{!! '/article/'.$article->id or '#' !!}}" class="btn btn-default" role="button">详情</a></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
