function toHome() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax(
        {
            type: 'POST',
            dataType:'json',
            url: '/ajax/admin/home',
            success: function (data) {
                var show = document.getElementById('show');
                show.innerHTML = data["homepage"];
            }
        });

}

function toPublish() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax(
        {
            type: 'POST',
            dataType:'json',
            url: '/ajax/admin/publish',
            success: function (data) {
                var show = document.getElementById('show');
                show.innerHTML = data['publish'];
                var mode = document.designMode;
                document.designMode = "on";
                $('#editor').wysiwyg();
            }
        });


}


