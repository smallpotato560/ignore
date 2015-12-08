@section("modify")
    {{--一行文集--}}
    {{--@foreach($all as $article)--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-9 col-md-9">--}}
            {{--<div class="thumbnail">--}}
                {{--<div class="caption">--}}
                    {{--<h3 style="max-height: 25px;overflow: hidden">{!! $article->title or "default" !!}</h3>--}}
                    {{--<p>{!! $article->intro or "" !!}</p>--}}
                    {{--<p><a href="#" class="btn btn-primary" role="button">修改</a>--}}
                        {{--<a href="{!! '/article/'.$article->id or '#' !!}}" class="btn btn-default" role="button">详情</a></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
        <table class="table table-responsive table-striped col-md-6 col-lg-6">
            <thead>
                <th>ID</th>
                <th>发布者</th>
                <th>标题</th>
                <th>发布时间</th>
                <th>操作</th>
            </thead>
            <tbody>
            @foreach($all as $article)
                <tr>
                    <td>{!! $article->id or "default" !!}</td>
                    <td>{!! $article->name or "default" !!}</td>
                    <td>{!! $article->title or "default" !!}</td>
                    <td>{!! $article->created_at or "default" !!}</td>
                    <td><a href='{!! '/article/'.$article->id!!}'>详情</a>/<a href='{!! 'javascript:publish('.$article->id.');'!!}'>修改</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <?php $current=$all->currentPage() ?>
        <?php $last = $all->lastPage() ?>
        <?php $preview = $current-1>=1?'javascript:paginate('.($current-1).');':'javascript:void(0);' ?>
        <?php $next = $current+1<=$last?'javascript:paginate('.($current+1).');':'javascript:void(0);' ?>
        <div class="center-block text-center">
            <ul class="pagination">
                <li class="{!! ($current==1)?"disabled":'' !!}"><a href='{!! $preview !!}'>«</a></li>
                @for($page=1;$page<=$all->lastPage();++$page)
                    <li class="{!! ($current==$page)?"active":'' !!}">
                        <a href="javascript:paginate({!! $page or '' !!})">{!! $page or 1 !!}</a>
                    </li>
                @endfor
                <li  class="{!! ($current==$last)?"disabled":'' !!}"><a href={!! $next !!}>»</a></li>
            </ul>
        </div>
@endsection
