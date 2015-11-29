@section("sidebar")
    <ul class="nav nav-stacked">
        <li role="presentation"  name='menu' class="active">
            <a href="#" id="index" class="fa fa-home" onclick="javascript:toHome();"><span>首页</span></a>
        </li>
        <li role="presentation">
            <a href="#" id="pub"  name='menu' class="fa fa-send" onclick="javascript:toPublish();"><span>发布</span></a>
        </li>
        <li role="presentation">
            <a href="#" id="app" name='menu' class="fa fa-pencil" onclick="javascript:toModify();"><span>修改</span></a>
        </li>
        <li role="presentation">
            <a href="#" id="setting" name='menu' class="fa fa-cog" onclick="javascript:toSetting();"><span>设置</span></a>
        </li>
        <li role="presentation">
            <a href="#" id="help"  name='menu' class="fa fa-question" onclick="javascript:toHelp();"><span>帮助</span></a>
        </li>
    </ul>
 @endsection