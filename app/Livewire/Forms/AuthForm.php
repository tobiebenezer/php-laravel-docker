<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AuthForm extends Form
{
    #[Validate(['required', 'email'])]
    public $email;

    #[Validate(('required'))]
    public $name = '';

    // #[Validate('required|min:6|max:25|confirmed')]
    public $password;

    public function storeUser()
    {
        $this->validate();

        $user = User::where('email',$this->email)->first();

        if($user){
            return false;
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();
        return true;
    }
    
}
