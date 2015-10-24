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
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="responsive-nav.css" rel="stylesheet">
    <script src="jquery2.1.min.js"></script>
    <!--Unslider core JavaScript-->
    <script src="bootstrap.min.js"></script>
    <style>
        .header{
            border: solid black;
        }
    </style>
</head>
<body>
<div class="container">
    {!! Form::open(['url'=>'/admin/home']) !!}
    {!! Form::label('title','标题',['class'=>'form-control']) !!}
    {!! Form::text('username',null,['class'=>'form-control']) !!}
    {!! Form::label('passwd','密码',['class'=>'form-control']) !!}
    {!! Form::password('password',null,['class'=>'form-control']) !!}
    {!! Form::submit('publish',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
</div>
</body>
</html>