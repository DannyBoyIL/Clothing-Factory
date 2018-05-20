@extends('cms.cms_master')

@section('cms_content')

<!-- Main content -->
<div class="main-content">
    <h1 class="page-title">Generator</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb breadcrumb-2"> 
        <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>CMS</a></li> 
        <li><span>Category</span></li> 
        <li><span>Products</span></li> 
        <li class="active"><strong>Generator</strong></li> 
    </ol>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">Generate Product </h3>
                    <ul class="panel-tool-options"> 
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                        <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                        <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                    </ul>
                </div>

                <div class="panel-body">	
                    <form class="form-horizontal" action="{{ url('cms/product') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group"> 
                            <label for="category_id" class="col-sm-2 control-label">Product category</label> 
                            <div class="col-sm-10">
                                <div class="input-group"> 
                                    <span class="input-group-addon"><i class="icon-link"></i></span>
                                    <select class="form-control cms-select" id="category_id" name="category_id"> 
                                        <option value="">Choose category..</option> 
                                        @foreach( $category as $item )
                                        <option @if( old('category_id') == $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> 
                        </div>
                        <div class="form-group"> 
                            <label for="title" class="col-sm-2 control-label">Title</label> 
                            <div class="col-sm-10"> 
                                <div class="input-group"> 
                                    <span class="input-group-addon"><i class="icon-tag"></i></span>
                                    <input type="text" class="form-control origin-field" id="title" name="title" placeholder="Title" value="{{ old('title') }}"> 
                                </div>
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">URL</label> 
                            <div class="col-sm-10"> 
                                <div class="input-group"> 
                                    <span class="input-group-addon"><i class="icon-network"></i></span>
                                    <input type="text" class="form-control target-field" id="url" name="url" placeholder="{{ url('') }}/" value="{{ old('url') }}"> 
                                </div>
                            </div> 
                        </div>
                        <div class="form-group"> 
                            <label for="price" class="col-sm-2 control-label">Price</label> 
                            <div class="col-sm-2"> 
                                <div class="input-group"> 
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="777" value="{{ old('price') }}"> 
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div> 
                        </div>
                        <div class="line-dashed"></div>
                        <div class="form-group">
                            <label for="article" class="col-sm-2 control-label">Article</label> 
                            <div class="col-sm-10"> 
                                <div class="input-group"> 
                                    <textarea id="article" name="article">{{ old('article') }}</textarea>
                                </div>
                            </div> 
                        </div> 
                        <div class="line-dashed"></div>
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">Image</label> 
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="image" name="image" style="padding: 5px 3px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white"><a href="{{ url('cms/product') }}">Cancel</a></button>
                                <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Create New">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('inc.cms-footer')
</div>
<!-- /main content -->

@endsection