@section('muser')
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="javascript:toSetting();">基本设置</a></li>
            <li role="presentation"><a href="javascript:setusr();">用户管理</a></li>
            <li role="presentation"><a href="javascript:setportal();">门户管理</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('null','用户名',['class'=>'form-inline']) !!}
            {!! Form::text('name',null,['class'=>'form-inline']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('null','电子邮箱',['class'=>'form-inline']) !!}
            {!! Form::text('name',null,['class'=>'form-inline']) !!}
        </div>
        <div class="form-group">
            <select>
                <option>普通用户</option>
            </select>
        </div>
        {!! Form::close() !!}
    </div>
@endsection