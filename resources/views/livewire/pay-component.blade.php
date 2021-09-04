<div class="main-container container">
    <ul class="header-main ">
        <li class="home"><a href="/">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li> Success Page</li>
        @if(Session::has('success_message'))
        <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        @endif
    </ul>

    <div class="jumbotron" style="background-image: url('asset/image/sound.jpg') !important; background-size: cover;">
        <h1 style="color: #ffffff !important; margin-bottom: 150px;"> Avichs Warehouse</h1>

        <h3 align="center" style="color: #ffffff !important; margin-bottom: 150px; font-size: 20px !important;"> Transaction Successful</h3>
    </div>

    <div class="row"> 
        
        <div id="content" class="col-sm-12">
            <h2 class="title" align="center">Pay with Paystack</h2>

            <form wire:submit.prevent="redirectToGateway" accept-charset="UTF-8" class="form-horizontal" role="form">
                <div class="row" style="margin-bottom:40px;">
                    <div class="col-md-8 col-md-offset-2">
                        <p>
                            <div>
                                Avichs Venture
                                ₦ {{ Session::get('checkout')['total'] }}
                            </div>
                        </p>
                        <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                        <input type="hidden" name="orderID" value="345">
                        <input type="hidden" name="amount" value="{{ Session::get('checkout')['total']*100 }}"> {{-- required in kobo --}}
                        <input type="hidden" name="quantity" value="3">
                        <input type="hidden" name="currency" value="NGN">
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
            
                        <p>
                            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                            </button>
                        </p>
                    </div>
                </div>
            </form>
            
            <hr>
            
        </div>
    </div>
</div>