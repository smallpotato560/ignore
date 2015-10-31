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
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="master.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
    {{--Bootstrap extends JS--}}
    <script type="text/javascript" src="bootstrap/js/jquery2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap-wysiwyg.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery.hotkeys.js"></script>
    <script src="master.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <span class="colorful pull-left">天气</span>
        <span class="colorful pull-left">时间</span>
        <span class="colorful pull-right">用户</span>
    </div>
    <div class="clearfix"></div>
    <div class="row-fluid">
        <div class="span12">
            <h3>后台管理系统</h3>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2 column ui-sortable">
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
        <div class="span10 column ui-sortable" id="show" style="overflow: auto">

        </div>
    </div>
</div>

</body>
</html>