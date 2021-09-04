<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/icon.jpeg')}}">
    <title>Avichs</title>
	{{-- <base href="{{ \URL::to('/') }}"> --}}
    <!-- chartist CSS -->
    <link href="{{ asset('dist/css/pages/ecommerce.css')}}')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

    <link href="{{ asset('assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/node_modules/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/node_modules/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/node_modules/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
    
   
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/html5-editor/bootstrap-wysihtml5.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/summernote/dist/summernote-bs4.css') }}">
    @livewireStyles
</head>

<body class="skin-default fixed-layout">
    
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Avichs</p>
        </div>
    </div>
   
    <div id="main-wrapper">
     
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
              
                <div class="navbar-header">
                    <a class="navbar-brand" href="/admin/dashboard">
                        <b>
                            
                            <img src="{{ asset('asset/logo.jpeg')}}" width="120" height="70" alt="homepage" class="dark-logo" />
                            
                            <img src="{{ asset('asset/logo.jpeg')}}" width="120" height="70" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                         
                         {{-- <img src="{{ asset('asset/logo.jpeg')}}" alt="homepage" class="dark-logo" />
                          
                         <img src="{{ asset('asset/logo.jpeg')}}" class="light-logo" alt="homepage" /></span> </a> --}}
                </div>
           
                <div class="navbar-collapse">
                 
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
        
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                
                    <ul class="navbar-nav my-lg-0">
         
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                           
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="{{ asset('assets/images/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                       
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="{{ asset('../assets/images/big/img1.jpg')}}" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="{{ asset('../assets/images/big/img2.jpg')}}" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="{{ asset('../assets/images/big/img3.jpg')}}" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        
                                        <div class="accordion" id="accordionExample">
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingOne">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      Collapsible Group Item #1
                                                    </button>
                                                  </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high. 
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingTwo">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Collapsible Group Item #2
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingThree">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Collapsible Group Item #3
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                       
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        @if (Route::has('login'))
                            @auth
                              @if (Auth::user()->utype ==='ADM')

                                @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype ==='ADM')
                                    <div class="user-profile">
                                        <div class="user-pro-body">
                                            <div><img src="{{ asset('asset/profile.png')}}" alt="user-img" class="img-circle"></div>
                                            <div class="dropdown">
                                                <a href="{{ route('admin.dashboard') }}" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} </a></div>
                                        </div>
                                    </div>
                                    
                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.dashboard') }}" ><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.product') }}" ><i class="ti-layout-grid2 text-info"></i><span class="hide-menu">Products</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.addproduct') }}" ><i class="ti-layout-accordion-merged text-info"></i><span class="hide-menu">Add Product</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.categories') }}" ><i class="ti-palette text-info"></i><span class="hide-menu">Categories</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.homecategories') }}" ><i class="ti-files text-info"></i><span class="hide-menu"> Home Category</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.homeslider') }}" ><i class="ti-layout-media-right-alt text-info"></i><span class="hide-menu">Sliders</span></a>
                                        </li>

                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.coupons') }}" ><i class="ti-layout-media-right-alt text-info"></i><span class="hide-menu">Coupons</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.orders') }}" ><i class="ti-layout-media-right-alt text-info"></i><span class="hide-menu">Orders</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.contact') }}" ><i class="ti-layout-media-right-alt text-info"></i><span class="hide-menu">Feedback Messages</span></a>
                                        </li>
                                       <li> <a class="waves-effect waves-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  aria-expanded="false"><i class="ti-settings text-danger"></i><span class="hide-menu">Logout</span></a> </ul>
                                       </li>
                                        
                                        <form id="logout-form" method="post" action="{{ route('logout') }}">
                                            @csrf
                                        </form>

                                        
                                    @else
                                    <li >
                                        <a href="{{ route('user.dashboard') }}"  class="has-arrow waves-effect waves-dark" title="My Account!">
                                            <span>{{ Auth::user()->name }} Dashboard</span>
                                        </a>
                                    </li>
                                    <li >
                                        <a class="has-arrow waves-effect waves-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                                    </li>
                                    <form id="logout-form" method="post" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                    @endif

                                @else
                                    <li class="has-arrow waves-effect waves-dark"><a href="{{ route('login') }}" class="nav-link" title="Login"><span>Login</span></a></li>
                                    
                                @endif
                                
                            @endif
								

                                
                            @else
                            <li class="nav-item">
                                <a href="{{ route('user.dashboard') }}"  id="wishlist-total" class="nav-link" title="My Account!">
                                    <span>{{ Auth::user()->name }} Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                            </li>
                            <form id="logout-form" method="post" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            @endif

                        @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" title="Login"><span>Login</span></a></li>
                            <li class="nav-item"><a href="{{ route('register') }}" title="Register" class="nav-link"><span>Register</span></a></li>
                        @endif
                        
                    @endif

                    </ul>
                </nav>
               
            </div>
           
        </aside>
       
        

        {{ $slot }}
       
        <footer class="footer">
            © {{ date('Y') }} Avichs
        </footer>
    </div>

    <script src="{{ asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- This is data table -->
    <script src="{{ asset('assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    {{-- <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js')}}"></script> --}}

    <script src="{{ asset('assets/node_modules/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/node_modules/dff/dff.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/multiselect/js/jquery.multi-select.js')}}"></script>
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('assets/node_modules/html5-editor/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{ asset('assets/node_modules/html5-editor/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{ asset('assets/node_modules/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/summernote/dist/summernote-bs4.min.js')}}"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.tiny.cloud/1/faft3sejlsum17i828rexj7it0a5xngu7swu6bxsbtcu0phb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('dist/js/pages/jquery.PrintArea.js')}}" type="text/JavaScript"></script>
    <script> 
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
    
    <script>
        window.addEventListener('success', event => {
            Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Operation successful',
            showConfirmButton: true,
            timer: 2000
            }).then(function() {
                window.location = '{{ route('admin.dashboard') }}';
            });
        })
    </script>


    <script>
        $(function() {
    
            // $('.summernote').summernote({
            //     height: 350, // set editor height
            //     minHeight: null, // set minimum height of editor
            //     maxHeight: null, // set maximum height of editor
            //     focus: false // set focus to editable area after initializing summernote
            // });
    
            $('.inline-editor').summernote({
                airMode: true
            });
    
        });
    
        $('.textarea_editor').wysihtml5();
        </script>
    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    </script>
    <script>
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                       
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                
            });
        });
    </script>


@livewireScripts()
@stack('scripts')
</body>

</html>