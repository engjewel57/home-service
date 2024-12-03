<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\withPagination;

class AdminServicesComponent extends Component
{
    use withPagination;
    public function render()
    {
        $services = Service::paginate(10);
        return view('livewire.admin.admin-services-component',['services'=>$services])->layout('layouts.base');
    }
}
