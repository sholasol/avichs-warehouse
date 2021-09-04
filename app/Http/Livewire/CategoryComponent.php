<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

 

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->category_slug = $category_slug;
    }

    //function to add product to the cart
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    //function to display product
    public function render()

    {
        $category = Category::where('slug',$this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if($this->sorting =='date')
        {
            $products = Product::where('category_id', $category_id)->orderby('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting =='price')
        {
            $products = Product::where('category_id', $category_id)->orderby('regular_price', 'ASC')->paginate($this->pagesize); 
        }
        else if ($this->sorting =='price-desc' )
        {
            $products = Product::where('category_id', $category_id)->orderby('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else {
            $products = Product::where('category_id', $category_id)->paginate($this->pagesize);
        }

        $cats = Category::paginate(6);

        $categories = Category::all();

        //$products = Product::paginate(12);
        return view('livewire.category-component', ['products' =>$products, 'categories' => $categories, 'cats' => $cats, 'category_name'=>$category_name])->layout('layouts.checkout');
    }
}
