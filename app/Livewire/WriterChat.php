<?php

namespace App\Livewire;

use Livewire\Attributes\Validate; 
use Livewire\Component;

class WriterChat extends Component
{
    #[Validate('required')] 
    public $prompt = '';

    public function render()
    {
        return view('livewire.writer-chat');
    }

    public function sentPrompt()
    {

        dd($this->prompt);
    }
}
