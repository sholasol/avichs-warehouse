<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Order History</a></li>
    </ul>
    
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h2 class="title">Order History</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $key=> $order)
                                     
                                 
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td class="text-left">
                                        <a href="{{ route('user.orderdetails', ['order_id' => $order->id] ) }}" class="text-primary">
                                        {{ $order->firstname }} {{ $order->lastname }}
                                        </a><br>

                                        <a href="{{ route('user.orderdetails', ['order_id' => $order->id] ) }}" > {{ $order->email }}</a>
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
                                        <a href="{{ route('user.orderdetails', ['order_id' => $order->id] ) }}" class="text-success"><i class="fa fa-eye"></i> </a> 
                                    </td>
                                 </tr>
                                @endforeach 
                        </tbody>
                    </table>
                    {{ $orders->links() }}
            </div>

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