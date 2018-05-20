@extends('cms.cms_master')

@section('cms_content')

<!-- Main content -->
<div class="main-content">
    <h1 class="page-title">Data Table</h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb breadcrumb-2"> 
        <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>CMS</a></li>
        <li class="active"><strong>Orders</strong></li> 
    </ol>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">Orders Table</h3>
                    <ul class="panel-tool-options"> 
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                        <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                        <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                    </ul>
                </div>
                @if( $orders )
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Order</th>
                                    <th>Shipping Address</th>
                                    <th>Delivery Method</th>
                                    <th>Paymeny Method</th>
                                    <th>Created at</th>
                                    <th>Last updated</th>
                                    <th>Total amount</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $orders as $order )
                                <tr class="gradeX">
                                    <td>{{ $order->firstName }} {{ $order->lastName }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-link btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Details <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                @foreach( $order->data['products'] as $item )
                                                <li><b>{{ $item['name'] }}</b></li>
                                                <li>Quantity:<b> {{ $item['quantity'] }}</b></li>
                                                <li>Price:<b>  {{ $item['price'] }}</b></li><br>
                                                @endforeach                                                
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-link btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Show <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <b>Email:</b> {{ $order->data['shipping_address']['email'] }}<br>                                        
                                                <b>Address:</b> {{ $order->data['shipping_address']['address'] }}<br>                                        
                                                <b>City:</b> {{ $order->data['shipping_address']['city'] }}<br>                                        
                                                <b>State:</b> {{ $order->data['shipping_address']['state'] }}<br>                                        
                                                <b>Country:</b> {{ $order->data['shipping_address']['country'] }}<br>                                        
                                                <b>Zip:</b> {{ $order->data['shipping_address']['zip'] }}<br>
                                                @if( $order->data['shipping_address']['phone'] )                                        
                                                <b>Phone &numero;:</b> {{ $order->data['shipping_address']['phone'] }}<br> 
                                                @endif
                                            </ul>
                                        </div>
                                    </td>
                                    <td>{{ $order->data['delivery_method'] }}</td>
                                    <td>
                                        @if( is_array($order->data['payment_method']) )
                                        <button type="button" class="btn btn-link btn-xs" data-toggle="modal" data-target="#modal-1">Credit</button>
                                        <!--Basic Modal-->
                                        <div id="modal-1" class="modal fade" tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Credit Info</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Name on Card : {{ $order->data['payment_method']['name'] }}</p>
                                                        <p>Card Number : {{ $order->data['payment_method']['number'] }}</p>
                                                        <p>Expiry date : {{ $order->data['payment_method']['expiry'] }}</p>
                                                        <p>CVC/CVV : {{ $order->data['payment_method']['cvv'] }}</p>
                                                        <p>ZIP : {{ $order->data['payment_method']['zip'] }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <!--End Basic Modal-->
                                        @else
                                        {{ $order->data['payment_method'] }}
                                        @endif
                                    </td>                            
                                    <td>{{ date('H:i:s | d/m/Y',strtotime($order->created_at)) }}</td>
                                    <td>{{ date('H:i:s | d/m/Y',strtotime($order->updated_at)) }}</td>
                                    <td>${{ $order->total }}</td>
                                    <td></td>
                                </tr>
                                @endforeach                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>User name</th>
                                    <th>Order</th>
                                    <th>Shipping Address</th>
                                    <th>Delivery Method</th>
                                    <th>Paymeny Method</th>
                                    <th>Created at</th>
                                    <th>Last updated</th>
                                    <th>Total amount</th>
                                    <th>Operation</th>
                                </tr>
                            </tfoot>
                        </table>
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