<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
 
class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->paginate(10); 
        $counts = Order::count();
        $sum = Order::sum('total');
        $tax = Order::sum('tax');
        $discount = Order::sum('discount');
        return view('livewire.admin.admin-dashboard-component', ['orders' => $orders, 'counts'=>$counts, 'sum' => $sum, 'tax' => $tax, 'discount' => $discount])->layout('layouts.admin');
    }
} 
