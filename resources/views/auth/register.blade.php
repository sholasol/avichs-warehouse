{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="main-container container">
        {{-- <ul class="header-main ">
            <li class="home"><a href="/">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li><li class="home"><a href="/login">Login   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>  Register</li>
        </ul> --}}
        
        <div class="row">
            <div id="content" class="col-sm-12">
                <h2 class="title">Register Account</h2>
                <p>If you already have an account with us, <a href="/login">login here</a>.</p>
                <x-jet-validation-errors class="mb-4" />
                <form action="{{ route('register') }}" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                    @csrf
                    <fieldset id="account">
                        <legend>Your Personal Details</legend>
                        <div class="form-group required" style="display: none;">
                            <label class="col-sm-2 control-label">Customer Group</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">Your Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" :value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Your Name" id="input-firstname" class="form-control">
                            </div>
                        </div>
                        {{-- <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Last Name" id="input-lastname" class="form-control">
                            </div>
                        </div> --}}
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="E-Mail" id="input-email" class="form-control">
                            </div>
                        </div>
                        {{-- <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                            <div class="col-sm-10">
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Telephone" id="input-telephone" class="form-control">
                            </div>
                        </div> --}}
                        <legend>Your Password</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" id="password" name="password"  placeholder="Password" id="input-password" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" id="password_confirmation" name="password_confirmation"  placeholder="Password Confirm" id="input-confirm" class="form-control" required>
                            </div>
                        </div>
                    </fieldset>
                    {{-- <fieldset id="address">
                        <legend>Your Address</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-company">Company</label>
                            <div class="col-sm-10">
                                <input type="text" name="company" value="" placeholder="Company" id="input-company" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
                            <div class="col-sm-10">
                                <input type="text" name="address_1" value="" placeholder="Address 1" id="input-address-1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
                            <div class="col-sm-10">
                                <input type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-city">City</label>
                            <div class="col-sm-10">
                                <input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
                            <div class="col-sm-10">
                                <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-country">Country</label>
                            <div class="col-sm-10">
                                <select name="country_id" id="input-country" class="form-control">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="244">Aaland Islands</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">American Samoa</option>
                                    <option value="5">Andorra</option>
                                    <option value="6">Angola</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-zone">Region / State</label>
                            <div class="col-sm-10">
                                <select name="zone_id" id="input-zone" class="form-control">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="3513">Aberdeen</option>
                                    <option value="3514">Aberdeenshire</option>
                                    <option value="3515">Anglesey</option>
                                    <option value="3516">Angus</option>
                                    
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Newsletter</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Subscribe</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input type="radio" name="newsletter" value="1"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="newsletter" value="0" checked="checked"> No
                                </label>
                            </div>
                        </div>
                    </fieldset> --}}
                    <div class="buttons">
                        <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
                            <input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
                            <input type="submit" value="Register" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
