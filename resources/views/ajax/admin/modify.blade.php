@section("modify")
<div class="container-fluid">
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {{--面包导航--}}
            <ul class="breadcrumb">
                <li>
                    <a href="#">主页</a> <span class="divider"></span>
                </li>
                <li class="active">
                    主题
                </li>
            </ul>
            {{--一行文集--}}
                <div class="row">

                    <ul class="thumbnails">
                        @foreach($all as $article)
                        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="thumbnail">
                                <i class="fa fa-image fa-2x"></i>
                                <div class="caption">
                                    <h3>
                                        {!! $article->title or "default" !!}
                                    </h3>
                                    <p>
                                        {!! $article->content or "" !!}
                                    </p>
                                    <p>
                                        <a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
