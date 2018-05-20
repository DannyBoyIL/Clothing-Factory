<div class="col-lg-4 form-group has-error">
    @if( $errors && $errors->any())
    <div class="order-summary form-control note-error">
        <h6 class="text-uppercase">Note!</h6>
        <ul class="order-menu list-unstyled">
            @foreach($errors->all() as $error)
            <li class="d-flex justify-content-between"><p>{{ $error }}</p></li>
            @endforeach
        </ul>
    </div>
    @else
    <div class="block-body order-summary">
        <h6 class="text-uppercase">Order Summary</h6>
        <p>Shipping and additional costs are calculated based on values you have entered</p>
        <ul class="order-menu list-unstyled">
            <li class="d-flex justify-content-between">
                <span>Order Subtotal </span>
                <strong>${{ Cart::getTotal() }}</strong>
            </li>
            <li class="d-flex justify-content-between">
                <span>Shipping and handling</span>
                <strong>$10.00</strong>
            </li>
            <li class="d-flex justify-content-between">
                <span>Tax</span>
                <strong>$0.00</strong>
            </li>
            <li class="d-flex justify-content-between">
                <span>Total</span>
                <strong class="text-primary price-total">${{ Cart::getTotal() + 10 }}</strong>
            </li>
        </ul>
    </div>
    @endif  
</div>