<?php

namespace Impact\Resistance\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Fortify\Fortify;
use App\Models\User;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class Register extends Component
{
    public function render()
    {
        return view('resistance::auth.livewire.register')->layout('resistance::layouts.app');

    }

}
