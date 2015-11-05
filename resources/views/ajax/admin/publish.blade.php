@section('publish')
        <label><h3><strong>发布到</strong></h3></label>
        选择发布到
        <div class="ui-tabs-selected">
            <select class="active">
                <option role="option" value="1">政务公开</option>
                <option value="2">最新要闻</option>
            </select>
        </div>
        {{--工具栏--}}
        {!! Form::open(['url'=>'/admin/sss','id'=>'myform','charset'=>'utf-8']) !!}
        <div style="margin: 30px auto;">
            <textarea id="editor1" name="editor"  placeholder="Type your text here..."></textarea>
        </div>
        {{--提交按钮--}}
        {!! Form::submit('提交',['class'=>'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
@endsection