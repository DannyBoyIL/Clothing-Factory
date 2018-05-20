<section class="categories">
    <div class="container">
        <header class="text-center">
            <h2 class="text-uppercase"><small>Top for this month</small>Our Featured Picks</h2>
        </header>
        <div class="row text-left">            
            @foreach($categories as $category)
            <div class="col-lg-4 categories">
                <a href="{{ url('shop/' . $category['url']) }}">
                    <div style="background-image: url({{ asset('img/' . $category['image'])}});" class="item d-flex align-items-end">
                        <div class="content">
                            <h3 class="h5">{{ $category['title'] }}</h3>
                            <span>New Collection</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>