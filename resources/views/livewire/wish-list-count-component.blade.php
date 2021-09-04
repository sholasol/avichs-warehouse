@if (Cart::instance('wishlist')->count() > 0)
    <li class="wishlist hidden-xs">
        <a href="" class="fa fa-heart" style="color:#fff;"> {{ Cart::instance('wishlist')->count() }}</a>
    </li>
@endif