@section('setting')
    <div class="row">
    {!! Form::open(["url"=>"/portal/create",'charset'=>'utf-8']) !!}
    <div class="form-group">
        {!! Form::label("null","门户点添加") !!}
        {!! Form::text("name",null) !!}
    </div>
    {!! Form::submit("提交") !!}
    {!! Form::close() !!}
    </div>
@endsection