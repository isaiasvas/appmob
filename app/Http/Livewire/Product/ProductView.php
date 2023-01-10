<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Codexshaper\WooCommerce\Facades\Product; 

class ProductView extends Component
{

    
   
    public $name;
    public $price;
    public $description;


    public function mount()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $this->name = $product->name;
            $this->price = $product->price;
            $this->description = $product->description;
        }
    }

    public function render()
    {
        
        return view('livewire.product.product-view');
    }
}
