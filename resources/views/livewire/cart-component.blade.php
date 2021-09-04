<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Shopping Cart</a></li>
    </ul>
    
    <div class="row">
        @if(Session::has('success_message'))
        <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        @endif
        <!--Middle Part Start-->
    <div id="content" class="col-sm-12">
      <h2 class="title">Shopping Cart</h2>
        <div class="table-responsive form-group">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-center">Image</td>
                <td class="text-left">Product Name</td>
                <td class="text-left">Model</td>
                <td class="text-left">Quantity</td>
                <td class="text-right">Unit Price</td>
                <td class="text-right">Total</td>
              </tr>
            </thead>
            <tbody>
                @foreach (Cart::instance('cart')->content() as $item)
              <tr>
                <td class="text-center"><a href="{{ route('product.details',['slug' =>$item->model->slug]) }}"><img width="70px" src="{{ asset('asset/image/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}" title="{{ $item->model->name }}" class="img-thumbnail" /></a></td>
                <td class="text-left"><a href="{{ route('product.details',['slug' =>$item->model->slug]) }}">{{ $item->model->name }}</a></td>
                <td class="text-left">{{ $item->model->name }}</td>
                <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                    <input type="number" name="quantity" value="{{ $item->qty }}" size="1" class="form-control" />
                    <span class="input-group-btn">
                    <button type="submit" wire:click.prevent="increaseQuantity('{{ $item->rowId  }}')" data-toggle="tooltip" title="Update" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" wire:click.prevent="decreaseQuantity('{{ $item->rowId  }}')">
                        <i class="fa fa-minus"></i>
                    </button>
                    </span></div></td>
                    <td class="text-right">₦  {{ $item->model->regular_price }}</td>
                    <td class="text-right">₦ {{ $item->subtotal }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      
        <div class="table-responsive form-group">
                
            <div class="buttons">
                <div class="pull-right">
                    <a href="/" class="btn btn-primary">Continue Shopping</a>
                    @if(Cart::instance('cart')->count() > 0)
                        <a wire:click.prevent="destroyAll()">
                            <i class="fa fa-trash btn btn-danger btn-sm"></i>
                            Empty Cart
                        </a>
                    @endif
                </div>
            </div>
        </div>

    </div>
    <!--Middle Part End -->
        
    </div>
</div>
















<div class="main-container container">

    <div class="row"> 
        
        <div id="content" class="col-sm-12">
                    <h3 class="subtitle no-margin">What would you like to do next?</h3>
                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Use Coupon Code 
                                        
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="panel-body">
                                 @if (!Session::has('coupon'))
                                    @if(Session::has('coupon_message'))
                                    <div class="col-md-6"></div>
                                                <div class="alert alert-danger col-md-6">{{ Session::get('coupon_message') }}</div>
                                    @endif
                                    <form wire:submit.prevent="applyCouponCode">
                                        <label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
                                        <div class="input-group">
                                            <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control" wire:model="CouponCode">
                                            <span class="input-group-btn"><input type="submit" value="Apply Coupon" id="button-coupon" class="btn btn-primary"></span>
                                        </div>
                                    </form>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="text-right">
                                            <strong>Sub-Total:</strong>
                                        </td>   
                                        <td class="text-right">₦ {{ Cart::instance('cart')->subtotal() }}</td>
                                    </tr>
                                    @if (Session::has('coupon'))
 
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Discount:  {{ Session::get('coupon')['code'] }}</strong><a wire:click.prevent="removeCoupon"><i class="fa fa-close"></i></a>
                                                </td>
                                                <td class="text-right"> <b>₦{{ $discount }}</b></td>
                                            </tr>

                                            <tr>
                                                <td class="text-right">
                                                    <strong>Subtotal with Discount:</strong>
                                                </td>
                                                <td class="text-right">₦ {{ $subtotalAfterDiscount }}</td>
                                            </tr>

                                            <tr>
                                                <td class="text-right">
                                                    <strong>Tax: ({{ config('cart.tax') }}% )</strong>
                                                </td>
                                                <td class="text-right"><b>₦{{ $taxAfterDiscount }}</b></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Total:</strong>
                                                </td>
                                                <td class="text-right">₦ {{ $totalAfterDiscount }}</td>
                                            </tr>
                                        @else 
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Tax:</strong>
                                                </td>
                                                <td class="text-right">₦ {{ Cart::instance('cart')->tax() }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Flat Shipping Rate:</strong>
                                                </td>
                                                <td class="text-right">₦4.69</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Total:</strong>
                                                </td>
                                                <td class="text-right">₦ {{ Cart::instance('cart')->total() }}</td>
                                            </tr>
                                        @endif


                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="buttons">

                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                          </button> --}}

                        {{-- <div class="pull-left"><a href="/shop" class="btn btn-primary">Continue Shopping</a></div> --}}
                        @if(Cart::instance('cart')->count() > 0)
                            <div class="pull-right"><a href="/checkout"  class="btn btn-primary">Checkout</a>&nbsp;&nbsp;&nbsp;</div>
                        @endif
                        @if (Route::has('login'))
                            @auth
                                       
                                @if (Auth::user()->utype ==='ADM')
                                    <div class="pull-left">&nbsp;&nbsp;&nbsp; <a href="/checkout"  class="btn btn-info">Checkout with Admin Permission</a></div>
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
        

    

       
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Checkout With</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <a href="">
                        <img src="{{ asset('asset/paystack.png') }}" alt="">
                    </a>
                   <hr style="color:skyblue">
                  <a href="">
                    <img src="{{ asset('asset/bank.jpg') }}" alt="">
                  </a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>