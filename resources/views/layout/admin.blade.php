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
    @yield("sidebar")
    @yield("content")
</div>
<div class="container">
    @yield("footer")
</div>
</body>
</html>