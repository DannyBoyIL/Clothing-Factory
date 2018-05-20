@extends('cms.cms_master')

@section('cms_content')
<!-- Main content -->
<div class="main-content">
    <h1 class="page-title">Generator</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb breadcrumb-2"> 
        <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>CMS</a></li> 
        <li><span>Menu</span></li> 
        <li><span>Contents</span></li> 
        <li class="active"><strong>Author</strong></li> 
    </ol>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">Article Composer </h3>
                    <ul class="panel-tool-options"> 
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                        <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                        <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                    </ul>
                </div>
                @if( $menu )
                <div class="panel-body">	
                    <form class="form-horizontal" action="{{ url('cms/content') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group"> 
                            <label for="menu_id" class="col-sm-2 control-label">Menu Link</label> 
                            <div class="col-sm-10">
                                <div class="input-group"> 
                                    <span class="input-group-addon"><i class="icon-link"></i></span>
                                    <select class="form-control cms-select" id="menu_id" name="menu_id"> 
                                        <option value="">Choose menu link..</option> 
                                        @foreach( $menu as $item )
                                        <option @if( old('menu_id') == $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['link'] }}</option>
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
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}"> 
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
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white"><a href="{{ url('cms/content') }}">Cancel</a></button>
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