<!-- cart item-->
@if($products)
@foreach($products as $product)
<div class="dropdown-item cart-product">
    <div class="d-flex align-items-center">
        <div class="img">
            <img src="{{ asset('img/'. $product['image']) }}" alt="..." class="img-fluid">
        </div>
        <div class="details d-flex justify-content-between">
            <div class="text"> 
                <a href="#"><strong>{{ ltrim($product['title'], "Man -") }}</strong></a>
                <small>Quantity: 1</small>
                <span class="price">${{ $product['price'] }}</span>
            </div>
            <div class="delete"><i class="fa fa-trash-o"></i></div>
        </div>
    </div>
</div>
@endforeach
@endif

