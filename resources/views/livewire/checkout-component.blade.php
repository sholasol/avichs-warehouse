<div class="main-container container">
   
    
    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="title">Checkout</h2>
            <div class="so-onepagecheckout ">
                <div class="col-left col-sm-12">
                    
                    
                    
                </div>
 
                                
                               
            <div class="col-right col-sm-12">
                <form wire:submit.prevent="placeOrder">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default no-padding">
                                <div class="col-sm-6 checkout-shipping-methods">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
                                    </div>
                                        <div class="panel-body ">
                                            <p>Shipping.</p>
                                            
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="shipment" name="Delivery" checked>
                                                        Flat Shipping Rate - # 750</label>
                                                </div>
                                                    
                                        </div>
                                    </div>
                                    <div class="col-sm-6  checkout-payment-methods">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
                                            </div>
                                            <div class="panel-body">
                                                <img src="{{ asset('asset/paystack.png') }}" alt="">
                                                {{-- <p>Please select the preferred payment method to use on this order.
                                                    <img src="{{ asset('asset/paystack.png') }}" alt="">
                                                </p> --}}
                                                    {{-- <div class="radio">
                                                        <label>
                                                            <input type="radio" checked="checked" value="transfer" wire:model="paymentmode" checked>Direct bank Transfer</label>
                                                    </div>
                                                    
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="Payment" value="paystack" wire:model="paymentmode">Credit / Debit Card</label>
                                                        </div>

                                                        @error('paymentmode') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                                         --}}
                                            </div>
                                    </div>
                                </div>
                                            
                                            
                                            
                        </div>

                        <div class="col-sm-12">
                            <div class="panel panel-default col-sm-6">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-user"></i> Personal and Shipping Detail</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="account">
                                        <div class="form-group required">
                                            <label for="input-payment-firstname" class="control-label">First Name</label>
                                            <input type="text" class="form-control"  placeholder="First Name" wire:model="firstname" name="firstname">
                                            @error('firstname') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-lastname" class="control-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name" wire:model="lastname" name="lastname">
                                            @error('lastname') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-email" class="control-label">E-Mail</label>
                                            <input type="text" class="form-control"  placeholder="E-Mail" wire:model="email" name="email">
                                            @error('email') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-telephone" class="control-label">Telephone</label>
                                            <input type="text" class="form-control"  placeholder="Telephone" wire:model="mobile" name="mobile">
                                            @error('mobile') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror 
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="panel panel-default col-sm-6">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-book"></i> Shipping Address</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="address" class="required">
                                        <div class="form-group required">
                                            <label for="input-payment-address-1" class="control-label">Address </label>
                                            <input type="text" class="form-control"  placeholder="123 Main Street" wire:model="address">
                                            @error('address') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-city" class="control-label">State</label>
                                            <input type="text" class="form-control"  placeholder="State" wire:model="city" name="city">
                                            @error('city') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Zip Code</label>
                                            <input type="text" class="form-control"  placeholder="Post Code" wire:model="zipcode"   name="zipcode">
                                            @error('zipcode') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-country" class="control-label">Country</label>
                                            <input type="text" class="form-control"  placeholder="Country" wire:model="country"  >
                                            @error(' country') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        {{-- <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="shipping_address" wire:model="ship_to_different">
                                               Deliver to another address.</label>
                                            </div> --}}
                                    </fieldset>
                                </div>
                            </div>
        
                        {{-- @if ($ship_to_different)
                            <div class="panel panel-default col-sm-6">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-book"></i> Shipping Address</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="address" class="required">
                                        <div class="form-group required">
                                            <label for="input-payment-address-1" class="control-label">Address </label>
                                            <input type="text" class="form-control"  placeholder="Address 1" wire:model="s_address" >
                                            @error(' s_address') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-city" class="control-label">City</label>
                                            <input type="text" class="form-control"  placeholder="City" wire:model="s_city" >
                                            @error(' s_city') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Zip Code</label>
                                            <input type="text" class="form-control"  placeholder="Post Code" wire:model="s_zipcode"  >
                                            @error(' s_zipcode') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-country" class="control-label">Country</label>
                                            <input type="text" class="form-control"  placeholder="Post Code" wire:model="s_country"  >
                                            @error(' s_country') <p style="color:rgb(236, 37, 37)">{{ $message }}</p> @enderror
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        @endif --}}
                        </div>               
                                        
                                        
                                         
                                                
                        
                            <div class="col-sm-12">
                                @if (Session::has('checkout'))
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"> <i class="fa fa-money"></i> Total Amount : ₦ {{ Session::get('checkout')['total'] }}</h4>
                                        </div>
                                    </div>
                                @endif

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
                                    </div>
                                    <div class="panel-body">
                                        <textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
                                        <br>
                                        <label class="control-label" for="confirm_agree">
                                            <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                                            <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <input type="submit" class="btn btn-primary" id="button-confirm" value="Proceed to Payment">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>





    {{-- <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Payment</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-right">Unit Price</td>
                                <td class="text-right">Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><a href="product.html"><img width="60px" src="img/demo/shop/product/E4.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail"></a></td>
                                <td class="text-left"><a href="product.html">Emasa rumas gacem</a></td>
                                <td class="text-left"><div class="input-group btn-block checkout" style="min-width: 100px;">
                                    <input type="text" name="quantity" value="1" size="1" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                                    </span></div></td>
                                    <td class="text-right">$114.35</td>
                                    <td class="text-right">$114.35</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                    <td class="text-right">$93.73</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                                    <td class="text-right">$4.69.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="4"><strong>Eco Tax (-2.00):</strong></td>
                                    <td class="text-right">$3.75.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="4"><strong>VAT (20%):</strong></td>
                                    <td class="text-right">$19.68</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                    <td class="text-right">$121.85</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
        </div>
    </div> --}}