@section('publish')
    <form method="post" action="/admin/sss">
        <label><h3><strong>发布到</strong></h3></label>
        选择发布到
        <div class="ui-tabs-selected">
            <select class="active">
                <option role="option" value="1">政务公开</option>
                <option value="2">最新要闻</option>
            </select>
        </div>

        {{--工具栏--}}
        <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
            {{--字体--}}
            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font">
                    <i class="fa fa-font"></i>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li>
                    <li><a data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li>
                    <li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li>
                    <li><a data-edit="fontName Arial Black" style="font-family:'Arial Black'">Arial Black</a></li>
                    <li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li>
                    <li><a data-edit="fontName Courier New" style="font-family:'Courier New'">Courier New</a></li>
                    <li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li>
                    <li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li>
                    <li><a data-edit="fontName Impact" style="font-family:'Impact'">Impact</a></li>
                    <li><a data-edit="fontName Lucida Grande" style="font-family:'Lucida Grande'">Lucida Grande</a></li>
                    <li><a data-edit="fontName Lucida Sans" style="font-family:'Lucida Sans'">Lucida Sans</a></li>
                    <li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li>
                    <li><a data-edit="fontName Times" style="font-family:'Times'">Times</a></li>
                    <li><a data-edit="fontName Times New Roman" style="font-family:'Times New Roman'">Times New Roman</a></li>
                    <li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li>
                </ul>
            </div>
            {{--字大小--}}
            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size">
                    <i class="fa fa-text-height"></i>
                    {{--&nbsp;--}}
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                    <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                    <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                </ul>
            </div>
            {{--加粗／斜体／直体／下划线 按钮--}}
            <div class="btn-group">
                <a class="btn" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)">
                    <i class="fa fa-bold"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)">
                    <i class="fa fa-italic"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="strikethrough" title="" data-original-title="Strikethrough">
                    <i class="fa fa-strikethrough"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="underline" title="" data-original-title="Underline (Ctrl/Cmd+U)">
                    <i class="fa fa-underline"></i>
                    &nbsp;
                </a>
            </div>
            {{--点列表/数字列表／按钮--}}
            <div class="btn-group">
                <a class="btn" data-edit="insertunorderedlist" title="" data-original-title="Bullet list">
                    <i class="fa fa-list-ul"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="insertorderedlist" title="" data-original-title="Number list">
                    <i class="fa fa-list-ol"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)">
                    <i class="fa fa-indent"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="indent" title="" data-original-title="Indent (Tab)">
                    <i class="fa fa-indent"></i>
                    &nbsp;
                </a>
            </div>
            {{--居左／居中／居右／自适应 按钮--}}
            <div class="btn-group">
                <a class="btn" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)">
                    <i class="fa fa-align-left"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)">
                    <i class="fa fa-align-center"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)">
                    <i class="fa fa-align-right"></i>
                    &nbsp;
                </a>
                <a class="btn btn-info" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)">
                    <i class="fa fa-align-justify"></i>
                    &nbsp;
                </a>
            </div>
            {{--添加URL--}}
            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink">
                    <i class="fa fa-link"></i>
                    &nbsp;
                </a>
                <div class="dropdown-menu input-append">
                    <input class="span2" placeholder="URL" type="text" data-edit="createLink">
                    <button class="btn" type="button">Add</button>
                </div>
                <a class="btn" data-edit="unlink" title="" data-original-title="Remove Hyperlink">
                    <i class="fa fa-cut"></i>
                    &nbsp;
                </a>
            </div>
            {{--插入图片--}}
            <div class="btn-group">
                <a class="btn" title="" id="pictureBtn" data-original-title="Insert picture (or just drag &amp; drop)">
                    <i class="fa fa-picture-o"></i>
                    &nbsp;
                </a>
                <a class="btn" title="" id="pictureBtn" data-original-title="Insert picture (or just drag &amp; drop)">
                    <i class="fa fa-file">
                        <input  type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" style="opacity: 0; position: absolute; top: 0px; left: 0px; width: 26px; height: 30px;">
                    </i>
                    &nbsp;
                </a>
            </div>
            {{--撤销／返回撤销前 按钮--}}
            <div class="btn-group">
                <a class="btn" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)">
                    <i class="fa fa-undo"></i>
                    &nbsp;
                </a>
                <a class="btn" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)">
                    <i class="fa fa-repeat"></i>
                    &nbsp;
                </a>
            </div>

            <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="" style="display: none;">
        </div>

        {{--编辑器内容输入框--}}
        <div id="editor" contenteditable="true">hell</div>

        {{--提交按钮--}}
        <input class="btn btn-primary btn-block" type="submit" value="提交">
    </form>
@endsection