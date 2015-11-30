@section("info")
    <div class="row">
        <div class="col-lg-3 col-md-3 panel panel-default"  style="padding: 0 !important;">
            <div class="panel-heading" >

                <div class="panel-title">
                    <span>个人信息</span>
                </div>

                <div class="text-center">
                    <a style="border-radius: 100%" >
                        <i class="fa fa-user fa-4x"></i>
                    </a>
                    {{--<img src="" class="img-circle" height="120px" width="100px">--}}
                </div>

                <div>
                    <a><i class="fa fa-user"></i></a>
                    <label class="text text-primary"><font>UserName</font></label>
                    <p id="name">Linus</p>
                </div>

            </div>
            <div class="panel-body">

                <ul class="nav nav-stacked">
                    <li role="presentation">
                        <a href="#" id="index" class="fa fa-home" onclick="javascript:0;"><span>操作1</span></a>
                    </li>
                    <li role="presentation">
                        <a href="#" id="lib"  class="fa fa-send" onclick="javascript:0;"><span>操作2</span></a>
                    </li>
                    <li role="presentation">
                        <a href="#" id="app" class="fa fa-pencil" onclick="javascript:0;"><span>操作3</span></a>
                    </li>
                    <li role="presentation">
                        <a href="#" id="setting" class="fa fa-cog" onclick="javascript:0;"><span>操作4</span></a>
                    </li>
                    <li role="presentation">
                        <a href="#" id="help"  class="fa fa-question" onclick="javascript:0;"><span>操作5</span></a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="container-fluid">
                {{--<div class="row">--}}
                    <ul class="pagination">
                        <li class="{!! 1?"disabled":'' !!}"><a href='#'>«</a></li>
                        {{--@for($page=1;$page<=$all->lastPage();++$page)--}}
                        {{--<li class="{!! ($current==$page)?"active":'' !!}">--}}
                        {{--<a href="javascript:paginate({!! $page or '' !!})">{!! $page or 1 !!}</a>--}}
                        {{--</li>--}}
                        {{--@endfor--}}
                        <li  class="{!! 1?"disabled":'' !!}"><a href={!! 1 !!}>1</a></li>
                        <li  class="{!! 1?"disabled":'' !!}"><a href={!! 2 !!}>2</a></li>
                        <li  class="{!! 1?"disabled":'' !!}"><a href={!! 3 !!}>3</a></li>
                        <li  class="{!! 1?"disabled":'' !!}"><a href={!! 4 !!}>4</a></li>
                        <li  class="{!! 1?"disabled":'' !!}"><a href={!! 5 !!}>5</a></li>
                        <li  class="{!! 1?"disabled":'' !!}"><a href='#'>»</a></li>
                    </ul>
                    <div class="pull-right">
                        <div style="padding-bottom:20px "></div>
                        {!! Form::open() !!}
                        {!! Form::label(null,'当前页面 1 共5页') !!}
                        {!! '<span>1</span>' !!}
                        {!! Form::label(null,'跳转到') !!}
                        {!! Form::input('redirect',null) !!}
                        {!! Form::close() !!}
                    </div>
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 style="max-height: 25px;overflow: hidden">{!! $article->title or "default" !!}</h3>
                                <p>{!! $article->intro or "" !!}</p>
                                <p><a href="{!! '/article/' !!}" class="btn btn-primary" role="button">浏览</a>
                                    <a href="{!! '/article/' !!}" class="btn btn-default" role="button">收藏</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 style="max-height: 25px;overflow: hidden">{!! $article->title or "default" !!}</h3>
                                <p>{!! $article->intro or "" !!}</p>
                                <p><a href="{!! '/article/' !!}" class="btn btn-primary" role="button">浏览</a>
                                    <a href="{!! '/article/' !!}" class="btn btn-default" role="button">收藏</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 style="max-height: 25px;overflow: hidden">{!! $article->title or "default" !!}</h3>
                                <p>{!! $article->intro or "" !!}</p>
                                <p><a href="{!! '/article/' !!}" class="btn btn-primary" role="button">浏览</a>
                                    <a href="{!! '/article/' !!}" class="btn btn-default" role="button">收藏</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid">
                <ul class="pagination">
                    <li class="{!! 1?"disabled":'' !!}"><a href='#'>«</a></li>
                    {{--@for($page=1;$page<=$all->lastPage();++$page)--}}
                        {{--<li class="{!! ($current==$page)?"active":'' !!}">--}}
                            {{--<a href="javascript:paginate({!! $page or '' !!})">{!! $page or 1 !!}</a>--}}
                        {{--</li>--}}
                    {{--@endfor--}}
                    <li  class="{!! 1?"disabled":'' !!}"><a href={!! 1 !!}>1</a></li>
                    <li  class="{!! 1?"disabled":'' !!}"><a href={!! 2 !!}>2</a></li>
                    <li  class="{!! 1?"disabled":'' !!}"><a href={!! 3 !!}>3</a></li>
                    <li  class="{!! 1?"disabled":'' !!}"><a href={!! 4 !!}>4</a></li>
                    <li  class="{!! 1?"disabled":'' !!}"><a href={!! 5 !!}>5</a></li>
                    <li  class="{!! 1?"disabled":'' !!}"><a href='#'>»</a></li>
                </ul>
            </div>

        </div>
    </div>
@endsection