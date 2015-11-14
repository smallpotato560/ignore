@section('publish')

        {{--工具栏--}}
        {!! Form::open(['url'=>'/admin/sss','id'=>'myform','charset'=>'utf-8']) !!}
        <div class="form-inline">
            <div class="form-group">
                <label class=""><h3><strong>发布到</strong></h3></label>
                <select name="parent" class="form-control">
                    <option slected  value="1">政务公开</option>
                    <option value="2">最新要闻</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label(null,'标题',["class"=>"text-info"])!!}
            {!! Form::text('title',null,["class"=>"form-control","placeholder"=>"标题","style"=>"padding:0px;"]) !!}
        </div>
        <div style="margin: 20px auto;">
            <textarea id="editor1" name="content"  placeholder="在这里输入正文..."></textarea>
        </div>
        {{--提交按钮--}}
        {!! Form::submit('提交',['class'=>'btn btn-primary btn-block',]) !!}
        {!! Form::close() !!}
@endsection