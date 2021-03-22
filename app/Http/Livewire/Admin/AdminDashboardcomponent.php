<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardcomponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboardcomponent')->layout('layouts.base');
    }
}
