@section("sidebar")
<div class="row-fluid">
    <span class="colorful pull-left">天气</span>
    <span class="colorful pull-left">时间</span>
    <span class="colorful pull-right">用户</span>
</div>
<div class="clearfix"></div>
<div class="row-fluid">
    <div class="span12">
        <h3>后台管理系统</h3>
    </div>
</div>
<div class="row-fluid">
    <div class="span2 column ui-sortable">
        <ul class="nav nav-list">
            <li class="nav-header">
                内容发布
            </li>
            <li class="active">
                <a href="#" id="index" class="fa fa-home" onclick="javascript:toHome();">首页</a>
            </li>
            <li>
                <a href="#" id="lib"  class="fa fa-send" onclick="javascript:toPublish();">发布</a>
            </li>
            <li>
                <a href="#" id="app" class="fa fa-pencil" onclick="javascript:toModify();">修改</a>
            </li>
            <li class="nav-header">
                功能列表
            </li>
            <li>
                <a href="#" id="setting" class="fa fa-cog" onclick="javascript:toSetting();">设置</a>
            </li>
            <li class="divider">
            </li>
            <li>
                <a href="#" id="help"  class="fa fa-question" onclick="javascript:toHelp();">帮助</a>
            </li>
        </ul>
    </div>
</div>
 @endsection