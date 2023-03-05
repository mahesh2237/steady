<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
class CustomerManagement extends Component
{

    protected $listeners = [
        'addNewCustomer'=>'add_new_customer',
        'refreshComponent' => '$refresh'
     ];
    
    public $slug;
    public $component;

    public function mount(Request $request)
    {
        $this->setSlug(Request::segment(count(Request::segments())));
    }

    public function render()
    {
        return view('livewire.customer.customer-management')->extends('layouts.user_type.auth');;
    }

    private function setSlug($slug)
    {
        $this->slug = $slug;

        switch($this->slug){
            
            case 'customer-management':
                $this->component = 'customer.customer-list';
            break;
            
            case 'add-new-customer':
                $this->component = 'customer.add-new-customer';
            break;

            default:
            $this->component = 'customer.customer-list';
        }
    }

    public function add_new_customer()
    {
        redirect()->to('customer-management/add-new-customer');       
       // $this->component = 'customer.add-new-customer';
       // $this->emitSelf('refreshComponent');
    }
}
