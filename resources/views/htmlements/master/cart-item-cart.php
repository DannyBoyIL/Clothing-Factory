<!-- cart item-->
@if($cart)
@foreach($cart as $item)
<div class="dropdown-item cart-product">
    <div class="d-flex align-items-center">
        <div class="img">
            <img src="{{ asset('img/' . $item['attributes']['image']) }}" alt="..." class="img-fluid">
        </div>
        <div class="details d-flex justify-content-between">
            <div class="text"> 
                <a href="#">
                    <strong>{{ $item['name'] }}</strong>
                </a>
                <small>Quantity: {{ $item['quantity'] }}</small>
                <span class="price">${{ $item['price'] }}</span>
            </div>
            <div class="delete">
                <i class="fa fa-trash-o"></i>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif