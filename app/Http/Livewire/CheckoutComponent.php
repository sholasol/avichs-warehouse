<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Transaction;
use App\Models\OrderItem;
use App\Models\Shipping;

use Cart;
use Paystack;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $ship_to_different;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $address;
    public $city;
    public $zipcode;
    public $country;

    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_address;
    public $s_city;
    public $s_zipcode;
    public $s_country;

    public $paymentmode;

    public $paystackPaid;

    public $thankyou;

    public $card_no;
    public $exp_month;
    public $exp_year;
    public $cvc;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' =>'required',
            'lastname' =>'required',
            'email' =>'required|email',
            'mobile' =>'required|numeric',
            'address' =>'required',
            'city' =>'required',
            'zipcode' =>'required'
        ]);

    }


    public function placeOrder()
    {
        $this->validate([
            'firstname' =>'required',
            'lastname'  =>'required',
            'email'     =>'required|email',
            'mobile'    =>'required|numeric',
            'address'   =>'required',
            'city'      =>'required',
            'zipcode'   =>'required'
        ]);

        $order  = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->firstname = $this->firstname;
        $order->lastname  =  $this->lastname;
        $order->email     =  $this->email;
        $order->mobile    =  $this->mobile;
        $order->address   =  $this->address;
        $order->city      =  $this->city;
        $order->zipcode   =  $this->zipcode;
        $order->country   =  $this->country;
        $order->status    ='ordered';
        $order->is_shipping_different = $this->ship_to_different ? 1:0;
        $order->save();

        foreach(Cart::instance('cart')->content() as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        //shipping
            $shipping = new Shipping();
            $shipping->order_id  = $order->id;
            $shipping->firstname =  $this->firstname;
            $shipping->lastname  =  $this->lastname;
            $shipping->email     =  $this->email;
            $shipping->mobile    =  $this->mobile;
            $shipping->address   =  $this->address;
            $shipping->city      =  $this->city;
            $shipping->zipcode   =  $this->zipcode;
            $shipping->country   =  $this->country;
            $shipping->save();

        //end shipping

        //Transaction
            $transaction = new Transaction();
            $transaction->user_id= Auth::user()->id;
            $transaction->order_id= $order->id;
            $transaction->mode ='paystack';
            $transaction->status ='pending';
            $transaction->save();

            $this->thankyou = 1;
            //$this->resetCart();

        // if($this->ship_to_different)
        // {
            

        // }

       

            

    }

  


    public function resetCart()
    {
        $this->thankyou = 1;

        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

 
    public function verifyforCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        else if($this->thankyou){
            return redirect()->route('thankyou');
        }
        else if(!session()->get('checkout'))
        {
            return redirect()->route('product.cart');
        }
    }

   


    public function render()
    {
        $this->verifyforCheckout(); 
        return view('livewire.checkout-component')->layout('layouts.checkout');
    }
}
