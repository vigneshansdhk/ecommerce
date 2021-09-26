<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;



class AdminEditCategoryComponent extends Component
{
    public $category_slug,$category_id,$name,$slug;

    public function generatestring(){
        $this->slug = Str::slug($this->name);
    }

    public function mount($category_slug){
        $this->category_slug = $category_slug;
        $category = Category::where('slug',$category_slug)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug; 
    }
   
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'name'  => 'required',
            'slug'  => 'required|unique:categories'
        ]);
    }

    public function update(){

        $this->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:categories'
        ]);
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        Session()->flash('success_message', ' Category is Updated Succesfully');
        return redirect('admin-categories');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.base');
    }
}
