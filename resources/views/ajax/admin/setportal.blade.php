@section('setportal')
    <ul class="nav nav-tabs">
        <li role="presentation" ><a href="javascript:toSetting();">基本设置</a></li>
        <li role="presentation"><a href="javascript:setusr();">用户管理</a></li>
        <li role="presentation" class="active"><a href="javascript:setportal();">门户管理</a></li>
        <li class="pull-right">
            <form>
                <div class="input-group">
                    <input type="text" id='search' name="search" value="" class="form-control" placeholder="按门户名搜索">
                     <span class="input-group-btn">
                        <button class="btn btn-primary form-control" type="button" onclick="javascript:setportal($('#search').val())">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <div class="clearfix"></div>
            </form>
        </li>
    </ul>
    <table class="table table-responsive table-striped">
        <thead>
        <th>ID</th>
        <th>门户名</th>
        <th>父级ID</th>
        <th>发布时间</th>
        <th>操作</th>
        </thead>
        <tbody>
        @if(isset($portals))
            @foreach($portals as $portal)
                <tr>
                    <td><span>{!! $portal->id or 'null' !!}</span></td>
                    <td><span>{!! $portal->name or 'null' !!}</span></td>
                     <td><span>{!! $portal->parent or 'null' !!}</span></td>
                    <td><span>{!! $portal->created_at or 'null' !!}</span></td>
                    <td><a href="javascript:mportal({!! $portal->id !!})">详情</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <?php $current=$portals->currentPage() ?>
    <?php $last = $portals->lastPage() ?>
    <?php $preview = $current-1>=1?'javascript:paginateportal('.($current-1).');':'javascript:void(0);' ?>
    <?php $next = $current+1<=$last?'javascript:paginateportal('.($current+1).');':'javascript:void(0);' ?>
    <div class="center-block text-center">
        <ul class="pagination">
            <li class="{!! ($current==1)?"disabled":'' !!}"><a href='{!! $preview !!}'>«</a></li>
            @for($page=1;$page<=$portals->lastPage();++$page)
                <li class="{!! ($current==$page)?"active":'' !!}">
                    <a href="javascript:paginateportal({!! $page or '' !!})">{!! $page or 1 !!}</a>
                </li>
            @endfor
            <li  class="{!! ($current==$last)?"disabled":'' !!}"><a href={!! $next !!}>»</a></li>
        </ul>
    </div>
@endsection