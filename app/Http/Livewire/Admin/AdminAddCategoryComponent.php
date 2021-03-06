<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name,$slug;

    public function generatestring(){
        $this->slug = Str::slug($this->name);
    }
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'name'  => 'required',
            'slug'  => 'required|unique:categories'
        ]);
    }

    public function store(){

        $this->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:categories'
        ]);

         $category = new Category;
         $category->name = $this->name;
         $category->slug =  $this->slug;
         $category->save();
         Session()->flash('success_message', ' Category is Add Succesfully');
         return redirect('admin-categories');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
