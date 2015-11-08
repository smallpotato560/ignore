<html>
<head>
    @yield("css")
</head>
<body>
{{--登陆表单--}}
<div class="container">
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4 text-center">
    {!! Form::open(["url"=>"/login"]) !!}
    <div class="form-group">
    {!! Form::label(null,"Email",["class"=>"text-primary"]) !!}
    {!! Form::email("email",null,["class"=>"form-control"]) !!}
    </div>
    <div class="form-group">
    {!! Form::label(null,"Username",["class"=>"text-primary"]) !!}
    {!! Form::text("name",null,["class"=>"form-control"]) !!}
    </div>
    <div class="form-group">
    {!! Form::label(null,"Password",["class"=>"text-primary"]) !!}
    {!! Form::password("password",["class"=>"form-control"]) !!}
    </div>
    {!! Form::submit("submit",["class"=>"btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li style="list-style: none">
                    <?php echo $error ?>
                </li>
            @endforeach
        </ul>
    @endif
    </div>
    </div>
</div>
</body>
</html>