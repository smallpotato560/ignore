@section("sidebar")

        <ul class="nav nav-list">
            <li class="nav-header">
                内容发布
            </li>
            <li class="active">
                <a href="#" id="index" class="fa fa-home" onclick="javascript:toHome();"><i><span style="font-size:16px;">首页</span></i></a>
            </li>
            <li>
                <a href="#" id="lib"  class="fa fa-send" onclick="javascript:toPublish();"><span>发布</span></a>
            </li>
            <li>
                <a href="#" id="app" class="fa fa-pencil" onclick="javascript:toModify();"><span>修改</span></a>
            </li>
            <li class="nav-header">
                功能列表
            </li>
            <li>
                <a href="#" id="setting" class="fa fa-cog" onclick="javascript:toSetting();"><span>设置</span></a>
            </li>
            <li class="divider">
            </li>
            <li>
                <a href="#" id="help"  class="fa fa-question" onclick="javascript:toHelp();"><span>帮助</span></a>
            </li>
        </ul>

 @endsection