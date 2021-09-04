
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
                <h4 class="text-themecolor">Coupons</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Coupons</li>
                    </ol>
                    <a href="{{ route('admin.addcoupon') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table product-overview" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-left">Coupon Code</th>
                                        <th class="text-left">Type</th>
                                        <th class="text-left">Value</th>
                                        <th class="text-left">Cart Value</th>
                                        <th class="text-right"></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($coupons as $key=>$coupon)
                                            
                                        
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-left">{{ $coupon->code }}</td>
                                            <td class="text-left" width="100px">{{ $coupon->type }}  </td>
                                            @if ($coupon->type =='fixed')
                                                <td class="text-left">${{ $coupon->value }}</td>
                                            @else
                                            <td class="text-left">{{ $coupon->value }} %</td>  
                                            @endif
                                            <td class="text-left">{{ $coupon->cart_value }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.editcoupon', ['coupon_id'=>$coupon->id]) }}" class="text-success"><i class="ti-marker-alt"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, you want to delete this coupon?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{ $coupon->id }})" class="text-danger"><i class="ti-trash fa-2x"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- {{ $categories->links() }} --}}
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>









    
