@extends('cms.cms_master')

@section('cms_content')

<!-- Secondary header -->
<div class="header-secondary row">
    <div class="col-lg-12">
        <div class="page-heading clearfix">
            <h1 class="page-title pull-left">Category</h1>
            <a href="{{ url('cms/category/create') }}" class="btn btn-primary btn-sm btn-add" type="button">Add New</a>
        </div>
        <!-- Breadcrumb -->
        <ol class="breadcrumb breadcrumb-2"> 
            <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>CMS</a></li> 
            <li><span>Category</span></li> 
            <li class="active"><strong>Categories</strong></li> 
        </ol>
        <div class="tab-wrapper clearfix">
            <ul class="nav nav-pills nav-icons pull-right">
                <li class="active" role="presentation"><a href="{{ url('cms/category') }}"><i class="icon-layout"></i></a></li>
                <li class="active" role="presentation"><a href="{{ url('cms/category') }}"><i class="icon-list"></i></a></li>
                <li role="presentation"><a href="{{ url('cms/category') }}" class="toggle-filter" data-block-id="filter-box"><i class="fa fa-filter"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /secondary header -->

<!-- Filter wrapper -->
<div class="row filter-wrapper visible-box" id="filter-box">
    <div class="col-lg-12">
        <div class="filter-header">
            <button aria-label="Close" class="close toggle-filter" type="button" data-block-id="filter-box"><i class="icon-cancel"></i></button>
            <h3 class="title">Filter Members</h3>
        </div>
        <form class="form-inline">
            <div class="form-group">
                <label class="form-label">Keywords</label>
                <input type="text" placeholder="Separate by commas..." class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">Member Since</label>
                <select class="select2 form-control">
                    <option>2008</option>
                    <option>2009</option>
                    <option>2015</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">User Roles</label>
                <div class="checkbox-group">
                    <div class="checkbox checkbox-replace">
                        <input type="checkbox" id="admin">
                        <label for="admin">Admin</label>
                    </div>
                    <div class="checkbox checkbox-replace">
                        <input type="checkbox" id="operator">
                        <label for="operator">Operator</label>
                    </div>
                    <div class="checkbox checkbox-replace">
                        <input type="checkbox" id="customer">
                        <label for="customer">Customer</label>
                    </div>
                </div>
            </div>
            <div class="form-group filter-btn">
                <button class="btn btn-default">Filter</button>
            </div>
        </form>
    </div>
</div>
<!-- /filter wrapper -->



<!-- Main content -->
<div class="main-content">

    <!-- List header -->
    <div class="row datatable-wrapper form-inline">
        <div class="col-lg-12">
            <div class="data-col-first clearfix">
                <div class="col-checkbox">
                    <div class="form-checkbox">
                        <input type="checkbox" value="" name=""> <span class="check"><i class="fa fa-check"></i></span>
                    </div>
                </div>
                <div class="col-selectbox">
                    <select class="form-control input-sm">
                        <option>Bulk Action</option>
                        <option>Bulk Action</option>
                        <option>Bulk Action</option>
                    </select>&nbsp;
                    <button class="btn btn-primary btn-sm">Go</button>
                </div>
            </div>
            <div class="data-col-last clearfix">
                <div class="col-selectbox">
                    <select class="form-control input-sm">
                        <option>Sort By</option>
                        <option>Sort By</option>
                        <option>Sort By</option>
                    </select>
                </div>
                <div class="col-selectbox">
                    <select class="form-control input-sm">
                        <option>25 Records</option>
                        <option>10 Records</option>
                        <option>50 Records</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- /list header -->


    <div class="row">
        @if( $category )
        <div class="col-md-12">

            <!-- Card grid view -->
            <div class="cards-container box-view grid-view">
                <div class="row">						
                    @foreach( $category as $item )
                    <div class="col-lg-3 col-sm-6 ">
                        <!-- Card * 4 -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header">
                                <div class="card-photo">
                                    <img class="img-circle avatar" src="{{ asset('img/' . $item['image'])}}" alt="{{ $item['title'] }}" title="{{ $item['title'] }}">
                                </div>
                                <div class="card-short-description">
                                    <h5><span class="user-name"><a href="{{ url('cms/product') }}">{{ $item['title'] }}</a></span></h5>
                                    <p><span class="badge badge-primary">{{ date('H:i:s | d/m/Y',strtotime($item['updated_at'])) }}</span></p>
                                </div>
                            </div>
                            <!-- /card header -->

                            <!-- Card content -->
                            <div class="card-content">
                                <p>{!! $item['article'] !!}</p>
                            </div>
                            <!-- /card content -->

                            <!-- Card footer -->
                            <div class="card-footer clearfix">
                                <ul class="list-inline">
                                    <li><a href="{{ url('cms/category/' . $item['id'] . '/edit') }}"><i class="icon-pencil"></i></a></li>
                                    <li><a href="{{ url('cms/category/' . $item['id']) }}"><i class="icon-trash"></i></a></li>
                                    <li class="pull-right dropup">
                                        <a href="{{ url('cms/category') }}" data-toggle="dropdown"><i class="icon-dot-3 icon-more"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Change Setting</a></li>
                                            <li><a href="">View Products</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- /card footer -->

                        </div>
                        <!-- /card * 4 -->
                    </div>
                    @endforeach
                </div>
