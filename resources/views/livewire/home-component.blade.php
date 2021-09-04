<main id="content" class="page-main">
    <!-- Block Spotlight1  -->
    <div class="so-spotlight1 ">
        <div class="container">
            <div class="row"> 
                <div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
                    <div class="slider-container "> 
                        <div id="so-slideshow" class="">
                            <div class="module slideshow no-margin">
                              @foreach ($sliders as $slide)
                                <div class="item">
                                    <a href="/shop"><img class="img-responsive" src="{{ asset('asset/image/sliders') }}/{{ $slide->image }}" alt="{{ $slide->title }}"></a>
                                    <div class="sohomeslider-description">
                                        {{-- <img class="image image-sl11 pos-right img-active" src="{{ asset('asset/image/sliders') }}/{{ $slide->image }}" alt="{{ $slide->title }}"> --}}
                                        <div class="text pos-right text-sl11">
                                            <h3 class="tilte modtitle-sl11  title-active">{{ $slide->title }}</h3>
                                            <p class="des des-sl11 des-active">{{ $slide->subtitle }}</p>      
                                        </div> 					
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            {{-- <div class="loadeding"></div> --}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="block-banner banners banner-sn-1 wow fadeInUp">
                <div class="img-1 banner1-1">
                    <a title="Static Image" href="/shop"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/banner/m1.jpg')}}" alt="Static Image"></a>
                </div>
                <div class="img-1 banner1-2">
                    <a title="Static Image" href="/shop"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/banner/m2.jpg')}}" alt="Static Image"></a>
                </div>
                <div class="img-1 banner1-3">
                    <a title="Static Image" href="/shop"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/banner/m3.jpg')}}" alt="Static Image"></a>
                </div>
                <div class="img-1 banner1-4">
                    <a title="Static Image" href="/shop"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/banner/m4.jpg')}}" alt="Static Image"></a>
                </div>
            </div>
        </div>  
    </div>
    <!-- Block Spotlight2  -->
    <div class="so-spotlight2 ">
        <div class="container">
            <div class="container">
                <!-- Banner Content1 -->
                <div class="module banner">
                    <div class="banners">
                        <div><a title="Static Image" href="/shop"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/banner/m5.jpg') }}" alt="Static Image"></a></div>
                    </div>
                </div>
                <!-- End Banner -->
                <!-- Mod Supercategory 2 -->
                <div class="module cus-style-supper-cate supper2">
                    <div class="header">
                            <h3 class="modtitle">
                            <span class="icon-color">
                                <i class="fa fa-music"></i>
                                Electronics			
                                <small class="arow-after"></small>
                            </span>
                            <strong class="line-color"></strong>
                        </h3>
                        
                    </div>
                    
                    <div id="so_super_category_2" class="so-sp-cat first-load">
                        <div class="spcat-wrap ">
                            <div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
                                
                            </div>
                            <div class="main-left">
                                <div class="banner-post-text">
                                     <a href="/shop" title="banner"> <img src="{{ asset('image/demo/banner/s22.jpg') }}" alt="banner">  </a>                        				
                                </div>
                                <div class="hot-category">
                                    <div class="category-wrap-cat">
                                        <div class="title-imageslider  sp-cat-title-parent">
                                         Hot Categories        </div>
                               
                                        <div id="cat_slider_2" class="slider">
                                            <div class="cat_slider_inner so_category_type_default">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="cat_slider_title">
                                                            @foreach ($categories as $cat)       
                                                            <a href="{{ route('product.category', ['category_slug'=>$cat->slug]) }}"  title="{{ $cat->name }}" target="_self">
                                                                       <i class="fa fa-caret-right"></i> {{ $cat->name }} </a>
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-right">
                                <div class="banner-pre-text">
                                    <a href="/shop" title="banner">   <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/banner/t22.jpg') }}" alt="banner"></a>               				
                                </div>
                                                                    
                                <div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
                                    <div class="spcat-items spcat-items-loaded items-category-rating product-layout spcat-items-selected" data-total="9">
                                        <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                            <div class="ltabs-items-inner ltabs-slider ">				
                                                 
                                                @foreach ($products as $product)
                                                <div class="ltabs-item">
                                                    <div class="item-inner product-thumb product-item-container transition ">
                                                        <div class="left-block">
                                                            <div class="product-image-container">
                                                                <div class="image">
                                                                       <a href="{{ route('product.details', ['slug' =>$product->slug]) }}"  title="{{ $product->name }}"
                                                                       class="lt-image" target="_self" title="Verty nolen max..">
                                                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products')}}/{{ $product->image }}" alt="{{ $product->name }}" title="{{ $product->name }}"/>
                                                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products')}}/{{ $product->image }}" alt="{{ $product->name }}" title="{{ $product->name }}"/>
                                                                    </a>
                                                                </div>
                                                                                   
                                                            </div>
                                                            <span class="label label-sale">{{ $product->stock_status }}</span>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4>
                                                                    <a href="{{ route('product.details', ['slug' =>$product->slug]) }}"  title="{{ $product->name }}" title="{{ $product->name }}" target="_self">
                                                                        {{ $product->name }}							</a>
                                                                </h4>				
                                                                <p class="price">
                                                                      <span class="price-new">₦ {{ $product->regular_price }}</span> 
    
                                                                  </p>

                                                            </div>
                                                            <div>
                                                                <a class="btn btn-info btn-sm" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})" >
                                                                    Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="button-group">
                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                            <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">
                                                                <i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spcat-items spcat-items-loaded items-category-p_date_added product-layout" data-total="9">
                                        <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                            <div class="ltabs-items-inner ltabs-slider ">
                                                
                                            </div>
                                        </div>
                                    </div>								
                                    <div class="spcat-items spcat-items-loaded items-category-sales product-layout" data-total="9">
                                        <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                            <div class="ltabs-items-inner ltabs-slider ">				
                                                
                                            </div>
                                        </div>
                                    </div>	
                                    <div class="spcat-items spcat-items-loaded items-category-p_quantity product-layout" data-total="9">
                                        <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                            <div class="ltabs-items-inner ltabs-slider ">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spcat-items spcat-items-loaded items-category-p_price product-layout" data-total="9">
                                        <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                            <div class="ltabs-items-inner ltabs-slider ">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Items-->
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- End Mod -->
                <!-- Banner Content2 -->
                <div class="module banner">
                    <div class="banners">
                        <div><a title="Static Image" href="/shop"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('image/demo/banner/m7.jpg')}}" alt="Static Image"></a></div>
                    </div>
                </div>
                <!-- End Banner -->
                <!-- Mod Supercategory 3 -->
                <div class="module cus-style-supper-cate supper3">
                    <div class="header">
                            <h3 class="modtitle">
                            <span class="icon-color">
                                <i class="fa fa-desktop "></i>
                                Computer			
                                <small class="arow-after"></small>
                            </span>
                            <strong class="line-color"></strong>
                        </h3>
                        
                    </div>
                    
                    <div id="so_super_category_3" class="so-sp-cat first-load">
                        <div class="spcat-wrap ">
                            <div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
                               
                            </div>
                            <div class="main-left">
                                <div class="banner-post-text">
                                     <a href="/shop" title="banner"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('image/demo/banner/s23.jpg') }}" alt="banner">  </a>                        				
                                </div>
                                <div class="hot-category">
                                    <div class="category-wrap-cat">
                                        <div class="title-imageslider  sp-cat-title-parent">
                                        Computers       </div>
                               
                                        <div id="cat_slider_1" class="slider">
                                            <div class="cat_slider_inner so_category_type_default">
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="cat_slider_title">
                                                                    
                                                            @foreach ($categories as $cat)       
                                                            <a href="{{ route('product.category', ['category_slug'=>$cat->slug]) }}"  title="{{ $cat->name }}" target="_self">
                                                                       <i class="fa fa-caret-right"></i> {{ $cat->name }} </a>
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-right">
                                <div class="banner-pre-text">
                                    <a href="#" title="banner">   <img src="image/demo/banner/t23.jpg" alt="banner"></a>               				
                                </div>
                                                                    
                                <div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->
                                    <div class="spcat-items spcat-items-loaded items-category-p_price product-layout spcat-items-selected" data-total="9">
                                        <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                            <div class="ltabs-items-inner ltabs-slider ">
                                                @foreach ($sounds as $sound)
                                                <div class="ltabs-item ">
                                                    <div class="item-inner product-thumb product-item-container transition ">
                                                        <div class="left-block">
                                                            <div class="product-image-container">
                                                                <div class="image">
                                                                       <a href="{{ route('product.details', ['slug' =>$sound->slug]) }}"  title="{{ $sound->name }}"
                                                                       class="lt-image" target="_self" title="Verty nolen max..">
                                                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products')}}/{{ $sound->image }}" alt="{{ $sound->name }}" title="{{ $sound->name }}"/>
                                                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products')}}/{{ $sound->image }}" alt="{{ $sound->name }}" title="{{ $sound->name }}"/>
                                                                    </a>
                                                                </div>
                                                                                   
                                                            </div>
                                                            <span class="label label-sale">{{ $sound->stock_status }}</span>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <h4>
                                                                    <a href="{{ route('product.details', ['slug' =>$sound->slug]) }}"  title="{{ $sound->name }}" title="{{ $sound->name }}" target="_self">
                                                                        {{ $sound->name }}							</a>
                                                                </h4>				
                                                                <p class="price">
                                                                      <span class="price-new">{{ $sound->regular_price }}</span> 
    
                                                                  </p>
                                                                  <div>
                                                                    <a class="btn btn-info btn-sm" wire:click.prevent="store({{ $sound->id }}, '{{ $sound->name }}', {{ $sound->regular_price }})" >
                                                                        Add to Cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="button-group">
                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                            <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" wire:click.prevent="store({{ $sound->id }}, '{{ $sound->name }}', {{ $sound->regular_price }})">
                                                                <i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>									
                                    
                                    
                                </div>
                                <!--End Items-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Mod -->
            </div>
        </div>  
    </div>
    <!-- Block Spotlight3  -->
    <div class="so-spotlight3">
        <div class="container">
            <!-- Banner Content1 -->
            <div class="module banner">
                <div class="banners">
                    <div><a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/m5.jpg" alt="Static Image"></a></div>
                </div>
            </div>
            <!-- End Banner -->
            <!-- Mod Supercategory 2 -->
            <div class="module cus-style-supper-cate supper2">
                <div class="header">
                        <h3 class="modtitle">
                        <span class="icon-color">
                            <i class="fa fa-home"></i>
                            Home & Kitchens				
                            <small class="arow-after"></small>
                        </span>
                        <strong class="line-color"></strong>
                    </h3>
                    
                </div>
                
                <div id="so_super_category_2" class="so-sp-cat first-load">
                    <div class="spcat-wrap ">
                        <div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
                            
                        </div>
                        <div class="main-left">
                            <div class="banner-post-text">
                                 <a href="/shop" title="banner"> <img src="image/demo/banner/s22.jpg" alt="banner">  </a>                        				
                            </div>
                            <div class="hot-category">
                                <div class="category-wrap-cat">
                                    <div class="title-imageslider  sp-cat-title-parent">
                                     Hot Categories        </div>
                           
                                    <div id="cat_slider_2" class="slider">
                                        <div class="cat_slider_inner so_category_type_default">
                                            <div class="item">
                                                <div class="item-inner">
                                                    <div class="cat_slider_title">
                                                                
                                                        @foreach ($categories as $cat)       
                                                            <a href="{{ route('product.category', ['category_slug'=>$cat->slug]) }}"  title="{{ $cat->name }}" target="_self">
                                                                       <i class="fa fa-caret-right"></i> {{ $cat->name }} </a>
                                                            @endforeach
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-right">
                            <div class="banner-pre-text">
                                <a href="/shop" title="banner">   <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t22.jpg" alt="banner"></a>               				
                            </div>
                                                                
                            <div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
                                <div class="spcat-items spcat-items-loaded items-category-rating product-layout spcat-items-selected" data-total="9">
                                    <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                        <div class="ltabs-items-inner ltabs-slider ">				
                                            
                                            @foreach ($homes as $home)
                                            <div class="ltabs-item ">
                                                <div class="item-inner product-thumb product-item-container transition ">
                                                    <div class="left-block">
                                                        <div class="product-image-container">
                                                            <div class="image">
                                                                   <a href="{{ route('product.details', ['slug' =>$home->slug]) }}"  title="{{ $home->name }}"
                                                                   class="lt-image" target="_self" title="Verty nolen max..">
                                                                    <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products')}}/{{ $home->image }}" alt="{{ $home->name }}" title="{{ $home->name }}"/>
                                                                    <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products')}}/{{ $home->image }}" alt="{{ $home->name }}" title="{{ $home->name }}"/>
                                                                </a>
                                                            </div>
                                                                               
                                                        </div>
                                                        <span class="label label-sale">{{ $home->stock_status }}</span>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <h4>
                                                                <a href="{{ route('product.details', ['slug' =>$home->slug]) }}"  title="{{ $home->name }}" title="{{ $home->name }}" target="_self">
                                                                    {{ $home->name }}							</a>
                                                            </h4>				
                                                            <p class="price">
                                                                  <span class="price-new">₦ {{ $home->regular_price }}</span> 

                                                              </p>
                                                              <div>
                                                                <a class="btn btn-info btn-sm" wire:click.prevent="store({{ $home->id }}, '{{ $home->name }}', {{ $home->regular_price }})" >
                                                                    Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" wire:click.prevent="store({{ $home->id }}, '{{ $home->name }}', {{ $home->regular_price }})">
                                                            <i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="spcat-items spcat-items-loaded items-category-p_date_added product-layout" data-total="9">
                                    <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                        <div class="ltabs-items-inner ltabs-slider ">
                                            
                                        </div>
                                    </div>
                                </div>								
                                <div class="spcat-items spcat-items-loaded items-category-sales product-layout" data-total="9">
                                    <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                        <div class="ltabs-items-inner ltabs-slider ">				
                                            
                                        </div>
                                    </div>
                                </div>	
                                <div class="spcat-items spcat-items-loaded items-category-p_quantity product-layout" data-total="9">
                                    <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                        <div class="ltabs-items-inner ltabs-slider ">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="spcat-items spcat-items-loaded items-category-p_price product-layout" data-total="9">
                                    <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                        <div class="ltabs-items-inner ltabs-slider ">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Items-->
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <!-- End Mod -->
            <!-- Banner Content2 -->
            <div class="module banner">
                <div class="banners">
                    <div><a title="Static Image" href="/shop"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/m7.jpg" alt="Static Image"></a></div>
                </div>
            </div>
            <!-- End Banner -->
            <!-- Mod Supercategory 3 -->
            <div class="module cus-style-supper-cate supper3">
                <div class="header">
                        <h3 class="modtitle">
                        <span class="icon-color">
                            <i class="fa fa-list "></i>
                            Featured			
                            <small class="arow-after"></small>
                        </span>
                        <strong class="line-color"></strong>
                    </h3>
                    
                </div>
                
                <div id="so_super_category_3" class="so-sp-cat first-load">
                    <div class="spcat-wrap ">
                        <div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
                           
                        </div>
                        <div class="main-left">
                            <div class="banner-post-text">
                                 <a href="/shop" title="banner"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/s23.jpg" alt="banner">  </a>                        				
                            </div>
                            <div class="hot-category">
                                <div class="category-wrap-cat">
                                    <div class="title-imageslider  sp-cat-title-parent">
                                    Computers       </div>
                           
                                    <div id="cat_slider_1" class="slider">
                                        <div class="cat_slider_inner so_category_type_default">
                                            <div class="item">
                                                <div class="item-inner">
                                                    <div class="cat_slider_title">
                                                                
                                                        @foreach ($categories as $cat)       
                                                            <a href="{{ route('product.category', ['category_slug'=>$cat->slug]) }}"  title="{{ $cat->name }}" target="_self">
                                                                       <i class="fa fa-caret-right"></i> {{ $cat->name }} </a>
                                                            @endforeach
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-right">
                            <div class="banner-pre-text">
                                <a href="#" title="banner">   <img src="image/demo/banner/t23.jpg" alt="banner"></a>               				
                            </div>
                                                                
                            <div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->
                                <div class="spcat-items spcat-items-loaded items-category-p_price product-layout spcat-items-selected" data-total="9">
                                    <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                                        <div class="ltabs-items-inner ltabs-slider ">
                                            @foreach ($others as $other)
                                            <div class="ltabs-item ">
                                                <div class="item-inner product-thumb product-item-container transition ">
                                                    <div class="left-block">
                                                        <div class="product-image-container">
                                                            <div class="image">
                                                                   <a href="{{ route('product.details', ['slug' =>$other->slug]) }}"  title="{{ $other->name }}"
                                                                   class="lt-image" target="_self" title="Verty nolen max..">
                                                                    <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products')}}/{{ $other->image }}" alt="{{ $other->name }}" title="{{ $other->name }}"/>
                                                                    <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('asset/image/products')}}/{{ $other->image }}" alt="{{ $other->name }}" title="{{ $other->name }}"/>
                                                                </a>
                                                            </div>
                                                                               
                                                        </div>
                                                        <span class="label label-sale">{{ $other->stock_status }}</span>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <h4>
                                                                <a href="{{ route('product.details', ['slug' =>$other->slug]) }}"  title="{{ $other->name }}" title="{{ $other->name }}" target="_self">
                                                                    {{ $other->name }}							</a>
                                                            </h4>				
                                                            <p class="price">
                                                                  <span class="price-new">{{ $other->regular_price }}</span> 

                                                              </p>
                                                              <div>
                                                                <a class="btn btn-info btn-sm" wire:click.prevent="store({{ $other->id }}, '{{ $other->name }}', {{ $other->regular_price }})" >
                                                                    Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" wire:click.prevent="store({{ $other->id }}, '{{ $other->name }}', {{ $other->regular_price }})">
                                                            <i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>									
                                
                                
                            </div>
                            <!--End Items-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mod -->
        </div>	
    </div>
  
</main >