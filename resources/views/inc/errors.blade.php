
@if( $errors && $errors->any())
<br>
<div class="alert alert-warning alert-dismissible costum-warning" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Warning!</strong>
    @foreach($errors->all() as $error)
    {{ $error }}<br>
    @endforeach
</div>
@endif



