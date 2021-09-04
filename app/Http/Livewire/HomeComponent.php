<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\HomeSlider; 
use App\Models\Category;
use Livewire\WithPagination;
use Cart;

use Livewire\Component;

class HomeComponent extends Component
{
    //function to add product to the cart
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }

    use WithPagination;
    public function render()
    { 
        $products = Product::where('category_id', 2)->inRandomOrder() ->limit(6)->get();
        
        $categories = Category::paginate(8);

        $sliders = HomeSlider::where('status', 1)->get();

        $prods = Product::orderBy('created_at', 'ASC')->get()->take(8);

        $bests = Product::orderBy('created_at', 'ASC')->get()->take(3); //bestseller

        $populars = Product::orderBy('created_at', 'DESC')->get()->take(3); //bestseller

        $homes = Product::where('category_id', 1)->inRandomOrder() ->limit(6)->get(); //Home appliance and take 6 items
        
        $others = Product::where('category_id', 8)->inRandomOrder() ->limit(6)->get(); //Home appliance and take 6 items

        $sounds = Product::where('category_id', 3)->get()->take(6); //Entertainment and take 6 items
        
        $phones = Product::where('category_id', 7)->get()->take(6); //phones and take 6 items
        
        return view('livewire.home-component', ['products' =>$products, 'categories' =>$categories, 'others'=> $others, 'prods' =>$prods, 'populars' =>$populars, 'phones' =>$phones, 'sounds' =>$sounds, 'bests' =>$bests, 'sliders'=>$sliders, 'homes'=>$homes])->layout('layouts.base');
    } 
}
