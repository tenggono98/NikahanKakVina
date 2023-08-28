<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\View\Components\Alert;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use function Laravel\Prompts\alert;

class LoginComponen extends Component
{
    use LivewireAlert;
    public $username;
    public $password;


    public function mount(){
        if (Auth::check()) {
            return redirect()->route('admin.beranda');// Change the URL as needed
        }
    }
    public function render()
    {
        return view('livewire.login-componen')->layout('components.layout-admin');
    }


    public function submit() {
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $credentials = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->route('admin.beranda'); // Replace with your dashboard route
        } else {
            // Authentication failed
            session()->flash('error', 'Invalid credentials.');
        }

        $this->username = '';
        $this->password = '';

        $this->alert('error', 'Invalid username or password.');
    }

    public function logout() {
        Auth::logout();
        // dd(session()->all());
        // $this->alert('Login First Lah');

        return redirect()->route('login');
    }

}
