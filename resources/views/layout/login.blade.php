<html>
<head>
    @yield("css")
</head>
<body>
<script type="text/javascript">
    $(document).ready(function (){
//        onload
        $("#signin-pane").show();
        $("#signup-pane").hide();

        $(".signup").mouseenter(function(){
            if($("#signup-pane").is(":hidden")){
                $("#signup-pane").toggle("slow");
                $("#signin-pane").hide();
            }
        });

        $(".signin").mouseenter(function() {
            if($("#signin-pane").is(":hidden")) {
                $("#signin-pane").toggle("slow");
                $("#signup-pane").hide();
            }
        });
    });
</script>
{{--登陆表单--}}
<div class="container">
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4 text-center">
            @yield("signin")
            @yield("signup")
            @yield("error")
        </div>
    </div>
</div>
</body>
</html>