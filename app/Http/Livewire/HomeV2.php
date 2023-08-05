<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeV2 extends Component
{
    public function render()
    {
        return view('livewire.home-v2')->layout('components.layout');
    }
}
