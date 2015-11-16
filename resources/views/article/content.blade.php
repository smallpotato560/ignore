@section("content")
    <div class="row">
        <h1 class="text-primary">{!! $article->title or 'null' !!}</h1>
    </div>
    <div class="row">
        <span>
            {!! $article->content or "something wrong" !!}
        </span>
    </div>
@endsection