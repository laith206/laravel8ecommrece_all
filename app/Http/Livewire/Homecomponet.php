<?php

namespace App\Http\Livewire;

use Livewire\Component;
use View;


class Homecomponet extends Component
{
    public function render()
    {
        return view('livewire.homecomponet')->layout('layouts.base');
    }
}
