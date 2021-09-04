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
                <h4 class="text-themecolor">Contact Messages</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table product-overview" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-left"> Name</th>
                                        <th class="text-left">Email</th>
                                        <th class="text-left">Comment</th>
                                        <th class="text-right">Created</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($contacts as $key=>$contact)
                                            
                                        
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-left">{{ $contact->name }}</td>
                                            <td class="text-left">{{ $contact->email }}  </td>
                                            <td class="text-left">{{ $contact->comment }}  </td>
                                            <td class="text-left" width="120px">{{ $contact->created_at->diffForHumans() }}  </td>
                                            {{-- <td class="text-right">
                                                <a href="{{ route('admin.editcategory', ['category_slug'=>$category->slug]) }}" class="text-success"><i class="ti-marker-alt"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, you want to delete this category?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{ $category->id }})" class="text-danger"><i class="ti-trash fa-2x"></i></a>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $contacts->links() }}
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









    
