<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class EventForm extends Form
{
    #[Validate('required|string|max:255')]
    public $title = '';

    #[Validate('required|file|mimes:mp3,wav|max:10240')]
    public $audio = "";

    #[Validate('required|string|min:5')]
    public $description = '';
    public $img_path = "";
}
