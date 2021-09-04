<div class="so-vertical-menu no-gutter compact-hidden">
    <nav class="navbar-default">    
        <div class="container-megamenu vertical open">
            <div id="menuHeading">
                <div class="megamenuToogle-wrapper">
                    <div class="megamenuToogle-pattern">
                        <div class="container">
                            <div>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            Categories                          
                            <i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-header">
                <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                    <span class="icon-bar" style="width: 12px;"></span>
                    <span class="icon-bar" style="width: 16px;"></span>
                    <span class="icon-bar"></span>
                </button>   
            </div>
            <div class="vertical-wrapper" >
                <span id="remove-verticalmenu" class="fa fa-times"></span>
                <div class="megamenu-pattern">
                    <div class="container">
                        <ul class="megamenu">
                            @foreach ($cats as $cat)
                            <li class="item-vertical style1 with-sub-menu hover">
                                <p class="close-menu"></p>
                                <a href="{{ route('product.category', ['category_slug'=>$cat->slug]) }}" class="clearfix">
                                    <strong>
                                    <span>{{ $cat->name }}</span>
                                    </strong> 
                                </a>
                            </li>
                            @endforeach
                            
                           
                                {{-- <li class="item-vertical with-sub-menu hover">
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        <strong>
                                        <span>Health &amp; Beauty</span>
                                        <b class="fa fa-angle-right"></b>
                                        </strong>
                                    </a>
                                </li>
                                <li class="item-vertical css-menu with-sub-menu hover">
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        
                                        <strong>
                                            <span>Smartphone &amp; Tablets</span>
                                            <b class="fa fa-angle-right"></b>
                                        </strong>
                                    </a>
                                </li>
                                <li class="item-vertical">
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        <strong>
                                            <span>Flashlights &amp; Lamps</span>
                                        </strong>
                                    </a>
                                </li>
                                <li class="item-vertical">
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        <strong>
                                            <span>Camera &amp; Photo</span>
                                        </strong>
                                    </a>
                                </li>
                                <li class="item-vertical">
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        <strong>
                                            <span>Smartphone &amp; Tablets</span>
                                        </strong>
                                    </a>
                                </li>
                                <li class="item-vertical" >
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        <strong>
                                            <span>Outdoor &amp; Traveling Supplies</span>
                                        </strong>
                                    </a>
                                </li>
                                <li class="item-vertical" style="display: none;">
                                    <p class="close-menu"></p>
                                    
                                    <a href="#" class="clearfix">
                                        <strong>
                                            <span>Health &amp; Beauty</span>
                                        </strong>
                                    </a>
                                </li>
                                <li class="item-vertical" >
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        <strong>
                                            <span>Toys &amp; Hobbies </span>
                                        </strong>
                                    </a>
                                </li> --}}
                                
                                <li class="loadmore">
                                    <i class="fa fa-plus-square-o"></i>
                                    <span class="more-view">More Categories</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
</div>