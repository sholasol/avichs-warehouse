<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Oder Details</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                    <a href="{{ route('admin.orders') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-shopping-basket"></i> All Orders</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3><b>Order Details</b> <span class="pull-right">#{{ $order->id }}</span></h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Order Status</h5>
                                    <div class="table-responsive">
                                        <table class="table product-overview">
                                            <tbody>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <td>#{{ $order->id }}</td>
                                                   <th>Order Date</th>
                                                    <td>
                                                        {{ $order->created_at }}
                                                    </td>
                                                    <th>Order Status</th>
                                                    <td>
                                                        <span class="label label-info">
                                                            {{ $order->status }}
                                                        </span>
                                                    </td>
                                                    @if ($order->status =="delivered")
                                                        <th>Delivery Date</th>
                                                        <td>
                                                            {{ $order->delivered_date }}
                                                        </td>
                                                    @elseif ($order->status =="canceled")
                                                        <th>Cancelation Date</th>
                                                        <td>
                                                            {{ $order->delivered_date }}
                                                        </td>
                                                    @endif
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                         

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Order Items</h5>
                                    <div class="table-responsive">
                                        <table class="table table-overview">
                                            <thead>
                                              <tr>
                                                <td class="text-center">Image</td>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Model</td>
                                                <td class="text-left">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
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
                                              </tr>
                                              @endforeach
                                            </tbody> 
                                          </table>
                                    </div>

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


                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Customer's Details</h5>
                                    <div class="table-responsive">
                                        <div class="table-responsive">
                                            <table class="table product-overview">
                                                <tbody>
                                                    <tr>
                                                        <th>First Name</th>
                                                        <td>{{ $order->firstname }}</td>
                                                        <th>Last Name</th>
                                                        <td>
                                                            {{ $order->lastname }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>{{ $order->email }}</td>
                                                        <th>Phone</th>
                                                        <td>
                                                            {{ $order->mobile }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td>{{ $order->address }}</td>
                                                        <th>State</th>
                                                        <td>
                                                            {{ $order->city }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Zip</th>
                                                        <td>{{ $order->zipcode }}</td>
                                                        <th>Coutry</th>
                                                        <td>
                                                            {{ $order->country }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Order date</th>
                                                        <td>{{ $order->created_at }}</td>
                                                        <th>Order Status</th>
                                                        <td>
                                                            {{ $order->status }}
                                                        </td>
                                                    </tr>
                                                </tbody> 
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Shipping Details</h5>
                                    <div class="table-responsive">
                                        <table class="table product-overview">
                                            <tbody>
                                                <tr>
                                                    <th>First Name</th>
                                                    <td>{{ $order->shipping->firstname }}</td>
                                                    <th>Last Name</th>
                                                    <td>
                                                        {{ $order->shipping->lastname }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{ $order->shipping->email }}</td>
                                                    <th>Phone</th>
                                                    <td>
                                                        {{ $order->shipping->mobile }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>{{ $order->shipping->address }}</td>
                                                    <th>State</th>
                                                    <td>
                                                        {{ $order->shipping->city }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Zip</th>
                                                    <td>{{ $order->shipping->zipcode }}</td>
                                                    <th>Coutry</th>
                                                    <td>
                                                        {{ $order->shipping->country }}
                                                    </td>
                                                </tr>
                                            </tbody> 
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

 
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Transaction</h5>
                                    <div class="table-responsive">
                                        <table class="table product-overview">
                                            <tr>
                                                <th>Transaction Mode</th>
                                                <td>{{ $order->transaction->mode }}</td>
                                            </tr>
                                            <tr>
                                                <th>Payment Status:</th>
                                                <td>{{ $order->transaction->status }}</td>
                                            </tr>
                                            <tr>
                                                <th>Transaction Date</th>
                                                <td>{{ $order->transaction->created_at }}</td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>



















                        <div class="col-md-12">
                            
                            <div class="clearfix"></div>
                            <hr>
                            <div class="text-right">
                                <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    </div>
</div>