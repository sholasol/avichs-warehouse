
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
    ============================================ -->
    <title>Avichs :: Technologies</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	{{-- <base href="{{ \URL::to('/') }}"> --}}
	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="asset/icon.jpeg">
	
	<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{asset('js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/themecss/lib.css')}}" rel="stylesheet">
    <link href="{{asset('js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
	<link href="{{asset('/docs/5.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



	<!-- Theme CSS
	============================================ -->
	
	<link href="{{asset('css/themecss/so_megamenu.css')}}" rel="stylesheet">
	<link href="{{asset('css/themecss/so-categories.css')}}" rel="stylesheet">
	<link href="{{asset('css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
	<link href="{{asset('css/footer6.css')}}" rel="stylesheet">
	<link href="{{asset('css/header6.css')}}" rel="stylesheet">
	<link id="color_scheme" href="{{asset('css/home6.css')}}" rel="stylesheet">
	<link id="color_scheme" href="{{asset('css/home3.css')}}" rel="stylesheet">
	<link id="color_scheme" href="{{asset('css/home9.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link href="{{asset('css/themecss/so-categories.css')}}" rel="stylesheet">
	
	<!-- <link href="css/responsive.css" rel="stylesheet">
-->
@livewireStyles()
</head>

<body class="common-home res layout-home6">
	
	<div id="wrapper" class="wrapper-full banners-effect-8">

		
		

		<!-- Header Container  -->
		<header id="header" class=" variantleft type_6 ">
			<!-- Header Top -->
			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="header-top-left form-inline col-sm-6 col-xs-6 compact-hidden " style="background-color: rgb(255, 166, 0) !important;">

							<ul class="top-link list-inline">
								<li class="wishlist text-primary">
									<a class="fa fa-phone" style="font-size: 17px !important;"> +234 819 0900 909</a>
								</li>
								
								<li class="wishlist text-primary">
									@livewire('header-search-component')
								</li>
							</ul>
						</div>

						
						<div class="header-top-right collapsed-block   col-sm-6 col-xs-6 compact-hidden text-right">

							<div>
								<ul class="top-link list-inline">
									@if (Route::has('login'))
										@auth
											@if (Auth::user()->utype ==='ADM')
											
												<li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="My Account!"><span>Welcome {{ Auth::user()->name }}</span></a></li>
												<li class="wishlist hidden-xs">
													<a href="" class="fa fa-heart" style="color:#fff;"></a>
												</li>
												<li>
													<div class="form-group languages-block ">
															<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
																<i class="fa fa-desktop"></i>
																<span class="hidden-xs">{{ Auth::user()->name }} Account</span>
																<span class="fa fa-caret-down"></span>
															</a>
															<ul class="dropdown-menu" >
																<li><a href="{{ route('admin.dashboard') }}" >Admin Dashboard </a></li>
																<li> <a href="{{ route('admin.categories') }}"> Categories </a> </li>
																<li> <a href="{{ route('admin.product') }}"> Products </a> </li>
																<li> <a href="{{ route('admin.homeslider') }}"> Manage Slider </a> </li>
																<li> <a href="{{ route('admin.coupons') }}"> Coupons </a> </li>
																<li>
																	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
																</li>
																<form id="logout-form" method="post" action="{{ route('logout') }}">
																	@csrf
																</form>
															</ul>
													</div>
												</li>
												
											@else
												<li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="My Account!"><span>Welcome {{ Auth::user()->name }}</span></a></li>
												<li>
													<div class="form-group languages-block ">
															<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
																<i class="fa fa-desktop"></i>
																<span class="hidden-xs">{{ Auth::user()->name }} Account</span>
																<span class="fa fa-caret-down"></span>
															</a>
															<ul class="dropdown-menu" >
																<li><a href="{{ route('user.dashboard') }}" >Dashboard </a></li>
																<li> <a href=""> My Order </a> </li>
																<li>
																	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
																</li>
																<form id="logout-form" method="post" action="{{ route('logout') }}">
																	@csrf
																</form>	
															</ul>
													</div>
												</li>
											@endif

										@else

										
										@livewire('wish-list-count-component')
									
										
										</li>
											<li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Welcome Customer!"><span>Welcome Customer!</span></a></li>
											<li class="checkout"><a href="{{ route('login') }}" class="top-link-checkout" title="Login"><span>Login</span></a></li>
											<li class="login"><a href="{{ route('register') }}" title="Register"><span>Register</span></a></li>
										@endif
										
									@endif
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->

			<!-- Header center -->
			<div class="header-center left">
				<div class="container-fluid">
					<div class="row">
						<!-- Logo -->
						<div class="navbar-logo col-lg-2  col-sm-12 col-xs-12">
							<a href="/"><img src="{{asset('asset/logo.jpeg')}}" title="Avichs" alt="Avichs"></a>
						</div>
						<!-- //end Logo -->

						<div class="megamenu-hori col-lg-8  col-md-10  col-sm-10 col-xs-6 ">
							<div class="responsive so-megamenu ">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">

										<div class="navbar-header">
											<button   id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>

										</div>

										<div class="megamenu-wrapper">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="home hover">
															<p class="close-menu"></p>
															<a href="/" class="menu1">Home</a>
														</li>
														<li class="">
															<p class="close-menu"></p>
															<a href="/shop" class="clearfix menu1">
																<strong>Shop</strong>
																<span class="label"></span>
															</a>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix menu1">
																<strong>Products</strong>
																<span class="label"></span>

															</a>
															<div class="sub-menu" style="width: 100%; right: 0px; display: none;">
																<div class="content" style="height: 398px; display: none;">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-3 img img1">
																					<a href="#"><img src="img/demo/cms/img1.jpg" alt="banner1"></a>
																				</div>
																				<div class="col-md-3 img img2">
																					<a href="#"><img src="img/demo/cms/img2.jpg" alt="banner2"></a>
																				</div>
																				<div class="col-md-3 img img3">
																					<a href="#"><img src="img/demo/cms/img3.jpg" alt="banner3"></a>
																				</div>
																				<div class="col-md-3 img img4">
																					<a href="#"><img src="img/demo/cms/img4.jpg" alt="banner4"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Automotive</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Car Alarms and Security</a></li>
																							<li><a href="#" class="main-menu">Car Audio &amp; Speakers</a></li>
																							<li><a href="#" class="main-menu">Gadgets &amp; Auto Parts</a></li>
																							<li><a href="#" class="main-menu">More Car Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Electronics</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Battereries &amp; Chargers</a></li>
																							<li><a href="#" class="main-menu">Headphones, Headsets</a></li>
																							<li><a href="#" class="main-menu">Home Audio</a></li>
																							<li><a href="#" class="main-menu">Mp3 Players &amp; Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Earings</a></li>
																							<li><a href="#" class="main-menu">Wedding Rings</a></li>
																							<li><a href="#" class="main-menu">Men Watches</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																							<li><a href="#" class="main-menu">Gift for Man</a></li>
																							<li><a href="#" class="main-menu">Gift for Woman</a></li>
																							<li><a href="#" class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>

														
														<li class="">
															<p class="close-menu"></p>
															<a href="#" class="clearfix menu1">
																<strong>Blog</strong>
																<span class="label"></span>
															</a>
														</li>
														<li class="">
															<p class="close-menu"></p>
															<a href="/contact" class="clearfix menu1">
																<strong>Contact Us</strong>
																<span class="label"></span>
															</a>
														</li>
													</ul>

												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
							
						</div>
						<div class=" shopping_cart pull-left col-md-2 col-sm-2 col-xs-12">

							<!--cart-->
							<div id="cart" class=" btn-group btn-shopping-cart">
								@livewire('cart-count-component')

								<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

									<li>
										<table class="table table-striped">
											<tbody>
												@foreach (Cart::content() as $item)
												<tr>
													<td class="text-center" style="width:70px">
														<a href="{{ route('product.details',['slug' =>$item->model->slug]) }}"> 
															<img src="{{asset('imagge/product')}}/{{ $item->model->image }}" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> 
														</a>
													</td>
													<td class="text-left"> <a class="cart_product_name" href="{{ route('product.details',['slug' =>$item->model->slug]) }}">{{ $item->model->slug }}</a> </td>
													<td class="text-center"> {{ $item->qty }} </td>
													<td class="text-center"> ${{ $item->model->regular_price }} </td>
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
														<td class="text-right">${{ Cart::subtotal() }}</td>
													</tr>
													<tr>
														<td class="text-left"><strong>VAT</strong>
														</td>
														<td class="text-right">${{ Cart::tax() }}</td>
													</tr>
													<tr>
														<td class="text-left"><strong>Total</strong>
														</td>
														<td class="text-right">${{ Cart::total() }}</td>
													</tr>
												</tbody>
											</table>
											<p class="text-right"> <a class="btn view-cart" href="/cart"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="/checkout"><i class="fa fa-share"></i>Checkout</a> </p>
										</div>
									</li>
								</ul>
							</div>

							<!--//cart-->
						</div>
						<!-- Secondary menu -->

					</div>

				</div>
			</div>
			<!-- //Header center -->
		</header>
		<!-- //Header Container  -->
		
		{{ $slot }}


		<!-- Footer Container -->
		<footer class="footer-container  type_footer6">

			<!-- /Footer Top Container -->
			<div class="footer-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 collapsed-block ">
							<div class="module clearfix">
								<h3 class="">About Us	</h3>
								<div class="modcontent">
									<ul class="contact-address">
										<li><p><span class="fa fa-home" aria-hidden="true"></span>No 40 Baria Sreet 133/2 NewYork City, NY, USA.</p></li>
										<li><p><span class="fa fa-envelope-o "></span>Hiesign@Magentech.com</p></li>
										<li><p><span class="fa fa-phone"> </span>(888) 1234 56789</p> </li>
										<li><p><span class="fa fa-clock-o"> </span>Mon - Sun / 9:00AM - 7:30PM </p> </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 box-information">
							<div class="module clearfix">
								<h3 class="">Information</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="order-history.html">Order history</a></li>
										<li><a href="order-information.html">Order information</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 box-extras">
							<div class="module clearfix">
								<h3 class="">Extras</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="return.html">Returns</a></li>
										<li><a href="sitemap.html">Site Map</a></li>
										<li><a href="my-account.html">My Account</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 box-account">
							<div class="module clearfix">
								<h3 class="">My Account</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">Brands</a></li>
										<li><a href="gift-voucher.html">Gift Vouchers</a></li>
										<li><a href="#">Affiliates</a></li>
										<li><a href="#">Specials</a></li>
										<li><a href="#" target="_blank">Our Blog</a></li>
									</ul>
								</div>
							</div>
						</div>



					</div>
				</div>
			</div>
			<div class="footer-mid">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 footer-mid-left">	
							<div class="share-icon ">
								<ul>
									<li class="facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li class="skype"><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
									<li class="skype"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li class="skype"><a href="#"><i class="fa fa-instagram  " aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-9 footer-mid-right">
							<div class=" block-help">
								<div class="">
									<div class=" row">
										<div class="block-help-left col-sm-6 col-xs-12">
											<h3>NEED HELP? </h3>
											<p>SUPPORT TEAM 24/7 AT (844) 555-8386</p>
										</div>
										<div class="block-help-right col-sm-6 col-xs-12">
											<div class="btn-sub">
												<i class="fa fa-envelope hidden-xs" aria-hidden="true"></i>
												<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Your Email Address..." name="subscribe">
												<button type="submit" class="button-search btn btn-primary" name="submit_subscribe">Subscribe</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bot">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-xs-12 footer-bot-left">
							<ul class="pay">
								<li><img src="{{asset('img/demo/payment/visa.jpg')}}" alt=""></li>
								<li><img src="{{asset('img/demo/payment/meastro.jpg')}}" alt=""></li>
								<li><img src="{{asset('img/demo/payment/paypal.jpg')}}" alt=""></li>
								<li><img src="{{asset('img/demo/payment/union.jpg')}}" alt=""></li>
								<li><img src="{{asset('img/demo/payment/cirrus.jpg')}}" alt=""></li>
								<li><img src="{{asset('img/demo/payment/ebay.jpg')}}" alt=""></li>
							</ul>
						</div>
						<div class="col-md-9 col-sm-12 col-xs-12 footer-bot-right">
							<div class="row">
								{{-- <div class="download col-sm-6">
									<h3>Download Our App</h3>
									<a href="#"><img src="img/demo/download/app.jpg" alt=""></a>
									<a href="#"><img src="img/demo/download/ggplay.jpg" alt=""></a>
								</div> --}}
								<div class="col-sm-6 copyright">
									<p>AVICHS<a href="#"> Electronics and Home Appliances</a></p>
								</div>
								<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	

	<!-- Cpanel Block -->
	{{-- <div id="sp-cpanel_btn" class="isDown visible-lg">
		<i class="fa fa-cog"></i>
	</div>		 --}}

	

