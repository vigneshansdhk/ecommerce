<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title,$subtitle,$price,$status,$image,$link,$newimage,$slider_id;

    public function mount($slider_id){
        $slider          = HomeSlider::find($slider_id);
        $this->title     = $slider->title;
        $this->subtitle  = $slider->subtitle;
        $this->price     = $slider->price;
        $this->link      = $slider->link;
        $this->image     = $slider->image;
        $this->status    = $slider->status;
        $this->slider_id = $slider->id;
    }
    
    public function update(){
        $slider              = HomeSlider::find($this->slider_id);
        $slider->title       = $this->title;
        $slider->subtitle    = $this->subtitle;
        $slider->price       = $this->price;
        $slider->link        = $this->link;
        if($this->newimage){
            $imageName              = Carbon::now()->timestamp.'.' .$this->newimage->extension();
            $this->newimage->storeAs('sliders',$imageName);
            $slider->image         = $imageName;
        }
        $slider->status      = $this->status;
        $slider->save();
        Session()->flash('success_message', 'HomeSlider is Updated Succesfully');
        return redirect('admin-home-slider');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.base');
    }
}
