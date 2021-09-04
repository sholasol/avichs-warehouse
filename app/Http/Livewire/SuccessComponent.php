<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\OrderItem;
use App\Models\Shipping; 

use Cart;
 
class SuccessComponent extends Component
{
    public $thankyou;

    public function resetCart()
    {
        $this->thankyou = 1;

        Cart::instance('cart')->destroy();
        session()->forget('checkout');

        return redirect()->to('/user/dashboard');
    }

    public function render()
    {
        return view('livewire.success-component')->layout('layouts.checkout');
    }
}
