<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;


class Detailscomponet extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug=$slug;

    }

    public function store($product_id,$product_name,$product_price)
    {
       Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
       session()->flash('success_message','  Item added in Cart');
       return redirect()->route('product.cart');
    }

    public function render()
    {
        $product=Product::where('slug',$this->slug)->first();
        $popular_producte=Product::inRandomOrder()->limit(4)->get();
        $related_prodducts = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.detailscomponet',['product'=>$product,'popular_producte'=>$popular_producte,'related_prodducts'=>$related_prodducts])->layout('layouts.base');
    }
}
