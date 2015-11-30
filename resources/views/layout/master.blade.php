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
        @yield('content')
    </div>

    <div class="container-fluid">
        @yield('footer')
    </div>
<script type="text/javascript" rel="script" src="bootstrap/js/newsbox.min.js"></script>
<script>
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