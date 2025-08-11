<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Register')] 
class extends Component {
    //
}; ?>

<div class="pt-20">
    <x-frontend.c-section gridGap="8">
        <x-frontend.c-header-lg 
            :class="'text-white text-shadow-lg sm:!text-center'" 
            :message="'Create an Account'" 
        />
        <form action="">
            <div class="grid grid-cols-2 gap-4 mx-auto max-w-xl">
                <x-frontend.c-input 
                    :placeholder="'First Name'"
                    :id="'register-fn'"
                />
                <x-frontend.c-input 
                    :placeholder="'Last Name'"
                    :id="'register-ln'"
                />
            </div>
            <div class="mt-2 grid gap-2 m-auto max-w-xl">
                <x-frontend.c-input 
                    :placeholder="'Email'"
                    :id="'register-email'"
                    :type="'email'"
                />
                <x-frontend.c-input 
                    :placeholder="'Password'"
                    :id="'register-password'"
                    type="'password'"
                />
                <div class="flex items-center gap-2">
                    <input id="login-checkbox" type="checkbox" class="my-2 h-5 w-5 bg-white rounded-md">
                    <label for="login-checkbox" class="relative -top-[.5px] text-white">I agree to the <span class="font-bold">Terms & Condition</span></label>
                </div>
                <x-frontend.c-button class="mx-auto mt-4 w-full max-w-sm bg-gradient-to-b from-yellow-500 to-yellow-900" text="JOIN NOW" />
            </div>
        </form>
        <br>
        <br>
    </x-frontend.c-section>
</div>
