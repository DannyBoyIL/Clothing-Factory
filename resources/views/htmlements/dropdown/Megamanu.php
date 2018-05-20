<!-- Megamenu-->
<li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Template<i class="fa fa-angle-down"></i></a>
    <div class="dropdown-menu megamenu">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-3"><strong class="text-uppercase">Home</strong>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('index') }}">Homepage 1</a></li>
                        </ul><strong class="text-uppercase">Shop</strong>
                        <ul class="list-unstyled">                                                   
                            <li><a href="{{ url('lib/hub/category') }}">Category - left sidebar</a></li>
                            <li><a href="{{ url('category-right') }}">Category - right sidebar</a></li>
                            <li><a href="{{ url('category-full') }}">Category - full width</a></li>
                            <li><a href="{{ url('detail') }}">Product detail</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3"><strong class="text-uppercase">Order process</strong>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('cart') }}">Shopping cart</a></li>
                            <li><a href="{{ url('checkout1') }}">Checkout 1 - Address</a></li>
                            <li><a href="{{ url('checkout2') }}">Checkout 2 - Delivery</a></li>
                            <li><a href="{{ url('checkout3') }}">Checkout 3 - Payment</a></li>
                            <li><a href="{{ url('checkout4') }}">Checkout 4 - Confirmation             </a></li>
                        </ul><strong class="text-uppercase">Blog</strong>
                        <ul class="list-unstyled">                                                   
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('post') }}">Post                                                                                           </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3"><strong class="text-uppercase">Pages</strong>
                        <ul class="list-unstyled">
                            <li><a href="{{ asset('contact.html') }}">Contact</a></li>
                            <li><a href="{{ url('about') }}">About us</a></li>
                            <li><a href="{{ url('text') }}">Text page</a></li>
                            <li><a href="{{ url('404') }}">Error 404</a></li>
                            <li><a href="{{ url('500') }}">Error 500</a></li>
                            <li>More coming soon                                                    </li>
                        </ul>
                    </div>
                    <div class="col-lg-3"><strong class="text-uppercase">Some more content</strong>
                        <ul class="list-unstyled">
                            <li><a href="#">Demo content</a></li>
                            <li><a href="#">Demo content</a></li>
                            <li><a href="#">Demo content</a></li>
                            <li><a href="#">Demo content</a></li>
                            <li><a href="#">Demo content</a></li>
                            <li><a href="#">Demo content</a></li>
                            <li><a href="#">Demo content</a></li>
                            <li><a href="#">Demo content</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row services-block">
                    <div class="col-xl-3 col-lg-6 d-flex">
                        <div class="item d-flex align-items-center">
                            <div class="icon"><i class="icon-truck text-primary"></i></div>
                            <div class="text"><span class="text-uppercase">Free shipping &amp; return</span><small>Free Shipping over $300</small></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 d-flex">
                        <div class="item d-flex align-items-center">
                            <div class="icon"><i class="icon-coin text-primary"></i></div>
                            <div class="text"><span class="text-uppercase">Money back guarantee</span><small>30 Days Money Back</small></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 d-flex">
                        <div class="item d-flex align-items-center">
                            <div class="icon"><i class="icon-headphones text-primary"></i></div>
                            <div class="text"><span class="text-uppercase">020-800-456-747</span><small>24/7 Available Support</small></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 d-flex">
                        <div class="item d-flex align-items-center">
                            <div class="icon"><i class="icon-secure-shield text-primary"></i></div>
                            <div class="text"><span class="text-uppercase">Secure Payment</span><small>Secure Payment</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center product-col hidden-lg-down"><a href="detail.html" class="product-image"><img src="{{ asset('lib/hub/img/shirt.png') }}" alt="..." class="img-fluid"></a>
                <h6 class="text-uppercase product-heading"><a href="detail.html">Lose Oversized Shirt</a></h6>
                <ul class="rate list-inline">
                    <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                </ul><strong class="price text-primary">$65.00</strong><a href="#" class="btn btn-template wide">Add to cart</a>
            </div>
        </div>
    </div>
</li>