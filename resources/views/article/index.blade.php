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
<style>
    #article_content *{
        word-break: break-all !important;
        word-wrap: break-word !important;
        width: 75%;
    }
</style>
<body>
{{--登陆重定向的测试--}}
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
            <a class="navbar-brand" href="/"><i class="fa fa-smile-o"></i>上海自由贸易区</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                {{--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>--}}
                {{--<li><a href="#">Link</a></li>--}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="#">Link</a></li>--}}
                <li>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default form-control"><i class="fa fa-search"></i></button>
                                </span>
                        </div>
                    </form>
                </li>
                @if(!empty($email = session("email")))
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" style="padding-top: 3px"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/user/{!! $email or "error" !!}">
                                    <i class="fa fa-info"></i>
                                    <span>个人信息</span>
                                </a>
                            </li>
                            <li>
                                <a href="/user/logout/{!! $email or "error"!!}">
                                    <i class="fa fa-lock"></i>
                                    <span>注销</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                @else
                    <li ><a href="/login">注册/登陆</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <i class="fa fa-user  pull-left" style="font-size: 16px"><span style="color: green">{!! $author->name or null !!}</span></i>
            <i class="fa fa-times-circle  pull-right" style="font-size: 16px">{!! $article->created_at or null !!}</i>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h1 class="text-center">{!! $article->title or 'null' !!}</h1>
        </div>
    </div>
    <div class="row">
        <div id='article_content' class="col-md-offset-2 col-md-8">
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
                    if(data['code']==200) {
                        var cn = $('#' + id).attr('class');
                        if (cn == 'fa fa-heart-o fa-2x') {
                            $('#' + id).attr('class', 'fa fa-heart fa-2x');
                        } else {
                            $('#' + id).attr('class', 'fa fa-heart-o fa-2x');
                        }
                    }
                    alert(data['msg']);
                }
            });
    }
</script>
</body>
</html>
