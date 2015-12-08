<html>
<head>
    @yield("css")
</head>
<body>
   @yield('nav')
    <div class="container">
        @yield("info")
    </div>
<script>
    function unlike(aid){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
                {
                    type: 'get',
                    dataType:'json',
                    url: '/ajax/user/like',
                    data:{
                        'Article_id':aid,
                    },
                    success: function (data) {

                    }
                });
    }

    function muser(id){
        $.ajax(
                {
                    type: 'patch',
                    dataType:'json',
                    url: '/ajax/admin/muser',
                    data:{'id':id},
                    success: function (data) {
                        var e=document.getElementById("show");
                        e.innerHTML=data["muser"];
                    }
                });
    }
    //read-only triggle
    function rot(id,bid){
        var button =  document.getElementById(bid);
        var text = $('#'+id);
        if(text.attr('readonly')){
            text.removeAttr('readonly');
            button.innerHTML='完成';

        }else{
            text.attr('readonly','readonly');
            button.innerHTML='修改';
        }
    }

    function savep() {
        var username = $('#modify_user_name');
        var useremail =$('#modify_user_email');
        var method = $('#method');
        var token=$('#token');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
                {
                    type: 'POST',
                    dataType:'json',
                    url: '/ajax/admin/save',
                    data:{
                        'name':username.val(),
                        'email':useremail.val(),
                        'method':method.val(),
                        '_token':token.val(),
                    },
                    success: function (data) {
                        alert(data);
                    }
                });
    }

    function saveu() {
        var username = $('#modify_user_name');
        var useremail =$('#modify_user_email');
        var method = $('#method');
        var token=$('#token');
        var id=$('#uk');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
                {
                    type: 'POST',
                    dataType:'json',
                    url: '/ajax/user/save',
                    data:{
                        'id':id.val(),
                        'name':username.val(),
                        'email':useremail.val(),
                        'method':method.val(),
                        '_token':token.val(),
                    },
                    success: function (data) {
                        alert(data['msg']);
                    }
                });
    }
</script>
</body>
</html>