<?php

namespace App\Livewire\Admin;

use App\Models\ServiceCategory;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\withfileuploads;

class AdminAddServiceCategoryComponent extends Component
{
    use withfileuploads;
    public $name;
    public $slug;
    public $image;
    public function generateSlug()
    {
        $this->slug= Str::slug($this->name,'-');
    }
    public function update($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required',
            'image'=>'required|mimes:jpeg,png'
        ]);
    }
    public function createNewCategory()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'image'=>'required|mimes:jpeg,png'
        ]);
        $scategory =new ServiceCategory();
        $scategory->name= $this->name;
        $scategory->slug= $this->slug;
        $imageName= Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('categories',$imageName);
        $scategory->image= $imageName;
        $scategory->save();
        session()->flash('message','Create has been create successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-service-category-component')->layout('layouts.base');
    }
}
