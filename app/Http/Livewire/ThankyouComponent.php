<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\OrderItem;
use App\Models\Shipping;

use Cart;

class ThankyouComponent extends Component
{
    public function render()
    {
        return view('livewire.thankyou-component')->layout('layouts.checkout');
    }
}
