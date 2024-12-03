<?php

namespace App\Livewire\Admin;

use App\Models\ServiceProvider;
use Livewire\Component;

class AdminServiceProviderComponent extends Component
{
    public function render()
    {
        $sprovider=ServiceProvider::paginate(12);
        return view('livewire.admin.admin-service-provider-component',['sprovider'=>$sprovider])->layout('layouts.base');
    }
}
