<?php

namespace App\Livewire\Sprovider;

use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class RditSproviderProfileComponent extends Component
{
    public $service_provider_id;
    public $image;
    public $about;
    public $city;
    public $n_id;
    public $service_category_id;
    public $service_location;
    public $newimage;

    public function mount()
    {
        $sprovider=ServiceProvider:: where('user_id',Auth::user()->id)->first();
        $this->service_provider_id =$sprovider->id ?? 'None';
        $this->image=$sprovider->image ?? 'None';
        $this->about=$sprovider->about ?? 'None';
        $this->city=$sprovider->city ?? 'None';
        $this->n_id=$sprovider->n_id ?? 'None';
        $this->service_category_id=$sprovider->service_category_id ?? 'None';
        $this->service_location=$sprovider->service_location ?? 'None';
    }

    public function updateProfile()
    {
        $sprovider=ServiceProvider::where('use_id',Auth::user()->id)->first();
        if($this->newimage)
        {
            $imageName=Carbon::now()->timestame.'.'.$this->newimage->extension();
            $this->newimage->storeAs('sprovider',$imageName);
            $sprovider->image=$imageName;
        }
        $sprovider->about=$this->about;
        $sprovider->city=$this->city;
        $sprovider->n_id=$this->n_id;
        $sprovider->service_category_id=$this->aservice_category_idbout;
        $sprovider->service_location=$this->service_location;
        $sprovider->save();
        session()->flash('message','Profile has been updated successfully');

    }
    public function render()
    {
        $scategories=ServiceCategory::all();
        return view('livewire.sprovider.rdit-sprovider-profile-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
