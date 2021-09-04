
<div class="page-wrapper">
    
    <div class="container-fluid"> 
        
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Orders</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">All Orders</li>
                    </ol>
                </div>
            </div>
        </div>
       
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    @if(Session::has('message'))
                        <div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="5%">#</th>
                                        <th class="text-left">Customer</th>
                                        <th class="text-left">Phone</th>
                                        <th class="text-left">Status</th>
                                        <th class="text-left"> Subtotal</th>
                                        <th class="text-left" >Discount</th>
                                        <th class="text-left">Tax</th>
                                        <th class="text-left">Total</th>
                                        <th class="text-left">Date</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($orders as $key=> $order)
                                             
                                         
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-left">
                                                <a href="{{ route('admin.orderdetails', ['order_id' => $order->id] ) }}" class="text-primary">
                                                {{ $order->firstname }} {{ $order->lastname }}
                                                </a><br>

                                                <a href="{{ route('admin.orderdetails', ['order_id' => $order->id] ) }}" > {{ $order->email }}</a>
                                            </td>
                                            <td class="text-left">{{ $order->mobile }} </td>
                                            <td>
                                                @if ($order->status =="delivered")
                                                    <span class="label label-success">{{ $order->status }}</span>
                                                @elseif($order->status =="canceled")  
                                                <span class="label label-danger">{{ $order->status }}</span> 
                                                @elseif($order->status =="ordered")  
                                                <span class="label label-info">{{ $order->status }}</span> 
                                                @endif
                                            </td>
                                            <td class="text-left"><span class="label label-info">₦ {{ $order->subtotal }}</span> </td>
                                            <td class="text-left">{{ $order->discout }} </td> 
                                            <td class="text-left">{{ $order->tax }} </td>
                                            <td class="text-left"><span class="label label-primary">₦ {{ $order->total }}</span> </td>
                                            <td class="text-left"><small>{{ $order->created_at }}</small>  </td>
                                            <td>
                                                <a href="{{ route('admin.orderdetails', ['order_id' => $order->id] ) }}" class="text-success"><i class="fa fa-eye"></i> </a> 
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Status
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#" wire:click.prevent="updatePayment({{ $order->id }})"> Confirm Payment</a>
                                                        <a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{ $order->id }}, 'shipped')">Shipped</a>
                                                        <a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{ $order->id }}, 'delivered')">Delivered</a>
                                                        <a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{ $order->id }}, 'canceled')">Cancelled</a>
                                                    </div>
                                                </div>
                                                {{-- <a href="#" onclick="confirm('Are you sure, you want to delete this product?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{ $order>id }})"  class="text-danger"><i class="fa fa-trash"></i></a> --}}
                                            </td>
                                        </tr>
                                        @endforeach 
                                </tbody>
                            </table>
                        </div>
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        
    </div>
    
</div>












    
