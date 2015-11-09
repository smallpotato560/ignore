@section("css")
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ����3��meta��ǩ*����*������ǰ�棬�κ��������ݶ�*����*������� -->
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>后台管理页面</title>
<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-combined.min.css" rel="stylesheet">
<link href="master.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
{{--Bootstrap extends JS--}}
<script type="text/javascript" src="bootstrap/js/jquery2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/wysiwyg.min.js"></script>
<script type="text/javascript" src="public/js/wysiwyg-editor.min.js"></script>
<script type="text/javascript" src="public/js/coolclock.js"></script>
<!-- github.io delivers wrong content-type - but you may want to include FontAwesome in 'wysiwyg-editor.css' -->
<link rel="stylesheet" type="text/css" href="public/css/wysiwyg-editor.min.css" />
<style>
    body {
        font-family: Arial,Verdana;
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
    /* CSS for the font-name + font-size plugin */
    .wysiwyg-plugin-list {
        max-height: 16em;
        overflow: auto;
        overflow-x: hidden;
        overflow-y: scroll;
    }
    .wysiwyg-plugin-list a,
    .wysiwyg-plugin-list a:link,
    .wysiwyg-plugin-list a:visited {
        display: block;
        color: black;
        padding: 5px 10px;
        text-decoration: none;
        cursor: pointer;
    }
    .wysiwyg-plugin-list a:hover {
        color: HighlightText;
        background-color: Highlight;
    }
    /* CSS for the smiley plugin */
    .wysiwyg-plugin-smilies {
        padding: 10px;
        text-align: center;
        white-space: normal;
    }
    .wysiwyg-plugin-smilies img {
        display: -moz-inline-stack; /* inline-block: http://blog.mozilla.org/webdev/2009/02/20/cross-browser-inline-block/ */
        display: inline-block;
        *display: inline;
    }
    /* Fake bootstrap + uikit */
    .fake-bootstrap.wysiwyg-container.wysiwyg-active {
        /* colors shamelessly stolen from bootstrap.form-control:focus */
        border-color: #66afe9;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6)
    }
    .fake-uikit.wysiwyg-container.wysiwyg-active {
        border-color: #99baca !important;
        background: #f5fbfe !important;
    }
</style>
<script src="master.js"></script>
@endsection