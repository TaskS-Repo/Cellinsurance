<?php

namespace App\Http\Livewire;

use App\Models\Mobile;
use Illuminate\Http\Request;

use Livewire\Component;

class EditForm extends Component
{
    public function render(Request $request)
    {
        $mobile=Mobile::where('id',$request->id)->first();
        return view('livewire.edit-form',compact('mobile'));
    }
}
