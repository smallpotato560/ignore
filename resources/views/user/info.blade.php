 @section("info")
     {{--侧栏--}}
    <div class="row">
        <div class="col-lg-3 col-md-3 panel panel-default"  style="padding: 0 !important;">
            <div class="panel-heading" >

                <div class="panel-title">
                    <span>个人信息</span>
                </div>

                <div class="text-center">
                    <a  href="/user/{!! isset($user->email)?$user->email:'出错啦!' !!}" style="border-radius: 100%" >
                        <i class="fa fa-user fa-4x"></i>
                    </a>
                    {{--<img src="" class="img-circle" height="120px" width="100px">--}}
                </div>

                <div>
                    <a><i class="fa fa-user"></i></a>
                    <label class="text text-primary">用户名</label>
                    <p id="name">{!! isset($user->name)?$user->name:'出错啦!'!!}</p>
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
                        <a href="?" id="app" class="fa fa-pencil" onclick="javascript:0;"><span>修改</span></a>
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
                {{--分页--}}
                @if($alllikes->lastPage()>1)
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
                @endif

            <div class="container-fluid">

            @if(isset($articles) && $articles!=null)
                    {{--{!! dd($articles) !!}--}}
                @foreach((array)$articles as $article)
                    {{--{!! dd($article) !!}--}}
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3 style="max-height: 25px;overflow: hidden">{!! $article->title or "default" !!}</h3>
                                    <p style="overflow: hidden">{!! $article->intro or "" !!}</p>
                                    <p>
                                        <a href="{!! '/article/'.$article->id !!}" class="btn btn-primary" role="button">浏览</a>
                                        <a href="{!! '/user/unlike/'.$article->id !!}" class="btn btn-default" role="button">取消收藏</a>
                                    </p>
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
                    {!! Form::open(['id'=>'save_user_form']) !!}
                    <div class="form-group">
                        {!! Form::label('null','用户名',['class'=>'text-primary']) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::text('name',isset($user->name)?$user->name:'出错啦!',['class'=>'form-control','readonly'=>'readonly','id'=>'modify_user_name']) !!}
                            <span class="input-group-btn">
                                <button type='button' id="ub" onclick="javascript:rot('modify_user_name','ub');" class="btn btn-warning" value="">修改</button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('null','电子邮箱',['class'=>'text-primary']) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-google"></i></span>
                            {!! Form::email('name',isset($user->email)?$user->email:'出错啦!',['class'=>'form-control','readonly'=>'readonly','id'=>'modify_user_email']) !!}
                            <span class="input-group-btn">
                                <button id='eb' type='button' class="btn btn-warning" onclick="javascript:rot('modify_user_email','eb');" value="">修改</button>
                            </span>
                        </div>
                    </div>

                    <button id='submit' type='button' class="btn btn-primary btn-block" onclick="javascrip:saveu();" value="">提交</button>
                    <input id="uk" type="hidden"  value="{!! \Session::get('id',null) !!}">
                    <input hidden="hidden" id="method" value="save-u">
                    <input type="hidden" value="{!! csrf_token() !!}" id="token">
                    {!! Form::close() !!}
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
