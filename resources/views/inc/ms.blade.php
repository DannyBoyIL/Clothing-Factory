@if( Session::has('ms'))
<div class="ms-area">
    <!--            <button type="button" class="close">
                    <i class="icon-close"></i>
                </button>-->
    <div class="position">{!! Session::get('ms') !!}</div>
</div>
@endif
