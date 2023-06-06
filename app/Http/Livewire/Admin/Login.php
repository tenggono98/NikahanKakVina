<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Login extends Component
{
    use LivewireAlert;


    public function render()
    {
        $page_name = 'Login';
        
        return view('livewire.admin.login')->layout('components.layout-admin',compact('page_name'));
    }

    public function login()
    {
        $this->alert('success', 'Success is approaching!');
    }
}
