<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;



class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name,$slug,$short_description,$description,$regular_price,$sale_price,$sku,$stock,$featured,$qty,$image,$category_id;

    public function mount(){
        $this->stock = "instock";
        $this->featured = 0;
    }

    public function store(){

       
        $product                    = new Product;
        $product->name              = $this->name;
        $product->slug              = Str::slug($this->slug);
        $product->short_description = $this->short_description;
        $product->description       = $this->description;
        $product->regular_price     = $this->regular_price;
        $product->sale_price        = $this->sale_price;
        $product->SKU               = $this->sku;
        $product->stock_status      = $this->stock;
        $product->featured          = $this->featured;
        $product->quantity          = $this->qty;
        $imageName                  = Carbon::now()->timestamp.'.' .$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image             = $imageName;
        $product->category_id       = $this->category_id;
        $product->save();
        Session()->flash('success_message', 'Product is Added Succesfully');
        return redirect('admin-products');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',compact('categories'))->layout('layouts.base');
    }
}
