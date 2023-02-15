<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Codexshaper\WooCommerce\Facades\Product;
use Livewire\WithFileUploads;
class ProductAdd extends Component
{
    use WithFileUploads;
    public $product_categories;
    public $product_sub_categories;
    public $product_price;
    public $product_location;
    public $product_images = [];


    public function createProduct(){
      
        $name = $this->product_categories . ' ' . $this->product_sub_categories;
        $price = $this->product_price;
        $getImages = $this->product_images;
        $images = [];
        
        foreach ($getImages as $photo) {
            $image = $photo;
            $name_gen = rand(10,1000000000).'.'.$image->getClientOriginalExtension();
            $image->storeAs('/images', $name_gen, 'real_public');
            array_push($images, [
			    "src" => asset('/images/'.$name_gen),
            ]);       
        }


        $data = [
            'name' => $name,
            'type' => 'simple',
            'slug' => $name. '95293',
            'regular_price' => $price,
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
            'images' => $images
        ];

        $product = Product::create($data);
    }
    public function render()
    {
        return view('livewire.product.product-add');
    }
}