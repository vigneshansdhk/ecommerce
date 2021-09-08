<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title,$subtitle,$price,$status,$image,$link;

    public function mount(){
        $this->status = 0;
    }

    public function store(){
        $slider              = new HomeSlider; 
        $slider->title       = $this->title;
        $slider->subtitle    = $this->subtitle;
        $slider->price       = $this->price;
        $slider->link        = $this->link;
        $imageName           = Carbon::now()->timestamp.'.' .$this->image->extension();
        $this->image->storeAs('sliders',$imageName);
        $slider->image       = $imageName;
        $slider->status      = $this->status;
        $slider->save();
        Session()->flash('success_message', 'HomeSlider is Added Succesfully');
        return redirect('admin-home-slider');
        
    }
 
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
