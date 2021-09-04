<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminEditCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;

    public function mount($coupon_id)
    {
        $coupon = Coupon::find($coupon_id);
        $this->code = $coupon->code;
        $this->type = $coupon->type;
        $this->value = $coupon->value;
        $this->cart_value = $coupon->cart_value;
        $this->coupon_id = $coupon->id;
    }

    public function updated($fields)
    {
      $this->validateOnly($fields, [
            'code' =>'required',
            'type'  =>'required',
            'value'  =>'required|numeric',
            'cart_value'  =>'required|numeric',
      ]);  
    }

    public function updateCoupon()
    {
         //form validation before processing
         $this->validate([
            'code' =>'required',
            'type'  =>'required',
            'value'  =>'required|numeric',
            'cart_value'  =>'required|numeric',
        ]);
        $coupon = Coupon::find($this->coupon_id);
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->save();

        $this->dispatchBrowserEvent('success');
        //session()->flash('message', 'Coupon has been updated successfully');


    }

    public function render()
    {
        return view('livewire.admin.admin-edit-coupon-component')->layout('layouts.admin');
    }
}
