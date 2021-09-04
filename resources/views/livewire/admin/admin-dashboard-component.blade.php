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
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Overview</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ORDER RECEIVED</h4>
                        <div class="text-right"> <span class="text-muted">Todays Order</span>
                            <h1 class="font-light"><sup></sup> {{ number_format($counts) }}</h1>
                        </div>
                        <span class="text-success"></span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">TAX DEDUCATION</h4>
                        <div class="text-right"> <span class="text-muted">VAT</span>
                            <h1 class="font-light"><sup></sup> {{ number_format($tax, 2) }}</h1>
                        </div>
                        <span class="text-primary"></span>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">DISCOUNT</h4>
                        <div class="text-right"> <span class="text-muted">Discount Granted</span>
                            <h1 class="font-light"><sup></sup> {{ number_format($discount, 2) }}</h1>
                        </div>
                        <span class="text-info"></span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">YEARLY SALES</h4>
                        <div class="text-right"> <span class="text-muted">Yearly  Income</span>
                            <h1 class="font-light"><sup><i class="ti-arrow-up text-inverse"></i></sup> {{ number_format($sum, 2) }}</h1>
                        </div>
                        <span class="text-inverse"></span>
                        <div class="progress">
                            <div class="progress-bar bg-inverse" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Overview</h5>
                        <div class="table-responsive m-t-30">
                            <table class="table product-overview">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Phone</th> 
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $key=> $order)
                                    <tr>
                                        <td>
                                            <a href="{{ route('admin.orderdetails', ['order_id' => $order->id] ) }}">
                                                {{ $order->firstname }} {{ $order->lastname }}
                                                </a>
                                        </td>
                                        <td>
                                            {{ $order->mobile }} 
                                        </td>
                                        <td>#{{ $order->id }} </td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>
                                            @if ($order->status =="delivered")
                                                <span class="label label-success">{{ $order->status }}</span>
                                            @elseif($order->status =="canceled")  
                                            <span class="label label-danger">{{ $order->status }}</span> 
                                            @elseif($order->status =="ordered")  
                                            <span class="label label-info">{{ $order->status }}</span> 
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.orderdetails', ['order_id' => $order->id] ) }}"><i class="fa fa-book"></i> </a> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>


