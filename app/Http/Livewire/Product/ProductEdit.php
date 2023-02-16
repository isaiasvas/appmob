<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Codexshaper\WooCommerce\Facades\Product;
use Livewire\WithFileUploads;



class ProductEdit extends Component
{

    use WithFileUploads;
    public $product_categories;
    public $product_sub_categories;
    public $product_price;
    public $product_location;
    public $product_images = [];
    public $showSuccesNotification = false;

     //validação
     protected $rules = [
        'product_categories' => 'required',
        'product_sub_categories' => 'required',
        'product_price' => 'required',
        'product_images.*' => 'image|mimes:jpg,png,jpeg|max:2048'
    ];
    //mensagens customizadas
    protected $messages = [
        '*.required' => 'O campo :attribute é obrigatório.',
        'product_images.*.image' => 'O Arquivo :attribute não é uma imagem',
        'product_images.*.mimes' => 'A imagem precisa ser JPG, JPEG ou PNG.',
        'product_images.*.max' => 'A imagem :attribute não pode ter mais que 2MB.'
    ];

    //alteração do atributo (nome do campo)
    protected $validationAttributes = [
        'product_categories' => 'categoria',
        'product_sub_categories' => 'subcategoria',
        'product_price' => 'preço',
        'product_images.*' => ':index+1'
    ];
  

    public function mount()
    {
        $product = Product::all(["sku" => '19191']);
       
        $this->product_categories;
        $this->product_sub_categories;
        $this->product_price = $product[0]->price;
        $this->product_location;
        $this->product_images = [];
 
    }
    public function render()
    {
       
        return view('livewire.product.product-edit');
    }
}
