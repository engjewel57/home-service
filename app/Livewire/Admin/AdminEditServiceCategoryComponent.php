<?php

namespace App\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;
class AdminEditServiceCategoryComponent extends Component
{
    use withfileuploads;
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newimage;
    public $featured;

    public function mount($category_id)
    {
        $scategory =ServiceCategory::find($category_id);
        $this->category_id=$scategory->id;
        $this->name= $scategory->name;
        $this->slug=$scategory->slug;
        $this->image=$scategory->image;
        $this->featured=$scategory->featured;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'.');
    }

    public function update($fields)
    {
        $this->validateOnly($fields,[

            'name'=>'required',
            'slug'=>'required',
        ]);

    }

    public function updateServiceCategory()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
        ]);
        if($this->newimage)
        {
            $this->validate([
                'newimage'=>'required|mimes:jpeg,png'
            ]);
        }
        $scategory= ServiceCategory::find($this->category_id);
        $scategory->name=$this->name;
        $scategory->slug=$this->slug;
        if($this->newimage)
        {
            $imageName=Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('categories',$imageName);
            $scategory->image=$imageName;

        }
        $scategory->featured=$this->featured;
        $scategory->save();
        session()->flash('message','Create has been update successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-service-category-component')->layout('layouts.base');
    }
}
