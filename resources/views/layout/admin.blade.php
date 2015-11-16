{{--管理页面首页模版--}}
<html lang="zh-CN">
<head>
    @yield("css")
</head>
<body>
<div class="container">
    @yield("header")
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            @yield("sidebar")
        </div>

    <div class="col-lg-9" id="show" style="overflow: auto">
        @yield("content")
    </div>
    </div>
</div>
<div class="container-fluid">
    {{--@yield("footer")--}}
</div>
</body>
</html>