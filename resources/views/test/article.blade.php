<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>文章展示页面</title>
<!-- Bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
<script type="text/javascript" src="../bootstrap/js/jquery2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">上海自由贸易区</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
            </ul>



            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="page-header">
        <h1>Title</h1>

    </div>
    <div class="">

    </div>
    <small class="pull-left">作者: xxx</small>
    <small class="pull-right">发布于 2015-11-01</small>
    <div class="clearfix"></div>
</div>
<div class="container">
    {{--一行文集--}}
    @foreach($all as $article)
        <div class="row">
            <div class="col-md-offset-2 col-sm-8 col-md-8">
                <div class="thumbnail">
                    <div class="caption">
                        <h3 style="max-height: 25px;overflow: hidden">{!! $article->title or "default" !!}</h3>
                        <p>{!! $article->intro or "" !!}</p>
                        <p><a href="#" class="btn btn-primary" role="button">修改</a>
                            <a href="{!! '/article/'.$article->id or '#' !!}}" class="btn btn-default" role="button">详情</a></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="center-block text-center">
        <?php
        $all->setPath('/test/testpage');
        echo $all->render();
        ?>
    </div>
</div>
</body>
</html>
