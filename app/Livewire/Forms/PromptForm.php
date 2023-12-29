<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PromptForm extends Form
{
    #[Validate('required')]
    public $prompt = '';
    
}
