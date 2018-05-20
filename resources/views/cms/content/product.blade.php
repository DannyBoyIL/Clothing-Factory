@extends('cms.cms_master')

@section('cms_content')

<!-- Secondary header -->
<div class="header-secondary row">
    <div class="col-lg-12">
        <div class="page-heading clearfix">
            <h1 class="page-title pull-left">Product</h1>
            <a href="{{ url('cms/product/create') }}" class="btn btn-primary btn-sm btn-add" type="button">Add New</a>
        </div>
        <!-- Breadcrumb -->
        <ol class="breadcrumb breadcrumb-2"> 
            <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>CMS</a></li> 
            <li><span>Category</span></li> 
            <li class="active"><strong>Products</strong></li> 
        </ol>
        <div class="tab-wrapper clearfix">
            <ul class="nav nav-pills nav-icons pull-right">
                <li role="presentation"><a href="{{ url('cms/product') }}"><i class="icon-layout"></i></a></li>
                <li class="active" role="presentation"><a href="{{ url('cms/product') }}"><i class="icon-list"></i></a></li>
                <li role="presentation"><a href="{{ url('cms/product') }}" class="toggle-filter" data-block-id="filter-box"><i class="fa fa-filter"></i></a></li>
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
    <div class="row datatable-wrapper form-inline">
        <div class="col-lg-12">
            <div class="data-col-first clearfix">
                <div class="col-checkbox col-space">
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
    <div class="table-responsive">
        <table class="table table-users table-hover">
            <thead>
                <tr>
                    <th class="size-60"></th>
                    <th class="size-80"></th>
                    <th>Product Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <!--<th class="text-center">Category</th>-->
                    <th class="text-center">Price</th>
                    <th class="text-center">Availability</th>
                    <th class="size-80" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $product as $item )
                <tr>
                    <td class="size-60">
                        <div class="form-checkbox">
                            <input type="checkbox" name="name1" value=""> 
                            <span class="check">
                                <i class="fa fa-check"></i>
                            </span>
                        </div>
                    </td>
                    <td class="size-80">
                        <img class="avatar img-circle" src="{{ asset('img/'. $item['image']) }}" alt="{{ $item['title' ] }}" title="{{ $item['title' ] }}">
                    </td>
                    <td>
                        <strong>{{ $item['title'] }}</strong>
                    </td>
                    <td>{{ date('H:i:s | d/m/Y',strtotime($item['created_at'])) }}</td>
                    <td>{{ date('H:i:s | d/m/Y',strtotime($item['updated_at'])) }}</td>
                    <td class="text-center">
                        <span class="badge badge-bordered">{{ $item['price' ] }}</span>
                    </td>
                    <td><i class="icon-check icon-larger green-color"></i></td>
                    <td class="size-80">
                        <div class="dropdown">
                            <a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ url('cms/product/' . $item['id'] . '/edit') }}">Edit</a></li>
                                <li><a href="{{ url('cms/product/' . $item['id']) }}">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td><div class="form-checkbox"><input type="checkbox" name="name2" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
                    <td><img class="avatar img-circle" src="{{ asset('lib/Mouldifi-4.2/light/images/stella-johnson.png') }}" alt="" title=""></td>
                    <td><strong>Stella Johnson</strong></td>
                    <td>Recently joined in 2016</td>
                    <td>Last login 5 days ago.</td>
                    <td class="text-center"><span class="badge badge-bordered">operator</span></td>
                    <td><i class="icon-cancel icon-larger red-color"></i></td>
                    <td>
                        <div class="dropdown">
                            <a href="#/" data-toggle="dropdown" class="more-link"><i class="icon-dot-3 ellipsis-icon"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="">Change Date Range</a></li>
                                <li><a href="">Change Graph Type</a></li>
                                <li><a href="">Other Settings</a> </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Footer -->
    @include('inc.cms-footer')
</div>
<!-- /main content -->

@endsection