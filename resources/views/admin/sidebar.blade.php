@section("sidebar")
<div class="row-fluid">
    <span class="colorful pull-left">����</span>
    <span class="colorful pull-left">ʱ��</span>
    <span class="colorful pull-right">�û�</span>
</div>
<div class="clearfix"></div>
<div class="row-fluid">
    <div class="span12">
        <h3>��̨����ϵͳ</h3>
    </div>
</div>
<div class="row-fluid">
    <div class="span2 column ui-sortable">
        <ul class="nav nav-list">
            <li class="nav-header">
                ���ݷ���
            </li>
            <li class="active">
                <a href="#" id="index" class="fa fa-home" onclick="javascript:toHome();">��ҳ</a>
            </li>
            <li>
                <a href="#" id="lib"  class="fa fa-send" onclick="javascript:toPublish();">����</a>
            </li>
            <li>
                <a href="#" id="app" class="fa fa-pencil" onclick="javascript:toModify();">�޸�</a>
            </li>
            <li class="nav-header">
                �����б�
            </li>
            <li>
                <a href="#" id="setting" class="fa fa-cog" onclick="javascript:toSetting();">����</a>
            </li>
            <li class="divider">
            </li>
            <li>
                <a href="#" id="help"  class="fa fa-question" onclick="javascript:toHelp();">����</a>
            </li>
        </ul>
    </div>
</div>
 @endsection