<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class CustomerListItem extends Component
{
    public $customer;
    public function render()
    {
        return view('livewire.customer.customer-list-item');
    }

    public function delete(){
        $this->customer->delete();
        $this->emitUp('refreshCustomers');
        $this->emitUp('showDeleteMessage');
    }
}
