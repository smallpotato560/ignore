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
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-lg-offset-1">
            <div class="thumbnail">
                <br>
                @yield("signin")
                @yield("signup")
                @yield("error")
            </div>
        </div>
    </div>
</div>
</body>
</html>