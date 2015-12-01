@section('muser')
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li role="presentation" ><a href="javascript:toSetting();">基本设置</a></li>
            <li role="presentation" class="active"><a href="javascript:setusr();">用户管理</a></li>
            <li role="presentation"><a href="javascript:setportal();">门户管理</a></li>
        </ul>
    </div>
    <div class="container-fluid" style="padding-top: 5px;padding-bottom: 15px">
    <div class="pull-left">
        <button class="btn btn-info" onclick="javascript:setusr();"><i class="fa fa-backward"></i>返回</button>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="container-fluid">
        {!! Form::open(['id'=>'save_user_form']) !!}
        <div class="form-group">
            {!! Form::label('null','用户名',['class'=>'text-primary']) !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {!! Form::text('name',isset($user->name)?$user->name:'出错啦!',['class'=>'form-control','readonly'=>'readonly','id'=>'modify_user_name']) !!}
                <span class="input-group-btn">
                    <button type='button' id="ub" onclick="javascript:rot('modify_user_name','ub');" class="btn btn-warning" value="">修改</button>
                </span>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('null','电子邮箱',['class'=>'text-primary']) !!}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-google"></i></span>
                {!! Form::email('name',isset($user->email)?$user->email:'出错啦!',['class'=>'form-control','readonly'=>'readonly','id'=>'modify_user_email']) !!}
                <span class="input-group-btn">
                    <button id='eb' type='button' class="btn btn-warning" onclick="javascript:rot('modify_user_email','eb');" value="">修改</button>
                </span>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('null','账户规则',['class'=>'text-primary']) !!}
            <select id='role' name='role' class="form-control">
                <option {!! isset($user->role)&&$user->role==5?'selected':'' !!} value="5">普通账户</option>
                <option {!! isset($user->role)&&$user->role==1?'selected':'' !!} value="1">管理账户</option>
                <option {!! isset($user->role)&&$user->role==3?'selected':'' !!} value="3">企业账户</option>
                <option {!! isset($user->role)&&$user->role==2?'selected':'' !!} value="2">政府账户</option>
                <option {!! isset($user->role)&&$user->role==4?'selected':'' !!} value="4">媒体账户</option>
            </select>
        </div>

        <button id='submit' type='button' class="btn btn-primary btn-block" onclick="javascrip:saveu();" value="">提交</button>
        <input id="uk" type="hidden"  value="{!! $id or 0 !!}">
        <input hidden="hidden" id="method" value="save-u">
        <input type="hidden" value="{!! csrf_token() !!}" id="token">
        {!! Form::close() !!}
    </div>
@endsection