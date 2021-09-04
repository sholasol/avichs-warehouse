<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Livewire\Component; 
use Illuminate\Support\Facades\Auth; 

class UserDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->paginate(5);
        return view('livewire.user.user-dashboard-component', ['orders' => $orders])->layout('layouts.checkout');
    }
}
