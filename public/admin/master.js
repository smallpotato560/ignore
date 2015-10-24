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
                if(data) {
                    console.log(data);
                    show.innerHTML = data['content'];
                } else {

                    console.log('failed!');
                }
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
                if(data) {
                    console.log(data);
                    show.innerHTML = data['publish'];
                } else {

                    console.log('failed!');
                }
            }
        });

}

