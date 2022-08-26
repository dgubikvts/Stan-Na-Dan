<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $form = [
        'email' => '',
        'password' => ''
    ];

    public function login(){
        $this->validate([
            'form.email' => 'required|email',
            'form.password' => 'required'
        ]);

        if(Auth::attempt($this->form)){
            session()->flash('message', 'Uspesna prijava');
            return redirect('/');
        }
        else {
            session()->flash('message', 'Neuspesna prijava');
            return redirect('/admin-panel/login');
        }
    }

    public function render()
    {
        return view('livewire.login')->layout('livewire.layouts.app');
    }
}
