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
    <link href="bootstarp/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstarp/css/responsive-nav.css" rel="stylesheet">
    <script src="bootstarp/js/jquery2.1.min.js"></script>
    <!--Unslider core JavaScript-->
    <script src="bootstarp/js/unslider.js"></script>
    <script src="bootstarp/js/bootstrap.min.js"></script>
    <script src="bootstarp/js/responsive-nav.js"></script>
    <style>
        .header{
            border: solid black;
        }
        .footer{
            border: solid black;
            background-color: #39b3d7;
        }
    </style>
</head>

<body>
<div class="header">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">自由贸易区</a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">动态</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        招商平台<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">扩展一</a></li>
                        <li><a href="#">扩展二</a></li>
                        <li><a href="#">扩展三</a></li>
                        <li class="divider"></li>
                        <li><a href="#">独立扩展一</a></li>
                        <li class="divider"></li>
                        <li><a href="#">独立扩展二</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
@yield('content')