<!--                <div class="row">						
                    <div class="col-lg-3 col-sm-6 ">

                         Card 
                        <div class="card">

                             Card header 
                            <div class="card-header">
                                <div class="card-photo">
                                    <img class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/man-3.jpg') }}" alt="John Smith" title="John Smith">
                                </div>
                                <div class="card-short-description">
                                    <h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
                                    <p><span class="badge badge-primary">Agent</span></p>
                                </div>
                            </div>
                             /card header 

                             Card content 
                            <div class="card-content">
                                <p>Hi, This is my short intro text. Lorem ipsum is a dummy content sit dollar. You can copy and paste this dummy content from anywhere and to anywhere. Its all free and must be a good to folllow in prectice</p>
                            </div>
                             /card content 

                             Card footer 
                            <div class="card-footer clearfix">
                                <ul class="list-inline">
                                    <li><a href="#/"><i class="icon-pencil"></i></a></li>
                                    <li><a href="#/"><i class="icon-trash"></i></a></li>
                                    <li class="pull-right dropup">
                                        <a href="#/" data-toggle="dropdown"><i class="icon-dot-3 icon-more"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Change Setting</a></li>
                                            <li><a href="">View Profile</a></li>
                                            <li><a href="">Send Message</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                             /card footer 

                        </div>
                         /card 

                    </div>
                    <div class="col-lg-3 col-sm-6 ">

                         Card 
                        <div class="card">

                             Card header 
                            <div class="card-header">
                                <div class="card-photo">
                                    <img class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/man-3.jpg') }}" alt="John Smith" title="John Smith">
                                </div>
                                <div class="card-short-description">
                                    <h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
                                    <p><span class="badge badge-primary">Agent</span></p>
                                </div>
                            </div>
                             /card header 

                             Card content 
                            <div class="card-content">
                                <p>Hi, This is my short intro text. Lorem ipsum is a dummy content sit dollar. You can copy and paste this dummy content from anywhere and to anywhere. Its all free and must be a good to folllow in prectice</p>
                            </div>
                             /card content 

                             Card footer 
                            <div class="card-footer clearfix">
                                <ul class="list-inline">
                                    <li><a href="#/"><i class="icon-pencil"></i></a></li>
                                    <li><a href="#/"><i class="icon-trash"></i></a></li>
                                    <li class="pull-right dropup">
                                        <a href="#/" data-toggle="dropdown"><i class="icon-dot-3 icon-more"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Change Setting</a></li>
                                            <li><a href="">View Profile</a></li>
                                            <li><a href="">Send Message</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                             /card footer 

                        </div>
                         /card 

                    </div>
                    <div class="col-lg-3 col-sm-6 ">

                         Card 
                        <div class="card">

                             Card header 
                            <div class="card-header">
                                <div class="card-photo">
                                    <img class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/man-3.jpg') }}" alt="John Smith" title="John Smith">
                                </div>
                                <div class="card-short-description">
                                    <h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
                                    <p><span class="badge badge-primary">Agent</span></p>
                                </div>
                            </div>
                             /card header 

                             Card content 
                            <div class="card-content">
                                <p>Hi, This is my short intro text. Lorem ipsum is a dummy content sit dollar. You can copy and paste this dummy content from anywhere and to anywhere. Its all free and must be a good to folllow in prectice</p>
                            </div>
                             /card content 

                             Card footer 
                            <div class="card-footer clearfix">
                                <ul class="list-inline">
                                    <li><a href="#/"><i class="icon-pencil"></i></a></li>
                                    <li><a href="#/"><i class="icon-trash"></i></a></li>
                                    <li class="pull-right dropup">
                                        <a href="#/" data-toggle="dropdown"><i class="icon-dot-3 icon-more"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Change Setting</a></li>
                                            <li><a href="">View Profile</a></li>
                                            <li><a href="">Send Message</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                             /card footer 

                        </div>
                         /card 

                    </div>
                    <div class="col-lg-3 col-sm-6 ">

                         Card 
                        <div class="card">

                             Card header 
                            <div class="card-header">
                                <div class="card-photo">
                                    <img class="img-circle avatar" src="{{ asset('lib/Mouldifi-4.2/light/images/man-3.jpg') }}" alt="John Smith" title="John Smith">
                                </div>
                                <div class="card-short-description">
                                    <h5><span class="user-name"><a href="#/">John Smith</a></span></h5>
                                    <p><span class="badge badge-primary">Agent</span></p>
                                </div>
                            </div>
                             /card header 

                             Card content 
                            <div class="card-content">
                                <p>Hi, This is my short intro text. Lorem ipsum is a dummy content sit dollar. You can copy and paste this dummy content from anywhere and to anywhere. Its all free and must be a good to folllow in prectice</p>
                            </div>
                             /card content 

                             Card footer 
                            <div class="card-footer clearfix">
                                <ul class="list-inline">
                                    <li><a href="#/"><i class="icon-pencil"></i></a></li>
                                    <li><a href="#/"><i class="icon-trash"></i></a></li>
                                    <li class="pull-right dropup">
                                        <a href="#/" data-toggle="dropdown"><i class="icon-dot-3 icon-more"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="">Change Setting</a></li>
                                            <li><a href="">View Profile</a></li>
                                            <li><a href="">Send Message</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                             /card footer 

                        </div>
                         /card 

                    </div>
                </div>-->
            </div>
            <!-- /card grid view -->

        </div>
        @endif
    </div>
    <!-- Footer -->
    @include('inc.cms-footer')
</div>
<!-- /main content -->

@endsection