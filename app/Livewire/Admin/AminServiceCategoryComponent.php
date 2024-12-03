<?php

namespace App\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AminServiceCategoryComponent extends Component
{
    use WithPagination;
    public function deleteServiceCategory($id)
    {
        $scategory =ServiceCategory::find($id);
        if($scategory->image)
        {
            unlink('images/categories'.'/'.$scategory->image);
        }
        $scategory->delete();
        session()->flash('message','Service Category has been delete successfully');
    }
    public function render()
    {
        $scategories=ServiceCategory::paginate(10);
        return view('livewire.admin.amin-service-category-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
