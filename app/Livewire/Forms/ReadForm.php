<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ReadForm extends Form
{
    #[Validate('required|string|max:255')]
    public $title = '';

    #[Validate('required|file|mimes:mp3,wav,m4a,mpeg,mp4|max:10240')]
    public $audio = null;

    #[Validate('required|string|min:5')]
    public $description = '';
    
    #[Validate('required|image|max:2048')]
    public $img_path = null;
}
