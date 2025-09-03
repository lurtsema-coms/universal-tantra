<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class EventForm extends Form
{
    #[Validate('required|string|min:3')]
    public string $title = "";
    #[Validate('required|date')]
    public string $date = "";
    #[Validate('required|string|min:3')]
    public string $description = "";
    #[Validate('required|image|max:2048')]
    public $img_path = "";
}
