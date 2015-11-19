<html>
<head>
    @yield("css")
</head>
<body>
<div class="navigation">
    @yield('nav')
</div>
<div class="container">
    @yield('banner')
</div>
<div class="container">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {{--面包导航--}}
            <ul class="breadcrumb">
                <li>
                    <a href="../">首页</a> <span class="divider"></span>
                </li>
                @foreach($hasParent as $item)
                <li>
                    <a href="../">{!! $item->name !!}</a> <span class="divider"></span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">

        <ul class="thumbnails">
            @foreach($all as $article)
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <i class="fa fa-image fa-2x"></i>
                        <div class="caption" >
                            <h4 style="max-height: 40px;overflow: hidden">
                                {!! $article->title or "default" !!}
                            </h4>
                            <p style="max-height:80px;overflow: hidden">
                                {!! $article->intro or "" !!}
                            </p>
                            <p>
                                <a class="btn btn-primary" href="{!! '../article/'.$article->id !!}">浏览</a> <a class="btn" href="#">分享</a>
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</div>
</body>
</html>