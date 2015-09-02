<!DOCTYPE html>
<html lang="zh-CN">
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
    <link href="bootstrap-combined.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .banner { position: relative; overflow: auto; }
        .banner li { list-style: none; }
        .banner ul li { float: left; }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">网站首页</a></li>
                <li><a href="#about">动态信息</a></li>
                <li><a href="#contact">自贸咨询</a></li>
                <li><a href="#contact">发展动态</a></li>
                <li><a href="#contact">自贸协定</a></li>
                <li><a href="#contact">成功经验</a></li>
                <li><a href="#contact">如何审领</a></li>
                <li><a href="#contact">社区论坛</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div style="padding: 50px;"></div>

<div class="container">
    <div class="row">
        <img class="img-thumbnail img-responsive" src="http://tyimg.h.wap.cn//20131230/5602b899165e6cafadf145986b78a196.jpg">
        <input type="text">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="carousel slide" id="carousel-758084">
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" data-target="#carousel-758084">
                            </li>
                            <li data-slide-to="1" data-target="#carousel-758084">
                            </li>
                            <li data-slide-to="2" data-target="#carousel-758084" class="active">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img alt="" src="http://tyimg.h.wap.cn//20131230/5602b899165e6cafadf145986b78a196.jpg" />
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img alt="" src="http://tyimg.h.wap.cn//20131230/5602b899165e6cafadf145986b78a196.jpg" />
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item active">
                                <img alt="" src="http://tyimg.h.wap.cn//20131230/5602b899165e6cafadf145986b78a196.jpg" />
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div> <a data-slide="prev" href="#carousel-758084" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-758084" class="right carousel-control">›</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <ul>
            <li>This is a slide.</li>
            <li>This is another slide.</li>
            <li>This is a final slide.</li>
        </ul>
    </div>
</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>$(function() {
        $('.banner').unslider();
    });</script>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<!--unslider-->
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="//unslider.com/unslider.js"></script>
</body>
</html>
