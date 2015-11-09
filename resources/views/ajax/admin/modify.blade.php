@section("modify")
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            {{--面包导航--}}
            <ul class="breadcrumb">
                <li>
                    <a href="#">主页</a> <span class="divider"></span>
                </li>
                <li class="active">
                    主题
                </li>
            </ul>
            {{--一行文集--}}
            <div class="row-fluid">
                <div class="span12">
                    <ul class="thumbnails">
                        {{--@foreach($all as $row):--}}
                        @yield("baron");
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="fa fa-image fa-2x"></i>
                                <div class="caption">
                                    <h3>
                                        冯诺尔曼结构
                                    </h3>
                                    <p>
                                        也称普林斯顿结构，是一种将程序指令存储器和数据存储器合并在一起的存储器结构。程序指令存储地址和数据存储地址指向同一个存储器的不同物理位置。
                                    </p>
                                    <p>
                                        <a class="btn btn-primary" href="#">浏览</a> <a class="btn" href="#">分享</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        {{--@endforeach--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
