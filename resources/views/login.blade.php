<html>
<head>
@extends("bootstrap")
</head>

<body>
{{--登陆表单--}}
    {!! Form::open(["url"=>"/"]) !!}
    {!! Form::email("email",["class"=>"form-control"]) !!}
    {!! Form::text("username",["class"=>"form-control"]) !!}
    {!! Form::password("password",["class"=>"form-control"]) !!}
    {!! Form::submit("submit",["class"=>"btn btn-default btn-block form-control"]) !!}
    {!! Form::close() !!}
</body>
</html>