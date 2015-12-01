@section('content')
{{--<div class="container">--}}
    {{--门户点--}}
    <div class="row">
        <?php $c=0;?>
        @if(isset($portals))
            @foreach($portals as $portal_chunk)
            {{--unit template--}}
                @if($c++<=3)
                    <div class="col-md-3" style="position: relative;display: inline-block;">
                        <ul style="padding:5px">
                            @foreach($portal_chunk as $portal )
                                <li><a href="{!! "/portal/".$portal->id !!}"><i class="fa fa-smile-o">{!! $portal->name !!}</i></a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @endforeach
        @else

        @endif
    </div>
    <!--    第一行-->
    <div class="row">
        <!--        新闻-->
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12" >
                            <ul class="demo1" >
                                @if(isset($articles[6]))
                                    <?php $weekarray=array("日","一","二","三","四","五","六");?>
                                    @foreach($articles[6] as $article)
                                        <li class="news-item">
                                            <table cellpadding="4">
                                                <tr>
                                                    <td>
                                                        <p style="color: darkred">{!! date('Y',strtotime($article->created_at)).'年'!!}</p>
                                                        <p style="color: orangered">{!! date('m',strtotime($article->created_at)).'月'.date('d',strtotime($article->created_at)).'日' !!}</p>
                                                        {{--{!! '星期'.$weekarray[date('w',strtotime($article->created_at))] !!}--}}
                                                    </td>
                                                    <td>
                                                        <h5>
                                                            <a href="#">{!! $article->title !!}</a>
                                                        </h5>
                                                        <p>{!! $article->intro !!}</p>
                                                    </td>

                                            </table>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <code>123</code>
                </div>
            </div>
        </div>
        {{--图片--}}
        {{--<div id="carousel-example-generic" class="carousel slide col-lg-4 col-md-4 col-sm-12" data-ride="carousel">--}}
            {{--<!-- Indicators -->--}}
            {{--<ol class="carousel-indicators">--}}
                {{--<li data-target="#carousel-example-generic" data-slide-to={!! $img_cnt or '0' !!} @if(1>0)class="active"@endif></li>--}}
            {{--</ol>--}}
            <!-- Wrapper for slides -->
            {{--<div class="carousel-inner" role="listbox">--}}
                {{--@for($i=0;$i<1;++$i)--}}
                    {{--<div class="item @if($i==0)active"@endif>--}}
                        {{--<img class="img-rounded"  src="{!! $img["url"] or "img/xys.jpg" !!}" alt="">--}}
                        {{--<div class="carousel-caption">--}}
                            {{--<h1>{!! $img_title or "外高桥保税区" !!}</h1>--}}
                            {{--<p>{!! $img["intro"] or "这是一段简介,最好不要少于十五字!" !!}</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endfor--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
<!--   第一行结束-->

<!--        第二行开始-->
{{--<div class="row">--}}
        {{--<!--        项目一-->--}}
    {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
        {{--<div class="panel panel-info">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title"></h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
                {{--<ul>--}}
                    {{--@if(isset($articles))--}}
                    {{--@for($i=0;$i<5;++$i)--}}
                    {{--<li>--}}
                        {{--<span style="font-weight: 800">{!! $articles[$i]->title or "default"!!}</span>--}}
                        {{--<span>{!! date('Y-m-d',$articles[$i]->cretated_at) !!}</span>--}}
                    {{--</li>--}}
                    {{--@endfor--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!--第二行结束-->
{{--</div>--}}
@endsection