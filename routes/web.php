<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/' , 'home');
Volt::route('/about' , 'about');
Volt::route('/libary' , 'libary');
Volt::route('/initiations' , 'initiations');
Volt::route('/events' , 'events');
Volt::route('/donate' , 'donate');
Volt::route('/login' , 'login');
Volt::route('/register' , 'register');
Volt::route('/booking' , 'booking');

Volt::route('/dashboard' , 'dashboard');
