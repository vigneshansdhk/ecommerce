<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;


class AdminEditCouponsComponent extends Component
{
    public $coupon_code,$coupon_type,$coupon_value,$cart_value,$coupon_id;

    public function mount($coupon_id){
         $coupon             = Coupon::find($coupon_id);
         $this->coupon_code  = $coupon->code;
         $this->coupon_type  = $coupon->type;
         $this->coupon_value = $coupon->value;
         $this->cart_value   = $coupon->cart_value;
         $this->coupon_id    = $coupon->id;
    }

    public function update(){
        $this->validate([
            'coupon_code'   => 'required',
            'coupon_type'   => 'required',
            'coupon_value'  => 'required',
            'cart_value'    => 'required'
        ]);

        $coupons             = Coupon::find($this->coupon_id);
        $coupons->code       = $this->coupon_code;
        $coupons->type       = $this->coupon_type;
        $coupons->value      = $this->coupon_value;
        $coupons->cart_value = $this->cart_value;
        $coupons->save();
        Session()->flash('success_message', ' Coupon is Updated Succesfully');
        return redirect('admin-coupons');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-coupons-component')->layout('layouts.base');
    }
}
