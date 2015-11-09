@section("error")
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li style="list-style: none">
                    <?php echo $error ?>
                </li>
            @endforeach
        </ul>
    @endif
@endsection