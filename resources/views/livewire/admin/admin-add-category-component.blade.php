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
                <h4 class="text-themecolor">Create Category</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category Form</li>
                    </ol>
                    <a href="{{ route('admin.categories') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Categories</a>
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

                        <h4 class="card-title">Category Form</h4>
                        
                        <form wire:submit.prevent="storeCategory" class="form-material m-t-40">
                            <div class="form-group">
                                <label>Category <span class="help"> Name</span></label>
                                <input type="text" class="form-control form-control-line" wire:model="name" wire:keyup="generateslug"> 
                                @error('name')<p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Placeholder</label>
                                <input type="text" class="form-control" placeholder="Slug" wire:model="slug"> 
                                @error('slug')<p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="submit" value="Create Category" class="btn btn-info form-control-line"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







    

