<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Sale;

class AdminSaleComponent extends Component
{

    public $sale_date,$status;

    public function mount(){
       $sale = Sale::find(1);
       $this->sale_date = $sale->sale_date;
       $this->status    = $sale->status;
    }

    public function updatesale(){
        $sale = Sale::find(1);
        $sale->sale_date = $this->sale_date;
        $sale->status    = $this->status;
        $sale->save();
        Session()->flash('success_message', ' Record Updated Succesfully');
        return redirect('admin-sale');
    }
    public function render()
    {
        return view('livewire.admin.admin-sale-component')->layout('layouts.base');
    }
}
