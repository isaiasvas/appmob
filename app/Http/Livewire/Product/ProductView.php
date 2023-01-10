<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Codexshaper\WooCommerce\Facades\Product; 

class ProductView extends Component
{

    public $products = Product::all();


    public function render()
    {
        return view('livewire.product.product-view');
    }
}
