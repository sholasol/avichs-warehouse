<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaystackCheckoutComponent extends Component
{
    public function render()
    {
        return view('livewire.paystack-checkout-component')->layout('layouts.base');
    }
}
