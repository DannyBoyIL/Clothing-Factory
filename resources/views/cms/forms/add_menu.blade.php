@extends('cms.cms_master')

@section('cms_content')
<!-- Main content -->
<div class="main-content">
    <h1 class="page-title">Generator</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb breadcrumb-2"> 
        <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>CMS</a></li> 
        <li><span>Menu</span></li> 
        <li><span>Menus</span></li> 
        <li class="active"><strong>Generator</strong></li> 
    </ol>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">Generate Menu </h3>
                    <ul class="panel-tool-options"> 
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                        <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                        <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                    </ul>
                </div>
                @if( $menu )
                <div class="panel-body">	
                    <form class="form-horizontal" action="{{ url('cms/menu') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group"> 
                            <label for="link" class="col-sm-2 control-label">Link</label> 
                            <div class="col-sm-10"> 
                                <div class="input-group"> 
                                    <span class="input-group-addon"><i class="icon-link"></i></span>
                                    <input type="text" class="form-control origin-field" id="link" name="link" placeholder="New menu link" value="{{ old('link') }}"> 
                                </div>
                            </div> 
                        </div>
                        <div class="line-dashed"></div>
                        <div class="form-group"> 
                            <label for="title" class="col-sm-2 control-label">Title</label> 
                            <div class="col-sm-10"> 
                                <div class="input-group"> 
                                    <span class="input-group-addon"><i class="icon-tag"></i></span>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="New page title" value="{{ old('title') }}"> 
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
                        <div class="line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white"><a href="{{ url('cms/menu') }}">Cancel</a></button>
                                <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Create New">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
    @endif
    <!-- Footer -->
    @include('inc.cms-footer')
</div>
<!-- /main content -->
@endsection