@section('setting')
    <div class="row">
        <div class="col-md-5">
            {!! Form::open(["url"=>"/portal/create",'charset'=>'utf-8','id'=>'portal_form']) !!}
            <div class="form-group">
                <i class="fa fa-plus-circle" style="weight:25px;font-size: 18px"></i>
                {!! Form::label("null","门户点添加") !!}
                {!! Form::text("name",null) !!}
                {!! Form::submit("add",["class"=>"btn btn-default"]) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(["url"=>"/setting/create",'charset'=>'utf-8','id'=>'config_form']) !!}
            <div class="form-group">
                <i class="fa fa-tv" style="font-size: 18px;"></i>
                {!! Form::label("null","设置站点名") !!}
                {!! Form::text("name",null) !!}
                {!! Form::submit("add",["class"=>"btn btn-default"]) !!}
            </div>
            {!! Form::close() !!}
        </div>

        <div class="">
            <table>
                <tbody>
                <tr>
                    <td><a  class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                    <td><a  class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                    <td><a  class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                </tr>
                <tr>
                    <td><a  class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                    <td><a  class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                    <td><a  class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                </tr>
                <tr>
                    <td><a class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                    <td><a class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                    <td><a class="btn btn-default" href="#">超大按钮<br>沉醉了没</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection