<html>
<head>
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap-wysiwyg.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery.hotkeys.js"></script>
</head>
<body>
    {{--<div class="container">--}}
        {{--{!! Form::open() !!}--}}
        {{--<div class="btn-toolbar"  data-role="editor-toolbar" data-target="#editor">--}}
               {{--<a class="btn btn-default" data-edit="bold">--}}
                   {{--<i class="fa fa-bold"></i>--}}
               {{--</a>--}}
            {{--<input style="display: none;" data-edit="inserttext" id="voiceBtn" x-webkit-speech="" type="text">--}}

        {{--</div>--}}


        {{--<div id="editor" data-role="editor" contenteditable="true">--}}
            {{--heloo!;--}}
        {{--</div>--}}
        {{--{!! Form::submit() !!}--}}
        {{--{!! Form::close() !!}--}}

    {{--</div>--}}
    {!! Form::open() !!}
    {!! Form::text('hell') !!}
    {!! Form::submit() !!}
    {!! Form::close() !!}

<script>
    var mode = document.designMode;
    document.designMode = "on";
    $('#editor').wysiwyg();
</script>
</body>
</html>