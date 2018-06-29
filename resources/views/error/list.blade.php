@if( $errors->any() )
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach( $errors->all() AS $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif