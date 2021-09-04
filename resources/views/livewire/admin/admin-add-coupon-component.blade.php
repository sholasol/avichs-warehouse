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
                <h4 class="text-themecolor">Create Coupons</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Coupon Form</li>
                    </ol>
                    <a href="{{ route('admin.coupons') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Coupons</a>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('message'))
                             <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif

                        <h4 class="card-title">Coupon Form</h4>
                        
                        <form wire:submit.prevent="storeCoupon" class="form-material m-t-40">
                            <div class="form-group">
                                <label>Coupon <span class="help"> Code</span></label>
                                <input type="text" class="form-control form-control-line" wire:model="code"> 
                                @error('code')<p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group">
                                <label>Coupon Type</label>
                                <select name="" id="" class="form-control" wire:model="type">
                                    <option value="">Select</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="percent">Percentage</option>
                                </select>
                                @error('type')<p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Coupon Value</label>
                                <input type="text" class="form-control"  wire:model="value"> 
                                @error('value')<p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Cart Value</label>
                                <input type="text" class="form-control" wire:model="cart_value"> 
                                @error('cart_value')<p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" value="Create Coupon" class="btn btn-info form-control-line"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







    

