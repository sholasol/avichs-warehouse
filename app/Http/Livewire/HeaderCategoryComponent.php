<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class HeaderCategoryComponent extends Component
{
    public function render()
    {
        $cats = Category::all();

        $categories = Category::all();

        return view('livewire.header-category-component', ['categories' => $categories, 'cats' => $cats])->layout('layouts.base');
    }
}
