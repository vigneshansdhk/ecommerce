<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;

class AdminHomeSliderComponent extends Component
{

    public function delete($id){
        HomeSlider::where('id',$id)->delete();
        Session()->flash('success_message', ' HomeSlider is Deleted Succesfully');
        return redirect('admin-home-slider');
    }

    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',compact('sliders'))->layout('layouts.base');
    }
}
