<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Login')] 
class extends Component {
    //
}; ?>

<div class="pt-20">
    <x-frontend.c-section gridGap="8">
        <x-frontend.c-header-lg 
            :class="'text-white text-shadow-lg sm:!text-center'" 
            :message="'Enter The Temple'" 
        />
        <form action="">
            <div class="grid gap-2 mx-auto max-w-sm">
                <x-frontend.c-input 
                    :placeholder="'Username'"
                    :id="'login-username'"
                />
                <x-frontend.c-input 
                    :placeholder="'Password'"
                    :id="'login-password'"
                    :type="'password'"
                />
                <x-frontend.c-checkbox 
                    :label="'Stay Logged In'"
                    :id="'login-checkbox'"
                />
                <x-frontend.c-button class="mt-4 w-full bg-gradient-to-b from-red-700 to-red-900" text="ENTER THE TEMPLE" />
                <a class="text-center text-white mt-4" href="">I forgot my password</a>
            </div>
        </form>
        <div class="my-4 w-full h-[1px] bg-white"></div>
        <x-frontend.c-header-md 
            :class="'text-white text-shadow-lg text-center'" 
            :message="'Don\'t you have an account?'" 
        />
        <x-frontend.c-button :link="'/register'" class="mx-auto mt-4 w-full max-w-sm bg-gradient-to-b from-yellow-500 to-yellow-900" text="CREATE AN ACCOUNT" />
    </x-frontend.c-section>
</div>
