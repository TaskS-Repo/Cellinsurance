<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Barryvdh\Debugbar\Facade as Debugbar;

class ViewData extends Component
{
    public function render()
    {
        return view('livewire.view-data');
    }

    public function viewData($id){
        Debugbar::info($id);
    }
}
