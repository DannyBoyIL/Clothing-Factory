@extends('cms.cms_master')

@section('cms_content')

<!-- Main content -->
<div class="main-content">
    <h1 class="page-title">E-commerce</h1>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-default">
                <div class="panel-heading clearfix"> 
                    <div class="panel-title">Orders</div> 
                    <ul class="panel-tool-options"> 
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}" aria-expanded="false"><i class="icon-cog"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-list"></i> Detailed log</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-chart-pie"></i> Statistics</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-cancel"></i> Clear list</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> 
                <!-- panel body --> 
                <div class="panel-body">
                    <div class="stack-order"> 
                        <h1 class="no-margins">2,325</h1>
                        <small>Orders since 2016</small>
                    </div>
                    <div class="bar-chart-icon"></div>
                </div> 
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-default">
                <div class="panel-heading clearfix"> 
                    <div class="panel-title">Last month sale</div> 
                    <ul class="panel-tool-options"> 
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}" aria-expanded="false"><i class="icon-cog"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-list"></i> Detailed log</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-chart-pie"></i> Statistics</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-cancel"></i> Clear list</a></li>
                            </ul>
                        </li>
                    </ul> 
                </div> 
                <!-- panel body --> 
                <div class="panel-body"> 
                    <div class="stack-order">
                        <h1 class="no-margins">$87,003</h1>
                        <small>Raised from 89 orders.</small>
                    </div>
                    <div class="bar-chart-icon"></div>
                </div> 
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-default">
                <div class="panel-heading clearfix"> 
                    <div class="panel-title">This month visitors</div> 
                    <ul class="panel-tool-options"> 
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}" aria-expanded="false"><i class="icon-cog"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-list"></i> Detailed log</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-chart-pie"></i> Statistics</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-cancel"></i> Clear list</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> 
                <!-- panel body --> 
                <div class="panel-body"> 
                    <div class="stack-order">
                        <h1 class="no-margins">1307</h1>
                        <small>37 average daily visitors.</small>
                    </div>
                    <div class="bar-chart-icon"></div>
                </div> 
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-default">
                <div class="panel-heading clearfix"> 
                    <div class="panel-title">Customers</div> 
                    <ul class="panel-tool-options"> 
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}" aria-expanded="false"><i class="icon-cog"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-list"></i> Detailed log</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-chart-pie"></i> Statistics</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-cancel"></i> Clear list</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> 
                <!-- panel body --> 
                <div class="panel-body"> 
                    <div class="stack-order">
                        <h1 class="no-margins">759</h1>
                        <small>23 new customers this month</small>
                    </div>
                    <div class="bar-chart-icon"></div>
                </div> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel-group">
                <div class="panel panel-invert">
                    <div class="panel-heading no-border clearfix"> 
                        <h2 class="panel-title">Revenue</h2>
                        <ul class="panel-tool-options">
                            <li><a href="{{ url('cms/dashboard') }}" id="Revenuelines"><i class="icon-chart-line icon-2x"></i></a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ url('cms/dashboard') }}"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                    <li><a href="{{ url('cms/dashboard') }}"><i class="icon-list"></i> Detailed log</a></li>
                                    <li><a href="{{ url('cms/dashboard') }}"><i class="icon-chart-pie"></i> Statistics</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('cms/dashboard') }}"><i class="icon-cancel"></i> Clear list</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart float-chart-lg">
                            <div id="Revenue-lines" class="flot-chart-content"></div>
                        </div>
                        <div id="placeholder_overview" style="width:100%; height: 65px;"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <div class="panel-update-content">
                            <div class="row-revenue clearfix">
                                <div class="col-xs-6">
                                    <h5>Gross Revenue</h5>
                                    <h1>9,362.74</h1>
                                </div>
                                <div class="col-xs-6">
                                    <h5>Net Revenue</h5>
                                    <h1>6,734.89</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Latest Orders</h2>
                    <ul class="feed-item-list removeable-list">
                        <li>
                            <div class="feed-element">
                                <div class="feed-title">$340 on January 14, 2016</div>
                                <div class="feed-content">
                                    <p>2 T-Shirts, 1 Jeans</p>
                                </div>
                                <div class="feed-meta">By Jessica Williamson</div>
                            </div>
                            <div class="feed-footer">
                                <button class="btn btn-sm btn-primary">APPROVE</button>
                                <button class="btn btn-sm btn-red">DELETE</button>
                            </div>
                            <a class="remove" href="{{ url('cms/dashboard') }}"><img title="Remove" alt="Remove" src="{{ asset('lib/Mouldifi-4.2/light/images/icon-close.png') }}"></a>                            
                        </li>
                        <li>
                            <div class="feed-element">
                                <div class="feed-title">$340 on January 14, 2016</div>
                                <div class="feed-content">
                                    <p>2 T-Shirts, 1 Jeans</p>
                                </div>
                                <div class="feed-meta">By Jessica Williamson</div>
                            </div>
                            <div class="feed-footer">
                                <button class="btn btn-sm btn-primary">APPROVE</button>
                                <button class="btn btn-sm btn-red">DELETE</button>
                            </div>
                            <a class="remove" href="{{ url('cms/dashboard') }}"><img title="Remove" alt="Remove" src="{{ asset('lib/Mouldifi-4.2/light/images/icon-close.png') }}"></a>
                        </li>
                        <li>
                            <div class="feed-element">
                                <div class="feed-title">$340 on January 14, 2016</div>
                                <div class="feed-content">
                                    <p>2 T-Shirts, 1 Jeans</p>
                                </div>
                                <div class="feed-meta">By Jessica Williamson</div>
                            </div>
                            <div class="feed-footer">
                                <button class="btn btn-sm btn-primary">APPROVE</button>
                                <button class="btn btn-sm btn-red">DELETE</button>
                            </div>
                            <a class="remove" href="{{ url('cms/dashboard') }}"><img title="Remove" alt="Remove" src="{{ asset('lib/Mouldifi-4.2/light/images/icon-close.png') }}"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading no-border clearfix"> 
                    <h3 class="panel-title">VISIT STATS</h3>
                    <ul class="panel-tool-options"> 
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-list"></i> Detailed log</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-chart-pie"></i> Statistics</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-cancel"></i> Clear list</a></li>
                            </ul>
                        </li>
                    </ul> 
                </div> 
                <!-- panel body --> 
                <div class="panel-body"> 
                    <div class="canvas-chart has-doughnut-legend">
                        <canvas id="doughnutChart" height="325" width="365"></canvas>
                    </div>
                    <div class="height-15"></div>
                </div> 
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="speed-analyzer">
                                <div class="speed-analyzer-text">
                                    <h4>Download Speed Analyzer</h4>
                                    <p>Speed test run on different anlayzers including google and YSlow.</p>
                                </div>
                                <div class="speed-score">
                                    <strong class="score">82</strong>
                                    <span class="uppercase">Google Score</span>
                                </div>
                                <div class="speed-score">
                                    <strong class="score">73</strong>
                                    <span class="uppercase">YSlow Score</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading no-border clearfix"> 
                            <h2 class="panel-title">New Customers</h2>
                        </div>
                        <div class="panel-body">
                            <div class="carousel slide" id="carousel2">
                                <div class="carousel-inner">
                                    <div class="item gallery active">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="user-view">
                                                    <div class="user-avatar">
                                                        <img title="" alt="" class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/john-smith.png') }}">
                                                    </div>
                                                    <div class="user-detail">
                                                        <h5>John Smith</h5>
                                                        <p>Joined 15 mins ago.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="user-view">
                                                    <div class="user-avatar">
                                                        <img title="" alt="" class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/domnic-brown.png') }}">
                                                    </div>
                                                    <div class="user-detail">
                                                        <h5>Domnic Brown</h5>
                                                        <p>Joined 2 days ago.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="user-view">
                                                    <div class="user-avatar">
                                                        <img title="" alt="" class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/stella-johnson.png') }}">
                                                    </div>
                                                    <div class="user-detail">
                                                        <h5>Stella Johnson</h5>
                                                        <p>Joined 1 day ago.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="user-view">
                                                    <div class="user-avatar">
                                                        <img title="" alt="" class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/alex-dolgove.png') }}">
                                                    </div>
                                                    <div class="user-detail">
                                                        <h5>Alex Dolgove</h5>
                                                        <p>Joined 5 days ago.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item gallery">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="user-view">
                                                    <div class="user-avatar">
                                                        <img title="" alt="" class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/john-smith.png') }}">
                                                    </div>
                                                    <div class="user-detail">
                                                        <h5>John Smith</h5>
                                                        <p>Joined 15 mins ago.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="user-view">
                                                    <div class="user-avatar">
                                                        <img title="" alt="" class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/domnic-brown.png') }}">
                                                    </div>
                                                    <div class="user-detail">
                                                        <h5>Domnic Brown</h5>
                                                        <p>Joined 2 days ago.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="user-view">
                                                    <div class="user-avatar">
                                                        <img title="" alt="" class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/stella-johnson.png') }}">
                                                    </div>
                                                    <div class="user-detail">
                                                        <h5>Stella Johnson</h5>
                                                        <p>Joined 1 day ago.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="user-view">
                                                    <div class="user-avatar">
                                                        <img title="" alt="" class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/alex-dolgove.png') }}">
                                                    </div>
                                                    <div class="user-detail">
                                                        <h5>Alex Dolgove</h5>
                                                        <p>Joined 5 days ago.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-footer">
                                        <div class="carousel-controller">	
                                            <a data-slide="prev" href="#carousel2" class="btn-carousel"><i class="icon-left-open-big"></i></a>
                                            <a data-slide="next" href="#carousel2" class="btn-carousel"><i class="icon-right-open-big"></i></a>
                                        </div>
                                        <strong><a href="{{ url('cms/dashboard') }}" class="link uppercase">Show all</a></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading no-border clearfix"> 
                    <h2 class="panel-title">Most Popular Products</h2>
                </div>
                <div class="panel-body">
                    <div class="carousel slide" id="carousel3">
                        <div class="carousel-inner">
                            <div class="item gallery active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="product-view">
                                            <div class="product-thumb">
                                                <img title="" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/alarm.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <h5>BonZoid analog clocks</h5>
                                                <p>36 Items sold so far.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="product-view">
                                            <div class="product-thumb">
                                                <img title="" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/annual-book.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <h5>Novelty Office Folders</h5>
                                                <p>31 Items sold so far.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="product-view">
                                            <div class="product-thumb">
                                                <img title="" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/chocolate.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <h5>PrettyPink Bouquets &amp; Flowers</h5>
                                                <p>27 Items sold so far.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="product-view">
                                            <div class="product-thumb">
                                                <img title="" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/clock.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <h5>SmartPro Watches</h5>
                                                <p>13 Items sold so far.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item gallery">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="product-view">
                                            <div class="product-thumb">
                                                <img title="" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/running-shoe.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <h5>Denim Shoes &amp; Sandals</h5>
                                                <p>36 Items sold so far.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="product-view">
                                            <div class="product-thumb">
                                                <img title="" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/snooker.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <h5>Billiards Accessories</h5>
                                                <p>31 Items sold so far.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="product-view">
                                            <div class="product-thumb">
                                                <img title="" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/headphone.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <h5>HiEnd Headphones</h5>
                                                <p>27 Items sold so far.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="product-view">
                                            <div class="product-thumb">
                                                <img title="" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/camera.jpg') }}">
                                            </div>
                                            <div class="product-detail">
                                                <h5>VisioPro DSLR Camera</h5>
                                                <p>13 Items sold so far.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-footer">
                                <div class="carousel-controller">	
                                    <a data-slide="prev" href="#carousel3" class="btn-carousel"><i class="icon-left-open-big"></i></a>
                                    <a data-slide="next" href="#carousel3" class="btn-carousel"><i class="icon-right-open-big"></i></a>
                                </div>
                                <strong><a href="{{ url('cms/dashboard') }}" class="link uppercase">show all products</a></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading no-border clearfix"> 
                    <h2 class="panel-title">Site Traffic</h2>
                    <ul class="panel-tool-options">
                        <li><a href="{{ url('cms/dashboard') }}" id="lines"><i class="icon-chart-line icon-2x"></i></a></li>
                        <li><a href="{{ url('cms/dashboard') }}" id="bars"><i class="icon-chart-bar icon-2x"></i></a></li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-list"></i> Detailed log</a></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-chart-pie"></i> Statistics</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('cms/dashboard') }}"><i class="icon-cancel"></i> Clear list</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="flot-chart float-chart-md">
                        <div id="graph-lines" class="flot-chart-content"></div>
                        <div id="graph-bars" class="flot-chart-content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('inc.cms-footer')
</div>
<!-- /main content -->

@endsection