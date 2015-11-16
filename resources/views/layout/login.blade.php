<html>
<head>
    @yield("css")
</head>
<body>
<script type="text/javascript">
    $(document).ready(function (){

        $("#signin-pane").hide();
        $("#signup-pane").show();

        $(".signup").click(function(){
            if($("#signup-pane").is(":hidden")){
                $("#signup-pane").fadeIn("slow");
                $("#signin-pane").hide();
            }
        });

        $(".signin").click(function() {
            if($("#signin-pane").is(":hidden")) {
                $("#signin-pane").fadeIn("slow");
                $("#signup-pane").hide();
            }
        });
    });
</script>
{{--登陆表单--}}
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-4 text-center">
            @yield("signin")
            @yield("signup")
            @yield("error")
        </div>
    </div>
</div>
</body>
</html>