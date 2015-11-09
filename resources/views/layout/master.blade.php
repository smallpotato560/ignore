<html xmlns="http://www.w3.org/1999/html" lang="zh-CN">
<head>
    @yield('css')
</head>

<body>
    <div class="nav">
        @yield('nav')
    </div>
    <div class="container">
        <div class="banner">
            @yield("banner")
        </div>
    </div>

    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <div class="container">
        <div class="footer">
            @yield('footer')
        </div>
    </div>
</body>
</html>