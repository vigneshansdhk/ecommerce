<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\withPagination;


class AdminCategoryComponent extends Component
{
    use WithPagination;
    

    public function delete($id){
        Category::where('id',$id)->delete();
        Session()->flash('success_message', ' Category is Deleted Succesfully');
        return redirect('admin-categories');
    }

    public function render()
    {
        $categories = Category::orderBy('id','desc')->paginate(5);
        return view('livewire.admin.admin-category-component',compact('categories'))->layout('layouts.base');
    }
}
