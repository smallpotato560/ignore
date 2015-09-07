<?php
/**
 * Created by PhpStorm.
 * User: 60194
 * Date: 2015/9/2
 * Time: 10:47
 */
?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Starter Template for Bootstrap</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.css" rel="stylesheet">
    <link href="bootstrap-combined.min.css" rel="stylesheet">
</head>
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
                    <a href="#" id="index" onclick="javascript:toIndex();">首页</a>
                </li>
                <li>
                    <a href="#" id="lib" onclick="javascript:toLib();">发布</a>
                </li>
                <li>
                    <a href="#" id="app" onclick="javascript:toApp();">修改</a>
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

        </div>
    </div>
</div>
<script>
    function toIndex() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
            {
                type: 'POST',
                dataType:'json',
                url: '/manager/ajax/index',
                success: function (data) {
                    var show = document.getElementById('show');
                    show.innerHTML = data;
                }
            });
    }
    function test() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
            {
                type: 'POST',
                dataType:'json',
                url: '/manager/ajax/info',
                success: function (data) {
                    var show = document.getElementById('show');
                    show.innerHTML = data;
                }
            });
    }
</script>
</body>
</html>
