<?php

namespace App\Livewire\Customer;

use Livewire\Component;

class CustomerDashbboardComponent extends Component
{
    public function render()
    {
        return view('livewire.customer.customer-dashbboard-component')->layout('layouts.base');
    }
}
