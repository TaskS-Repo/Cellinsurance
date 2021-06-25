<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Barryvdh\Debugbar\Facade as Debugbar;

use App\Models\Mobile;

class AddForm extends Component
{

    public $brand='';
    public $model='';
    public $name='';
    public function render()
    {
        return view('livewire.add-form');
    }

    public function submit(){
        $mobile=new Mobile();
        $mobile->brand=$this->brand;
        $mobile->model=$this->model;
        $mobile->name=$this->name;
        $mobile->save();

        session()->flash('success','new Brand added Successfully');

    }
}
