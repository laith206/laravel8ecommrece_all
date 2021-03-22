<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDashboardcomponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-dashboardcomponent')->layout('layouts.base');
    }
}
