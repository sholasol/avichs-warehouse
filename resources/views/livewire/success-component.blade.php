<div>
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="page-login">
            
                <div class="account-border">
                    <form wire:submit.prevent="resetCart" method="post"  enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12 new-customer">
                            <div class="well">
                                <h2 align="center"><i class="fa fa-file-o" aria-hidden="true"></i> Payment Successful</h2>
                                <p align="center"> <img src="{{ asset('asset/success.png') }}" alt="Avichs"></p>
                                <p align="center">Thank you for</p>
                                <p align="center">
                                    <input class="btn btn-default" type="submit" name="submit" value="View Order Details">
                                </p>
                            </div>
                            <div class="bottom-form">
                                <input class="btn btn-default pull-right" type="submit" name="submit" value="View Order Details">
                                {{-- <a href="#" class="btn btn-default pull-right">Continue</a> --}}
                            </div>
                        </div>
                        
                        {{-- <form action="#" method="post" enctype="multipart/form-data">
                            <div class="col-sm-6 customer-login">
                                <div class="well">
                                    <h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
                                    <p><strong>I am a returning customer</strong></p>
                                    <div class="form-group">
                                        <label class="control-label " for="input-email">E-Mail Address</label>
                                        <input type="text" name="email" value="" id="input-email" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="input-password">Password</label>
                                        <input type="password" name="password" value="" id="input-password" class="form-control" />
                                    </div>
                                </div>
                                <div class="bottom-form">
                                    <a href="#" class="forgot">Forgotten Password</a>
                                    <input type="submit" value="Login" class="btn btn-default pull-right" />
                                </div>
                            </div>
                        </form> --}}
                    </div>
                </form> 
                </div>
                
            </div>
        </div>
    </div>
</div>
