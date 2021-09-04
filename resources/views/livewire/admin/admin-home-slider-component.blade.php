<div class="page-wrapper">
    
    <div class="container-fluid">
        
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Home Sliders</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Sliders</li>
                    </ol>
                    <a href="{{ route('admin.addhomeslider') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create Slider</a>
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
                            <table class="table product-overview" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-left">Image</th>
                                        <th class="text-left">Title</th>
                                        <th class="text-left">Subtitle</th>
                                        <th class="text-left">Price</th>
                                        <th class="text-left">Status</th>
                                        <th class="text-left">Date</th>
                                        <th class="text-right" width="10%"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($sliders as $key=>$slider)
                                            
                                        
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-left">
                                                <img src="{{ asset('asset/image/sliders') }}/{{ $slider->image }}" width="120" alt="">
                                            </td>
                                            <td class="text-left">{{ $slider->title }}</td>
                                            <td class="text-left">{{ $slider->subtitle }}  </td>
                                            <td class="text-left">{{ $slider->price }}  </td>
                                            <td class="text-left">{{ $slider->status == 1 ? 'Active':'Inactive' }}  </td>
                                            <td class="text-left">{{ $slider->created_at }}  </td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.edithomeslider', ['slider_id' =>$slider->id]) }}" class="text-success"><i class="fa fa-edit"></i></a>
                                                <a href="#" wire:click.prevent="deleteSlide({{ $slider->id }})" class="text-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        
    </div>
    
</div>












    







{{-- <div class="main-container container">
    <ul class="header-main ">
        <li class="home"><a href="/">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li> Sliders</li>
    </ul> 

    <div class="jumbotron" style="background-image: url('asset/image/sound.jpg') !important; background-size: cover;">
        <h1 style="color: #ffffff !important; margin-bottom: 150px;"> Avichs Electronics</h1>
    </div>

    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="col-left col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-th"> </i>  Sliders</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item active" aria-current="true"><i class="fa fa-desktop"></i> Dashboard</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.product') }}"> <i class="fa fa-briefcase text-success"></i> Products</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.categories') }}"> <i class="fa fa-list text-info"></i> Categories</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.homeslider') }}"> <i class="fa fa-home text-primary"></i> Home Sliders</a></li>
                            <li class="list-group-item"><a href="#"> <i class="fa fa-shopping-cart text-success"></i> Sales</a></li>
                            <li class="list-group-item"><a href="#"> <i class="fa fa-power-off text-danger"></i> Logout</a></li>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-briefcase"></i> Home Sliders
                            <span class="pull-right">
                                <a href="{{ route('admin.addhomeslider') }}" class="text-success"><i class="fa fa-file"></i> Add New</a>
                            </span>
                        </h4>
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if(Session::has('message'))
                            <div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-center">#</td>
                                        <td class="text-left">Image</td>
                                        <td class="text-left">Title</td>
                                        <td class="text-left">Subtitle</td>
                                        <td class="text-left">Price</td>
                                        <td class="text-left">Status</td>
                                        <td class="text-left">Date</td>
                                        <td class="text-right"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                        
                                        @foreach ($sliders as $key=>$slider)
                                            
                                        
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-left">
                                                <img src="asset/image/sliders/{{ $slider->image }}" width="120" alt="">
                                            </td>
                                            <td class="text-left">{{ $slider->title }}</td>
                                            <td class="text-left">{{ $slider->subtitle }}  </td>
                                            <td class="text-left">{{ $slider->price }}  </td>
                                            <td class="text-left">{{ $slider->status == 1 ? 'Active':'Inactive' }}  </td>
                                            <td class="text-left">{{ $slider->created_at }}  </td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.edithomeslider', ['slider_id' =>$slider->id]) }}" class="text-success"><i class="fa fa-edit"></i></a>
                                                <a href="#" wire:click.prevent="deleteSlide({{ $slider->id }})" class="text-danger"><i class="fa fa-close"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            <div class="box-pagination">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div> --}}
    
