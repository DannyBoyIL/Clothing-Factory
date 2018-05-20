
<div class="container">
    <div class="row">
        <!-- Grid -->
        <div class="products-grid col-12 sidebar-none">
            <header class="d-flex justify-content-between align-items-start"><span class="visible-items">Showing <strong>1-15 </strong>of <strong>158 </strong>results</span>
                <select id="sorting" class="bs-select">
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                    <option value="lowest-price">Low Price</option>
                    <option value="heigh-price">High Price</option>
                </select>
            </header>
            <div class="row">
                <!--item-->

                @if($categories)
                @foreach($categories as $category)
                <div class="item col-xl-3 col-lg-4 col-md-6">
                    <div class="product is-gray">
                        <div class="image d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/' . $category['image'])}}" alt="product" class="img-fluid">
                            <div class="hover-overlay d-flex align-items-center justify-content-center">
                                <div class="CTA d-flex align-items-center justify-content-center">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="{{ asset('detail') }}"  class="visit-product active"><i class="icon-search"></i>View</a>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="title"><small class="text-muted">Men Wear</small>
                            <a href="{{ asset('detail') }}" ><h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a>
                            <span class="price text-muted">$40.00</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
            <nav aria-label="page navigation example" class="d-flex justify-content-center">
                <ul class="pagination pagination-custom">
                    <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                    <li class="page-item"><a href="#" class="page-link active">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
                </ul>
            </nav>
        </div>
        <!-- / Grid End-->
    </div>
</div>
<!-- Brands Section-->
