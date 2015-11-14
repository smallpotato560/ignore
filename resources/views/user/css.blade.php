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
<link href="../bootstrap/css/bootstrap-combined.min.css" rel="stylesheet">
<link href="master.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
{{--Bootstrap extends JS--}}
<script type="text/javascript" src="../bootstrap/js/jquery2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<!-- github.io delivers wrong content-type - but you may want to include FontAwesome in 'wysiwyg-editor.css' -->
<link rel="stylesheet" type="text/css" href="../public/css/wysiwyg-editor.min.css" />
<style>
    body {
        font-family: Arial,Verdana;
    }
    div{
        border: solid 1px #e0e0e0;
    }
    p {
        margin: 0;
        padding: 0;
    }
    .button {
        -moz-user-select: none;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
</style>
@endsection