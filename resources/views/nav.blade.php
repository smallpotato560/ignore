@section('nav')
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

@endsection
