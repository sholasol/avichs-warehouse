<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Product Overview</a></li>
        
    </ul>
    
    <div class="row">
        <!--Middle Part Start-->
        <div id="content"  class="col-md-9 col-md-push-3 col-sm-12 col-xs-12">
            
            <div class="product-view row">
                <div class="left-content-product col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="content-product-left  col-sm-6 col-xs-12 ">
                            <div class="large-image  ">
                                <img itemprop="image" class="product-image-zoom" src="{{ asset('asset/image/products')}}/{{ $product->image }}" data-zoom-image="{{ asset('asset/image/products')}}/{{ $product->image }}" title="{{ $product->name }}" alt="Avichs">
                            </div>

                            <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
                                @foreach ($additional_photos as $aproduct)
                                    <a data-index="0" class="img thumbnail " data-image="{{ asset('asset/image/additional_photos')}}/{{ $aproduct->filename }}" title="{{ $aproduct->filename }}">
                                        <img src="{{ asset('asset/image/additional_photos')}}/{{ $aproduct->filename }}" title="{{ $aproduct->filename }}" alt="{{ $aproduct->filename }}">
                                    </a>
                                @endforeach
                                {{-- <a data-index="1" class="img thumbnail " data-image="{{ asset('asset/image/products')}}/{{ $product->image }}" title="{{ $product->name }}">
                                    <img src="{{ asset('asset/image/products')}}/{{ $product->image }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                </a>
                                <a data-index="02" class="img thumbnail " data-image="{{ asset('asset/image/products')}}/{{ $product->image }}" title="{{ $product->name }}">
                                    <img src="{{ asset('asset/image/products')}}/{{ $product->image }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                </a>
                                <a data-index="3" class="img thumbnail " data-image="{{ asset('asset/image/products')}}/{{ $product->image }}" title="{{ $product->name }}">
                                    <img src="{{ asset('asset/image/products')}}/{{ $product->image }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                </a> --}}
                            </div>
                            
                        </div>

                        <div class="content-product-right col-sm-6 col-xs-12">
                            <div class="title-product">
                                <h1>{{ $product->name }} </h1>
                            </div>
                            <!-- Review ---->
                            <div class="box-review form-group">
                                <div class="ratings">
                                    <div class="rating-box">
                                        @php
                                        $avgrating = 0;
                                        @endphp
                                        @foreach ($product->oderItems->where('rstatus', 1) as $orderItem)
                                            @php
                                                $avgrating = $avgrating + $orderItem->review->rating;
                                            @endphp   
                                        @endforeach
                                        @for($i =1; $i<=5; $i++)
                                            @if ($i<=$avgrating)
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            @else
                                                <span class="fa fa-stack"> ☆</span>
                                            @endif
                                        @endfor
                                        {{-- <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> --}}
                                    </div>
                                </div>

                                <a class="reviews_button" href="">{{ $product->oderItems->where('rstatus', 1)->count() }} reviews</a>	| 
                                {{-- <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a> --}}
                            </div>

                            <div class="product-label form-group">
                                <div class="stock"><span>Availability:</span> <span class="status-stock">{{ $product->stock_status }}</span></div>
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" >
                                    <span class="price-new" itemprop="price">₦{{ $product->regular_price }}</span>
                                </div>
                                
                            </div>
                            <a class="btn btn-primary" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})" >
                                Add to Cart
                            </a>

                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    {{ $product->short_description }}
                                </div>
                            </div>


                            <div id="product">
                                <h4>Available Options</h4>
                                
                                
                                

                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>Qty</label>
                                            <input class="form-control" type="text" name="quantity"
                                            value="1">
                                            <input type="hidden" name="product_id" value="50">
                                            <span class="input-group-addon product_quantity_down">−</span>
                                            <span class="input-group-addon product_quantity_up">+</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <a class="btn btn-primary" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})" >
                                            Add to Cart
                                        </a>
                                        {{-- <a href="#" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})"
                                            class="btn btn-primary">
                                                Add To Cart<i class="fa fa-cart"></i></a> --}}
                                    </div>
                                    <div class="add-to-links wish_comp">
                                        <ul class="blank list-inline">
                                            <li class="wishlist">
                                                <a class="icon" data-toggle="tooltip" title=""
                                                onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <!-- end box info product -->

                        </div>
                    </div>
                </div>
            
            </div>
            
            <!-- Product Tabs -->
            <div class="producttab ">
                <div class="tabsslider  col-xs-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews</a></li>
                    </ul>
                    <div class="tab-content col-xs-12">
                        <div id="tab-1" class="tab-pane fade active in">
                            <p>
                                {!! $product->description !!}
                            </p>
                            
                        </div>
                        <div id="tab-review" class="tab-pane fade">
                            <form>
                                <div id="review">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;"><strong>{{ $product->name }} </strong></td>
                                                <td class="text-right">{{ $product->oderItems->where('rstatus', 1)->count() }}Reviews</td>
                                            </tr>
                                            @php
                                                $rating = 0;
                                            @endphp
                                            @foreach ($product->oderItems->where('rstatus', 1) as $orderItem)
                                            @php
                                                $rating = $orderItem->review->rating;
                                            @endphp
                                            <tr>
                                                <td colspan="2">
                                                    <p>Best this product opencart</p>
                                                    <div class="ratings">
                                                        
                                                        <div class="rating-box">
                                                            @for($i =1; $i<=5; $i++)
                                                                @if ($i<=$rating)
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                @else
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                @endif
                                                            @endfor
                                                            {{-- <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> --}}
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-right"></div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Product Tabs -->
            
            <!-- Related Products -->
            <div class="related titleLine products-list grid module ">
                <h3 class="modtitle"><span>Related Products</span></h3>
                <div class="releate-products ">
                    @foreach ($related_products as $p_product)
                    <div class="product-layout">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img ">
                                    <a href="{{ route('product.details', ['slug' =>$p_product->slug]) }}">
                                    <img  src="{{ asset('asset/image/products')}}/{{ $p_product->image }}"  title="{{ $p_product->name }}&quot;" class="img-1 img-responsive" />
                                    </a>
                                    <a href="{{ route('product.details', ['slug' =>$p_product->slug]) }}">
                                    <img  src="{{ asset('asset/image/products')}}/{{ $p_product->image }}" title="{{ $p_product->name }}&quot;" class="img-2 img-responsive" />
                                    </a>
                                </div>
                                <!--Sale Label-->
                                <span class="label label-sale">{{ $p_product->stock_status }}</span>
                            </div>
                            
                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="wire:click.prevent="store({{ $p_product->id }}, '{{ $p_product->name }}', {{ $p_product->regular_price }})">{{ $p_product->name }}&quot;</a></h4>		
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>
                                                        
                                    <div class="price">
                                        <span class="price-new">₦ {{ $p_product->regular_price }}</span> 
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>{{ $p_product->short_description }}</p>
                                    </div>
                                </div>

                                <a class="btn btn-primary" wire:click.prevent="store({{ $p_product->id }}, '{{ $p_product->name }}', {{ $p_product->regular_price }})" >
                                    Add to Cart
                                </a>
                                
                            </div><!-- right block -->

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <aside class="col-md-3 col-md-pull-9 col-sm-12  content-aside left_column">
            <div class="module menu-category titleLine">
                <h3 class="modtitle"><span>Categories</span></h3>
                <div class="modcontent">
                    <div class="box-category">
                        <ul id="cat_accordion" class="list-group">
                            @foreach ($cats as $cat)
                            <li class=""><a href="#" class="cutom-parent">{{ $cat->name }}</a>  <span class="dcjq-icon"></span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="module latest-product titleLine">
               <h3 class="modtitle"><span>Latest Product</span></h3>
               <div class="modcontent ">
                @foreach ($popular_products as $popular)
                    <div class="product-latest-item">
                        <div class="media">
                           <div class="media-left">
                              <a href="{{ route('product.details', ['slug' =>$popular->slug]) }}">
                                  <img src="{{ asset('asset/image/products')}}/{{ $popular->image }}" alt="{{ $popular->name }}" title="{{ $popular->name }}" class="img-responsive" style="width: 90px; height: 90px;">
                                </a>
                           </div>
                           <div class="media-body">
                              <div class="caption">
                                 <h4><a href="{{ route('product.details', ['slug' =>$popular->slug]) }}">{{ $popular->name }}</a></h4>
                                
                                 <div class="price">
                                    <span class="price-new">₦{{ $popular->regular_price }}</span>
                                 </div>
                                 {{-- <div class="ratings">
                                    <div class="rating-box">
                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </div>
                                 </div> --}}
                              </div>
                              
                           </div>
                        </div>
                    </div>
                @endforeach
               </div>
            </div>
            
            <div class="module banners-effect-7">
                <div class="modcontent clearfix">
                    <div class="banners">
                        <div>
                            <a href="#"><img src="{{ asset('image/demo/cms/v3-banner-home-left.jpg')}}" alt=""></a>
                        </div>
                    </div>
                
                </div>
            </div>
        </aside>
    </div>
    <!--Middle Part End-->
</div>