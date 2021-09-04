<?php

namespace App\Http\Livewire;

use\App\Models\Product;
use\App\Models\Category; 
use App\Models\AdditionalPhotos;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }
 
    public function render() 
    {
        $cats = Category::all();
        $product = Product::where('slug', $this->slug)->first();
        $additional_photos = AdditionalPhotos::where('slug', $this->slug)->get();
        $popular_products = Product::inRandomOrder()->limit(4)->get(); //get any product from the db
        $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get(); //get products in the same category
        return view('livewire.details-component',['product' =>$product, 'additional_photos'=>$additional_photos ,'popular_products'=>$popular_products, 'related_products' => $related_products, 'cats' => $cats] )->layout('layouts.checkout');
    }
}
