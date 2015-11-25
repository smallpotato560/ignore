@section("css")
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{!! session("email") or "default" !!}</title>
<!-- Bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
{{--Bootstrap extends JS--}}
<script type="text/javascript" src="../bootstrap/js/jquery2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<style>
    body {
        font-family: Arial,Verdana;
    }
    /*div .container{*/
        /*border: solid 1px red*/
    /*}*/
    /*div .container-fluid .row{*/
        /*border: solid 1px red*/
    /*}*/
    p {
        margin: 0;
        padding: 0;
    }
</style>
@endsection