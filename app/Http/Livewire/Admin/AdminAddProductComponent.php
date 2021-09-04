<?php

namespace App\Http\Livewire\Admin;
 
use App\Models\Category;
use App\Models\Product;
use App\Models\AdditionalPhotos;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
 
class AdminAddProductComponent extends Component
{
    use WithFileUploads; //
    public $name;
    public $size;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $additionalPhotos =[];
    

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug()
    {
         $this->slug = Str::slug($this->name, '-');
    }


    //form validation function
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' =>'required',
            'slug'  =>'required|unique:products',
            'sale_price'  => 'required|numeric',
            'regular_price'  => 'required|numeric',
            'description'  => 'required',
            'quantity'      => 'required',
            'stock_status'      => 'required',
            'short_description'      => 'required' 
        ]);
    }


    public function addProduct()
    {
        //dd($this->description);


        //form validation before processing
        $this->validate([
            'name' =>'required',
            'slug'  =>'required|unique:products',
            'sale_price'  => 'required|numeric',
            'regular_price'  => 'required|numeric',
            'description'  => 'required',
            'quantity'      => 'required',
            'stock_status'      => 'required',
            'short_description'      => 'required' 
        ]);

        // $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
        // $this->newimage->storeAs('products', $imageName);
        // $AdditionalPhoto = new AdditionalPhotos();
                // $AdditionalPhoto->slug = $this->slug;
                // $additionalImg = Carbon::now()->timestamp.'.'.$photo->extension();
                // $photo->storeAs('additional_photos', $additionalImg); //storage directory and image name
                // $AdditionalPhoto->image = $imageName;
                // $AdditionalPhoto->save();

        //This uploads multiple images
        if(!empty($this->additionalPhotos))
        {
            foreach($this->additionalPhotos as $photo){
                $originalname = $photo->getClientOriginalName();
                $file_extension = $photo->getClientOriginalExtension();
                $filename = $originalname.'.'.$file_extension;

                $photo->storeAs('additional_photos', $filename);
                
                //$filename->store('additional_photos');
                //save image to database
                AdditionalPhotos::create([
                    'slug' => $this->slug,
                    'filename'   =>$filename
                ]);
            }
        }

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->size = $this->size;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products', $imageName); //storage directory and image name
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->save();
        $product->id;
        $this->dispatchBrowserEvent('success');
        //session()->flash('message', 'Product has been added succesfully');
    }


    public function render()
    {
        $categories = Category::all(); 
        return view('livewire.admin.admin-add-product-component', ['categories'=>$categories])->layout('layouts.admin');
    }
}
