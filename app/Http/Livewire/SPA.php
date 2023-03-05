<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SPA extends Component
{
    public function render()
    {
        return view('livewire.spa')
        ->extends('layouts.user_type.auth');
    }
}
