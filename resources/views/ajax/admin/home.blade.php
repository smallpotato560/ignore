@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <h1>欢迎使用后台管理系统</h1>
            <div class="input-append date" id="datetimepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                <label for="datetimepicker">现在时间</label>
                <input size="16" type="text" value="12-02-2012" readonly>
                <span class="add-on"><i class="icon-th"></i></span>
            </div>
        </div>
    </div>
    <script> $('#datetimepicker').datetimepicker()</script>
@endsection