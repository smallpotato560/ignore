@section("info")
    <div class="row">
        <?php $email = session("email") ?>
            <span class="col-lg-offset-0 col-lg-3" style="border: solid 1px #e0e0e0;height: 100px;width:100px;text-align: center">Photo</span>
            <a class="col-lg-3"><i class="fa fa-user">{!! $email or "default" !!}</i></a>
            <div class="clearfix"></div>
    </div>
    <div class="row">
        <label class="text text-primary"><font>UserName</font></label>
        <p id="name" style="height: 24px;width: 500px;border: solid 1px #e0e0e0">Linus</p>
        <label class="text-primary"><font>UserRole</font></label>
        <p id="user-role" style="height: 24px;width: 500px;border: solid 1px #e0e0e0">Normal</p>
    </div>
@endsection