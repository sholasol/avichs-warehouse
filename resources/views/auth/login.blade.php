{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="main-container container">
        {{-- <ul class="header-main ">
            <li class="home"><a href="/">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li class="home"><a href="/register">Account   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>  Login</li>
        </ul> --}}
        
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page-login">
                    
                    <div class="account-border">
                        <div class="row">
                            <div class="col-sm-6 new-customer">
                                <div class="well">
                                    <h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
                                    <p>Create an account  <a href="/register">here</a>.</p>
                                </div>
                                <div class="bottom-form">
                                    <a href="/register" class="btn btn-default pull-right">Register</a>
                                </div>
                            </div>
                            {{-- <div class="alert-danger">
                                <x-jet-validation-errors class="mb-4 text-red" />
                            </div> --}}
                            <x-jet-validation-errors class="mb-4 text-red" />
                            <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-6 customer-login">
                                    <div class="well">
                                        <h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
                                        <p><strong>I am a returning customer</strong></p>
                                        <div class="form-group">
                                            <label class="control-label " for="input-email">E-Mail Address</label>
                                            <input type="email" type="email" name="email" :value="old('email')" required autofocus id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label " for="input-password">Password</label>
                                            <input type="password" name="password" value="" id="input-password" class="form-control" placeholder="***********" />
                                        </div>
                                    </div>
                                    <div class="bottom-form">
                                        <a href="{{ route('password.request') }}" class="forgot">Forgotten Password</a>
                                        <input type="submit" value="Login" class="btn btn-default pull-right" />
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


