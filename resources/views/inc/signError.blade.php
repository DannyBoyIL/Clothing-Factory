<div class="col-lg-4 form-group has-error">
    @if( $errors && $errors->any())
    <div class="order-summary form-control note-error">
        <h4 class="text-uppercase">Note!</h4>
        <ul class="order-menu list-unstyled">
            @foreach($errors->all() as $error)
            <li class="d-flex justify-content-between"><p>{{ $error }}</p></li>
            @endforeach
        </ul>
    </div>
    @else
    <div class="block-body order-summary  form-control">
        <img src="{{ asset('img/blog-avatar.jpg') }}" alt="product" class="img-fluid">
    </div>
    @endif
</div>