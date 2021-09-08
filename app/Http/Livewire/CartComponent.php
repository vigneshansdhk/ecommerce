<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseqty($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decreaseqty($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function delete($rowId){
        Cart::remove($rowId);
        Session()->flash('success_message', ' Item is Deleted Succesfully');
    }

    public function deleteAll(){
        Cart::destroy();
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
