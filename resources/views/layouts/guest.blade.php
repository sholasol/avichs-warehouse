
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>Avichs</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" href="{{ asset('asset/icon.jpeg') }}">
    
    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
    
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="{{ asset('css/themecss/so_megamenu.css')}}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-categories.css')}}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
    <link href="{{ asset('css/themecss/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-super-category.css')}}" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('css/theme.css')}}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
    <style>
        #contain {
            
            overflow: hidden;
            -webkit-transition: margin-left 500ms ease-in-out;
                -moz-transition: margin-left 500ms ease-in-out;
                -o-transition: margin-left 500ms ease-in-out;
                -ms-transition: margin-left 500ms ease-in-out;
                transition: margin-left 500ms ease-in-out;
        }
        
        .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
    font-size:30px;
        box-shadow: 2px 2px 3px #999;
    z-index:100;
    }

    .my-float{
        margin-top:16px;
    }

    .tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
    }

    /* Tooltip text */
    .tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
    }

    /* Show the tooltip text when you mouse over the tooltip container */
    .tooltip:hover .tooltiptext {
    visibility: visible;
    }
    </style>
    @livewireStyles
</head>

<body class="common-home res layout-home1">
    <div id="wrapper" class="wrapper-full banners-effect-7">
        <!-- Header Container  -->
        <header id="header" class=" variantleft type_1">
            <div class="header-top compact-hidden">
                <div class="container">
                    <div class="row">
                        <div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
                            <ul class="list-inlines">
                                <li class="hidden-xs" >
                                    <div class="welcome-msg"> 
                                        <ul class="list-msg"> 
                                            <li><label class="label-msg">Email</label> <a href="#"> customer@avichs.com</a></li> 
                                            <li><label class="label-msg">Telephone</label> <a href="#">+234-806 017 7920</a></li> 
                                        </ul>  
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
                            <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
                            <div class="tabBlock" id="TabBlock-1">
                                <ul class="top-link list-inline">
                                    <li class="account" id="my_account">
                                        @if (Route::has('login'))
                                            @auth
                                                @if (Auth::user()->utype ==='ADM')
                                                <a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
                                                <ul class="dropdown-menu ">
                                                    <li><a href="/admin.dashboard"><i class="fa fa-desktop"></i> Register</a></li>
                                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a></li>
                                                    <form id="logout-form" method="post" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </ul>
                                                @else
                                                <ul class="dropdown-menu ">
                                                    <li><a href="/user.dashboard"><i class="fa fa-desktop"></i> Register</a></li>
                                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a></li>
                                                    <form id="logout-form" method="post" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </ul>
                                                @endif
                                                
                                                @else
                                                
                                                @endif


                                        @endif
                                        
                                    </li>
                                    {{-- <li class="wishlist "><a href="/wishlist" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List (5)</span></a></li> --}}
                                    <li class="login"><a href="/cart" title="Shopping Cart"><span >Cart</span></a></li>
                                    <li class="form-group currency currencies-block">
                                        <form action="/" method="post" enctype="multipart/form-data" id="currency">
                                            <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <span class="icon icon-user "></span> User <span class="fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu btn-xs">
                                                <li> <a href="/login">Login</a></li>
                                                <li> <a href="/register">Register   </a></li>
                                            </ul>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header Top -->
            <!-- Header center -->
            <div class="header-center">
                <div class="container">
                    <div class="row">
                        <!-- LOGO -->
                        <div class="navbar-logo col-md-3 col-sm-4 col-xs-10">
                           <a href="/"><img class="lazyload" data-sizes="auto" data-src="{{ asset('asset/logo.png') }}" title="Avichs" alt="Avichs Warehouse" /></a>
                        </div>
                        <div class="header-center-right col-md-9 col-sm-8 col-xs-2">
                            <div class="responsive so-megamenu  megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>   
                                        </div>
                                        
                                        <div class="megamenu-wrapper ">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                                        <li class="home hover">
                                                            <a href="/">Home</a>
                                                        </li>
                                                        {{-- <li>
                                                            <a href="/shop">Our Shop</a>
                                                        </li> --}}
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/cart" class="clearfix">
                                                                <strong>Shopping Cart</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                        {{-- <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/checkout" class="clearfix">
                                                                <strong>Checkout</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li> --}}
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/contact" class="clearfix">
                                                                <strong>Contact</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                     @if (Route::has('login'))
                                                        @auth
                                                            @if (Auth::user()->utype ==='ADM')
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="{{ route('admin.dashboard') }}" class="clearfix">
                                                                    <strong>Dashboard</strong>
                                                                    <span class="label"></span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="clearfix">
                                                                    <strong>Logout</strong>
                                                                    <span class="label"></span>
                                                                </a>
                                                            </li>
                                                            <form id="logout-form" method="post" action="{{ route('logout') }}">
                                                                @csrf
                                                            </form>
                                                            
                                                            @else
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="{{ route('user.dashboard') }}" class="clearfix">
                                                                    <strong>Hi, {{ Auth::user()->name }}</strong>
                                                                    <span class="label"></span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="clearfix">
                                                                    <strong>Logout</strong>
                                                                    <span class="label"></span>
                                                                </a>
                                                            </li>
                                                            <form id="logout-form" method="post" action="{{ route('logout') }}">
                                                                @csrf
                                                            </form>
                                                            @endif

                                                            @else
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="/register" class="clearfix">
                                                                    <strong>Sign Up</strong>
                                                                    <span class="label"></span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="/login" class="clearfix">
                                                                    <strong>Sign In</strong>
                                                                    <span class="label"></span>
                                                                </a>
                                                            </li>
                                                        @endif

                                                        @endif
                                                    </ul>
                                                    <a href="https://api.whatsapp.com/send?phone=+2348060177920&text=Hello" title="Chat with us" class="float" target="_blank">
                                                        <i class="fa fa-whatsapp my-float"></i>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header center -->
            <!-- Header Bottom -->
            <div class="header-bottom compact-hidden">
                <div class="container">
                    <div class="header-bottom-inner">
                        <div class="row">
                            <div class="header-bottom-left menu-vertical col-md-3 col-sm-2 col-xs-2">
                                <div class="responsive so-megamenu megamenu-style-dev">
                                    <div class="so-vertical-menu no-gutter compact-hidden">
                                        
										{{-- @livewire('header-category-component') --}}
										
                                    </div> 
                                </div>
                            </div>
                            
                            <!-- Main menu -->
                            <div class="header-bottom-right col-md-9 col-sm-10 col-xs-10">
                                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-9 header_search">
                                    <!-- Search -->
                                    <div id="sosearchpro" class="search-pro"> 
                                        @livewire('header-search-component')
                                    </div>
                                    <!-- //end Search -->
                                </div>
                                <div class="block-cart">
                                    <!--cart-->
                                    <div class="shopping_cart pull-right">
                                        <div id="cart" class=" btn-group btn-shopping-cart">
                                            <a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
                                                <div class="shopcart">
                                                    <span class="handle pull-left"></span>
                                                    <span class="text-shopping-cart hidden-xs"> 
                                                        My cart 
                                                        @livewire('cart-count-component')
                                                    </span>
                                                    <span class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
                                                      <i class="fa fa-cart-plus"></i> 
                                                    </span> 
                                                </div>
                                            </a>
                                            <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">                          
                                                <li>
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            @foreach (Cart::instance('cart')->content() as $item)
                                                            <tr>
                                                                <td class="text-center" style="width:70px">
                                                                    <a href="{{ route('product.details',['slug' =>$item->model->slug]) }}"> 
                                                                        <img class="lazyload preview" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products') }}/{{ $item->model->image }}" style="width:70px" alt="{{ $item->model->name }}" title="{{ $item->model->name }}"> 
                                                                    </a>
                                                                </td>
                                                                <td class="text-left"> <a class="cart_product_name" href="product.html">{{ $item->model->name }}</a> </td>
                                                                <td class="text-center"> x{{ $item->qty }}</td>
                                                                <td class="text-center">₦ {{ $item->subtotal }} </td>
                                                                <td class="text-right">
                                                                    <a href="{{ route('product.details',['slug' =>$item->model->slug]) }}" class="fa fa-edit"></a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <a wire:click.prevent="destroy('{{ $item->rowId  }}')" class="fa fa-times fa-delete"></a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </li>
                                                <li>
                                                    <div>
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-left"><strong>Sub-Total</strong>
                                                                    </td>
                                                                    <td class="text-right">₦ {{ Cart::instance('cart')->subtotal() }} </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">
                                                                        <strong>Total</strong>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        ₦  {{ Cart::instance('cart')->total() }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p class="text-center"> <a class="btn view-cart" href="/cart"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="/checkout"><i class="fa fa-share"></i>Checkout</a> </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--//cart-->
                                </div>
                                <div class="header_custom_link hidden-xs">
                                    <ul>
										@if (Route::has('login'))

										@else
                                        <li><a href="/login"><i class="fa fa-user"></i> Login</a></li>
										@endif
                                    </ul>   
                                </div>
                            </div>
                            <!-- //end Main menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header> 
        <!-- //Header Container  -->
        <!-- Main Container  -->
        {{ $slot }}
        
        <!-- //Main Container -->

        <script type="text/javascript">
            var $typeheader = 'header-home1';
        </script>
        <!-- Footer Container -->
        <footer class="footer-container typefooter-1">
            <!-- FOOTER TOP -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="module social_block col-md-3 col-sm-12 col-xs-12" >
                                <ul class="social-block ">
                                    <li class="facebook"><a class="_blank" href="https://www.facebook.com/avichswarehouse" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    {{-- <li class="twitter"><a class="_blank" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                    <li class="google_plus"><a class="_blank" href="#" target="_blank"><i class="fa  fa-google-plus"></i></a></li> --}}
                                    <li class="pinterest"><a class="_blank" href="https://instagram.com/avichswarehouse?r=nametag" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="module news-letter col-md-9 col-sm-12 col-xs-12">
                                <div class="newsletter">
                                    <div class="title-block">
                                        <div class="page-heading">AVICHS WAREHOUSE...QUALITY</div>
                                        <div class="pre-text">
                                            Avichs warehouse provides quality, reliable and durable electronic products.            
                                        </div>
                                    </div>
                                    <div class="block_content">
                                        {{-- <form method="post" name="signup" id="signup" class="btn-group form-inline signup">
                                            <div class="form-group required send-mail">
                                                <div class="input-box">
                                                    <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                                </div>
                                                <div class="subcribe">
                                                    <button class="btn btn-default btn-lg" type="submit"  name="submit">
                                                        Subscribe                       </button>
                                                </div>
                                            </div>
                                        </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- FOOTER CENTER -->
            <div class="footer-center">
                <div class="container content">
                    <div class="row">
                        <!-- BOX INFO -->
                        <div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
                            <div class="module ">
                                <div class="content-block-footer">
                                    <div class="footer-logo">
                                        <a href="/"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/logo.png') }}" title="Avichs warehouse" alt="Avichs" /></a>
                                    </div>
                                    <p>
                                        Avichs ventures is a shopping warehouse for different types of fashion items, home appliances, furnitures and more
                                    </p>
                                </div>
                            </div>              
                        </div>
                        <!-- BOX ACCOUT -->
                        <div class="col-md-3 col-sm-6 col-xs-6 box-account box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">My Account</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="/register">Sign Up</a></li>
                                        <li><a href="/contact">Get In Touch</a></li>
                                        <li><a href="/contact">Our Location</a></li>
                                        <li><a href="/product-category/others">Specials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- BOX INFOMATION -->
                        <div class="col-md-3 col-sm-6 col-xs-6 box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Information</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/product-category/electrionics">Electronics</a></li>
                                        <li><a href="/product-category/home-appliances">Home Appliances</a></li>
                                        <li><a href="/product-category/home-kitchen">Kitchen wares</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- BOX ABOUT -->
                        <div class="col-md-3  col-sm-6 col-xs-6 collapsed-block box-footer">
                            <div class="module ">
                                <h3 class="modtitle">About Us</h3>
                                <div class="modcontent">
                                    <ul class="contact-address">
                                        <li><span class="fa fa-home"></span> 5, Opposite Amala Folarin, Badore Road, Badore.</li>
                                        <li><span class="fa fa-envelope"></span> Email: <a href="#"> customer@avichs.com</a></li>
                                        <li><span class="fa fa-phone">&nbsp;</span> Phone: +234 806 017 7920</li>
                                    </ul>
                                    <ul class="payment-method">
                                        <li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/cms/payment/payment-1.png') }}" alt="Payment"></a></li>
                                        <li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/cms/payment/payment-2.png') }}" alt="Payment"></a></li>
                                        <li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/cms/payment/payment-3.png') }}" alt="Payment"></a></li>
                                        <li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/cms/payment/payment-4.png') }}" alt="Payment"></a></li>
                                        <li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/cms/payment/payment-5.png') }}" alt="Payment"></a></li>
                                    </ul>
                                </div>
                            </div>              
                        </div>
                    </div>
                </div>
            </div>      
            <!-- FOOTER BOTTOM -->
            <div class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        Avichs Warehouse © {{ date('Y') }}.             
                        </div>
                        <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- //end Footer Container -->

    </div>
    <!-- Social widgets -->
    {{-- <section class="social-widgets visible-lg">
        <ul class="items">
            <li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>FACEBOOK</h5>
                    </div>
                    <div class="loading">
                        <img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/lazy-loader.gif" alt="loader">
                    </div>
                </div>
            </li>
            <li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>TWITTER FEEDS</h5> 
                    </div>
                    <div class="loading">
                        <img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/lazy-loader.gif" alt="loader">
                    </div>
                </div>
            </li>
            <li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>YouTube</h5>
                    </div>
                    <div class="loading"> <img  class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/theme/lazy-loader.gif" alt="loader"></div>
                </div>
            </li>
        </ul>
    </section>  <!-- End Social widgets --> --}}
    

    <link rel='stylesheet' property='stylesheet'  href='{{ asset('css/themecss/cpanel.css')}}' type='text/css' media='all' />
    
    
    
    <!-- Include Libs & Plugins
    ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/libs.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/unveil/jquery.unveil.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/countdown/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/datetimepicker/moment.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js')}}"></script>


    <!-- Theme files
    ============================================ -->
    <script type="text/javascript" src="{{ asset('js/themejs/application.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/toppanel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/so_megamenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/addtocart.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/cpanel.js')}}"></script>
    @livewireScripts
</body>
</html>