<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;



class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $name,$slug,$short_description,$description,$regular_price,$sale_price,$sku,$stock,$featured,$qty,$image,$category_id,$newimage,$product_id;

    public function mount($product_slug){
        $product = Product::where('slug',$product_slug)->first();

        $this->name              = $product->name;
        $this->slug              = $product->slug;
        $this->short_description = $product->short_description;
        $this->description       = $product->description;
        $this->regular_price     = $product->regular_price;
        $this->sale_price        = $product->sale_price;
        $this->sku               = $product->SKU;
        $this->stock             = $product->stock_status;
        $this->featured          = $product->featured;
        $this->qty               = $product->quantity;
        $this->newimage          = $product->image;
        $this->category_id       = $product->category_id;
        $this->newimage          = $product->image;
        $this->product_id        = $product->id;

    }

    public function update(){
        $product                    = Product::find($this->product_id);
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
        if($this->newimage){
            $imageName              = Carbon::now()->timestamp.'.' .$this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image         = $imageName;
        }
        $product->category_id       = $this->category_id;
        $product->save();
        Session()->flash('success_message', 'Product is Updated Succesfully');
        return redirect('admin-products');
    }
    public function render()
    {
        $categories =  Category::all();
        return view('livewire.admin.admin-edit-product-component',compact('categories'))->layout('layouts.base');
    }
}
