<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class Profile extends Component
{
    public $user;
  
    public function mount()
    {
      $user = Auth()->user();
    }

    public function render()
    {
        return view('livewire.customer.profile')->extends('layouts.user_type.auth');
    
    }
}