<!-- Begin Color Scheme
	============================================ -->
	<?php 
	require_once ('scssphp/scss.inc.php');
	use Leafo\ScssPhp\Compiler;
	use Leafo\ScssPhp\Server;
	$themeCssName='';	
	$ColorScheme = isset($_COOKIE['customColorScheme']) ? $_COOKIE['customColorScheme'] : '';
	
	if(!empty($ColorScheme)){

		$themeCssName = 'theme-'.str_replace("#","", $ColorScheme) . '.css';
		if(isset($_POST['submitbtn'])){
			$themeColor = strtolower($ColorScheme);
			$scss = new Compiler();
			$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
			$scss->addImportPath('sass');
			$scss->setVariables(array(
				'$linkColor' => $themeColor,
				'$dir' => 'ltr',
				));

			$string_css 	= $scss->compile('@import "home6.scss"');
			file_put_contents('css/'.$themeCssName, $string_css);
		}
	}

	if(isset($_POST['submit-reset'])){
		clear_css_cache('css');
		unset($_POST);
	}

	function clear_css_cache($type){
		$files = glob('css/theme-*.'.$type);
		if ($files) {
			foreach ($files as $file) {
				if (file_exists($file)) unlink($file);
			}
		}
	}
	?>
	<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
	<?php if(isset($ColorScheme)){?>
	<link rel='stylesheet' property='stylesheet'  href='css/<?php echo $themeCssName?>' type='text/css' media='all' />
	<?php }?>

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Ã—</span></button> <h4 class="modal-title" id="myLargeModalLabel">Skin CSS</h4> </div>
				<div class="modal-body"> 
					<textarea id="getCSSTextarea" class="get-css" readonly=""><?php $fileCssName = !empty($themeCssName) ?  $themeCssName : 'home6.css'; echo '/********************************************
						' ;
						echo '*	 Color Scheme: '.$fileCssName;
						echo '
						********************************************/
						' ;
						echo file_get_contents('css/'.$fileCssName);
						?>
					</textarea>
				</div> 


			</div>
		</div>
	</div>
