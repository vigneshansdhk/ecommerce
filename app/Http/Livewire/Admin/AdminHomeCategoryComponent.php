<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\HomeCategory;


class AdminHomeCategoryComponent extends Component
{
    public $selected_category_id = [];
    public $no_of_products;

    public function mount(){
        $category = HomeCategory::find(1);
        $this->selected_category_id = explode(',',$category->sel_categories);
        $this->no_of_products       = $category->no_of_products;
    }

    public function store(){
        $category = HomeCategory::find(1);
        $category->sel_categories = implode(',',$this->selected_category_id);
        $category->no_of_products = $this->no_of_products;
        $category->save();
        Session()->flash('success_message', 'HomeCategory is Updated Succesfully');
        return redirect('admin-home-category');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-home-category-component',compact('categories'))->layout('layouts.base');
    }
}
