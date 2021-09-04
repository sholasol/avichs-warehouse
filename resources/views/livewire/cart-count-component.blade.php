
@if(Cart::instance('cart')->count() > 0)
<b>{{ Cart::instance('cart')->count() }}</b> 
{{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">
    <img src="{{ asset('img/icon-cart.png')}}" alt="">
    <span class="count cart-count">{{ Cart::instance('cart')->count() }}</span>
</a> --}}
@endif 