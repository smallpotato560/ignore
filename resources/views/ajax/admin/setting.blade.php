@section('setting')
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">基本设置</a></li>
        <li role="presentation"><a href="#">用户管理</a></li>
        <li role="presentation"><a href="#">门户管理</a></li>
    </ul>
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(["url"=>"/portal/create",'charset'=>'utf-8','id'=>'portal_form']) !!}
            <div class="form-group">
                <i class="fa fa-plus-circle" style="weight:25px;font-size: 18px"></i>
                {!! Form::label("null","门户点添加") !!}
                <div class="input-group">
                    {!! Form::text("name",null,['class'=>'form-control']) !!}
                    <div class="input-group-btn">
                        {!! Form::submit("添加",["class"=>"btn btn-default"]) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}

            {!! Form::open(["url"=>"/setting/create",'charset'=>'utf-8','id'=>'config_form']) !!}
            <div class="form-group">
                <i class="fa fa-tv" style="font-size: 18px;"></i>
                {!! Form::label("null","设置站点名") !!}
                <div class="input-group">
                    {!! Form::text("name",null,['class'=>'form-control']) !!}
                    <div class="input-group-btn">
                        {!! Form::submit("添加",["class"=>"btn btn-default"]) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        {!! Form::open(["url"=>"/admin/upload",'charset'=>'utf-8','id'=>'pic_form','class'=>"col-md-8"]) !!}
        <i class="fa fa-file-image-o" style="weight:25px;font-size: 18px"></i>
        {!! Form::label(null,'上传banner图片') !!}
            <input id="file-upload" type="file" class="file-preview-image" name='file' data-preview-file-type="text" >
        {!! Form::close() !!}
    </div>
@endsection