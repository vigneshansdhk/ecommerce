<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Sale;
use Cart;

class DetailsComponent extends Component
{
    public $slug,$qty;

    public function mount($slug){
       $this->slug = $slug;
       $this->qty  = 1;
    }

    public function increaseqty(){
        $this->qty++ ;
    }

    public function decreaseqty(){
        if($this->qty > 1){
            $this->qty--;
        }
    }
    public function store($product_id,$product_name,$product_price){
       Cart::add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
        Session()->flash('success_message', ' Item is Add Succesfully');
        return redirect('cart');
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
        $sale = Sale::find(1);
        return view('livewire.details-component',compact('product','popular_products','related_products','sale'))->layout('layouts.base');
    }
}
