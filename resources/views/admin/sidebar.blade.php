@section("sidebar")
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation"  class="active">
            <a href="#" id="index" class="fa fa-home" onclick="javascript:toHome();"><span>首页</span></a>
        </li>
        <li role="presentation">
            <a href="#" id="lib"  class="fa fa-send" onclick="javascript:toPublish();"><span>发布</span></a>
        </li>
        <li role="presentation">
            <a href="#" id="app" class="fa fa-pencil" onclick="javascript:toModify();"><span>修改</span></a>
        </li>
        <li role="presentation">
            <a href="#" id="setting" class="fa fa-cog" onclick="javascript:toSetting();"><span>设置</span></a>
        </li>
        <li role="presentation">
            <a href="#" id="help"  class="fa fa-question" onclick="javascript:toHelp();"><span>帮助</span></a>
        </li>
    </ul>
 @endsection