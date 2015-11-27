<html xmlns="http://www.w3.org/1999/html" lang="zh-CN">
<head>
    @yield('css')
</head>

<body>
    <div class="navigation">
        @yield('nav')
    </div>
    <div class="container-fluid">
        @yield("banner")
    </div>

    <div class="container-fluid">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="demo1">
                                <li class="news-item">
                                    <table cellpadding="4">
                                        <tr>
                                            <td><img src="images/1.png" width="60" class="img-circle" /></td>
                                            <td>1. <a href="#">Read more...</a></td>
                                        </tr>
                                    </table>
                                </li>

                                <li class="news-item">
                                    <table cellpadding="4">
                                        <tr>
                                            <td><img src="images/1.png" width="60" class="img-circle" /></td>
                                            <td>2 <a href="#">Read more...</a></td>
                                        </tr>
                                    </table>
                                </li>

                                <li class="news-item">
                                    <table cellpadding="4">
                                        <tr>
                                            <td><img src="images/1.png" width="60" class="img-circle" /></td>
                                            <td>3.. <a href="#">Read more...</a></td>
                                        </tr>
                                    </table>
                                </li>

                                <li class="news-item">
                                    <table cellpadding="4">
                                        <tr>
                                            <td><img src="images/1.png" width="60" class="img-circle" /></td>
                                            <td>4.. <a href="#">Read more...</a></td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">

                </div>
            </div>
        </div>
        {{--@yield('content')--}}
    </div>

    <div class="container-fluid">
        @yield('footer')
    </div>
<script type="text/javascript" rel="script" src="bootstrap/js/newsbox.min.js"></script>
<script>
    $.fn.bootstrapNews.options = {
        newsPerPage: 4,
        navigation: true,
        autoplay: true,
        direction:'up',
        animationSpeed: 'normal',
        newsTickerInterval: 4000, //4 secs
        pauseOnHover: true,
        onStop: null,
        onPause: null,
        onReset: null,
        onPrev: null,
        onNext: null,
        onToDo: null
    };
    $(".demo1").bootstrapNews({
        newsPerPage: 5,
        autoplay: true,
        pauseOnHover:true,
        direction: 'up',
        newsTickerInterval: 4000,
        onToDo: function () {
            //console.log(this);
        }
    });
</script>
</body>
</html>