<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ToneAdjustmentForm extends Form
{
    #[Validate('nullable')]
    public $tone  ;

    #[Validate('required')]
    public $min_kw_density ;

    #[Validate('required')]
    public $max_kw_density ;
    
    
}
