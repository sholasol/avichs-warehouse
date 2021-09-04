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
                <h4 class="text-themecolor">Edit Product</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product Form</li>
                    </ol>
                    <a href="{{ route('admin.product') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Products</a>
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

                        <h4 class="card-title">Product Form</h4>
                        
                        <form wire:submit.prevent="updateProduct" enctype="multipart/form-data"  class="form-material m-t-40">
                            <div class="form-group">
                                <label>Product <span class="help"> Name</span></label>
                                <input type="text" class="form-control form-control-line" wire:model="name" wire:keyup="generateSlug"> 
                                @error('name')<p class="text-danger">{{ $message }}</p> @enderror</div>
                            
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control"  wire:model="slug"> 
                                @error('slug')<p class="text-danger">{{ $message }}</p> @enderror</div>
                            
                                <div class="form-group">
                                    <label>Short <span class="help"> Description</span></label>
                                    <input type="text" class="form-control form-control-line textarea_editor" wire:model="short_description"> 
                                    @error('short_description')<p class="text-danger">{{ $message }}</p> @enderror</div>
                                
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <input type="text" id="description"  class="form-control"  wire:model="description" style="height: 200px !important;"> 
                                    @error('description')<p class="text-danger">{{ $message }}</p> @enderror</div>
                                
                                <div class="form-group">
                                    <label>Regular <span class="help"> Price</span></label>
                                    <input type="number" class="form-control form-control-line" wire:model="regular_price" > 
                                    @error('regular_price')<p class="text-danger">{{ $message }}</p> @enderror</div>
                                
                                <div class="form-group">
                                        <label>Sale Price</label>
                                        <input type="text" class="form-control" wire:model="sale_price"> 
                                        @error('sale_price')<p class="text-danger">{{ $message }}</p> @enderror</div>
                                    
                                <div class="form-group">
                                    <label>SKU</label>
                                    <input type="text" class="form-control" wire:model="SKU"> </div>

                                <div class="form-group">
                                    <label>Featured</label>
                                    <select name="" id="" class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" wire:model="quantity"> 
                                    @error('quantity')<p class="text-danger">{{ $message }}</p> @enderror</div>
                                
                                <div class="form-group">
                                        <label>Stock</label>
                                        <select class="form-control" wire:model="stock_status">
                                            <option value="instock">In Stock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                        @error('stock_status')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                                
                                <div class="form-group">
                                    <label>Category</label>
                                    <select  class="form-control" wire:model="category_id">
                                        <option value="">Select category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>                    

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" wire:model="newimage"> 
                                    @if ($newimage)
                                        <img src="{{ $newimage->temporaryUrl() }}" width="120" alt="">
                                    @else
                                        <img src="{{ asset('asset/image/products') }}/{{ $image }}" width="120" alt="">
                                    @endif
                                </div>

                                                
                                    
                            
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Update Product" class="btn btn-info form-control-line"> 
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



















    

