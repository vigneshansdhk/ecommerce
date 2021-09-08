<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\withPagination;
use Cart;

class CategoryComponent extends Component
{
    use WithPagination;
 
    public $sorting;
    public $pagesize;
    public $category_slug;
   
    public function mount($category_slug){

        $this->sorting       = "default";
        $this->pagesize      = 12;
        $this->category_slug = $category_slug;
    }

    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        Session()->flash('success_message', ' Item is Add Succesfully');
        return redirect('cart');
    }
    public function render()
    {
        $category      = Category::where('slug',$this->category_slug)->first();
        $category_id   = $category->id;
        $category_name = $category->name;
        if($this->sorting == 'date')
        {
            $products = Product::where('category_id',$category_id)->orderBy('created_at','DESC')->paginate($this->pagesize);
            $categories = Category::all();
            return view('livewire.category-component',compact('products','categories','category_name'))->layout('layouts.base');

        }
        else if($this->sorting == 'price')
        {
            $products = Product::where('category_id',$category_id)->orderBy('regular_price','ASC')->paginate($this->pagesize);
            $categories = Category::all();
            return view('livewire.category-component',compact('products','categories','category_name'))->layout('layouts.base');

        }
        else if($this->sorting == 'price-desc')
        {
           $products = Product::where('category_id',$category_id)->orderBy('regular_price','DESC')->paginate($this->pagesize);
           $categories = Category::all();
           return view('livewire.category-component',compact('products','categories','category_name'))->layout('layouts.base');

        }
        else 
        {
            $products = Product::where('category_id',$category_id)->Paginate($this->pagesize);
            $categories = Category::all();
            return view('livewire.category-component',compact('products','categories','category_name'))->layout('layouts.base');
        }
    }
}

