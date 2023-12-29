<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Livewire\Forms\{
    AuthForm,
    PromptForm,
    ToneAdjustmentForm
};
use Illuminate\Support\Facades\Auth;

class WriterChat extends Component
{
    
    public ToneAdjustmentForm $toneAdjustmentForm;
    public AuthForm $authForm;
    public PromptForm $promptForm;

    public $tones = [
        'narrative', 'authoritative', 'sad',
        'emotional', 'inspiring', 'professional', 'happy'
    ];

    public function render()
    {
        return view('livewire.writer-chat');
    }

    public function mount()
    {
        $this->toneAdjustmentForm->tone = auth()->user()?->tone ?? 'professional';

        $this->toneAdjustmentForm->min_kw_density = auth()?->user()?->min_kw_density ?? 0.02;

        $this->toneAdjustmentForm->max_kw_density = auth()?->user()?->max_kw_density ?? 0.05;
    }

    public function sentPrompt()
    {

        dd($this->promptForm->prompt);
    }

    public function updated($name, $value)
    {
        if (in_array($name, [
            'toneAdjustmentForm.tone',
            'toneAdjustmentForm.min_kw_density',
            'toneAdjustmentForm.max_kw_density'
        ])) {
            
            auth()->user()->update([
                explode('.',$name)[1] => $value
            ]);
        }
    }

    public function signin()
    {
        if (Auth::attempt([
            'email' => $this->authForm->email,
            'password' => $this->authForm->password,
        ])) {
            session()->regenerate();

            session()->flash('success', 'Logged Successfully');
            return $this->redirect('/');
        }

        session()->flash('error', 'Invalid Credentials');

        return $this->redirect('/');
    }

    public function register()
    {
        if ($this->authForm->storeUser()) {

            session()->flash('success', 'Account Created Successfully');
            return $this->redirect('/');
        }

        session()->flash('error', 'Email has already been used');
        return $this->redirect('/');
    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect('/');
    }

    public function promptGenerator()
    {
    }
}
