@section('content')
{{--<div class="container">--}}
    {{--门户点--}}
    <div class="row">
        {{--@if($portals):--}}
        {{--@foreach($portals as $portal):--}}
        {{--unit template--}}
        <div class="col-md-3" style="position: relative;display: inline-block;">
            <ul >
                <li><a href="javascript:void(0);"><i class="fa fa-smile-o"></i></a></li>
                <li><a><i class="fa fa-smile-o"></i></a></li>
                <li><a><i class="fa fa-smile-o"></i></a></li>
            </ul>
        </div>
        <div class="col-md-3" style="position: relative;display: inline-block;">
            <ul >
                <li><a><i class="fa fa-smile-o"></i></a></li>
                <li><a><i class="fa fa-smile-o"></i></a></li>
                <li><a><i class="fa fa-smile-o"></i></a></li>
            </ul>
        </div>
        <div class="col-md-3" style="position: relative;display: inline-block;">
            <ul >
                <li><a><i class="fa fa-smile-o"></i></a></li>
                <li><a><i class="fa fa-smile-o"></i></a></li>
                <li><a><i class="fa fa-smile-o"></i></a></li>
            </ul>
        </div>
        <div class="col-md-3" style="position: relative;display: inline-block;">
            <ul >
                <li><a><i class="fa fa-smile-o"></i></a></li>
                <li><a><i class="fa fa-smile-o"></i></a></li>
                <li><a><i class="fa fa-smile-o"></i></a></li>
            </ul>
        </div>
    </div>
    <!--    第一行-->
    <div class="row">
        <!--        项目一-->
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">动态要闻</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>
                            <h5 class="text-success">标题一</h5>
                            <span>这是第一条测试动态信息</span>
                            <span>2015-12-12</span>
                        </li>
                        <li>
                            <h5>标题二</h5>
                            <p1>这是第二条测试动态信息</p1>
                            <span>2015-12-12</span>
                        </li>
                        <li>
                            <h5>标题三</h5>
                            <p1>这是第三条测试动态信息</p1>
                            <span>2015-12-12</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--轮播-->
        <div id="carousel-example-generic" class="carousel slide col-lg-8 col-md-12 col-sm-12" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/xys.jpg" alt="">
                    <div class="carousel-caption">
                        <h1>标题</h1>
                        <p>图文并茂</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/zmq2.jpg" alt="">
                    <div class="carousel-caption">
                        <h1>标题</h1>
                        <p>图文并茂</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--   第一行结束-->
        <!--        第二行开始-->
    <div class="row">
            <!--        项目一-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">最新咨询</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>
                            <h5>标题一</h5>
                            <span>这是第一条测试动态信息</span>
                            <span>2015-12-12</span>
                        </li>
                        <li>
                            <h5>标题二</h5>
                            <p1>这是第二条测试动态信息</p1>
                            <span>2015-12-12</span>
                        </li>
                        <li>
                            <h5>标题三</h5>
                            <p1>这是第三条测试动态信息</p1>
                            <span>2015-12-12</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--第二行结束-->
{{--</div>--}}
@endsection