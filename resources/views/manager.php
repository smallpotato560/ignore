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
            <h3>
                h3. 这是一套可视化布局系统.
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">主页</a> <span class="divider">/</span>
                </li>
                <li>
                    <a href="#">类目</a> <span class="divider">/</span>
                </li>
                <li class="active">
                    主题
                </li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3 column ui-sortable">
            <ul class="nav nav-list">
                <li class="nav-header">
                    列表标题
                </li>
                <li class="active">
                    <a href="#" id="index" onclick="javascript:toIndex();">首页</a>
                </li>
                <li>
                    <a href="#" id="lib" onclick="javascript:toLib();">库</a>
                </li>
                <li>
                    <a href="#" id="app" onclick="javascript:toApp();">应用</a>
                </li>
                <li class="nav-header">
                    功能列表
                </li>
                <li>
                    <a href="#" id="info" onclick="javascript:test();">资料</a>
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
            <table class="table table-striped table-hover table-responsive">
                <thead>
                <tr>
                    <th>
                        编号
                    </th>
                    <th>
                        产品
                    </th>
                    <th>
                        交付时间
                    </th>
                    <th>
                        状态
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        01/04/2012
                    </td>
                    <td>
                        Default
                    </td>
                </tr>
                <tr class="success">
                    <td>
                        1
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        01/04/2012
                    </td>
                    <td>
                        Approved
                    </td>
                </tr>
                <tr class="error">
                    <td>
                        2
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        02/04/2012
                    </td>
                    <td>
                        Declined
                    </td>
                </tr>
                <tr class="warning">
                    <td>
                        3
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        03/04/2012
                    </td>
                    <td>
                        Pending
                    </td>
                </tr>
                <tr class="info">
                    <td>
                        4
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        04/04/2012
                    </td>
                    <td>
                        Call in to confirm
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function toInfo() {
            var html = document.getElementById('toInfo').innerHTML;
            document.getElementById('show').innerHTML=html;
            return 0;
    }
    function test() {
        $.ajax(
            {
                type: 'POST',
                url:'/manager/ajax/info',
            }
        );
    }
</script>
<script type="text/html" id="toInfo">
    <h3>Test</h3>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
    <p>sweety</p>
</script>
</body>
</html>
