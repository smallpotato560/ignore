 @section("info")
     {{--侧栏--}}
    <div class="row">
        <div class="panel panel-default col-lg-3 col-md-3" style="padding: 0 !important;">
            <div class="panel-heading" >

                <div class="panel-title">
                    <span>个人信息</span>
                </div>

                <div class="text-center">
                    <a  href="/user/{!! \Session::get('email') !!}" style="border-radius: 100%" >
                        <i class="fa fa-user fa-4x"></i>
                    </a>
                    {{--<img src="" class="img-circle" height="120px" width="100px">--}}
                </div>

                <div>
                    <a><i class="fa fa-user"></i></a>
                    <label class="text text-primary">用户名</label>
                    <p id="name">{!! \Session::get('name')?\Session::get('name'):'出错啦!'!!}</p>
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
                        <a href="?p=l" id="setting" class="fa fa-cog" onclick="javascript:0;"><span>收藏</span></a>
                    </li>
                    <li role="presentation">
                        <a href="#" id="help"  class="fa fa-question" onclick="javascript:0;"><span>操作5</span></a>
                    </li>
                </ul>

            </div>
        </div>
    {{--多功能--}}
        <div class="col-lg-9 col-md-9">
            {{--收藏--}}
            @if(isset($_GET['p']) && $_GET['p']=='l')
            <div class="container-fluid">
                <?php $alllikes->setPath('./'.\Session::get('email'));?>
                <?php echo $alllikes->appends(['p' => 'l'])->render(); ?>
                {{--<div class="row">--}}
                    <div class="pull-right">
                        <div style="padding-bottom:20px "></div>
                        {!! Form::open(['method'=>'get']) !!}
                        {!! Form::label(null,'当前页面'.$alllikes->currentPage(). '共'.$alllikes->lastPage().'页') !!}
                        {!! Form::label(null,'跳转到') !!}
                        {!! Form::text('p','l',['class'=>'hidden']) !!}
                        <div class="input-group">
                            {!! Form::text('page',null,['class'=>'form-control']) !!}
                            <span  class = 'input-group-btn'>
                                {!! Form::submit('提交',['class'=>'btn btn-primary',]) !!}
                            </span>
                        </div>
                        {!! Form::close() !!}
                    </div>
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            </div>

            <div class="container-fluid">
            @if(isset($articles) && !empty($articles))
                    @foreach($articles as $article)
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3 style="max-height: 25px;overflow: hidden">{!! $article->title or "default" !!}</h3>
                                        <p>{!! $article->intro or "" !!}</p>
                                        <p><a href="{!! '/article/'.$article->id !!}" class="btn btn-primary" role="button">浏览</a>
                                            <a href="{!! '/user/unlike/'.$article->id !!}" class="btn btn-default" role="button">取消收藏</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                <p>你似乎还没收藏文章呢!</p>
                @endif
            </div>

            <div class="container-fluid">
                <?php $alllikes->setPath('./'.\Session::get('email'));?>
                <?php echo $alllikes->appends(['p' => 'l'])->render(); ?>
            </div>
                {{--默认,信息修改页--}}
            @elseif(!isset($_GET['p']))
            <div class="container-fluid">
                {!! Form::open() !!}
                <div class="form-group">
                    {!! Form::label('null','用户名',['class'=>'']) !!}
                    {!! Form::text('name',null,['class'=>'']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('null','电子邮件',['class'=>'']) !!}
                    {!! Form::text('email',null,['class'=>'']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('null','电子邮件',['class'=>'']) !!}
                    {!! Form::text('email',null,['class'=>'']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            @endif
        </div>
    </div>
@endsection