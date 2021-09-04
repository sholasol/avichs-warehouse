{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<x-guest-layout>
    <div class="main-container container">
        
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page-login">
                    
                    <div class="account-border">
                        <div class="row">
                            <div class="col-sm-6 new-customer">
                                <div class="well">
                                    
                                    <h2><i class="fa fa-file-o" aria-hidden="true"></i> Reset your password</h2>
                                    
                                    <p>Create an account  <a href="/register">here</a>.</p>
                                    <div class="form-group">
                                        <br><br><br><br><br><br><br><br><br>
                                    </div>
                                </div>
                                <div class="bottom-form">
                                    <a href="/register" class="btn btn-default pull-right">Register</a>
                                </div>
                            </div>
                            {{-- <div class="alert-danger">
                                <x-jet-validation-errors class="mb-4 text-red" />
                            </div> --}}
                            <x-jet-validation-errors class="mb-4 text-red" />
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="col-sm-6 customer-login">
                                    <div class="well">
                                        <h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
                                        <p><strong>I am a returning customer</strong></p>
                                        <div class="form-group">
                                            <label class="control-label " for="input-email">E-Mail Address</label>
                                            <input type="email" type="email" name="email" :value="old('email', $request->email)"  required autofocus id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label " for="input-password">Password</label>
                                            <input type="password" name="password" value="" id="input-password" class="form-control" placeholder="***********" />
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label " for="input-password">Confirm Password</label>
                                            <input type="password" name="password_confirmation" required autocomplete="new-password" id="input-password" class="form-control" placeholder="***********" />
                                        </div>
                                    </div>
                                    <div class="bottom-form">
                                        <a href="/login" class="forgot">Already have an account?</a>
                                        <input type="submit" value="Reset" class="btn btn-default pull-right" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>



