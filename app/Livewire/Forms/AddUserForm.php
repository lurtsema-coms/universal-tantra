<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AddUserForm extends Form
{
    #[Validate('required|string')]
    public string $firstname = "";
    #[Validate('required|string')]
    public string $lastname = "";
    #[Validate('required|email')]
    public string $email = "";
    #[Validate('required|string')]
    public string $role = "";
}
