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
                <h4 class="text-themecolor">Home Categories</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Home Categories</li>
                    </ol>
                    <a href="{{ route('admin.addcategory') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
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

                        <h4 class="card-title">Manage Category </h4>
                        {{-- <form wire:submit.prevent="storeCategory" class="form-material m-t-40"> --}}
                        <form wire:submit.prevent="updateHomeCategory" class="form-material m-t-40">
                            <div class="form-group" wire:ignore>
                                <label>Category <span class="help"> Name</span></label>
                                <select class="select2 form-control custom-select sel_category" style="width: 100%; height:36px;" name="categories[]" multiple="multiple" wire:model="selected_categories">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>No. of Products</label>
                                <input type="text" class="form-control" wire:model="numberofproducts"> </div>
                            
                            
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-info form-control-line"> 
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
        $document.ready(function(){
        $('.sel_category').on('change', function(e){
            var data = $('.sel_categories').select2("val");
            @this.set('selected_categories', data);
        });
        })
    </script>
@endpush









    
