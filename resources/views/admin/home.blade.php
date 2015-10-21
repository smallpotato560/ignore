<?php
/**
 * Created by PhpStorm.
 * User: 60194
 * Date: 2015/9/2
 * Time: 10:47
 */
?>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3>后台管理系统</h3>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3 column ui-sortable">
            <ul class="nav nav-list">
                <li class="nav-header">
                    内容发布
                </li>
                <li class="active">
                    <a href="#" id="index" onclick="javascript:toHome();">首页</a>
                </li>
                <li>
                    <a href="#" id="lib" onclick="javascript:toPublish();">发布</a>
                </li>
                <li>
                    <a href="#" id="app" onclick="javascript:toEdit();">修改</a>
                </li>
                <li class="nav-header">
                    功能列表
                </li>
                <li>
                    <a href="#" id="setting" onclick="javascript:toSetting();">设置</a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#" id="help" onclick="javascript:toHelp();">帮助</a>
                </li>
            </ul>
        </div>
        <div class="span9 column ui-sortable" id="show" style="overflow: auto">
            @yield('home')
        </div>
    </div>
</div>

</body>
</html>
