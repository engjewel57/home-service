<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class AdminEditServiceComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $tagline;
    public $service_category_id;
    public $price;
    public $discount;
    public $discount_type;
    public $image;
    public $thumbnail;
    public $description;
    public $inclusion;
    public $exclusion;
    public $newthumbnail;
    public $newimage;
    public $service_id;

    public $featured;

    public function mount($service_slug)
    {
        $service = Service::where('slug',$service_slug)->first();
        $this->name=$service->name;
        $this->slug=$service->slug;
        $this->tagline=$service->tagline;
        $this->service_category_id=$service->service_category_id;
        $this->price=$service->price;
        $this->discount_type=$service->discount_type;
        $this->featured=$service->featured;
        $this->image=$service->image;
        $this->thumbnail=$service->thumbnail;
        $this->description=$service->description;
        $this->inclusion=str_replace("|","\n",$service->inclusion);
        $this->exclusion=str_replace("|","\n",$service->exclusion);
    }
    public function generateSlug()
    {
        $this->slug=Str::slug($this->name,'-');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required',
            'tagline'=>'required',
            'service_category_id'=>'required',
            'price'=>'required',

            'description'=>'required',
            'inclusion'=>'required',
            'exclusion'=>'required',
        ]);
        if($this->newthumbnail)
        {
            $this->validateOnly($fields,[
            'thumbnail'=>'required|mimes:jpeg,png',
        ]);
            if($this->newimage)
            {
                $this->validateOnly($fields,[
                    'newimage'=>'required|mimes:jpeg,png'
                ]);
            }
        }
    }
    public function updateService()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'tagline'=>'required',
            'service_category_id'=>'required',
            'price'=>'required',

            'description'=>'required',
            'inclusion'=>'required',
            'exclusion'=>'required',
        ]);
        if($this->newthumbnail)
        {
            $this->validate([
                'thumbnail'=>'required|mimes:jpeg,png',
            ]);
            if($this->newimage)
            {
                $this->validate([
                    'newimage'=>'required|mimes:jpeg,png'
                ]);
            }
        }
        $service= new Service();
        $service->name=$this->name;
        $service->slug=$this->slug;
        $service->tagline=$this->tagline;
        $service->service_category_id=$this->service_category_id;
        $service->price=$this->price;
        $service->discount=$this->discount;
        $service->discount_type=$this->discount_type;
        $service->featured=$this->featured;
        $service->description=$this->description;
        $service->inclusion=str_replace("\n",'|',trim($this->inclusion));
        $service->exclusion=str_replace("\n",'|',trim($this->exclusion));
        if($this->newthumbnail)
        {
            unlink('images/services/thumbnails'.'/'.$service->thumbnail);
            $imageName=Carbon::now()->timestamp. '.' .$this->newthumbnail->extension();
            $this->newthumbnail->storeAs('services/thumbnails',$imageName);
            $service->thumbnail = $imageName;
        }

        if($this->newimage)
        {
            unlink('images/services'.'/'.$service->image);
            $imageName2=Carbon::now()->timestamp . '.' .$this->newimage->extension();
            $this->newimage->storeAs('services',$imageName2);
            $service->image=$imageName2;
        }


        $service->save();
        session()->flash('message','Service has been create successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-service-component')->layout('layouts.base');
    }
}
