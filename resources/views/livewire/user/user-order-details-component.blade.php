<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Order Infomation</a></li>
    </ul>
    
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h2 class="title">Order Information</h2>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <td colspan="2" class="text-left">Order Details</td>
                    </tr>
                </thead> 
                <tbody>
                    <tr>
                        <td style="width: 50%;" class="text-left"> <b>Order ID:</b> #{{ $order->id }}
                            <br>
                            <b>Date Created:</b> {{ $order->created_at}}
                            <br>
                            <b>Status:</b> {{ $order->status}}
                            <br>
                            @if ($order->status =="delivered")
                            <b>Delivery Date</b> {{ $order->delivered_date }}
                            
                            @elseif ($order->status =="canceled")
                                <b>Cancelation Date</b> {{ $order->delivered_date }}
                            @endif
                        </td>
                        <td style="width: 50%;" class="text-left"> <b>Amount:</b> 
                            <br>
                            <b>Total:</b> ₦ {{ $order->total }} 
                            <br>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <td style="width: 50%; vertical-align: top;" class="text-left">Customer's Detail</td>
                        <td style="width: 50%; vertical-align: top;" class="text-left">Shipping Detail</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">{{ $order->firstname }}, {{ $order->lastname }}
                            <br>{{ $order->mobile }}
                            <br>{{ $order->email }}
                            <br>{{ $order->address }}
                            <br> {{ $order->city }}, {{ $order->country }}</td>
                        <td class="text-left">{{ $order->firstname }} {{ $order->lastname }}
                            <br>{{ $order->address }},
                            <br>{{ $order->city }},
                            <br>{{ $order->zipcode }},
                            <br>{{ $order->country }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Model</td>
                        <td class="text-left">Quantity</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Total</td>
                        @if ($order->status =="delivered" )
                        <td class="text-right"></td>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($order ->oderItems as $item)
                      <tr>
                        <td class="text-center"><img width="70px" src="{{ asset('asset/image/products') }}/{{ $item->product->image }}" alt="{{ $item->product->name }}" title="{{ $item->product->name }}" class="img-thumbnail" /></td>
                        <td class="text-left"><a href="{{ route('product.details',['slug' =>$item->product->slug]) }}">{{ $item->product->name }}</a></td>
                        <td class="text-left">{{ $item->product->name }}</td>
                        <td class="text-left"> {{ $item->quantity }}</td>
                        <td class="text-right">₦  {{ $item->price }}</td>
                        <td class="text-right">₦ {{ $item->price * $item->quantity }}</td>
                        @if ($order->status =="delivered")
                        <td>
                            @if ( $item->rsatus == false)
                            <a href="{{ route('user.review', ['order_item_id' =>$item->id]) }}">Rate & Review</a> 
                            @endif
                        </td>
                        @endif
                      </tr>
                      @endforeach
                    </tbody> 
                </table>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8"></div>
                            <div class="col-sm-4">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-right">
                                                <strong>Sub-Total:</strong>
                                            </td>
                                            <td class="text-right">₦ {{ $order->subtotal }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <strong>Tax:</strong>
                                            </td>
                                            <td class="text-right"><b>₦ {{ $order->tax }}</b></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="text-right">
                                                <strong>Total:</strong>
                                            </td>
                                            <td class="text-right">₦ {{ $order->total }}</td>
                                        </tr>
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($order->status !="delivered")
            <a href="#" wire:click.prevent="cancelOrder" class="btn btn-danger"><i class="fa fa-close"></i> Cancel Order</a>
            @endif


        </div>
        <!--Middle Part End-->
        <!--Right Part Start -->
        <aside class="col-sm-3 hidden-xs" id="column-right">
            <h2 class="subtitle">Account</h2>
            <div class="list-group">
                <ul class="list-item">
                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a>
                    </li>
                    <li><a href="{{ route('user.orders') }}">Order History</a>
                    </li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout</a>
                    </li>
                    <form id="logout-form" method="post" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </ul>
            </div>			
        </aside>
        <!--Right Part End -->
    </div>
</div>