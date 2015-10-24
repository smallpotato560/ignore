<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="我的毕业设计">
    <meta name="author" content="Tian Chen">
    <title>首页</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/responsive-nav.css" rel="stylesheet">
    <script src="bootstrap/js/jquery2.1.min.js"></script>
    <!--Unslider core JavaScript-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        .header{
            border: solid black;
        }
    </style>
</head>
<body>
<div class="container">
    {!! Form::open() !!}
    {!! Form::label('用户名','用户名') !!}
    {!! Form::text('text',null,['class'=>'form-control']) !!}
    {!! Form::label('密码','密码')!!}
    {!! Form::password('password',['class'=>'form-control']) !!}
    {!! Form::submit('Submit',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
</div>
</body>
</html>
