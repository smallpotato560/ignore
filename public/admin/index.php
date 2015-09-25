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
    <script src="unslider.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="responsive-nav.js"></script>
</head>
<body>
<div class="container">
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
                        Java <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">jmeter</a></li>
                        <li><a href="#">EJB</a></li>
                        <li><a href="#">Jasper Report</a></li>
                        <li class="divider"></li>
                        <li><a href="#">分离的链接</a></li>
                        <li class="divider"></li>
                        <li><a href="#">另一个分离的链接</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img width="100%" height="100px" src="img/zmq2.jpg" alt="First slide">
            </div>
            <div class="item">
                <img width="100%" height="100px" src="img/jq2.jpg" alt="Second slide">
            </div>
            <div class="item">
                <img width="100%" height="100px" src="img/zj.jpg" alt="Third slide">
            </div>
        </div>
        <!-- 轮播（Carousel）导航 -->
        <a class="carousel-control left" href="#myCarousel"
           data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel"
           data-slide="next">&rsaquo;</a>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <code>动态信息</code>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>标题一</h5>
                        <span>这是第一条测试动态信息</span>
                        <span>2015-12-12</span>
                </li>
                <li class="list-group-item">
                    <h5>标题二</h5>
                    <p1>这是第二条测试动态信息</p1>
                    <span>2015-12-12</span>
                </li>
                <li class="list-group-item">
                    <h5>标题三</h5>
                    <p1>这是第三条测试动态信息</p1>
                    <span>2015-12-12</span>
                </li>
            </ul>
        </div>
    </div
</div>
<div class="clearfix"></div>

<script>
    $(function() {
       $('.carousel-inner').unslider();
    });
</script>
</body>
</html>
