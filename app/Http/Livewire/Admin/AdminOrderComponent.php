<?php

namespace App\Http\Livewire\Admin;


use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Livewire\Component; 

class AdminOrderComponent extends Component
{
    public $order_id;


    public function updateOrderStatus($order_id, $status)
    {
        $order = Order::find($order_id);
        $order->status = $status; 
        if($status  == "delivered")
        {
            $order->delivered_date = DB::raw('CURRENT_DATE');
            $order->status = "delivered";
        }
        else if($status == "canceled")
        {
            $order->canceled_date = DB::raw('CURRENT_DATE');
        }
        else if($status == "shipped")
        {
            $order->shipped_date = DB::raw('CURRENT_DATE');
        }
        $order->save();
        $this->dispatchBrowserEvent('success');
    }
 
    //update status in the transaction table
    public function updatePayment($order_id)
    {
        Transaction::where('order_id', $order_id)->update([
            'status' =>'approved'
        ]);

        $this->dispatchBrowserEvent('success');
        
    } 

    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.admin.admin-order-component', ['orders' => $orders])->layout('layouts.admin');
    }
}
