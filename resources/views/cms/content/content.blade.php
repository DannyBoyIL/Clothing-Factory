@extends('cms.cms_master')

@section('cms_content')

<!-- Main content -->
<div class="main-content">
    <h1 class="page-title">Data Table</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb breadcrumb-2"> 
        <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>CMS</a></li> 
        <li><span>Menu</span></li> 
        <li class="active"><strong>Contents</strong></li> 
    </ol>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">Content Editor Tables</h3>
                    <ul class="panel-tool-options"> 
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                        <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                        <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                    </ul>
                </div>
                @if( $menu )
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>Article title</th>
                                    <th>Created at</th>
                                    <th>Last updated</th>
                                    <th>Engine version</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $content as $item )
                                <tr class="gradeX">
                                    <td>{{ $item['title'] }}</td>
                                    <td>{{ date('H:i:s | d/m/Y',strtotime($item['created_at'])) }}</td>
                                    <td>{{ date('H:i:s | d/m/Y',strtotime($item['updated_at'])) }}</td>
                                    <td>4</td>
                                    <td>
                                        <a href="{{ url('cms/content/' . $item['id'] . '/edit') }}">
                                            <li class="icon icon-pencil"></li>
                                        </a> |
                                        <a href="{{ url('cms/content/' . $item['id']) }}">
                                            <li class="icon icon-trash"></li>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Article title</th>
                                    <th>Created at</th>
                                    <th>Last updated</th>
                                    <th>Engine version</th>
                                    <th>Operation</th>
                                </tr>
                            </tfoot>
                        </table>
                        <a href="{{ url('cms/content/create') }}" class="btn btn-primary" type="button">+ Add New</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('inc.cms-footer')
</div>
<!-- /main content -->

@endsection