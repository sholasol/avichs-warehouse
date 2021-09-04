<div class="page-wrapper">
    
    <div class="container-fluid">
        
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Products</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                    <a href="{{ route('admin.addproduct') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
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
                                        <th class="text-left" width="5%">Image</th>
                                        <th class="text-left" width="20%"> Name</th>
                                        <th class="text-left" width="10%">Stock</th>
                                        <th class="text-left" width="10%">Price</th>
                                        <th class="text-left" width="20%">Category</th>
                                        <th class="text-left" width="10%">Date</th>
                                        <th width="10%"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $key=>$product)
                                            
                                         
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-left"><img src="{{ asset('asset/image/products') }}/{{ $product->image }}" width="60" alt=""></td>
                                            <td class="text-left">{{ $product->name }} {{ $product->size }}</td>
                                            <td class="text-left" width="200px">{{ $product->stock_status }}  </td>
                                            <td class="text-left" width="200px">{{ $product->regular_price }}  </td>
                                            <td class="text-left" width="200px">{{ $product->category->name }}  </td>
                                            <td class="text-left" width="200px">{{ $product->created_at }}  </td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.editproduct', ['product_slug'=>$product->slug]) }}" class="text-success"><i class="fa fa-edit"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, you want to delete this product?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{ $product->id }})"  class="text-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        
    </div>
    
</div>












    
