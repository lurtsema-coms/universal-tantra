<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Validate('required')]
    public string $first_name = "";
    #[Validate('required')]
    public string $last_name = "";
    #[Validate('required|email|unique:users,email')]
    public string $email = "";
    #[Validate('required|min:8')]
    public string $password = "";
    #[Validate('accepted')]
    public bool $registerCheckbox = false;
}
