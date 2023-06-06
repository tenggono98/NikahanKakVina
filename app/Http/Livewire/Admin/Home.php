<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $page_name = 'Beranda';
        $page_title = 'Beranda';
        return view('livewire.admin.home')->layout('components.layout-admin-main',compact('page_name','page_title'));
    }
}
