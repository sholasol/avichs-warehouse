<div class="page-wrapper">
   
    <div class="container-fluid">
        
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Create Sliders</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Slider Form</li>
                    </ol>
                    <a href="{{ route('admin.homeslider') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> All Sliders</a>
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
                        
                        <form wire:submit.prevent="addSlide" enctype="multipart/form-data"  class="form-material m-t-40">
                            <div class="form-group">
                                <label>Slider <span class="help"> Title</span></label>
                                <input type="text" class="form-control form-control-line" wire:model="title" required> </div>
                            
                            <div class="form-group">
                                <label>Subtitle</label>
                                <input type="text" class="form-control"  wire:model="subtitle"> </div>
                            
                                <div class="form-group">
                                    <label>Price </label>
                                    <input type="number" class="form-control form-control-line" wire:model="price"> </div>
                                
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" class="form-control"  wire:model="link"> </div>
                                
                                <div class="form-group">
                                    <label>Status </label>
                                    <select name="" id="" class="form-control" wire:model="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" wire:model="image"> 
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                    @endif
                                </div>

                                                
                                    
                            
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Create Product" class="btn btn-info form-control-line"> 
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




















    
