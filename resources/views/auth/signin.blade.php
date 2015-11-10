@section("signin")
<div id="signin-pane">
    <div class="tile" style="display: block">
        <div  class="pull-left">
            <button id="signin" class="btn btn-primary signin">Signin</button>
        </div>
        <div  class="pull-right">
            <button class="btn btn-default signup">Signup</button>
        </div>
        <div class="clearfix"></div>
    </div>
    {!! Form::open(["url"=>"/login"]) !!}
    <div class="form-group">
        {!! Form::label(null,"Email",["class"=>"text-primary"]) !!}
        {!! Form::email("email",null,["class"=>"form-control"]) !!}
    </div>
    {{--<div class="form-group">--}}
    {{--{!! Form::label(null,"Username",["class"=>"text-primary"]) !!}--}}
    {{--{!! Form::text("name",null,["class"=>"form-control"]) !!}--}}
    {{--</div>--}}
    <div class="form-group">
        {!! Form::label(null,"Password",["class"=>"text-primary"]) !!}
        {!! Form::password("password",["class"=>"form-control"]) !!}
    </div>
    {!! Form::submit("submit",["class"=>"btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
</div>
@endsection