<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Codexshaper\WooCommerce\Facades\Product; 

class ProductView extends Component
{

    public $products;


    public function render()
    {
        $products = Product::all();
        return view('livewire.product.product-view');
    }
}
