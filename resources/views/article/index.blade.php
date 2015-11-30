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
            <a class="navbar-brand" href="/">上海自由贸易区</a>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <i class="fa fa-user fa-2x pull-left"><span style="color: green">hahha</span></i>
            <i class="fa fa-times-circle fa-2x pull-right">发布于 1997-0-0</i>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h1 class="text-center">{!! $article->title or 'null' !!}</h1>
            {!! $article->content or "something wrong" !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="pull-left">
                <a href="javascript:like({!! '\'like\''.','.$article->id !!})">
                    <i id='like' class="fa fa-heart{!! $islike?'':'-o' !!} fa-2x"></i>
                </a>
                <a>
                    <i class="fa fa-comment-o fa-2x"></i>
                </a>
            </div>
           <div class="pull-right">
               <a><i class="fa fa-bookmark-o fa-2x"></i></a>
               <a><i class="fa fa-share-square-o fa-2x"></i></a>
               <a><i class="fa fa-ellipsis-h fa-2x"></i></a>
           </div>
        </div>
    </div>
</div>
<script>
    function like(id,aid){
        var cn = $('#'+id).attr('class');
        if(cn=='fa fa-heart-o fa-2x') {
            $('#'+id).attr('class','fa fa-heart fa-2x');
        }else{
            $('#'+id).attr('class','fa fa-heart-o fa-2x');
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
            {
                type: 'post',
                dataType:'json',
                url: '/ajax/user/like',
                data:{
                    'Article_id':aid,
                },
                success: function (data) {
                    alert(data['msg']);

                }
            });
    }
</script>
</body>
</html>
