<?php

namespace App\Http\Livewire\Common;

use Livewire\Component;

class SidebarLink extends Component
{
    public $label;
    public $link;
    
    public function mount()
    {

    }

    public function afterClick(){
        return redirect()->to($this->link);
    }

    public function render()
    {
        return view('livewire.common.sidebar-link');
    }
}
