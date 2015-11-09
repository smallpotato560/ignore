@section('nav')
    {{--登陆重定向的测试--}}
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
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
                @if(empty(@old()))
                    <li><a><i class="fa fa-user">{!! "Cool" !!}</i></a></li>
                @endif
                <li ><a href="/login">Signin</a></li>
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

@endsection
