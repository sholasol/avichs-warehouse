<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

 

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 24;
    }

    //function to add product to the cart
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }

    public function addToWishList($product_id, $product_name, $product_price)
    {
       Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product'); 
       $this->emitTo('wish-list-count-component', 'refreshComponent'); 
    }
    
    use WithPagination;
    //function to display product
    public function render()
    {
        if($this->sorting =='date')
        {
            $products = Product::orderby('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting =='price')
        {
            $products = Product::orderby('regular_price', 'ASC')->paginate($this->pagesize); 
        }
        else if ($this->sorting =='price-desc' )
        {
            $products = Product::orderby('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else {
            $products = Product::paginate($this->pagesize);
        }

        $categories = Category::all();

        $sounds = Product::orderBy('created_at', 'ASC')->get()->take(15);

        //$products = Product::paginate(12);
        return view('livewire.shop-component', ['products' =>$products, 'sounds' =>$sounds, 'categories' => $categories])->layout('layouts.checkout');
    }
} 
