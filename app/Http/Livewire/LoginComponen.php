<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class LoginComponen extends Component
{
    use LivewireAlert;
    public $username;
    public $password;

    public function render()
    {
        return view('livewire.login-componen')->layout('components.layout-admin');
    }


    public function submit() {
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $this->username)->first();

        if ($user && Hash::check($this->password, $user->password)) {
            auth()->login($user);

            return redirect()->intended('admin/beranda');
        }

        $this->username = '';
        $this->password = '';

        $this->alert('error', 'Invalid username or password.');
    }

    public function logout() {
        auth()->logout();

        return redirect('/login');
    }

}
