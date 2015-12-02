@section('publish')
        {{--工具栏--}}
        {!! Form::open(['url'=>'/admin/sss/'.(isset($article->id)?$article->id:''),'id'=>'publish_form','charset'=>'utf-8']) !!}
        <input type="hidden" value="{!! Session::get('id',null) !!}" name="Users_id">
        <div class="form-inline">
            <div class="form-group">
                <label class=""><h3><strong>发布到</strong></h3></label>
                <select name="Portal_id" class="form-control">
                    @if(isset($portals)&&!empty($portals))
                        @foreach($portals as $portal)
                        <option {!! (isset($article->Portal_id)&&$portal->id==$article->Portal_id)?'selected':'' !!}  value="{!! $portal->id or "0"!!}">{!! $portal->name or "" !!}</option>
                        @endforeach
                    @else
                        <option selected  value="0">暂无门户点</option>
                    @endif
                </select>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label(null,'标题',["class"=>"text-info"])!!}
            {!! Form::text('title',isset($article->title)?$article->title:null,["class"=>"form-control","placeholder"=>"标题","style"=>"padding:0px;",]) !!}
        </div>
        <div style="margin: 20px auto;">
            <textarea id="editor1" name="content"  placeholder="在这里输入正文...">
                {!! $article->content or '' !!}
            </textarea>
        </div>
        {{--提交按钮--}}
        @if(isset($portals)&&!empty($portals))
            {!! Form::submit('提交',['class'=>'btn btn-primary btn-block',]) !!}
        @else
            {!! Form::submit('不可用',['class'=>'btn btn-danger btn-block disabled','disabled'=>'disabled']) !!}
        @endif
        {!! Form::close() !!}
@endsection