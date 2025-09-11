<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/' , 'home');
Volt::route('/about' , 'about');
Volt::route('/library' , 'library');
Volt::route('/initiations' , 'initiations');
Volt::route('/events' , 'events');
Volt::route('/donate' , 'donate');
Volt::route('/booking' , 'booking');
Volt::route('/forgot-password', 'forgot-password')->name('password.request');
Volt::route('/reset-password/{token}', 'reset-password')->name('password.reset');

Route::middleware(['auth', 'verified'])->group(function () {
    Volt::route('/dashboard' , 'dashboard');
    Volt::route('/admin-events' , 'admin/events');
    Volt::route('/admin-events/add' , 'admin/events-add');
    Volt::route('/admin-events/edit/{id}' , 'admin/events-edit');
    Volt::route('/admin-library' , 'admin/library');
    Volt::route('/admin-shop' , 'admin/shop');
    Volt::route('/admin-users' , 'admin/users');
    Volt::route('/admin-users/add' , 'admin/users-add');
});

Route::middleware('guest')->group(function () {
    Volt::route('/login' , 'login')->name('login');
    Volt::route('/register' , 'register');
});