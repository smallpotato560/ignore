{{--管理页面首页模版--}}
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>后台管理系统</title>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-combined.min.css" rel="stylesheet">
</head>
</html>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3>后台管理系统</h3>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3 column ui-sortable">
            <ul class="nav nav-list">
                <li class="nav-header">
                    内容发布
                </li>
                <li class="active">
                    <a href="#" id="index" onclick="javascript:toHome();">首页</a>
                </li>
                <li>
                    <a href="#" id="lib" onclick="javascript:toPublish();">发布</a>
                </li>
                <li>
                    <a href="#" id="app" onclick="javascript:toEdit();">修改</a>
                </li>
                <li class="nav-header">
                    功能列表
                </li>
                <li>
                    <a href="#" id="setting" onclick="javascript:toSetting();">设置</a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#" id="help" onclick="javascript:toHelp();">帮助</a>
                </li>
            </ul>
        </div>
        <div class="span9 column ui-sortable" id="show" style="overflow: auto">
            @yield('home')
        </div>
    </div>
</div>

</body>