<!-- End Color Scheme
	============================================ -->


	
<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/owl-carousel/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/themejs/libs.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/unveil/jquery.unveil.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/countdown/jquery.countdown.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/datetimepicker/moment.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-ui/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/modernizr/modernizr-2.6.2.min.js')}}"></script>

<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="{{asset('js/themejs/application.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/themejs/homepage.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/themejs/so_megamenu.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/themejs/addtocart.js')}}"></script>	
	<script type="text/javascript" src="{{asset('js/themejs/pathLoader.js')}}"></script>	
	<script type="text/javascript" src="{{asset('js/themejs/cpanel.js')}}"></script>
	<link href="{{asset('js/minicolors/miniColors.css')}}" rel="stylesheet">
	<script type="text/javascript" src="{{asset('js/minicolors/jquery.miniColors.min.js')}}"></script>
	

	<script>


		var slides = document.querySelectorAll('#slides .slide');
		var currentSlide = 0;
		var slideInterval = setInterval(nextSlide,2000);

		function nextSlide(){
		slides[currentSlide].className = 'slide';
		currentSlide = (currentSlide+1)%slides.length;
		slides[currentSlide].className = 'slide showing';
		}


	</script>
	<script>
		

// jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');

// jQuery('.quantity').each(function () {

//     var spinner = jQuery(this),

//         input = spinner.find('input[type="number"]'),

//         btnUp = spinner.find('.quantity-up'),

//         btnDown = spinner.find('.quantity-down'),

//         min = input.attr('min'),

//         max = input.attr('max');

//     btnUp.click(function () {

//         var oldValue = parseFloat(input.val());

//         if (oldValue >= max) {

//             var newVal = oldValue;

//         } else {

//             var newVal = oldValue + 1;

//         }

//         spinner.find("input").val(newVal);

//         spinner.find("input").trigger("change");

//     });

//     btnDown.click(function () {

//         var oldValue = parseFloat(input.val());

//         if (oldValue <= min) {

//             var newVal = oldValue;

//         } else {

//             var newVal = oldValue - 1;

//         }

//         spinner.find("input").val(newVal);

//         spinner.find("input").trigger("change");

//     });

// });

	</script>
	
	@livewireScripts()
</body>
</html>