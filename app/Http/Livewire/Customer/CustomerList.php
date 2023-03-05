<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Livewire\WithPagination;
class CustomerList extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
                              'refreshCustomers'=>'refreshCustomers',
                              'showDeleteMessage' => 'showDeleteMessage'
                              
                           ];
    
   
    public function render()
    {
        return view('livewire.customer.customer-list',['customers'=>Customer::orderBy('created_at','desc')->paginate(10) ]);
    }

    public function refreshCustomers()
    {
       
        $this->render();
    }

    public function showDeleteMessage()
    {
        session()->flash('success', 'Customer Removed Successfully');
    }
}
