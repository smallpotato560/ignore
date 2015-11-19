<html xmlns="http://www.w3.org/1999/html" lang="zh-CN">
<head>
    @yield('css')
</head>

<body>
    <div class="navigation">
        @yield('nav')
    </div>
    <div class="container">
        @yield("banner")
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        @yield('footer')
    </div>
</body>
</html>