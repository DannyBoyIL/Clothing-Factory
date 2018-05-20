@extends('cms.cms_master')

@section('cms_content')
<h3>Are you sure you want to delete this article content?</h3>
<div class="row">
    <div class="col-md-3">
        <br>
        <form action="{{ url('cms/category/' . $id) }}" method="POST">
            {{ csrf_field() }}     
            {{ method_field('DELETE') }}     
            <input type="submit" id="submit" name="submit" class="btn btn-danger" value="Delete">
            <a href="{{ url('cms/category') }}" class="btn btn-default">Cancel</a>            
        </form>
    </div>
</div>
@endsection