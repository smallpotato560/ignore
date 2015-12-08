@section("signup")
<div id="signup-pane">
    <div class="tile" style="display: block">
        <div  class="pull-left">
            <button id="signin" class="btn btn-default signin">登录</button>
        </div>
        <div  class="pull-right">
            <button  class="btn btn-primary signup">注册</button>
        </div>
        <div class="clearfix"></div>
    </div>
    <br>
    {!! Form::open(["url"=>"/signup"]) !!}
    <div class="form-group">
        {!! Form::label(null,"电子邮箱",["class"=>"text-primary"]) !!}
        {!! Form::email("email",null,["class"=>"form-control"]) !!}
    </div>
    <div class="form-group">
        {!! Form::label(null,"用户名",["class"=>"text-primary"]) !!}
        {!! Form::text("name",null,["class"=>"form-control"]) !!}
    </div>
    {{--<div class="form-group">--}}
        {{--{!! Form::label(null,"Telphone",["class"=>"text-primary"]) !!}--}}
        {{--{!! Form::text("tel",null,["class"=>"form-control"]) !!}--}}
    {{--</div>--}}
    <div class="form-group">
        {!! Form::label(null,"密码",["class"=>"text-primary"]) !!}
        {!! Form::password("password",["class"=>"form-control"]) !!}
    </div>

    {!! Form::submit("提交",["class"=>"btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
</div>
@endsection