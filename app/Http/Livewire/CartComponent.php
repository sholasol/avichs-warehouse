<?php

namespace App\Http\Livewire;
use Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class CartComponent extends Component
{

    public $haveCouponCode; //check if the coupon code is selected
    public $CouponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;

//increase item qunatity
    public function increaseQuantity($rowId)
    {
        $product =Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);

        $this->emitTo('cart-count-component', 'refreshComponent');
    }
//decrease item quantity
    public function decreaseQuantity($rowId)
    {
        $product =Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty); 
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    //remove an item from the cart
    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been removed');
    }

    //empty cart
    public function destroyAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function applyCouponCode()
    {
       $coupon = Coupon::where('code', $this->CouponCode)->where('cart_value', '<=',Cart::instance('cart')->subtotal() )->first();
       if(!$coupon)
       {
           session()->flash('coupon_message', 'Coupon code is invalid');
           return;
       }
       session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value,
       ]);
    }

    public function calculateDiscount()
    {
        if(session()->has('coupon'))
        {
            if(session()->get('coupon')['type'] =='fixed')
            {
               $this->discount = session()->get('coupon')['value'];
            }
            else
            {
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;
            }
            $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax'))/100;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
        }
    }

    //removing coupon
    public function removeCoupon()
    {
        session()->forget('coupon');
    }

    //checking out

    public function checkout()
    {
        //check if user is logged in
        if(Auth::check())
        {
            return redirect()->route('checkout');
        }else
        {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        if(!Cart::instance('cart')->count() > 0)
        {
            session()->forget('checkout');
            return;
        }
        if(session()->has('coupon'))
        {
            session()->put('checkout', [
                'discount' =>$this->discount,
                'subtotal' =>$this->subtotalAfterDiscount,
                'tax'      =>$this->taxAfterDiscount,
                'total'    =>$this->totalAfterDiscount
            ]);
        }
        else
        {
            session()->put('checkout', [

            'discount' =>0,
            'subtotal' =>Cart::instance('cart')->subtotal(),
            'tax'      =>Cart::instance('cart')->tax(),
            'total'    =>Cart::instance('cart')->total()
            ]);
        }
    }


    public function render()
    {
        if(session()->has('coupon'))
        {
            if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value'])
            {
                session()->forget('coupon');
            }else{
                $this->calculateDiscount();
            }
        }
        $this->setAmountForCheckout();
        return view('livewire.cart-component')->layout('layouts.checkout');
    }
}
