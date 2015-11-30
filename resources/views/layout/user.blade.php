<html>
<head>
    @yield("css")
</head>
<body>
   @yield('nav')
    <div class="container">
        @yield("info")
    </div>
<script>
    function unlike(aid){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
                {
                    type: 'get',
                    dataType:'json',
                    url: '/ajax/user/like',
                    data:{
                        'Article_id':aid,
                    },
                    success: function (data) {

                    }
                });
    }
</script>
</body>
</html>