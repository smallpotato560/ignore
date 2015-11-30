@section('setusr')
    <ul class="nav nav-tabs">
        <li role="presentation" ><a href="javascript:toSetting();">基本设置</a></li>
        <li role="presentation" class="active"><a href="javascript:setusr();">用户管理</a></li>
        <li role="presentation" ><a href="javascript:setportal();">门户管理</a></li>
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

    <table class="table table-responsive table-striped">
        <thead>
        <th>ID</th>
        <th>用户名</th>
        <th>电子邮件</th>
        <th>角色规则</th>
        <th>最近登录</th>
        <th>是否在线</th>
        <th>注册时间</th>
        <th>操作</th>
        </thead>
        <tbody>
        @if(isset($users))
            @foreach($users as $user)
                <tr>
                    <td><span>{!! $user->id or 'null' !!}</span></td>
                    <td><span>{!! $user->name or 'null' !!}</span></td>
                    <td><span>{!! $user->email or 'null' !!}</span></td>
                    <td><span>{!! $user->role or 'null' !!}</span></td>
                    <td><span>{!! $user->login_at or 'null' !!}</span></td>
                    <td> <span>{!! $user->login_at>$user->logout_at?'在线':'离线' !!}</span></td>
                    <td><span>{!! $user->created_at !!}</span></td>
                    <td> <a href="javascript:muser();">详情</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @if(isset($users))
    <?php $current=$users->currentPage() ?>
    <?php $last = $users->lastPage() ?>
    <?php $preview = $current-1>=1?'javascript:paginateusr('.($current-1).');':'javascript:void(0);' ?>
    <?php $next = $current+1<=$last?'javascript:paginateusr('.($current+1).');':'javascript:void(0);' ?>
    <div class="center-block text-center">
        <ul class="pagination">
            <li class="{!! ($current==1)?"disabled":'' !!}"><a href='{!! $preview !!}'>«</a></li>
            @for($page=1;$page<=$users->lastPage();++$page)
                <li class="{!! ($current==$page)?"active":'' !!}">
                    <a href="javascript:paginateusr({!! $page or '' !!})">{!! $page or 1 !!}</a>
                </li>
            @endfor
            <li  class="{!! ($current==$last)?"disabled":'' !!}"><a href={!! $next !!}>»</a></li>
        </ul>
    </div>
    @endif
@endsection