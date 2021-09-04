{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
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
                                    <h2><i class="fa fa-file-o" aria-hidden="true"></i>Password Recovery</h2>
                                </div>
                                <div class="bottom-form">
                                    <a href="/login" class="btn btn-default pull-right">Login</a>
                                </div>
                            </div>
                            @if (session('status'))
                                 <div class="mb-4 font-medium text-sm text-green-600 text-danger">
                                   <h3> {{ session('status') }}</h3>
                                </div>
                            @endif
                            <x-jet-validation-errors class="mb-4 text-red" />
                            <form action="{{ route('password.email') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-6 customer-login">
                                    <div class="well"> 
                                        <h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
                                        <p><strong>Enter your email here</strong></p>
                                        <div class="form-group">
                                            <label class="control-label " for="input-email">E-Mail Address</label>
                                            <input type="email" type="email" name="email" :value="old('email')" required autofocus id="input-email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="bottom-form">
                                        <a href="/register" class="forgot">Create an Account</a>
                                        <input type="submit" value="Email Password Recovery Link" class="btn btn-default pull-right" />
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


