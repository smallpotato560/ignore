{{--管理页面首页模版--}}
<html lang="zh-CN">
<head>
    @yield("css")
</head>
<body>
@yield("nav")
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
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
{{--Bootstrap extends JS--}}
<script type="text/javascript" src="bootstrap/js/jquery2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/wysiwyg.min.js"></script>
<script type="text/javascript" src="public/js/wysiwyg-editor.min.js"></script>
<script type="text/javascript" src="public/js/coolclock.js"></script>
<script type="text/javascript" src="public/js/fileinput.min.js"></script>
<script src="master.js"></script>
</body>
</html>