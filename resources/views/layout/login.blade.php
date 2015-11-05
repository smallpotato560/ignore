<html>
<head>
    @yield("css")
</head>
<body>
{{--登陆表单--}}
    {!! Form::open(["url"=>"/login"]) !!}
    {!! Form::label(null,"Email",["class"=>"form-control text-primary"]) !!}
    {!! Form::email("email",null,["class"=>"form-control"]) !!}
    {!! Form::label(null,"Username",["class"=>"form-control text-primary"]) !!}
    {!! Form::text("username",null,["class"=>"form-control"]) !!}
    {!! Form::label(null,"Password",["class"=>"form-control text-primary"]) !!}
    {!! Form::password("password",null,["class"=>"form-control"]) !!}
    {!! Form::submit("submit",["class"=>"btn btn-default btn-block form-control"]) !!}
    {!! Form::close() !!}
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>
                    <?php echo $error ?>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>