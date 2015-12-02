@section('content')
    @if($positions)
    <div class="row">
        <!--postion 1-->
        <!--标签纵览 -->
        <div class="col-lg-6">
            <hr>
            <br/>
            <br/>
            <br/>
            <!--Horizontal Tab-->
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                    <li>门户介绍</li>
                </ul>
                <div class="resp-tabs-container hor_1">
                    <div>
                        <p>
                            <!--vertical Tabs-->
                        <div id="ChildVerticalTab_1">
                            <ul class="resp-tabs-list ver_1">
                                @foreach($portals as $portal)
                                <li>{!! $portal->name !!}</li>
                                @endforeach
                            </ul>
                            <div class="resp-tabs-container ver_1">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, lerisque commodo. Nam porta cursus lectusconsectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales sce. Proin nunc erat, gravida a facilisis quis, ornare id lectus</p>
                                </div>
                                <div>
                                    <p>Suspendisse blandit velit Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravid urna gravid eget erat suscipit in malesuada odio venenatis.</p>
                                </div>
                                <div>
                                    <p>d ut ornare non, volutpat vel tortor. InLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.t in malesuada odio venenatis.</p>
                                </div>
                            </div>
                        </div>
                        </p>
                        <div id="nested-tabInfo">
                        <p>Go:<i class="fa fa-link"><a href="{!! '/portal/'.$portal->id !!}"><span class="tabName"></span></a></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--postion 2-->
        <!--今日新闻-->
        @if(isset($positions[2]))
        <?php $id=$positions[2];?>
        <div class="col-lg-6">
            <section class="cd-horizontal-timeline">
                <div class="timeline">
                    <div class="events-wrapper">
                        <div class="events">
                            <ol>
                                <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                                <?php $c=0;?>
                                <?php if(isset($articles[$id])):?>
                                    <?php foreach($articles[$id] as $article):?>
                                        <li>
                                            <a href="#0" data-date="{!! date('d/m/Y',strtotime($article->created_at)) !!}" class="{!! $c<=0?'selected':'' !!}">
                                                {!! date('d',strtotime($article->created_at)).' '.date('M',strtotime($article->created_at)) !!}
                                            </a>
                                        </li>
                                        <?php $c++;?>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ol>
                            <span class="filling-line" aria-hidden="true"></span>
                        </div> <!-- .events -->
                    </div> <!-- .events-wrapper -->

                    <ul class="cd-timeline-navigation">
                        <li><a href="#0" class="prev inactive">Prev</a></li>
                        <li><a href="#0" class="next">Next</a></li>
                    </ul> <!-- .cd-timeline-navigation -->
                </div> <!-- .timeline -->

                <div class="events-content">
                    <ol>
                        <li class="selected" data-date="16/01/2014"></li>
                        <?php $c=0;?>
                        @if(isset($articles[$id]))
                            @foreach($articles[$id] as $article)
                                <li class="{!! $c<=0?'selected':'' !!}" data-date="{!! date('d/m/Y',strtotime($article->created_at)) !!}">
                                    <h2>{!! $article->title !!}</h2>
                                    <em>{!! $article->created_at !!}</em>
                                    <p>
                                       {!! $article->intro or null !!}
                                    </p>
                                </li>
                                <?php $c++;?>
                            @endforeach
                        @endif
                    </ol>
                </div> <!-- .events-content -->
            </section>
        </div>
        @endif
    </div>

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
                        <img class="img-rounded"  src="{!! $img["url"] or "img/xys.jpg" !!}" alt="">
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