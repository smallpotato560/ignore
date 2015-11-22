<html>
<head>
    @yield("css")
</head>
<body>
<div class="navigation">
    @yield('nav')
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
    @foreach($all as $article)
    <div class="row">
    <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
    <div class="caption">
    <h3 style="max-height: 25px;overflow: hidden">{!! $article->title or "default" !!}</h3>
    <p>{!! $article->intro or "" !!}</p>
    <p><a href="{!! '/article/'.$article->id !!}" class="btn btn-primary" role="button">浏览</a>
    <a href="{!! '/article/'.$article->id !!}}" class="btn btn-default" role="button">收藏</a></p>
    </div>
    </div>
    </div>
    </div>
    @endforeach
    <div class="text-center">
        <?php $all->setPath('./'.$item->id);?>
        {!! $all->render() !!}
    </div>
    </div>

</div>
</body>
</html>