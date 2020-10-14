<?php

namespace Impact\Resistance\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Fortify\Fortify;
use App\Models\User;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class Login extends Component
{
    public $step;
    public $email;

    public $password;

    public $username;
    public $test;
    public $avatar_url;


    public function mount()
    {
        $this->step = 1;
    }

    public function getuser() {
        $user = User::where('email', $this->email)->first();

        if($user) {
            $this->username = $user->name;
            $this->avatar_url = $user->avatar_url;
            $this->step = 2;
        } else {
            $this->step = 0;
        }
    }

    public function resetform() {
        $this->step = 1;
    }

    public function render()
    {
        return view('resistance::auth.livewire.login')->layout('resistance::layouts.app');

    }

}
