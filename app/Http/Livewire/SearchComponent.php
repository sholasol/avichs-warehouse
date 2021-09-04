<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;



class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;

        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }

    //function to add product to the cart
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    //function to display product
    public function render()
    {
        if($this->sorting =='date')
        {
            $products = Product::where('name', 'like', '%'.$this->search. '%')->orderby('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting =='price')
        {
            $products = Product::where('name', 'like', '%'.$this->search. '%')->orderby('regular_price', 'ASC')->paginate($this->pagesize); 
        }
        else if ($this->sorting =='price-desc' )
        {
            $products = Product::where('name', 'like', '%'.$this->search. '%')->orderby('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else {
            $products = Product::where('name', 'like', '%'.$this->search. '%')->paginate($this->pagesize);
        }

        $categories = Category::all();

        //$products = Product::paginate(12);
        return view('livewire.search-component', ['products' =>$products, 'categories' => $categories])->layout('layouts.checkout');
    }
}
