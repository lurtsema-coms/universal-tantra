<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class VideoForm extends Form
{
    #[Validate('required|string|max:255')]
    public $title = '';

    #[Validate('required|file|mimetypes:video/mp4,video/quicktime,video/x-msvideo,video/x-ms-wmv|max:51200')]
    public $video = null;

    #[Validate('required|string|min:5')]
    public $description = '';
    
    #[Validate('required|image|max:2048')]
    public $img_path = null;
}
