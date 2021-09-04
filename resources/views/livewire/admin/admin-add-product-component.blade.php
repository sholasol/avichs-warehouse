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
                <h4 class="text-themecolor">Create Product</h4>
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
                        
                        <form wire:submit.prevent="addProduct" enctype="multipart/form-data"  class="form-material m-t-40">
                            <div class="form-group" wire:ignore>
                                <label>Product Description</label> 
                                {{-- <textarea id="description"  data-description="@this" wire:model="description"></textarea> --}}
                                <textarea id="description"  class="form-control" wire:model="description"></textarea>
                                @error('description')<p class="text-danger">{{ $message }}</p> @enderror</div>


                            <div class="form-group">
                                <label>Product <span class="help"> Name</span></label>
                                <input type="text" class="form-control form-control-line" wire:model="name" wire:keyup="generateSlug"> 
                                @error('name')<p class="text-danger">{{ $message }}</p> @enderror</div>
                            
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control"  wire:model="slug">
                                @error('slug')<p class="text-danger">{{ $message }}</p> @enderror </div>

                                <div class="form-group">
                                    <label>Product <span class="help"> Size</span></label>
                                    <input type="text" class="form-control form-control-line" wire:model="size"> </div>
                            
                                <div class="form-group">
                                    <label>Short <span class="help"> Description</span></label>
                                    <input type="text" id="short_description" class="form-control form-control-line" wire:model="short_description"> 
                                    @error('short_description')<p class="text-danger">{{ $message }}</p> @enderror</div>

                                <div class="form-group">
                                    <label>Regular <span class="help"> Price</span></label>
                                    <input type="number" class="form-control form-control-line" wire:model="regular_price"> 
                                    @error('regular_price')<p class="text-danger">{{ $message }}</p> @enderror</div>
                                 
                                <div class="form-group">
                                        <label>Sales Price</label>
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
                                    <label>Featured Image</label>
                                    <input type="file" class="form-control" wire:model="image"> 
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Alternate Images</label>
                                    <input type="file" class="form-control" wire:model="additionalPhotos" multiple> 
                                    @foreach ($additionalPhotos as $photo)
                                        @if ($photo)
                                            <img src="{{ $photo->temporaryUrl() }}" width="120" alt="">
                                        @endif
                                    @endforeach
                                    
                                </div>

                                                
                                    
                            
                                <div class="form-group">
                                    <input id=submitBtn type="submit" name="submit" value="Create Product" class="btn btn-info form-control-line"> 
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val(); //d_data is variable for description data
                        @this.set('description', d_data);
                    });
                }
            });
        });
    </script>
@endpush












