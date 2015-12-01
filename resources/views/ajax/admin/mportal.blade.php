@section('mportal')
<ul class="nav nav-tabs">
    <li role="presentation" ><a href="javascript:toSetting();">基本设置</a></li>
    <li role="presentation" ><a href="javascript:setusr();">用户管理</a></li>
    <li role="presentation" class="active"><a href="javascript:setportal();">门户管理</a></li>
    <li class="pull-right">
        <form method="get">
            <div class="input-group">
                <input type="text" id=search name="search" value="" class="form-control" placeholder="按用户名搜索">
                     <span class="input-group-btn">
                        <button class="btn btn-primary form-control" type="button" onclick="javascript:setusr($('#search').val())">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
            </div>
            <div class="clearfix"></div>
        </form>
    </li>
</ul>
<div class="container-fluid" style="padding-top: 5px;padding-bottom: 15px">
    <div class="pull-left">
        <button class="btn btn-info" onclick="javascript:setportal();"><i class="fa fa-backward"></i>返回</button>
    </div>
    <div class="clearfix"></div>
</div>
<div class="container-fluid">
    {!! Form::open(['id'=>'save_user_form']) !!}
    <div class="form-group">
        {!! Form::label('null','门户名',['class'=>'text-primary']) !!}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-level-down"></i></span>
            {!! Form::text('name',isset($portal->name)?$portal->name:'出错啦!',['class'=>'form-control','readonly'=>'readonly','id'=>'modify_portal_name']) !!}
            <span class="input-group-btn">
                    <button type='button' id="pnb" onclick="javascript:rot('modify_portal_name','pnb');" class="btn btn-warning" value="">修改</button>
                </span>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('null','父级',['class'=>'text-primary']) !!}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-stack-overflow"></i></span>
            {!! Form::text('parent',isset($portal->parent)?$portal->parent:'出错啦!',['class'=>'form-control','readonly'=>'readonly','id'=>'modify_portal_email']) !!}
                <span class="input-group-btn">
                    <button id='ppb' type='button' class="btn btn-warning" onclick="javascript:rot('modify_portal_email','ppb');" value="">修改</button>
                </span>
        </div>
    </div>
    <button id='remove' type='button' class="btn btn-danger btn-block" onclick="javascrip:delp();" value="">删除</button>
    <button id='submit' type='button' class="btn btn-primary btn-block" onclick="javascrip:savep();" value="">提交</button>
    <input id="pk" type="hidden"  value="{!! $portal->id or 0 !!}">
    <input hidden="hidden" id="method" value="save-p">
    <input type="hidden" value="{!! csrf_token() !!}" id="token">
    {!! Form::close() !!}
</div>
@endsection