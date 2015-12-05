@section('content')
    @if($positions)
    <div class="row">
        <!--postion 1-->
        <!--标签纵览 -->
        <div class="col-lg-12">
            <br>
            <!--Horizontal Tab-->
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                    <li>门户介绍</li>
                </ul>
                <div class="resp-tabs-container hor_1">
                    <div>
                        <p><!--vertical Tabs-->
                        <div id="ChildVerticalTab_1">
                            <ul class="resp-tabs-list ver_1">
                                @foreach($portals as $portal)
                                <li>{!! $portal->name !!}</li>
                                @endforeach
                            </ul>
                            <div class="resp-tabs-container ver_1">
                                <div>
                                    <p>今日要闻记录关于上海自由贸易区的当日热点</p>
                                </div>
                                <div>
                                    <p>图片新闻是以图片记录新闻的一种方式</p>
                                </div>
                                <div>
                                    <p>媒体眼中的上海自由贸易区</p>
                                </div>
                            </div>
                        </div>
                        </p>
                        <br/><br/><br/><br/><br/><br/><br/><br/>
                        <br/><br/><br/><br/><br/><br/><br/>
                        <br/><br/><br/><br/><br/><br/><br/>
                        <div id="nested-tabInfo">
                            <p>
                                <i class="fa fa-link">
                                    <a href="{!! '/portal/'.$portal->id !!}">
                                        <span class="tabName"></span>
                                    </a>
                                </i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <!--postion 3--->
        <!-- 新闻轮训-->
        @if(isset($positions[3]))
            <?php $id=$positions[3];?>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-list-alt"></span><b>媒体新闻</b></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12" >
                                <ul class="demo1" >
                                    @if(isset($articles[$id]))
                                        <?php $weekarray=array("日","一","二","三","四","五","六");?>
                                        @foreach($articles[$id] as $article)
                                            <li class="news-item">
                                                <table cellpadding="4">
                                                    <tr>
                                                        <td style="height:74px;min-width: 74px;">
                                                            <p style="color: darkred">{!! date('Y',strtotime($article->created_at)).'年'!!}</p>
                                                            <p style="color: orangered">{!! date('m',strtotime($article->created_at)).'月'.date('d',strtotime($article->created_at)).'日' !!}</p>
                                                            {!! '星期'.$weekarray[date('w',strtotime($article->created_at))] !!}
                                                        </td>
                                                        <td style="padding: 2px">
                                                            <br>
                                                        </td>
                                                        <td>
                                                            <h5>
                                                                <a href="{!!"/article/".$article->id !!}">{!! $article->title !!}</a>
                                                            </h5>
                                                            <p style="min-height: 120px;overflow: hidden">{!! $article->intro !!}</p>
                                                        </td>

                                                </table>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
        @endif
        <!--postion 4--->
        <!--图片轮训-->
         @if(isset($positions[4]))
        <div id="carousel-example-generic" class="carousel slide col-lg-6 col-md-6" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to={!! $img_cnt or '0' !!} @if(1>0)class="active"@endif></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @for($i=0;$i<1;++$i)
                    <div class="item @if($i==0)active"@endif>
                        <img class="img-rounded"  src="{!! $img["url"] or "img/jq.jpg" !!}" alt="">
                        <div class="carousel-caption">
                            <h1>{!! $img_title or "外高桥保税区" !!}</h1>
                            <p>{!! $img["intro"] or "这是一段简介,最好不要少于十五字!" !!}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
         @endif
    </div>
    @endif
@endsection