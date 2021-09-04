<div class="main-container container">
    <ul class="header-main ">
        
        @if(Session::has('success_message'))
        <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        @endif
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="page-login">
            
                <div class="account-border">
                    <div class="row">
                        <div class="col-sm-6 new-customer">
                            <div class="well">
                                <h2><i class="fa fa-file-o" aria-hidden="true"></i> Payment</h2>
                                <img src="{{ asset('asset/shopping.jpg') }}" alt="Avichs">
                                <p>Convinient transcation with online payment.</p>
                            </div>
                            
                        </div>
                        
                        
                            <div class="col-sm-6 customer-login">
                                <div class="well">
                                    <div class="col-sm-12" >
                                        <img src="{{ asset('asset/card.png') }}" alt="Avichs" style="margin-top: 120px;">
                                        <form >
                                            <script src="https://js.paystack.co/v1/inline.js"></script><hr style="color: rgb(191, 241, 202)">
                                           <p align="center"> 
                                               <button type="button" onclick="payWithPaystack()" class="btn btn-primary btn-block" > Pay Now (₦ {{ Cart::instance('cart')->subtotal() }})</button> 
                                            </p>
                                          </form><br><br><br>
                            
                                          <script>
                                              
                                             var amot = {!! json_encode(Cart::instance('cart')->subtotal()) !!};
                                             //var amt = parseFloat(amot);
                                              var mail = {!! json_encode(Auth::user()->email) !!};
                                              var name = {!! json_encode(Auth::user()->name) !!};
                                            function payWithPaystack(){
                                              const api ="pk_test_5609cd59091947fb62c6fb317c5f976237f421e1";
                                              var handler = PaystackPop.setup({
                                                key: api,
                                                email: mail,
                                                amount: amot * 100,
                                                currency: "NGN",
                                                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                                firstname: name,
                                                // label: "Optional stding that replaces customer email"
                                                metadata: {
                                                   custom_fields: [
                                                      {
                                                          display_name: "Solomon",
                                                          variable_name: "Payment",
                                                          value: "+2348012345678"
                                                      }
                                                   ]
                                                },
                                                callback: function(response){
                                                   //alert('success. tdansaction ref is ' + response.reference);
                                                   const referenced = response.reference;
                                                   window.location.href= 'success?success='+referenced;
                                                },
                                                onClose: function(){
                                                    alert('window closed');
                                                }
                                              });
                                              handler.openIframe();
                                            }
                                          </script>
                                    </div>
                                </div>
                               
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>