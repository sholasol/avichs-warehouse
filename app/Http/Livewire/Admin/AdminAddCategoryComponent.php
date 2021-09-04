<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name); 
    }

    //form validation function
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' =>'required',
            'slug'  =>'required|unique:categories'
        ]);
    }


    public function storeCategory()
    {  //form validation before processing
        $this->validate([
            'name' =>'required',
            'slug'  =>'required|unique:categories'
        ]);
        $category = new Category();
        $category->name = $this->name; 
        $category->slug = $this->slug;
        $category->save();
        $this->dispatchBrowserEvent('success');
        //$this->emit('alert', ['type' =>'success', 'message' => 'Operation Successful']);
        //session()->flash('message', 'Category has been saved successfully');
        //$this->dispatchBrowserEvent('hide-form', ['message' => 'Category Added Successfully']);
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.admin');
    }
}
