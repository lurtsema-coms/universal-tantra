<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/' , 'home');
Volt::route('/events' , 'events');
Volt::route('/login' , 'login');
Volt::route('/register' , 'register');

Volt::route('/dashboard' , 'dashboard');
