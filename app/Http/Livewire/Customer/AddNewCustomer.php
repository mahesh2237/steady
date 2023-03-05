<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;

class AddNewCustomer extends Component
{
    public $name, $email, $mobile;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'mobile' => 'required|min:10|max:10'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();
        $customer = Customer::create($validatedData);
        if ($customer) {
            session()->flash('success', 'New Customer Successfully Added!');
            redirect()->to('customer-management');
        } else {

            session()->flash('error', 'Unable to Add New Customer!');
        }
    }

    public function render()
    {
        return view('livewire.customer.add-new-customer');
    }
}
