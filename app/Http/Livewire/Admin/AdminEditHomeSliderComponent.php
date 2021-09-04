<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\Component;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $slider_id;

   

    public function mount($slider_id)
    {
        $slider = HomeSlider::find($slider_id);
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->price = $slider->price;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;

        // $imagename = Carbon::now()->timestamp.'.'.$this->image->extension(); 
        // $this->image->storeAs('sliders', $imagename);
        // $slider->image = $imagename;

        // $this->status = $slider->status;
        // $slider->save();
    }

    public function updateSlide()
    {
        $slider = HomeSlider::find($this->slider_id);
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $slider->image = $this->image;
        $slider->status = $this->status;
        if($this->newimage)
        {
            $imagename = Carbon::now()->timestamp.'.'.$this->newimage->extension(); 
            $this->newimage->storeAs('sliders', $imagename);
            $slider->image = $imagename;
        }

        $slider->status = $this->status;
        $slider->save();

        $this->dispatchBrowserEvent('success');
        //session()->flash('message', 'Slider has been updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.admin');
    }
}
