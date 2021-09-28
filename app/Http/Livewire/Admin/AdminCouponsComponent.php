<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminCouponsComponent extends Component
{

    public function render()
    {
        $coupons = Coupon::all(); 
        return view('livewire.admin.admin-coupons-component',compact('coupons'))->layout('layouts.base');
    }

    public function delete($id){
        Coupon::where('id',$id)->delete();
        Session()->flash('success_message', ' Coupon has been deleted Succesfully');
        return redirect('admin-coupons');
    }
}
