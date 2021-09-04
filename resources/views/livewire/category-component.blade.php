<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Product Categories</a></li>
    </ul>
    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3" id="column-left">
         
            


            <div class="module latest-product titleLine">
                <h3 class="modtitle"><span>Categories</span></h3>
                <div class="modcontent ">
                    @foreach ($categories as $category)
                     <div class="product-latest-item">
                         {{-- <div class="media">
                            <div class="media-left">
                               <a href="{{ route('product.details', ['slug' =>$sound->slug]) }}"  title="{{ $sound->name }}" title="{{ $sound->name }}">
                                   <img src="{{ asset('asset/image/products')}}/{{ $sound->image }}" alt="{{ $sound->name }}" title="{{ $sound->name }}" class="img-responsive" style="width: 90px; height: 90px;">
                                </a>
                            </div>
                            <div class="media-body">
                               <div class="caption">
                                  <h4>
                                    <a href="{{ route('product.details', ['slug' =>$sound->slug]) }}"  title="{{ $sound->name }}" title="{{ $sound->name }}">
                                      {{ $category->name }}</a>
                                    </h4>
                                 
                                  <div class="price">
                                     <span class="price-new">₦ {{ $sound->regular_price }}</span>
                                  </div>
                                  
                                  <div>
                                    <a class="btn btn-info btn-sm" wire:click.prevent="store({{ $sound->id }}, '{{ $sound->name }}', {{ $sound->regular_price }})" >
                                        Add to Cart
                                    </a>
                                </div>
                               </div>
                               
                            </div>
                         </div> --}}
                         <ul>
                             <li>
                                 <a href="{{ route('product.category', ['category_slug'=>$category->slug]) }}">{{ $category->name }}</a>
                             </li>
                         </ul>
                     </div>
                    @endforeach 
                     
                </div>
             </div>
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="products-category">
                <div class="category-derc form-group">
                    <div class="row">
                        <div class="col-sm-12">
                        <p><img src="image/demo/shop/category/electronic-cat.png" alt=""><br></p>
                        
                        </div>
                    </div>
                </div>
                <!--- Subcategories - -->
                {{-- <div class="refine-search form-group">
                    <div class="row">
                        <div class="form-group col-md-15 col-sm-4 col-xs-12 ">
                            <a href="#" class="thumbnail"><img src="image/demo/shop/product/m2.jpg" alt="Car Alarms and Security"></a> <a href="#">Car Alarms and Security</a>			
                        </div>
                        <div class="form-group col-md-15 col-sm-4 col-xs-12 ">
                            <a href="#" class="thumbnail"><img src="image/demo/shop/product/e2.jpg" alt="Car Audio &amp; Speakers"></a> <a href="#">Car Audio &amp; Speakers</a>			
                        </div>
                        <div class="form-group col-md-15 col-sm-4 col-xs-12 ">
                            <a href="#" class="thumbnail"><img src="image/demo/shop/product/10.jpg" alt="Gadgets &amp; Auto Parts">	</a> <a href="#">Gadgets &amp; Auto Parts</a>			
                        </div>
                        <div class="form-group col-md-15 col-sm-4 col-xs-12 ">
                            <a href="#" class="thumbnail"><img src="image/demo/shop/product/18.jpg" alt="More Car Accessories">	</a> <a href="#">More Car Accessories</a>			
                        </div>
                        <div class="form-group col-md-15 col-sm-4 col-xs-12 ">
                            <a href="#" class="thumbnail"><img src="image/demo/shop/product/19.jpg" alt="More Car Accessories">	</a> <a href="#">More Car Accessories</a>			
                        </div>
                    </div>
                </div> --}}
                <!---//Subcategories - -->
                <!-- Filters -->
                <div class="product-filter filters-panel">
                    <div class="row">
                        <div class="col-md-2 visible-lg">
                            <div class="view-mode">
                                <div class="list-view">
                                    <button class="btn btn-default grid " data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                                    {{-- <button class="btn btn-default list active" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
                            <div class="form-group short-by">
                                <label class="control-label" for="input-sort">Sort By:</label>
                                <select id="input-sort" class="form-control" wire:model="sorting">
                                    <option value="default" selected="selected">All Products</option>
                                    <option value="date">Newness</option>
                                    <option value="price">Price (Low &gt; High)</option>
                                    <option value="price-desc">Price (High &gt; Low)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-limit">Show:</label>
                                <select id="input-limit" class="form-control" wire:model="pagesize">
                                    <option value="8" selected="selected">8 per page</option>
                                    <option value="24">24 per page</option>
                                    <option value="48">48 per page</option>
                                    <option value="74">74 per page</option>
                                    <option value="100">100 per page</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                            
                        </div>
                    </div>
                </div>
                <!-- //end Filters -->
                <!--changed listings-->
                <div class="products-list row list">
                    @foreach ($products as $product)
                    <div class="product-layout  col-md-3 col-sm-6 col-xs-6">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container  second_img ">
                                    <a href="{{ route('product.details', ['slug' =>$product->slug]) }}"  title="{{ $product->name }}">
                                        <img data-src="{{ asset('asset/image/products')}}/{{ $product->image }}" src="{{ asset('asset/image/products')}}/{{ $product->image }}"  alt="{{ $product->name }}&quot;" class="img-1 img-responsive" />
                                    </a>
                                    <a href="{{ route('product.details', ['slug' =>$product->slug]) }}"  title="{{ $product->name }}">
                                        <img data-src="{{ asset('asset/image/products')}}/{{ $product->image }}" src="{{ asset('asset/image/products')}}/{{ $product->image }}"  alt="{{ $product->name }}&quot;" class="img-2 img-responsive" />
                                    </a>
                                </div>
                                <!--Sale Label-->
                                <span class="label label-sale">{{ $product->stock_status }}</span>
                                <!--full quick view block-->
                                
                            </div>
                            
                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="{{ route('product.details', ['slug' =>$product->slug]) }}">{{ $product->name }}&quot;</a></h4>		
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                    </div>
                                                        
                                    <div class="price">
                                        <span class="price-new">₦{{ $product->regular_price }}</span> 	 
                                    </div>
                                    <div>
                                        <a class="btn btn-primary" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})" >
                                            Add to Cart
                                        </a>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>
                                            {{ $product->short_description }}
                                        </p>
                                    </div>
                                </div>
                            </div><!-- right block -->
                            <div class="button-group">
                                {{-- <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button> --}}
                                {{-- <button href="#" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})" class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" >
                                    <i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span>
                                </button> --}}
                             </div>
                        </div>
                    </div>
                    @endforeach
                </div>					
                <!--// End Changed listings-->
                <!-- Filters -->
                <div class="product-filter product-filter-bottom filters-panel" >
                    <div class="row">
                        <div class="col-md-2 hidden-sm hidden-xs">
                            
                        </div>
                       <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
                            <div class="form-group" style="margin: 3px 10px">{{ $products->links() }}</div>
                        </div>
                        <div class="box-pagination col-md-3 col-sm-4 text-right">
                            
                        </div>
                                
                     </div>
                </div>
                <!-- //end Filters -->
            </div>
        </div>
        <!--Middle Part End-->			
    </div>	
</div>