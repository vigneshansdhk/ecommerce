<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminAddCouponsComponent extends Component
{
    public $coupon_code,$coupon_type,$coupon_value,$cart_value;

    public function store(){
        $this->validate([
            'coupon_code'   => 'required',
            'coupon_type'   => 'required',
            'coupon_value'  => 'required',
            'cart_value'    => 'required'
        ]);

        $coupons             = new coupon;
        $coupons->code       = $this->coupon_code;
        $coupons->type       = $this->coupon_type;
        $coupons->value      = $this->coupon_value;
        $coupons->cart_value = $this->cart_value;
        $coupons->save();
        Session()->flash('success_message', ' Coupon is Add Succesfully');
        return redirect('admin-coupons');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-coupons-component')->layout('layouts.base');
    }
}
