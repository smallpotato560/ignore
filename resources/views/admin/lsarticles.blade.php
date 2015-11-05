<?php
/**
 * Created by PhpStorm.
 * User: 60194
 * Date: 2015/9/1
 * Time: 16:00
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome-4.4.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-combined.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            {{--面包导航--}}
            <ul class="breadcrumb">
                <li>
                    <a href="#">主页</a> <span class="divider"></span>
                </li>
                <li class="active">
                    主题
                </li>
            </ul>

            {{--一行文集--}}
            <div class="row-fluid">
                <div class="span12">
                    <ul class="thumbnails">
                        {!! foreach($all as $row): !!}
                        @yield("baron");
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="fa fa-image fa-2x"></i>
                                <div class="caption">
                                    <h3>
                                        冯诺尔曼结构
                                    </h3>
                                    <p>
                                        也称普林斯顿结构，是一种将程序指令存储器和数据存储器合并在一起的存储器结构。程序指令存储地址和数据存储地址指向同一个存储器的不同物理位置。
                                    </p>
                                    <p>
                                        <a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        {!! endforeach; !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
