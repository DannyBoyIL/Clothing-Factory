<div id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                <span aria-hidden="true">
                    <i class="icon-close"></i>
                </span>
            </button>
        </div>
        @if($product)
        @foreach($product as $item)
        <div class="modal-body">
            <div class="row d-flex align-items-center">
                <div class="image col-lg-5">
                    <img src="{{ asset('img/' . $item['image']) }}" alt="..." class="img-fluid d-block">
                </div>
                <div class="details col-lg-7">
                    <h2>{{ $item['title'] }}</h2>
                    <ul class="price list-inline">
                        <li class="list-inline-item current">${{ $item['price'] }}</li>
                        <li class="list-inline-item original">$65.00</li>
                    </ul>
                    <p>{{ $item['article'] }}</p>

                    <!-- iteration -->
                    <div class="d-flex align-items-center">
                        <div class="quantity d-flex align-items-center">
                            <div class="dec-btn">-</div>
                            <input type="text" value="1" class="quantity-no">
                            <div class="inc-btn">+</div>
                        </div>
                        <!-- /enditeration -->

                        <!-- iteration -->
                        <select id="size" class="bs-select">
                            <option value="small">Small</option>
                            <option value="meduim">Medium</option>
                            <option value="large">Large</option>
                            <option value="x-large">X-Large</option>
                        </select>
                        <!-- /enditeration -->

                    </div>
                    <ul class="CTAs list-inline">
                        <li class="list-inline-item">
                            <a href="" class="btn btn-template wide">
                                <i class="fa fa-shopping-cart add-to-cart" data-id="{{ $item['id'] }}"></i>
<!--                                <input data-id="{{ $product['id'] }}" type="button" value="Add to Cart">-->
                            </a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="visit-product active btn-template-outlined wide"><i class="icon-search"></i>View Add to wishlist</a></li>
                    </ul>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
