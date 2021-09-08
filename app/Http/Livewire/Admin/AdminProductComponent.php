<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\withPagination;


class AdminProductComponent extends Component
{
    use WithPagination;

    public function delete($id){
        Product::where('id',$id)->delete();
        Session()->flash('success_message', ' Product is Deleted Succesfully');
        return redirect('admin-products');
    }

    public function render()
    {
        $products = Product::with('category')->paginate(5);
        return view('livewire.admin.admin-product-component',compact('products'))->layout('layouts.base');
    }
}
